<?php

namespace App\Http\Middleware;

use Closure;

class GenerateMenus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        \Menu::make('admin_sidebar', function ($menu) {
            // Dashboard
            $menu->add('<i class="nav-icon fa-solid fa-cubes"></i> '.__('Dashboard'), [
                'route' => 'backend.dashboard',
                'class' => 'nav-item',
            ])
                ->data([
                    'order' => 1,
                    'activematches' => 'admin/dashboard*',
                ])
                ->link->attr([
                    'class' => 'nav-link',
                ]);

            // Notifications
//            $menu->add('<i class="nav-icon fas fa-bell"></i> Notifications', [
//                'route' => 'backend.notifications.index',
//                'class' => 'nav-item',
//            ])
//                ->data([
//                    'order' => 99,
//                    'activematches' => 'admin/notifications*',
//                    'permission' => [],
//                ])
//                ->link->attr([
//                    'class' => 'nav-link',
//                ]);

            // Separator: Access Management
            $menu->add('Management', [
                'class' => 'nav-title',
            ])
                ->data([
                    'order' => 101,
                    'permission' => ['edit_settings', 'view_backups', 'view_users', 'view_roles', 'view_logs'],
                ]);

            // Settings
            $menu->add('<i class="nav-icon fas fa-cogs"></i> Settings', [
                'route' => 'backend.settings',
                'class' => 'nav-item',
            ])
                ->data([
                    'order' => 102,
                    'activematches' => 'admin/settings*',
                    'permission' => ['edit_settings'],
                ])
                ->link->attr([
                    'class' => 'nav-link',
                ]);

            // Backup
            $menu->add('<i class="nav-icon fas fa-archive"></i> Backups', [
                'route' => 'backend.backups.index',
                'class' => 'nav-item',
            ])
                ->data([
                    'order' => 103,
                    'activematches' => 'admin/backups*',
                    'permission' => ['view_backups'],
                ])
                ->link->attr([
                    'class' => 'nav-link',
                ]);

            // Access Control Dropdown
            $accessControl = $menu->add('<i class="nav-icon fa-solid fa-user-gear"></i> Access Control', [
                'class' => 'nav-group',
            ])
                ->data([
                    'order' => 104,
                    'activematches' => [
                        'admin/users*',
                        'admin/roles*',
                    ],
                    'permission' => ['view_users', 'view_roles'],
                ]);
            $accessControl->link->attr([
                'class' => 'nav-link nav-group-toggle',
                'href' => '#',
            ]);

            // Submenu: Users
            $accessControl->add('<i class="nav-icon fa-solid fa-user-group"></i> Users', [
                'route' => 'backend.users.index',
                'class' => 'nav-item',
            ])
                ->data([
                    'order' => 105,
                    'activematches' => 'admin/users*',
                    'permission' => ['view_users'],
                ])
                ->link->attr([
                    'class' => 'nav-link',
                ]);

            // Submenu: Roles
            $accessControl->add('<i class="nav-icon fa-solid fa-user-shield"></i> Roles', [
                'route' => 'backend.roles.index',
                'class' => 'nav-item',
            ])
                ->data([
                    'order' => 106,
                    'activematches' => 'admin/roles*',
                    'permission' => ['view_roles'],
                ])
                ->link->attr([
                    'class' => 'nav-link',
                ]);

            // Manage Employee
            $accessControl = $menu->add('<i class="nav-icon fa-solid fa-user-gear"></i> Manage People', [
                'class' => 'nav-group',
            ])
                ->data([
                    'order' => 2,
                    'activematches' => [
                        'admin/users*',
                        'admin/roles*',
                    ],
                    'permission' => ['view_users', 'view_roles'],
                ]);
            $accessControl->link->attr([
                'class' => 'nav-link nav-group-toggle',
                'href' => '#',
            ]);

            // Submenu: Users
            $accessControl->add('<i class="nav-icon fa-solid fa-user-group"></i> Manage Employee', [
                'route' => 'backend.manageemployees.index',
                'class' => 'nav-item',
            ])
                ->data([
                    'order'         => 77,
                    'activematches' => ['admin/manageemployees*'],
                    'permission'    => ['view_manageemployees'],
                ])
                ->link->attr([
                    'class' => 'nav-link',
                ]);

            // Submenu: Roles
            $accessControl->add('<i class="nav-icon fa-solid fa-user-shield"></i> Manage Reference', [
                'route' => 'backend.managereferences.index',
                'class' => 'nav-item',
            ])
                ->data([
                    'order'         => 77,
                    'activematches' => ['admin/managereferences*'],
                    'permission'    => ['view_managereferences'],
                ])
                ->link->attr([
                    'class' => 'nav-link',
                ]);
            // Manage Employee
            $accessControl = $menu->add('<i class="nav-icon fa-solid fa-user-gear"></i> Manage Company', [
                'class' => 'nav-group',
            ])
                ->data([
                    'order' => 2,
                    'activematches' => [
                        'admin/users*',
                        'admin/roles*',
                    ],
                    'permission' => ['view_users', 'view_roles'],
                ]);
            $accessControl->link->attr([
                'class' => 'nav-link nav-group-toggle',
                'href' => '#',
            ]);

            // Submenu: Users
            $accessControl->add('<i class="nav-icon fa-solid fa-user-group"></i> Group Company', [
                'route' => 'backend.groupcompanies.index',
                'class' => 'nav-item',
            ])
                ->data([
                    'order'         => 77,
                    'activematches' => ['admin/groupcompanies*'],
                    'permission'    => ['view_groupcompanies'],
                ])
                ->link->attr([
                    'class' => 'nav-link',
                ]);

            // Submenu: Roles
            $accessControl->add('<i class="nav-icon fa-solid fa-user-shield"></i> Company', [
                'route' => 'backend.companies.index',
                'class' => 'nav-item',
            ])
                ->data([
                    'order'         => 77,
                    'activematches' => ['admin/companies*'],
                    'permission'    => ['view_companies'],
                ])
                ->link->attr([
                    'class' => 'nav-link',
                ]);


            // Configuration
            $accessControl = $menu->add('<i class="nav-icon fa-solid fa-user-gear"></i> Configuration', [
                'class' => 'nav-group',
            ])
                ->data([
                    'order' => 4,
                    'activematches' => [
                        'admin/users*',
                        'admin/roles*',
                    ],
                    'permission' => ['view_users', 'view_roles'],
                ]);
            $accessControl->link->attr([
                'class' => 'nav-link nav-group-toggle',
                'href' => '#',
            ]);

            // Submenu: Users
            $accessControl->add('<i class="nav-icon fa-solid fa-user-group"></i> Religion', [
                'route' => 'backend.religions.index',
                'class' => 'nav-item',
            ])
                ->data([
                    'order'         => 77,
                    'activematches' => ['admin/religions*'],
                    'permission'    => ['view_religions'],
                ])
                ->link->attr([
                    'class' => 'nav-link',
                ]);


            $accessControl->add('<i class="nav-icon fa-solid fa-user-shield"></i> Manage Section', [
                'route' => 'backend.sections.index',
                'class' => 'nav-item',
            ])
                ->data([
                    'order'         => 77,
                    'activematches' => ['admin/sections*'],
                    'permission'    => ['view_sections'],
                ])
                ->link->attr([
                    'class' => 'nav-link',
                ]);
            $accessControl->add('<i class="nav-icon fa-solid fa-user-shield"></i> Manage Location', [
                'route' => 'backend.locations.index',
                'class' => 'nav-item',
            ])
                ->data([
                    'order'         => 77,
                    'activematches' => ['admin/locations*'],
                    'permission'    => ['view_locations'],
                ])
                ->link->attr([
                    'class' => 'nav-link',
                ]);

            // Submenu: Users
            $accessControl->add('<i class="nav-icon fa-solid fa-user-group"></i> Manage Shift', [
                'route' => 'backend.manageshifts.index',
                'class' => 'nav-item',
            ])
                ->data([
                    'order'         => 77,
                    'activematches' => ['admin/manageshifts*'],
                    'permission'    => ['view_manageshifts'],
                ])
                ->link->attr([
                    'class' => 'nav-link',
                ]);

            // Submenu: Roles
            $accessControl->add('<i class="nav-icon fa-solid fa-user-shield"></i> Manage Designation', [
                'route' => 'backend.managedesignations.index',
                'class' => 'nav-item',
            ])
                ->data([
                    'order'         => 77,
                    'activematches' => ['admin/managedesignations*'],
                    'permission'    => ['view_managedesignations'],
                ])
                ->link->attr([
                    'class' => 'nav-link',
                ]);

            $accessControl->add('<i class="nav-icon fa-solid fa-user-shield"></i> Manage Department', [
                'route' => 'backend.managedepartments.index',
                'class' => 'nav-item',
            ])
                ->data([
                    'order'         => 77,
                    'activematches' => ['admin/managedepartments*'],
                    'permission'    => ['view_managedepartments'],
                ])
                ->link->attr([
                    'class' => 'nav-link',
                ]);

            $accessControl->add('<i class="nav-icon fa-solid fa-user-shield"></i> Manage Titles', [
                'route' => 'backend.titles.index',
                'class' => 'nav-item',
            ])
                ->data([
                    'order'         => 77,
                    'activematches' => ['admin/titles*'],
                    'permission'    => ['view_titles'],
                ])
                ->link->attr([
                    'class' => 'nav-link',
                ]);

            $accessControl->add('<i class="nav-icon fa-solid fa-user-shield"></i> Leave Category', [
                'route' => 'backend.leavecategories.index',
                'class' => 'nav-item',
            ])
                ->data([
                    'order'         => 77,
                    'activematches' => ['admin/leavecategories*'],
                    'permission'    => ['view_leavecategories'],
                ])
                ->link->attr([
                    'class' => 'nav-link',
                ]);

            $accessControl->add('<i class="nav-icon fa-solid fa-user-shield"></i> Manage Bank', [
                'route' => 'backend.banks.index',
                'class' => 'nav-item',
            ])
                ->data([
                    'order'         => 77,
                    'activematches' => ['admin/banks*'],
                    'permission'    => ['view_banks'],
                ])
                ->link->attr([
                    'class' => 'nav-link',
                ]);

            $accessControl->add('<i class="nav-icon fa-solid fa-user-shield"></i> Working Statuses', [
                'route' => 'backend.workingstatuses.index',
                'class' => 'nav-item',
            ])
                ->data([
                    'order'         => 77,
                    'activematches' => ['admin/workingstatuses*'],
                    'permission'    => ['view_workingstatuses'],
                ])
                ->link->attr([
                    'class' => 'nav-link',
                ]);

            $accessControl->add('<i class="nav-icon fa-solid fa-user-shield"></i> Set Working Day', [
                'route' => 'backend.setworkingdays.index',
                'class' => 'nav-item',
            ])
                ->data([
                    'order'         => 77,
                    'activematches' => ['admin/setworkingdays*'],
                    'permission'    => ['view_setworkingdays'],
                ])
                ->link->attr([
                    'class' => 'nav-link',
                ]);

            $accessControl->add('<i class="nav-icon fa-solid fa-user-shield"></i> Manage Holiday', [
                'route' => 'backend.manageholidays.index',
                'class' => 'nav-item',
            ])
                ->data([
                    'order'         => 77,
                    'activematches' => ['admin/manageholidays*'],
                    'permission'    => ['view_manageholidays'],
                ])
                ->link->attr([
                    'class' => 'nav-link',
                ]);

            $accessControl->add('<i class="nav-icon fa-solid fa-user-shield"></i>ZK Settings', [
                'route' => 'backend.managezksettings.index',
                'class' => 'nav-item',
            ])
                ->data([
                    'order'         => 77,
                    'activematches' => ['admin/managezksettings*'],
                    'permission'    => ['view_managezksettings'],
                ])
                ->link->attr([
                    'class' => 'nav-link',
                ]);


            // Log Viewer
            // Log Viewer Dropdown
            $accessControl = $menu->add('<i class="nav-icon fa-solid fa-list-check"></i> Log Viewer', [
                'class' => 'nav-group',
            ])
                ->data([
                    'order' => 107,
                    'activematches' => [
                        'log-viewer*',
                    ],
                    'permission' => ['view_logs'],
                ]);
            $accessControl->link->attr([
                'class' => 'nav-link nav-group-toggle',
                'href' => '#',
            ]);

            // Submenu: Log Viewer Dashboard
            $accessControl->add('<i class="nav-icon fa-solid fa-list"></i> Dashboard', [
                'route' => 'log-viewer::dashboard',
                'class' => 'nav-item',
            ])
                ->data([
                    'order' => 108,
                    'activematches' => 'admin/log-viewer',
                ])
                ->link->attr([
                    'class' => 'nav-link',
                ]);

            // Submenu: Log Viewer Logs by Days
            $accessControl->add('<i class="nav-icon fa-solid fa-list-ol"></i> Logs by Days', [
                'route' => 'log-viewer::logs.list',
                'class' => 'nav-item',
            ])
                ->data([
                    'order' => 109,
                    'activematches' => 'admin/log-viewer/logs*',
                ])
                ->link->attr([
                    'class' => 'nav-link',
                ]);

            // Access Permission Check
            $menu->filter(function ($item) {
                if ($item->data('permission')) {
                    if (auth()->check()) {
                        if (auth()->user()->hasRole('super admin')) {
                            return true;
                        } elseif (auth()->user()->hasAnyPermission($item->data('permission'))) {
                            return true;
                        }
                    }

                    return false;
                } else {
                    return true;
                }
            });

            // Set Active Menu
            $menu->filter(function ($item) {
                if ($item->activematches) {
                    $activematches = (is_string($item->activematches)) ? [$item->activematches] : $item->activematches;
                    foreach ($activematches as $pattern) {
                        if (request()->is($pattern)) {
                            $item->active();
                            $item->link->active();
                            if ($item->hasParent()) {
                                $item->parent()->active();
                            }
                        }
                    }
                }

                return true;
            });
        })->sortBy('order');

        return $next($request);
    }
}
