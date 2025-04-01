<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index() {
        return view('pages.index');
    }

    public function explore() {
        return view('pages.explore');
    }

    public function signIn() {
        return view('pages.signIn');
    }

    public function signUp() {
        return view('pages.signUp');
    }

    public function privacy() {
        return view('components.privacy');
    }

    public function settings() {
        return view('components.settings');
    }

    public function conversation() {
        return view('components.conversation');
    }
}
