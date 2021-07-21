
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
   
   <div id="body-anuncios">
        
  <!-- Top bar -->
  <div class="top">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <p>
                    Responsive eCommerce template &mdash; <a href="hhttp://themeforest.net/item/la-boutique-responsive-ecommerce-template/5573130?ref=Tfingi"><strong>BUY NOW!</strong></a>
                </p>
            </div>
            <div class="col-sm-6 hidden-xs">
                <ul class="list-inline pull-right">
                    <li>
                        <a href="login-register.html" title="Login / Register">Login / Register</a>									
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End class="top" -->


        <main class="py-4">

            
            @yield('content-anuncios')
        </main>
    </div>