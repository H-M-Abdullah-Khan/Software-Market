<?php

namespace App\Http\Controllers;

use App\Models\SoftwareProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
/**
 * @method \Illuminate\Routing\Controller middleware(string|array $middleware, array $options = [])
 */


class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function company()
    {
        return view('company/dashboard');
    }
    public function admin()
    {
        return view('admin/dashboard');
    }
    public function home()
    {
        return view('welcome');
    }
    public function About()
    {
        return view('about-us');
    }
    public function explore()
    {
         $products = SoftwareProduct::where('status','=','approved')->get();
        return view('explore-1', compact('products'));
    }
    public function Create()
    {
        return view('market-create');
    }
    public function Market()
    {
        return view('market');
    }
    public function ActiveBid()
    {
        return view('market-active-bid');
    }
    public function Mycollection()
    {
        return view('market-collection');
    }
    public function Myfavorite()
    {
        return view('market-favorite');
    }
    public function Wallet()
    {
        return view('market-wallet');
    }
    public function History()
    {
        return view('market-history');
    }
    public function Settings()
    {
        return view('market-explore');
    }
    public function FAQ()
    {
        return view('faq');
    }
    public function Contact()
    {
        return view('contact-us');
    }
    public function Terms()
    {
        return view('terms-condition');
    }
    public function nft()
    {
        return view('nft-detail-1');
    }
    public function blog()
    {
        return view('blog-detail');
    }
    public function author()
    {
        return view('author-2');
    }
    public function author1()
    {
        return view('author-1');
    }
    public function explore2()
    {
        return view('explore-2');
    }
    public function explore3()
    {
        return view('explore-3');
    }
    public function explore4()
    {
        return view('explore-4');
    }
    public function maintenance()
    {
        return view('maintenance');
    }
    public function comingsoon()
    {
        return view('coming-soon');
    }
    public function nft2()
    {
        return view('nft-detail-2');
    }
    public function nft3()
    {
        return view('nft-detail-3');
    }
    public function upcoming()
    {
        return view('upcoming');
    }
}
