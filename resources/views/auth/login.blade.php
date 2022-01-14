<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>handMed | Login</title>

    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class=" bg-gray-100">

    <div class=" w-full xs:max-w-sm xs:mx-auto mx-0 my-5 border px-10 border-gray-300 bg-gray-50">
        <div class="mt-5">
            <h3 class="text-3xl font-bold text-center mb-5 text-gray-800">HandMed-logo</h3>
            <h4 class=" text-base font-bold text-center text-gray-500">Sign in to get full feature of the system.</h4>
        </div>
        
        {{-- social media login --}}
        <div class="mt-3">
            <div class="py-2 rounded-lg w-full bg-green-500">
                <h3 class="text-sm text-white items-center text-center font-semibold">Log in with Google</h3>
            </div>
            <div class="py-2 rounded-lg w-full bg-blue-500 mt-2">
                <h3 class="text-sm text-center items-center text-white font-semibold">Log in with facebook</h3>
            </div>
        </div>

        {{-- breaker  --}}
        <div class="flex justify-evenly items-center">
            <div class=" w-2/5  border-t border-gray-400"></div>
            <div>
                <span class=" text-gray-500 font-semibold">OR</span>
            </div>
            <div class=" w-2/5  border-t border-gray-400"></div>
        </div>

        <div>
            <form action="{{route('login')}}" method="POST">
                @csrf
                

                <div class="mb-2">
                    <input type="text" class="text-sm text-gray-800 focus:outline-none w-full border border-gray-300 rounded-md py-2 px-2 bg-gray-50" name="emailOrUsername" required autocomplete value="{{old('emailOrUsername')}}" placeholder="Email Address or Username">
                    @error('emailOrUsername')
                        <span class="mt-2 text-xs text-red-400 font-semibold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-2">
                    <input type="password" class="text-sm text-gray-800 focus:outline-none w-full border border-gray-300 rounded-md py-2 px-2 bg-gray-50" name="password" required autocomplete value="{{old('password')}}" placeholder="Password">
                    
                </div>

                
                
                <button type="submit" onclick="validateLogin()" class="py-1 mt-1 mb-3 w-full text-white bg-blue-600 rounded-lg text-center">Login</button>
            </form>
            
        </div>

        
    </div>
    <div class="w-full xs:max-w-sm xs:mx-auto mx-0 border py-5 mb-3 border-gray-300 mb bg-gray-50">
        <div class="w-full ">
            <h3 class="text-center text-gray-800 text-sm">Don't you have an account? <a href="{{url('register')}}" class=" text-blue-600 font-semibold">Register</a></h3>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script>
        function validateLogin(){
            axios.get('/get-emails').then((result) => {
                console.log(result);
            }).catch((err) => {
                console.warn(err);
            });
        }
    </script>
</body>
</html>