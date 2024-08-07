{{-- @extends('masterLayout') --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
</head>

<body>
    <div class="flex justify-center flex flex-col justify-between items-center min-h-screen">
        <div></div>
        <div class="w-[40%] p-7 shadow-md shadow-black rounded-md pt-10">
            <img src="assets/logo.jpg" alt="Company Logo" class="w-24 mx-auto mb-5">
            <h1 class="text-center font-bold text-2xl mb-5">User Login Form</h1>
            <form action="{{ route('loginUser') }}" method="POST" class="flex flex-col gap-7 items-start">
                @csrf
                <label for="username" class="w-full">
                    <p>User Name</p>
                    <input type="text" autofocus name="username" id="username" placeholder="Enter User Name"
                        class="p-2 border w-full hover:border-blue-700 rounded-md">
                    @if ($errors->any())
                        <span class="text-red-700 px-3 rounded-md mt-[-15px]">
                            @error('username')
                                {{ $message }}
                            @enderror
                        </span>
                    @endif
                </label>
                <label for="pasword" class="w-full">
                    <p>Password</p>
                    <input type="password" name="password" id="password" placeholder="Enter Password"
                        class="p-2 border w-full hover:border-blue-700 rounded-md">
                    @if ($errors->any())
                        <span class="text-red-700 px-3 rounded-md mt-[-15px]">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    @endif
                </label>
                @if (session('status'))
            <div id="alert-1" class="flex items-center p-4 my-1 text-blue-800 rounded-lg bg-blue-50" role="alert">
                <i class="fa-solid fa-circle-info fa-lg"></i>
                <span class="sr-only">Info</span>
                <div class="ms-3 text-sm font-medium">
                    {{ session('status') }}
                </div>
                  <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#alert-1" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <i class="fa-solid fa-xmark fa-lg"></i>
                </button>
              </div>
            @endif
                <button type="submit"
                    class="border inline-block px-5 py-2 bg-blue-700 hover:scale-105 text-white uppercase rounded-md hover:bg-blue-800 transition-all py-1 inline-block">Login</button>
            </form>

        </div>
        @include('component.footer')
    </div>
</body>

</html>
