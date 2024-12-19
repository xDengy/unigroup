<?php

declare(strict_types=1);

namespace App\Orchid;

use Orchid\Platform\Dashboard;
use Orchid\Platform\ItemPermission;
use Orchid\Platform\OrchidServiceProvider;
use Orchid\Screen\Actions\Menu;
use Orchid\Support\Color;

class PlatformProvider extends OrchidServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @param Dashboard $dashboard
     *
     * @return void
     */
    public function boot(Dashboard $dashboard): void
    {
        parent::boot($dashboard);

        // ...
    }

    /**
     * Register the application menu.
     *
     * @return Menu[]
     */
    public function menu(): array
    {
        return [
            Menu::make('Страницы')
                ->route('platform.pages.list'),

            Menu::make('Блоки')
                ->route('platform.blocks.list'),

            Menu::make('Преимущества')
                ->route('platform.advantages.list'),

            Menu::make('Отзывы')
                ->route('platform.reviews.list'),

            Menu::make('Партнеры')
                ->route('platform.partners.list'),

            Menu::make('Бегущая строка')
                ->route('platform.marquees.list'),

            Menu::make('FAQ')
                ->route('platform.faqs.list'),

            Menu::make('Директор')
                ->route('platform.directors.list'),

            Menu::make('Меню')
                ->route('platform.menus.list'),

            Menu::make('Настройки')
                ->route('platform.settings.list'),

            Menu::make(__('Users'))
                ->icon('bs.people')
                ->route('platform.systems.users')
                ->permission('platform.systems.users')
                ->title(__('Access Controls')),

            Menu::make(__('Roles'))
                ->icon('bs.shield')
                ->route('platform.systems.roles')
                ->permission('platform.systems.roles')
                ->divider(),
        ];
    }

    /**
     * Register permissions for the application.
     *
     * @return ItemPermission[]
     */
    public function permissions(): array
    {
        return [
            ItemPermission::group(__('System'))
                ->addPermission('platform.systems.roles', __('Roles'))
                ->addPermission('platform.systems.users', __('Users')),
        ];
    }
}
