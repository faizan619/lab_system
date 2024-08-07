<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="/logic/tailwind.js"></script>
    <link rel="stylesheet" href="/logic/jquery.css">
    <script src="/logic/jquery1.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />

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
    <script src="/logic/fontawosome.js"></script>
    <script src="/logic/datatables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</body>
</html>

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="/logic/tailwind.js"></script>
    <link rel="stylesheet" href="/logic/jquery.css">
    <script src="/logic/jquery1.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />

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
    <script src="/logic/fontawosome.js"></script>
    <script src="/logic/datatables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</body>
</html> --}}
