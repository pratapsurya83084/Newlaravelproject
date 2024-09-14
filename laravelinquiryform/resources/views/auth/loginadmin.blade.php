<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>BISJHINTUS SERVICE INQUIRY FORM</title>
  <!-- favicon -->
  <link rel="icon" href="{{ asset('\favicon_bisjhintus.png') }}" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-gray-100 select-none">
 <!-- Flash messages -->
 @if(session()->has('message'))
<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        {{ session()->get('message') }}
        <span class="block sm:inline">Login   successfull.</span>
@endif

   
  
<div class="flex flex-col items-center justify-center min-h-screen ">
<!-- show error red if invalid creadential -->
@if(session('fail'))
        <div class=" text-center bg-red-100 border mt-10 lg:mt-40 mx-10 lg:mx-80 border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Error!</strong>
            <span class="block sm:inline">{{ session('fail') }}</span>
        </div>
    @endif  


<div class="mb-4">
    <img src="\assets\images\logo.png" alt="Logo" />
  </div>
  <div>
 
  </div>




<!-- ----------- set locally ------------->


<!-- Login form -->
<form 
    action="{{ route('loginpost') }}" 
    method="post" 
    id="loginForm" 
    class="bg-white  p-8 rounded-lg shadow-lg  sm:w-full max-w-md space-y-6"
>
    @csrf
    <h1 class="text-center text-3xl font-bold text-gray-600">Login</h1>

    <div class="flex flex-col">
        <label for="email" class="text-gray-700 font-medium">Email</label>
        <input
            id="email"
            name="email"
            type="email"
            placeholder="Email"
            class="mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
            required
        />
    </div>

    <div class="flex flex-col">
        <label for="password" class="text-gray-700 font-medium">Password</label>
        <input
            id="password"
            name="password"
            type="password"
            placeholder="Password"
            class="mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
            required
        />
    </div>

    <button
        type="submit"
        class="w-full py-2 mt-4 text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500"
    >
        Login
    </button>
</form>

<script>


</script>
</body>
</html>
