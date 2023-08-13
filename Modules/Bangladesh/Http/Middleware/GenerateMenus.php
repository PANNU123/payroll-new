<?php

namespace Modules\Bangladesh\Http\Middleware;

use Closure;

class GenerateMenus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /*
         *
         * Module Menu for Admin Backend
         *
         * *********************************************************************
         */
        \Menu::make('admin_sidebar', function ($menu) {

            // Bangladeshes
//            $menu->add('<i class="nav-icon fa-regular fa-sun"></i> '.__('Bangladeshes'), [
//                'route' => 'backend.bangladeshes.index',
//                'class' => 'nav-item',
//            ])
//            ->data([
//                'order'         => 77,
//                'activematches' => ['admin/bangladeshes*'],
//                'permission'    => ['view_bangladeshes'],
//            ])
//            ->link->attr([
//                'class' => 'nav-link',
//            ]);
        })->sortBy('order');

        return $next($request);
    }
}
