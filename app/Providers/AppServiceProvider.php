<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Category;
use App\Slide;
use App\Article;
use App\Ad;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        view()->share('categories', $this->getListCategoriesWithChildren());
        view()->share('sliders', $this->getSliders());
        view()->share('mostViews', $this->getMostViews());
        view()->share('videos', $this->getVides());
        view()->share('ad', $this->getAd());
    }

    private function getListCategoriesWithChildren()
    {
        if (Schema::hasTable('categories')) {
            return Category::with('children')->where([
                ['parent_id', 0],
                ['visibility', 1]
            ])->orderby('order')->take(5)->get();

        } else {
            return null;
        }
    }

    private function getSliders()
    {
        if (Schema::hasTable('slides')) {
            return Slide::orderby('order')->where('visibility', 1)->get();
        } else {
            return null;
        }
    }

    private function getMostViews()
    {
        if (Schema::hasTable('articles')) {
            return Article::with('category')->where('cat_id', '!=', '4')->orderby('view', 'desc')->take(3)->get();
        } else {
            return null;
        }
    }

    private function getVides()
    {
        if (Schema::hasTable('articles')) {
            return Article::where('cat_id', '4')->orderby('created_at', 'desc')->take(4)->get();
        } else {
            return null;
        }
    }

    private function getAd()
    {
        if (Schema::hasTable('ads')) {
            return Ad::inRandomOrder()->first();
        } else {
            return null;
        }
    }
}
