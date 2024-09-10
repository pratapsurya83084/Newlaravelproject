<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
</head>

<body class="font-sans bg-gray-100">
    <div class="flex flex-col h-screen">
        <!-- Logo -->
        <div class="flex justify-center py-2">
            <img src="\assets\images\logo.png" alt="Logo">
        </div>

        <div class="flex flex-1">
            <!-- Sidebar -->
            <div id="sidebar" class="fixed top-0 left-0 h-full w-64 bg-indigo-800 text-white transition-transform transform -translate-x-full md:translate-x-0">
                <div class="flex items-center justify-center h-20 shadow-md">
                    <h1 class="text-2xl font-bold">Admin Dashboard</h1>
                </div>
                <!-- admin list name -->
                <div class="flex flex-col space-y-2 p-4">
                    <a href="#" id="dashboardLink" class="block w-full text-left cursor-pointer p-2 rounded-md hover:bg-indigo-600">Dashboard</a>
                    <a href="#" id="usersLink" class="block w-full text-left cursor-pointer p-2 rounded-md hover:bg-indigo-600">Users</a>
                    <button id="updatePasswordLink" class="block w-full text-left cursor-pointer p-2 rounded-md hover:bg-indigo-600">Update Password</button>
                    <button class="block w-full text-left cursor-pointer p-2 rounded-md hover:bg-indigo-600">Logout</button>
                </div>

            </div>

            <!-- Main Content Area -->
            <div class="flex-1 flex flex-col overflow-hidden ml-0 md:ml-64">
                <!-- Top Navbar -->
                <header class="flex md:hidden bg-indigo-600 text-white flex justify-between items-center shadow-md px-6 py-4">
                    <div class="text-2xl font-semibold">Dashboard</div>

                    <button id="sidebarToggle" class="md:hidden focus:outline-none">
                        <svg id="menuIcon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path id="menuIconPath" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg id="closeIcon" xmlns="http://www.w3.org/2000/svg" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>

                </header>

                <!-- Main Content -->
                <main class="flex-1 overflow-y-auto p-4 md:p-6 bg-gray-50">
                    <!-- Dashboard View -->
                    <div id="dashboardView" class="hidden">
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
                            <div class="bg-white shadow rounded-lg p-4">
                                <h3 class="text-lg font-semibold mb-2">Total Users</h3>
                                <p class="text-2xl" id="totalUsersCount">123</p> <!-- Static value, will be updated dynamically -->
                            </div>
                        </div>
                    </div>

                    <!-- Users View -->
                    <div id="usersView" class="hidden">
                        <div class="bg-white shadow rounded-lg p-4">
                            <div class="flex justify-between mb-4">
                                <h3 class="text-lg font-semibold">Users List</h3>
                                <button class="bg-green-600 py-2 px-4 rounded text-white font-bold">Download Pdf</button>
                            </div>

                            <div class="overflow-x-auto">
                                <table class="min-w-full bg-white shadow-md rounded-lg">
                                    <thead>
                                        <tr>
                                            <th class="px-6 py-3 border-b-2 border-gray-300 bg-gray-100 text-left text-xs font-semibold text-gray-600 tracking-wider">Sr. No</th>
                                            <th class="px-6 py-3 border-b-2 border-gray-300 bg-gray-100 text-left text-xs font-semibold text-gray-600 tracking-wider">Username</th>
                                            <th class="px-6 py-3 border-b-2 border-gray-300 bg-gray-100 text-left text-xs font-semibold text-gray-600 tracking-wider">Email</th>
                                            <th class="px-6 py-3 border-b-2 border-gray-300 bg-gray-100 text-left text-xs font-semibold text-gray-600 tracking-wider">Course Opting Date</th>
                                            <th class="px-6 py-3 border-b-2 border-gray-300 bg-gray-100 text-left text-xs font-semibold text-gray-600 tracking-wider">Course Name</th>
                                            <th class="px-6 py-3 border-b-2 border-gray-300 bg-gray-100 text-left text-xs font-semibold text-gray-600 tracking-wider">Contact No</th>
                                            <th class="px-6 py-3 border-b-2 border-gray-300 bg-gray-100 text-left text-xs font-semibold text-gray-600 tracking-wider">Job Profile</th>
                                            <th class="px-6 py-3 border-b-2 border-gray-300 bg-gray-100 text-left text-xs font-semibold text-gray-600 tracking-wider">Country</th>
                                            <th class="px-6 py-3 border-b-2 border-gray-300 bg-gray-100 text-left text-xs font-semibold text-gray-600 tracking-wider">Service</th>
                                            <th class="px-6 py-3 border-b-2 border-gray-300 bg-gray-100 text-left text-xs font-semibold text-gray-600 tracking-wider">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="hover:bg-gray-100">
                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">1</td>
                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">JohnDoe</td>
                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">johndoe@example.com</td>
                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">2024-09-10</td>
                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">React Course</td>
                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">1234567890</td>
                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">Developer</td>
                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">USA</td>
                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">Premium</td>
                                            <td class="text-center px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                <button class="bg-red-500 p-1 rounded px-3 text-white">Delete</button>
                                            </td>
                                        </tr>
                                        <!-- Add more rows as needed -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Update Password View -->
                    <div id="updatePasswordView" class="hidden">
                        <div class="bg-white shadow rounded-lg p-4">
                            <h3 class="text-lg font-semibold mb-4">Update Password</h3>
                            <form id="updatePasswordForm" action="#" method="POST">
                                <div class="mb-4">
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                    <input type="email" id="email" name="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                                </div>
                                <div class="mb-4">
                                    <label for="currentPassword" class="block text-sm font-medium text-gray-700">Current Password</label>
                                    <input type="password" id="currentPassword" name="currentPassword" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                                </div>
                                <div class="mb-4">
                                    <label for="newPassword" class="block text-sm font-medium text-gray-700">New Password</label>
                                    <input type="password" id="newPassword" name="newPassword" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                                </div>
                                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md">Update Password</button>
                            </form>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dashboardLink = document.getElementById('dashboardLink');
            const usersLink = document.getElementById('usersLink');
            const updatePasswordLink = document.getElementById('updatePasswordLink');

            const dashboardView = document.getElementById('dashboardView');
            const usersView = document.getElementById('usersView');
            const updatePasswordView = document.getElementById('updatePasswordView');

            dashboardLink.addEventListener('click', function(e) {
                e.preventDefault();
                dashboardView.classList.remove('hidden');
                usersView.classList.add('hidden');
                updatePasswordView.classList.add('hidden');
            });

            usersLink.addEventListener('click', function(e) {
                e.preventDefault();
                dashboardView.classList.add('hidden');
                usersView.classList.remove('hidden');
                updatePasswordView.classList.add('hidden');
            });

            updatePasswordLink.addEventListener('click', function(e) {
                e.preventDefault();
                dashboardView.classList.add('hidden');
                usersView.classList.add('hidden');
                updatePasswordView.classList.remove('hidden');
            });

            // Sidebar toggle functionality
            const sidebarToggle = document.getElementById('sidebarToggle');
            const sidebar = document.getElementById('sidebar');
            const menuIcon = document.getElementById('menuIcon');
            const closeIcon = document.getElementById('closeIcon');

            sidebarToggle.addEventListener('click', function() {
                if (sidebar.classList.contains('-translate-x-full')) {
                    sidebar.classList.remove('-translate-x-full');
                    sidebar.classList.add('translate-x-0');
                    menuIcon.classList.add('hidden');
                    closeIcon.classList.remove('hidden');
                } else {
                    sidebar.classList.add('-translate-x-full');
                    sidebar.classList.remove('translate-x-0');
                    menuIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                }
            });
        });
    </script>
</body>

</html>