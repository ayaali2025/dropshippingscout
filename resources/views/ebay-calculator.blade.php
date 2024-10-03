
@extends('layouts.master')

@section('title', $page->title)
@section('meta_description', $page->meta_description)
@section('meta_keywords', $page->meta_keywords)
@section('meta_author', $page->meta_author)


@section('styles')
    <!-- Custom CSS for this view -->
    <link href="{{asset('css/faqs.css')}}" rel="stylesheet">
@endsection

@section('content')
    <div class="header">Looking for help? Here are our most frequently asked questions.</div>

    <div class="search-container">
        <input type="text" placeholder="Search about what you are looking for…">
        <button>Search</button>
    </div>


    <div class="filter-container">
        <div class="filter-row">
          <div class="filter-box">
            <label for="marketplace">MarketPlace</label>
            <select id="marketplace">
              <option value="ebay">ebay.com</option>
            </select>
          </div>
          <div class="filter-box">
            <label for="category">Category</label>
            <select id="category">
              <option value="" disabled selected>Select Category</option>
              <!-- Add categories here -->
            </select>
          </div>
          <div class="filter-box">
            <label for="item-price">Item Sold Price</label>
            <input type="number" id="item-price" placeholder="Enter Price">
          </div>
          <div class="filter-box">
            <label for="item-cost">Item Cost</label>
            <input type="number" id="item-cost" placeholder="Enter Cost">
          </div>
          <div class="filter-box">
            <label for="ebay-fee">eBay Fee %</label>
            <input type="number" id="ebay-fee" placeholder="Enter Fee %">
          </div>
        </div>
        
        <div class="filter-row">
          <div class="filter-box">
            <label for="shipping-charge">Shipping Charge</label>
            <input type="number" id="shipping-charge" placeholder="Enter Charge">
          </div>
          <div class="filter-box">
            <label for="shipping-cost">Shipping Cost</label>
            <input type="number" id="shipping-cost" placeholder="Enter Cost">
          </div>
          <div class="filter-box">
            <label for="promotion">Promotion %</label>
            <input type="number" id="promotion" placeholder="Enter Promotion %">
          </div>
          <div class="filter-box">
            <label for="other-costs">Other Costs</label>
            <input type="number" id="other-costs" placeholder="Enter Other Costs">
          </div>
          <div class="filter-box">
            <label for="ebay-store">eBay Store</label>
            <select id="ebay-store">
              <option value="1">Store 1</option>
              <option value="2">Store 2</option>
              <!-- Add more stores if needed -->
            </select>
          </div>
        </div>
      </div>
 

 @endsection 