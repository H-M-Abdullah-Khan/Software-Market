<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\SoftwareProductController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;  
use App\Models\SoftwareProduct;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
/**
 * @method \Illuminate\Routing\Controller middleware(string|array $middleware, array $options = [])
 */


class AdminController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function company()
    {
        return view('company/dashboard');
    }
    public function admin()
    {
        return view('admin/dashboard');
    }
    public function users()
    {
        $users = User::all(); // Fetch all users
        return view('admin/ecommerce-customers', compact('users')); // Send to view
    }
    public function admin2()
    {
        return view('admin/dashboard-ecommerce');
    }
    public function appchatbox()
    {
        return view('admin/app-chat-box');
    }
    public function appemailbox()
    {
        return view('admin/app-emailbox');
    }
    public function appemailread()
    {
        return view('admin/app-emailread');
    }
    public function appfullcalender()
    {
        return view('admin/app-fullcalender');
    }
    public function appinvoice()
    {
        return view('admin/app-invoice');
    }
    public function apptodo()
    {
        return view('admin/app-to-do');
    }
    public function authbasicforgotpassword()
    {
        return view('admin/auth-basic-forgot-password');
    }
    public function authbasiclogin()
    {
        return view('admin/auth-basic-login');
    }
    public function authbasicregister()
    {
        return view('admin/auth-basic-register');
    }
    public function authbasicresetpass()
    {
        return view('admin/auth-basic-reset-password');
    }
    public function authboxedforgotpass()
    {
        return view('admin/auth-boxed-forgot-password');
    }
    public function authboxedlogin()
    {
        return view('admin/auth-boxed-login');
    }
    public function authboxedregister()
    {
        return view('admin/auth-boxed-register');
    }
    public function authboxedresetpass()
    {
        return view('admin/auth-boxed-reset');
    }
    public function authcoverforgotpass()
    {
        return view('admin/auth-cover-forgot-password');
    }
    public function authcoverlogin()
    {
        return view('admin/auth-cover-login');
    }
    public function authcoverregister()
    {
        return view('admin/auth-cover-register');
    }
    public function authcoverresetpass()
    {
        return view('admin/auth-cover-reset');
    }
    public function cards()
    {
        return view('admin/cards');
    }
    public function chartsapexchart()
    {
        return view('admin/charts-apex-chart');
    }
    public function chartsjs()
    {
        return view('admin/charts-chartjs');
    }
    public function componentaccordions()
    {
        return view('admin/component-alerts');
    }
    public function componentalert()
    {
        return view('admin/component-alert');
    }
    public function componentavtars()
    {
        return view('admin/compnent-avtars');
    }
    public function componentbadges()
    {
        return view('admin/component-badges');
    }
    public function componentbuttons()
    {
        return view('admin/component-buttons');
    }
    public function componentcarousels()
    {
        return view('admin/component-carousels');
    }
    public function componentmediaobject()
    {
        return view('admin/component-media-object');
    }
    public function componentmodals()
    {
        return view('admin/component-modals');
    }
    public function componentnavbar()
    {
        return view('admin/component-navbar');
    }
    public function componentnavtabs()
    {
        return view('admin/component-navs-tabs');
    }
    public function componentnotifi()
    {
        return view('admin/component-notifications');
    }
    public function componentpaginations()
    {
        return view('admin/component-paginations');
    }
    public function componentpopovertool()
    {
        return view('admin/component-popovers-tooltips');
    }
    public function componentprogress()
    {
        return view('admin/component-progress-bars');
    }
    public function componentspinners()
    {
        return view('admin/component-spinners');
    }
    public function componenttextutilitie()
    {
        return view('admin/component-text-utilities');
    }
    public function componenttypo()
    {
        return view('admin/component-typography');
    }
    public function ecommerceaddproduct()
    {
        $products = SoftwareProduct::all();
        return view('admin/ecommerce-add-product', compact('products'));
    }
    public function ecommercecustomerdetail()
    {
        return view('admin/ecommerce-customer-details');
    }
    public function ecommercecustomer()
    {
        return view('admin/ecommerce-customers');
    }
    public function ecommerceorderdetail()
    {
        return view('admin/ecommerce-order-details');
    }
    public function ecommerceorder()
    {
        return view('admin/ecommerce-orders');
    }
    public function ecommerceproduct()
    {
        $products = SoftwareProduct::all();
        return view('admin/ecommerce-products', compact('products'));
    }
    public function faq()
    {
        return view('admin/faq');
    }
    public function formdatetimepickes()
    {
        return view('admin/form-date-time-pickes');
    }
    public function formelement()
    {
        return view('admin/form-elements');
    }
    public function formfileupload()
    {
        return view('admin/form-file-upload');
    }
    public function forminputgroup()
    {
        return view('admin/form-input-group');
    }
    public function formlayout()
    {
        return view('admin/form-layouts');
    }
    public function formradioandchec()
    {
        return view('admin/form-radio-and-checkboxes');
    }
    public function formrepeater()
    {
        return view('admin/form-select2');
    }
    public function formvalidations()
    {
        return view('admin/form-validations');
    }
    public function formwizard()
    {
        return view('admin/form-wizard');
    }
    public function iconsbox()
    {
        return view('admin/icons-boxicons');
    }
    public function iconsfeather()
    {
        return view('admin/icons-feather-icons');
    }
    public function iconslines()
    {
        return view('admin/icons-line-icons');
    }
    public function home()
    {
        return view('admin/index');
    }
    public function mapgoogle()
    {
        return view('admin/map-google-maps');
    }
    public function mapvector()
    {
        return view('admin/map-vector-maps');
    }
    public function comingsoon()
    {
        return view('admin/pages-coming-soon');
    }
    public function page404()
    {
        return view('admin/pages-error-404');
    }
    public function page505()
    {
        return view('admin/pages-error-505');
    }
    public function pagestarter()
    {
        return view('admin/pages-starter-page');
    }
    public function tablebasic()
    {
        return view('admin/table-basic-table');
    }
    public function tabledatatable()
    {
        return view('admin/table-datatable');
    }
    public function timeline()
    {
        return view('admin/timeline');
    }
    public function userprofile()
    {
        return view('admin/user-profile');
    }
    public function widgetsdata()
    {
        return view('admin/widgets-data');
    }
    public function widgetsstatic()
    {
        return view('admin/widgets-static');
    }
    public function pricingtable()
    {
        return view('admin/pricing-table');
    }
}
