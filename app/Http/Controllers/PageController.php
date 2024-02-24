<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }
    public function about()
    {
        return '2241720062 - Yunila Putmasari';
    }
    public function articles($postId)
    {
        return 'ID : ' . $postId;
    }




}
