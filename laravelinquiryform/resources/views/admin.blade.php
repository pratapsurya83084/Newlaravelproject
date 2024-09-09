<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
</head>
<body>
<div class="admin-panel">
        <aside class="sidebar">
            <h2>Admin Panel</h2>
            <nav>
                <ul>
                    <li><a href="#" onclick="showSection('dashboard')">Dashboard</a></li>
                    <li><a href="#" onclick="showSection('users')">Users</a></li>
                    <li><a href="#" onclick="showSection('update-password')">Update Password</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </nav>
        </aside>
        <main class="main-content">
            <header>
                <h1 id="main-header">Dashboard</h1>
            </header>
            <section id="dashboard" class="content-section">
                <h2>Welcome to the Admin Panel</h2>
                <p>Here you can manage your site, view reports, and configure settings.</p>
            </section>


            <section id="users" class="content-section" style="display: none;">
                <h2>Users List</h2>
                <!-- <p>Here you can manage user data.</p> -->

                <!-- Add your user data table or list here -->
            </section>

            <section id="update-password" class="content-section" style="display: none;">
                <h2>Update Password</h2>
                <form id="update-password-form">
                    <label for="current-password">Current Password:</label>
                    <input type="password" id="current-password" name="current-password" required>
                    <br>
                    <label for="new-password">New Password:</label>
                    <input type="password" id="new-password" name="new-password" required>
                    <br>
                    <label for="confirm-password">Confirm New Password:</label>
                    <input type="password" id="confirm-password" name="confirm-password" required>
                    <br>
                    <button type="submit">Update Password</button>
                </form>
            </section>


        </main>
    </div>

    <script>
        function showSection(sectionId) {
            const sections = document.querySelectorAll('.content-section');
            sections.forEach(section => {
                section.style.display = section.id === sectionId ? 'block' : 'none';
            });

            const headers = {
                'dashboard': 'Dashboard',
                'users': 'Users',
                'update-password': 'Update Password'
            };
            document.getElementById('main-header').textContent = headers[sectionId];
        }
    </script>
</body>
</html>
