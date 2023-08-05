<?php

namespace Modules\TaskManagement\Http\Middleware;

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

            // TaskManagements
            $menu->add('<i class="nav-icon fa-regular fa-sun"></i> '.__('Task Managements'), [
                'route' => 'backend.taskmanagements.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 3,
                'activematches' => ['admin/taskmanagements*'],
                'permission'    => ['view_taskmanagements'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
        })->sortBy('order');

        return $next($request);
    }
}
