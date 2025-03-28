<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Department | Employee System</title>
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

            <!-- Main Container -->
            <div class="flex-1 md:ml-64 p-6">
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-2xl font-semibold text-gray-800">Edit Department</h1>
                    <nav class="text-sm text-gray-500">
                        <a href="#" class="hover:text-blue-600">Home</a> > 
                        <a href="addDepartment.php" class="hover:text-blue-600">Add Department</a> > 
                        <span class="text-gray-700">Edit Department</span>
                    </nav>
                </div>

                <!-- Edit Department Form -->
                <div class="bg-white rounded-lg shadow card-hover p-6">
                    <h2 class="text-xl font-semibold text-blue-600 mb-4">Edit Department</h2>
                    <form>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Department</label>
                                <input type="text" name="departadd" class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                        </div>
                        <div class="mt-4 flex space-x-4 justify-end">
                            <a href="addDepartment.php">
                                <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600 transition duration-200">
                                    Cancel
                                </button>
                            </a>
                            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition duration-200 flex items-center">
                                <i class="fas fa-plus-circle mr-2"></i> Edit Department
                            </button>
                        </div>
                    </form>
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