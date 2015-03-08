<?php namespace App\Http\Controllers;

use App\Faq;
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

    public function story()
    {
        return view('pages.story');
    }

    public function faq(Faq $faq)
    {
        $faqs = $faq->all();
        
        return view('pages.faq', compact('faqs'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

}
