<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;

class PricingController extends Controller
{
    /**
     * Show the pricing FAQs.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Fetch FAQs where category_name is 'pricing'
        $faqs = Faq::where('category_name', 'payment')->get();

        return view('pricing', compact('faqs'));
    }
}
