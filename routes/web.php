<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('dashboard', 'HomeController@index')->name('dashboard');
Route::group(
    ['middleware' => 'auth'],
    function () {
        Route::get(
            'button',
            function () {
                return view('admin.button');
            }
        )->name('button');
        Route::get(
            'notifications',
            function () {
                return view('admin.notifications');
            }
        )->name('notifications');
        Route::get(
            'badges',
            function () {
                return view('admin.badges');
            }
        )->name('badges');
        Route::get(
            'tabs',
            function () {
                return view('admin.tabs');
            }
        )->name('tabs');
        Route::get(
            'socialButton',
            function () {
                return view('admin.socialButton');
            }
        )->name('socialButton');
        Route::get(
            'cards',
            function () {
                return view('admin.cards');
            }
        )->name('cards');
        Route::get(
            'alerts',
            function () {
                return view('admin.alerts');
            }
        )->name('alerts');
        Route::get(
            'bars',
            function () {
                return view('admin.bars');
            }
        )->name('bars');
        Route::get(
            'modals',
            function () {
                return view('admin.modals');
            }
        )->name('modals');
        Route::get(
            'switches',
            function () {
                return view('admin.switches');
            }
        )->name('switches');
        Route::get(
            'grids',
            function () {
                return view('admin.grids');
            }
        )->name('grids');
        Route::get(
            'typography',
            function () {
                return view('admin.typography');
            }
        )->name('typography');
        Route::get(
            'datatables',
            function () {
                return view('admin.datatables');
            }
        )->name('datatables');
        Route::get(
            'basictables',
            function () {
                return view('admin.basictables');
            }
        )->name('basictables');
        Route::get(
            'basicforms',
            function () {
                return view('admin.basicform');
            }
        )->name('basicform');
        Route::get(
            'advancedforms',
            function () {
                return view('admin.advancedform');
            }
        )->name('advancedform');
        Route::get(
            'fontAwesome',
            function () {
                return view('admin.fontawesome');
            }
        )->name('fontAwesome');
        Route::get(
            'themefy',
            function () {
                return view('admin.themify');
            }
        )->name('themefy');
        Route::get(
            'Widgets',
            function () {
                return view('admin.widgets');
            }
        )->name('Widgets');
        Route::get(
            'Chartjs',
            function () {
                return view('admin.chartjs');
            }
        )->name('Chartjs');
        Route::get(
            'FloatChart',
            function () {
                return view('admin.floatchart');
            }
        )->name('floatChart');
        Route::get(
            'peitychart',
            function () {
                return view('admin.peitychart');
            }
        )->name('peitychart');
        Route::get(
            'gmap',
            function () {
                return view('admin.gmap');
            }
        )->name('gmap');
        Route::get(
            'vectormap',
            function () {
                return view('admin.vectormap');
            }
        )->name('vectormap');
        Route::group(['prefix'=>'quanlyhethong'], function (){
            Route::group(['prefix'=>'menu'], function () {
                Route::get('index','QuanTriHeThong\Menu\MenuController@index')->name('QuanTriHeThong.Menu.Menu.index');
                Route::get('add','QuanTriHeThong\Menu\MenuController@create')->name('QuanTriHeThong.Menu.Menu.create');
                Route::get('detail/{id}','QuanTriHeThong\Menu\MenuController@show')->name('QuanTriHeThong.Menu.Menu.show');
                Route::post('store/{id}','QuanTriHeThong\Menu\MenuController@store')->name('QuanTriHeThong.Menu.Menu.store');
                Route::get('edit/{id}','QuanTriHeThong\Menu\MenuController@edit')->name('QuanTriHeThong.Menu.Menu.edit');
                Route::get('delete/{id}','QuanTriHeThong\Menu\MenuController@destroy')->name('QuanTriHeThong.Menu.Menu.destroy');
                Route::get('action/{id}','QuanTriHeThong\Menu\MenuActionController@getAction')->name('QuanTriHeThong.Menu.Menu.getAction');
            });
            Route::group(['prefix'=>'module'], function () {
                Route::get('index','QuanTriHeThong\Module\ModulesController@index')->name('QuanTriHeThong.Module.Modules.index');
                Route::get('add','QuanTriHeThong\Module\ModulesController@create')->name('QuanTriHeThong.Module.Modules.create');
                Route::post('store/{id}','QuanTriHeThong\Module\ModulesController@store')->name('QuanTriHeThong.Module.Modules.store');
                Route::get('edit/{id}','QuanTriHeThong\Module\ModulesController@edit')->name('QuanTriHeThong.Module.Modules.edit');
                Route::get('delete/{id}','QuanTriHeThong\Module\ModulesController@destroy')->name('QuanTriHeThong.Module.Modules.destroy');
            });
            Route::group(['prefix'=>'controller'], function () {
                Route::get('index','QuanTriHeThong\Controller\ControllersController@index')->name('QuanTriHeThong.Controller.Controllers.index');
                Route::get('add','QuanTriHeThong\Controller\ControllersController@create')->name('QuanTriHeThong.Controller.Controllers.create');
                Route::post('store/{id}','QuanTriHeThong\Controller\ControllersController@store')->name('QuanTriHeThong.Controller.Controllers.store');
                Route::get('edit/{id}','QuanTriHeThong\Controller\ControllersController@edit')->name('QuanTriHeThong.Controller.Controllers.edit');
                Route::get('delete/{id}','QuanTriHeThong\Controller\ControllersController@destroy')->name('QuanTriHeThong.Controller.Controllers.destroy');
            });
            Route::group(['prefix'=>'action'], function () {
                Route::get('index','QuanTriHeThong\Action\ActionsController@index')->name('QuanTriHeThong.Action.Actions.index');
                Route::get('add','QuanTriHeThong\Action\ActionsController@create')->name('QuanTriHeThong.Action.Actions.create');
                Route::post('store/{id}','QuanTriHeThong\Action\ActionsController@store')->name('QuanTriHeThong.Action.Actions.store');
                Route::get('edit/{id}','QuanTriHeThong\Action\ActionsController@edit')->name('QuanTriHeThong.Action.Actions.edit');
                Route::get('delete/{id}','QuanTriHeThong\Action\ActionsController@destroy')->name('QuanTriHeThong.Action.Actions.destroy');
                Route::get('controller/{id}','QuanTriHeThong\Action\dataController@getController');
            });
            Route::group(['prefix'=>'nhom'], function () {
                Route::get('index','QuanTriHeThong\Nhom\NhomsController@index')->name('QuanTriHeThong.Nhom.Nhoms.index');
                Route::get('add','QuanTriHeThong\Nhom\NhomsController@create')->name('QuanTriHeThong.Nhom.Nhoms.create');
                Route::post('store/{id}','QuanTriHeThong\Nhom\NhomsController@store')->name('QuanTriHeThong.Nhom.Nhoms.store');
                Route::get('edit/{id}','QuanTriHeThong\Nhom\NhomsController@edit')->name('QuanTriHeThong.Nhom.Nhoms.edit');
                Route::get('delete/{id}','QuanTriHeThong\Nhom\NhomsController@destroy')->name('QuanTriHeThong.Nhom.Nhoms.destroy');
            });
            Route::group(['prefix'=>'nguoidung'], function () {
                Route::get('index','QuanTriHeThong\Nguoidung\UserController@index')->name('QuanTriHeThong.Nguoidung.User.index');
                Route::get('add','QuanTriHeThong\Nguoidung\UserController@create')->name('QuanTriHeThong.Nguoidung.User.create');
                Route::post('store/{id}','QuanTriHeThong\Nguoidung\UserController@store')->name('QuanTriHeThong.Nguoidung.User.store');
                Route::get('edit/{id}','QuanTriHeThong\Nguoidung\UserController@edit')->name('QuanTriHeThong.Nguoidung.User.edit');
                Route::get('delete/{id}','QuanTriHeThong\Nguoidung\UserController@destroy')->name('QuanTriHeThong.Nguoidung.User.destroy');
            });
        });
    }
);

