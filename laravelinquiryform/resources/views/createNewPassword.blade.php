<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
  <div class="mb-4">
    <img src="\assets\images\logo.png" alt="Logo" />
  </div>
  <!-- New Password create form -->
  <form id="createUserForm" class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md space-y-6">
  <h1 class="text-center text-3xl font-bold text-gray-600">Create User</h1>

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
    <label class="text-gray-700 font-medium">New Password</label>
    <input
      id="newPassword"
      type="password"
      placeholder="New Password"
      class="mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
      required
    />
  </div>

  <div class="flex flex-col">
    <label class="text-gray-700 font-medium">Confirm Password</label>
    <input
      id="confirmPassword"
      type="password"
      placeholder="Confirm Password"
      class="mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
      required
    />
  </div>

  <div id="errorMessage" class="text-red-500 text-sm hidden">Passwords do not match!</div>

  <button
    type="submit"
    class="w-full py-2 mt-4 text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500"
  >
    Submit
  </button>
</form>

</div>



<script>
  // create a new password if user not able to login 
  document.getElementById('createUserForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    // Get the input values
    const email = document.getElementById('email').value;
    const newPassword = document.getElementById('newPassword').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    const errorMessage = document.getElementById('errorMessage');

    // Check if passwords match
    if (newPassword !== confirmPassword) {
      errorMessage.classList.remove('hidden'); // Show error message
      errorMessage.textContent = 'Passwords do not match!';
    } else {
      errorMessage.classList.add('hidden'); // Hide error message
       alert('update success')
      // Log values to the console
      console.log('Email:', email);
      console.log('New Password:', newPassword);
      console.log('Confirm Password:', confirmPassword);

      // Here you can proceed with form submission logic, like sending the data to the backend.
    }
  });
</script>

</body>
</html>