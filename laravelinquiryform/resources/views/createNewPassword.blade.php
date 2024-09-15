<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BISJHINTUS SERVICE INQUIRY FORM</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- favicon -->
    <link rel="icon" href="{{ asset('\favicon_bisjhintus.png') }}" type="image/x-icon">


<body>
    <div  class="flex flex-col items-center justify-center min-h-screen bg-gray-100">

        <div class="mb-4">
            <img src="\assets\images\logo.png" alt="Logo" />
        </div>
        <!-- New Password create form -->


        <!-- create a NewPassword if User is not remember id="createUserForm"-->
        <form action="{{ route('createNewpasswordPost') }}" method="POST" class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md space-y-6">
            @csrf
            <h1 class="text-center text-3xl font-bold text-gray-600">Create User</h1>
            @if(session()->has("failPassword"))
            <div class="text-red-500">
                {{ session()->get("failPassword") }}
            </div>
            @endif

            @if(session()->has("successSubmit"))
            <div class="text-green-500">
                {{ session()->get("successSubmit") }}
            </div>
            @endif
            <!-- Email Field -->
            <div class="flex flex-col">
                <label for="email" class="text-gray-700 font-medium">Email</label>
                <input
                    id="email"
                    name="email"
                    type="email"
                    placeholder="Email"
                    class="mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    required />
            </div>

            <!-- New Password Field -->
            <div class="flex flex-col">
                <label for="currentPassword" class="text-gray-700 font-medium">New Password</label>
                <input
                    id="currentPassword"
                    name="newPassword"
                    type="password"
                    placeholder="New Password"
                    class="mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    required />
            </div>

            <!-- Confirm Password Field -->
            <div class="flex flex-col">
                <label for="newPassword" class="text-gray-700 font-medium">Confirm Password</label>
                <input
                    id="newPassword"
                    name="password"
                    type="password"
                    placeholder="Confirm Password"
                    class="mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    required />
            </div>

            <!-- Error Message -->
            <div id="errorMessage" class="text-red-500 text-sm hidden">Passwords do not match!</div>

            <!-- Button Group -->

            <a href="" class="flex justify-center">
                <!-- <button type="button" onclick="window.location.href=" " class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500">Cancel</button> -->
                <button onclick="passwordNotMatch()" type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">Submit</button>
            </a>
        </form>



    </div>



    <script>
        // create a new password if user not able to login 
        function passwordNotMatch(){
      // Get the input values
      const email = document.getElementById('email').value;
            const newPassword = document.getElementById('currentPassword').value;
            const confirmPassword = document.getElementById('newPassword').value;
            const errorMessage = document.getElementById('errorMessage');

            // Check if passwords match
            if (newPassword !== confirmPassword) {
                errorMessage.classList.remove('hidden'); // Show error message
                errorMessage.textContent = 'Passwords do not match!';
            }
        }

    </script>

</body>

</html>