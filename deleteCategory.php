<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Category | Employee System</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/img/logo1.png" type="image/gif" sizes="16x16">
    <style>
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
            <div class="flex-1 md:ml-64 p-6 flex items-center justify-center">
                <div class="bg-white rounded-lg shadow card-hover p-6 text-center">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Are you sure you want to delete it?</h3>
                    <div class="flex justify-center space-x-4">
                        <a href="addCategory.php">
                            <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition duration-200">
                                Not Now
                            </button>
                        </a>
                        <a href="">
                            <button class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700 transition duration-200 flex items-center">
                                <i class="fas fa-trash-alt mr-2"></i> Yes, delete it!
                            </button>
                        </a>
                    </div>
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