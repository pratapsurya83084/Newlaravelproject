<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>BISJHINTUS SERVICE INQUIRY FORM</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans bg-gray-100 select-none">
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
                    <button id="dashboardLink" class="block w-full text-left cursor-pointer p-2 rounded-md hover:bg-indigo-600">Dashboard</button>
                    <button id="usersLink" class="block w-full text-left cursor-pointer p-2 rounded-md hover:bg-indigo-600">Users</button>
                    <!-- update password button to trigger modal -->
                    <button id="updatePasswordLink" class="block w-full text-left cursor-pointer p-2 rounded-md text-white hover:bg-indigo-600">
                        Update Password
                    </button>

                    <!-- logout button -->
                    <a href="{{route('logoutadmin')}}" class="block w-full text-left cursor-pointer p-2 rounded-md hover:bg-indigo-600">Logout</a>
                </div>
            </div>

            <!-- Main Content Area -->
            <div class="flex-1 flex flex-col overflow-hidden ml-0 md:ml-64">
                <!-- Top Navbar -->
                <header class="md:hidden bg-indigo-600 text-white flex justify-between items-center shadow-md px-6 py-4">
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
                    <div id="dashboardView" class="">
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
                            <div class="bg-white shadow rounded-lg p-4">
                                <h3 class="text-lg font-semibold mb-2">Total Users</h3>
                                <p class="text-2xl" id="totalUsersCount">123</p> <!-- Static value, will be updated dynamically -->
                            </div>
                        </div>
                    </div>

                    @if ($users->isEmpty())
                    <p>No users found.</p>
                    @else
                    {{ $users[0]['courseName']}}
                    @endif
                    <!-- Users View -->
                    <div id="usersView" class="hidden">
                        <div class="bg-white shadow rounded-lg p-4">
                            <div class="flex justify-between mb-4">
                                <h3 class="text-lg font-semibold">Users List</h3>
                                <button class="bg-green-600 py-2 px-4 rounded text-white font-bold">Download Pdf</button>
                            </div>
                            <!-- user show in table body -->
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

                                        @foreach ($users as $user)
                                        <tr class="hover:bg-gray-100">
                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{$user['id']}}</td>
                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{$user['username	']}}</td>
                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{$user['email']}}</td>
                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{$user['course_Enroll_Date']}}</td>
                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{$user['courseName']}}</td>
                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{$user['phone_Number']}}</td>
                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{$user['job_role']}}</td>
                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{$user['country']}}</td>
                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{$user['service']}}</td>
                                            <td class="text-center px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                <button class="bg-red-500 p-1 rounded px-3 text-white">Delete</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Update Password View -->
                    <div id="updatePasswordView">

                        <form
                            action="{{ route('updateadminPassword')}}"
                            method="post">
                            @csrf
                            <!-- Modal (Initially hidden) -->
                            <div id="updatePasswordModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
                                <div class="bg-white p-6 rounded-lg shadow-lg max-w-sm w-full">
                                    <h2 class="text-2xl font-bold mb-4 text-center">Update Password</h2>
                                    <!-- email -->
                                    <div class="flex flex-col mb-4">
                                        <label class="text-gray-700">Email</label>
                                        <input
                                            name="email"
                                            type="email" id="email" required class="mt-1 p-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter your email" />
                                    </div>
                                    <!-- current password -->
                                    <div class="flex flex-col mb-4">
                                        <label class="text-gray-700">Current Password</label>
                                        <input name="currentPassword" type="password" id="currentPassword" required class="mt-1 p-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter current password" />
                                    </div>
                                    <!-- new password -->
                                    <div class="flex flex-col mb-4">
                                        <label class="text-gray-700">New Password</label>
                                        <input
                                            name="newPassword"
                                            type="password" id="newPassword" required class="mt-1 p-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter new password" />
                                    </div>

                                    <div id="errorMessage" class="text-red-500 hidden mb-4">All fields are required!</div>
                                    <div class="flex justify-end">
                                        <button id="closeModal" class="bg-gray-500 text-white px-4 py-2 rounded-lg ml-2">Cancel</button>
                                        <input type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg ml-2">
                                    </div>
                                </div>

                            </div>

                        </form>

                    </div>

                </main>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script>
        // Toggle left Sidebar 
        const sidebar = document.getElementById('sidebar');
        const sidebarToggle = document.getElementById('sidebarToggle');
        const menuIcon = document.getElementById('menuIcon');
        const closeIcon = document.getElementById('closeIcon');
        sidebarToggle.addEventListener('click', () => {
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

        // Handle Navigation
        document.getElementById('dashboardLink').addEventListener('click', () => {
            document.getElementById('dashboardView').classList.remove('hidden');
            document.getElementById('usersView').classList.add('hidden');
            document.getElementById('updatePasswordView').classList.add('hidden');
        });

        document.getElementById('usersLink').addEventListener('click', () => {
            document.getElementById('dashboardView').classList.add('hidden');
            document.getElementById('usersView').classList.remove('hidden');
            document.getElementById('updatePasswordView').classList.add('hidden');
        });

        document.getElementById('updatePasswordLink').addEventListener('click', () => {
            // document.getElementById('dashboardView').classList.add('hidden');
            // document.getElementById('usersView').classList.add('hidden');
            document.getElementById('updatePasswordView').classList.remove('hidden');
            document.getElementById('updatePasswordModal').classList.remove('hidden');
        });




        // modal js Get elements of modal form and validate
        const emailInput = document.getElementById("email");
        const currentPasswordInput = document.getElementById("currentPassword");
        const newPasswordInput = document.getElementById("newPassword");
        const submitButton = document.getElementById("submitPassword");
        const errorMessage = document.getElementById("errorMessage");
        const updatePasswordLink = document.getElementById("updatePasswordLink");
        const updatePasswordModal = document.getElementById("updatePasswordModal");
        const closeModalButton = document.getElementById("closeModal");

        // Show modal when "Update Password" button is clicked
        updatePasswordLink.addEventListener("click", () => {
            updatePasswordModal.classList.remove("hidden");
        });

        // Close modal when "Cancel" button is clicked
        closeModalButton.addEventListener("click", () => {
            updatePasswordModal.classList.add("hidden");
        });

        // Add event listener to the submit button
        submitButton.addEventListener("click", (e) => {
            e.preventDefault(); // Prevent form submission

            // Get values
            const email = emailInput.value.trim();
            const currentPassword = currentPasswordInput.value.trim();
            const newPassword = newPasswordInput.value.trim();

            // Validate fields
            if (!email || !currentPassword || !newPassword) {
                // Show error message
                errorMessage.classList.remove("hidden");
                errorMessage.textContent = "All fields are required!";
                return;
            }

            // Hide error message if validation passes
            errorMessage.classList.add("hidden");

            // Print values in the console
            console.log("Email:", email);
            console.log("Current Password:", currentPassword);
            console.log("New Password:", newPassword);
        });
    </script>
</body>

</html>