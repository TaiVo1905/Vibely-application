<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index() {
        return view('pages.index');
    }

    
    public function signIn() {
        return view('pages.signIn');
    }
    
    public function signUp() {
        return view('pages.signUp');
    }

    public function profile() {
        return view('pages.profile');
    }

    public function explore() {
        return view('pages.explore');
    }

    public function settings() {
        return view('pages.settings');
    }

    public function conversation() {
        return view('pages.conversation');
    }

    public function comment() {
        return view('components.comment');
    }
}
