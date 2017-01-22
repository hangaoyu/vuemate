<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/16
 * Time: 13:39
 */

namespace App\Repositories\Blog;


use App\Facades\HelpFacades;


class ArticleRepository extends CommonRepository
{
    public static $accessor = 'article_repository';




    /**
     *
     * @return ArticleRepository
     */
    public static function getInstance()
    {
        return HelpFacades::getFacadeRootByAccessor( self::$accessor );
    }



}