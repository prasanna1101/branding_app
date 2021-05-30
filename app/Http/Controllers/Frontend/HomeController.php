<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
        public function index() 
        {
            return view('frontend.index');
        }
        public function brandRegister() 
        {
            return view('frontend.auth.brand.register');
        }
        public function brandLogin() 
        {
            return view('frontend.auth.brand.login');
        }

        public function influencerRegister() 
        {
            return view('frontend.auth.influencer.register');
        }
        public function influencerLogin() 
        {
            return view('frontend.auth.influencer.login');
        }
}
