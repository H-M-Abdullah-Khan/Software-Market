<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SoftwareProductController;
use App\Http\Controllers\StoreSoftwareRequest;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SoftwareDownloadController;
use App\Http\Controllers\UserActivityLogController;
use App\Http\Controllers\SoftwareLicenseController;
use App\Http\Controllers\SoftwareAnalyticsController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\PurchaseRequestController;
use App\Models\SoftwareProduct;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommissionController;
use App\Http\Controllers\CompanyCommissionController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'user-access:user'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
})->name('dashboard');

Route::prefix('admin')->middleware(['auth', 'user-access:admin'])->group(function () {
    // Dashboard & App Pages
    Route::get('/dashboard', [AdminController::class, 'admin']);
    Route::get('/dashboard-ecommerce', [AdminController::class, 'admin2']);
    Route::get('/app-chat-box', [AdminController::class, 'appchatbox']);
    Route::get('/app-emailbox', [AdminController::class, 'appemailbox']);
    Route::get('/app-emailread', [AdminController::class, 'appemailread']);
    Route::get('/app-fullcalender', [AdminController::class, 'appfullcalender']);
    Route::get('/app-invoice', [AdminController::class, 'appinvoice']);
    Route::get('/app-to-do', [AdminController::class, 'apptodo']);
    Route::get('/pricing-table', [AdminController::class, 'pricingtable']);

    // Auth Pages (Basic Layout)
    Route::get('/auth-basic-forgot-password', [AdminController::class, 'authbasicforgotpassword']);
    Route::get('/auth-basic-login', [AdminController::class, 'authbasiclogin']);
    Route::get('/auth-basic-register', [AdminController::class, 'authbasicregister']);
    Route::get('/auth-basic-reset-password', [AdminController::class, 'authbasicresetpass']);

    // Auth Pages (Boxed Layout)
    Route::get('/auth-boxed-forgot-password', [AdminController::class, 'authboxedforgotpass']);
    Route::get('/auth-boxed-login', [AdminController::class, 'authboxedlogin']);
    Route::get('/auth-boxed-register', [AdminController::class, 'authboxedregister']);
    Route::get('/auth-boxed-reset', [AdminController::class, 'authboxedresetpass']);

    // Auth Pages (Cover Layout)
    Route::get('/auth-cover-forgot-password', [AdminController::class, 'authcoverforgotpass']);
    Route::get('/auth-cover-login', [AdminController::class, 'authcoverlogin']);
    Route::get('/auth-cover-register', [AdminController::class, 'authcoverregister']);
    Route::get('/auth-cover-reset', [AdminController::class, 'authcoverresetpass']);

    // UI Cards & Charts
    Route::get('/cards', [AdminController::class, 'cards']);
    Route::get('/charts-apex-chart', [AdminController::class, 'chartsapexchart']);
    Route::get('/charts-chartjs', [AdminController::class, 'chartsjs']);

    // UI Components
    Route::get('/component-accordions', [AdminController::class, 'componentaccordions']);
    Route::get('/component-alert', [AdminController::class, 'componentalert']);
    Route::get('/component-avtars', [AdminController::class, 'componentavtars']);
    Route::get('/component-badges', [AdminController::class, 'componentbadges']);
    Route::get('/component-buttons', [AdminController::class, 'componentbuttons']);
    Route::get('/component-carousels', [AdminController::class, 'componentcarousels']);
    Route::get('/component-media-object', [AdminController::class, 'componentmediaobject']);
    Route::get('/component-modals', [AdminController::class, 'componentmodals']);
    Route::get('/component-navbar', [AdminController::class, 'componentnavbar']);
    Route::get('/component-navs-tabs', [AdminController::class, 'componentnavtabs']);
    Route::get('/component-notifications', [AdminController::class, 'componentnotifi']);
    Route::get('/component-paginations', [AdminController::class, 'componentpaginations']);
    Route::get('/component-popovers-tooltips', [AdminController::class, 'componentpopovertool']);
    Route::get('/component-progress-bars', [AdminController::class, 'componentprogress']);
    Route::get('/component-spinners', [AdminController::class, 'componentspinners']);
    Route::get('/component-text-utilities', [AdminController::class, 'componenttextutilitie']);
    Route::get('/component-typography', [AdminController::class, 'componenttypo']);

    // E-Commerce Pages
    Route::get('/ecommerce-add-product', [AdminController::class, 'ecommerceaddproduct']);
    Route::get('/ecommerce-customer-details', [AdminController::class, 'ecommercecustomerdetail']);
    Route::get('/ecommerce-customers', [AdminController::class, 'ecommercecustomer']);
    Route::get('/ecommerce-order-details', [AdminController::class, 'ecommerceorderdetail']);
    Route::get('/ecommerce-admin-orders', [AdminController::class, 'ecommerceorder']);
    Route::get('/ecommerce-orders', [OrderController::class, 'index'])->name('orders.index');
    Route::delete('/ecommerce-orders/{order}', [OrderController::class, 'destroy'])->name('ecommerce-orders.destroy');
    Route::get('/ecommerce-orders-query', [OrderController::class, 'query'])->name('orders.query');
    Route::get('/ecommerce-products', [AdminController::class, 'ecommerceproduct']);
    Route::resource('/software_products', SoftwareProductController::class);
    Route::post('/software_products', [SoftwareProductController::class, 'store'])->name('products.store');
    Route::get('/software_products/{id}/download', [SoftwareProductController::class, 'download'])->name('software_products.download');
    Route::get('/software_products/{id}/download/{file}', [
        SoftwareProductController::class,
        'download_file'
    ])->name('software_products.download_file');
    Route::get('/ecommerce-customers', [AdminController::class, 'users'])->name('users');
    Route::get('/users', [UserManagementController::class, 'index'])->name('admin.users.index');
    Route::post('/users/{id}/approve', [UserManagementController::class, 'approve'])->name('admin.users.approve');
    Route::post('/users/{id}/reject', [UserManagementController::class, 'reject'])->name('admin.users.reject');
    Route::delete('/users/{id}', [UserManagementController::class, 'destroy'])->name('admin.users.destroy');
    Route::patch('/software_products/{softwareProduct}/approve', [SoftwareProductController::class, 'approve'])->name('products.approve');
    Route::patch('/software_products/{softwareProduct}/reject', [SoftwareProductController::class, 'reject'])->name('products.reject');
    Route::get('/purchase-requests/create', [PurchaseRequestController::class, 'create'])->name('orders.create');
    Route::post('/purchase-requests', [PurchaseRequestController::class, 'store'])->name('admin.orders.store');
    Route::post('/purchase-requests/{id}/approve', [PurchaseRequestController::class, 'approve'])->name('orders.approve');
    Route::post('/purchase-requests/{id}/reject', [PurchaseRequestController::class, 'reject'])->name('orders.reject');
    Route::get('/ecommerce-products-Search1', [SoftwareProductController::class, 'Search1'])->name('products.Search1');
    Route::get('/commissions', [CommissionController::class, 'index'])->name('commissions.index');
    Route::post('/commissions', [CommissionController::class, 'store'])->name('commissions.store');
    Route::put('/commissions/{id}', [CommissionController::class, 'update'])->name('commissions.update');
    Route::delete('/commissions/{id}', [CommissionController::class, 'destroy'])->name('commissions.destroy');


    // Help & FAQ
    Route::get('/faq', [AdminController::class, 'faq']);

    // Form Elements
    Route::get('/form-date-time-pickes', [AdminController::class, 'formdatetimepickes']);
    Route::get('/form-elements', [AdminController::class, 'formelement']);
    Route::get('/form-file-upload', [AdminController::class, 'formfileupload']);
    Route::get('/form-input-group', [AdminController::class, 'forminputgroup']);
    Route::get('/form-layouts', [AdminController::class, 'formlayout']);
    Route::get('/form-radio-and-checkboxes', [AdminController::class, 'formradioandchec']);
    Route::get('/form-select2', [AdminController::class, 'formrepeater']);
    Route::get('/form-validations', [AdminController::class, 'formvalidations']);
    Route::get('/form-wizard', [AdminController::class, 'formwizard']);

    // Icon Libraries
    Route::get('/icons-boxicons', [AdminController::class, 'iconsbox']);
    Route::get('/icons-feather-icons', [AdminController::class, 'iconsfeather']);
    Route::get('/icons-line-icons', [AdminController::class, 'iconslines']);

    // Home Page
    Route::get('/index', [AdminController::class, 'home']);

    // Maps
    Route::get('/map-google-maps', [AdminController::class, 'mapgoogle']);
    Route::get('/map-vector-maps', [AdminController::class, 'mapvector']);

    // Error & Coming Soon Pages
    Route::get('/pages-coming-soon', [AdminController::class, 'comingsoon']);
    Route::get('/pages-error-404', [AdminController::class, 'page404']);
    Route::get('/pages-error-505', [AdminController::class, 'page505']);
    Route::get('/pages-starter-page', [AdminController::class, 'pagestarter']);

    // Tables
    Route::get('/table-basic-table', [AdminController::class, 'tablebasic']);
    Route::get('/table-datatable', [AdminController::class, 'tabledatatable']);

    // Timeline
    Route::get('/timeline', [AdminController::class, 'timeline']);

    // User Profile
    Route::get('/user-profile', [AdminController::class, 'userprofile']);

    // Widgets
    Route::get('/widgets-data', [AdminController::class, 'widgetsdata']);
    Route::get('/widgets-static', [AdminController::class, 'widgetsstatic']);
    // User Management Routes
    Route::resource('/users', UserManagementController::class);

    // Order Management Routes
    // Route::resource('/orders', OrderController::class);

    // Payment Management Routes
    Route::resource('/payments', PaymentController::class);

    // Software Download Management Routes
    Route::resource('/software-downloads', SoftwareDownloadController::class);

    // User Activity Log Management Routes
    Route::resource('/user-activity-logs', UserActivityLogController::class);

    // Software License Management Routes
    Route::resource('/software-licenses', SoftwareLicenseController::class);

    // Software Analytics Management Routes
    Route::resource('/software-analytics', SoftwareAnalyticsController::class);

    // Payment Method Management Routes
    Route::resource('/payment-methods', PaymentMethodController::class);
})->name('admin.dashboard');

Route::prefix('company')->middleware(['auth', 'user-access:company'])->group(function () {
    // Dashboard & App Pages
    Route::get('/dashboard', [CompanyController::class, 'company']);
    Route::get('/dashboard-ecommerce', [CompanyController::class, 'company2']);
    Route::get('/app-chat-box', [CompanyController::class, 'appchatbox']);
    Route::get('/app-emailbox', [CompanyController::class, 'appemailbox']);
    Route::get('/app-emailread', [CompanyController::class, 'appemailread']);
    Route::get('/app-fullcalender', [CompanyController::class, 'appfullcalender']);
    Route::get('/app-invoice', [CompanyController::class, 'appinvoice']);
    Route::get('/app-to-do', [CompanyController::class, 'apptodo']);

    // Auth Pages (Basic Layout)
    Route::get('/auth-basic-forgot-password', [CompanyController::class, 'authbasicforgotpassword']);
    Route::get('/auth-basic-login', [CompanyController::class, 'authbasiclogin']);
    Route::get('/auth-basic-register', [CompanyController::class, 'authbasicregister']);
    Route::get('/auth-basic-reset-password', [CompanyController::class, 'authbasicresetpass']);

    // Auth Pages (Boxed Layout)
    Route::get('/auth-boxed-forgot-password', [CompanyController::class, 'authboxedforgotpass']);
    Route::get('/auth-boxed-login', [CompanyController::class, 'authboxedlogin']);
    Route::get('/auth-boxed-register', [CompanyController::class, 'authboxedregister']);
    Route::get('/auth-boxed-reset', [CompanyController::class, 'authboxedresetpass']);

    // Auth Pages (Cover Layout)
    Route::get('/auth-cover-forgot-password', [CompanyController::class, 'authcoverforgotpass']);
    Route::get('/auth-cover-login', [CompanyController::class, 'authcoverlogin']);
    Route::get('/auth-cover-register', [CompanyController::class, 'authcoverregister']);
    Route::get('/auth-cover-reset', [CompanyController::class, 'authcoverresetpass']);

    // UI Cards & Charts
    Route::get('/cards', [CompanyController::class, 'cards']);
    Route::get('/chart-apex-chart', [CompanyController::class, 'chartsapexchart']);
    Route::get('/chart-chartjs', [CompanyController::class, 'chartsjs']);

    // UI Components
    Route::get('/component-accordions', [CompanyController::class, 'componentaccordions']);
    Route::get('/component-alert', [CompanyController::class, 'componentalert']);
    Route::get('/component-avtars', [CompanyController::class, 'componentavtars']);
    Route::get('/component-badges', [CompanyController::class, 'componentbadges']);
    Route::get('/component-buttons', [CompanyController::class, 'componentbuttons']);
    Route::get('/component-carousels', [CompanyController::class, 'componentcarousels']);
    Route::get('/component-media-object', [CompanyController::class, 'componentmediaobject']);
    Route::get('/component-modals', [CompanyController::class, 'componentmodals']);
    Route::get('/component-navbar', [CompanyController::class, 'componentnavbar']);
    Route::get('/component-navs-tabs', [CompanyController::class, 'componentnavtabs']);
    Route::get('/component-notifications', [CompanyController::class, 'componentnotifi']);
    Route::get('/component-paginations', [CompanyController::class, 'componentpaginations']);
    Route::get('/component-popovers-tooltips', [CompanyController::class, 'componentpopovertool']);
    Route::get('/component-progress-bars', [CompanyController::class, 'componentprogress']);
    Route::get('/component-spinners', [CompanyController::class, 'componentspinners']);
    Route::get('/component-text-utilities', [CompanyController::class, 'componenttextutilitie']);
    Route::get('/component-typography', [CompanyController::class, 'componenttypo']);

    // E-Commerce Pages
    Route::get('/ecommerce-add-product', [CompanyController::class, 'ecommerceaddproduct']);
    Route::get('/ecommerce-customer-details', [CompanyController::class, 'ecommercecustomerdetail']);
    Route::get('/ecommerce-customers', [CompanyController::class, 'ecommercecustomer']);
    Route::get('/ecommerce-order-details', [CompanyController::class, 'ecommerceorderdetail']);
    Route::get('/ecommerce-company-orders', [CompanyController::class, 'ecommerceorder']);
    Route::get('/ecommerce-products', [CompanyController::class, 'ecommerceproduct'])->name('company.ecommerce-products');
    Route::patch('/software_products/{softwareProduct}/approve', [SoftwareProductController::class, 'approve'])->name('software_products.approve');
    Route::patch('/software_products/{softwareProduct}/reject', [SoftwareProductController::class, 'reject'])->name('software_products.reject');
    Route::resource('/software_products', SoftwareProductController::class);
    Route::post('/software_products', [SoftwareProductController::class, 'store'])->name('software_products.store');
    Route::get('/software_products/{id}/download', [SoftwareProductController::class, 'download'])->name('software_products.download');
    Route::get('/software_products/{id}/download/{file}', [
        SoftwareProductController::class,
        'download_file'
    ])->name('software_products.download_file');
    Route::get('commission', [CompanyCommissionController::class, 'show'])->name('companycommission');

    // Help & FAQ
    Route::get('/faq', [CompanyController::class, 'faq']);

    // Form Elements
    Route::get('/form-date-time-pickes', [CompanyController::class, 'formdatetimepickes']);
    Route::get('/form-elements', [CompanyController::class, 'formelement']);
    Route::get('/form-file-upload', [CompanyController::class, 'formfileupload']);
    Route::get('/form-input-group', [CompanyController::class, 'forminputgroup']);
    Route::get('/form-layouts', [CompanyController::class, 'formlayout']);
    Route::get('/form-radio-and-checkboxes', [CompanyController::class, 'formradioandchec']);
    Route::get('/form-select2', [CompanyController::class, 'formrepeater']);
    Route::get('/form-validations', [CompanyController::class, 'formvalidations']);
    Route::get('/form-wizard', [CompanyController::class, 'formwizard']);

    // Icon Libraries
    Route::get('/icons-boxicons', [CompanyController::class, 'iconsbox']);
    Route::get('/icons-feather-icons', [CompanyController::class, 'iconsfeather']);
    Route::get('/icons-line-icons', [CompanyController::class, 'iconslines']);

    // Home Page
    Route::get('/index', [CompanyController::class, 'home']);

    // Maps
    Route::get('/map-google-maps', [CompanyController::class, 'mapgoogle']);
    Route::get('/map-vector-maps', [CompanyController::class, 'mapvector']);

    // Error & Coming Soon Pages
    Route::get('/pages-coming-soon', [CompanyController::class, 'comingsoon']);
    Route::get('/pages-error-404', [CompanyController::class, 'page404']);
    Route::get('/pages-error-505', [CompanyController::class, 'page505']);
    Route::get('/pages-starter-page', [CompanyController::class, 'pagestarter']);

    // Tables
    Route::get('/table-basic-table', [CompanyController::class, 'tablebasic']);
    Route::get('/table-datatable', [CompanyController::class, 'tabledatatable']);

    // Timeline
    Route::get('/timeline', [CompanyController::class, 'timeline']);

    // User Profile
    Route::get('/user-profile', [CompanyController::class, 'userprofile']);

    // Widgets
    Route::get('/widgets-data', [CompanyController::class, 'widgetsdata']);
    Route::get('/widgets-static', [CompanyController::class, 'widgetsstatic']);
})->name('company.dashboard');


// FrontEnd Routes
Route::post('/logout', [ProfileController::class, 'destroy'])->name('logout');
Route::get('/about-us', [HomeController::class, 'about']);
Route::get('/welcome', [HomeController::class, 'home']);
Route::get('/explore-1', [HomeController::class, 'explore']);
Route::get('/market-create', [HomeController::class, 'Create']);
Route::get('/market', [HomeController::class, 'Market']);
Route::get('/market-active-bid', [HomeController::class, 'ActiveBid']);
Route::get('/market-collection', [HomeController::class, 'Mycollection']);
Route::get('/market-favorite', [HomeController::class, 'Myfavorite']);
Route::get('/market-wallet', [HomeController::class, 'Wallet']);
Route::get('/market-history', [HomeController::class, 'History']);
Route::get('/market-explore', [HomeController::class, 'Settings']);
Route::get('/faq', [HomeController::class, 'FAQ']);
Route::get('/contact-us', [HomeController::class, 'Contact']);
Route::get('/terms-condition', [HomeController::class, 'Terms']);
Route::get('/nft-detail-1', [HomeController::class, 'nft']);
Route::get('/blog-detail', [HomeController::class, 'blog']);
Route::get('/author-2', [HomeController::class, 'author']);
Route::get('/author-1', [HomeController::class, 'author1']);
Route::get('/explore-2', [HomeController::class, 'explore2']);
Route::get('/explore-3', [HomeController::class, 'explore3']);
Route::get('/explore-4', [HomeController::class, 'explore4']);
Route::get('/maintenance', [HomeController::class, 'maintenance']);
Route::get('/coming-soon', [HomeController::class, 'comingsoon']);
Route::get('/upcoming', [HomeController::class, 'upcoming']);
Route::get('/nft-detail-3', [HomeController::class, 'nft3']);
Route::get('/nft-detail-2', [HomeController::class, 'nft2']);
Route::get('/nft-detail-4', [HomeController::class, 'nft4']);
Route::get('/404', [HomeController::class, 'errorpage']);
Route::get('/explore-1-search', [SoftwareProductController::class, 'Search'])->name('products.Search');

// Route::get('software_products/{id}', [SoftwareProductController::class,'buy'])->name('software_products.buy');
Route::get('/purchase-requests/create', [PurchaseRequestController::class, 'create'])->name('orders.create');
Route::post('/purchase-requests', [OrderController::class, 'store'])->name('orders.store');

require __DIR__ . '/auth.php';
