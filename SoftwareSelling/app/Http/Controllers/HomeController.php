<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
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
        return view('explore-1');
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
}