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
  <form class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md space-y-6">
    <h1 class="text-center text-3xl font-bold text-gray-600">Create User</h1>

    <div class="flex flex-col">
      <label class="text-gray-700 font-medium">Email</label>
      <input
        type="email"
        placeholder="Email"
        class="mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
      />
    </div>

    <div class="flex flex-col">
      <label class="text-gray-700 font-medium">New Password</label>
      <input
        type="password"
        placeholder="New Password"
        class="mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
      />
    </div>

    <div class="flex flex-col">
      <label class="text-gray-700 font-medium">Confirm Password</label>
      <input
        type="password"
        placeholder="Confirm Password"
        class="mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
      />
    </div>

    <button
      type="submit"
      class="w-full py-2 mt-4 text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500"
    >
      Submit
    </button>
  </form>
</div>

</body>
</html>