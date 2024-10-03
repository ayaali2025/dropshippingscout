
@extends('layouts.master')

@section('title', $page->title)
@section('meta_description', $page->meta_description)
@section('meta_keywords', $page->meta_keywords)
@section('meta_author', $page->meta_author)


@section('styles')
    <!-- Custom CSS for this view -->
    <link href="{{asset('css/faqs.css')}}" rel="stylesheet">
    <link href="{{asset('css/ebay-calculator.css')}}" rel="stylesheet">
 @endsection

@section('content')
    <div class="header">eBay Fee Calculator</div>
    <p style="text-align: center;">Delve into the flexibility and customization oure services offer to help your product succeed.</p>

    <div class="search-container">
        <input type="text" placeholder="Check Fees By Item ID">
        <button>Search</button>
    </div>

    <div class="filter-container">
      <div class="filter-row">
          <!-- First row of filters -->
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
  
      <!-- Second row of filters (hidden by default) -->
      <div class="filter-row" id="second-filter-row" style="display: none;">
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
              <input type="number" id="ebay-store" placeholder="1">
          </div>
          <div class="filter-box">
            <label for="other-costs">Seller Status</label>
            <input type="number" id="other-costs" placeholder="1">
        </div>
      </div>
  
      <!-- More Options Link -->
      <div style="text-align: center; margin: 20px 0;" id="more-options-container">
          <a href="javascript:void(0);" id="more-options-link" class="more-options-link">
              More Options
              <span class="arrow down"></span>
          </a>
      </div>
  </div>
  
  <!-- Include your JavaScript file or script tag here -->
  <script>
      document.getElementById('more-options-link').addEventListener('click', function() {
          var secondRow = document.getElementById('second-filter-row');
          var linkText = this; // Reference to the "More Options" link
          var arrow = linkText.querySelector('.arrow');
  
          // Show or hide the second row
          if (secondRow.style.display === 'none' || secondRow.style.display === '') {
              // Show the second row
              secondRow.style.display = 'flex'; // or 'block' based on your layout preference
  
              // Move the "More Options" link below the second row
              var filterContainer = document.querySelector('.filter-container');
              filterContainer.appendChild(linkText.parentNode); // Append it after the second row
  
              // Change arrow direction
              arrow.classList.remove('down');
              arrow.classList.add('up');
  
              // Change the text to "Less Options"
              linkText.innerHTML = 'Less Options <span class="arrow up"></span>';
          } else {
              // Hide the second row
              secondRow.style.display = 'none';
  
              // Move the "More Options" link back to its original position
              var filterContainer = document.querySelector('.filter-container');
              filterContainer.insertBefore(linkText.parentNode, secondRow); // Insert before second row
  
              // Reset arrow direction
              arrow.classList.remove('up');
              arrow.classList.add('down');
  
              // Change the text back to "More Options"
              linkText.innerHTML = 'More Options <span class="arrow down"></span>';
          }
      });
  </script>
  
 @endsection 