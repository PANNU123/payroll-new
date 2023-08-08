<?php

namespace Modules\Section\Http\Middleware;

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

            // Sections
//            $menu->add('<i class="nav-icon fa-regular fa-sun"></i> '.__('Sections'), [
//                'route' => 'backend.sections.index',
//                'class' => 'nav-item',
//            ])
//            ->data([
//                'order'         => 77,
//                'activematches' => ['admin/sections*'],
//                'permission'    => ['view_sections'],
//            ])
//            ->link->attr([
//                'class' => 'nav-link',
//            ]);
        })->sortBy('order');

        return $next($request);
    }
}
