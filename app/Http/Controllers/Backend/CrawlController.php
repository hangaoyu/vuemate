<?php

namespace App\Http\Controllers\Backend;


use App\Article;
use App\Discussion;
use App\Markdown\Markdown;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redis;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\VarDumper\Dumper\DataDumperInterface;

class CrawlController extends Controller
{
    protected $markdown;

    public function __construct(Markdown $markdown, Request $request)
    {
        $this->markdown = $markdown;


    }


    public function markdown()
    {
        $discussion = Discussion::findorfail(41);
//        dd($discussion->body);
        $html = $this->markdown->markdown($discussion->body);
        $discussion['html'] = $html;
        return $discussion;
    }

    //
    public function collection()
    {

        $url = "http://www.jianshu.com/recommendations/collections";
        $fcontents = file_get_contents($url);
        $crawler = new Crawler($fcontents);
        $collecitons = $crawler->filter('.col-xs-8')->each(function (Crawler $node, $i) {
            $href = $node->filter('.avatar-collection')->attr('href');
            return $href;
        });
        $collecitons = collect($collecitons);
        Cache::forever('collection', $collecitons);
        $value = Cache::get('collection');
        dd($value);
    }


    public function crawl()
    {
//        $this->getJianShu();
        $this->getDouban();
    }

    public function getJianShu()
    {
        $collections = Cache::get('collection');
        collect($collections)->map(function ($collection) {
            $url = "http://www.jianshu.com" . $collection;
            $fcontents = $this->getDom($url);
            $crawler = new Crawler($fcontents);
            $article = $crawler->filter('.note-list .have-img')->each(function (Crawler $node, $i) use ($collection) {
                $note['id'] = $node->filter('li')->attr('data-note-id');
                $key_name = 'jianshu' . $note['id'];
                $note['img'] = $node->filter('.wrap-img img')->attr('src');
                $note['url'] = $node->filter('.wrap-img')->attr('href');
                $note['author'] = $node->filter('.content .author .name a')->text();
                $note['title'] = $node->filter('.content .title')->text();
                $note['abstract'] = $node->filter('.content .abstract')->text();
                $article_url = 'http://www.jianshu.com' . $note['url'];
                $fcontents = $this->getDom($article_url);
                $article_crawler = new Crawler($fcontents);
//            $note['article'] = $article_crawler->filter('.article')->html();
                Redis::hmset($key_name, array('id' => $note['id'], 'title' => $note['title'], 'author' => $note['author']));
                Redis::sadd($key_name . ':tag', $collection);
                Redis::sadd($collection . ':tag', $note['id']);
            });
        });
    }

    public function getDouban()
    {
//        shell*************
//        for ((i = 0;i < 170;i = i + 25));
//do
//if [["$i" - lt 150 ]]; then
//    echo $(curl "https://movie.douban.com/top250?start="$i | grep v:average | grep - o [0 - 9]\.[0 - 9] | awk '{total+=$1}END{print total}');
//else
//    echo $(curl "https://movie.douban.com/top250?start="$i | grep v:average | head - 16 | grep - o [0 - 9]\.[0 - 9] | awk '{total+=$1}END{print total}')
//fi
//done | awk '{total+=$1}END{print total}'
        $all = [];
        foreach (range(1, 7) as $v) {
            $url = sprintf("https://movie.douban.com/top250?start=%d", (int)($v - 1) * 25);
            preg_match_all('%<span class="rating_num" property="v:average">(.*?)</span>%', file_get_contents($url), $match);
            $all = array_merge($all, $match[1]);
        }
        echo array_sum(array_slice($all, 0, 166));

    }

    public function db()
    {
        $articles = Article::all();
        return $articles;

    }

    public function redis()
    {
        $types = Redis::smembers('/c/NEt52a:tag');
        $articles = [];
        foreach ($types as $key => $value) {
            $article = Redis::hmget('jianshu' . $value, array('title', 'author'));
            $articles[] = ['title' => $article[0], 'author' => $article[1]];
        }


        return $articles;

    }

    public function getDom($url)
    {

        $ch = curl_init($url);
        //初始化会话
        curl_setopt($ch, CURLOPT_HEADER, 0);
        //设置请求COOKIE
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        //将curl_exec()获取的信息以文件流的形式返回，而不是直接输出。
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        $result = curl_exec($ch);
        return $result;  //抓取的结果
    }

    public function qlm(Request $request){

        $a = $request->get('a');
        $b = $request->get('b');
        return $a + $b;
    }
}

