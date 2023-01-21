<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel Documentation</title>

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
            </style>

    <script>
        var baseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.12.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.12.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

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
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-user">
                                <a href="#endpoints-GETapi-user">GET api/user</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-gallery-management" class="tocify-header">
                <li class="tocify-item level-1" data-unique="gallery-management">
                    <a href="#gallery-management">Gallery Management</a>
                </li>
                                    <ul id="tocify-subheader-gallery-management" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="gallery-management-GETapi-gallery">
                                <a href="#gallery-management-GETapi-gallery">GET api/gallery</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-hotel-management" class="tocify-header">
                <li class="tocify-item level-1" data-unique="hotel-management">
                    <a href="#hotel-management">Hotel Management</a>
                </li>
                                    <ul id="tocify-subheader-hotel-management" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="hotel-management-GETapi-hotel">
                                <a href="#hotel-management-GETapi-hotel">GET api/hotel</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="hotel-management-GETapi-hotel--id-">
                                <a href="#hotel-management-GETapi-hotel--id-">GET api/hotel/{id}</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-roomtype-management" class="tocify-header">
                <li class="tocify-item level-1" data-unique="roomtype-management">
                    <a href="#roomtype-management">Roomtype Management</a>
                </li>
                                    <ul id="tocify-subheader-roomtype-management" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="roomtype-management-GETapi-roomtype">
                                <a href="#roomtype-management-GETapi-roomtype">GET api/roomtype</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-user-management" class="tocify-header">
                <li class="tocify-item level-1" data-unique="user-management">
                    <a href="#user-management">User Management</a>
                </li>
                                    <ul id="tocify-subheader-user-management" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="user-management-POSTapi-login">
                                <a href="#user-management-POSTapi-login">POST api/login</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-management-POSTapi-register">
                                <a href="#user-management-POSTapi-register">POST api/register</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-management-GETapi-profile--id-">
                                <a href="#user-management-GETapi-profile--id-">GET api/profile/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-management-POSTapi-editprofile--id-">
                                <a href="#user-management-POSTapi-editprofile--id-">POST api/editprofile/{id}</a>
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
        <li>Last updated: January 21, 2023</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost</code>
</aside>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-user">GET api/user</h2>

<p>
</p>



<span id="example-requests-GETapi-user">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/user" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-user">
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
<span id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user"></code></pre>
</span>
<form id="form-GETapi-user" data-method="GET"
      data-path="api/user"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-user"
                    onclick="tryItOut('GETapi-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-user"
                    onclick="cancelTryOut('GETapi-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-user" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                <h1 id="gallery-management">Gallery Management</h1>

    <p>Apis to manage the gallery resource.</p>

                                <h2 id="gallery-management-GETapi-gallery">GET api/gallery</h2>

<p>
</p>



<span id="example-requests-GETapi-gallery">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/gallery" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/gallery"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-gallery">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 55
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;hotels&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;img_scr&quot;: &quot;image/3P1ykyk2gd6oV9PE7RrkxqSYFPu9uVgUYnpQh8i9.jpg&quot;,
            &quot;img_alt&quot;: &quot;Creative hotel and suites&quot;,
            &quot;hotel_id&quot;: &quot;1&quot;,
            &quot;created_at&quot;: &quot;2023-01-19T08:46:48.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-01-19T08:46:48.000000Z&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;img_scr&quot;: &quot;image/pwtbZNCiqlK6ayenIsDEYXLqevdWsu3VfMEU8Ygr.jpg&quot;,
            &quot;img_alt&quot;: &quot;Creative hotel and suites&quot;,
            &quot;hotel_id&quot;: &quot;1&quot;,
            &quot;created_at&quot;: &quot;2023-01-19T08:46:48.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-01-19T08:46:48.000000Z&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;img_scr&quot;: &quot;image/VwBPJ7aiSwV6OxGHxbof7iSXqCro2UzIqKTDoXcH.jpg&quot;,
            &quot;img_alt&quot;: &quot;Creative hotel and suites&quot;,
            &quot;hotel_id&quot;: &quot;1&quot;,
            &quot;created_at&quot;: &quot;2023-01-19T08:46:48.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-01-19T08:46:48.000000Z&quot;
        },
        {
            &quot;id&quot;: 6,
            &quot;img_scr&quot;: &quot;gallery/KB6qR1GlD0B6Davk7DnfLnMKgRPGtLigUcTRR03U.jpg&quot;,
            &quot;img_alt&quot;: &quot;Creative hotel and suites&quot;,
            &quot;hotel_id&quot;: &quot;1&quot;,
            &quot;created_at&quot;: &quot;2023-01-19T08:48:52.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-01-19T08:48:52.000000Z&quot;
        },
        {
            &quot;id&quot;: 7,
            &quot;img_scr&quot;: &quot;gallery/H6Es9AhF3aV6J19UffsnSWzVa7lizIgUNY6rnQOX.jpg&quot;,
            &quot;img_alt&quot;: &quot;Creative hotel and suites&quot;,
            &quot;hotel_id&quot;: &quot;1&quot;,
            &quot;created_at&quot;: &quot;2023-01-19T08:48:52.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-01-19T08:48:52.000000Z&quot;
        },
        {
            &quot;id&quot;: 8,
            &quot;img_scr&quot;: &quot;gallery/0U5zQjbdr0MsuIMuaYSOc2gGgKqecEdMNk1GFZwt.jpg&quot;,
            &quot;img_alt&quot;: &quot;Creative hotel and suites&quot;,
            &quot;hotel_id&quot;: &quot;1&quot;,
            &quot;created_at&quot;: &quot;2023-01-19T08:48:52.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-01-19T08:48:52.000000Z&quot;
        },
        {
            &quot;id&quot;: 9,
            &quot;img_scr&quot;: &quot;image/aKAr3wXfWzSoAKv82XcVDGQVaqpLN8YshXt0pLxS.jpg&quot;,
            &quot;img_alt&quot;: &quot;FOBBS APARTMENT AND SUITES&quot;,
            &quot;hotel_id&quot;: &quot;3&quot;,
            &quot;created_at&quot;: &quot;2023-01-19T09:33:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-01-19T09:33:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 10,
            &quot;img_scr&quot;: &quot;image/sy49nMcotcKehwmxJA127bLY4SJRVTTYew8R0qRz.jpg&quot;,
            &quot;img_alt&quot;: &quot;FOBBS APARTMENT AND SUITES&quot;,
            &quot;hotel_id&quot;: &quot;3&quot;,
            &quot;created_at&quot;: &quot;2023-01-19T09:33:48.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-01-19T09:33:48.000000Z&quot;
        },
        {
            &quot;id&quot;: 11,
            &quot;img_scr&quot;: &quot;image/wLbV3fjanNyvIX9fAdDRqwn6yr4BAA2toBwjWRZp.jpg&quot;,
            &quot;img_alt&quot;: &quot;FOBBS APARTMENT AND SUITES&quot;,
            &quot;hotel_id&quot;: &quot;3&quot;,
            &quot;created_at&quot;: &quot;2023-01-19T09:33:48.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-01-19T09:33:48.000000Z&quot;
        },
        {
            &quot;id&quot;: 12,
            &quot;img_scr&quot;: &quot;image/4FPzwoQAGYoLYEhxvGSTpQM6SPtXXAX2iwQIB9OV.jpg&quot;,
            &quot;img_alt&quot;: &quot;FOBBS APARTMENT AND SUITES&quot;,
            &quot;hotel_id&quot;: &quot;3&quot;,
            &quot;created_at&quot;: &quot;2023-01-19T09:33:48.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-01-19T09:33:48.000000Z&quot;
        },
        {
            &quot;id&quot;: 13,
            &quot;img_scr&quot;: &quot;image/uFF9llIlxlidn3zbvOnKI9JO3xpsVJ4oCw7pqCX1.jpg&quot;,
            &quot;img_alt&quot;: &quot;FOBBS APARTMENT AND SUITES&quot;,
            &quot;hotel_id&quot;: &quot;3&quot;,
            &quot;created_at&quot;: &quot;2023-01-19T09:33:48.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-01-19T09:33:48.000000Z&quot;
        },
        {
            &quot;id&quot;: 14,
            &quot;img_scr&quot;: &quot;image/0v3gzGPIM75mOG3n7eRVObSdT77CJqlnayCvGcpA.jpg&quot;,
            &quot;img_alt&quot;: &quot;FOBBS APARTMENT AND SUITES&quot;,
            &quot;hotel_id&quot;: &quot;3&quot;,
            &quot;created_at&quot;: &quot;2023-01-19T09:33:48.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-01-19T09:33:48.000000Z&quot;
        },
        {
            &quot;id&quot;: 15,
            &quot;img_scr&quot;: &quot;image/6RpkKN4s2LmJW1cmQM9CkNCjmjaN437iwbStAQ1Y.jpg&quot;,
            &quot;img_alt&quot;: &quot;FOBBS APARTMENT AND SUITES&quot;,
            &quot;hotel_id&quot;: &quot;3&quot;,
            &quot;created_at&quot;: &quot;2023-01-19T09:33:48.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-01-19T09:33:48.000000Z&quot;
        },
        {
            &quot;id&quot;: 16,
            &quot;img_scr&quot;: &quot;image/7iaoigB07fKX8kCjR9imX6rL5x77zHtVs7ee4PEP.jpg&quot;,
            &quot;img_alt&quot;: &quot;FOBBS APARTMENT AND SUITES&quot;,
            &quot;hotel_id&quot;: &quot;3&quot;,
            &quot;created_at&quot;: &quot;2023-01-19T09:33:48.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-01-19T09:33:48.000000Z&quot;
        },
        {
            &quot;id&quot;: 17,
            &quot;img_scr&quot;: &quot;image/RARo8fF7Nw6bx5uOJXxHuaDpSjgaJdbwG3zbWThy.jpg&quot;,
            &quot;img_alt&quot;: &quot;Imacul&quot;,
            &quot;hotel_id&quot;: &quot;4&quot;,
            &quot;created_at&quot;: &quot;2023-01-19T10:38:23.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-01-19T10:38:23.000000Z&quot;
        },
        {
            &quot;id&quot;: 18,
            &quot;img_scr&quot;: &quot;image/b0RM1ofCNCxMv54yY4MD3Y5dwz9IsPdLmBt1ixMe.jpg&quot;,
            &quot;img_alt&quot;: &quot;Paragon&quot;,
            &quot;hotel_id&quot;: &quot;5&quot;,
            &quot;created_at&quot;: &quot;2023-01-19T10:44:22.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-01-19T10:44:22.000000Z&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-gallery" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-gallery"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-gallery" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-gallery" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-gallery"></code></pre>
</span>
<form id="form-GETapi-gallery" data-method="GET"
      data-path="api/gallery"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-gallery', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-gallery"
                    onclick="tryItOut('GETapi-gallery');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-gallery"
                    onclick="cancelTryOut('GETapi-gallery');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-gallery" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/gallery</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-gallery"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-gallery"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                <h1 id="hotel-management">Hotel Management</h1>

    <p>Apis to manage the Hotel resource.</p>

                                <h2 id="hotel-management-GETapi-hotel">GET api/hotel</h2>

<p>
</p>



<span id="example-requests-GETapi-hotel">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/hotel" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/hotel"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-hotel">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 58
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;hotels&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Creative hotel and suites&quot;,
            &quot;email&quot;: &quot;pinnacle@gmail.com&quot;,
            &quot;phone&quot;: &quot;07063161583&quot;,
            &quot;user_id&quot;: &quot;1&quot;,
            &quot;image&quot;: &quot;image/f3HesJAV3LxRGpH6rihIMMDnrGUKY6w0UAlF7Bsk.jpg&quot;,
            &quot;address&quot;: &quot;asaba&quot;,
            &quot;location&quot;: &quot;12 Ejovwo street&quot;,
            &quot;rules&quot;: &quot;no facemask no entry&quot;,
            &quot;amenities&quot;: &quot;Swimming pools, Jacuzzi, WIFI&quot;,
            &quot;description&quot;: &quot;excellent&quot;,
            &quot;price&quot;: &quot;20,000-40,000&quot;,
            &quot;created_at&quot;: &quot;2023-01-19T08:46:48.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-01-19T08:46:48.000000Z&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;FOBBS APARTMENT AND SUITES&quot;,
            &quot;email&quot;: &quot;fobbs@gmail.com&quot;,
            &quot;phone&quot;: &quot;091234556544&quot;,
            &quot;user_id&quot;: &quot;3&quot;,
            &quot;image&quot;: &quot;image/H86Oo7vF13j5XqBemkmnbI8weaOPmvIMOPHopM2g.jpg&quot;,
            &quot;address&quot;: &quot;aasaba&quot;,
            &quot;location&quot;: &quot;56 street of hope&quot;,
            &quot;rules&quot;: &quot;do not smoke&quot;,
            &quot;amenities&quot;: &quot;Swimming pools, Jacuzzi, WIFI&quot;,
            &quot;description&quot;: &quot;excellentt&quot;,
            &quot;price&quot;: &quot;25,000-50,000&quot;,
            &quot;created_at&quot;: &quot;2023-01-19T09:33:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-01-19T09:36:37.000000Z&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;Imacul&quot;,
            &quot;email&quot;: &quot;imaculate@gmail.com&quot;,
            &quot;phone&quot;: &quot;07063161583&quot;,
            &quot;user_id&quot;: &quot;4&quot;,
            &quot;image&quot;: &quot;image/vDd4C5nqWNrnI1wTzd7dhKljjjtOY7XUjO61BE2G.jpg&quot;,
            &quot;address&quot;: &quot;Asaba&quot;,
            &quot;location&quot;: &quot;vanguard asaba&quot;,
            &quot;rules&quot;: &quot;wash your handss&quot;,
            &quot;amenities&quot;: &quot;bathrooms&quot;,
            &quot;description&quot;: &quot;great&quot;,
            &quot;price&quot;: &quot;20,000-40,000&quot;,
            &quot;created_at&quot;: &quot;2023-01-19T10:38:22.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-01-19T10:38:22.000000Z&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;Paragon&quot;,
            &quot;email&quot;: &quot;paragonsuites@gmail.com&quot;,
            &quot;phone&quot;: &quot;0987655443&quot;,
            &quot;user_id&quot;: &quot;5&quot;,
            &quot;image&quot;: &quot;image/QS3K8opuoelyZHnbwj7JsOicg7G2z5ETSGY7JkUx.jpg&quot;,
            &quot;address&quot;: &quot;bendel estate&quot;,
            &quot;location&quot;: &quot;bendel estate&quot;,
            &quot;rules&quot;: &quot;No hard drugs&quot;,
            &quot;amenities&quot;: &quot;snooker board&quot;,
            &quot;description&quot;: &quot;24hrs light&quot;,
            &quot;price&quot;: &quot;7000-13000&quot;,
            &quot;created_at&quot;: &quot;2023-01-19T10:44:22.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-01-19T10:44:22.000000Z&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-hotel" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-hotel"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-hotel" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-hotel" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-hotel"></code></pre>
</span>
<form id="form-GETapi-hotel" data-method="GET"
      data-path="api/hotel"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-hotel', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-hotel"
                    onclick="tryItOut('GETapi-hotel');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-hotel"
                    onclick="cancelTryOut('GETapi-hotel');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-hotel" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/hotel</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-hotel"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-hotel"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="hotel-management-GETapi-hotel--id-">GET api/hotel/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-hotel--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/hotel/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/hotel/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-hotel--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 57
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;hotels&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Creative hotel and suites&quot;,
        &quot;email&quot;: &quot;pinnacle@gmail.com&quot;,
        &quot;phone&quot;: &quot;07063161583&quot;,
        &quot;user_id&quot;: &quot;1&quot;,
        &quot;image&quot;: &quot;image/f3HesJAV3LxRGpH6rihIMMDnrGUKY6w0UAlF7Bsk.jpg&quot;,
        &quot;address&quot;: &quot;asaba&quot;,
        &quot;location&quot;: &quot;12 Ejovwo street&quot;,
        &quot;rules&quot;: &quot;no facemask no entry&quot;,
        &quot;amenities&quot;: &quot;Swimming pools, Jacuzzi, WIFI&quot;,
        &quot;description&quot;: &quot;excellent&quot;,
        &quot;price&quot;: &quot;20,000-40,000&quot;,
        &quot;created_at&quot;: &quot;2023-01-19T08:46:48.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-01-19T08:46:48.000000Z&quot;,
        &quot;roomtype&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;title&quot;: &quot;Deluxx&quot;,
                &quot;image&quot;: &quot;image/stRITm8koaJlH2Dv9sXHdiIWOgZL5Sei89ZbUEVT.jpg&quot;,
                &quot;price&quot;: &quot;20,000-40,000&quot;,
                &quot;hotel_id&quot;: &quot;1&quot;,
                &quot;created_at&quot;: &quot;2023-01-19T08:32:22.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2023-01-19T08:32:22.000000Z&quot;
            },
            {
                &quot;id&quot;: 2,
                &quot;title&quot;: &quot;Delux&quot;,
                &quot;image&quot;: &quot;image/d6OokquiCRFkF1EYKBpJuNZm5OEyvplYsXVxWJ2g.jpg&quot;,
                &quot;price&quot;: &quot;25,000-50,000&quot;,
                &quot;hotel_id&quot;: &quot;1&quot;,
                &quot;created_at&quot;: &quot;2023-01-19T08:33:44.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2023-01-19T08:33:44.000000Z&quot;
            }
        ],
        &quot;gallery&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;img_scr&quot;: &quot;image/3P1ykyk2gd6oV9PE7RrkxqSYFPu9uVgUYnpQh8i9.jpg&quot;,
                &quot;img_alt&quot;: &quot;Creative hotel and suites&quot;,
                &quot;hotel_id&quot;: &quot;1&quot;,
                &quot;created_at&quot;: &quot;2023-01-19T08:46:48.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2023-01-19T08:46:48.000000Z&quot;
            },
            {
                &quot;id&quot;: 2,
                &quot;img_scr&quot;: &quot;image/pwtbZNCiqlK6ayenIsDEYXLqevdWsu3VfMEU8Ygr.jpg&quot;,
                &quot;img_alt&quot;: &quot;Creative hotel and suites&quot;,
                &quot;hotel_id&quot;: &quot;1&quot;,
                &quot;created_at&quot;: &quot;2023-01-19T08:46:48.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2023-01-19T08:46:48.000000Z&quot;
            },
            {
                &quot;id&quot;: 3,
                &quot;img_scr&quot;: &quot;image/VwBPJ7aiSwV6OxGHxbof7iSXqCro2UzIqKTDoXcH.jpg&quot;,
                &quot;img_alt&quot;: &quot;Creative hotel and suites&quot;,
                &quot;hotel_id&quot;: &quot;1&quot;,
                &quot;created_at&quot;: &quot;2023-01-19T08:46:48.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2023-01-19T08:46:48.000000Z&quot;
            },
            {
                &quot;id&quot;: 6,
                &quot;img_scr&quot;: &quot;gallery/KB6qR1GlD0B6Davk7DnfLnMKgRPGtLigUcTRR03U.jpg&quot;,
                &quot;img_alt&quot;: &quot;Creative hotel and suites&quot;,
                &quot;hotel_id&quot;: &quot;1&quot;,
                &quot;created_at&quot;: &quot;2023-01-19T08:48:52.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2023-01-19T08:48:52.000000Z&quot;
            },
            {
                &quot;id&quot;: 7,
                &quot;img_scr&quot;: &quot;gallery/H6Es9AhF3aV6J19UffsnSWzVa7lizIgUNY6rnQOX.jpg&quot;,
                &quot;img_alt&quot;: &quot;Creative hotel and suites&quot;,
                &quot;hotel_id&quot;: &quot;1&quot;,
                &quot;created_at&quot;: &quot;2023-01-19T08:48:52.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2023-01-19T08:48:52.000000Z&quot;
            },
            {
                &quot;id&quot;: 8,
                &quot;img_scr&quot;: &quot;gallery/0U5zQjbdr0MsuIMuaYSOc2gGgKqecEdMNk1GFZwt.jpg&quot;,
                &quot;img_alt&quot;: &quot;Creative hotel and suites&quot;,
                &quot;hotel_id&quot;: &quot;1&quot;,
                &quot;created_at&quot;: &quot;2023-01-19T08:48:52.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2023-01-19T08:48:52.000000Z&quot;
            }
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-hotel--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-hotel--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-hotel--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-hotel--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-hotel--id-"></code></pre>
</span>
<form id="form-GETapi-hotel--id-" data-method="GET"
      data-path="api/hotel/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-hotel--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-hotel--id-"
                    onclick="tryItOut('GETapi-hotel--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-hotel--id-"
                    onclick="cancelTryOut('GETapi-hotel--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-hotel--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/hotel/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-hotel--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-hotel--id-"
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
                <input type="number" style="display: none"
               name="id"                data-endpoint="GETapi-hotel--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the hotel. Example: <code>1</code></p>
            </div>
                    </form>

                <h1 id="roomtype-management">Roomtype Management</h1>

    <p>Apis to manage the roomtype resource.</p>

                                <h2 id="roomtype-management-GETapi-roomtype">GET api/roomtype</h2>

<p>
</p>



<span id="example-requests-GETapi-roomtype">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/roomtype" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/roomtype"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-roomtype">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 56
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;roomtypes&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;title&quot;: &quot;Deluxx&quot;,
            &quot;image&quot;: &quot;image/stRITm8koaJlH2Dv9sXHdiIWOgZL5Sei89ZbUEVT.jpg&quot;,
            &quot;price&quot;: &quot;20,000-40,000&quot;,
            &quot;hotel_id&quot;: &quot;1&quot;,
            &quot;created_at&quot;: &quot;2023-01-19T08:32:22.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-01-19T08:32:22.000000Z&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;title&quot;: &quot;Delux&quot;,
            &quot;image&quot;: &quot;image/d6OokquiCRFkF1EYKBpJuNZm5OEyvplYsXVxWJ2g.jpg&quot;,
            &quot;price&quot;: &quot;25,000-50,000&quot;,
            &quot;hotel_id&quot;: &quot;1&quot;,
            &quot;created_at&quot;: &quot;2023-01-19T08:33:44.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-01-19T08:33:44.000000Z&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-roomtype" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-roomtype"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-roomtype" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-roomtype" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-roomtype"></code></pre>
</span>
<form id="form-GETapi-roomtype" data-method="GET"
      data-path="api/roomtype"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-roomtype', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-roomtype"
                    onclick="tryItOut('GETapi-roomtype');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-roomtype"
                    onclick="cancelTryOut('GETapi-roomtype');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-roomtype" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/roomtype</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-roomtype"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-roomtype"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                <h1 id="user-management">User Management</h1>

    <p>Apis to manage the user resource.</p>

                                <h2 id="user-management-POSTapi-login">POST api/login</h2>

<p>
</p>



<span id="example-requests-POSTapi-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"jrau@example.org\",
    \"password\": \"eaque\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "jrau@example.org",
    "password": "eaque"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-login">
</span>
<span id="execution-results-POSTapi-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-login" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-login"></code></pre>
</span>
<form id="form-POSTapi-login" data-method="POST"
      data-path="api/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-login"
                    onclick="tryItOut('POSTapi-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-login"
                    onclick="cancelTryOut('POSTapi-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-login" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="email"                data-endpoint="POSTapi-login"
               value="jrau@example.org"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>jrau@example.org</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="password"                data-endpoint="POSTapi-login"
               value="eaque"
               data-component="body">
    <br>
<p>Example: <code>eaque</code></p>
        </div>
        </form>

                    <h2 id="user-management-POSTapi-register">POST api/register</h2>

<p>
</p>



<span id="example-requests-POSTapi-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"qui\",
    \"email\": \"laborum\",
    \"phone\": \"officiis\",
    \"password\": \"unde\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "qui",
    "email": "laborum",
    "phone": "officiis",
    "password": "unde"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-register">
</span>
<span id="execution-results-POSTapi-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-register" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-register"></code></pre>
</span>
<form id="form-POSTapi-register" data-method="POST"
      data-path="api/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-register"
                    onclick="tryItOut('POSTapi-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-register"
                    onclick="cancelTryOut('POSTapi-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-register" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-register"
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
                <input type="text" style="display: none"
               name="name"                data-endpoint="POSTapi-register"
               value="qui"
               data-component="body">
    <br>
<p>Example: <code>qui</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="email"                data-endpoint="POSTapi-register"
               value="laborum"
               data-component="body">
    <br>
<p>Example: <code>laborum</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="phone"                data-endpoint="POSTapi-register"
               value="officiis"
               data-component="body">
    <br>
<p>Example: <code>officiis</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="password"                data-endpoint="POSTapi-register"
               value="unde"
               data-component="body">
    <br>
<p>'address' =&gt; 'nullable',
'image' =&gt; 'nullable',
'website' =&gt; 'nullable',
'role' =&gt; 'nullable',. Example: <code>unde</code></p>
        </div>
        </form>

                    <h2 id="user-management-GETapi-profile--id-">GET api/profile/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-profile--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/profile/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/profile/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-profile--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;users&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;kelvin&quot;,
        &quot;email&quot;: &quot;kelvin@gmail.com&quot;,
        &quot;phone&quot;: &quot;09088733333&quot;,
        &quot;role&quot;: &quot;Agent&quot;,
        &quot;address&quot;: null,
        &quot;website&quot;: null,
        &quot;image&quot;: &quot;image/9xNFRf6JP1KY2qnUitBzCXPKL3lBUq5UyRVKjjeN.jpg&quot;,
        &quot;gender&quot;: null,
        &quot;email_verified_at&quot;: null,
        &quot;created_at&quot;: &quot;2023-01-19T08:22:31.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-01-19T08:59:25.000000Z&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-profile--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-profile--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-profile--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-profile--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-profile--id-"></code></pre>
</span>
<form id="form-GETapi-profile--id-" data-method="GET"
      data-path="api/profile/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-profile--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-profile--id-"
                    onclick="tryItOut('GETapi-profile--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-profile--id-"
                    onclick="cancelTryOut('GETapi-profile--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-profile--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/profile/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-profile--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-profile--id-"
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
                <input type="number" style="display: none"
               name="id"                data-endpoint="GETapi-profile--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the profile. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="user-management-POSTapi-editprofile--id-">POST api/editprofile/{id}</h2>

<p>
</p>



<span id="example-requests-POSTapi-editprofile--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/editprofile/porro" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"pariatur\",
    \"email\": \"qui\",
    \"phone\": \"maxime\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/editprofile/porro"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "pariatur",
    "email": "qui",
    "phone": "maxime"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-editprofile--id-">
</span>
<span id="execution-results-POSTapi-editprofile--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-editprofile--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-editprofile--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-editprofile--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-editprofile--id-"></code></pre>
</span>
<form id="form-POSTapi-editprofile--id-" data-method="POST"
      data-path="api/editprofile/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-editprofile--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-editprofile--id-"
                    onclick="tryItOut('POSTapi-editprofile--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-editprofile--id-"
                    onclick="cancelTryOut('POSTapi-editprofile--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-editprofile--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/editprofile/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-editprofile--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-editprofile--id-"
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
                <input type="text" style="display: none"
               name="id"                data-endpoint="POSTapi-editprofile--id-"
               value="porro"
               data-component="url">
    <br>
<p>The ID of the editprofile. Example: <code>porro</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="name"                data-endpoint="POSTapi-editprofile--id-"
               value="pariatur"
               data-component="body">
    <br>
<p>Example: <code>pariatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="email"                data-endpoint="POSTapi-editprofile--id-"
               value="qui"
               data-component="body">
    <br>
<p>Example: <code>qui</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="phone"                data-endpoint="POSTapi-editprofile--id-"
               value="maxime"
               data-component="body">
    <br>
<p>Example: <code>maxime</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>address</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="address"                data-endpoint="POSTapi-editprofile--id-"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>image</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="image"                data-endpoint="POSTapi-editprofile--id-"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>website</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="website"                data-endpoint="POSTapi-editprofile--id-"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>gender</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="gender"                data-endpoint="POSTapi-editprofile--id-"
               value=""
               data-component="body">
    <br>

        </div>
        </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
