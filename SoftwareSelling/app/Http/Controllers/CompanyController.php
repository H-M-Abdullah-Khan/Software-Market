<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function company()
    {
        return view('company/dashboard');
    }
    public function company2()
    {
        return view ('company/dashboard-ecommerce');
    }
    public function appchatbox()
    {
        return view ('company/app-chat-box');
    }
    public function appemailbox()
    {
        return view ('company/app-emailbox');
    }
    public function appemailread()
    {
        return view ('company/app-emailread');
    }
    public function appfullcalender()
    {
        return view ('company/app-fullcalender');
    }
    public function appinvoice()
    {
        return view ('company/app-invoice');
    }
    public function apptodo()
    {
        return view ('company/app-to-do');
    }
    public function authbasicforgotpassword()
    {
        return view ('company/auth-basic-forgot-password');
    }
    public function authbasiclogin()
    {
        return view ('company/auth-basic-login');
    }
    public function authbasicregister()
    {
        return view ('company/auth-basic-register');
    }
    public function authbasicresetpass()
    {
        return view ('company/auth-basic-reset-password');
    }
    public function authboxedforgotpass()
    {
        return view ('company/auth-boxed-forgot-password');
    }
    public function authboxedlogin()
    {
        return view ('company/auth-boxed-login');
    }
    public function authboxedregister()
    {
        return view ('company/auth-boxed-register');
    }
    public function authboxedresetpass()
    {
        return view ('company/auth-boxed-reset');
    }
    public function authcoverforgotpass()
    {
        return view ('company/auth-cover-forgot-password');
    }
    public function authcoverlogin()
    {
        return view ('company/auth-cover-login');
    }
    public function authcoverregister()
    {
        return view ('company/auth-cover-register');
    }
    public function authcoverresetpass()
    {
        return view ('company/auth-cover-reset');
    }
    public function cards()
    {
        return view ('company/cards');
    }
    public function chartsapexchart()
    {
        return view ('company/chart-apex-chart');
    }
    public function chartsjs()
    {
        return view ('company/chart-chartjs');
    }
    public function componentaccordions()
    {
        return view ('company/component-alerts');
    }
    public function componentalert()
    {
        return view ('company/component-alert');
    }
    public function componentavtars()
    {
        return view ('company/compnent-avtars');
    }
    public function componentbadges()
    {
        return view ('company/component-badges');
    }
    public function componentbuttons()
    {
        return view ('company/component-buttons');
    }
    public function componentcarousels()
    {
        return view ('company/component-carousels');
    }
    public function componentmediaobject()
    {
        return view ('company/component-media-object');
    }
    public function componentmodals()
    {
        return view ('company/component-modals');
    }
    public function componentnavbar()
    {
        return view ('company/component-navbar');
    }
    public function componentnavtabs()
    {
        return view ('company/component-navs-tabs');
    }
    public function componentnotifi()
    {
        return view ('company/component-notifications');
    }
    public function componentpaginations()
    {
        return view ('company/component-paginations');
    }
    public function componentpopovertool()
    {
        return view ('company/component-popovers-tooltips');
    }
    public function componentprogress()
    {
        return view ('company/component-progress-bars');
    }
    public function componentspinners()
    {
        return view ('company/component-spinners');
    }
    public function componenttextutilitie()
    {
        return view ('company/component-text-utilities');
    }
    public function componenttypo()
    {
        return view ('company/component-typography');
    }
    public function ecommerceaddproduct()
    {
        return view ('company/ecommerce-add-product');
    }
    public function ecommercecustomerdetail()
    {
        return view ('company/ecommerce-customer-details');
    }
    public function ecommercecustomer()
    {
        return view ('company/ecommerce-customers');
    }
    public function ecommerceorderdetail()
    {
        return view ('company/ecommerce-order-details');
    }
    public function ecommerceorder()
    {
        return view ('company/ecommerce-orders');
    }
    public function ecommerceproduct()
    {
        return view ('company/ecommerce-products');
    }
    public function faq()
    {
        return view ('company/faq');
    }
    public function formdatetimepickes()
    {
        return view ('company/form-date-time-pickes');
    }
    public function formelement()
    {
        return view ('company/form-elements');
    }
    public function formfileupload()
    {
        return view ('company/form-file-upload');
    }
    public function forminputgroup()
    {
        return view ('company/form-input-group');
    }
    public function formlayout()
    {
        return view ('company/form-layouts');
    }
    public function formradioandchec()
    {
        return view ('company/form-radio-and-checkboxes');
    }
    public function formrepeater()
    {
        return view ('company/form-select2');
    }
    public function formvalidations()
    {
        return view ('company/form-validations');
    }
    public function formwizard()
    {
        return view ('company/form-wizard');
    }
    public function iconsbox()
    {
        return view ('company/icons-boxicons');
    }
    public function iconsfeather()
    {
        return view ('company/icons-feather-icons');
    }
    public function iconslines()
    {
        return view ('company/icons-line-icons');
    }
    public function home()
    {
        return view ('company/index');
    }
    public function mapgoogle()
    {
        return view ('company/map-google-maps');
    }
    public function mapvector()
    {
        return view ('company/map-vector-maps');
    }
    public function comingsoon()
    {
        return view ('company/pages-coming-soon');
    }
    public function page404()
    {
        return view ('company/pages-error-404');
    }
    public function page505()
    {
        return view ('company/pages-error-505');
    }
    public function pagestarter()
    {
        return view ('company/pages-starter-page');
    }
    public function tablebasic()
    {
        return view ('company/table-basic-table');
    }
    public function tabledatatable()
    {
        return view ('company/table-datatable');
    }
    public function timeline()
    {
        return view ('company/timeline');
    }
    public function userprofile()
    {
        return view ('company/user-profile');
    }
    public function widgetsdata()
    {
        return view ('company/widgets-data');
    }
    public function widgetsstatic()
    {
        return view ('company/widgets-static');
    }
}
