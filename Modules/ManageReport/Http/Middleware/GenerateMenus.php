<?php

namespace Modules\ManageReport\Http\Middleware;

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

            // ManageReports
            $menu->add('<i class="nav-icon fa-regular fa-sun"></i> '.__('Reports Management'), [
                'route' => 'backend.managereports.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 3,
                'activematches' => ['admin/managereports*'],
                'permission'    => ['view_managereports'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
        })->sortBy('order');

        return $next($request);
    }
}
