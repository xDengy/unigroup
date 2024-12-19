<?php

declare(strict_types=1);

    use App\Orchid\Screens\AdvantageEditScreen;
    use App\Orchid\Screens\AdvantageListScreen;
    use App\Orchid\Screens\BlockEditScreen;
    use App\Orchid\Screens\BlockListScreen;
    use App\Orchid\Screens\DirectorEditScreen;
    use App\Orchid\Screens\DirectorListScreen;
    use App\Orchid\Screens\Examples\ExampleScreen;
    use App\Orchid\Screens\FaqEditScreen;
    use App\Orchid\Screens\FaqListScreen;
    use App\Orchid\Screens\MarqueeEditScreen;
    use App\Orchid\Screens\MarqueeListScreen;
    use App\Orchid\Screens\MenuEditScreen;
    use App\Orchid\Screens\MenuListScreen;
    use App\Orchid\Screens\PartnerEditScreen;
    use App\Orchid\Screens\PartnerListScreen;
    use App\Orchid\Screens\PlatformScreen;
    use App\Orchid\Screens\ReviewEditScreen;
    use App\Orchid\Screens\ReviewListScreen;
    use App\Orchid\Screens\Role\RoleEditScreen;
use App\Orchid\Screens\Role\RoleListScreen;
    use App\Orchid\Screens\SettingEditScreen;
    use App\Orchid\Screens\SettingListScreen;
    use App\Orchid\Screens\User\UserEditScreen;
use App\Orchid\Screens\User\UserListScreen;
use App\Orchid\Screens\User\UserProfileScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

use App\Orchid\Screens\PageListScreen;
use App\Orchid\Screens\PageEditScreen;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the need "dashboard" middleware group. Now create something great!
|
*/

// Main
Route::screen('/main', PlatformScreen::class)
    ->name('platform.main');

// Platform > Profile
Route::screen('profile', UserProfileScreen::class)
    ->name('platform.profile')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Profile'), route('platform.profile')));

// Platform > System > Users > User
Route::screen('users/{user}/edit', UserEditScreen::class)
    ->name('platform.systems.users.edit')
    ->breadcrumbs(fn (Trail $trail, $user) => $trail
        ->parent('platform.systems.users')
        ->push($user->name, route('platform.systems.users.edit', $user)));

// Platform > System > Users > Create
Route::screen('users/create', UserEditScreen::class)
    ->name('platform.systems.users.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.systems.users')
        ->push(__('Create'), route('platform.systems.users.create')));

// Platform > System > Users
Route::screen('users', UserListScreen::class)
    ->name('platform.systems.users')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Users'), route('platform.systems.users')));

// Platform > System > Roles > Role
Route::screen('roles/{role}/edit', RoleEditScreen::class)
    ->name('platform.systems.roles.edit')
    ->breadcrumbs(fn (Trail $trail, $role) => $trail
        ->parent('platform.systems.roles')
        ->push($role->name, route('platform.systems.roles.edit', $role)));

// Platform > System > Roles > Create
Route::screen('roles/create', RoleEditScreen::class)
    ->name('platform.systems.roles.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.systems.roles')
        ->push(__('Create'), route('platform.systems.roles.create')));

// Platform > System > Roles
Route::screen('roles', RoleListScreen::class)
    ->name('platform.systems.roles')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Roles'), route('platform.systems.roles')));

// Example...
Route::screen('example', ExampleScreen::class)
    ->name('platform.example')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push('Example Screen'));

Route::screen('pages', PageListScreen::class)->name('platform.pages.list');
Route::screen('pages/{id}', PageEditScreen::class)->name('platform.pages.editItem');
Route::screen('pagesEdit', PageEditScreen::class)->name('platform.pages.edit');

Route::screen('menus', MenuListScreen::class)->name('platform.menus.list');
Route::screen('menus/{id}', MenuEditScreen::class)->name('platform.menus.editItem');
Route::screen('menusEdit', MenuEditScreen::class)->name('platform.menus.edit');

Route::screen('settings', SettingListScreen::class)->name('platform.settings.list');
Route::screen('settings/{id}', SettingEditScreen::class)->name('platform.settings.editItem');
Route::screen('settingsEdit', SettingEditScreen::class)->name('platform.settings.edit');

Route::screen('blocks', BlockListScreen::class)->name('platform.blocks.list');
Route::screen('blocks/{id}', BlockEditScreen::class)->name('platform.blocks.editItem');
Route::screen('blocksEdit', BlockEditScreen::class)->name('platform.blocks.edit');

Route::screen('advantages', AdvantageListScreen::class)->name('platform.advantages.list');
Route::screen('advantages/{id}', AdvantageEditScreen::class)->name('platform.advantages.editItem');
Route::screen('advantagesEdit', AdvantageEditScreen::class)->name('platform.advantages.edit');

Route::screen('reviews', ReviewListScreen::class)->name('platform.reviews.list');
Route::screen('reviews/{id}', ReviewEditScreen::class)->name('platform.reviews.editItem');
Route::screen('reviewsEdit', ReviewEditScreen::class)->name('platform.reviews.edit');

Route::screen('partners', PartnerListScreen::class)->name('platform.partners.list');
Route::screen('partners/{id}', PartnerEditScreen::class)->name('platform.partners.editItem');
Route::screen('partnersEdit', PartnerEditScreen::class)->name('platform.partners.edit');

Route::screen('marquees', MarqueeListScreen::class)->name('platform.marquees.list');
Route::screen('marquees/{id}', MarqueeEditScreen::class)->name('platform.marquees.editItem');
Route::screen('marqueesEdit', MarqueeEditScreen::class)->name('platform.marquees.edit');

Route::screen('faqs', FaqListScreen::class)->name('platform.faqs.list');
Route::screen('faqs/{id}', FaqEditScreen::class)->name('platform.faqs.editItem');
Route::screen('faqsEdit', FaqEditScreen::class)->name('platform.faqs.edit');

Route::screen('directors', DirectorListScreen::class)->name('platform.directors.list');
Route::screen('directors/{id}', DirectorEditScreen::class)->name('platform.directors.editItem');
Route::screen('directorsEdit', DirectorEditScreen::class)->name('platform.directors.edit');
