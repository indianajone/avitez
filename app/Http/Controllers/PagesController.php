<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function bottles()
    {
        return view('pages.bottles');
    }

    public function water()
    {
        return view('pages.water');
    }

    public function environment()
    {
        return view('pages.environment');
    }

    public function order()
    {
        return view('pages.order');
    }

    public function story()
    {
        return view('pages.story');
    }

    public function faq()
    {
        $faqs = \App\Faq::all();

        return view('pages.faq', compact('faqs'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

}
