<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Collection;
 use Illuminate\Pagination\Paginator; 
 use Illuminate\Pagination\LengthAwarePaginator;
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
        //
        
         // Enable pagination
            if (!Collection::hasMacro('paginate')) {

                Collection::macro('paginate', 
                    function ($perPage = 15, $page = null, $options = []) {
                    $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
                    return (new LengthAwarePaginator(
                        $this->forPage($page, $perPage)->values()->all(), $this->count(), $perPage, $page, $options))
                        ->withPath('');
                });
            }
                /*
                    * use Illuminate\Support\Collection;
                    * use Illuminate\Pagination\LengthAwarePaginator;
                    *
                    * Paginate a standard Laravel Collection.
                    *
                    * @param int $perPage
                    * @param int $total
                    * @param int $page
                    * @param string $pageName
                    * @return array
                    */
                    // Collection::macro('paginate', function($perPage, $total = null, $page = null, $pageName = 'page') {
                    //     $page = $page ?: LengthAwarePaginator::resolveCurrentPage($pageName);
                    //     return new LengthAwarePaginator(
                    //         $this->forPage($page, $perPage),
                    //         $total ?: $this->count(),
                    //         $perPage,
                    //         $page,
                    //         [
                    //             'path' => LengthAwarePaginator::resolveCurrentPath(),
                    //             'pageName' => $pageName,
                    //         ]
                    //     );
                    // });
    }
}
