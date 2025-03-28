<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | Employee System</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/img/logo1.png" type="image/gif" sizes="16x16">
    <style>
        .sidebar { transition: all 0.3s ease-in-out; }
        .card-hover:hover { transform: translateY(-2px); box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); }
        .dropdown-menu { transition: all 0.2s ease-in-out; }
        html, body { height: 100%; margin: 0; }
        .wrapper { min-height: 100%; display: flex; flex-direction: column; }
        .content { flex: 1 0 auto; }
        footer { flex-shrink: 0; }
    </style>
</head>
<body class="bg-gray-100 font-sans">
    <div class="wrapper">
        <!-- Navigation -->
        <?php include 'include/nav.php'; ?>

        <!-- Main Content -->
        <div class="flex min-h-screen content">
            <!-- Sidebar -->
            <div class="sidebar w-64 bg-white shadow-lg fixed h-full overflow-auto hidden md:block">
                <?php include 'include/sidebar.php'; ?>
            </div>

            <!-- Dashboard Content -->
            <div class="flex-1 md:ml-64 p-6">
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-2xl font-semibold text-gray-800">Dashboard</h1>
                    <nav class="text-sm text-gray-500">
                        <a href="#" class="hover:text-blue-600">Home</a> > <span class="text-gray-700">Dashboard</span>
                    </nav>
                </div>

                <!-- Dashboard Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                    <!-- Total Users -->
                    <div class="bg-white rounded-lg shadow card-hover p-4 flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-users fa-2x text-purple-500"></i>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-800">2300</h3>
                                <p class="text-sm text-gray-600">Total Users</p>
                            </div>
                        </div>
                    </div>

                    <!-- Premium Users -->
                    <div class="bg-white rounded-lg shadow card-hover p-4 flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-certificate fa-2x text-yellow-500"></i>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-800">1800</h3>
                                <p class="text-sm text-gray-600">Premium Users</p>
                            </div>
                        </div>
                    </div>

                    <!-- Blocked Users -->
                    <div class="bg-white rounded-lg shadow card-hover p-4 flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-ban fa-2x text-red-500"></i>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-800">800</h3>
                                <p class="text-sm text-gray-600">Blocked Users</p>
                            </div>
                        </div>
                    </div>

                    <!-- Admins -->
                    <div class="bg-white rounded-lg shadow card-hover p-4 flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-user-tie fa-2x text-green-500"></i>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-800">50</h3>
                                <p class="text-sm text-gray-600">Admins</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional Dashboard Widgets -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
                    <!-- Recent Activity Log -->
                    <div class="bg-white rounded-lg shadow card-hover p-6 lg:col-span-1">
                        <h2 class="text-lg font-semibold text-gray-800 mb-4">Recent Activity</h2>
                        <ul class="space-y-3">
                            <li class="flex items-center space-x-3">
                                <i class="fas fa-user-plus text-blue-500"></i>
                                <div>
                                    <p class="text-sm text-gray-700">New employee added: John Doe</p>
                                    <p class="text-xs text-gray-500">2 hours ago</p>
                                </div>
                            </li>
                            <li class="flex items-center space-x-3">
                                <i class="fas fa-lock text-red-500"></i>
                                <div>
                                    <p class="text-sm text-gray-700">User blocked: Jane Smith</p>
                                    <p class="text-xs text-gray-500">4 hours ago</p>
                                </div>
                            </li>
                            <li class="flex items-center space-x-3">
                                <i class="fas fa-certificate text-yellow-500"></i>
                                <div>
                                    <p class="text-sm text-gray-700">Premium upgrade: Alex Brown</p>
                                    <p class="text-xs text-gray-500">1 day ago</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- User Growth Chart Placeholder -->
                    <div class="bg-white rounded-lg shadow card-hover p-6 lg:col-span-2">
                        <h2 class="text-lg font-semibold text-gray-800 mb-4">User Growth (Last 30 Days)</h2>
                        <div class="h-64 flex items-center justify-center bg-gray-100 rounded-md">
                            <p class="text-gray-500">Chart Placeholder (e.g., Line Chart for User Growth)</p>
                        </div>
                    </div>
                </div>

                <!-- Quick Stats Table -->
                <div class="bg-white rounded-lg shadow card-hover p-6 mb-6">
                    <h2 class="text-lg font-semibold text-gray-800 mb-4">Quick Stats</h2>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left">
                            <thead>
                                <tr class="border-b">
                                    <th class="py-3 px-4 text-gray-600">Department</th>
                                    <th class="py-3 px-4 text-gray-600">Total Employees</th>
                                    <th class="py-3 px-4 text-gray-600">Avg. Salary</th>
                                    <th class="py-3 px-4 text-gray-600">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b hover:bg-gray-50">
                                    <td class="py-3 px-4">Web</td>
                                    <td class="py-3 px-4">120</td>
                                    <td class="py-3 px-4">$45,000</td>
                                    <td class="py-3 px-4">
                                        <span class="text-green-500">Active</span>
                                    </td>
                                </tr>
                                <tr class="border-b hover:bg-gray-50">
                                    <td class="py-3 px-4">Android</td>
                                    <td class="py-3.Concurrent Users</td>
                                    <td class="py-3 px-4">$42,000</td>
                                    <td class="py-3 px-4">
                                        <span class="text-green-500">Active</span>
                                    </td>
                                </tr>
                                <tr class="border-b hover:bg-gray-50">
                                    <td class="py-3 px-4">HR</td>
                                    <td class="py-3 px-4">30</td>
                                    <td class="py-3 px-4">$38,000</td>
                                    <td class="py-3 px-4">
                                        <span class="text-yellow-500">Pending</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Original Placeholder Content -->
                <div class="bg-white rounded-lg shadow card-hover p-6">
                    <h2 class="text-lg font-semibold text-gray-800 mb-4">Additional Information</h2>
                    <p class="text-gray-600">sds d<br>sds d<br>sds d<br>sds d<br>sds d<br>sds d</p>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <?php include 'include/footer.php'; ?>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>