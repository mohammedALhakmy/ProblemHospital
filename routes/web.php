<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\OTPController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('Dashboard.livewire.signin');
//});

//Route::get('index',function (){
//    return view('dashboard');
//});

Route::resource('verify',OTPController::class)->middleware('auth');


Route::get('sdashboard', function () {
    return view('Dashboard.index');
})->middleware(['auth', 'verified', 'TOPFactor'])->name('dashboard');


//Route::get('otp',[DashboardController::class,'show']);
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




Route::get('about', function () {
    return view('livewire.about');
});

//Route::get('/index', function () {
//    return view('livewire.index');
//});
//
//Route::get('/dashboard', function () {
//    return view('livewire.index');
//});
Route::get('accordion', function () {
    return view('livewire.accordion');
});
Route::get('alerts', function () {
    return view('livewire.alerts');
});
Route::get('avatar', function () {
    return view('livewire.avatar');
});
Route::get('signin', function () {
    return view('livewire.signin');
});
Route::get('background',function(){
    return view('livewire.background');
});
Route::get('badge', function () {
    return view('livewire.badge');
});
Route::get('blog', function () {
    return view('livewire.blog');
});
Route::get('blog-details', function () {
    return view('livewire.blog-details');
});
Route::get('border', function () {
    return view('livewire.border');
});
Route::get('breadcrumbs', function () {
    return view('livewire.breadcrumbs');
});
Route::get('buttons', function () {
    return view('livewire.buttons');
});
Route::get('calendar', function () {
    return view('livewire.calendar');
});
Route::get('cards', function () {
    return view('livewire.cards');
});
Route::get('carousel', function () {
    return view('livewire.carousel');
});
Route::get('chart-chartjs', function () {
    return view('livewire.chart-chartjs');
});
Route::get('chart-echart', function () {
    return view('livewire.chart-echart');
});
Route::get('chart-flot', function () {
    return view('livewire.chart-flot');
});
Route::get('chart-morris', function () {
    return view('livewire.chart-morris');
});
Route::get('chart-peity', function () {
    return view('livewire.chart-peity');
});
Route::get('chart-sparkline', function () {
    return view('livewire.chart-sparkline');
});
Route::get('chat', function () {
    return view('livewire.chat');
});
Route::get('check-out', function () {
    return view('livewire.check-out');
});
Route::get('collapse', function () {
    return view('livewire.collapse');
});
Route::get('contacts', function () {
    return view('livewire.contacts');
});
Route::get('counters', function () {
    return view('livewire.counters');
});
Route::get('draggablecards', function () {
    return view('livewire.draggablecards');
});
Route::get('display', function () {
    return view('livewire.display');
});
Route::get('dropdown', function () {
    return view('livewire.dropdown');
});
Route::get('edit-post', function () {
    return view('livewire.edit-post');
});
Route::get('edit-profile', function () {
    return view('livewire.edit-post');
});
Route::get('edit-table', function () {
    return view('livewire.edit-post');
});
Route::get('empty-page', function () {
    return view('livewire.empty-page');
});
Route::get('error404', function () {
    return view('livewire.error404');
});
Route::get('error500', function () {
    return view('livewire.error500');
});
Route::get('error501', function () {
    return view('livewire.error501');
});
Route::get('extras', function () {
    return view('livewire.extras');
});
Route::get('faq', function () {
    return view('livewire.faq');
});
Route::get('file-attachments', function () {
    return view('livewire.file-attachments');
});
Route::get('filemanager-details', function () {
    return view('livewire.filemanager-details');
});
Route::get('filemanager', function () {
    return view('livewire.filemanager');
});
Route::get('filemanager-list', function () {
    return view('livewire.filemanager-list');
});
Route::get('flex', function () {
    return view('livewire.flex');
});

Route::get('form-advanced', function () {
    return view('Dashboard.livewire.form-advanced');
});
Route::get('form-editor', function () {
    return view('livewire.form-editor');
});
Route::get('form-elements', function () {
    return view('livewire.form-elements');
});
Route::get('form-layouts', function () {
    return view('livewire.form-layouts');
});
Route::get('form-sizes', function () {
    return view('livewire.form-sizes');
});
Route::get('form-validation', function () {
    return view('livewire.form-validation');
});
Route::get('form-wizards', function () {
    return view('livewire.form-wizards');
});
Route::get('gallery', function () {
    return view('livewire.gallery');
});
Route::get('height', function () {
    return view('livewire.height');
});
Route::get('icons', function () {
    return view('livewire.icons');
});
Route::get('icons2', function () {
    return view('livewire.icons2');
});
Route::get('icons3', function () {
    return view('livewire.icons3');
});
Route::get('icons4', function () {
    return view('livewire.icons4');
});
Route::get('icons5', function () {
    return view('livewire.icons5');
});
Route::get('icons6', function () {
    return view('livewire.icons6');
});
Route::get('icons7', function () {
    return view('livewire.icons7');
});
Route::get('icons8', function () {
    return view('livewire.icons8');
});
Route::get('icons9', function () {
    return view('livewire.icons9');
});
Route::get('icons10', function () {
    return view('livewire.icons10');
});
Route::get('icons11', function () {
    return view('livewire.icons11');
});
Route::get('icons12', function () {
    return view('livewire.icons12');
});
Route::get('image-compare', function () {
    return view('livewire.image-compare');
});
Route::get('images', function () {
    return view('livewire.images');
});
Route::get('invoice', function () {
    return view('livewire.invoice');
});
Route::get('landing-page', function () {
    return view('livewire.landing-page');
});
Route::get('list-group', function () {
    return view('livewire.list-group');
});
Route::get('lockscreen', function () {
    return view('livewire.lockscreen');
});
Route::get('mail-compose', function () {
    return view('livewire.mail-compose');
});
Route::get('mail-read', function () {
    return view('livewire.mail-read');
});
Route::get('mail-settings', function () {
    return view('livewire.mail-settings');
});
Route::get('mail', function () {
    return view('livewire.mail');
});
Route::get('map-leaflet', function () {
    return view('livewire.map-leaflet');
});
Route::get('map-vector', function () {
    return view('livewire.map-vector');
});
Route::get('margin', function () {
    return view('livewire.margin');
});
Route::get('media-object', function () {
    return view('livewire.media-object');
});
Route::get('modals', function () {
    return view('livewire.modals');
});
Route::get('navigation', function () {
    return view('livewire.navigation');
});
Route::get('notification', function () {
    return view('livewire.notification');
});
Route::get('padding', function () {
    return view('livewire.padding');
});
Route::get('pagination', function () {
    return view('livewire.pagination');
});
Route::get('popover', function () {
    return view('livewire.popover');
});
Route::get('position', function () {
    return view('livewire.position');
});
Route::get('pricing', function () {
    return view('livewire.pricing');
});
Route::get('products', function () {
    return view('livewire.products');
});
Route::get('product-details', function () {
    return view('livewire.product-details');
});
Route::get('product-cart', function () {
    return view('livewire.product-cart');
});
Route::get('profile', function () {
    return view('livewire.profile');
});
Route::get('progress', function () {
    return view('livewire.progress');
});
Route::get('rangeslider', function () {
    return view('livewire.rangeslider');
});
Route::get('rating', function () {
    return view('livewire.rating');
});
Route::get('reset', function () {
    return view('livewire.reset');
});
Route::get('scrollspy', function () {
    return view('livewire.scrollspy');
});
Route::get('search', function () {
    return view('livewire.search');
});
Route::get('settings', function () {
    return view('livewire.settings');
});

Route::get('signup', function () {
    return view('livewire.signup');
});
Route::get('spinners', function () {
    return view('livewire.spinners');
});
Route::get('sweet-alert', function () {
    return view('livewire.sweet-alert');
});
Route::get('switcher-page', function () {
    return view('livewire.switcher-page');
});
Route::get('table-basic', function () {
    return view('livewire.table-basic');
});
Route::get('table-data', function () {
    return view('livewire.table-data');
});
Route::get('tabs', function () {
    return view('Dashboard.livewire.tabs');
});
Route::get('tags', function () {
    return view('livewire.tags');
});
Route::get('thumbnails', function () {
    return view('livewire.thumbnails');
});
Route::get('timeline', function () {
    return view('livewire.timeline');
});
Route::get('toast', function () {
    return view('livewire.toast');
});
Route::get('todotask', function () {
    return view('livewire.todotask');
});
Route::get('tooltip', function () {
    return view('livewire.tooltip');
});
Route::get('treeview', function () {
    return view('livewire.treeview');
});
Route::get('typography', function () {
    return view('livewire.typography');
});
Route::get('underconstruction', function () {
    return view('livewire.underconstruction');
});
Route::get('userlist', function () {
    return view('livewire.userlist');
});
Route::get('widget-notification', function () {
    return view('livewire.widget-notification');
});
Route::get('widgets', function () {
    return view('livewire.widgets');
});
Route::get('width', function () {
    return view('livewire.width');
});
Route::get('wish-list', function () {
    return view('livewire.wish-list');
});


//require_once __DIR__.'/admin.php';
