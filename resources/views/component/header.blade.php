<div class="flex px-5 justify-end items-center gap-7 text-white h-14 bg-blue-900">
    @if (Auth::check())
        <p class="italic text-lg">Welcome Mr/Mrs {{Auth::user()->name}}</p>
        <button class="py-1 hover:scale-105 transition-all rounded-md px-5 border bg-red-600 hover:bg-red-700">Logout</button>
        @else
        <a href="{{route('login')}}"><button class="py-1 hover:scale-105 transition-all rounded-md px-5 border bg-red-600 hover:bg-red-700">Login</button></a>
    @endif
    {{-- <div class="flex gap-5">
    </div> --}}
</div>
{{-- <!DOCTYPE html>
    <html lang="en">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            .darkblue{background-color: darkblue;}
        </style>
    </head>
    <body>
        <div class="d-flex px-5 justify-content-end align-items-center gap-5 text-light h-12 darkblue ">
            @if (Auth::check()) 
                <p class="italic fs-5 pt-3">Welcome Mr/Mrs {{ Auth::user()->name }}</p>
                    <button type="submit" class="btn btn-danger">Logout</button>
            @else 
                <a href="{{route('login')}}">
                    <button class="btn btn-danger">Login</button>
                </a>
            @endif 
        </div>
</body>
</html> --}}
