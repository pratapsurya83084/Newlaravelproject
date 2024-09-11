<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="loginform.css">
    <!-- <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}"> -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>

<div class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
  <div class="mb-4">
    <img src="\assets\images\logo.png" alt="Logo" />
  </div>
  <!-- Login form -->
  <form id="loginForm" class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md space-y-6">
  <h1 class="text-center text-3xl font-bold text-gray-600">Login</h1>

  <div class="flex flex-col">
    <label class="text-gray-700 font-medium">Email</label>
    <input
      id="email"
      type="email"
      placeholder="Email"
      class="mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
      required
    />
  </div>

  <div class="flex flex-col">
    <label class="text-gray-700 font-medium">Password</label>
    <input
      id="password"
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

</div>



<script>
  document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission

    // Get values from input fields
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    // Log values to console
    console.log('Email:', email);
    console.log('Password:', password);
    // Perform authentication logic here (e.g., send request to API)
    // Example:
    // fetch('https://your-api-endpoint.com/login', {
    //   method: 'POST',
    //   headers: {
    //     'Content-Type': 'application/json'
    //   },
    //   body: JSON.stringify({
    //     email: email,
    //     password: password
    //   })
    // })
    //.then(response => response.json())
    //.then(data => {
    //   if (data.success) {
    //     // Authentication successful, redirect to dashboard or home page
    //alert('successfull login)
    //     window.location.href = '/admin';
    //   } else {
    //     // Authentication failed, display error message
    //     alert('Invalid email or password');
    //   }
    // })
    //.catch(error => {
    //   console.error('Error:', error);
    //   // Display error message
    //   alert('An error
  });
</script>
</body>
</html>
