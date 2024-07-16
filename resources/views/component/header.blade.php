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