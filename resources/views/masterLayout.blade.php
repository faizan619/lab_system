<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script> 
    <title>@yield('title') Lab System</title>
</head>
<body>
    <div class="h-screen flex">
        <div class="">
            @include('component.sidebar')
        </div>
        <div class="flex-1 flex flex-col justify-between">
            @include('component.header')
            <div class="h-full overflow-y-auto ">
                @yield('body')
            </div>
            @include('component.footer')
        </div>
    </div>
</body>
</html>