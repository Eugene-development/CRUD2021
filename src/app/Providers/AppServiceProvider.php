<?php

namespace App\Providers;

use App\Http\Contracts\Category;
use App\Http\Contracts\Head;
use App\Http\Contracts\Menu;
use App\Http\Contracts\Price;
use App\Http\Contracts\Product;
use App\Http\Contracts\Rubric;
use App\Http\Contracts\Seo;
use App\Http\Contracts\Size;
use App\Http\Contracts\Text;
use App\Http\Services\Factory\Category\CategoryRepository;
use App\Http\Services\Factory\Head\HeadRepository;
use App\Http\Services\Factory\Menu\MenuRepository;
use App\Http\Services\Factory\Price\PriceRepository;
use App\Http\Services\Factory\Product\ProductRepository;
use App\Http\Services\Factory\Rubric\RubricRepository;
use App\Http\Services\Factory\Seo\SeoRepository;
use App\Http\Services\Factory\Size\SizeRepository;
use App\Http\Services\Factory\Text\TextRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Menu::class, MenuRepository::class);
        $this->app->bind(Head::class, HeadRepository::class);
        $this->app->bind(Rubric::class, RubricRepository::class);
        $this->app->bind(Category::class, CategoryRepository::class);
        $this->app->bind(Product::class, ProductRepository::class);
        $this->app->bind(Seo::class, SeoRepository::class);
        $this->app->bind(Text::class, TextRepository::class);
        $this->app->bind(Size::class, SizeRepository::class);
        $this->app->bind(Price::class, PriceRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
