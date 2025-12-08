<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel API Documentation</title>

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
                                                                                <li class="tocify-item level-2" data-unique="package-PUTapi-packages--id-">
                                <a href="#package-PUTapi-packages--id-">Update order Package</a>
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
                    <ul id="tocify-header-others" class="tocify-header">
                <li class="tocify-item level-1" data-unique="others">
                    <a href="#others">Others</a>
                </li>
                                    <ul id="tocify-subheader-others" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="others-GETapi-settings-locations--id-">
                                <a href="#others-GETapi-settings-locations--id-">Display the specified resource.</a>
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
        <li>Last updated: December 8, 2025</li>
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
    \"phone\": \"consequatur\",
    \"full_name\": \"consequatur\",
    \"tin\": \"consequatur\",
    \"passport\": \"consequatur\",
    \"address\": \"consequatur\"
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
    "phone": "consequatur",
    "full_name": "consequatur",
    "tin": "consequatur",
    "passport": "consequatur",
    "address": "consequatur"
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
            'phone' =&gt; 'consequatur',
            'full_name' =&gt; 'consequatur',
            'tin' =&gt; 'consequatur',
            'passport' =&gt; 'consequatur',
            'address' =&gt; 'consequatur',
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
      }
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
            &quot;code&quot;: &quot;A-01-B-03&quot;,
            &quot;zone&quot;: &quot;A&quot;,
            &quot;rack&quot;: &quot;01&quot;,
            &quot;bay&quot;: &quot;B&quot;,
            &quot;shelf&quot;: &quot;03&quot;,
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
    \"zone\": \"consequatur\",
    \"rack\": \"consequatur\",
    \"bay\": \"consequatur\",
    \"shelf\": \"consequatur\"
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
    "zone": "consequatur",
    "rack": "consequatur",
    "bay": "consequatur",
    "shelf": "consequatur"
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
            'zone' =&gt; 'consequatur',
            'rack' =&gt; 'consequatur',
            'bay' =&gt; 'consequatur',
            'shelf' =&gt; 'consequatur',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-settings-locations">
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
            <b style="line-height: 2;"><code>zone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="zone"                data-endpoint="POSTapi-settings-locations"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>rack</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rack"                data-endpoint="POSTapi-settings-locations"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>bay</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="bay"                data-endpoint="POSTapi-settings-locations"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>shelf</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="shelf"                data-endpoint="POSTapi-settings-locations"
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
    \"zone\": \"consequatur\",
    \"rack\": \"consequatur\",
    \"bay\": \"consequatur\",
    \"shelf\": \"consequatur\"
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
    "zone": "consequatur",
    "rack": "consequatur",
    "bay": "consequatur",
    "shelf": "consequatur"
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
            'zone' =&gt; 'consequatur',
            'rack' =&gt; 'consequatur',
            'bay' =&gt; 'consequatur',
            'shelf' =&gt; 'consequatur',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-settings-locations--id-">
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
            <b style="line-height: 2;"><code>zone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="zone"                data-endpoint="PUTapi-settings-locations--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>rack</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rack"                data-endpoint="PUTapi-settings-locations--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>bay</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="bay"                data-endpoint="PUTapi-settings-locations--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>shelf</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="shelf"                data-endpoint="PUTapi-settings-locations--id-"
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
    --get "http://localhost/api/orders/2" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/orders/2"
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
$url = 'http://localhost/api/orders/2';
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
               value="2"
               data-component="url">
    <br>
<p>The ID of the order. Example: <code>2</code></p>
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
    "http://localhost/api/orders/2" \
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
    "http://localhost/api/orders/2"
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
$url = 'http://localhost/api/orders/2';
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
               value="2"
               data-component="url">
    <br>
<p>The ID of the order. Example: <code>2</code></p>
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
    "http://localhost/api/orders/2" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/orders/2"
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
$url = 'http://localhost/api/orders/2';
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
               value="2"
               data-component="url">
    <br>
<p>The ID of the order. Example: <code>2</code></p>
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
    \"user_id\": 17
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
    "user_id": 17
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
            'user_id' =&gt; 17,
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
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
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
    \"hwb_number\": \"consequatur\",
    \"contents\": \"consequatur\",
    \"declared_value\": 11613.31890586,
    \"weight\": 11613.31890586,
    \"length\": 11613.31890586,
    \"width\": 11613.31890586,
    \"height\": 11613.31890586,
    \"is_fragile\": false,
    \"is_hazardous\": false,
    \"is_damaged\": false,
    \"location_id\": \"consequatur\",
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
    "hwb_number": "consequatur",
    "contents": "consequatur",
    "declared_value": 11613.31890586,
    "weight": 11613.31890586,
    "length": 11613.31890586,
    "width": 11613.31890586,
    "height": 11613.31890586,
    "is_fragile": false,
    "is_hazardous": false,
    "is_damaged": false,
    "location_id": "consequatur",
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
            'hwb_number' =&gt; 'consequatur',
            'contents' =&gt; 'consequatur',
            'declared_value' =&gt; 11613.31890586,
            'weight' =&gt; 11613.31890586,
            'length' =&gt; 11613.31890586,
            'width' =&gt; 11613.31890586,
            'height' =&gt; 11613.31890586,
            'is_fragile' =&gt; false,
            'is_hazardous' =&gt; false,
            'is_damaged' =&gt; false,
            'location_id' =&gt; 'consequatur',
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
            <b style="line-height: 2;"><code>hwb_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="hwb_number"                data-endpoint="POSTapi-packages"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
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

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>location_id</code></b>&nbsp;&nbsp;
<small>required</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="location_id"                data-endpoint="POSTapi-packages"
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

                    <h2 id="package-PUTapi-packages--id-">Update order Package</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-packages--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/packages/consequatur" \
    --header "Bearer: Token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"hwb_number\": \"consequatur\",
    \"contents\": \"consequatur\",
    \"declared_value\": 11613.31890586,
    \"weight\": 11613.31890586,
    \"length\": 11613.31890586,
    \"width\": 11613.31890586,
    \"height\": 11613.31890586,
    \"is_fragile\": false,
    \"is_hazardous\": false,
    \"is_damaged\": false,
    \"location_id\": \"consequatur\",
    \"received_at\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/packages/consequatur"
);

const headers = {
    "Bearer": "Token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "hwb_number": "consequatur",
    "contents": "consequatur",
    "declared_value": 11613.31890586,
    "weight": 11613.31890586,
    "length": 11613.31890586,
    "width": 11613.31890586,
    "height": 11613.31890586,
    "is_fragile": false,
    "is_hazardous": false,
    "is_damaged": false,
    "location_id": "consequatur",
    "received_at": "consequatur"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://localhost/api/packages/consequatur';
$response = $client-&gt;put(
    $url,
    [
        'headers' =&gt; [
            'Bearer' =&gt; 'Token',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'hwb_number' =&gt; 'consequatur',
            'contents' =&gt; 'consequatur',
            'declared_value' =&gt; 11613.31890586,
            'weight' =&gt; 11613.31890586,
            'length' =&gt; 11613.31890586,
            'width' =&gt; 11613.31890586,
            'height' =&gt; 11613.31890586,
            'is_fragile' =&gt; false,
            'is_hazardous' =&gt; false,
            'is_damaged' =&gt; false,
            'location_id' =&gt; 'consequatur',
            'received_at' =&gt; 'consequatur',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-packages--id-">
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
<span id="execution-results-PUTapi-packages--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-packages--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-packages--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-packages--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-packages--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-packages--id-" data-method="PUT"
      data-path="api/packages/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-packages--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-packages--id-"
                    onclick="tryItOut('PUTapi-packages--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-packages--id-"
                    onclick="cancelTryOut('PUTapi-packages--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-packages--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/packages/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Bearer"                data-endpoint="PUTapi-packages--id-"
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
                              name="Content-Type"                data-endpoint="PUTapi-packages--id-"
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
                              name="Accept"                data-endpoint="PUTapi-packages--id-"
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
                              name="id"                data-endpoint="PUTapi-packages--id-"
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
               step="any"               name="package_id"                data-endpoint="PUTapi-packages--id-"
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
                              name="order_id"                data-endpoint="PUTapi-packages--id-"
               value=""
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the orders table.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>hwb_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="hwb_number"                data-endpoint="PUTapi-packages--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>contents</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="contents"                data-endpoint="PUTapi-packages--id-"
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
               step="any"               name="declared_value"                data-endpoint="PUTapi-packages--id-"
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
               step="any"               name="weight"                data-endpoint="PUTapi-packages--id-"
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
               step="any"               name="length"                data-endpoint="PUTapi-packages--id-"
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
               step="any"               name="width"                data-endpoint="PUTapi-packages--id-"
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
               step="any"               name="height"                data-endpoint="PUTapi-packages--id-"
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
                <label data-endpoint="PUTapi-packages--id-" style="display: none">
            <input type="radio" name="is_fragile"
                   value="true"
                   data-endpoint="PUTapi-packages--id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-packages--id-" style="display: none">
            <input type="radio" name="is_fragile"
                   value="false"
                   data-endpoint="PUTapi-packages--id-"
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
                <label data-endpoint="PUTapi-packages--id-" style="display: none">
            <input type="radio" name="is_hazardous"
                   value="true"
                   data-endpoint="PUTapi-packages--id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-packages--id-" style="display: none">
            <input type="radio" name="is_hazardous"
                   value="false"
                   data-endpoint="PUTapi-packages--id-"
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
                <label data-endpoint="PUTapi-packages--id-" style="display: none">
            <input type="radio" name="is_damaged"
                   value="true"
                   data-endpoint="PUTapi-packages--id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-packages--id-" style="display: none">
            <input type="radio" name="is_damaged"
                   value="false"
                   data-endpoint="PUTapi-packages--id-"
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
                              name="package_photos"                data-endpoint="PUTapi-packages--id-"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>location_id</code></b>&nbsp;&nbsp;
<small>required</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="location_id"                data-endpoint="PUTapi-packages--id-"
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
                              name="received_at"                data-endpoint="PUTapi-packages--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
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
    --form "photos[]=@C:\Users\HP\AppData\Local\Temp\phpD984.tmp" \
    --form "photos[]=@C:\Users\HP\AppData\Local\Temp\phpDA50.tmp" </code></pre></div>


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
                'contents' =&gt; fopen('C:\Users\HP\AppData\Local\Temp\phpD984.tmp', 'r')
            ],
            [
                'name' =&gt; 'photos[]',
                'contents' =&gt; fopen('C:\Users\HP\AppData\Local\Temp\phpDA50.tmp', 'r')
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
<p>Example: <code>C:\Users\HP\AppData\Local\Temp\phpDA50.tmp</code></p>
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
    \"status\": \"ARRIVED\",
    \"package_count\": 56,
    \"total_weight\": 16,
    \"finalized_at\": \"2025-12-08T09:21:09\",
    \"departed_at\": \"2025-12-08T09:21:09\",
    \"arrived_at\": \"2025-12-08T09:21:09\"
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
    "status": "ARRIVED",
    "package_count": 56,
    "total_weight": 16,
    "finalized_at": "2025-12-08T09:21:09",
    "departed_at": "2025-12-08T09:21:09",
    "arrived_at": "2025-12-08T09:21:09"
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
            'status' =&gt; 'ARRIVED',
            'package_count' =&gt; 56,
            'total_weight' =&gt; 16,
            'finalized_at' =&gt; '2025-12-08T09:21:09',
            'departed_at' =&gt; '2025-12-08T09:21:09',
            'arrived_at' =&gt; '2025-12-08T09:21:09',
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
               value="ARRIVED"
               data-component="body">
    <br>
<p>Example: <code>ARRIVED</code></p>
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
               value="56"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>56</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>total_weight</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="total_weight"                data-endpoint="POSTapi-consolidation-batches"
               value="16"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>created_by</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="created_by"                data-endpoint="POSTapi-consolidation-batches"
               value=""
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the users table.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>finalized_at</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="finalized_at"                data-endpoint="POSTapi-consolidation-batches"
               value="2025-12-08T09:21:09"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2025-12-08T09:21:09</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>departed_at</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="departed_at"                data-endpoint="POSTapi-consolidation-batches"
               value="2025-12-08T09:21:09"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2025-12-08T09:21:09</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>arrived_at</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="arrived_at"                data-endpoint="POSTapi-consolidation-batches"
               value="2025-12-08T09:21:09"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2025-12-08T09:21:09</code></p>
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
    \"package_count\": 56,
    \"total_weight\": 16,
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
    "package_count": 56,
    "total_weight": 16,
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
            'package_count' =&gt; 56,
            'total_weight' =&gt; 16,
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
               value="56"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>56</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>total_weight</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="total_weight"                data-endpoint="PUTapi-consolidation-batches--id-"
               value="16"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>created_by</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="created_by"                data-endpoint="PUTapi-consolidation-batches--id-"
               value=""
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the users table.</p>
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

                <h1 id="others">Others</h1>

    

                                <h2 id="others-GETapi-settings-locations--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-settings-locations--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/settings/locations/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/settings/locations/1"
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
$url = 'http://localhost/api/settings/locations/1';
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
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-settings-locations--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the location. Example: <code>1</code></p>
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
