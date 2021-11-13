=== Better Pricing for WC Paid Listings ===
Contributors: wpfred24
Tags: job board, pricing, sales
Requires at least: 4.7
Tested up to: 5.8.1
Stable tag: 1.0.1
Requires PHP: 7.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Boost your sales by building a custom pricing page and skip the limited "Choose a Package" screen provided by WC Paid Listings.

== Description ==

## What does the plugin do?
It creates a shortcode [job_package_button] which you can add to your custom pricing page or on any other page or post on your site. You must use the shortcode attribute "id" (= product_id) to specify which product you are referring to. The ``<button>`` then redirects your customer to step 2 of the job submission form skipping the "Choose a Package" screen provided by WC Paid Listings. By adding the product id as a attribute in the shortcode the product is already selected in the background.  

## Why is this plugin helpful?
WC Paid Listings is a great little plugin that adds a custom "Job Product" to WooCommerce and helps you and your customers manage their job packages easily. But it comes with a very limited frontend pricing template called "Choose a Package". There are no styling options and you cannot change the order of the products (default is order by product_id which does not make much sense). Every E-Commerce business needs a beautiful pricing page where all your products, features and prices are displayed. You can do that now with this simple plugin.

## Where should I insert the shortcode?
You can insert this shortcode on any post or page created on your site. There are plenty of pricing templates out there for Gutenberg, Elementor, Visual Composer or any other page builder. You can also use WooCommerce's product-related Gutenberg blocks to display your products but instead of the "Add to Cart" button you can add a "Book a listing now" button that redirects to the job submission form. 

## Can I see a demo? ##
Sure, here you go: https://demo.wpfred.com/ 

== Frequently Asked Questions ==

= How do I use the shortcode [job_package_button]? =

1. Make sure you have installed and activated the three plugins WP Job Manager, WooCommerce and WC Paid Listings. 
2. Go to Jobs => Settings => "Job Submission" and select "Choose a package BEFORE entering job details". Otherwise the shortcode does not work properly.
3. Create some products and choose "Job Package" as product type.
4. Create a pricing page where you describe your job package product and add the shortcode. A "Book a listing now" button will appear which redirects your customers to step 2 of the job submission form with the respective job package pre-selected. You can add as many shortcodes on a single post or page as you like.

= What atrributes does the shortcode have? =

1. `id` (=product_id). Example: `[job_package_button id="35"]`.
You must add an ID for the shortcode to work otherwise you might get a "Invalid package" error message when clicking the button.
2. `text` = The text displayed on the button. Default is "Book a job now". Example `[job_package_button id="35" text="Book a Premium job listing now"]`.
3. `url` = The slug of your job submission page. Per default WP Job Manager creates a page /post-a-job. Only use this if you create a job submission page with a different slug. Example: `[job_package_button id="35" url="/create-job-listing"]`
4.`button_class` = CSS class for the ``<button>``. If you don't add a custom class here it will use your theme's default styling for buttons. Add your custom CSS to your child theme's style.css or use the Customizer. `[job_package_button id="35" button_class="pricing-buttons"]`.
5. `div_class` = Add a custom CSS class to the outer div wrapped around the ``<button>``. Example: `[job_package_button id="35" div_class="pricing-area" button_class="pricing-buttons"]`


= What other plugins are required for this plugin to work? =

This plugin adds functionality to the paid plugin WC Paid Listings which can only be used together with WP Job Manager and WooCommerce.

== Changelog ==

= 1.0.1 =
Added link to demo in readme-file
Fixed: added trailing slash to url parameter

= 1.0.0 =
* First version of plugin published. 

