<?php

namespace App\Http\Middleware;

use Harimayco\Menu\Facades\Menu;
use Illuminate\Http\Request;
use Inertia\Middleware;
use Harimayco\Menu\Models\Menus;
use Harimayco\Menu\Models\MenuItems;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Defines the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function share(Request $request): array
    {
        return array_merge(parent::share($request), [

            'authCheck' => auth()->check(),
            'auth.user' => auth()->user(),
            'menu.header_menu' => Menu::getByName('header_menu'),
            'menu.footer_menu_1' => Menu::getByName('footer_menu_1'),
            'menu.footer_menu_2' => Menu::getByName('footer_menu_2'),
            'menu.footer_menu_3' => Menu::getByName('footer_menu_3'),
            'settings' => \App\Setting::first(),
        ]);
    }
}
