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

Auth::routes(['register' => false]);

//Route::get('/', function () {
//	return view('auth.login');
//});

Route::get('/', 'Auth\LoginController@showLoginForm');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('user', 'UserController');

Route::resource('client', 'ClientController');

Route::get('/work/progress', 'WorkQueueController@workprogress')->name('work.progress');

Route::resource('work', 'WorkQueueController');

Route::get('/db', function () {
	return view('pages.dashboard');
});

Route::get('/db2', function () {
	return view('pages.dashboard2');
});

Route::get('/db3', function () {
	return view('pages.dashboard3');
});

Route::get('/db4', function () {
	return view('pages.dashboard4');
});

Route::get('/db5', function () {
	return view('pages.dashboard5');
});

Route::get('/accordion', function () {
	return view('pages.elem-accordion');
});

Route::get('/alerts', function () {
	return view('pages.elem-alerts');
});

Route::get('/buttons', function () {
	return view('pages.elem-buttons');
});

Route::get('/cards', function () {
	return view('pages.elem-cards');
});

Route::get('/carousel', function () {
	return view('pages.elem-carousel');
});

Route::get('/dropdowns', function () {
	return view('pages.elem-accordion');
});

Route::get('/icons', function () {
	return view('pages.elem-icons');
});

Route::get('/images', function () {
	return view('pages.elem-images');
});

Route::get('/lists', function () {
	return view('pages.elem-lists');
});

Route::get('/modal', function () {
	return view('pages.elem-modal');
});

Route::get('/media', function () {
	return view('pages.elem-media');
});

Route::get('/navigation', function () {
	return view('pages.elem-navigation');
});

Route::get('/pagination', function () {
	return view('pages.elem-pagination');
});
Route::get('/tooltip', function () {
	return view('pages.elem-tooltip');
});

Route::get('/popover', function () {
	return view('pages.elem-popover');
});
Route::get('/progress', function () {
	return view('pages.elem-progress');
});

Route::get('/spinner', function () {
	return view('pages.elem-spinner');
});
Route::get('/typography', function () {
	return view('pages.elem-typography');
});

Route::get('/morris', function () {
	return view('pages.chart-morris');
});

Route::get('/flot', function () {
	return view('pages.chart-flot');
});
Route::get('/chartjs', function () {
	return view('pages.chart-chartjs');
});

Route::get('/echarts', function () {
	return view('pages.chart-echarts');
});

Route::get('/chartist', function () {
	return view('pages.chart-chartist');
});
Route::get('/rickshaw', function () {
	return view('pages.chart-rickshaw');
});
Route::get('/sparkline', function () {
	return view('pages.chart-sparkline');
});

Route::get('/peity', function () {
	return view('pages.chart-peity');
});

Route::get('/google', function () {
	return view('pages.map-accordion');
});
Route::get('/leaflet', function () {
	return view('pages.map-accordion');
});

Route::get('/vector', function () {
	return view('pages.map-accordion');
});

Route::get('/basic', function () {
	return view('pages.table-basic');
});
Route::get('/datatable', function () {
	return view('pages.table-datatable');
});

Route::get('/util_background', function () {
	return view('pages.util-background');
});
Route::get('/util_border', function () {
	return view('pages.util-border');
});
Route::get('/util_height', function () {
	return view('pages.util-height');
});

Route::get('/util_margin', function () {
	return view('pages.util-margin');
});
Route::get('/util_padding', function () {
	return view('pages.util-padding');
});
Route::get('/util_position', function () {
	return view('pages.util-position');
});

Route::get('/util_typography', function () {
	return view('pages.util-typography');
});
Route::get('/util_width', function () {
	return view('pages.util-width');
});


Route::get('/page_profile', function () {
	return view('pages.page-profile');
});

Route::get('/page_invoice', function () {
	return view('pages.page-invoice');
});
Route::get('/page_contact', function () {
	return view('pages.page-contact');
});
Route::get('/page_file_manager', function () {
	return view('pages.page-file-manager');
});

Route::get('/page_calendar', function () {
	return view('pages.page-calendar');
});
Route::get('/page_timeline', function () {
	return view('pages.page-timeline');
});

Route::get('/page_pricing', function () {
	return view('pages.page-pricing');
});

Route::get('/page_pricing2', function () {
	return view('pages.page-pricing2');
});
Route::get('/page_pricing3', function () {
	return view('pages.page-pricing3');
});

//Route::get('/page_signin', function () {
//	return view('pages.page-signin');
//});

Route::get('/page_signin2', function () {
	return view('pages.page-signin2');
});
Route::get('/page_signup', function () {
	return view('pages.page-signup');
});
Route::get('/page_signup2', function () {
	return view('pages.page-signup2');
});

Route::get('/page_404', function () {
	return view('pages.page-404');
});

Route::get('/page_505', function () {
	return view('pages.page-505');
});
Route::get('/page_500', function () {
	return view('pages.page-500');
});
Route::get('/page_503', function () {
	return view('pages.page-503');
});

Route::get('/form_elements', function () {
	return view('pages.form-elements');
});

Route::get('/form_layouts', function () {
	return view('pages.form-layouts');
});

Route::get('/form_validation', function () {
	return view('pages.form-validation');
});

Route::get('/form_wizards', function () {
	return view('pages.form-wizards');
});

Route::get('/form_', function () {
	return view('pages.form-503');
});

Route::get('/form_editor', function () {
	return view('pages.form-editor');
});

Route::get('/form_select2', function () {
	return view('pages.form-select2');
});

Route::get('/form_rangeslider', function () {
	return view('pages.form-rangeslider');
});

Route::get('/form_datepicker', function () {
	return view('pages.form-datepicker');
});

Route::get('/page_messages', function () {
	return view('pages.page-messages');
});

Route::get('/widgets', function () {
	return view('pages.widgets');
});

