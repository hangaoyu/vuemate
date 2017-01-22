<?php

namespace App\Providers;

use App\Repositories\ArticleRepository;
use Illuminate\Support\ServiceProvider;


class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // 合并自定义配置文件
        $configuration = realpath(__DIR__ . '/../../config/repository.php');
        $this->mergeConfigFrom($configuration, 'repository');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerBlogRepository();

    }

    public function registerBlogRepository()
    {


        $this->app->singleton(ArticleRepository::$accessor, function ($app) {
            $modelName = config('repository.models.blog.article');
            $model = new $modelName();
            $validator = $app['validator'];
            return new ArticleRepository($model, $validator);
        });
    }


}
