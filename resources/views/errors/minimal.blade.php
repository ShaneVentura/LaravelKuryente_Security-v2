<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        @vite(['resources/css/app.css'])
        <style>
            body {
                font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                overflow: hidden;
            }
        </style>
    </head>
    <body class="antialiased">

        <div class="">
            @yield('429')
        </div>
        <div class="">
            @yield('404')
        </div>

        <div class="relative flex items-top justify-center min-h-screen bg-gray-100  sm:items-center sm:pt-0">
            
            <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
               
                
                <div class="flex items-center pt-8 sm:justify-start sm:pt-0">
                   
                    

                    <div class="px-4 text-4xl  text-red-dark textborder-r  font-semibold border-gray-400 tracking-wider">
                        @yield('code')
                    </div>

                    <div class="px-4 text-4xl  text-red-dark textborder-r  font-semibold border-gray-400 tracking-wider">
                        @yield('message')
                    </div>
                    

                    
                </div>
            </div>
        </div>
    </body>
</html>
