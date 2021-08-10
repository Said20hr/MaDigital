<?php

// use App\Http\Controllers\BrandController;
use App\Http\Controllers\CartController;
// use App\Http\Controllers\categoryController;
use App\Http\Controllers\checkoutController;
// use App\Http\Controllers\CityController;
use App\Http\Controllers\partnership;

use App\Http\Controllers\CompareController;
use App\Http\Controllers\GroupController;
// use App\Http\Controllers\ProductController;
use App\Http\Controllers\searchController;
use App\Http\Controllers\userProductController;
use App\Http\Controllers\WishlistController;

use App\Http\Controllers\SellerControllers\brandController;
use App\Http\Controllers\SellerControllers\categoryController;
use App\Http\Controllers\SellerControllers\galleryController;
use App\Http\Controllers\SellerControllers\ProductController;
use App\Http\Controllers\SellerControllers\sellerDashboardController;
use App\Http\Controllers\UserController\homeController;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/test_notification', [CityController::class, 'notify']);

Route::get('/loginUser', function () {
    return view('user.login');
});
// Route::get('/product_page', [CityController::class, 'productPageData']);
Route::get('/contact_Us', function () {
    return view('user.contact_us');
});




Auth::routes();

Route::get('/confirmation', function () {
    return view('seller.waitForConfirmation');
});

// Route::get('/addCity', [CityController::class, 'addCity']);
// Route::get('/addPlace/{id}', [CityController::class, 'addPlace']);

Route::get('/', function () {
    return view('user.home');
})->name('user.home');


Route::get('term_and_condition', [homeController::class, 'term_and_condition'])->name('term.conditions');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/////////////////////////////////////////// User Route //////////////////////////////////////////////////////////


Route::match(['get', 'post'], '/email/code_verification', [homeController::class, 'index'])->name('user.register');
Route::match(['get', 'post'], '/email', [homeController::class, 'code'])->name('user.code');

Route::group(['prefix' => 'user'], function () {
    Route::group(['middleware' => ['auth']], function () {
    });
});


/////////////////////////////////////////////// Admin Routes/////////////////////////////////////////////////////////



        Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');
        Route::get('/dashboard_new', [App\Http\Controllers\AdminController::class, 'dashboard_new'])->name('admin.new-dashboard');
        Route::get('/release', [App\Http\Controllers\AdminController::class, 'release'])->name('admin.release');
        Route::get('/audio', [App\Http\Controllers\AdminController::class, 'audio'])->name('admin.audio');
        Route::get('/upload-album', [App\Http\Controllers\AdminController::class, 'uploadAlbum'])->name('admin.upload-album');
        Route::get('/store', [App\Http\Controllers\AdminController::class, 'store'])->name('admin.store');
        Route::get('/test-album', [App\Http\Controllers\AdminController::class, 'testAlbum'])->name('admin.test-album');
        Route::get('/file', [App\Http\Controllers\AdminController::class, 'file'])->name('admin.file');
        Route::post('update_profile', [App\Http\Controllers\Admin::class, 'update_profile']);
        Route::get('/chat', [App\Http\Controllers\AdminController::class, 'Chat'])->name('admin.chat');
        Route::get('/labels', [App\Http\Controllers\AdminController::class, 'labels'])->name('admin.labels');
        Route::match(['get', 'post'], '/insert_label', [App\Http\Controllers\AdminController::class, 'insert_label'])->name('insert.label');
        Route::match(['get', 'post'], '/edit_label/{id}', [App\Http\Controllers\AdminController::class, 'edit_label'])->name('edit_label');
        Route::match(['get', 'post'], '/view_artists/{id}', [App\Http\Controllers\AdminController::class, 'view_artists'])->name('view_artists');
        Route::match(['get', 'post'], '/update_label', [App\Http\Controllers\AdminController::class, 'update_label'])->name('update_label');
        Route::match(['get', 'post'], '/delete_label/{id}', [App\Http\Controllers\AdminController::class, 'delete_label']);
        Route::get('/artists', [App\Http\Controllers\AdminController::class, 'artists'])->name('admin.artists');
        Route::match(['get', 'post'], '/insert_artist', [App\Http\Controllers\AdminController::class, 'insert_artist'])->name('insert.artist');
        Route::match(['get', 'post'], '/edit_artist/{id}', [App\Http\Controllers\AdminController::class, 'edit_artist'])->name('edit_artist');
        Route::match(['get', 'post'], '/update_artist', [App\Http\Controllers\AdminController::class, 'update_artist'])->name('update_artist');
        Route::match(['get', 'post'], '/delete_artist/{id}', [App\Http\Controllers\AdminController::class, 'delete_artist']);
        Route::get('logout', [App\Http\Controllers\AdminController::class, 'logout'])->name('admin.logout');
        //Create Accounts Controllers
        Route::match(['get', 'post'], 'accounts', [App\Http\Controllers\Admin\AccountController::class, 'index'])->name('accounts');
        Route::match(['get', 'post'], 'store_account', [App\Http\Controllers\Admin\AccountController::class, 'store_account'])->name('store_account');
        Route::match(['get', 'post'], 'edit_account/{id}', [App\Http\Controllers\Admin\AccountController::class, 'edit_account'])->name('edit_account');
        Route::match(['get', 'post'], 'view_account_labels/{id}', [App\Http\Controllers\Admin\AccountController::class, 'view_account_labels'])->name('view_account_labels');
        Route::match(['get', 'post'], 'view_account_artists/{id}', [App\Http\Controllers\Admin\AccountController::class, 'view_account_artists'])->name('view_account_artists');
        Route::match(['get', 'post'], 'update_account', [App\Http\Controllers\Admin\AccountController::class, 'update_account'])->name('update_account');
        Route::match(['get', 'post'], 'delete_account/{id}', [App\Http\Controllers\Admin\AccountController::class, 'delete_account'])->name('delete_account');
        Route::match(['get', 'post'], 'users', [App\Http\Controllers\Admin\AccountController::class, 'users'])->name('users');
        Route::match(['get', 'post'], 'edit_user', [App\Http\Controllers\Admin\AccountController::class, 'edit_user'])->name('edit_user');
        //mailing section start
        Route::match(['get', 'post'], 'mailing_list/contacts', [App\Http\Controllers\Admin\MailingListController::class, 'index'])->name('mailing_list.contacts');
        Route::match(['get', 'post'], 'mailing_list/add_contact_to_list', [App\Http\Controllers\Admin\MailingListController::class, 'add_contact_to_list'])->name('add_contact_to_list');
        Route::match(['get', 'post'], 'mailing_list/mailing_lists', [App\Http\Controllers\Admin\MailingListController::class, 'mailing_list'])->name('mailing_list');
        Route::match(['get', 'post'], 'mailing_list/list_contacts/{id}', [App\Http\Controllers\Admin\MailingListController::class, 'list_contacts'])->name('list_contacts');
        Route::match(['get', 'post'], 'mailing_list/store_list', [App\Http\Controllers\Admin\MailingListController::class, 'store_mailing_list'])->name('store_mailing_list');
        Route::match(['get', 'post'], 'mailing_list/edit_list/{id}', [App\Http\Controllers\Admin\MailingListController::class, 'editMailingListView'])->name('edit.list-name');
        Route::match(['get', 'post'], 'mailing_list/update_mailing_list/{id}', [App\Http\Controllers\Admin\MailingListController::class, 'update_mailing_list'])->name('update.list-name');
        Route::match(['get', 'post'], 'mailing_list/delete_list/{id}', [App\Http\Controllers\Admin\MailingListController::class, 'deleteMailingList'])->name('delete.list-name');
        Route::match(['get', 'post'], 'mailing_list/send_mail', [App\Http\Controllers\Admin\MailingListController::class, 'send_mail_view'])->name('send_mail_view');
        Route::match(['get', 'post'], 'mailing_list/send_mail_to_contacts', [App\Http\Controllers\Admin\MailingListController::class, 'send_mail'])->name('send_mail');
        Route::match(['get', 'post'], 'mailing_list/send_mail_individually', [App\Http\Controllers\Admin\MailingListController::class, 'send_mail_to_individual_view'])->name('send_mail_to_individual_view');
        // send mail individually get labels with ajax
        Route::match(['get', 'post'], 'mailing_list/get_labels', [App\Http\Controllers\Admin\MailingListController::class, 'get_labels'])->name('get_labels');
        Route::match(['get', 'post'], 'mailing_list/get_artists', [App\Http\Controllers\Admin\MailingListController::class, 'get_artists'])->name('get_artists');
        Route::match(['get', 'post'], 'mailing_list/send_mail_individually_to_list', [App\Http\Controllers\Admin\MailingListController::class, 'send_mail_individually'])->name('send_mail_individually');

        // group resource controller
        Route::resource('group', App\Http\Controllers\GroupController::class);
        Route::match(['get', 'post'], 'group/add_group_to_list', [App\Http\Controllers\GroupController::class, 'add_group_to_list'])->name('add_group_to_list');





//////////////////////////////////////////////// seller Route ////////////////////////////////////////

// Route::group(['prefix' => 'label'], function () {
//     Route::group(['middleware' => 'guest:seller'], function () {
//         Route::get('login', [App\Http\Controllers\SellerController::class, 'loginForm'])->name('seller.login');
//         Route::post('login', [App\Http\Controllers\SellerController::class, 'login'])->name('seller.auth');
//     });
//     Route::group(['middleware' => 'seller.auth'], function () {
//         Route::view('dashboard', 'seller.home')->name('seller.home');
//         Route::get('logout', [App\Http\Controllers\SellerController::class, 'logout'])->name('seller.logout');
//     });
// });

// Route::get('label/register', [App\Http\Controllers\SellerController::class, 'registerForm'])->name('seller.register');
Route::get('label/register_form', [App\Http\Controllers\SellerController::class, 'labelForm'])->name('label.register');
Route::post('label/register', [App\Http\Controllers\SellerController::class, 'register'])->name('seller.register');
// Route::get('artist/register',function(){
//     return view('artist.register');
// });
Route::get('artist/register', [App\Http\Controllers\SellerController::class, 'artist_register']);
//to save label registration data
Route::post('save_label', [App\Http\Controllers\SellerController::class, 'save_label']);
Route::get('success', [App\Http\Controllers\SellerController::class, 'success']);
Route::post('save_artist', [App\Http\Controllers\SellerController::class, 'save_artist']);
Route::get("Beatmaker/register", [App\Http\Controllers\SellerController::class, 'Beatmaker']);
Route::post('save_beatmaker', [App\Http\Controllers\SellerController::class, 'save_beatmaker']);
Route::get('partnership', [App\Http\Controllers\partnership::class, 'index']);
Route::post('save_partnership', [App\Http\Controllers\partnership::class, 'save_partnership']);

//////////////////////////////////////////////// Label Route ////////////////////////////////////////
//Route::post('user_login', [App\Http\Controllers\Auth\LoginController::class, 'user_login']);
Route::get('/logout', [App\Http\Controllers\Admin::class, 'Logout']);

Route::get('/register_form', [homeController::class, 'register_form']);
// Route::group(['middleware' => 'authication'], function () {
// Route::get("/dashboard", [App\Http\Controllers\Admin::class, 'dashboard'])->name('dashboard');
// for users that are not admin
// Route::get('/chat', [App\Http\Controllers\Admin::class, 'Chat']);
// Route::post('update_profile', [App\Http\Controllers\Admin::class, 'update_profile']);
// Route::post('add_artist', [App\Http\Controllers\Admin::class, 'add_artist']);
// Route::post('update_Artist_name', [App\Http\Controllers\Admin::class, 'update_Artist_name']);
// });
//////////////////////////////////////////////// Account Route ////////////////////////////////////////
Route::group(['prefix' => 'account', 'middleware' => 'account.auth'], function () {
    Route::get('/logout', [App\Http\Controllers\Admin::class, 'Logout']);
    Route::get('/chat', [App\Http\Controllers\Account\AccountController::class, 'Chat']);
    Route::match(['get', 'post'], 'dashboard', [App\Http\Controllers\Account\AccountController::class, 'index'])->name('account.dashboard');
    Route::post('update_profile', [App\Http\Controllers\Account\AccountController::class, 'update_profile']);
    Route::match(['get', 'post'], 'labels', [App\Http\Controllers\Account\AccountController::class, 'labels'])->name('account.labels');
    Route::match(['get', 'post'], 'artists/{id}', [App\Http\Controllers\Account\AccountController::class, 'artists'])->name('account.artists');
    Route::match(['get', 'post'], 'add_update_artists_name', [App\Http\Controllers\Account\AccountController::class, 'add_update_artists_name'])->name('add_update_artists_name');
});

//Chat
Route::get('messenger', [App\Http\Controllers\MessagesController::class, 'index'])->name('messenger');
Route::post('/message', [App\Http\Controllers\MessagesController::class, 'sendMessage']);
Route::get('/message/{id}', [App\Http\Controllers\MessagesController::class, 'getMessage'])->name('message');
Route::get('/messagecount/{id}', [App\Http\Controllers\MessagesController::class, 'getMessageCount'])->name('messagecount');

//Announcements
Route::get('announcements', [App\Http\Controllers\AnnouncementsController::class, 'index'])->name('announcements');
Route::post('/announcement', [App\Http\Controllers\AnnouncementsController::class, 'sendAnnouncement']);
Route::post('/multiannouncement', [App\Http\Controllers\AnnouncementsController::class, 'sendMultiAnnouncement'])->name('storeMultiAnnouncement');
Route::get('/announcement/{id}', [App\Http\Controllers\AnnouncementsController::class, 'getAnnouncement'])->name('announcement');
Route::get('/announcementcount/{id}', [App\Http\Controllers\AnnouncementsController::class, 'getAnnouncementCount'])->name('announcementcount');


Route::post('/multigroupannouncement', [App\Http\Controllers\AnnouncementsController::class, 'sendMultiGroupAnnouncement'])->name('storeMultiGroupAnnouncement');
