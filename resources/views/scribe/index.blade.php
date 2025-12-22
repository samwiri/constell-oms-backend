<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Constell API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
                    body .content .php-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.6.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.6.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;,&quot;php&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                                            <button type="button" class="lang-button" data-language-name="php">php</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-user-profile" class="tocify-header">
                <li class="tocify-item level-1" data-unique="user-profile">
                    <a href="#user-profile">User profile</a>
                </li>
                                    <ul id="tocify-subheader-user-profile" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="user-profile-POSTapi-auth-register">
                                <a href="#user-profile-POSTapi-auth-register">Create profile account</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-profile-POSTapi-auth-send_otp">
                                <a href="#user-profile-POSTapi-auth-send_otp">Send OTP</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-profile-POSTapi-auth-verify_otp">
                                <a href="#user-profile-POSTapi-auth-verify_otp">Verify OTP</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-profile-POSTapi-auth-change_password">
                                <a href="#user-profile-POSTapi-auth-change_password">Set or change password</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-profile-POSTapi-auth-login">
                                <a href="#user-profile-POSTapi-auth-login">Login</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-profile-POSTapi-auth-logout">
                                <a href="#user-profile-POSTapi-auth-logout">Log Out  User</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-profile-GETapi-auth-user">
                                <a href="#user-profile-GETapi-auth-user">User Profile</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-profile-PUTapi-auth-update_user">
                                <a href="#user-profile-PUTapi-auth-update_user">Update user</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-warehouse-location" class="tocify-header">
                <li class="tocify-item level-1" data-unique="warehouse-location">
                    <a href="#warehouse-location">Warehouse Location</a>
                </li>
                                    <ul id="tocify-subheader-warehouse-location" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="warehouse-location-GETapi-settings-locations">
                                <a href="#warehouse-location-GETapi-settings-locations">Warehouse Locations</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="warehouse-location-POSTapi-settings-locations">
                                <a href="#warehouse-location-POSTapi-settings-locations">Create Warehouse Location</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="warehouse-location-PUTapi-settings-locations--id-">
                                <a href="#warehouse-location-PUTapi-settings-locations--id-">Update Warehouse Location</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="warehouse-location-DELETEapi-settings-locations--id-">
                                <a href="#warehouse-location-DELETEapi-settings-locations--id-">Delete Warehouse Location</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="warehouse-location-POSTapi-settings-warehouse_racks">
                                <a href="#warehouse-location-POSTapi-settings-warehouse_racks">Create Warehouse Rack</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="warehouse-location-PUTapi-settings-warehouse_racks--id-">
                                <a href="#warehouse-location-PUTapi-settings-warehouse_racks--id-">Update Warehouse Rack</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="warehouse-location-DELETEapi-settings-warehouse_racks--id-">
                                <a href="#warehouse-location-DELETEapi-settings-warehouse_racks--id-">Delete Warehouse Rack</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-orders" class="tocify-header">
                <li class="tocify-item level-1" data-unique="orders">
                    <a href="#orders">Orders</a>
                </li>
                                    <ul id="tocify-subheader-orders" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="orders-GETapi-orders">
                                <a href="#orders-GETapi-orders">Orders</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="orders-POSTapi-orders">
                                <a href="#orders-POSTapi-orders">Place Order</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="orders-GETapi-orders--id-">
                                <a href="#orders-GETapi-orders--id-">Show Order</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="orders-PUTapi-orders--id-">
                                <a href="#orders-PUTapi-orders--id-">Update Order</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="orders-DELETEapi-orders--id-">
                                <a href="#orders-DELETEapi-orders--id-">Delete Order</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="orders-GETapi-orders-tracking--tracking_number-">
                                <a href="#orders-GETapi-orders-tracking--tracking_number-">Get Order By Tracking Number</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="orders-POSTapi-order_status_hisory">
                                <a href="#orders-POSTapi-order_status_hisory">Update Order status</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="orders-DELETEapi-order_status_hisory--id-">
                                <a href="#orders-DELETEapi-order_status_hisory--id-">Delete Order status history</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-package" class="tocify-header">
                <li class="tocify-item level-1" data-unique="package">
                    <a href="#package">Package</a>
                </li>
                                    <ul id="tocify-subheader-package" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="package-POSTapi-packages">
                                <a href="#package-POSTapi-packages">Add Package to order</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="package-PUTapi-packages--package_id-">
                                <a href="#package-PUTapi-packages--package_id-">Update order Package</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="package-DELETEapi-packages--id-">
                                <a href="#package-DELETEapi-packages--id-">Delete Package</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="package-POSTapi-packages--id--package-photos">
                                <a href="#package-POSTapi-packages--id--package-photos">Add Package images</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="package-DELETEapi-packages--id--package-photos">
                                <a href="#package-DELETEapi-packages--id--package-photos">Delete a Package image</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-consolidation-batch" class="tocify-header">
                <li class="tocify-item level-1" data-unique="consolidation-batch">
                    <a href="#consolidation-batch">Consolidation Batch</a>
                </li>
                                    <ul id="tocify-subheader-consolidation-batch" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="consolidation-batch-GETapi-consolidation-batches">
                                <a href="#consolidation-batch-GETapi-consolidation-batches">Consolidation Batches</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="consolidation-batch-GETapi-consolidation-batches--id-">
                                <a href="#consolidation-batch-GETapi-consolidation-batches--id-">Consolidation Batch</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="consolidation-batch-POSTapi-consolidation-batches">
                                <a href="#consolidation-batch-POSTapi-consolidation-batches">Create a Consolidation Batch</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="consolidation-batch-PUTapi-consolidation-batches--id-">
                                <a href="#consolidation-batch-PUTapi-consolidation-batches--id-">Update a Consolidation Batch</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="consolidation-batch-DELETEapi-consolidation-batches--id-">
                                <a href="#consolidation-batch-DELETEapi-consolidation-batches--id-">Delete Consolidation Batch</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-batch-package" class="tocify-header">
                <li class="tocify-item level-1" data-unique="batch-package">
                    <a href="#batch-package">Batch Package</a>
                </li>
                                    <ul id="tocify-subheader-batch-package" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="batch-package-POSTapi-batch-packages">
                                <a href="#batch-package-POSTapi-batch-packages">Add Package to Batch</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="batch-package-DELETEapi-batch-packages">
                                <a href="#batch-package-DELETEapi-batch-packages">Delete Consolidation Batch</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-invoice" class="tocify-header">
                <li class="tocify-item level-1" data-unique="invoice">
                    <a href="#invoice">Invoice</a>
                </li>
                                    <ul id="tocify-subheader-invoice" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="invoice-GETapi-billing-invoices">
                                <a href="#invoice-GETapi-billing-invoices">Make an Invoice</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="invoice-POSTapi-billing-invoices">
                                <a href="#invoice-POSTapi-billing-invoices">Make an Invoice</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="invoice-GETapi-billing-invoices--id-">
                                <a href="#invoice-GETapi-billing-invoices--id-">Single Invoice Details</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="invoice-PUTapi-billing-invoices--id-">
                                <a href="#invoice-PUTapi-billing-invoices--id-">Update an Invoice</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="invoice-DELETEapi-billing-invoices--id-">
                                <a href="#invoice-DELETEapi-billing-invoices--id-">Delete Invoice</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="invoice-POSTapi-billing-invoices--id--restore">
                                <a href="#invoice-POSTapi-billing-invoices--id--restore">Restore Invoice</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="invoice-POSTapi-billing-invoice-line-items">
                                <a href="#invoice-POSTapi-billing-invoice-line-items">Add Item to Invoice</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="invoice-PUTapi-billing-invoice-line-items--id-">
                                <a href="#invoice-PUTapi-billing-invoice-line-items--id-">Edit Invoice Item</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="invoice-DELETEapi-billing-invoice-line-items--id-">
                                <a href="#invoice-DELETEapi-billing-invoice-line-items--id-">Delete Invoice Item</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="invoice-POSTapi-billing-invoice-line-items--id--restore">
                                <a href="#invoice-POSTapi-billing-invoice-line-items--id--restore">Restore Invoice Item</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="invoice-POSTapi-billing-payments">
                                <a href="#invoice-POSTapi-billing-payments">Record Invoice Payment</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="invoice-DELETEapi-billing-payments--payment_id-">
                                <a href="#invoice-DELETEapi-billing-payments--payment_id-">Delete Invoice Payment</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="invoice-GETapi-billing-send_invoice--invoice_id-">
                                <a href="#invoice-GETapi-billing-send_invoice--invoice_id-">Send Invoice Notification</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-delivery-order" class="tocify-header">
                <li class="tocify-item level-1" data-unique="delivery-order">
                    <a href="#delivery-order">Delivery Order</a>
                </li>
                                    <ul id="tocify-subheader-delivery-order" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="delivery-order-GETapi-delivery-orders">
                                <a href="#delivery-order-GETapi-delivery-orders">Delivery Orders</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="delivery-order-POSTapi-delivery-orders">
                                <a href="#delivery-order-POSTapi-delivery-orders">Create Order Deliver</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="delivery-order-GETapi-delivery-orders--id-">
                                <a href="#delivery-order-GETapi-delivery-orders--id-">Single Delivery Order</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="delivery-order-PUTapi-delivery-orders--id-">
                                <a href="#delivery-order-PUTapi-delivery-orders--id-">Update Order Deliver</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="delivery-order-DELETEapi-delivery-orders--id-">
                                <a href="#delivery-order-DELETEapi-delivery-orders--id-">Delete Delivery Order</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="delivery-order-POSTapi-delivery-orders--delivery_order--upload-pod">
                                <a href="#delivery-order-POSTapi-delivery-orders--delivery_order--upload-pod">Upload a point of Delivery photo</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="delivery-order-POSTapi-delivery-orders--delivery_order--upload-signature">
                                <a href="#delivery-order-POSTapi-delivery-orders--delivery_order--upload-signature">Upload Customer Delivery Signature</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="delivery-order-POSTapi-delivery-update-orders-status--delivery_order-">
                                <a href="#delivery-order-POSTapi-delivery-update-orders-status--delivery_order-">Update Delivery Order status</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="delivery-order-GETapi-delivery-dashboard">
                                <a href="#delivery-order-GETapi-delivery-dashboard">Dashboard</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="delivery-order-GETapi-delivery-riders">
                                <a href="#delivery-order-GETapi-delivery-riders">Riders</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-assistedshopping" class="tocify-header">
                <li class="tocify-item level-1" data-unique="assistedshopping">
                    <a href="#assistedshopping">AssistedShopping</a>
                </li>
                                    <ul id="tocify-subheader-assistedshopping" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="assistedshopping-GETapi-assisted_shopping">
                                <a href="#assistedshopping-GETapi-assisted_shopping">Assisted shopping lists</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="assistedshopping-POSTapi-assisted_shopping">
                                <a href="#assistedshopping-POSTapi-assisted_shopping">Add Assisted shopping</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="assistedshopping-GETapi-assisted_shopping--id-">
                                <a href="#assistedshopping-GETapi-assisted_shopping--id-">Assisted shopping</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="assistedshopping-PUTapi-assisted_shopping--id-">
                                <a href="#assistedshopping-PUTapi-assisted_shopping--id-">Updated Assisted shopping</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="assistedshopping-DELETEapi-assisted_shopping--id-">
                                <a href="#assistedshopping-DELETEapi-assisted_shopping--id-">Updated Assisted shopping</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="assistedshopping-POSTapi-assisted_shopping_quote">
                                <a href="#assistedshopping-POSTapi-assisted_shopping_quote">Add Assistedshopping Quote Item</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="assistedshopping-PUTapi-assisted_shopping_quote--id-">
                                <a href="#assistedshopping-PUTapi-assisted_shopping_quote--id-">Update Assisted shopping Quote</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="assistedshopping-DELETEapi-assisted_shopping_quote--id-">
                                <a href="#assistedshopping-DELETEapi-assisted_shopping_quote--id-">Delete Assisted shopping Quote item</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-others" class="tocify-header">
                <li class="tocify-item level-1" data-unique="others">
                    <a href="#others">Others</a>
                </li>
                                    <ul id="tocify-subheader-others" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="others-GETapi-settings-locations--id-">
                                <a href="#others-GETapi-settings-locations--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="others-GETapi-settings-warehouse_racks">
                                <a href="#others-GETapi-settings-warehouse_racks">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="others-GETapi-settings-warehouse_racks--id-">
                                <a href="#others-GETapi-settings-warehouse_racks--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="others-GETapi-billing-invoice-line-items">
                                <a href="#others-GETapi-billing-invoice-line-items">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="others-GETapi-billing-invoice-line-items--id-">
                                <a href="#others-GETapi-billing-invoice-line-items--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="others-GETapi-assisted_shopping_quote">
                                <a href="#others-GETapi-assisted_shopping_quote">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="others-GETapi-assisted_shopping_quote--id-">
                                <a href="#others-GETapi-assisted_shopping_quote--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="others-GETapi-activity_logs">
                                <a href="#others-GETapi-activity_logs">GET api/activity_logs</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: December 22, 2025</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="user-profile">User profile</h1>

    

                                <h2 id="user-profile-POSTapi-auth-register">Create profile account</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-auth-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/auth/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"full_name\": \"consequatur\",
    \"email\": \"qkunze@example.com\",
    \"phone\": \"consequatur\",
    \"tin\": \"consequatur\",
    \"passport\": \"consequatur\",
    \"address\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/auth/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "full_name": "consequatur",
    "email": "qkunze@example.com",
    "phone": "consequatur",
    "tin": "consequatur",
    "passport": "consequatur",
    "address": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/auth/register';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'full_name' =&gt; 'consequatur',
            'email' =&gt; 'qkunze@example.com',
            'phone' =&gt; 'consequatur',
            'tin' =&gt; 'consequatur',
            'passport' =&gt; 'consequatur',
            'address' =&gt; 'consequatur',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-auth-register">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;success&quot;,
    &quot;message&quot;: &quot;Account created successfully&quot;,
    &quot;data&quot;: {
        &quot;full_name&quot;: &quot;Thembo Charles&quot;,
        &quot;email&quot;: &quot;ashley7520charles@gmail.com&quot;,
        &quot;phone&quot;: &quot;0787444081&quot;,
        &quot;tin&quot;: &quot;110023452&quot;,
        &quot;passport&quot;: &quot;65748&quot;,
        &quot;address&quot;: &quot;Kampala&quot;,
        &quot;updated_at&quot;: &quot;2025-12-05T06:42:09.000000Z&quot;,
        &quot;created_at&quot;: &quot;2025-12-05T06:42:09.000000Z&quot;,
        &quot;id&quot;: 1
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-auth-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-auth-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-register"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-auth-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-register">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-auth-register" data-method="POST"
      data-path="api/auth/register"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-auth-register"
                    onclick="tryItOut('POSTapi-auth-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-auth-register"
                    onclick="cancelTryOut('POSTapi-auth-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-auth-register"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/auth/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-auth-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-auth-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>full_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="full_name"                data-endpoint="POSTapi-auth-register"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-auth-register"
               value="qkunze@example.com"
               data-component="body">
    <br>
<p>Example: <code>qkunze@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone"                data-endpoint="POSTapi-auth-register"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>tin</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="tin"                data-endpoint="POSTapi-auth-register"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>passport</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="passport"                data-endpoint="POSTapi-auth-register"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>address</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="address"                data-endpoint="POSTapi-auth-register"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="user-profile-POSTapi-auth-send_otp">Send OTP</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-auth-send_otp">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/auth/send_otp" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"validation_text\": \"Email or Password\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/auth/send_otp"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "validation_text": "Email or Password"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/auth/send_otp';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'validation_text' =&gt; 'Email or Password',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-auth-send_otp">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
         &quot;status&quot;: &quot;success&quot;,
          &quot;message&quot;: &quot;An OTP has been sent to your phone and email&quot;,
      }
  }</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-auth-send_otp" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-auth-send_otp"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-send_otp"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-auth-send_otp" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-send_otp">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-auth-send_otp" data-method="POST"
      data-path="api/auth/send_otp"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-send_otp', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-auth-send_otp"
                    onclick="tryItOut('POSTapi-auth-send_otp');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-auth-send_otp"
                    onclick="cancelTryOut('POSTapi-auth-send_otp');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-auth-send_otp"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/auth/send_otp</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="POSTapi-auth-send_otp"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-auth-send_otp"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-auth-send_otp"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>validation_text</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="validation_text"                data-endpoint="POSTapi-auth-send_otp"
               value="Email or Password"
               data-component="body">
    <br>
<p>Example: <code>Email or Password</code></p>
        </div>
        </form>

                    <h2 id="user-profile-POSTapi-auth-verify_otp">Verify OTP</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-auth-verify_otp">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/auth/verify_otp" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"validation_text\": \"Email or phone number\",
    \"otp\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/auth/verify_otp"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "validation_text": "Email or phone number",
    "otp": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/auth/verify_otp';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'validation_text' =&gt; 'Email or phone number',
            'otp' =&gt; 'consequatur',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-auth-verify_otp">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
         &quot;status&quot;: &quot;success&quot;,
          &quot;message&quot;: &quot;An OTP has been sent to your phone and email&quot;,
      }
  }</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-auth-verify_otp" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-auth-verify_otp"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-verify_otp"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-auth-verify_otp" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-verify_otp">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-auth-verify_otp" data-method="POST"
      data-path="api/auth/verify_otp"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-verify_otp', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-auth-verify_otp"
                    onclick="tryItOut('POSTapi-auth-verify_otp');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-auth-verify_otp"
                    onclick="cancelTryOut('POSTapi-auth-verify_otp');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-auth-verify_otp"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/auth/verify_otp</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="POSTapi-auth-verify_otp"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-auth-verify_otp"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-auth-verify_otp"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>validation_text</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="validation_text"                data-endpoint="POSTapi-auth-verify_otp"
               value="Email or phone number"
               data-component="body">
    <br>
<p>Example: <code>Email or phone number</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>otp</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="otp"                data-endpoint="POSTapi-auth-verify_otp"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="user-profile-POSTapi-auth-change_password">Set or change password</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-auth-change_password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/auth/change_password" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"password\": \"O[2UZ5ij-e\\/dl4m{o,\",
    \"password_confirmation\": \"consequatur\",
    \"user_id\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/auth/change_password"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "password": "O[2UZ5ij-e\/dl4m{o,",
    "password_confirmation": "consequatur",
    "user_id": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/auth/change_password';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'password' =&gt; 'O[2UZ5ij-e/dl4m{o,',
            'password_confirmation' =&gt; 'consequatur',
            'user_id' =&gt; 'consequatur',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-auth-change_password">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
         &quot;status&quot;: &quot;success&quot;,
          &quot;message&quot;: &quot;Account Password has been reset&quot;,
      }
  }</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-auth-change_password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-auth-change_password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-change_password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-auth-change_password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-change_password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-auth-change_password" data-method="POST"
      data-path="api/auth/change_password"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-change_password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-auth-change_password"
                    onclick="tryItOut('POSTapi-auth-change_password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-auth-change_password"
                    onclick="cancelTryOut('POSTapi-auth-change_password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-auth-change_password"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/auth/change_password</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="POSTapi-auth-change_password"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-auth-change_password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-auth-change_password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-auth-change_password"
               value="O[2UZ5ij-e/dl4m{o,"
               data-component="body">
    <br>
<p>Example: <code>O[2UZ5ij-e/dl4m{o,</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password_confirmation</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password_confirmation"                data-endpoint="POSTapi-auth-change_password"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>required</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="user_id"                data-endpoint="POSTapi-auth-change_password"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="user-profile-POSTapi-auth-login">Login</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-auth-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/auth/login" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"password\": \"O[2UZ5ij-e\\/dl4m{o,\",
    \"email\": \"qkunze@example.com\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/auth/login"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "password": "O[2UZ5ij-e\/dl4m{o,",
    "email": "qkunze@example.com"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/auth/login';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'password' =&gt; 'O[2UZ5ij-e/dl4m{o,',
            'email' =&gt; 'qkunze@example.com',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-auth-login">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;success&quot;,
    &quot;message&quot;: &quot;Successfully loged in&quot;,
    &quot;authorization&quot;: {
        &quot;token&quot;: &quot;1|ipsfUoT7lmvPZaeKNtyU5GDIarzgv084cW0RLfxl80a3b2ec&quot;,
        &quot;token_type&quot;: &quot;Bearer&quot;
    },
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;full_name&quot;: &quot;Thembo Charles&quot;,
        &quot;email&quot;: &quot;ashley7520charles@gmail.com&quot;,
        &quot;phone&quot;: &quot;0787444081&quot;,
        &quot;email_verified_at&quot;: null,
        &quot;tin&quot;: &quot;110023452&quot;,
        &quot;passport&quot;: &quot;65748&quot;,
        &quot;address&quot;: &quot;Kampala&quot;,
        &quot;otp&quot;: &quot;4782&quot;,
        &quot;status&quot;: &quot;active&quot;,
        &quot;user_type&quot;: &quot;user&quot;,
        &quot;created_at&quot;: &quot;2025-12-05T06:42:09.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-12-05T07:58:28.000000Z&quot;,
        &quot;deleted_at&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-auth-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-auth-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-auth-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-auth-login" data-method="POST"
      data-path="api/auth/login"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-auth-login"
                    onclick="tryItOut('POSTapi-auth-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-auth-login"
                    onclick="cancelTryOut('POSTapi-auth-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-auth-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/auth/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="POSTapi-auth-login"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-auth-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-auth-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-auth-login"
               value="O[2UZ5ij-e/dl4m{o,"
               data-component="body">
    <br>
<p>Example: <code>O[2UZ5ij-e/dl4m{o,</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-auth-login"
               value="qkunze@example.com"
               data-component="body">
    <br>
<p>Example: <code>qkunze@example.com</code></p>
        </div>
        </form>

                    <h2 id="user-profile-POSTapi-auth-logout">Log Out  User</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-auth-logout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/auth/logout" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/auth/logout"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/auth/logout';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-auth-logout">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
         &quot;status&quot;: &quot;success&quot;,
          &quot;message&quot;: &quot;Successfully logged out&quot;,
      }
  }</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-auth-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-auth-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-logout"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-auth-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-logout">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-auth-logout" data-method="POST"
      data-path="api/auth/logout"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-auth-logout"
                    onclick="tryItOut('POSTapi-auth-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-auth-logout"
                    onclick="cancelTryOut('POSTapi-auth-logout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-auth-logout"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/auth/logout</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="POSTapi-auth-logout"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-auth-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-auth-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="user-profile-GETapi-auth-user">User Profile</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-auth-user">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/auth/user" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/auth/user"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/auth/user';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-auth-user">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;success&quot;,
    &quot;message&quot;: &quot;User Profile&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;full_name&quot;: &quot;Thembo Charles&quot;,
        &quot;email&quot;: &quot;ashley7520charles@gmail.com&quot;,
        &quot;phone&quot;: &quot;0787444081&quot;,
        &quot;email_verified_at&quot;: null,
        &quot;tin&quot;: &quot;110023452&quot;,
        &quot;passport&quot;: &quot;65748&quot;,
        &quot;address&quot;: &quot;Kampala&quot;,
        &quot;otp&quot;: &quot;4782&quot;,
        &quot;status&quot;: &quot;active&quot;,
        &quot;user_type&quot;: &quot;user&quot;,
        &quot;created_at&quot;: &quot;2025-12-05T06:42:09.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-12-05T07:58:28.000000Z&quot;,
        &quot;deleted_at&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-auth-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-auth-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-auth-user"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-auth-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-auth-user">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-auth-user" data-method="GET"
      data-path="api/auth/user"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-auth-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-auth-user"
                    onclick="tryItOut('GETapi-auth-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-auth-user"
                    onclick="cancelTryOut('GETapi-auth-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-auth-user"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/auth/user</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="GETapi-auth-user"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-auth-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-auth-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="user-profile-PUTapi-auth-update_user">Update user</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-auth-update_user">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/auth/update_user" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"full_name\": \"consequatur\",
    \"phone\": \"consequatur\",
    \"tin\": \"consequatur\",
    \"passport\": \"consequatur\",
    \"address\": \"consequatur\",
    \"street\": \"consequatur\",
    \"city\": \"consequatur\",
    \"region\": \"consequatur\",
    \"country\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/auth/update_user"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "full_name": "consequatur",
    "phone": "consequatur",
    "tin": "consequatur",
    "passport": "consequatur",
    "address": "consequatur",
    "street": "consequatur",
    "city": "consequatur",
    "region": "consequatur",
    "country": "consequatur"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/auth/update_user';
$response = $client-&gt;put(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'full_name' =&gt; 'consequatur',
            'phone' =&gt; 'consequatur',
            'tin' =&gt; 'consequatur',
            'passport' =&gt; 'consequatur',
            'address' =&gt; 'consequatur',
            'street' =&gt; 'consequatur',
            'city' =&gt; 'consequatur',
            'region' =&gt; 'consequatur',
            'country' =&gt; 'consequatur',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-auth-update_user">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
  &quot;status&quot;: &quot;success&quot;,
  &quot;message&quot;: &quot;Successfully logged out&quot;,
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-auth-update_user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-auth-update_user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-auth-update_user"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-auth-update_user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-auth-update_user">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-auth-update_user" data-method="PUT"
      data-path="api/auth/update_user"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-auth-update_user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-auth-update_user"
                    onclick="tryItOut('PUTapi-auth-update_user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-auth-update_user"
                    onclick="cancelTryOut('PUTapi-auth-update_user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-auth-update_user"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/auth/update_user</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="PUTapi-auth-update_user"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-auth-update_user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-auth-update_user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>full_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="full_name"                data-endpoint="PUTapi-auth-update_user"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone"                data-endpoint="PUTapi-auth-update_user"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>tin</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="tin"                data-endpoint="PUTapi-auth-update_user"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>passport</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="passport"                data-endpoint="PUTapi-auth-update_user"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>address</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="address"                data-endpoint="PUTapi-auth-update_user"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>street</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="street"                data-endpoint="PUTapi-auth-update_user"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>city</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="city"                data-endpoint="PUTapi-auth-update_user"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>region</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="region"                data-endpoint="PUTapi-auth-update_user"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="country"                data-endpoint="PUTapi-auth-update_user"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
        </form>

                <h1 id="warehouse-location">Warehouse Location</h1>

    

                                <h2 id="warehouse-location-GETapi-settings-locations">Warehouse Locations</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-settings-locations">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/settings/locations" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/settings/locations"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/settings/locations';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-settings-locations">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;success&quot;,
    &quot;message&quot;: &quot;Warehouse Locations&quot;,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;created_at&quot;: &quot;2025-12-05T09:12:00.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-12-05T09:12:00.000000Z&quot;,
            &quot;deleted_at&quot;: null,
            &quot;country&quot;: &quot;Uganda&quot;,
            &quot;address&quot;: &quot;A&quot;,
            &quot;rack_count&quot;: &quot;01&quot;,
            &quot;is_occupied&quot;: 0
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-settings-locations" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-settings-locations"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-settings-locations"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-settings-locations" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-settings-locations">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-settings-locations" data-method="GET"
      data-path="api/settings/locations"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-settings-locations', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-settings-locations"
                    onclick="tryItOut('GETapi-settings-locations');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-settings-locations"
                    onclick="cancelTryOut('GETapi-settings-locations');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-settings-locations"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/settings/locations</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-settings-locations"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-settings-locations"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="warehouse-location-POSTapi-settings-locations">Create Warehouse Location</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-settings-locations">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/settings/locations" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"code\": \"consequatur\",
    \"address\": \"consequatur\",
    \"manager\": \"consequatur\",
    \"active\": false,
    \"rack_count\": \"consequatur\",
    \"name\": \"consequatur\",
    \"country\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/settings/locations"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "code": "consequatur",
    "address": "consequatur",
    "manager": "consequatur",
    "active": false,
    "rack_count": "consequatur",
    "name": "consequatur",
    "country": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/settings/locations';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'code' =&gt; 'consequatur',
            'address' =&gt; 'consequatur',
            'manager' =&gt; 'consequatur',
            'active' =&gt; false,
            'rack_count' =&gt; 'consequatur',
            'name' =&gt; 'consequatur',
            'country' =&gt; 'consequatur',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-settings-locations">
</span>
<span id="execution-results-POSTapi-settings-locations" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-settings-locations"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-settings-locations"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-settings-locations" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-settings-locations">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-settings-locations" data-method="POST"
      data-path="api/settings/locations"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-settings-locations', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-settings-locations"
                    onclick="tryItOut('POSTapi-settings-locations');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-settings-locations"
                    onclick="cancelTryOut('POSTapi-settings-locations');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-settings-locations"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/settings/locations</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-settings-locations"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-settings-locations"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="code"                data-endpoint="POSTapi-settings-locations"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>address</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="address"                data-endpoint="POSTapi-settings-locations"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>manager</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="manager"                data-endpoint="POSTapi-settings-locations"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>active</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-settings-locations" style="display: none">
            <input type="radio" name="active"
                   value="true"
                   data-endpoint="POSTapi-settings-locations"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-settings-locations" style="display: none">
            <input type="radio" name="active"
                   value="false"
                   data-endpoint="POSTapi-settings-locations"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Request parameter: active. Example: <code>false</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>rack_count</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rack_count"                data-endpoint="POSTapi-settings-locations"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-settings-locations"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="country"                data-endpoint="POSTapi-settings-locations"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="warehouse-location-PUTapi-settings-locations--id-">Update Warehouse Location</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-settings-locations--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/settings/locations/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"code\": \"consequatur\",
    \"address\": \"consequatur\",
    \"manager\": \"consequatur\",
    \"active\": false,
    \"rack_count\": \"consequatur\",
    \"name\": \"consequatur\",
    \"country\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/settings/locations/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "code": "consequatur",
    "address": "consequatur",
    "manager": "consequatur",
    "active": false,
    "rack_count": "consequatur",
    "name": "consequatur",
    "country": "consequatur"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/settings/locations/consequatur';
$response = $client-&gt;put(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'code' =&gt; 'consequatur',
            'address' =&gt; 'consequatur',
            'manager' =&gt; 'consequatur',
            'active' =&gt; false,
            'rack_count' =&gt; 'consequatur',
            'name' =&gt; 'consequatur',
            'country' =&gt; 'consequatur',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-settings-locations--id-">
</span>
<span id="execution-results-PUTapi-settings-locations--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-settings-locations--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-settings-locations--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-settings-locations--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-settings-locations--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-settings-locations--id-" data-method="PUT"
      data-path="api/settings/locations/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-settings-locations--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-settings-locations--id-"
                    onclick="tryItOut('PUTapi-settings-locations--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-settings-locations--id-"
                    onclick="cancelTryOut('PUTapi-settings-locations--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-settings-locations--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/settings/locations/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/settings/locations/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-settings-locations--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-settings-locations--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-settings-locations--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the location. Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>warehouseLocation_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="warehouseLocation_id"                data-endpoint="PUTapi-settings-locations--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="code"                data-endpoint="PUTapi-settings-locations--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>address</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="address"                data-endpoint="PUTapi-settings-locations--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>manager</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="manager"                data-endpoint="PUTapi-settings-locations--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>active</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PUTapi-settings-locations--id-" style="display: none">
            <input type="radio" name="active"
                   value="true"
                   data-endpoint="PUTapi-settings-locations--id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-settings-locations--id-" style="display: none">
            <input type="radio" name="active"
                   value="false"
                   data-endpoint="PUTapi-settings-locations--id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Request parameter: active. Example: <code>false</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>rack_count</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rack_count"                data-endpoint="PUTapi-settings-locations--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-settings-locations--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="country"                data-endpoint="PUTapi-settings-locations--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="warehouse-location-DELETEapi-settings-locations--id-">Delete Warehouse Location</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-settings-locations--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/settings/locations/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/settings/locations/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/settings/locations/consequatur';
$response = $client-&gt;delete(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-settings-locations--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;success&quot;,
    &quot;message&quot;: &quot;Warehouse Location deleted successfully&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-settings-locations--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-settings-locations--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-settings-locations--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-settings-locations--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-settings-locations--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-settings-locations--id-" data-method="DELETE"
      data-path="api/settings/locations/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-settings-locations--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-settings-locations--id-"
                    onclick="tryItOut('DELETEapi-settings-locations--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-settings-locations--id-"
                    onclick="cancelTryOut('DELETEapi-settings-locations--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-settings-locations--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/settings/locations/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-settings-locations--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-settings-locations--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-settings-locations--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the location. Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>warehouseLocation_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="warehouseLocation_id"                data-endpoint="DELETEapi-settings-locations--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="warehouse-location-POSTapi-settings-warehouse_racks">Create Warehouse Rack</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-settings-warehouse_racks">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/settings/warehouse_racks" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"zone_name\": \"consequatur\",
    \"bin_start\": \"consequatur\",
    \"bin_end\": \"consequatur\",
    \"capacity\": \"consequatur\",
    \"type\": \"consequatur\",
    \"warehouse_location_id\": 17
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/settings/warehouse_racks"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "zone_name": "consequatur",
    "bin_start": "consequatur",
    "bin_end": "consequatur",
    "capacity": "consequatur",
    "type": "consequatur",
    "warehouse_location_id": 17
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/settings/warehouse_racks';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'zone_name' =&gt; 'consequatur',
            'bin_start' =&gt; 'consequatur',
            'bin_end' =&gt; 'consequatur',
            'capacity' =&gt; 'consequatur',
            'type' =&gt; 'consequatur',
            'warehouse_location_id' =&gt; 17,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-settings-warehouse_racks">
</span>
<span id="execution-results-POSTapi-settings-warehouse_racks" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-settings-warehouse_racks"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-settings-warehouse_racks"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-settings-warehouse_racks" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-settings-warehouse_racks">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-settings-warehouse_racks" data-method="POST"
      data-path="api/settings/warehouse_racks"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-settings-warehouse_racks', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-settings-warehouse_racks"
                    onclick="tryItOut('POSTapi-settings-warehouse_racks');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-settings-warehouse_racks"
                    onclick="cancelTryOut('POSTapi-settings-warehouse_racks');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-settings-warehouse_racks"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/settings/warehouse_racks</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-settings-warehouse_racks"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-settings-warehouse_racks"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>zone_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="zone_name"                data-endpoint="POSTapi-settings-warehouse_racks"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>bin_start</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="bin_start"                data-endpoint="POSTapi-settings-warehouse_racks"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>bin_end</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="bin_end"                data-endpoint="POSTapi-settings-warehouse_racks"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>capacity</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="capacity"                data-endpoint="POSTapi-settings-warehouse_racks"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="type"                data-endpoint="POSTapi-settings-warehouse_racks"
               value="consequatur"
               data-component="body">
    <br>
<p>Example SHELF,PALLET,COLD,FRAGILE Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>warehouse_location_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="warehouse_location_id"                data-endpoint="POSTapi-settings-warehouse_racks"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
        </div>
        </form>

                    <h2 id="warehouse-location-PUTapi-settings-warehouse_racks--id-">Update Warehouse Rack</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-settings-warehouse_racks--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/settings/warehouse_racks/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"zone_name\": \"consequatur\",
    \"bin_start\": \"consequatur\",
    \"bin_end\": \"consequatur\",
    \"capacity\": \"consequatur\",
    \"type\": \"consequatur\",
    \"warehouse_location_id\": 17,
    \"warehouseRack_id\": 17
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/settings/warehouse_racks/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "zone_name": "consequatur",
    "bin_start": "consequatur",
    "bin_end": "consequatur",
    "capacity": "consequatur",
    "type": "consequatur",
    "warehouse_location_id": 17,
    "warehouseRack_id": 17
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/settings/warehouse_racks/1';
$response = $client-&gt;put(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'zone_name' =&gt; 'consequatur',
            'bin_start' =&gt; 'consequatur',
            'bin_end' =&gt; 'consequatur',
            'capacity' =&gt; 'consequatur',
            'type' =&gt; 'consequatur',
            'warehouse_location_id' =&gt; 17,
            'warehouseRack_id' =&gt; 17,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-settings-warehouse_racks--id-">
</span>
<span id="execution-results-PUTapi-settings-warehouse_racks--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-settings-warehouse_racks--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-settings-warehouse_racks--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-settings-warehouse_racks--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-settings-warehouse_racks--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-settings-warehouse_racks--id-" data-method="PUT"
      data-path="api/settings/warehouse_racks/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-settings-warehouse_racks--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-settings-warehouse_racks--id-"
                    onclick="tryItOut('PUTapi-settings-warehouse_racks--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-settings-warehouse_racks--id-"
                    onclick="cancelTryOut('PUTapi-settings-warehouse_racks--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-settings-warehouse_racks--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/settings/warehouse_racks/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/settings/warehouse_racks/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-settings-warehouse_racks--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-settings-warehouse_racks--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-settings-warehouse_racks--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the warehouse rack. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>zone_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="zone_name"                data-endpoint="PUTapi-settings-warehouse_racks--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>sometimes Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>bin_start</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="bin_start"                data-endpoint="PUTapi-settings-warehouse_racks--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>sometimes Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>bin_end</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="bin_end"                data-endpoint="PUTapi-settings-warehouse_racks--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>sometimes Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>capacity</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="capacity"                data-endpoint="PUTapi-settings-warehouse_racks--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>sometimes Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="type"                data-endpoint="PUTapi-settings-warehouse_racks--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>sometimes Example SHELF,PALLET,COLD,FRAGILE Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>warehouse_location_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="warehouse_location_id"                data-endpoint="PUTapi-settings-warehouse_racks--id-"
               value="17"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the warehouse_locations table. Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>warehouseRack_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="warehouseRack_id"                data-endpoint="PUTapi-settings-warehouse_racks--id-"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
        </div>
        </form>

                    <h2 id="warehouse-location-DELETEapi-settings-warehouse_racks--id-">Delete Warehouse Rack</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-settings-warehouse_racks--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/settings/warehouse_racks/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"warehouseRack_id\": 17
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/settings/warehouse_racks/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "warehouseRack_id": 17
};

fetch(url, {
    method: "DELETE",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/settings/warehouse_racks/1';
$response = $client-&gt;delete(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'warehouseRack_id' =&gt; 17,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-settings-warehouse_racks--id-">
</span>
<span id="execution-results-DELETEapi-settings-warehouse_racks--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-settings-warehouse_racks--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-settings-warehouse_racks--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-settings-warehouse_racks--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-settings-warehouse_racks--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-settings-warehouse_racks--id-" data-method="DELETE"
      data-path="api/settings/warehouse_racks/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-settings-warehouse_racks--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-settings-warehouse_racks--id-"
                    onclick="tryItOut('DELETEapi-settings-warehouse_racks--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-settings-warehouse_racks--id-"
                    onclick="cancelTryOut('DELETEapi-settings-warehouse_racks--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-settings-warehouse_racks--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/settings/warehouse_racks/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-settings-warehouse_racks--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-settings-warehouse_racks--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-settings-warehouse_racks--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the warehouse rack. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>warehouseRack_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="warehouseRack_id"                data-endpoint="DELETEapi-settings-warehouse_racks--id-"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
        </div>
        </form>

                <h1 id="orders">Orders</h1>

    

                                <h2 id="orders-GETapi-orders">Orders</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-orders">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/orders" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/orders"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/orders';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-orders">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;current_page&quot;: 1,
        &quot;data&quot;: [
            {
                &quot;id&quot;: 5,
                &quot;created_at&quot;: &quot;2025-12-05T12:20:11.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-05T12:20:11.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;tracking_number&quot;: &quot;ORD-20251205-00002&quot;,
                &quot;user_id&quot;: 1,
                &quot;origin_country&quot;: &quot;ITALY&quot;,
                &quot;receiver_name&quot;: &quot;Tom Mboya&quot;,
                &quot;receiver_phone&quot;: &quot;0789887766&quot;,
                &quot;receiver_email&quot;: &quot;tom.mboya@gmail.com&quot;,
                &quot;receiver_address&quot;: &quot;Uganda - Kampala&quot;,
                &quot;status&quot;: &quot;PENDING&quot;,
                &quot;received_at&quot;: null,
                &quot;dispatched_at&quot;: null,
                &quot;arrived_at&quot;: null,
                &quot;released_at&quot;: null,
                &quot;delivered_at&quot;: null,
                &quot;status_history&quot;: [
                    {
                        &quot;id&quot;: 4,
                        &quot;created_at&quot;: &quot;2025-12-05T12:27:49.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-05T12:27:49.000000Z&quot;,
                        &quot;deleted_at&quot;: null,
                        &quot;order_id&quot;: 5,
                        &quot;status&quot;: &quot;CONSOLIDATED&quot;,
                        &quot;notes&quot;: &quot;Well received&quot;,
                        &quot;location&quot;: &quot;USA&quot;,
                        &quot;user_id&quot;: 1,
                        &quot;user&quot;: {
                            &quot;id&quot;: 1,
                            &quot;full_name&quot;: &quot;Thembo Charles&quot;,
                            &quot;email&quot;: &quot;ashley7520charles@gmail.com&quot;,
                            &quot;phone&quot;: &quot;0787444081&quot;,
                            &quot;email_verified_at&quot;: null,
                            &quot;tin&quot;: &quot;110023452&quot;,
                            &quot;passport&quot;: &quot;65748&quot;,
                            &quot;address&quot;: &quot;Kampala&quot;,
                            &quot;otp&quot;: &quot;4782&quot;,
                            &quot;status&quot;: &quot;active&quot;,
                            &quot;user_type&quot;: &quot;user&quot;,
                            &quot;created_at&quot;: &quot;2025-12-05T06:42:09.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-05T07:58:28.000000Z&quot;,
                            &quot;deleted_at&quot;: null
                        }
                    }
                ],
                &quot;user&quot;: {
                    &quot;id&quot;: 1,
                    &quot;full_name&quot;: &quot;Thembo Charles&quot;,
                    &quot;email&quot;: &quot;ashley7520charles@gmail.com&quot;,
                    &quot;phone&quot;: &quot;0787444081&quot;,
                    &quot;email_verified_at&quot;: null,
                    &quot;tin&quot;: &quot;110023452&quot;,
                    &quot;passport&quot;: &quot;65748&quot;,
                    &quot;address&quot;: &quot;Kampala&quot;,
                    &quot;otp&quot;: &quot;4782&quot;,
                    &quot;status&quot;: &quot;active&quot;,
                    &quot;user_type&quot;: &quot;user&quot;,
                    &quot;created_at&quot;: &quot;2025-12-05T06:42:09.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-05T07:58:28.000000Z&quot;,
                    &quot;deleted_at&quot;: null
                }
            },
            {
                &quot;id&quot;: 2,
                &quot;created_at&quot;: &quot;2025-12-05T11:29:08.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-05T11:29:08.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;tracking_number&quot;: &quot;ORD-20251205-00001&quot;,
                &quot;user_id&quot;: 1,
                &quot;origin_country&quot;: &quot;USA&quot;,
                &quot;receiver_name&quot;: &quot;Tom Mboya&quot;,
                &quot;receiver_phone&quot;: &quot;0789887766&quot;,
                &quot;receiver_email&quot;: &quot;tom.mboya@gmail.com&quot;,
                &quot;receiver_address&quot;: &quot;Uganda - Kampala&quot;,
                &quot;status&quot;: &quot;PENDING&quot;,
                &quot;received_at&quot;: null,
                &quot;dispatched_at&quot;: null,
                &quot;arrived_at&quot;: null,
                &quot;released_at&quot;: null,
                &quot;delivered_at&quot;: null,
                &quot;status_history&quot;: [
                    {
                        &quot;id&quot;: 2,
                        &quot;created_at&quot;: &quot;2025-12-05T12:03:09.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-05T12:03:09.000000Z&quot;,
                        &quot;deleted_at&quot;: null,
                        &quot;order_id&quot;: 2,
                        &quot;status&quot;: &quot;CONSOLIDATED&quot;,
                        &quot;notes&quot;: &quot;Well received&quot;,
                        &quot;location&quot;: &quot;USA&quot;,
                        &quot;user_id&quot;: 1,
                        &quot;user&quot;: {
                            &quot;id&quot;: 1,
                            &quot;full_name&quot;: &quot;Thembo Charles&quot;,
                            &quot;email&quot;: &quot;ashley7520charles@gmail.com&quot;,
                            &quot;phone&quot;: &quot;0787444081&quot;,
                            &quot;email_verified_at&quot;: null,
                            &quot;tin&quot;: &quot;110023452&quot;,
                            &quot;passport&quot;: &quot;65748&quot;,
                            &quot;address&quot;: &quot;Kampala&quot;,
                            &quot;otp&quot;: &quot;4782&quot;,
                            &quot;status&quot;: &quot;active&quot;,
                            &quot;user_type&quot;: &quot;user&quot;,
                            &quot;created_at&quot;: &quot;2025-12-05T06:42:09.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-05T07:58:28.000000Z&quot;,
                            &quot;deleted_at&quot;: null
                        }
                    },
                    {
                        &quot;id&quot;: 1,
                        &quot;created_at&quot;: &quot;2025-12-05T12:01:16.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-05T12:01:16.000000Z&quot;,
                        &quot;deleted_at&quot;: null,
                        &quot;order_id&quot;: 2,
                        &quot;status&quot;: &quot;RECEIVED&quot;,
                        &quot;notes&quot;: &quot;Well received&quot;,
                        &quot;location&quot;: &quot;USA&quot;,
                        &quot;user_id&quot;: null,
                        &quot;user&quot;: null
                    }
                ],
                &quot;user&quot;: {
                    &quot;id&quot;: 1,
                    &quot;full_name&quot;: &quot;Thembo Charles&quot;,
                    &quot;email&quot;: &quot;ashley7520charles@gmail.com&quot;,
                    &quot;phone&quot;: &quot;0787444081&quot;,
                    &quot;email_verified_at&quot;: null,
                    &quot;tin&quot;: &quot;110023452&quot;,
                    &quot;passport&quot;: &quot;65748&quot;,
                    &quot;address&quot;: &quot;Kampala&quot;,
                    &quot;otp&quot;: &quot;4782&quot;,
                    &quot;status&quot;: &quot;active&quot;,
                    &quot;user_type&quot;: &quot;user&quot;,
                    &quot;created_at&quot;: &quot;2025-12-05T06:42:09.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-05T07:58:28.000000Z&quot;,
                    &quot;deleted_at&quot;: null
                }
            }
        ],
        &quot;first_page_url&quot;: &quot;http://127.0.0.1:8000/api/orders?page=1&quot;,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;last_page_url&quot;: &quot;http://127.0.0.1:8000/api/orders?page=1&quot;,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://127.0.0.1:8000/api/orders?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;next_page_url&quot;: null,
        &quot;path&quot;: &quot;http://127.0.0.1:8000/api/orders&quot;,
        &quot;per_page&quot;: 20,
        &quot;prev_page_url&quot;: null,
        &quot;to&quot;: 2,
        &quot;total&quot;: 2
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-orders" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-orders"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-orders"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-orders" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-orders">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-orders" data-method="GET"
      data-path="api/orders"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-orders', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-orders"
                    onclick="tryItOut('GETapi-orders');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-orders"
                    onclick="cancelTryOut('GETapi-orders');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-orders"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/orders</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="GETapi-orders"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-orders"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-orders"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="orders-POSTapi-orders">Place Order</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-orders">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/orders" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"origin_country\": \"consequatur\",
    \"receiver_name\": \"consequatur\",
    \"receiver_phone\": \"consequatur\",
    \"receiver_email\": \"qkunze@example.com\",
    \"receiver_address\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/orders"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "origin_country": "consequatur",
    "receiver_name": "consequatur",
    "receiver_phone": "consequatur",
    "receiver_email": "qkunze@example.com",
    "receiver_address": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/orders';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'origin_country' =&gt; 'consequatur',
            'receiver_name' =&gt; 'consequatur',
            'receiver_phone' =&gt; 'consequatur',
            'receiver_email' =&gt; 'qkunze@example.com',
            'receiver_address' =&gt; 'consequatur',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-orders">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;success&quot;,
    &quot;message&quot;: &quot;Order created successfully.&quot;,
    &quot;data&quot;: {
        &quot;origin_country&quot;: &quot;ITALY&quot;,
        &quot;receiver_name&quot;: &quot;Tom Mboya&quot;,
        &quot;receiver_phone&quot;: &quot;0789887766&quot;,
        &quot;receiver_email&quot;: &quot;tom.mboya@gmail.com&quot;,
        &quot;receiver_address&quot;: &quot;Uganda - Kampala&quot;,
        &quot;tracking_number&quot;: &quot;ORD-20251205-00002&quot;,
        &quot;user_id&quot;: 1,
        &quot;updated_at&quot;: &quot;2025-12-05T12:20:11.000000Z&quot;,
        &quot;created_at&quot;: &quot;2025-12-05T12:20:11.000000Z&quot;,
        &quot;id&quot;: 5,
        &quot;status_history&quot;: [],
        &quot;user&quot;: {
            &quot;id&quot;: 1,
            &quot;full_name&quot;: &quot;Thembo Charles&quot;,
            &quot;email&quot;: &quot;ashley7520charles@gmail.com&quot;,
            &quot;phone&quot;: &quot;0787444081&quot;,
            &quot;email_verified_at&quot;: null,
            &quot;tin&quot;: &quot;110023452&quot;,
            &quot;passport&quot;: &quot;65748&quot;,
            &quot;address&quot;: &quot;Kampala&quot;,
            &quot;otp&quot;: &quot;4782&quot;,
            &quot;status&quot;: &quot;active&quot;,
            &quot;user_type&quot;: &quot;user&quot;,
            &quot;created_at&quot;: &quot;2025-12-05T06:42:09.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-12-05T07:58:28.000000Z&quot;,
            &quot;deleted_at&quot;: null
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-orders" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-orders"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-orders"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-orders" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-orders">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-orders" data-method="POST"
      data-path="api/orders"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-orders', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-orders"
                    onclick="tryItOut('POSTapi-orders');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-orders"
                    onclick="cancelTryOut('POSTapi-orders');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-orders"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/orders</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="POSTapi-orders"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-orders"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-orders"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>origin_country</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="origin_country"                data-endpoint="POSTapi-orders"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>receiver_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="receiver_name"                data-endpoint="POSTapi-orders"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>receiver_phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="receiver_phone"                data-endpoint="POSTapi-orders"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>receiver_email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="receiver_email"                data-endpoint="POSTapi-orders"
               value="qkunze@example.com"
               data-component="body">
    <br>
<p>Example: <code>qkunze@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>receiver_address</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="receiver_address"                data-endpoint="POSTapi-orders"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="orders-GETapi-orders--id-">Show Order</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-orders--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/orders/1" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/orders/1"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/orders/1';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-orders--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: 5,
        &quot;created_at&quot;: &quot;2025-12-05T12:20:11.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-12-05T12:20:11.000000Z&quot;,
        &quot;deleted_at&quot;: null,
        &quot;tracking_number&quot;: &quot;ORD-20251205-00002&quot;,
        &quot;user_id&quot;: 1,
        &quot;origin_country&quot;: &quot;ITALY&quot;,
        &quot;receiver_name&quot;: &quot;Tom Mboya&quot;,
        &quot;receiver_phone&quot;: &quot;0789887766&quot;,
        &quot;receiver_email&quot;: &quot;tom.mboya@gmail.com&quot;,
        &quot;receiver_address&quot;: &quot;Uganda - Kampala&quot;,
        &quot;status&quot;: &quot;PENDING&quot;,
        &quot;received_at&quot;: null,
        &quot;dispatched_at&quot;: null,
        &quot;arrived_at&quot;: null,
        &quot;released_at&quot;: null,
        &quot;delivered_at&quot;: null,
        &quot;status_history&quot;: [
            {
                &quot;id&quot;: 4,
                &quot;created_at&quot;: &quot;2025-12-05T12:27:49.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-05T12:27:49.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;order_id&quot;: 5,
                &quot;status&quot;: &quot;CONSOLIDATED&quot;,
                &quot;notes&quot;: &quot;Well received&quot;,
                &quot;location&quot;: &quot;USA&quot;,
                &quot;user_id&quot;: 1,
                &quot;user&quot;: {
                    &quot;id&quot;: 1,
                    &quot;full_name&quot;: &quot;Thembo Charles&quot;,
                    &quot;email&quot;: &quot;ashley7520charles@gmail.com&quot;,
                    &quot;phone&quot;: &quot;0787444081&quot;,
                    &quot;email_verified_at&quot;: null,
                    &quot;tin&quot;: &quot;110023452&quot;,
                    &quot;passport&quot;: &quot;65748&quot;,
                    &quot;address&quot;: &quot;Kampala&quot;,
                    &quot;otp&quot;: &quot;4782&quot;,
                    &quot;status&quot;: &quot;active&quot;,
                    &quot;user_type&quot;: &quot;user&quot;,
                    &quot;created_at&quot;: &quot;2025-12-05T06:42:09.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-05T07:58:28.000000Z&quot;,
                    &quot;deleted_at&quot;: null
                }
            }
        ],
        &quot;user&quot;: {
            &quot;id&quot;: 1,
            &quot;full_name&quot;: &quot;Thembo Charles&quot;,
            &quot;email&quot;: &quot;ashley7520charles@gmail.com&quot;,
            &quot;phone&quot;: &quot;0787444081&quot;,
            &quot;email_verified_at&quot;: null,
            &quot;tin&quot;: &quot;110023452&quot;,
            &quot;passport&quot;: &quot;65748&quot;,
            &quot;address&quot;: &quot;Kampala&quot;,
            &quot;otp&quot;: &quot;4782&quot;,
            &quot;status&quot;: &quot;active&quot;,
            &quot;user_type&quot;: &quot;user&quot;,
            &quot;created_at&quot;: &quot;2025-12-05T06:42:09.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-12-05T07:58:28.000000Z&quot;,
            &quot;deleted_at&quot;: null
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-orders--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-orders--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-orders--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-orders--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-orders--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-orders--id-" data-method="GET"
      data-path="api/orders/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-orders--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-orders--id-"
                    onclick="tryItOut('GETapi-orders--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-orders--id-"
                    onclick="cancelTryOut('GETapi-orders--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-orders--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/orders/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="GETapi-orders--id-"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-orders--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-orders--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-orders--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the order. Example: <code>1</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>order_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="order_id"                data-endpoint="GETapi-orders--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="orders-PUTapi-orders--id-">Update Order</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-orders--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/orders/1" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"origin_country\": \"consequatur\",
    \"receiver_name\": \"consequatur\",
    \"receiver_phone\": \"consequatur\",
    \"receiver_email\": \"qkunze@example.com\",
    \"receiver_address\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/orders/1"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "origin_country": "consequatur",
    "receiver_name": "consequatur",
    "receiver_phone": "consequatur",
    "receiver_email": "qkunze@example.com",
    "receiver_address": "consequatur"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/orders/1';
$response = $client-&gt;put(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'origin_country' =&gt; 'consequatur',
            'receiver_name' =&gt; 'consequatur',
            'receiver_phone' =&gt; 'consequatur',
            'receiver_email' =&gt; 'qkunze@example.com',
            'receiver_address' =&gt; 'consequatur',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-orders--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
         &quot;status&quot;: &quot;success&quot;,
          &quot;message&quot;: &quot;Order updated successfully.&quot;,
      }
  }</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-orders--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-orders--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-orders--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-orders--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-orders--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-orders--id-" data-method="PUT"
      data-path="api/orders/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-orders--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-orders--id-"
                    onclick="tryItOut('PUTapi-orders--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-orders--id-"
                    onclick="cancelTryOut('PUTapi-orders--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-orders--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/orders/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/orders/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="PUTapi-orders--id-"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-orders--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-orders--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-orders--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the order. Example: <code>1</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>order_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="order_id"                data-endpoint="PUTapi-orders--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>origin_country</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="origin_country"                data-endpoint="PUTapi-orders--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>receiver_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="receiver_name"                data-endpoint="PUTapi-orders--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>receiver_phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="receiver_phone"                data-endpoint="PUTapi-orders--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>receiver_email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="receiver_email"                data-endpoint="PUTapi-orders--id-"
               value="qkunze@example.com"
               data-component="body">
    <br>
<p>Example: <code>qkunze@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>receiver_address</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="receiver_address"                data-endpoint="PUTapi-orders--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="orders-DELETEapi-orders--id-">Delete Order</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-orders--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/orders/1" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/orders/1"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/orders/1';
$response = $client-&gt;delete(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-orders--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
         &quot;status&quot;: &quot;success&quot;,
          &quot;message&quot;: &quot;Order deleted successfully.&quot;,
      }
  }</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-orders--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-orders--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-orders--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-orders--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-orders--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-orders--id-" data-method="DELETE"
      data-path="api/orders/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-orders--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-orders--id-"
                    onclick="tryItOut('DELETEapi-orders--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-orders--id-"
                    onclick="cancelTryOut('DELETEapi-orders--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-orders--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/orders/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="DELETEapi-orders--id-"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-orders--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-orders--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-orders--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the order. Example: <code>1</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>order_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="order_id"                data-endpoint="DELETEapi-orders--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="orders-GETapi-orders-tracking--tracking_number-">Get Order By Tracking Number</h2>

<p>
</p>



<span id="example-requests-GETapi-orders-tracking--tracking_number-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/orders/tracking/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/orders/tracking/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/orders/tracking/consequatur';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-orders-tracking--tracking_number-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: 5,
        &quot;created_at&quot;: &quot;2025-12-05T12:20:11.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-12-05T12:20:11.000000Z&quot;,
        &quot;deleted_at&quot;: null,
        &quot;tracking_number&quot;: &quot;ORD-20251205-00002&quot;,
        &quot;user_id&quot;: 1,
        &quot;origin_country&quot;: &quot;ITALY&quot;,
        &quot;receiver_name&quot;: &quot;Tom Mboya&quot;,
        &quot;receiver_phone&quot;: &quot;0789887766&quot;,
        &quot;receiver_email&quot;: &quot;tom.mboya@gmail.com&quot;,
        &quot;receiver_address&quot;: &quot;Uganda - Kampala&quot;,
        &quot;status&quot;: &quot;PENDING&quot;,
        &quot;received_at&quot;: null,
        &quot;dispatched_at&quot;: null,
        &quot;arrived_at&quot;: null,
        &quot;released_at&quot;: null,
        &quot;delivered_at&quot;: null,
        &quot;status_history&quot;: [],
        &quot;user&quot;: {},
        &quot;packages&quot;: []
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;No query results for model [App\\Models\\Order].&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-orders-tracking--tracking_number-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-orders-tracking--tracking_number-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-orders-tracking--tracking_number-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-orders-tracking--tracking_number-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-orders-tracking--tracking_number-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-orders-tracking--tracking_number-" data-method="GET"
      data-path="api/orders/tracking/{tracking_number}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-orders-tracking--tracking_number-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-orders-tracking--tracking_number-"
                    onclick="tryItOut('GETapi-orders-tracking--tracking_number-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-orders-tracking--tracking_number-"
                    onclick="cancelTryOut('GETapi-orders-tracking--tracking_number-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-orders-tracking--tracking_number-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/orders/tracking/{tracking_number}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-orders-tracking--tracking_number-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-orders-tracking--tracking_number-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>tracking_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="tracking_number"                data-endpoint="GETapi-orders-tracking--tracking_number-"
               value="consequatur"
               data-component="url">
    <br>
<p>The tracking number of the order. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="orders-POSTapi-order_status_hisory">Update Order status</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-order_status_hisory">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/order_status_hisory" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"order_id\": 17,
    \"status\": \"consequatur\",
    \"location\": \"consequatur\",
    \"notes\": \"consequatur\",
    \"user_id\": 1000
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/order_status_hisory"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "order_id": 17,
    "status": "consequatur",
    "location": "consequatur",
    "notes": "consequatur",
    "user_id": 1000
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/order_status_hisory';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'order_id' =&gt; 17,
            'status' =&gt; 'consequatur',
            'location' =&gt; 'consequatur',
            'notes' =&gt; 'consequatur',
            'user_id' =&gt; 1000,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-order_status_hisory">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
         &quot;status&quot;: &quot;success&quot;,
          &quot;message&quot;: &quot;Order history created successfully.&quot;,
      }</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-order_status_hisory" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-order_status_hisory"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-order_status_hisory"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-order_status_hisory" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-order_status_hisory">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-order_status_hisory" data-method="POST"
      data-path="api/order_status_hisory"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-order_status_hisory', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-order_status_hisory"
                    onclick="tryItOut('POSTapi-order_status_hisory');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-order_status_hisory"
                    onclick="cancelTryOut('POSTapi-order_status_hisory');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-order_status_hisory"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/order_status_hisory</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="POSTapi-order_status_hisory"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-order_status_hisory"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-order_status_hisory"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>order_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="order_id"                data-endpoint="POSTapi-order_status_hisory"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="POSTapi-order_status_hisory"
               value="consequatur"
               data-component="body">
    <br>
<p>e.g PENDING,RECEIVED,CONSOLIDATED,DISPATCHED,IN_TRANSIT,ARRIVED,READY_FOR_RELEASE,RELEASED,DELIVERED Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>location</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="location"                data-endpoint="POSTapi-order_status_hisory"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>notes</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="notes"                data-endpoint="POSTapi-order_status_hisory"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="user_id"                data-endpoint="POSTapi-order_status_hisory"
               value="1000"
               data-component="body">
    <br>
<p>Request parameter: user_id. Example: <code>1000</code></p>
        </div>
        </form>

                    <h2 id="orders-DELETEapi-order_status_hisory--id-">Delete Order status history</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-order_status_hisory--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/order_status_hisory/17" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/order_status_hisory/17"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/order_status_hisory/17';
$response = $client-&gt;delete(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-order_status_hisory--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
         &quot;status&quot;: &quot;success&quot;,
          &quot;message&quot;: &quot;Order status history deleted.&quot;,
      }
  }</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-order_status_hisory--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-order_status_hisory--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-order_status_hisory--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-order_status_hisory--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-order_status_hisory--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-order_status_hisory--id-" data-method="DELETE"
      data-path="api/order_status_hisory/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-order_status_hisory--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-order_status_hisory--id-"
                    onclick="tryItOut('DELETEapi-order_status_hisory--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-order_status_hisory--id-"
                    onclick="cancelTryOut('DELETEapi-order_status_hisory--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-order_status_hisory--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/order_status_hisory/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="DELETEapi-order_status_hisory--id-"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-order_status_hisory--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-order_status_hisory--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-order_status_hisory--id-"
               value="17"
               data-component="url">
    <br>
<p>The ID of the order status hisory. Example: <code>17</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>orderStatusHistory_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="orderStatusHistory_id"                data-endpoint="DELETEapi-order_status_hisory--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                <h1 id="package">Package</h1>

    

                                <h2 id="package-POSTapi-packages">Add Package to order</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-packages">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/packages" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"order_id\": 17,
    \"contents\": \"consequatur\",
    \"declared_value\": 11613.31890586,
    \"weight\": 11613.31890586,
    \"length\": 11613.31890586,
    \"width\": 11613.31890586,
    \"height\": 11613.31890586,
    \"is_fragile\": false,
    \"is_hazardous\": false,
    \"is_damaged\": false,
    \"warehouse_rack_id\": \"consequatur\",
    \"received_at\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/packages"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "order_id": 17,
    "contents": "consequatur",
    "declared_value": 11613.31890586,
    "weight": 11613.31890586,
    "length": 11613.31890586,
    "width": 11613.31890586,
    "height": 11613.31890586,
    "is_fragile": false,
    "is_hazardous": false,
    "is_damaged": false,
    "warehouse_rack_id": "consequatur",
    "received_at": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/packages';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'order_id' =&gt; 17,
            'contents' =&gt; 'consequatur',
            'declared_value' =&gt; 11613.31890586,
            'weight' =&gt; 11613.31890586,
            'length' =&gt; 11613.31890586,
            'width' =&gt; 11613.31890586,
            'height' =&gt; 11613.31890586,
            'is_fragile' =&gt; false,
            'is_hazardous' =&gt; false,
            'is_damaged' =&gt; false,
            'warehouse_rack_id' =&gt; 'consequatur',
            'received_at' =&gt; 'consequatur',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-packages">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;success&quot;,
    &quot;message&quot;: &quot;Package created successfully.&quot;,
    &quot;data&quot;: {
        &quot;order_id&quot;: &quot;5&quot;,
        &quot;hwb_number&quot;: &quot;HWB-2025128-0021&quot;,
        &quot;contents&quot;: &quot;Computer - Desktop&quot;,
        &quot;declared_value&quot;: &quot;2500000&quot;,
        &quot;weight&quot;: &quot;5&quot;,
        &quot;length&quot;: &quot;4&quot;,
        &quot;width&quot;: &quot;6&quot;,
        &quot;height&quot;: &quot;2&quot;,
        &quot;is_fragile&quot;: true,
        &quot;is_hazardous&quot;: false,
        &quot;is_damaged&quot;: false,
        &quot;location_id&quot;: &quot;1&quot;,
        &quot;received_at&quot;: &quot;2025-12-03T00:00:00.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-12-08T07:32:17.000000Z&quot;,
        &quot;created_at&quot;: &quot;2025-12-08T07:32:17.000000Z&quot;,
        &quot;id&quot;: 2
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-packages" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-packages"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-packages"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-packages" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-packages">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-packages" data-method="POST"
      data-path="api/packages"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-packages', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-packages"
                    onclick="tryItOut('POSTapi-packages');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-packages"
                    onclick="cancelTryOut('POSTapi-packages');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-packages"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/packages</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="POSTapi-packages"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-packages"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-packages"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>order_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="order_id"                data-endpoint="POSTapi-packages"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>contents</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="contents"                data-endpoint="POSTapi-packages"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>declared_value</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="declared_value"                data-endpoint="POSTapi-packages"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>weight</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="weight"                data-endpoint="POSTapi-packages"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>length</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="length"                data-endpoint="POSTapi-packages"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>width</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="width"                data-endpoint="POSTapi-packages"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>height</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="height"                data-endpoint="POSTapi-packages"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_fragile</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-packages" style="display: none">
            <input type="radio" name="is_fragile"
                   value="true"
                   data-endpoint="POSTapi-packages"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-packages" style="display: none">
            <input type="radio" name="is_fragile"
                   value="false"
                   data-endpoint="POSTapi-packages"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_hazardous</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-packages" style="display: none">
            <input type="radio" name="is_hazardous"
                   value="true"
                   data-endpoint="POSTapi-packages"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-packages" style="display: none">
            <input type="radio" name="is_hazardous"
                   value="false"
                   data-endpoint="POSTapi-packages"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_damaged</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-packages" style="display: none">
            <input type="radio" name="is_damaged"
                   value="true"
                   data-endpoint="POSTapi-packages"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-packages" style="display: none">
            <input type="radio" name="is_damaged"
                   value="false"
                   data-endpoint="POSTapi-packages"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>package_photos</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="package_photos"                data-endpoint="POSTapi-packages"
               value=""
               data-component="body">
    <br>
<p>Request parameter: package_photos.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>warehouse_rack_id</code></b>&nbsp;&nbsp;
<small>required</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="warehouse_rack_id"                data-endpoint="POSTapi-packages"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>received_at</code></b>&nbsp;&nbsp;
<small>required</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="received_at"                data-endpoint="POSTapi-packages"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="package-PUTapi-packages--package_id-">Update order Package</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-packages--package_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/packages/17" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"order_id\": \"example value\",
    \"contents\": \"consequatur\",
    \"declared_value\": 11613.31890586,
    \"weight\": 11613.31890586,
    \"length\": 11613.31890586,
    \"width\": 11613.31890586,
    \"height\": 11613.31890586,
    \"is_fragile\": false,
    \"is_hazardous\": false,
    \"is_damaged\": false,
    \"received_at\": \"consequatur\",
    \"warehouse_rack_id\": 17
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/packages/17"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "order_id": "example value",
    "contents": "consequatur",
    "declared_value": 11613.31890586,
    "weight": 11613.31890586,
    "length": 11613.31890586,
    "width": 11613.31890586,
    "height": 11613.31890586,
    "is_fragile": false,
    "is_hazardous": false,
    "is_damaged": false,
    "received_at": "consequatur",
    "warehouse_rack_id": 17
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/packages/17';
$response = $client-&gt;put(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'order_id' =&gt; 'example value',
            'contents' =&gt; 'consequatur',
            'declared_value' =&gt; 11613.31890586,
            'weight' =&gt; 11613.31890586,
            'length' =&gt; 11613.31890586,
            'width' =&gt; 11613.31890586,
            'height' =&gt; 11613.31890586,
            'is_fragile' =&gt; false,
            'is_hazardous' =&gt; false,
            'is_damaged' =&gt; false,
            'received_at' =&gt; 'consequatur',
            'warehouse_rack_id' =&gt; 17,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-packages--package_id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;success&quot;,
    &quot;message&quot;: &quot;Package updated successfully.&quot;,
    &quot;data&quot;: {
        &quot;order_id&quot;: &quot;5&quot;,
        &quot;hwb_number&quot;: &quot;HWB-2025128-0021&quot;,
        &quot;contents&quot;: &quot;Computer - Desktop&quot;,
        &quot;declared_value&quot;: &quot;2500000&quot;,
        &quot;weight&quot;: &quot;5&quot;,
        &quot;length&quot;: &quot;4&quot;,
        &quot;width&quot;: &quot;6&quot;,
        &quot;height&quot;: &quot;2&quot;,
        &quot;is_fragile&quot;: true,
        &quot;is_hazardous&quot;: false,
        &quot;is_damaged&quot;: false,
        &quot;location_id&quot;: &quot;1&quot;,
        &quot;received_at&quot;: &quot;2025-12-03T00:00:00.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-12-08T07:32:17.000000Z&quot;,
        &quot;created_at&quot;: &quot;2025-12-08T07:32:17.000000Z&quot;,
        &quot;id&quot;: 2
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-packages--package_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-packages--package_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-packages--package_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-packages--package_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-packages--package_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-packages--package_id-" data-method="PUT"
      data-path="api/packages/{package_id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-packages--package_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-packages--package_id-"
                    onclick="tryItOut('PUTapi-packages--package_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-packages--package_id-"
                    onclick="cancelTryOut('PUTapi-packages--package_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-packages--package_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/packages/{package_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="PUTapi-packages--package_id-"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-packages--package_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-packages--package_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>package_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="package_id"                data-endpoint="PUTapi-packages--package_id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>order_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="order_id"                data-endpoint="PUTapi-packages--package_id-"
               value="example value"
               data-component="body">
    <br>
<p>Request parameter: order_id. The <code>id</code> of an existing record in the orders table. Example: <code>example value</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>contents</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="contents"                data-endpoint="PUTapi-packages--package_id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>declared_value</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="declared_value"                data-endpoint="PUTapi-packages--package_id-"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>weight</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="weight"                data-endpoint="PUTapi-packages--package_id-"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>length</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="length"                data-endpoint="PUTapi-packages--package_id-"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>width</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="width"                data-endpoint="PUTapi-packages--package_id-"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>height</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="height"                data-endpoint="PUTapi-packages--package_id-"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_fragile</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PUTapi-packages--package_id-" style="display: none">
            <input type="radio" name="is_fragile"
                   value="true"
                   data-endpoint="PUTapi-packages--package_id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-packages--package_id-" style="display: none">
            <input type="radio" name="is_fragile"
                   value="false"
                   data-endpoint="PUTapi-packages--package_id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_hazardous</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PUTapi-packages--package_id-" style="display: none">
            <input type="radio" name="is_hazardous"
                   value="true"
                   data-endpoint="PUTapi-packages--package_id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-packages--package_id-" style="display: none">
            <input type="radio" name="is_hazardous"
                   value="false"
                   data-endpoint="PUTapi-packages--package_id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_damaged</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PUTapi-packages--package_id-" style="display: none">
            <input type="radio" name="is_damaged"
                   value="true"
                   data-endpoint="PUTapi-packages--package_id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-packages--package_id-" style="display: none">
            <input type="radio" name="is_damaged"
                   value="false"
                   data-endpoint="PUTapi-packages--package_id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>package_photos</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="package_photos"                data-endpoint="PUTapi-packages--package_id-"
               value=""
               data-component="body">
    <br>
<p>Request parameter: package_photos.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>received_at</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="received_at"                data-endpoint="PUTapi-packages--package_id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>warehouse_rack_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="warehouse_rack_id"                data-endpoint="PUTapi-packages--package_id-"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
        </div>
        </form>

                    <h2 id="package-DELETEapi-packages--id-">Delete Package</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-packages--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/packages/consequatur" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/packages/consequatur"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/packages/consequatur';
$response = $client-&gt;delete(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-packages--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
         &quot;status&quot;: &quot;success&quot;,
          &quot;message&quot;: &quot;Package deleted successfully.&quot;,
      }
  }</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-packages--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-packages--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-packages--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-packages--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-packages--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-packages--id-" data-method="DELETE"
      data-path="api/packages/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-packages--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-packages--id-"
                    onclick="tryItOut('DELETEapi-packages--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-packages--id-"
                    onclick="cancelTryOut('DELETEapi-packages--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-packages--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/packages/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="DELETEapi-packages--id-"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-packages--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-packages--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-packages--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the package. Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>package_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="package_id"                data-endpoint="DELETEapi-packages--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="package-POSTapi-packages--id--package-photos">Add Package images</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-packages--id--package-photos">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/packages/consequatur/package-photos" \
    --header "Bearer: Token" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "photos[]=@C:\Users\HP\AppData\Local\Temp\php9263.tmp" \
    --form "photos[]=@C:\Users\HP\AppData\Local\Temp\php9274.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/packages/consequatur/package-photos"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('photos[]', document.querySelector('input[name="photos[]"]').files[0]);
body.append('photos[]', document.querySelector('input[name="photos[]"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/packages/consequatur/package-photos';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'multipart/form-data',
            'Accept' =&gt; 'application/json',
        ],
        'multipart' =&gt; [
            [
                'name' =&gt; 'photos[]',
                'contents' =&gt; fopen('C:\Users\HP\AppData\Local\Temp\php9263.tmp', 'r')
            ],
            [
                'name' =&gt; 'photos[]',
                'contents' =&gt; fopen('C:\Users\HP\AppData\Local\Temp\php9274.tmp', 'r')
            ],
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-packages--id--package-photos">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Package photos uploaded successfully&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;created_at&quot;: &quot;2025-12-08T07:19:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-12-08T07:39:24.000000Z&quot;,
        &quot;deleted_at&quot;: null,
        &quot;order_id&quot;: 5,
        &quot;hwb_number&quot;: &quot;HWB-2025128-0002&quot;,
        &quot;contents&quot;: &quot;Computer - Desktop&quot;,
        &quot;declared_value&quot;: &quot;2500000.00&quot;,
        &quot;weight&quot;: &quot;5.00&quot;,
        &quot;length&quot;: &quot;4.00&quot;,
        &quot;width&quot;: &quot;6.00&quot;,
        &quot;height&quot;: &quot;2.00&quot;,
        &quot;is_fragile&quot;: true,
        &quot;is_hazardous&quot;: false,
        &quot;is_damaged&quot;: false,
        &quot;package_photos&quot;: [
            &quot;package_photos/ngtZoTVR3mPb8G8otpFTeKnD78maftxCL7UXRcuD.jpg&quot;,
            &quot;package_photos/LXHHmhE4YM0YoTn1Lva95FSyQi31i89dskkPv2il.jpg&quot;,
            &quot;package_photos/thtdPXJtqtkpECHhbeyXIOAIMSGt564ZFIXBqdcp.jpg&quot;,
            &quot;package_photos/Uc34hnpyAPsAT1QINJfca0msaFdudcYfaY2Qs21h.jpg&quot;
        ],
        &quot;location_id&quot;: 1,
        &quot;received_at&quot;: &quot;2025-12-03T00:00:00.000000Z&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-packages--id--package-photos" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-packages--id--package-photos"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-packages--id--package-photos"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-packages--id--package-photos" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-packages--id--package-photos">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-packages--id--package-photos" data-method="POST"
      data-path="api/packages/{id}/package-photos"
      data-authed="1"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-packages--id--package-photos', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-packages--id--package-photos"
                    onclick="tryItOut('POSTapi-packages--id--package-photos');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-packages--id--package-photos"
                    onclick="cancelTryOut('POSTapi-packages--id--package-photos');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-packages--id--package-photos"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/packages/{id}/package-photos</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="POSTapi-packages--id--package-photos"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-packages--id--package-photos"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-packages--id--package-photos"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-packages--id--package-photos"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the package. Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>packageId</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="packageId"                data-endpoint="POSTapi-packages--id--package-photos"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>photos</code></b>&nbsp;&nbsp;
<small>file[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="photos[0]"                data-endpoint="POSTapi-packages--id--package-photos"
               data-component="body">
        <input type="file" style="display: none"
               name="photos[1]"                data-endpoint="POSTapi-packages--id--package-photos"
               data-component="body">
    <br>
<p>Must be an image.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>photos[]</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="photos.0"                data-endpoint="POSTapi-packages--id--package-photos"
               value=""
               data-component="body">
    <br>
<p>Example: <code>C:\Users\HP\AppData\Local\Temp\php9274.tmp</code></p>
        </div>
        </form>

                    <h2 id="package-DELETEapi-packages--id--package-photos">Delete a Package image</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-packages--id--package-photos">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/packages/consequatur/package-photos" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"photo\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/packages/consequatur/package-photos"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "photo": "consequatur"
};

fetch(url, {
    method: "DELETE",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/packages/consequatur/package-photos';
$response = $client-&gt;delete(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'photo' =&gt; 'consequatur',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-packages--id--package-photos">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Package photo deleted successfully&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;created_at&quot;: &quot;2025-12-08T07:19:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-12-08T07:39:24.000000Z&quot;,
        &quot;deleted_at&quot;: null,
        &quot;order_id&quot;: 5,
        &quot;hwb_number&quot;: &quot;HWB-2025128-0002&quot;,
        &quot;contents&quot;: &quot;Computer - Desktop&quot;,
        &quot;declared_value&quot;: &quot;2500000.00&quot;,
        &quot;weight&quot;: &quot;5.00&quot;,
        &quot;length&quot;: &quot;4.00&quot;,
        &quot;width&quot;: &quot;6.00&quot;,
        &quot;height&quot;: &quot;2.00&quot;,
        &quot;is_fragile&quot;: true,
        &quot;is_hazardous&quot;: false,
        &quot;is_damaged&quot;: false,
        &quot;package_photos&quot;: [
            &quot;package_photos/LXHHmhE4YM0YoTn1Lva95FSyQi31i89dskkPv2il.jpg&quot;,
            &quot;package_photos/thtdPXJtqtkpECHhbeyXIOAIMSGt564ZFIXBqdcp.jpg&quot;,
            &quot;package_photos/Uc34hnpyAPsAT1QINJfca0msaFdudcYfaY2Qs21h.jpg&quot;
        ],
        &quot;location_id&quot;: 1,
        &quot;received_at&quot;: &quot;2025-12-03T00:00:00.000000Z&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-packages--id--package-photos" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-packages--id--package-photos"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-packages--id--package-photos"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-packages--id--package-photos" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-packages--id--package-photos">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-packages--id--package-photos" data-method="DELETE"
      data-path="api/packages/{id}/package-photos"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-packages--id--package-photos', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-packages--id--package-photos"
                    onclick="tryItOut('DELETEapi-packages--id--package-photos');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-packages--id--package-photos"
                    onclick="cancelTryOut('DELETEapi-packages--id--package-photos');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-packages--id--package-photos"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/packages/{id}/package-photos</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="DELETEapi-packages--id--package-photos"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-packages--id--package-photos"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-packages--id--package-photos"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-packages--id--package-photos"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the package. Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>packageId</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="packageId"                data-endpoint="DELETEapi-packages--id--package-photos"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>photo</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="photo"                data-endpoint="DELETEapi-packages--id--package-photos"
               value="consequatur"
               data-component="body">
    <br>
<p>e.g package_photos/ngtZoTVR3mPb8G8otpFTeKnD78maftxCL7UXRcuD.jpg Example: <code>consequatur</code></p>
        </div>
        </form>

                <h1 id="consolidation-batch">Consolidation Batch</h1>

    

                                <h2 id="consolidation-batch-GETapi-consolidation-batches">Consolidation Batches</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-consolidation-batches">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/consolidation-batches" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/consolidation-batches"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/consolidation-batches';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-consolidation-batches">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 1,
        &quot;created_at&quot;: &quot;2025-12-08T08:21:32.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-12-08T08:40:10.000000Z&quot;,
        &quot;deleted_at&quot;: null,
        &quot;mawb_number&quot;: &quot;MAWB-20251208-001&quot;,
        &quot;transport_mode&quot;: &quot;AIR&quot;,
        &quot;container_flight_number&quot;: &quot;AB001&quot;,
        &quot;departure_date&quot;: &quot;2025-12-10T00:00:00.000000Z&quot;,
        &quot;status&quot;: &quot;FINALIZED&quot;,
        &quot;package_count&quot;: 0,
        &quot;total_weight&quot;: &quot;0.00&quot;,
        &quot;created_by&quot;: 1,
        &quot;finalized_at&quot;: &quot;2025-12-09T00:00:00.000000Z&quot;,
        &quot;departed_at&quot;: &quot;2025-12-10T00:00:00.000000Z&quot;,
        &quot;arrived_at&quot;: &quot;2025-12-10T00:00:00.000000Z&quot;,
        &quot;packages&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;created_at&quot;: &quot;2025-12-08T07:19:43.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-08T07:42:06.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;order_id&quot;: 5,
                &quot;hwb_number&quot;: &quot;HWB-2025128-0002&quot;,
                &quot;contents&quot;: &quot;Computer - Desktop&quot;,
                &quot;declared_value&quot;: &quot;2500000.00&quot;,
                &quot;weight&quot;: &quot;5.00&quot;,
                &quot;length&quot;: &quot;4.00&quot;,
                &quot;width&quot;: &quot;6.00&quot;,
                &quot;height&quot;: &quot;2.00&quot;,
                &quot;is_fragile&quot;: true,
                &quot;is_hazardous&quot;: false,
                &quot;is_damaged&quot;: false,
                &quot;package_photos&quot;: [
                    &quot;package_photos/LXHHmhE4YM0YoTn1Lva95FSyQi31i89dskkPv2il.jpg&quot;,
                    &quot;package_photos/thtdPXJtqtkpECHhbeyXIOAIMSGt564ZFIXBqdcp.jpg&quot;,
                    &quot;package_photos/Uc34hnpyAPsAT1QINJfca0msaFdudcYfaY2Qs21h.jpg&quot;
                ],
                &quot;location_id&quot;: 1,
                &quot;received_at&quot;: &quot;2025-12-03T00:00:00.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;batch_id&quot;: 1,
                    &quot;package_id&quot;: 1,
                    &quot;created_at&quot;: &quot;2025-12-08T08:57:19.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-08T08:57:19.000000Z&quot;
                },
                &quot;order&quot;: {
                    &quot;id&quot;: 5,
                    &quot;created_at&quot;: &quot;2025-12-05T12:20:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-05T12:20:11.000000Z&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;tracking_number&quot;: &quot;ORD-20251205-00002&quot;,
                    &quot;user_id&quot;: 1,
                    &quot;origin_country&quot;: &quot;ITALY&quot;,
                    &quot;receiver_name&quot;: &quot;Tom Mboya&quot;,
                    &quot;receiver_phone&quot;: &quot;0789887766&quot;,
                    &quot;receiver_email&quot;: &quot;tom.mboya@gmail.com&quot;,
                    &quot;receiver_address&quot;: &quot;Uganda - Kampala&quot;,
                    &quot;status&quot;: &quot;PENDING&quot;,
                    &quot;received_at&quot;: null,
                    &quot;dispatched_at&quot;: null,
                    &quot;arrived_at&quot;: null,
                    &quot;released_at&quot;: null,
                    &quot;delivered_at&quot;: null,
                    &quot;user&quot;: {
                        &quot;id&quot;: 1,
                        &quot;full_name&quot;: &quot;Thembo Charles&quot;,
                        &quot;email&quot;: &quot;ashley7520charles@gmail.com&quot;,
                        &quot;phone&quot;: &quot;0787444081&quot;,
                        &quot;email_verified_at&quot;: null,
                        &quot;tin&quot;: &quot;110023452&quot;,
                        &quot;passport&quot;: &quot;65748&quot;,
                        &quot;address&quot;: &quot;Kampala&quot;,
                        &quot;otp&quot;: &quot;4782&quot;,
                        &quot;status&quot;: &quot;active&quot;,
                        &quot;user_type&quot;: &quot;user&quot;,
                        &quot;created_at&quot;: &quot;2025-12-05T06:42:09.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-05T07:58:28.000000Z&quot;,
                        &quot;deleted_at&quot;: null
                    }
                }
            }
        ]
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-consolidation-batches" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-consolidation-batches"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-consolidation-batches"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-consolidation-batches" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-consolidation-batches">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-consolidation-batches" data-method="GET"
      data-path="api/consolidation-batches"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-consolidation-batches', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-consolidation-batches"
                    onclick="tryItOut('GETapi-consolidation-batches');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-consolidation-batches"
                    onclick="cancelTryOut('GETapi-consolidation-batches');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-consolidation-batches"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/consolidation-batches</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="GETapi-consolidation-batches"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-consolidation-batches"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-consolidation-batches"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="consolidation-batch-GETapi-consolidation-batches--id-">Consolidation Batch</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-consolidation-batches--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/consolidation-batches/consequatur" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/consolidation-batches/consequatur"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/consolidation-batches/consequatur';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-consolidation-batches--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 1,
        &quot;created_at&quot;: &quot;2025-12-08T08:21:32.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-12-08T08:40:10.000000Z&quot;,
        &quot;deleted_at&quot;: null,
        &quot;mawb_number&quot;: &quot;MAWB-20251208-001&quot;,
        &quot;transport_mode&quot;: &quot;AIR&quot;,
        &quot;container_flight_number&quot;: &quot;AB001&quot;,
        &quot;departure_date&quot;: &quot;2025-12-10T00:00:00.000000Z&quot;,
        &quot;status&quot;: &quot;FINALIZED&quot;,
        &quot;package_count&quot;: 0,
        &quot;total_weight&quot;: &quot;0.00&quot;,
        &quot;created_by&quot;: 1,
        &quot;finalized_at&quot;: &quot;2025-12-09T00:00:00.000000Z&quot;,
        &quot;departed_at&quot;: &quot;2025-12-10T00:00:00.000000Z&quot;,
        &quot;arrived_at&quot;: &quot;2025-12-10T00:00:00.000000Z&quot;,
        &quot;packages&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;created_at&quot;: &quot;2025-12-08T07:19:43.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-08T07:42:06.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;order_id&quot;: 5,
                &quot;hwb_number&quot;: &quot;HWB-2025128-0002&quot;,
                &quot;contents&quot;: &quot;Computer - Desktop&quot;,
                &quot;declared_value&quot;: &quot;2500000.00&quot;,
                &quot;weight&quot;: &quot;5.00&quot;,
                &quot;length&quot;: &quot;4.00&quot;,
                &quot;width&quot;: &quot;6.00&quot;,
                &quot;height&quot;: &quot;2.00&quot;,
                &quot;is_fragile&quot;: true,
                &quot;is_hazardous&quot;: false,
                &quot;is_damaged&quot;: false,
                &quot;package_photos&quot;: [
                    &quot;package_photos/LXHHmhE4YM0YoTn1Lva95FSyQi31i89dskkPv2il.jpg&quot;,
                    &quot;package_photos/thtdPXJtqtkpECHhbeyXIOAIMSGt564ZFIXBqdcp.jpg&quot;,
                    &quot;package_photos/Uc34hnpyAPsAT1QINJfca0msaFdudcYfaY2Qs21h.jpg&quot;
                ],
                &quot;location_id&quot;: 1,
                &quot;received_at&quot;: &quot;2025-12-03T00:00:00.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;batch_id&quot;: 1,
                    &quot;package_id&quot;: 1,
                    &quot;created_at&quot;: &quot;2025-12-08T08:57:19.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-08T08:57:19.000000Z&quot;
                },
                &quot;order&quot;: {
                    &quot;id&quot;: 5,
                    &quot;created_at&quot;: &quot;2025-12-05T12:20:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-05T12:20:11.000000Z&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;tracking_number&quot;: &quot;ORD-20251205-00002&quot;,
                    &quot;user_id&quot;: 1,
                    &quot;origin_country&quot;: &quot;ITALY&quot;,
                    &quot;receiver_name&quot;: &quot;Tom Mboya&quot;,
                    &quot;receiver_phone&quot;: &quot;0789887766&quot;,
                    &quot;receiver_email&quot;: &quot;tom.mboya@gmail.com&quot;,
                    &quot;receiver_address&quot;: &quot;Uganda - Kampala&quot;,
                    &quot;status&quot;: &quot;PENDING&quot;,
                    &quot;received_at&quot;: null,
                    &quot;dispatched_at&quot;: null,
                    &quot;arrived_at&quot;: null,
                    &quot;released_at&quot;: null,
                    &quot;delivered_at&quot;: null,
                    &quot;user&quot;: {
                        &quot;id&quot;: 1,
                        &quot;full_name&quot;: &quot;Thembo Charles&quot;,
                        &quot;email&quot;: &quot;ashley7520charles@gmail.com&quot;,
                        &quot;phone&quot;: &quot;0787444081&quot;,
                        &quot;email_verified_at&quot;: null,
                        &quot;tin&quot;: &quot;110023452&quot;,
                        &quot;passport&quot;: &quot;65748&quot;,
                        &quot;address&quot;: &quot;Kampala&quot;,
                        &quot;otp&quot;: &quot;4782&quot;,
                        &quot;status&quot;: &quot;active&quot;,
                        &quot;user_type&quot;: &quot;user&quot;,
                        &quot;created_at&quot;: &quot;2025-12-05T06:42:09.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-05T07:58:28.000000Z&quot;,
                        &quot;deleted_at&quot;: null
                    }
                }
            }
        ]
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-consolidation-batches--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-consolidation-batches--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-consolidation-batches--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-consolidation-batches--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-consolidation-batches--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-consolidation-batches--id-" data-method="GET"
      data-path="api/consolidation-batches/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-consolidation-batches--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-consolidation-batches--id-"
                    onclick="tryItOut('GETapi-consolidation-batches--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-consolidation-batches--id-"
                    onclick="cancelTryOut('GETapi-consolidation-batches--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-consolidation-batches--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/consolidation-batches/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="GETapi-consolidation-batches--id-"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-consolidation-batches--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-consolidation-batches--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-consolidation-batches--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the consolidation batch. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="consolidation-batch-POSTapi-consolidation-batches">Create a Consolidation Batch</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-consolidation-batches">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/consolidation-batches" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"mawb_number\": \"consequatur\",
    \"transport_mode\": \"consequatur\",
    \"container_flight_number\": \"consequatur\",
    \"departure_date\": \"consequatur\",
    \"status\": \"example value\",
    \"package_count\": 1000,
    \"total_weight\": 1000,
    \"created_by\": \"example value\",
    \"finalized_at\": \"example value\",
    \"departed_at\": \"example value\",
    \"arrived_at\": \"example value\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/consolidation-batches"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "mawb_number": "consequatur",
    "transport_mode": "consequatur",
    "container_flight_number": "consequatur",
    "departure_date": "consequatur",
    "status": "example value",
    "package_count": 1000,
    "total_weight": 1000,
    "created_by": "example value",
    "finalized_at": "example value",
    "departed_at": "example value",
    "arrived_at": "example value"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/consolidation-batches';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'mawb_number' =&gt; 'consequatur',
            'transport_mode' =&gt; 'consequatur',
            'container_flight_number' =&gt; 'consequatur',
            'departure_date' =&gt; 'consequatur',
            'status' =&gt; 'example value',
            'package_count' =&gt; 1000,
            'total_weight' =&gt; 1000.0,
            'created_by' =&gt; 'example value',
            'finalized_at' =&gt; 'example value',
            'departed_at' =&gt; 'example value',
            'arrived_at' =&gt; 'example value',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-consolidation-batches">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Consolidation batch created successfully&quot;,
    &quot;data&quot;: {
        &quot;mawb_number&quot;: &quot;MAWB-20251208-002&quot;,
        &quot;transport_mode&quot;: &quot;AIR&quot;,
        &quot;container_flight_number&quot;: &quot;AB001&quot;,
        &quot;departure_date&quot;: &quot;2025-12-10T00:00:00.000000Z&quot;,
        &quot;departed_at&quot;: &quot;2025-12-10T00:00:00.000000Z&quot;,
        &quot;created_by&quot;: 1,
        &quot;updated_at&quot;: &quot;2025-12-08T08:27:36.000000Z&quot;,
        &quot;created_at&quot;: &quot;2025-12-08T08:27:36.000000Z&quot;,
        &quot;id&quot;: 3,
        &quot;user&quot;: {
            &quot;id&quot;: 1,
            &quot;full_name&quot;: &quot;Thembo Charles&quot;,
            &quot;email&quot;: &quot;ashley7520charles@gmail.com&quot;,
            &quot;phone&quot;: &quot;0787444081&quot;,
            &quot;email_verified_at&quot;: null,
            &quot;tin&quot;: &quot;110023452&quot;,
            &quot;passport&quot;: &quot;65748&quot;,
            &quot;address&quot;: &quot;Kampala&quot;,
            &quot;otp&quot;: &quot;4782&quot;,
            &quot;status&quot;: &quot;active&quot;,
            &quot;user_type&quot;: &quot;user&quot;,
            &quot;created_at&quot;: &quot;2025-12-05T06:42:09.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-12-05T07:58:28.000000Z&quot;,
            &quot;deleted_at&quot;: null
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-consolidation-batches" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-consolidation-batches"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-consolidation-batches"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-consolidation-batches" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-consolidation-batches">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-consolidation-batches" data-method="POST"
      data-path="api/consolidation-batches"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-consolidation-batches', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-consolidation-batches"
                    onclick="tryItOut('POSTapi-consolidation-batches');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-consolidation-batches"
                    onclick="cancelTryOut('POSTapi-consolidation-batches');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-consolidation-batches"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/consolidation-batches</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="POSTapi-consolidation-batches"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-consolidation-batches"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-consolidation-batches"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>mawb_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="mawb_number"                data-endpoint="POSTapi-consolidation-batches"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>transport_mode</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="transport_mode"                data-endpoint="POSTapi-consolidation-batches"
               value="consequatur"
               data-component="body">
    <br>
<p>e.g 'AIR', 'SEA', 'ROAD', 'TRAIN' Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>container_flight_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="container_flight_number"                data-endpoint="POSTapi-consolidation-batches"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>departure_date</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="departure_date"                data-endpoint="POSTapi-consolidation-batches"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="POSTapi-consolidation-batches"
               value="example value"
               data-component="body">
    <br>
<p>Request parameter: status. Example: <code>example value</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>OPEN</code></li> <li><code>FINALIZED</code></li> <li><code>DEPARTED</code></li> <li><code>ARRIVED</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>package_count</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="package_count"                data-endpoint="POSTapi-consolidation-batches"
               value="1000"
               data-component="body">
    <br>
<p>Request parameter: package_count. Must be at least 0. Example: <code>1000</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>total_weight</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="total_weight"                data-endpoint="POSTapi-consolidation-batches"
               value="1000"
               data-component="body">
    <br>
<p>Request parameter: total_weight. Must be at least 0. Example: <code>1000</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>created_by</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="created_by"                data-endpoint="POSTapi-consolidation-batches"
               value="example value"
               data-component="body">
    <br>
<p>Request parameter: created_by. The <code>id</code> of an existing record in the users table. Example: <code>example value</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>finalized_at</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="finalized_at"                data-endpoint="POSTapi-consolidation-batches"
               value="example value"
               data-component="body">
    <br>
<p>Request parameter: finalized_at. Must be a valid date. Example: <code>example value</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>departed_at</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="departed_at"                data-endpoint="POSTapi-consolidation-batches"
               value="example value"
               data-component="body">
    <br>
<p>Request parameter: departed_at. Must be a valid date. Example: <code>example value</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>arrived_at</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="arrived_at"                data-endpoint="POSTapi-consolidation-batches"
               value="example value"
               data-component="body">
    <br>
<p>Request parameter: arrived_at. Must be a valid date. Example: <code>example value</code></p>
        </div>
        </form>

                    <h2 id="consolidation-batch-PUTapi-consolidation-batches--id-">Update a Consolidation Batch</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-consolidation-batches--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/consolidation-batches/consequatur" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"mawb_number\": \"consequatur\",
    \"transport_mode\": \"consequatur\",
    \"container_flight_number\": \"consequatur\",
    \"departure_date\": \"consequatur\",
    \"status\": \"consequatur\",
    \"package_count\": 1000,
    \"total_weight\": 1000,
    \"created_by\": \"example value\",
    \"finalized_at\": \"consequatur\",
    \"departed_at\": \"consequatur\",
    \"arrived_at\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/consolidation-batches/consequatur"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "mawb_number": "consequatur",
    "transport_mode": "consequatur",
    "container_flight_number": "consequatur",
    "departure_date": "consequatur",
    "status": "consequatur",
    "package_count": 1000,
    "total_weight": 1000,
    "created_by": "example value",
    "finalized_at": "consequatur",
    "departed_at": "consequatur",
    "arrived_at": "consequatur"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/consolidation-batches/consequatur';
$response = $client-&gt;put(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'mawb_number' =&gt; 'consequatur',
            'transport_mode' =&gt; 'consequatur',
            'container_flight_number' =&gt; 'consequatur',
            'departure_date' =&gt; 'consequatur',
            'status' =&gt; 'consequatur',
            'package_count' =&gt; 1000,
            'total_weight' =&gt; 1000.0,
            'created_by' =&gt; 'example value',
            'finalized_at' =&gt; 'consequatur',
            'departed_at' =&gt; 'consequatur',
            'arrived_at' =&gt; 'consequatur',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-consolidation-batches--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Consolidation batch updated successfully&quot;,
    &quot;data&quot;: {
        &quot;mawb_number&quot;: &quot;MAWB-20251208-002&quot;,
        &quot;transport_mode&quot;: &quot;AIR&quot;,
        &quot;container_flight_number&quot;: &quot;AB001&quot;,
        &quot;departure_date&quot;: &quot;2025-12-10T00:00:00.000000Z&quot;,
        &quot;departed_at&quot;: &quot;2025-12-10T00:00:00.000000Z&quot;,
        &quot;created_by&quot;: 1,
        &quot;updated_at&quot;: &quot;2025-12-08T08:27:36.000000Z&quot;,
        &quot;created_at&quot;: &quot;2025-12-08T08:27:36.000000Z&quot;,
        &quot;id&quot;: 3,
        &quot;user&quot;: {
            &quot;id&quot;: 1,
            &quot;full_name&quot;: &quot;Thembo Charles&quot;,
            &quot;email&quot;: &quot;ashley7520charles@gmail.com&quot;,
            &quot;phone&quot;: &quot;0787444081&quot;,
            &quot;email_verified_at&quot;: null,
            &quot;tin&quot;: &quot;110023452&quot;,
            &quot;passport&quot;: &quot;65748&quot;,
            &quot;address&quot;: &quot;Kampala&quot;,
            &quot;otp&quot;: &quot;4782&quot;,
            &quot;status&quot;: &quot;active&quot;,
            &quot;user_type&quot;: &quot;user&quot;,
            &quot;created_at&quot;: &quot;2025-12-05T06:42:09.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-12-05T07:58:28.000000Z&quot;,
            &quot;deleted_at&quot;: null
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-consolidation-batches--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-consolidation-batches--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-consolidation-batches--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-consolidation-batches--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-consolidation-batches--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-consolidation-batches--id-" data-method="PUT"
      data-path="api/consolidation-batches/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-consolidation-batches--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-consolidation-batches--id-"
                    onclick="tryItOut('PUTapi-consolidation-batches--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-consolidation-batches--id-"
                    onclick="cancelTryOut('PUTapi-consolidation-batches--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-consolidation-batches--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/consolidation-batches/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="PUTapi-consolidation-batches--id-"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-consolidation-batches--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-consolidation-batches--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-consolidation-batches--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the consolidation batch. Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>consolidationBatche_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="consolidationBatche_id"                data-endpoint="PUTapi-consolidation-batches--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>mawb_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="mawb_number"                data-endpoint="PUTapi-consolidation-batches--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>transport_mode</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="transport_mode"                data-endpoint="PUTapi-consolidation-batches--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>e.g 'AIR', 'SEA', 'ROAD', 'TRAIN' Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>container_flight_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="container_flight_number"                data-endpoint="PUTapi-consolidation-batches--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>departure_date</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="departure_date"                data-endpoint="PUTapi-consolidation-batches--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PUTapi-consolidation-batches--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>e.g OPEN,FINALIZED,DEPARTED,ARRIVED Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>package_count</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="package_count"                data-endpoint="PUTapi-consolidation-batches--id-"
               value="1000"
               data-component="body">
    <br>
<p>Request parameter: package_count. Must be at least 0. Example: <code>1000</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>total_weight</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="total_weight"                data-endpoint="PUTapi-consolidation-batches--id-"
               value="1000"
               data-component="body">
    <br>
<p>Request parameter: total_weight. Must be at least 0. Example: <code>1000</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>created_by</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="created_by"                data-endpoint="PUTapi-consolidation-batches--id-"
               value="example value"
               data-component="body">
    <br>
<p>Request parameter: created_by. The <code>id</code> of an existing record in the users table. Example: <code>example value</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>finalized_at</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="finalized_at"                data-endpoint="PUTapi-consolidation-batches--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>departed_at</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="departed_at"                data-endpoint="PUTapi-consolidation-batches--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>arrived_at</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="arrived_at"                data-endpoint="PUTapi-consolidation-batches--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="consolidation-batch-DELETEapi-consolidation-batches--id-">Delete Consolidation Batch</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-consolidation-batches--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/consolidation-batches/consequatur" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/consolidation-batches/consequatur"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/consolidation-batches/consequatur';
$response = $client-&gt;delete(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-consolidation-batches--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
         &quot;status&quot;: &quot;success&quot;,
          &quot;message&quot;: &quot;Consolidation batch deleted successfully.&quot;,
      }
  }</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-consolidation-batches--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-consolidation-batches--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-consolidation-batches--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-consolidation-batches--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-consolidation-batches--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-consolidation-batches--id-" data-method="DELETE"
      data-path="api/consolidation-batches/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-consolidation-batches--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-consolidation-batches--id-"
                    onclick="tryItOut('DELETEapi-consolidation-batches--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-consolidation-batches--id-"
                    onclick="cancelTryOut('DELETEapi-consolidation-batches--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-consolidation-batches--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/consolidation-batches/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="DELETEapi-consolidation-batches--id-"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-consolidation-batches--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-consolidation-batches--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-consolidation-batches--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the consolidation batch. Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>consolidationBatche_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="consolidationBatche_id"                data-endpoint="DELETEapi-consolidation-batches--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                <h1 id="batch-package">Batch Package</h1>

    

                                <h2 id="batch-package-POSTapi-batch-packages">Add Package to Batch</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-batch-packages">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/batch-packages" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"batch_id\": 17,
    \"package_id\": 17
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/batch-packages"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "batch_id": 17,
    "package_id": 17
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/batch-packages';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'batch_id' =&gt; 17,
            'package_id' =&gt; 17,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-batch-packages">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
         &quot;status&quot;: &quot;success&quot;,
          &quot;message&quot;: &quot;Package added to batch successfully.&quot;,
      }
  }</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-batch-packages" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-batch-packages"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-batch-packages"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-batch-packages" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-batch-packages">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-batch-packages" data-method="POST"
      data-path="api/batch-packages"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-batch-packages', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-batch-packages"
                    onclick="tryItOut('POSTapi-batch-packages');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-batch-packages"
                    onclick="cancelTryOut('POSTapi-batch-packages');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-batch-packages"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/batch-packages</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="POSTapi-batch-packages"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-batch-packages"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-batch-packages"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>batch_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="batch_id"                data-endpoint="POSTapi-batch-packages"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>package_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="package_id"                data-endpoint="POSTapi-batch-packages"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
        </div>
        </form>

                    <h2 id="batch-package-DELETEapi-batch-packages">Delete Consolidation Batch</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-batch-packages">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/batch-packages" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"batch_id\": 17,
    \"package_id\": 17
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/batch-packages"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "batch_id": 17,
    "package_id": 17
};

fetch(url, {
    method: "DELETE",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/batch-packages';
$response = $client-&gt;delete(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'batch_id' =&gt; 17,
            'package_id' =&gt; 17,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-batch-packages">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
         &quot;status&quot;: &quot;success&quot;,
          &quot;message&quot;: &quot;Package removed from batch.&quot;,
      }
  }</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-batch-packages" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-batch-packages"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-batch-packages"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-batch-packages" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-batch-packages">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-batch-packages" data-method="DELETE"
      data-path="api/batch-packages"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-batch-packages', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-batch-packages"
                    onclick="tryItOut('DELETEapi-batch-packages');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-batch-packages"
                    onclick="cancelTryOut('DELETEapi-batch-packages');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-batch-packages"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/batch-packages</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="DELETEapi-batch-packages"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-batch-packages"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-batch-packages"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>batch_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="batch_id"                data-endpoint="DELETEapi-batch-packages"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>package_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="package_id"                data-endpoint="DELETEapi-batch-packages"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
        </div>
        </form>

                <h1 id="invoice">Invoice</h1>

    

                                <h2 id="invoice-GETapi-billing-invoices">Make an Invoice</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-billing-invoices">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/billing/invoices" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/billing/invoices"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/billing/invoices';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-billing-invoices">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Invoices fetched successfully&quot;,
    &quot;data&quot;: {
        &quot;current_page&quot;: 1,
        &quot;data&quot;: [
            {
                &quot;id&quot;: 2,
                &quot;created_at&quot;: &quot;2025-12-08T10:31:55.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-08T10:42:55.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;invoice_number&quot;: &quot;INV-20251208-00002&quot;,
                &quot;user_id&quot;: 1,
                &quot;order_id&quot;: 5,
                &quot;type&quot;: &quot;FREIGHT&quot;,
                &quot;status&quot;: &quot;PAID&quot;,
                &quot;due_date&quot;: &quot;2005-12-09T00:00:00.000000Z&quot;,
                &quot;order&quot;: {
                    &quot;id&quot;: 5,
                    &quot;created_at&quot;: &quot;2025-12-05T12:20:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-05T12:20:11.000000Z&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;tracking_number&quot;: &quot;ORD-20251205-00002&quot;,
                    &quot;user_id&quot;: 1,
                    &quot;origin_country&quot;: &quot;ITALY&quot;,
                    &quot;receiver_name&quot;: &quot;Tom Mboya&quot;,
                    &quot;receiver_phone&quot;: &quot;0789887766&quot;,
                    &quot;receiver_email&quot;: &quot;tom.mboya@gmail.com&quot;,
                    &quot;receiver_address&quot;: &quot;Uganda - Kampala&quot;,
                    &quot;status&quot;: &quot;PENDING&quot;,
                    &quot;received_at&quot;: null,
                    &quot;dispatched_at&quot;: null,
                    &quot;arrived_at&quot;: null,
                    &quot;released_at&quot;: null,
                    &quot;delivered_at&quot;: null,
                    &quot;user&quot;: {
                        &quot;id&quot;: 1,
                        &quot;full_name&quot;: &quot;Thembo Charles&quot;,
                        &quot;email&quot;: &quot;ashley7520charles@gmail.com&quot;,
                        &quot;phone&quot;: &quot;0787444081&quot;,
                        &quot;email_verified_at&quot;: null,
                        &quot;tin&quot;: &quot;110023452&quot;,
                        &quot;passport&quot;: &quot;65748&quot;,
                        &quot;address&quot;: &quot;Kampala&quot;,
                        &quot;otp&quot;: &quot;4782&quot;,
                        &quot;status&quot;: &quot;active&quot;,
                        &quot;user_type&quot;: &quot;user&quot;,
                        &quot;created_at&quot;: &quot;2025-12-05T06:42:09.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-05T07:58:28.000000Z&quot;,
                        &quot;deleted_at&quot;: null
                    }
                },
                &quot;line_items&quot;: [],
                &quot;payments&quot;: []
            },
            {
                &quot;id&quot;: 1,
                &quot;created_at&quot;: &quot;2025-12-08T10:31:08.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-08T10:31:08.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;invoice_number&quot;: &quot;ORD-20251208-00001&quot;,
                &quot;user_id&quot;: 1,
                &quot;order_id&quot;: 5,
                &quot;type&quot;: &quot;FREIGHT&quot;,
                &quot;status&quot;: &quot;UNPAID&quot;,
                &quot;due_date&quot;: &quot;2005-12-09T00:00:00.000000Z&quot;,
                &quot;order&quot;: {
                    &quot;id&quot;: 5,
                    &quot;created_at&quot;: &quot;2025-12-05T12:20:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-05T12:20:11.000000Z&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;tracking_number&quot;: &quot;ORD-20251205-00002&quot;,
                    &quot;user_id&quot;: 1,
                    &quot;origin_country&quot;: &quot;ITALY&quot;,
                    &quot;receiver_name&quot;: &quot;Tom Mboya&quot;,
                    &quot;receiver_phone&quot;: &quot;0789887766&quot;,
                    &quot;receiver_email&quot;: &quot;tom.mboya@gmail.com&quot;,
                    &quot;receiver_address&quot;: &quot;Uganda - Kampala&quot;,
                    &quot;status&quot;: &quot;PENDING&quot;,
                    &quot;received_at&quot;: null,
                    &quot;dispatched_at&quot;: null,
                    &quot;arrived_at&quot;: null,
                    &quot;released_at&quot;: null,
                    &quot;delivered_at&quot;: null,
                    &quot;user&quot;: {
                        &quot;id&quot;: 1,
                        &quot;full_name&quot;: &quot;Thembo Charles&quot;,
                        &quot;email&quot;: &quot;ashley7520charles@gmail.com&quot;,
                        &quot;phone&quot;: &quot;0787444081&quot;,
                        &quot;email_verified_at&quot;: null,
                        &quot;tin&quot;: &quot;110023452&quot;,
                        &quot;passport&quot;: &quot;65748&quot;,
                        &quot;address&quot;: &quot;Kampala&quot;,
                        &quot;otp&quot;: &quot;4782&quot;,
                        &quot;status&quot;: &quot;active&quot;,
                        &quot;user_type&quot;: &quot;user&quot;,
                        &quot;created_at&quot;: &quot;2025-12-05T06:42:09.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-05T07:58:28.000000Z&quot;,
                        &quot;deleted_at&quot;: null
                    }
                },
                &quot;line_items&quot;: [],
                &quot;payments&quot;: []
            }
        ],
        &quot;first_page_url&quot;: &quot;http://127.0.0.1:8000/api/billing/invoices?page=1&quot;,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;last_page_url&quot;: &quot;http://127.0.0.1:8000/api/billing/invoices?page=1&quot;,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://127.0.0.1:8000/api/billing/invoices?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;next_page_url&quot;: null,
        &quot;path&quot;: &quot;http://127.0.0.1:8000/api/billing/invoices&quot;,
        &quot;per_page&quot;: 20,
        &quot;prev_page_url&quot;: null,
        &quot;to&quot;: 2,
        &quot;total&quot;: 2
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-billing-invoices" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-billing-invoices"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-billing-invoices"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-billing-invoices" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-billing-invoices">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-billing-invoices" data-method="GET"
      data-path="api/billing/invoices"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-billing-invoices', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-billing-invoices"
                    onclick="tryItOut('GETapi-billing-invoices');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-billing-invoices"
                    onclick="cancelTryOut('GETapi-billing-invoices');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-billing-invoices"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/billing/invoices</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="GETapi-billing-invoices"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-billing-invoices"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-billing-invoices"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="invoice-POSTapi-billing-invoices">Make an Invoice</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-billing-invoices">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/billing/invoices" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"order_id\": \"consequatur\",
    \"type\": \"FREIGHT,STORAGE,CUSTOMS,OTHER\",
    \"due_date\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/billing/invoices"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "order_id": "consequatur",
    "type": "FREIGHT,STORAGE,CUSTOMS,OTHER",
    "due_date": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/billing/invoices';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'order_id' =&gt; 'consequatur',
            'type' =&gt; 'FREIGHT,STORAGE,CUSTOMS,OTHER',
            'due_date' =&gt; 'consequatur',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-billing-invoices">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Invoice created successfully&quot;,
    &quot;data&quot;: {
        &quot;order_id&quot;: &quot;5&quot;,
        &quot;type&quot;: &quot;FREIGHT&quot;,
        &quot;due_date&quot;: &quot;2005-12-09T00:00:00.000000Z&quot;,
        &quot;user_id&quot;: 1,
        &quot;invoice_number&quot;: &quot;INV-20251208-00002&quot;,
        &quot;updated_at&quot;: &quot;2025-12-08T10:31:55.000000Z&quot;,
        &quot;created_at&quot;: &quot;2025-12-08T10:31:55.000000Z&quot;,
        &quot;id&quot;: 2,
        &quot;order&quot;: {
            &quot;id&quot;: 5,
            &quot;created_at&quot;: &quot;2025-12-05T12:20:11.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-12-05T12:20:11.000000Z&quot;,
            &quot;deleted_at&quot;: null,
            &quot;tracking_number&quot;: &quot;ORD-20251205-00002&quot;,
            &quot;user_id&quot;: 1,
            &quot;origin_country&quot;: &quot;ITALY&quot;,
            &quot;receiver_name&quot;: &quot;Tom Mboya&quot;,
            &quot;receiver_phone&quot;: &quot;0789887766&quot;,
            &quot;receiver_email&quot;: &quot;tom.mboya@gmail.com&quot;,
            &quot;receiver_address&quot;: &quot;Uganda - Kampala&quot;,
            &quot;status&quot;: &quot;PENDING&quot;,
            &quot;received_at&quot;: null,
            &quot;dispatched_at&quot;: null,
            &quot;arrived_at&quot;: null,
            &quot;released_at&quot;: null,
            &quot;delivered_at&quot;: null
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-billing-invoices" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-billing-invoices"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-billing-invoices"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-billing-invoices" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-billing-invoices">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-billing-invoices" data-method="POST"
      data-path="api/billing/invoices"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-billing-invoices', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-billing-invoices"
                    onclick="tryItOut('POSTapi-billing-invoices');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-billing-invoices"
                    onclick="cancelTryOut('POSTapi-billing-invoices');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-billing-invoices"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/billing/invoices</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="POSTapi-billing-invoices"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-billing-invoices"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-billing-invoices"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>order_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="order_id"                data-endpoint="POSTapi-billing-invoices"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="type"                data-endpoint="POSTapi-billing-invoices"
               value="FREIGHT,STORAGE,CUSTOMS,OTHER"
               data-component="body">
    <br>
<p>Example: <code>FREIGHT,STORAGE,CUSTOMS,OTHER</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>due_date</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="due_date"                data-endpoint="POSTapi-billing-invoices"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="invoice-GETapi-billing-invoices--id-">Single Invoice Details</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-billing-invoices--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/billing/invoices/consequatur" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"invoice_id\": 17
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/billing/invoices/consequatur"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "invoice_id": 17
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/billing/invoices/consequatur';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'invoice_id' =&gt; 17,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-billing-invoices--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-billing-invoices--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-billing-invoices--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-billing-invoices--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-billing-invoices--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-billing-invoices--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-billing-invoices--id-" data-method="GET"
      data-path="api/billing/invoices/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-billing-invoices--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-billing-invoices--id-"
                    onclick="tryItOut('GETapi-billing-invoices--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-billing-invoices--id-"
                    onclick="cancelTryOut('GETapi-billing-invoices--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-billing-invoices--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/billing/invoices/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="GETapi-billing-invoices--id-"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-billing-invoices--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-billing-invoices--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-billing-invoices--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the invoice. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>invoice_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="invoice_id"                data-endpoint="GETapi-billing-invoices--id-"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
        </div>
        </form>

                    <h2 id="invoice-PUTapi-billing-invoices--id-">Update an Invoice</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-billing-invoices--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/billing/invoices/17" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"type\": \"FREIGHT,STORAGE,CUSTOMS,OTHER\",
    \"status\": \"UNPAID,PAID,OVERDUE,CANCELLED\",
    \"due_date\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/billing/invoices/17"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "type": "FREIGHT,STORAGE,CUSTOMS,OTHER",
    "status": "UNPAID,PAID,OVERDUE,CANCELLED",
    "due_date": "consequatur"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/billing/invoices/17';
$response = $client-&gt;put(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'type' =&gt; 'FREIGHT,STORAGE,CUSTOMS,OTHER',
            'status' =&gt; 'UNPAID,PAID,OVERDUE,CANCELLED',
            'due_date' =&gt; 'consequatur',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-billing-invoices--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Invoice Updated successfully&quot;,
    &quot;data&quot;: {
        &quot;order_id&quot;: &quot;5&quot;,
        &quot;type&quot;: &quot;FREIGHT&quot;,
        &quot;due_date&quot;: &quot;2005-12-09T00:00:00.000000Z&quot;,
        &quot;user_id&quot;: 1,
        &quot;invoice_number&quot;: &quot;INV-20251208-00002&quot;,
        &quot;updated_at&quot;: &quot;2025-12-08T10:31:55.000000Z&quot;,
        &quot;created_at&quot;: &quot;2025-12-08T10:31:55.000000Z&quot;,
        &quot;id&quot;: 2,
        &quot;order&quot;: {
            &quot;id&quot;: 5,
            &quot;created_at&quot;: &quot;2025-12-05T12:20:11.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-12-05T12:20:11.000000Z&quot;,
            &quot;deleted_at&quot;: null,
            &quot;tracking_number&quot;: &quot;ORD-20251205-00002&quot;,
            &quot;user_id&quot;: 1,
            &quot;origin_country&quot;: &quot;ITALY&quot;,
            &quot;receiver_name&quot;: &quot;Tom Mboya&quot;,
            &quot;receiver_phone&quot;: &quot;0789887766&quot;,
            &quot;receiver_email&quot;: &quot;tom.mboya@gmail.com&quot;,
            &quot;receiver_address&quot;: &quot;Uganda - Kampala&quot;,
            &quot;status&quot;: &quot;PENDING&quot;,
            &quot;received_at&quot;: null,
            &quot;dispatched_at&quot;: null,
            &quot;arrived_at&quot;: null,
            &quot;released_at&quot;: null,
            &quot;delivered_at&quot;: null
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-billing-invoices--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-billing-invoices--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-billing-invoices--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-billing-invoices--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-billing-invoices--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-billing-invoices--id-" data-method="PUT"
      data-path="api/billing/invoices/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-billing-invoices--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-billing-invoices--id-"
                    onclick="tryItOut('PUTapi-billing-invoices--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-billing-invoices--id-"
                    onclick="cancelTryOut('PUTapi-billing-invoices--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-billing-invoices--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/billing/invoices/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/billing/invoices/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="PUTapi-billing-invoices--id-"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-billing-invoices--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-billing-invoices--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-billing-invoices--id-"
               value="17"
               data-component="url">
    <br>
<p>The ID of the invoice. Example: <code>17</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="type"                data-endpoint="PUTapi-billing-invoices--id-"
               value="FREIGHT,STORAGE,CUSTOMS,OTHER"
               data-component="body">
    <br>
<p>Example: <code>FREIGHT,STORAGE,CUSTOMS,OTHER</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PUTapi-billing-invoices--id-"
               value="UNPAID,PAID,OVERDUE,CANCELLED"
               data-component="body">
    <br>
<p>Example: <code>UNPAID,PAID,OVERDUE,CANCELLED</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>due_date</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="due_date"                data-endpoint="PUTapi-billing-invoices--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="invoice-DELETEapi-billing-invoices--id-">Delete Invoice</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-billing-invoices--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/billing/invoices/17" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/billing/invoices/17"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/billing/invoices/17';
$response = $client-&gt;delete(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-billing-invoices--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
         &quot;status&quot;: &quot;success&quot;,
          &quot;message&quot;: &quot;Invoice deleted successfully&quot;,
      }
  }</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-billing-invoices--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-billing-invoices--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-billing-invoices--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-billing-invoices--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-billing-invoices--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-billing-invoices--id-" data-method="DELETE"
      data-path="api/billing/invoices/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-billing-invoices--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-billing-invoices--id-"
                    onclick="tryItOut('DELETEapi-billing-invoices--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-billing-invoices--id-"
                    onclick="cancelTryOut('DELETEapi-billing-invoices--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-billing-invoices--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/billing/invoices/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="DELETEapi-billing-invoices--id-"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-billing-invoices--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-billing-invoices--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-billing-invoices--id-"
               value="17"
               data-component="url">
    <br>
<p>The ID of the invoice. Example: <code>17</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>invoice_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="invoice_id"                data-endpoint="DELETEapi-billing-invoices--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="invoice-POSTapi-billing-invoices--id--restore">Restore Invoice</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-billing-invoices--id--restore">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/billing/invoices/17/restore" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/billing/invoices/17/restore"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/billing/invoices/17/restore';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-billing-invoices--id--restore">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
         &quot;status&quot;: &quot;success&quot;,
          &quot;message&quot;: &quot;Invoice restored successfully&quot;,
      }
  }</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-billing-invoices--id--restore" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-billing-invoices--id--restore"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-billing-invoices--id--restore"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-billing-invoices--id--restore" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-billing-invoices--id--restore">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-billing-invoices--id--restore" data-method="POST"
      data-path="api/billing/invoices/{id}/restore"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-billing-invoices--id--restore', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-billing-invoices--id--restore"
                    onclick="tryItOut('POSTapi-billing-invoices--id--restore');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-billing-invoices--id--restore"
                    onclick="cancelTryOut('POSTapi-billing-invoices--id--restore');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-billing-invoices--id--restore"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/billing/invoices/{id}/restore</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="POSTapi-billing-invoices--id--restore"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-billing-invoices--id--restore"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-billing-invoices--id--restore"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="POSTapi-billing-invoices--id--restore"
               value="17"
               data-component="url">
    <br>
<p>The ID of the invoice. Example: <code>17</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>invoice_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="invoice_id"                data-endpoint="POSTapi-billing-invoices--id--restore"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="invoice-POSTapi-billing-invoice-line-items">Add Item to Invoice</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-billing-invoice-line-items">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/billing/invoice-line-items" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"invoice_id\": \"consequatur\",
    \"description\": \"Dolores dolorum amet iste laborum eius est dolor.\",
    \"quantity\": 17,
    \"unit_price\": 11613.31890586
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/billing/invoice-line-items"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "invoice_id": "consequatur",
    "description": "Dolores dolorum amet iste laborum eius est dolor.",
    "quantity": 17,
    "unit_price": 11613.31890586
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/billing/invoice-line-items';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'invoice_id' =&gt; 'consequatur',
            'description' =&gt; 'Dolores dolorum amet iste laborum eius est dolor.',
            'quantity' =&gt; 17,
            'unit_price' =&gt; 11613.31890586,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-billing-invoice-line-items">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Invoice line item created successfully&quot;,
    &quot;data&quot;: {
        &quot;invoice_id&quot;: &quot;1&quot;,
        &quot;description&quot;: &quot;Cargo A&quot;,
        &quot;quantity&quot;: &quot;1&quot;,
        &quot;unit_price&quot;: &quot;30000&quot;,
        &quot;updated_at&quot;: &quot;2025-12-08T13:30:52.000000Z&quot;,
        &quot;created_at&quot;: &quot;2025-12-08T13:30:52.000000Z&quot;,
        &quot;id&quot;: 1
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-billing-invoice-line-items" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-billing-invoice-line-items"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-billing-invoice-line-items"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-billing-invoice-line-items" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-billing-invoice-line-items">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-billing-invoice-line-items" data-method="POST"
      data-path="api/billing/invoice-line-items"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-billing-invoice-line-items', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-billing-invoice-line-items"
                    onclick="tryItOut('POSTapi-billing-invoice-line-items');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-billing-invoice-line-items"
                    onclick="cancelTryOut('POSTapi-billing-invoice-line-items');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-billing-invoice-line-items"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/billing/invoice-line-items</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="POSTapi-billing-invoice-line-items"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-billing-invoice-line-items"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-billing-invoice-line-items"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>invoice_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="invoice_id"                data-endpoint="POSTapi-billing-invoice-line-items"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-billing-invoice-line-items"
               value="Dolores dolorum amet iste laborum eius est dolor."
               data-component="body">
    <br>
<p>Example: <code>Dolores dolorum amet iste laborum eius est dolor.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>quantity</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="quantity"                data-endpoint="POSTapi-billing-invoice-line-items"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>unit_price</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="unit_price"                data-endpoint="POSTapi-billing-invoice-line-items"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Example: <code>11613.31890586</code></p>
        </div>
        </form>

                    <h2 id="invoice-PUTapi-billing-invoice-line-items--id-">Edit Invoice Item</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-billing-invoice-line-items--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/billing/invoice-line-items/17" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"description\": \"Dolores dolorum amet iste laborum eius est dolor.\",
    \"quantity\": 17,
    \"unit_price\": 11613.31890586,
    \"invoice_id\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/billing/invoice-line-items/17"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "description": "Dolores dolorum amet iste laborum eius est dolor.",
    "quantity": 17,
    "unit_price": 11613.31890586,
    "invoice_id": "consequatur"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/billing/invoice-line-items/17';
$response = $client-&gt;put(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'description' =&gt; 'Dolores dolorum amet iste laborum eius est dolor.',
            'quantity' =&gt; 17,
            'unit_price' =&gt; 11613.31890586,
            'invoice_id' =&gt; 'consequatur',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-billing-invoice-line-items--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Invoice line item updated successfully&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: 2,
        &quot;created_at&quot;: &quot;2025-12-08T13:32:09.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-12-08T13:32:09.000000Z&quot;,
        &quot;deleted_at&quot;: null,
        &quot;invoice_id&quot;: 1,
        &quot;description&quot;: &quot;Cargo A&quot;,
        &quot;quantity&quot;: 1,
        &quot;unit_price&quot;: 30000
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-billing-invoice-line-items--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-billing-invoice-line-items--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-billing-invoice-line-items--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-billing-invoice-line-items--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-billing-invoice-line-items--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-billing-invoice-line-items--id-" data-method="PUT"
      data-path="api/billing/invoice-line-items/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-billing-invoice-line-items--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-billing-invoice-line-items--id-"
                    onclick="tryItOut('PUTapi-billing-invoice-line-items--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-billing-invoice-line-items--id-"
                    onclick="cancelTryOut('PUTapi-billing-invoice-line-items--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-billing-invoice-line-items--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/billing/invoice-line-items/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/billing/invoice-line-items/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="PUTapi-billing-invoice-line-items--id-"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-billing-invoice-line-items--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-billing-invoice-line-items--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-billing-invoice-line-items--id-"
               value="17"
               data-component="url">
    <br>
<p>The ID of the invoice line item. Example: <code>17</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-billing-invoice-line-items--id-"
               value="Dolores dolorum amet iste laborum eius est dolor."
               data-component="body">
    <br>
<p>Example: <code>Dolores dolorum amet iste laborum eius est dolor.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>quantity</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="quantity"                data-endpoint="PUTapi-billing-invoice-line-items--id-"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>unit_price</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="unit_price"                data-endpoint="PUTapi-billing-invoice-line-items--id-"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>invoice_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="invoice_id"                data-endpoint="PUTapi-billing-invoice-line-items--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="invoice-DELETEapi-billing-invoice-line-items--id-">Delete Invoice Item</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-billing-invoice-line-items--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/billing/invoice-line-items/17" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/billing/invoice-line-items/17"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/billing/invoice-line-items/17';
$response = $client-&gt;delete(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-billing-invoice-line-items--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Invoice line item deleted successfully&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-billing-invoice-line-items--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-billing-invoice-line-items--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-billing-invoice-line-items--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-billing-invoice-line-items--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-billing-invoice-line-items--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-billing-invoice-line-items--id-" data-method="DELETE"
      data-path="api/billing/invoice-line-items/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-billing-invoice-line-items--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-billing-invoice-line-items--id-"
                    onclick="tryItOut('DELETEapi-billing-invoice-line-items--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-billing-invoice-line-items--id-"
                    onclick="cancelTryOut('DELETEapi-billing-invoice-line-items--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-billing-invoice-line-items--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/billing/invoice-line-items/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="DELETEapi-billing-invoice-line-items--id-"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-billing-invoice-line-items--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-billing-invoice-line-items--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-billing-invoice-line-items--id-"
               value="17"
               data-component="url">
    <br>
<p>The ID of the invoice line item. Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="invoice-POSTapi-billing-invoice-line-items--id--restore">Restore Invoice Item</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-billing-invoice-line-items--id--restore">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/billing/invoice-line-items/17/restore" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/billing/invoice-line-items/17/restore"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/billing/invoice-line-items/17/restore';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-billing-invoice-line-items--id--restore">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Invoice line item deleted successfully&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-billing-invoice-line-items--id--restore" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-billing-invoice-line-items--id--restore"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-billing-invoice-line-items--id--restore"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-billing-invoice-line-items--id--restore" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-billing-invoice-line-items--id--restore">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-billing-invoice-line-items--id--restore" data-method="POST"
      data-path="api/billing/invoice-line-items/{id}/restore"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-billing-invoice-line-items--id--restore', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-billing-invoice-line-items--id--restore"
                    onclick="tryItOut('POSTapi-billing-invoice-line-items--id--restore');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-billing-invoice-line-items--id--restore"
                    onclick="cancelTryOut('POSTapi-billing-invoice-line-items--id--restore');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-billing-invoice-line-items--id--restore"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/billing/invoice-line-items/{id}/restore</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="POSTapi-billing-invoice-line-items--id--restore"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-billing-invoice-line-items--id--restore"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-billing-invoice-line-items--id--restore"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="POSTapi-billing-invoice-line-items--id--restore"
               value="17"
               data-component="url">
    <br>
<p>The ID of the invoice line item. Example: <code>17</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>invoiceLineItem_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="invoiceLineItem_id"                data-endpoint="POSTapi-billing-invoice-line-items--id--restore"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="invoice-POSTapi-billing-payments">Record Invoice Payment</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-billing-payments">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/billing/payments" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"invoice_id\": 17,
    \"assisted_shopping_id\": 17,
    \"amount\": 11613.31890586,
    \"method\": \"MOBILE_MONEY,CARD,BANK_TRANSFER,CASH\",
    \"transaction_reference\": \"example value\",
    \"gateway_reference\": \"example value\",
    \"status\": \"example value\",
    \"paid_at\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/billing/payments"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "invoice_id": 17,
    "assisted_shopping_id": 17,
    "amount": 11613.31890586,
    "method": "MOBILE_MONEY,CARD,BANK_TRANSFER,CASH",
    "transaction_reference": "example value",
    "gateway_reference": "example value",
    "status": "example value",
    "paid_at": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/billing/payments';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'invoice_id' =&gt; 17,
            'assisted_shopping_id' =&gt; 17,
            'amount' =&gt; 11613.31890586,
            'method' =&gt; 'MOBILE_MONEY,CARD,BANK_TRANSFER,CASH',
            'transaction_reference' =&gt; 'example value',
            'gateway_reference' =&gt; 'example value',
            'status' =&gt; 'example value',
            'paid_at' =&gt; 'consequatur',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-billing-payments">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Payment recorded successfully&quot;,
    &quot;data&quot;: {
        &quot;invoice_id&quot;: &quot;1&quot;,
        &quot;amount&quot;: &quot;30000&quot;,
        &quot;method&quot;: &quot;CASH&quot;,
        &quot;paid_at&quot;: &quot;2025-12-08&quot;,
        &quot;updated_at&quot;: &quot;2025-12-08T13:47:08.000000Z&quot;,
        &quot;created_at&quot;: &quot;2025-12-08T13:47:08.000000Z&quot;,
        &quot;id&quot;: 1
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-billing-payments" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-billing-payments"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-billing-payments"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-billing-payments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-billing-payments">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-billing-payments" data-method="POST"
      data-path="api/billing/payments"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-billing-payments', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-billing-payments"
                    onclick="tryItOut('POSTapi-billing-payments');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-billing-payments"
                    onclick="cancelTryOut('POSTapi-billing-payments');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-billing-payments"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/billing/payments</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="POSTapi-billing-payments"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-billing-payments"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-billing-payments"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>invoice_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="invoice_id"                data-endpoint="POSTapi-billing-payments"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>assisted_shopping_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="assisted_shopping_id"                data-endpoint="POSTapi-billing-payments"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>amount</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="amount"                data-endpoint="POSTapi-billing-payments"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>method</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="method"                data-endpoint="POSTapi-billing-payments"
               value="MOBILE_MONEY,CARD,BANK_TRANSFER,CASH"
               data-component="body">
    <br>
<p>Example: <code>MOBILE_MONEY,CARD,BANK_TRANSFER,CASH</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>transaction_reference</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="transaction_reference"                data-endpoint="POSTapi-billing-payments"
               value="example value"
               data-component="body">
    <br>
<p>Request parameter: transaction_reference. Example: <code>example value</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>gateway_reference</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="gateway_reference"                data-endpoint="POSTapi-billing-payments"
               value="example value"
               data-component="body">
    <br>
<p>Request parameter: gateway_reference. Example: <code>example value</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="POSTapi-billing-payments"
               value="example value"
               data-component="body">
    <br>
<p>Request parameter: status. Example: <code>example value</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>PENDING</code></li> <li><code>COMPLETED</code></li> <li><code>FAILED</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>paid_at</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="paid_at"                data-endpoint="POSTapi-billing-payments"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="invoice-DELETEapi-billing-payments--payment_id-">Delete Invoice Payment</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-billing-payments--payment_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/billing/payments/consequatur" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/billing/payments/consequatur"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/billing/payments/consequatur';
$response = $client-&gt;delete(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-billing-payments--payment_id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
      &quot;message&quot;: &quot;Payment deleted successfully&quot;,
  }</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-billing-payments--payment_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-billing-payments--payment_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-billing-payments--payment_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-billing-payments--payment_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-billing-payments--payment_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-billing-payments--payment_id-" data-method="DELETE"
      data-path="api/billing/payments/{payment_id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-billing-payments--payment_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-billing-payments--payment_id-"
                    onclick="tryItOut('DELETEapi-billing-payments--payment_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-billing-payments--payment_id-"
                    onclick="cancelTryOut('DELETEapi-billing-payments--payment_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-billing-payments--payment_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/billing/payments/{payment_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="DELETEapi-billing-payments--payment_id-"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-billing-payments--payment_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-billing-payments--payment_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>payment_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="payment_id"                data-endpoint="DELETEapi-billing-payments--payment_id-"
               value="consequatur"
               data-component="url">
    <br>
<p>date required Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="invoice-GETapi-billing-send_invoice--invoice_id-">Send Invoice Notification</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-billing-send_invoice--invoice_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/billing/send_invoice/17" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/billing/send_invoice/17"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/billing/send_invoice/17';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-billing-send_invoice--invoice_id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
         &quot;status&quot;: &quot;success&quot;,
          &quot;message&quot;: &quot;Invoice Sent successfully&quot;,
      }
  }</code>
 </pre>
    </span>
<span id="execution-results-GETapi-billing-send_invoice--invoice_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-billing-send_invoice--invoice_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-billing-send_invoice--invoice_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-billing-send_invoice--invoice_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-billing-send_invoice--invoice_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-billing-send_invoice--invoice_id-" data-method="GET"
      data-path="api/billing/send_invoice/{invoice_id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-billing-send_invoice--invoice_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-billing-send_invoice--invoice_id-"
                    onclick="tryItOut('GETapi-billing-send_invoice--invoice_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-billing-send_invoice--invoice_id-"
                    onclick="cancelTryOut('GETapi-billing-send_invoice--invoice_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-billing-send_invoice--invoice_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/billing/send_invoice/{invoice_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="GETapi-billing-send_invoice--invoice_id-"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-billing-send_invoice--invoice_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-billing-send_invoice--invoice_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>invoice_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="invoice_id"                data-endpoint="GETapi-billing-send_invoice--invoice_id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                <h1 id="delivery-order">Delivery Order</h1>

    

                                <h2 id="delivery-order-GETapi-delivery-orders">Delivery Orders</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-delivery-orders">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/delivery/orders" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/delivery/orders"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/delivery/orders';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-delivery-orders">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
  &quot;current_page&quot;: 1,
  &quot;data&quot;: [
      {
          &quot;id&quot;: 4,
          &quot;created_at&quot;: &quot;2025-12-09T07:41:36.000000Z&quot;,
          &quot;updated_at&quot;: &quot;2025-12-09T08:12:25.000000Z&quot;,
          &quot;deleted_at&quot;: null,
          &quot;delivery_number&quot;: &quot;DEL-000001&quot;,
          &quot;order_id&quot;: 5,
          &quot;rider_id&quot;: null,
          &quot;delivery_address&quot;: &quot;Kasese&quot;,
          &quot;delivery_date&quot;: &quot;2025-12-10&quot;,
          &quot;status&quot;: &quot;PENDING&quot;,
          &quot;pod_signature&quot;: null,
          &quot;pod_photo_path&quot;: &quot;pod_photos/2akLAes8oj4j5OIxC71O5GxwEN8fSJ1jxtotKyxk.jpg&quot;,
          &quot;delivery_notes&quot;: null,
          &quot;delivered_at&quot;: null,
          &quot;order&quot;: {
              &quot;id&quot;: 5,
              &quot;created_at&quot;: &quot;2025-12-05T12:20:11.000000Z&quot;,
              &quot;updated_at&quot;: &quot;2025-12-05T12:20:11.000000Z&quot;,
              &quot;deleted_at&quot;: null,
              &quot;tracking_number&quot;: &quot;ORD-20251205-00002&quot;,
              &quot;user_id&quot;: 1,
              &quot;origin_country&quot;: &quot;ITALY&quot;,
              &quot;receiver_name&quot;: &quot;Tom Mboya&quot;,
              &quot;receiver_phone&quot;: &quot;0789887766&quot;,
              &quot;receiver_email&quot;: &quot;tom.mboya@gmail.com&quot;,
              &quot;receiver_address&quot;: &quot;Uganda - Kampala&quot;,
              &quot;status&quot;: &quot;PENDING&quot;,
              &quot;received_at&quot;: null,
              &quot;dispatched_at&quot;: null,
              &quot;arrived_at&quot;: null,
              &quot;released_at&quot;: null,
              &quot;delivered_at&quot;: null,
              &quot;packages&quot;: [
                  {
                      &quot;id&quot;: 1,
                      &quot;created_at&quot;: &quot;2025-12-08T07:19:43.000000Z&quot;,
                      &quot;updated_at&quot;: &quot;2025-12-08T07:42:06.000000Z&quot;,
                      &quot;deleted_at&quot;: null,
                      &quot;order_id&quot;: 5,
                      &quot;hwb_number&quot;: &quot;HWB-2025128-0002&quot;,
                      &quot;contents&quot;: &quot;Computer - Desktop&quot;,
                      &quot;declared_value&quot;: &quot;2500000.00&quot;,
                      &quot;weight&quot;: &quot;5.00&quot;,
                      &quot;length&quot;: &quot;4.00&quot;,
                      &quot;width&quot;: &quot;6.00&quot;,
                      &quot;height&quot;: &quot;2.00&quot;,
                      &quot;is_fragile&quot;: true,
                      &quot;is_hazardous&quot;: false,
                      &quot;is_damaged&quot;: false,
                      &quot;package_photos&quot;: [
                          &quot;package_photos/LXHHmhE4YM0YoTn1Lva95FSyQi31i89dskkPv2il.jpg&quot;,
                          &quot;package_photos/thtdPXJtqtkpECHhbeyXIOAIMSGt564ZFIXBqdcp.jpg&quot;,
                          &quot;package_photos/Uc34hnpyAPsAT1QINJfca0msaFdudcYfaY2Qs21h.jpg&quot;
                      ],
                      &quot;location_id&quot;: 1,
                      &quot;received_at&quot;: &quot;2025-12-03T00:00:00.000000Z&quot;
                  },

              ]
          }
      }
  ],
  &quot;first_page_url&quot;: &quot;http://127.0.0.1:8000/api/delivery/orders?page=1&quot;,
  &quot;from&quot;: 1,
  &quot;last_page&quot;: 1,
  &quot;last_page_url&quot;: &quot;http://127.0.0.1:8000/api/delivery/orders?page=1&quot;,
  &quot;links&quot;: [
      {
          &quot;url&quot;: null,
          &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
          &quot;active&quot;: false
      },
      {
          &quot;url&quot;: &quot;http://127.0.0.1:8000/api/delivery/orders?page=1&quot;,
          &quot;label&quot;: &quot;1&quot;,
          &quot;active&quot;: true
      },
      {
          &quot;url&quot;: null,
          &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
          &quot;active&quot;: false
      }
  ],
  &quot;next_page_url&quot;: null,
  &quot;path&quot;: &quot;http://127.0.0.1:8000/api/delivery/orders&quot;,
  &quot;per_page&quot;: 20,
  &quot;prev_page_url&quot;: null,
  &quot;to&quot;: 1,
  &quot;total&quot;: 1
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-delivery-orders" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-delivery-orders"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-delivery-orders"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-delivery-orders" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-delivery-orders">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-delivery-orders" data-method="GET"
      data-path="api/delivery/orders"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-delivery-orders', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-delivery-orders"
                    onclick="tryItOut('GETapi-delivery-orders');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-delivery-orders"
                    onclick="cancelTryOut('GETapi-delivery-orders');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-delivery-orders"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/delivery/orders</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="GETapi-delivery-orders"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-delivery-orders"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-delivery-orders"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="delivery-order-POSTapi-delivery-orders">Create Order Deliver</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-delivery-orders">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/delivery/orders" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"order_id\": 17,
    \"rider_id\": \"example value\",
    \"delivery_address\": \"consequatur\",
    \"delivery_date\": \"consequatur\",
    \"status\": \"example value\",
    \"pod_signature\": \"example value\",
    \"pod_photo_path\": \"example value\",
    \"delivery_notes\": \"consequatur\",
    \"delivered_at\": \"example value\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/delivery/orders"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "order_id": 17,
    "rider_id": "example value",
    "delivery_address": "consequatur",
    "delivery_date": "consequatur",
    "status": "example value",
    "pod_signature": "example value",
    "pod_photo_path": "example value",
    "delivery_notes": "consequatur",
    "delivered_at": "example value"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/delivery/orders';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'order_id' =&gt; 17,
            'rider_id' =&gt; 'example value',
            'delivery_address' =&gt; 'consequatur',
            'delivery_date' =&gt; 'consequatur',
            'status' =&gt; 'example value',
            'pod_signature' =&gt; 'example value',
            'pod_photo_path' =&gt; 'example value',
            'delivery_notes' =&gt; 'consequatur',
            'delivered_at' =&gt; 'example value',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-delivery-orders">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Delivery order created successfully&quot;,
    &quot;data&quot;: {
        &quot;order_id&quot;: &quot;5&quot;,
        &quot;delivery_address&quot;: &quot;Kasese&quot;,
        &quot;delivery_date&quot;: &quot;2025-12-10&quot;,
        &quot;delivery_number&quot;: &quot;DEL-000001&quot;,
        &quot;updated_at&quot;: &quot;2025-12-09T07:41:36.000000Z&quot;,
        &quot;created_at&quot;: &quot;2025-12-09T07:41:36.000000Z&quot;,
        &quot;id&quot;: 4,
        &quot;order&quot;: {
            &quot;id&quot;: 5,
            &quot;created_at&quot;: &quot;2025-12-05T12:20:11.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-12-05T12:20:11.000000Z&quot;,
            &quot;deleted_at&quot;: null,
            &quot;tracking_number&quot;: &quot;ORD-20251205-00002&quot;,
            &quot;user_id&quot;: 1,
            &quot;origin_country&quot;: &quot;ITALY&quot;,
            &quot;receiver_name&quot;: &quot;Tom Mboya&quot;,
            &quot;receiver_phone&quot;: &quot;0789887766&quot;,
            &quot;receiver_email&quot;: &quot;tom.mboya@gmail.com&quot;,
            &quot;receiver_address&quot;: &quot;Uganda - Kampala&quot;,
            &quot;status&quot;: &quot;PENDING&quot;,
            &quot;received_at&quot;: null,
            &quot;dispatched_at&quot;: null,
            &quot;arrived_at&quot;: null,
            &quot;released_at&quot;: null,
            &quot;delivered_at&quot;: null,
            &quot;packages&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;created_at&quot;: &quot;2025-12-08T07:19:43.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-08T07:42:06.000000Z&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;order_id&quot;: 5,
                    &quot;hwb_number&quot;: &quot;HWB-2025128-0002&quot;,
                    &quot;contents&quot;: &quot;Computer - Desktop&quot;,
                    &quot;declared_value&quot;: &quot;2500000.00&quot;,
                    &quot;weight&quot;: &quot;5.00&quot;,
                    &quot;length&quot;: &quot;4.00&quot;,
                    &quot;width&quot;: &quot;6.00&quot;,
                    &quot;height&quot;: &quot;2.00&quot;,
                    &quot;is_fragile&quot;: true,
                    &quot;is_hazardous&quot;: false,
                    &quot;is_damaged&quot;: false,
                    &quot;package_photos&quot;: [
                        &quot;package_photos/LXHHmhE4YM0YoTn1Lva95FSyQi31i89dskkPv2il.jpg&quot;,
                        &quot;package_photos/thtdPXJtqtkpECHhbeyXIOAIMSGt564ZFIXBqdcp.jpg&quot;,
                        &quot;package_photos/Uc34hnpyAPsAT1QINJfca0msaFdudcYfaY2Qs21h.jpg&quot;
                    ],
                    &quot;location_id&quot;: 1,
                    &quot;received_at&quot;: &quot;2025-12-03T00:00:00.000000Z&quot;
                },
                {
                    &quot;id&quot;: 2,
                    &quot;created_at&quot;: &quot;2025-12-08T07:32:17.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-08T07:32:17.000000Z&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;order_id&quot;: 5,
                    &quot;hwb_number&quot;: &quot;HWB-2025128-0021&quot;,
                    &quot;contents&quot;: &quot;Computer - Desktop&quot;,
                    &quot;declared_value&quot;: &quot;2500000.00&quot;,
                    &quot;weight&quot;: &quot;5.00&quot;,
                    &quot;length&quot;: &quot;4.00&quot;,
                    &quot;width&quot;: &quot;6.00&quot;,
                    &quot;height&quot;: &quot;2.00&quot;,
                    &quot;is_fragile&quot;: true,
                    &quot;is_hazardous&quot;: false,
                    &quot;is_damaged&quot;: false,
                    &quot;package_photos&quot;: null,
                    &quot;location_id&quot;: 1,
                    &quot;received_at&quot;: &quot;2025-12-03T00:00:00.000000Z&quot;
                }
            ]
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-delivery-orders" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-delivery-orders"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-delivery-orders"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-delivery-orders" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-delivery-orders">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-delivery-orders" data-method="POST"
      data-path="api/delivery/orders"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-delivery-orders', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-delivery-orders"
                    onclick="tryItOut('POSTapi-delivery-orders');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-delivery-orders"
                    onclick="cancelTryOut('POSTapi-delivery-orders');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-delivery-orders"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/delivery/orders</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="POSTapi-delivery-orders"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-delivery-orders"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-delivery-orders"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>order_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="order_id"                data-endpoint="POSTapi-delivery-orders"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>rider_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rider_id"                data-endpoint="POSTapi-delivery-orders"
               value="example value"
               data-component="body">
    <br>
<p>Request parameter: rider_id. The <code>id</code> of an existing record in the users table. Example: <code>example value</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>delivery_address</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="delivery_address"                data-endpoint="POSTapi-delivery-orders"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>delivery_date</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="delivery_date"                data-endpoint="POSTapi-delivery-orders"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="POSTapi-delivery-orders"
               value="example value"
               data-component="body">
    <br>
<p>Request parameter: status. Example: <code>example value</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>PENDING</code></li> <li><code>ASSIGNED</code></li> <li><code>OUT_FOR_DELIVERY</code></li> <li><code>DELIVERED</code></li> <li><code>FAILED</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>pod_signature</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="pod_signature"                data-endpoint="POSTapi-delivery-orders"
               value="example value"
               data-component="body">
    <br>
<p>Request parameter: pod_signature. Example: <code>example value</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>pod_photo_path</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="pod_photo_path"                data-endpoint="POSTapi-delivery-orders"
               value="example value"
               data-component="body">
    <br>
<p>Request parameter: pod_photo_path. Example: <code>example value</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>delivery_notes</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="delivery_notes"                data-endpoint="POSTapi-delivery-orders"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>delivered_at</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="delivered_at"                data-endpoint="POSTapi-delivery-orders"
               value="example value"
               data-component="body">
    <br>
<p>Request parameter: delivered_at. Must be a valid date. Example: <code>example value</code></p>
        </div>
        </form>

                    <h2 id="delivery-order-GETapi-delivery-orders--id-">Single Delivery Order</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-delivery-orders--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/delivery/orders/1" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/delivery/orders/1"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/delivery/orders/1';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-delivery-orders--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Delivery order&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: 4,
        &quot;created_at&quot;: &quot;2025-12-09T07:41:36.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-12-09T08:12:25.000000Z&quot;,
        &quot;deleted_at&quot;: null,
        &quot;delivery_number&quot;: &quot;DEL-000001&quot;,
        &quot;order_id&quot;: 5,
        &quot;rider_id&quot;: null,
        &quot;delivery_address&quot;: &quot;Kasese&quot;,
        &quot;delivery_date&quot;: &quot;2025-12-10&quot;,
        &quot;status&quot;: &quot;PENDING&quot;,
        &quot;pod_signature&quot;: null,
        &quot;pod_photo_path&quot;: &quot;pod_photos/2akLAes8oj4j5OIxC71O5GxwEN8fSJ1jxtotKyxk.jpg&quot;,
        &quot;delivery_notes&quot;: null,
        &quot;delivered_at&quot;: null,
        &quot;order&quot;: {
            &quot;id&quot;: 5,
            &quot;created_at&quot;: &quot;2025-12-05T12:20:11.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-12-05T12:20:11.000000Z&quot;,
            &quot;deleted_at&quot;: null,
            &quot;tracking_number&quot;: &quot;ORD-20251205-00002&quot;,
            &quot;user_id&quot;: 1,
            &quot;origin_country&quot;: &quot;ITALY&quot;,
            &quot;receiver_name&quot;: &quot;Tom Mboya&quot;,
            &quot;receiver_phone&quot;: &quot;0789887766&quot;,
            &quot;receiver_email&quot;: &quot;tom.mboya@gmail.com&quot;,
            &quot;receiver_address&quot;: &quot;Uganda - Kampala&quot;,
            &quot;status&quot;: &quot;PENDING&quot;,
            &quot;received_at&quot;: null,
            &quot;dispatched_at&quot;: null,
            &quot;arrived_at&quot;: null,
            &quot;released_at&quot;: null,
            &quot;delivered_at&quot;: null,
            &quot;packages&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;created_at&quot;: &quot;2025-12-08T07:19:43.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-08T07:42:06.000000Z&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;order_id&quot;: 5,
                    &quot;hwb_number&quot;: &quot;HWB-2025128-0002&quot;,
                    &quot;contents&quot;: &quot;Computer - Desktop&quot;,
                    &quot;declared_value&quot;: &quot;2500000.00&quot;,
                    &quot;weight&quot;: &quot;5.00&quot;,
                    &quot;length&quot;: &quot;4.00&quot;,
                    &quot;width&quot;: &quot;6.00&quot;,
                    &quot;height&quot;: &quot;2.00&quot;,
                    &quot;is_fragile&quot;: true,
                    &quot;is_hazardous&quot;: false,
                    &quot;is_damaged&quot;: false,
                    &quot;package_photos&quot;: [
                        &quot;package_photos/LXHHmhE4YM0YoTn1Lva95FSyQi31i89dskkPv2il.jpg&quot;,
                        &quot;package_photos/thtdPXJtqtkpECHhbeyXIOAIMSGt564ZFIXBqdcp.jpg&quot;,
                        &quot;package_photos/Uc34hnpyAPsAT1QINJfca0msaFdudcYfaY2Qs21h.jpg&quot;
                    ],
                    &quot;location_id&quot;: 1,
                    &quot;received_at&quot;: &quot;2025-12-03T00:00:00.000000Z&quot;
                },
                {
                    &quot;id&quot;: 2,
                    &quot;created_at&quot;: &quot;2025-12-08T07:32:17.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-08T07:32:17.000000Z&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;order_id&quot;: 5,
                    &quot;hwb_number&quot;: &quot;HWB-2025128-0021&quot;,
                    &quot;contents&quot;: &quot;Computer - Desktop&quot;,
                    &quot;declared_value&quot;: &quot;2500000.00&quot;,
                    &quot;weight&quot;: &quot;5.00&quot;,
                    &quot;length&quot;: &quot;4.00&quot;,
                    &quot;width&quot;: &quot;6.00&quot;,
                    &quot;height&quot;: &quot;2.00&quot;,
                    &quot;is_fragile&quot;: true,
                    &quot;is_hazardous&quot;: false,
                    &quot;is_damaged&quot;: false,
                    &quot;package_photos&quot;: null,
                    &quot;location_id&quot;: 1,
                    &quot;received_at&quot;: &quot;2025-12-03T00:00:00.000000Z&quot;
                }
            ],
            &quot;user&quot;: {
                &quot;id&quot;: 1,
                &quot;full_name&quot;: &quot;Thembo Charles&quot;,
                &quot;email&quot;: &quot;ashley7520charles@gmail.com&quot;,
                &quot;phone&quot;: &quot;0787444081&quot;,
                &quot;email_verified_at&quot;: null,
                &quot;tin&quot;: &quot;110023452&quot;,
                &quot;passport&quot;: &quot;65748&quot;,
                &quot;address&quot;: &quot;Kampala&quot;,
                &quot;otp&quot;: &quot;4782&quot;,
                &quot;status&quot;: &quot;active&quot;,
                &quot;user_type&quot;: &quot;user&quot;,
                &quot;created_at&quot;: &quot;2025-12-05T06:42:09.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-05T07:58:28.000000Z&quot;,
                &quot;deleted_at&quot;: null
            }
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-delivery-orders--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-delivery-orders--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-delivery-orders--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-delivery-orders--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-delivery-orders--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-delivery-orders--id-" data-method="GET"
      data-path="api/delivery/orders/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-delivery-orders--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-delivery-orders--id-"
                    onclick="tryItOut('GETapi-delivery-orders--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-delivery-orders--id-"
                    onclick="cancelTryOut('GETapi-delivery-orders--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-delivery-orders--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/delivery/orders/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="GETapi-delivery-orders--id-"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-delivery-orders--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-delivery-orders--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-delivery-orders--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the order. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="delivery-order-PUTapi-delivery-orders--id-">Update Order Deliver</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-delivery-orders--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/delivery/orders/1" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"rider_id\": \"example value\",
    \"delivery_address\": \"consequatur\",
    \"delivery_date\": \"consequatur\",
    \"pod_signature\": \"example value\",
    \"pod_photo_path\": \"example value\",
    \"delivery_notes\": \"consequatur\",
    \"delivered_at\": \"example value\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/delivery/orders/1"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "rider_id": "example value",
    "delivery_address": "consequatur",
    "delivery_date": "consequatur",
    "pod_signature": "example value",
    "pod_photo_path": "example value",
    "delivery_notes": "consequatur",
    "delivered_at": "example value"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/delivery/orders/1';
$response = $client-&gt;put(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'rider_id' =&gt; 'example value',
            'delivery_address' =&gt; 'consequatur',
            'delivery_date' =&gt; 'consequatur',
            'pod_signature' =&gt; 'example value',
            'pod_photo_path' =&gt; 'example value',
            'delivery_notes' =&gt; 'consequatur',
            'delivered_at' =&gt; 'example value',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-delivery-orders--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Delivery order updated successfully&quot;,
    &quot;data&quot;: {
        &quot;order_id&quot;: &quot;5&quot;,
        &quot;delivery_address&quot;: &quot;Kasese&quot;,
        &quot;delivery_date&quot;: &quot;2025-12-10&quot;,
        &quot;delivery_number&quot;: &quot;DEL-000001&quot;,
        &quot;updated_at&quot;: &quot;2025-12-09T07:41:36.000000Z&quot;,
        &quot;created_at&quot;: &quot;2025-12-09T07:41:36.000000Z&quot;,
        &quot;id&quot;: 4,
        &quot;order&quot;: {
            &quot;id&quot;: 5,
            &quot;created_at&quot;: &quot;2025-12-05T12:20:11.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-12-05T12:20:11.000000Z&quot;,
            &quot;deleted_at&quot;: null,
            &quot;tracking_number&quot;: &quot;ORD-20251205-00002&quot;,
            &quot;user_id&quot;: 1,
            &quot;origin_country&quot;: &quot;ITALY&quot;,
            &quot;receiver_name&quot;: &quot;Tom Mboya&quot;,
            &quot;receiver_phone&quot;: &quot;0789887766&quot;,
            &quot;receiver_email&quot;: &quot;tom.mboya@gmail.com&quot;,
            &quot;receiver_address&quot;: &quot;Uganda - Kampala&quot;,
            &quot;status&quot;: &quot;PENDING&quot;,
            &quot;received_at&quot;: null,
            &quot;dispatched_at&quot;: null,
            &quot;arrived_at&quot;: null,
            &quot;released_at&quot;: null,
            &quot;delivered_at&quot;: null,
            &quot;packages&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;created_at&quot;: &quot;2025-12-08T07:19:43.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-08T07:42:06.000000Z&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;order_id&quot;: 5,
                    &quot;hwb_number&quot;: &quot;HWB-2025128-0002&quot;,
                    &quot;contents&quot;: &quot;Computer - Desktop&quot;,
                    &quot;declared_value&quot;: &quot;2500000.00&quot;,
                    &quot;weight&quot;: &quot;5.00&quot;,
                    &quot;length&quot;: &quot;4.00&quot;,
                    &quot;width&quot;: &quot;6.00&quot;,
                    &quot;height&quot;: &quot;2.00&quot;,
                    &quot;is_fragile&quot;: true,
                    &quot;is_hazardous&quot;: false,
                    &quot;is_damaged&quot;: false,
                    &quot;package_photos&quot;: [
                        &quot;package_photos/LXHHmhE4YM0YoTn1Lva95FSyQi31i89dskkPv2il.jpg&quot;,
                        &quot;package_photos/thtdPXJtqtkpECHhbeyXIOAIMSGt564ZFIXBqdcp.jpg&quot;,
                        &quot;package_photos/Uc34hnpyAPsAT1QINJfca0msaFdudcYfaY2Qs21h.jpg&quot;
                    ],
                    &quot;location_id&quot;: 1,
                    &quot;received_at&quot;: &quot;2025-12-03T00:00:00.000000Z&quot;
                },
                {
                    &quot;id&quot;: 2,
                    &quot;created_at&quot;: &quot;2025-12-08T07:32:17.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-08T07:32:17.000000Z&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;order_id&quot;: 5,
                    &quot;hwb_number&quot;: &quot;HWB-2025128-0021&quot;,
                    &quot;contents&quot;: &quot;Computer - Desktop&quot;,
                    &quot;declared_value&quot;: &quot;2500000.00&quot;,
                    &quot;weight&quot;: &quot;5.00&quot;,
                    &quot;length&quot;: &quot;4.00&quot;,
                    &quot;width&quot;: &quot;6.00&quot;,
                    &quot;height&quot;: &quot;2.00&quot;,
                    &quot;is_fragile&quot;: true,
                    &quot;is_hazardous&quot;: false,
                    &quot;is_damaged&quot;: false,
                    &quot;package_photos&quot;: null,
                    &quot;location_id&quot;: 1,
                    &quot;received_at&quot;: &quot;2025-12-03T00:00:00.000000Z&quot;
                }
            ]
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-delivery-orders--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-delivery-orders--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-delivery-orders--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-delivery-orders--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-delivery-orders--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-delivery-orders--id-" data-method="PUT"
      data-path="api/delivery/orders/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-delivery-orders--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-delivery-orders--id-"
                    onclick="tryItOut('PUTapi-delivery-orders--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-delivery-orders--id-"
                    onclick="cancelTryOut('PUTapi-delivery-orders--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-delivery-orders--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/delivery/orders/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/delivery/orders/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="PUTapi-delivery-orders--id-"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-delivery-orders--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-delivery-orders--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-delivery-orders--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the order. Example: <code>1</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>deliveryOrder_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="deliveryOrder_id"                data-endpoint="PUTapi-delivery-orders--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>rider_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rider_id"                data-endpoint="PUTapi-delivery-orders--id-"
               value="example value"
               data-component="body">
    <br>
<p>Request parameter: rider_id. The <code>id</code> of an existing record in the user table. Example: <code>example value</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>delivery_address</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="delivery_address"                data-endpoint="PUTapi-delivery-orders--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>delivery_date</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="delivery_date"                data-endpoint="PUTapi-delivery-orders--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>pod_signature</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="pod_signature"                data-endpoint="PUTapi-delivery-orders--id-"
               value="example value"
               data-component="body">
    <br>
<p>Request parameter: pod_signature. Example: <code>example value</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>pod_photo_path</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="pod_photo_path"                data-endpoint="PUTapi-delivery-orders--id-"
               value="example value"
               data-component="body">
    <br>
<p>Request parameter: pod_photo_path. Example: <code>example value</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>delivery_notes</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="delivery_notes"                data-endpoint="PUTapi-delivery-orders--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>delivered_at</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="delivered_at"                data-endpoint="PUTapi-delivery-orders--id-"
               value="example value"
               data-component="body">
    <br>
<p>Request parameter: delivered_at. Must be a valid date. Example: <code>example value</code></p>
        </div>
        </form>

                    <h2 id="delivery-order-DELETEapi-delivery-orders--id-">Delete Delivery Order</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-delivery-orders--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/delivery/orders/1" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/delivery/orders/1"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/delivery/orders/1';
$response = $client-&gt;delete(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-delivery-orders--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
         &quot;status&quot;: &quot;success&quot;,
          &quot;message&quot;: &quot;Delivery order deleted successfully&quot;,
      }</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-delivery-orders--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-delivery-orders--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-delivery-orders--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-delivery-orders--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-delivery-orders--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-delivery-orders--id-" data-method="DELETE"
      data-path="api/delivery/orders/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-delivery-orders--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-delivery-orders--id-"
                    onclick="tryItOut('DELETEapi-delivery-orders--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-delivery-orders--id-"
                    onclick="cancelTryOut('DELETEapi-delivery-orders--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-delivery-orders--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/delivery/orders/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="DELETEapi-delivery-orders--id-"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-delivery-orders--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-delivery-orders--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-delivery-orders--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the order. Example: <code>1</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>deliveryOrder_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="deliveryOrder_id"                data-endpoint="DELETEapi-delivery-orders--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="delivery-order-POSTapi-delivery-orders--delivery_order--upload-pod">Upload a point of Delivery photo</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-delivery-orders--delivery_order--upload-pod">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/delivery/orders/1/upload-pod" \
    --header "Bearer: Token" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "pod_photo=@C:\Users\HP\AppData\Local\Temp\php93EE.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/delivery/orders/1/upload-pod"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('pod_photo', document.querySelector('input[name="pod_photo"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/delivery/orders/1/upload-pod';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'multipart/form-data',
            'Accept' =&gt; 'application/json',
        ],
        'multipart' =&gt; [
            [
                'name' =&gt; 'pod_photo',
                'contents' =&gt; fopen('C:\Users\HP\AppData\Local\Temp\php93EE.tmp', 'r')
            ],
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-delivery-orders--delivery_order--upload-pod">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Point Of Delivery photo uploaded successfully&quot;,
    &quot;photo_url&quot;: &quot;pod_photos/2akLAes8oj4j5OIxC71O5GxwEN8fSJ1jxtotKyxk.jpg&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-delivery-orders--delivery_order--upload-pod" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-delivery-orders--delivery_order--upload-pod"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-delivery-orders--delivery_order--upload-pod"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-delivery-orders--delivery_order--upload-pod" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-delivery-orders--delivery_order--upload-pod">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-delivery-orders--delivery_order--upload-pod" data-method="POST"
      data-path="api/delivery/orders/{delivery_order}/upload-pod"
      data-authed="1"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-delivery-orders--delivery_order--upload-pod', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-delivery-orders--delivery_order--upload-pod"
                    onclick="tryItOut('POSTapi-delivery-orders--delivery_order--upload-pod');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-delivery-orders--delivery_order--upload-pod"
                    onclick="cancelTryOut('POSTapi-delivery-orders--delivery_order--upload-pod');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-delivery-orders--delivery_order--upload-pod"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/delivery/orders/{delivery_order}/upload-pod</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="POSTapi-delivery-orders--delivery_order--upload-pod"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-delivery-orders--delivery_order--upload-pod"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-delivery-orders--delivery_order--upload-pod"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>delivery_order</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="delivery_order"                data-endpoint="POSTapi-delivery-orders--delivery_order--upload-pod"
               value="1"
               data-component="url">
    <br>
<p>Example: <code>1</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>delivery_order_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="delivery_order_id"                data-endpoint="POSTapi-delivery-orders--delivery_order--upload-pod"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>pod_photo</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="pod_photo"                data-endpoint="POSTapi-delivery-orders--delivery_order--upload-pod"
               value=""
               data-component="body">
    <br>
<p>Example: <code>C:\Users\HP\AppData\Local\Temp\php93EE.tmp</code></p>
        </div>
        </form>

                    <h2 id="delivery-order-POSTapi-delivery-orders--delivery_order--upload-signature">Upload Customer Delivery Signature</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-delivery-orders--delivery_order--upload-signature">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/delivery/orders/1/upload-signature" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"signature\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/delivery/orders/1/upload-signature"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "signature": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/delivery/orders/1/upload-signature';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'signature' =&gt; 'consequatur',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-delivery-orders--delivery_order--upload-signature">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
      &quot;message&quot;: &quot;Signature saved successfully&quot;,
  }</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-delivery-orders--delivery_order--upload-signature" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-delivery-orders--delivery_order--upload-signature"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-delivery-orders--delivery_order--upload-signature"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-delivery-orders--delivery_order--upload-signature" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-delivery-orders--delivery_order--upload-signature">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-delivery-orders--delivery_order--upload-signature" data-method="POST"
      data-path="api/delivery/orders/{delivery_order}/upload-signature"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-delivery-orders--delivery_order--upload-signature', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-delivery-orders--delivery_order--upload-signature"
                    onclick="tryItOut('POSTapi-delivery-orders--delivery_order--upload-signature');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-delivery-orders--delivery_order--upload-signature"
                    onclick="cancelTryOut('POSTapi-delivery-orders--delivery_order--upload-signature');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-delivery-orders--delivery_order--upload-signature"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/delivery/orders/{delivery_order}/upload-signature</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="POSTapi-delivery-orders--delivery_order--upload-signature"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-delivery-orders--delivery_order--upload-signature"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-delivery-orders--delivery_order--upload-signature"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>delivery_order</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="delivery_order"                data-endpoint="POSTapi-delivery-orders--delivery_order--upload-signature"
               value="1"
               data-component="url">
    <br>
<p>Example: <code>1</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>delivery_order_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="delivery_order_id"                data-endpoint="POSTapi-delivery-orders--delivery_order--upload-signature"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>signature</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="signature"                data-endpoint="POSTapi-delivery-orders--delivery_order--upload-signature"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="delivery-order-POSTapi-delivery-update-orders-status--delivery_order-">Update Delivery Order status</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-delivery-update-orders-status--delivery_order-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/delivery/update-orders-status/consequatur" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"status\": \"PENDING,ASSIGNED,OUT_FOR_DELIVERY,DELIVERED,FAILED\",
    \"rider_id\": 17,
    \"reason\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/delivery/update-orders-status/consequatur"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "status": "PENDING,ASSIGNED,OUT_FOR_DELIVERY,DELIVERED,FAILED",
    "rider_id": 17,
    "reason": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/delivery/update-orders-status/consequatur';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'status' =&gt; 'PENDING,ASSIGNED,OUT_FOR_DELIVERY,DELIVERED,FAILED',
            'rider_id' =&gt; 17,
            'reason' =&gt; 'consequatur',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-delivery-update-orders-status--delivery_order-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
      &quot;message&quot;: &quot;Rider assigned successfully&quot;,
  }</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-delivery-update-orders-status--delivery_order-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-delivery-update-orders-status--delivery_order-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-delivery-update-orders-status--delivery_order-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-delivery-update-orders-status--delivery_order-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-delivery-update-orders-status--delivery_order-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-delivery-update-orders-status--delivery_order-" data-method="POST"
      data-path="api/delivery/update-orders-status/{delivery_order}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-delivery-update-orders-status--delivery_order-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-delivery-update-orders-status--delivery_order-"
                    onclick="tryItOut('POSTapi-delivery-update-orders-status--delivery_order-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-delivery-update-orders-status--delivery_order-"
                    onclick="cancelTryOut('POSTapi-delivery-update-orders-status--delivery_order-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-delivery-update-orders-status--delivery_order-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/delivery/update-orders-status/{delivery_order}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="POSTapi-delivery-update-orders-status--delivery_order-"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-delivery-update-orders-status--delivery_order-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-delivery-update-orders-status--delivery_order-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>delivery_order</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="delivery_order"                data-endpoint="POSTapi-delivery-update-orders-status--delivery_order-"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>delivery_order_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="delivery_order_id"                data-endpoint="POSTapi-delivery-update-orders-status--delivery_order-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="POSTapi-delivery-update-orders-status--delivery_order-"
               value="PENDING,ASSIGNED,OUT_FOR_DELIVERY,DELIVERED,FAILED"
               data-component="body">
    <br>
<p>Example: <code>PENDING,ASSIGNED,OUT_FOR_DELIVERY,DELIVERED,FAILED</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>rider_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="rider_id"                data-endpoint="POSTapi-delivery-update-orders-status--delivery_order-"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>reason</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="reason"                data-endpoint="POSTapi-delivery-update-orders-status--delivery_order-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="delivery-order-GETapi-delivery-dashboard">Dashboard</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-delivery-dashboard">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/delivery/dashboard" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/delivery/dashboard"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/delivery/dashboard';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-delivery-dashboard">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;total&quot;: 1,
    &quot;pending&quot;: 1,
    &quot;assigned&quot;: 0,
    &quot;out&quot;: 0,
    &quot;delivered&quot;: 0,
    &quot;failed&quot;: 0,
    &quot;today_deliveries&quot;: []
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-delivery-dashboard" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-delivery-dashboard"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-delivery-dashboard"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-delivery-dashboard" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-delivery-dashboard">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-delivery-dashboard" data-method="GET"
      data-path="api/delivery/dashboard"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-delivery-dashboard', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-delivery-dashboard"
                    onclick="tryItOut('GETapi-delivery-dashboard');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-delivery-dashboard"
                    onclick="cancelTryOut('GETapi-delivery-dashboard');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-delivery-dashboard"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/delivery/dashboard</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="GETapi-delivery-dashboard"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-delivery-dashboard"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-delivery-dashboard"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="delivery-order-GETapi-delivery-riders">Riders</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-delivery-riders">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/delivery/riders" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/delivery/riders"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/delivery/riders';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-delivery-riders">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Riders&quot;,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;full_name&quot;: &quot;Thembo Charles&quot;,
            &quot;phone&quot;: &quot;0787444081&quot;,
            &quot;email&quot;: &quot;ashley7520charles@gmail.com&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-delivery-riders" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-delivery-riders"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-delivery-riders"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-delivery-riders" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-delivery-riders">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-delivery-riders" data-method="GET"
      data-path="api/delivery/riders"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-delivery-riders', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-delivery-riders"
                    onclick="tryItOut('GETapi-delivery-riders');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-delivery-riders"
                    onclick="cancelTryOut('GETapi-delivery-riders');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-delivery-riders"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/delivery/riders</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="GETapi-delivery-riders"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-delivery-riders"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-delivery-riders"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                <h1 id="assistedshopping">AssistedShopping</h1>

    

                                <h2 id="assistedshopping-GETapi-assisted_shopping">Assisted shopping lists</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-assisted_shopping">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/assisted_shopping" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/assisted_shopping"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/assisted_shopping';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-assisted_shopping">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
  &quot;message&quot;: &quot;Assisted Shoppings&quot;,
  &quot;data&quot;: {
      &quot;current_page&quot;: 1,
      &quot;data&quot;: [
          {
              &quot;id&quot;: 3,
              &quot;created_at&quot;: &quot;2025-12-19T14:05:32.000000Z&quot;,
              &quot;updated_at&quot;: &quot;2025-12-19T14:05:32.000000Z&quot;,
              &quot;deleted_at&quot;: null,
              &quot;name&quot;: &quot;iPhones 16&quot;,
              &quot;url&quot;: &quot;https://www.jumia.ug/mlp-oraimo-store/&quot;,
              &quot;quantity&quot;: 1,
              &quot;status&quot;: &quot;requested&quot;,
              &quot;notes&quot;: &quot;All packages are in good condition&quot;,
              &quot;user_id&quot;: 1,
              &quot;user&quot;: {
                  &quot;id&quot;: 1,
                  &quot;full_name&quot;: &quot;Samson Tusiime&quot;,
                  &quot;email&quot;: &quot;tusiimesam@gmail.com&quot;,
                  &quot;phone&quot;: &quot;+256775926572&quot;,
                  &quot;tin&quot;: null,
                  &quot;passport&quot;: null,
                  &quot;address&quot;: &quot;Kampala&quot;,
                  &quot;status&quot;: &quot;active&quot;,
                  &quot;user_type&quot;: &quot;super_user&quot;,
                  &quot;created_at&quot;: &quot;2025-12-10T08:58:27.000000Z&quot;,
                  &quot;updated_at&quot;: &quot;2025-12-10T08:58:27.000000Z&quot;,
                  &quot;deleted_at&quot;: null
              }
          },

      ],
      &quot;first_page_url&quot;: &quot;http://127.0.0.1:8000/api/assisted_shopping?page=1&quot;,
      &quot;from&quot;: 1,
      &quot;last_page&quot;: 1,
      &quot;last_page_url&quot;: &quot;http://127.0.0.1:8000/api/assisted_shopping?page=1&quot;,
      &quot;links&quot;: [
          {
              &quot;url&quot;: null,
              &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
              &quot;active&quot;: false
          },
          {
              &quot;url&quot;: &quot;http://127.0.0.1:8000/api/assisted_shopping?page=1&quot;,
              &quot;label&quot;: &quot;1&quot;,
              &quot;active&quot;: true
          },
          {
              &quot;url&quot;: null,
              &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
              &quot;active&quot;: false
          }
      ],
      &quot;next_page_url&quot;: null,
      &quot;path&quot;: &quot;http://127.0.0.1:8000/api/assisted_shopping&quot;,
      &quot;per_page&quot;: 20,
      &quot;prev_page_url&quot;: null,
      &quot;to&quot;: 4,
      &quot;total&quot;: 4
  }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-assisted_shopping" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-assisted_shopping"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-assisted_shopping"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-assisted_shopping" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-assisted_shopping">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-assisted_shopping" data-method="GET"
      data-path="api/assisted_shopping"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-assisted_shopping', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-assisted_shopping"
                    onclick="tryItOut('GETapi-assisted_shopping');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-assisted_shopping"
                    onclick="cancelTryOut('GETapi-assisted_shopping');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-assisted_shopping"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/assisted_shopping</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="GETapi-assisted_shopping"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-assisted_shopping"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-assisted_shopping"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="assistedshopping-POSTapi-assisted_shopping">Add Assisted shopping</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-assisted_shopping">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/assisted_shopping" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"consequatur\",
    \"url\": \"http:\\/\\/kunze.biz\\/iste-laborum-eius-est-dolor.html\",
    \"quantity\": 17,
    \"status\": \"example value\",
    \"notes\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/assisted_shopping"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "consequatur",
    "url": "http:\/\/kunze.biz\/iste-laborum-eius-est-dolor.html",
    "quantity": 17,
    "status": "example value",
    "notes": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/assisted_shopping';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'consequatur',
            'url' =&gt; 'http://kunze.biz/iste-laborum-eius-est-dolor.html',
            'quantity' =&gt; 17,
            'status' =&gt; 'example value',
            'notes' =&gt; 'consequatur',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-assisted_shopping">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Assisted Shopping item added to successfully&quot;,
    &quot;data&quot;: {
        &quot;name&quot;: &quot;Phones&quot;,
        &quot;url&quot;: &quot;https://www.jumia.ug/mlp-oraimo-store/&quot;,
        &quot;notes&quot;: &quot;All packages are in good condition&quot;,
        &quot;user_id&quot;: 1,
        &quot;updated_at&quot;: &quot;2025-12-19T13:58:47.000000Z&quot;,
        &quot;created_at&quot;: &quot;2025-12-19T13:58:47.000000Z&quot;,
        &quot;id&quot;: 1
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-assisted_shopping" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-assisted_shopping"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-assisted_shopping"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-assisted_shopping" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-assisted_shopping">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-assisted_shopping" data-method="POST"
      data-path="api/assisted_shopping"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-assisted_shopping', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-assisted_shopping"
                    onclick="tryItOut('POSTapi-assisted_shopping');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-assisted_shopping"
                    onclick="cancelTryOut('POSTapi-assisted_shopping');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-assisted_shopping"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/assisted_shopping</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="POSTapi-assisted_shopping"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-assisted_shopping"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-assisted_shopping"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-assisted_shopping"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>url</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="url"                data-endpoint="POSTapi-assisted_shopping"
               value="http://kunze.biz/iste-laborum-eius-est-dolor.html"
               data-component="body">
    <br>
<p>Example: <code>http://kunze.biz/iste-laborum-eius-est-dolor.html</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>quantity</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="quantity"                data-endpoint="POSTapi-assisted_shopping"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="POSTapi-assisted_shopping"
               value="example value"
               data-component="body">
    <br>
<p>Request parameter: status. Example: <code>example value</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>requested</code></li> <li><code>quoted</code></li> <li><code>paid</code></li> <li><code>declined</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>notes</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="notes"                data-endpoint="POSTapi-assisted_shopping"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="assistedshopping-GETapi-assisted_shopping--id-">Assisted shopping</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-assisted_shopping--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/assisted_shopping/17" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/assisted_shopping/17"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/assisted_shopping/17';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-assisted_shopping--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-assisted_shopping--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-assisted_shopping--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-assisted_shopping--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-assisted_shopping--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-assisted_shopping--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-assisted_shopping--id-" data-method="GET"
      data-path="api/assisted_shopping/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-assisted_shopping--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-assisted_shopping--id-"
                    onclick="tryItOut('GETapi-assisted_shopping--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-assisted_shopping--id-"
                    onclick="cancelTryOut('GETapi-assisted_shopping--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-assisted_shopping--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/assisted_shopping/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="GETapi-assisted_shopping--id-"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-assisted_shopping--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-assisted_shopping--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-assisted_shopping--id-"
               value="17"
               data-component="url">
    <br>
<p>The ID of the assisted shopping. Example: <code>17</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>assistedShopping_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="assistedShopping_id"                data-endpoint="GETapi-assisted_shopping--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="assistedshopping-PUTapi-assisted_shopping--id-">Updated Assisted shopping</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-assisted_shopping--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/assisted_shopping/17" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"consequatur\",
    \"url\": \"http:\\/\\/kunze.biz\\/iste-laborum-eius-est-dolor.html\",
    \"quantity\": 17,
    \"status\": \"[\'requested\',\'quoted\',\'paid\',\'declined\']\",
    \"notes\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/assisted_shopping/17"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "consequatur",
    "url": "http:\/\/kunze.biz\/iste-laborum-eius-est-dolor.html",
    "quantity": 17,
    "status": "['requested','quoted','paid','declined']",
    "notes": "consequatur"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/assisted_shopping/17';
$response = $client-&gt;put(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'consequatur',
            'url' =&gt; 'http://kunze.biz/iste-laborum-eius-est-dolor.html',
            'quantity' =&gt; 17,
            'status' =&gt; '[\'requested\',\'quoted\',\'paid\',\'declined\']',
            'notes' =&gt; 'consequatur',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-assisted_shopping--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Assisted Shopping item added to successfully&quot;,
    &quot;data&quot;: {
        &quot;name&quot;: &quot;Phones&quot;,
        &quot;url&quot;: &quot;https://www.jumia.ug/mlp-oraimo-store/&quot;,
        &quot;notes&quot;: &quot;All packages are in good condition&quot;,
        &quot;user_id&quot;: 1,
        &quot;updated_at&quot;: &quot;2025-12-19T13:58:47.000000Z&quot;,
        &quot;created_at&quot;: &quot;2025-12-19T13:58:47.000000Z&quot;,
        &quot;id&quot;: 1
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-assisted_shopping--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-assisted_shopping--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-assisted_shopping--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-assisted_shopping--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-assisted_shopping--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-assisted_shopping--id-" data-method="PUT"
      data-path="api/assisted_shopping/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-assisted_shopping--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-assisted_shopping--id-"
                    onclick="tryItOut('PUTapi-assisted_shopping--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-assisted_shopping--id-"
                    onclick="cancelTryOut('PUTapi-assisted_shopping--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-assisted_shopping--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/assisted_shopping/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/assisted_shopping/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="PUTapi-assisted_shopping--id-"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-assisted_shopping--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-assisted_shopping--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-assisted_shopping--id-"
               value="17"
               data-component="url">
    <br>
<p>The ID of the assisted shopping. Example: <code>17</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>assistedShopping_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="assistedShopping_id"                data-endpoint="PUTapi-assisted_shopping--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-assisted_shopping--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>url</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="url"                data-endpoint="PUTapi-assisted_shopping--id-"
               value="http://kunze.biz/iste-laborum-eius-est-dolor.html"
               data-component="body">
    <br>
<p>Example: <code>http://kunze.biz/iste-laborum-eius-est-dolor.html</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>quantity</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="quantity"                data-endpoint="PUTapi-assisted_shopping--id-"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PUTapi-assisted_shopping--id-"
               value="['requested','quoted','paid','declined']"
               data-component="body">
    <br>
<p>Example: <code>['requested','quoted','paid','declined']</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>notes</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="notes"                data-endpoint="PUTapi-assisted_shopping--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="assistedshopping-DELETEapi-assisted_shopping--id-">Updated Assisted shopping</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-assisted_shopping--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/assisted_shopping/17" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/assisted_shopping/17"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/assisted_shopping/17';
$response = $client-&gt;delete(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-assisted_shopping--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
      &quot;message&quot;: &quot;Assisted Shopping item deleted to successfully&quot;,

  }</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-assisted_shopping--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-assisted_shopping--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-assisted_shopping--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-assisted_shopping--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-assisted_shopping--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-assisted_shopping--id-" data-method="DELETE"
      data-path="api/assisted_shopping/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-assisted_shopping--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-assisted_shopping--id-"
                    onclick="tryItOut('DELETEapi-assisted_shopping--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-assisted_shopping--id-"
                    onclick="cancelTryOut('DELETEapi-assisted_shopping--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-assisted_shopping--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/assisted_shopping/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="DELETEapi-assisted_shopping--id-"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-assisted_shopping--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-assisted_shopping--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-assisted_shopping--id-"
               value="17"
               data-component="url">
    <br>
<p>The ID of the assisted shopping. Example: <code>17</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>assistedShopping_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="assistedShopping_id"                data-endpoint="DELETEapi-assisted_shopping--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="assistedshopping-POSTapi-assisted_shopping_quote">Add Assistedshopping Quote Item</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-assisted_shopping_quote">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/assisted_shopping_quote" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"item_name\": \"consequatur\",
    \"quantity\": 17,
    \"unit_price\": 11613.31890586,
    \"assisted_shopping_id\": 17
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/assisted_shopping_quote"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "item_name": "consequatur",
    "quantity": 17,
    "unit_price": 11613.31890586,
    "assisted_shopping_id": 17
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/assisted_shopping_quote';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'item_name' =&gt; 'consequatur',
            'quantity' =&gt; 17,
            'unit_price' =&gt; 11613.31890586,
            'assisted_shopping_id' =&gt; 17,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-assisted_shopping_quote">
</span>
<span id="execution-results-POSTapi-assisted_shopping_quote" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-assisted_shopping_quote"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-assisted_shopping_quote"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-assisted_shopping_quote" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-assisted_shopping_quote">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-assisted_shopping_quote" data-method="POST"
      data-path="api/assisted_shopping_quote"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-assisted_shopping_quote', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-assisted_shopping_quote"
                    onclick="tryItOut('POSTapi-assisted_shopping_quote');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-assisted_shopping_quote"
                    onclick="cancelTryOut('POSTapi-assisted_shopping_quote');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-assisted_shopping_quote"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/assisted_shopping_quote</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="POSTapi-assisted_shopping_quote"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-assisted_shopping_quote"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-assisted_shopping_quote"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>item_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="item_name"                data-endpoint="POSTapi-assisted_shopping_quote"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>quantity</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="quantity"                data-endpoint="POSTapi-assisted_shopping_quote"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>unit_price</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="unit_price"                data-endpoint="POSTapi-assisted_shopping_quote"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>assisted_shopping_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="assisted_shopping_id"                data-endpoint="POSTapi-assisted_shopping_quote"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
        </div>
        </form>

                    <h2 id="assistedshopping-PUTapi-assisted_shopping_quote--id-">Update Assisted shopping Quote</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-assisted_shopping_quote--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/assisted_shopping_quote/17" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"item_name\": \"consequatur\",
    \"quantity\": 17,
    \"unit_price\": 11613.31890586,
    \"assisted_shopping_id\": 17
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/assisted_shopping_quote/17"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "item_name": "consequatur",
    "quantity": 17,
    "unit_price": 11613.31890586,
    "assisted_shopping_id": 17
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/assisted_shopping_quote/17';
$response = $client-&gt;put(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'item_name' =&gt; 'consequatur',
            'quantity' =&gt; 17,
            'unit_price' =&gt; 11613.31890586,
            'assisted_shopping_id' =&gt; 17,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-assisted_shopping_quote--id-">
</span>
<span id="execution-results-PUTapi-assisted_shopping_quote--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-assisted_shopping_quote--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-assisted_shopping_quote--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-assisted_shopping_quote--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-assisted_shopping_quote--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-assisted_shopping_quote--id-" data-method="PUT"
      data-path="api/assisted_shopping_quote/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-assisted_shopping_quote--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-assisted_shopping_quote--id-"
                    onclick="tryItOut('PUTapi-assisted_shopping_quote--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-assisted_shopping_quote--id-"
                    onclick="cancelTryOut('PUTapi-assisted_shopping_quote--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-assisted_shopping_quote--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/assisted_shopping_quote/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/assisted_shopping_quote/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="PUTapi-assisted_shopping_quote--id-"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-assisted_shopping_quote--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-assisted_shopping_quote--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-assisted_shopping_quote--id-"
               value="17"
               data-component="url">
    <br>
<p>The ID of the assisted shopping quote. Example: <code>17</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>assistedShoppingQuote_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="assistedShoppingQuote_id"                data-endpoint="PUTapi-assisted_shopping_quote--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>item_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="item_name"                data-endpoint="PUTapi-assisted_shopping_quote--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>quantity</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="quantity"                data-endpoint="PUTapi-assisted_shopping_quote--id-"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>unit_price</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="unit_price"                data-endpoint="PUTapi-assisted_shopping_quote--id-"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>assisted_shopping_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="assisted_shopping_id"                data-endpoint="PUTapi-assisted_shopping_quote--id-"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
        </div>
        </form>

                    <h2 id="assistedshopping-DELETEapi-assisted_shopping_quote--id-">Delete Assisted shopping Quote item</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-assisted_shopping_quote--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/assisted_shopping_quote/17" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/assisted_shopping_quote/17"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/assisted_shopping_quote/17';
$response = $client-&gt;delete(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-assisted_shopping_quote--id-">
</span>
<span id="execution-results-DELETEapi-assisted_shopping_quote--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-assisted_shopping_quote--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-assisted_shopping_quote--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-assisted_shopping_quote--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-assisted_shopping_quote--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-assisted_shopping_quote--id-" data-method="DELETE"
      data-path="api/assisted_shopping_quote/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-assisted_shopping_quote--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-assisted_shopping_quote--id-"
                    onclick="tryItOut('DELETEapi-assisted_shopping_quote--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-assisted_shopping_quote--id-"
                    onclick="cancelTryOut('DELETEapi-assisted_shopping_quote--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-assisted_shopping_quote--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/assisted_shopping_quote/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="DELETEapi-assisted_shopping_quote--id-"
               value="Token"
               data-component="header">
    <br>
<p>Example: <code>Token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-assisted_shopping_quote--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-assisted_shopping_quote--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-assisted_shopping_quote--id-"
               value="17"
               data-component="url">
    <br>
<p>The ID of the assisted shopping quote. Example: <code>17</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>assistedShoppingQuote_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="assistedShoppingQuote_id"                data-endpoint="DELETEapi-assisted_shopping_quote--id-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                <h1 id="others">Others</h1>

    

                                <h2 id="others-GETapi-settings-locations--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-settings-locations--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/settings/locations/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/settings/locations/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/settings/locations/consequatur';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-settings-locations--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-settings-locations--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-settings-locations--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-settings-locations--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-settings-locations--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-settings-locations--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-settings-locations--id-" data-method="GET"
      data-path="api/settings/locations/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-settings-locations--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-settings-locations--id-"
                    onclick="tryItOut('GETapi-settings-locations--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-settings-locations--id-"
                    onclick="cancelTryOut('GETapi-settings-locations--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-settings-locations--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/settings/locations/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-settings-locations--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-settings-locations--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-settings-locations--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the location. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="others-GETapi-settings-warehouse_racks">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-settings-warehouse_racks">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/settings/warehouse_racks" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/settings/warehouse_racks"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/settings/warehouse_racks';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-settings-warehouse_racks">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-settings-warehouse_racks" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-settings-warehouse_racks"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-settings-warehouse_racks"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-settings-warehouse_racks" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-settings-warehouse_racks">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-settings-warehouse_racks" data-method="GET"
      data-path="api/settings/warehouse_racks"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-settings-warehouse_racks', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-settings-warehouse_racks"
                    onclick="tryItOut('GETapi-settings-warehouse_racks');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-settings-warehouse_racks"
                    onclick="cancelTryOut('GETapi-settings-warehouse_racks');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-settings-warehouse_racks"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/settings/warehouse_racks</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-settings-warehouse_racks"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-settings-warehouse_racks"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="others-GETapi-settings-warehouse_racks--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-settings-warehouse_racks--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/settings/warehouse_racks/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/settings/warehouse_racks/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/settings/warehouse_racks/1';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-settings-warehouse_racks--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-settings-warehouse_racks--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-settings-warehouse_racks--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-settings-warehouse_racks--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-settings-warehouse_racks--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-settings-warehouse_racks--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-settings-warehouse_racks--id-" data-method="GET"
      data-path="api/settings/warehouse_racks/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-settings-warehouse_racks--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-settings-warehouse_racks--id-"
                    onclick="tryItOut('GETapi-settings-warehouse_racks--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-settings-warehouse_racks--id-"
                    onclick="cancelTryOut('GETapi-settings-warehouse_racks--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-settings-warehouse_racks--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/settings/warehouse_racks/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-settings-warehouse_racks--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-settings-warehouse_racks--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-settings-warehouse_racks--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the warehouse rack. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="others-GETapi-billing-invoice-line-items">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-billing-invoice-line-items">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/billing/invoice-line-items" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/billing/invoice-line-items"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/billing/invoice-line-items';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-billing-invoice-line-items">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-billing-invoice-line-items" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-billing-invoice-line-items"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-billing-invoice-line-items"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-billing-invoice-line-items" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-billing-invoice-line-items">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-billing-invoice-line-items" data-method="GET"
      data-path="api/billing/invoice-line-items"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-billing-invoice-line-items', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-billing-invoice-line-items"
                    onclick="tryItOut('GETapi-billing-invoice-line-items');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-billing-invoice-line-items"
                    onclick="cancelTryOut('GETapi-billing-invoice-line-items');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-billing-invoice-line-items"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/billing/invoice-line-items</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-billing-invoice-line-items"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-billing-invoice-line-items"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="others-GETapi-billing-invoice-line-items--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-billing-invoice-line-items--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/billing/invoice-line-items/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/billing/invoice-line-items/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/billing/invoice-line-items/17';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-billing-invoice-line-items--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-billing-invoice-line-items--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-billing-invoice-line-items--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-billing-invoice-line-items--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-billing-invoice-line-items--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-billing-invoice-line-items--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-billing-invoice-line-items--id-" data-method="GET"
      data-path="api/billing/invoice-line-items/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-billing-invoice-line-items--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-billing-invoice-line-items--id-"
                    onclick="tryItOut('GETapi-billing-invoice-line-items--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-billing-invoice-line-items--id-"
                    onclick="cancelTryOut('GETapi-billing-invoice-line-items--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-billing-invoice-line-items--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/billing/invoice-line-items/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-billing-invoice-line-items--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-billing-invoice-line-items--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-billing-invoice-line-items--id-"
               value="17"
               data-component="url">
    <br>
<p>The ID of the invoice line item. Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="others-GETapi-assisted_shopping_quote">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-assisted_shopping_quote">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/assisted_shopping_quote" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/assisted_shopping_quote"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/assisted_shopping_quote';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-assisted_shopping_quote">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-assisted_shopping_quote" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-assisted_shopping_quote"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-assisted_shopping_quote"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-assisted_shopping_quote" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-assisted_shopping_quote">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-assisted_shopping_quote" data-method="GET"
      data-path="api/assisted_shopping_quote"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-assisted_shopping_quote', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-assisted_shopping_quote"
                    onclick="tryItOut('GETapi-assisted_shopping_quote');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-assisted_shopping_quote"
                    onclick="cancelTryOut('GETapi-assisted_shopping_quote');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-assisted_shopping_quote"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/assisted_shopping_quote</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-assisted_shopping_quote"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-assisted_shopping_quote"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="others-GETapi-assisted_shopping_quote--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-assisted_shopping_quote--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/assisted_shopping_quote/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/assisted_shopping_quote/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/assisted_shopping_quote/17';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-assisted_shopping_quote--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-assisted_shopping_quote--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-assisted_shopping_quote--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-assisted_shopping_quote--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-assisted_shopping_quote--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-assisted_shopping_quote--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-assisted_shopping_quote--id-" data-method="GET"
      data-path="api/assisted_shopping_quote/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-assisted_shopping_quote--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-assisted_shopping_quote--id-"
                    onclick="tryItOut('GETapi-assisted_shopping_quote--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-assisted_shopping_quote--id-"
                    onclick="cancelTryOut('GETapi-assisted_shopping_quote--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-assisted_shopping_quote--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/assisted_shopping_quote/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-assisted_shopping_quote--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-assisted_shopping_quote--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-assisted_shopping_quote--id-"
               value="17"
               data-component="url">
    <br>
<p>The ID of the assisted shopping quote. Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="others-GETapi-activity_logs">GET api/activity_logs</h2>

<p>
</p>



<span id="example-requests-GETapi-activity_logs">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/activity_logs" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/activity_logs"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/activity_logs';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-activity_logs">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-activity_logs" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-activity_logs"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-activity_logs"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-activity_logs" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-activity_logs">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-activity_logs" data-method="GET"
      data-path="api/activity_logs"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-activity_logs', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-activity_logs"
                    onclick="tryItOut('GETapi-activity_logs');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-activity_logs"
                    onclick="cancelTryOut('GETapi-activity_logs');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-activity_logs"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/activity_logs</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-activity_logs"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-activity_logs"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                                                        <button type="button" class="lang-button" data-language-name="php">php</button>
                            </div>
            </div>
</div>
</body>
</html>
