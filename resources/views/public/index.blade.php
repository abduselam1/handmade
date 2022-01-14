<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <style>
        ::-webkit-scrollbar{
            width: 1vh;
        }
        ::-webkit-scrollbar-thumb{
            background: #97aac4;
            /* border: 3px solid #edf2f7; */
            border-radius: 100vh;
        }
        ::-webkit-scrollbar-track{
            background: transparent;
            border-radius: 100vh;
        }
    </style>
</head>
<body>
    <div id="app">
        
        @include('public.components.nav')
        
        <router-view></router-view>
        
        <div class="sm:hidden">
            @include('public.components.footer')
        </div>
        <div class="hidden" id="snack">
            <snack-bar v-bind:backgroundColor="'bg-gray-800'" v-bind:message="'You are not authorized for this action please'" >
                <a href="/login" class="sm:mx-3 sm:my-2 sm:text-lg mx-1 my-1 text-sm font-semibold text-blue-500">Login</a>
            </snack-bar>
        </div>
    </div>

    <!-- Scripts -->
    
    <script>
        
        window.authorized = false;
        window.profile = @json($profile);
        var date = new Date();
        date.setTime(date.getTime() + (365*24*60*60*1000));
        var expires = "expires="+ date.toUTCString();
        
        document.cookie = "liked=[];" + expires + ";path=/";
        document.cookie = "saved=[];" + expires + ";path=/";
        
        
    </script>
    @auth
        <script>
            var liked = JSON.stringify(@json($liked));
            var saved = JSON.stringify(@json($saved));
            
            var date = new Date();
            date.setTime(date.getTime() + (365*24*60*60*1000));
            var expires = "expires="+ date.toUTCString();

            document.cookie = "liked=" + liked + ";" + expires + ";path=/";
            document.cookie = "saved=" + saved + ";" + expires + ";path=/";

            window.authorized = true;
            window.user = @json(auth()->user());
            
        </script>
    @endauth
    <script src="{{ asset('js/app.js') }}" defer></script>
    
</body>
</html>
