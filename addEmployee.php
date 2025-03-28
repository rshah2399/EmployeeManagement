<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Employee | Employee System</title>
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
                    <h1 class="text-2xl font-semibold text-gray-800">Add Employee</h1>
                    <nav class="text-sm text-gray-500">
                        <a href="#" class="hover:text-blue-600">Home</a> > <span class="text-gray-700">Add Employee</span>
                    </nav>
                </div>

                <!-- Add Employee Form -->
                <div class="bg-white rounded-lg shadow card-hover p-6 mb-6">
                    <h2 class="text-xl font-semibold text-blue-600 mb-4">Add New Employee</h2>
                    <form>
                        <!-- Personal Details -->
                        <h3 class="text-lg font-medium text-gray-800 mb-2">Personal Details</h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
                                <input type="text" name="fname" class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Middle Name</label>
                                <input type="text" name="mname" class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
                                <input type="text" name="lname" class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                <input type="email" name="email" class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                                <input type="tel" name="number" class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Gender</label>
                                <div class="flex space-x-4">
                                    <label><input type="radio" name="gender" value="Male"> Male</label>
                                    <label><input type="radio" name="gender" value="Female"> Female</label>
                                    <label><input type="radio" name="gender" value="Others"> Others</label>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Address</label>
                                <textarea name="address" rows="3" class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Date of Birth</label>
                                <input type="date" name="dob" class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Blood Group</label>
                                <input type="text" name="blood" class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                                <input type="password" name="password" class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                        </div>

                        <!-- Documents -->
                        <h3 class="text-lg font-medium text-gray-800 mb-2">Documents</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Aadhar Number</label>
                                <input type="number" name="aadhno" class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Aadhar Upload</label>
                                <input type="file" name="aadhup" class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Pan Number</label>
                                <input type="text" name="panno" class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Pan Upload</label>
                                <input type="file" name="panup" class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Resume Upload</label>
                                <input type="file" name="resume" class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                        </div>

                        <!-- Other Details -->
                        <h3 class="text-lg font-medium text-gray-800 mb-2">Other Details</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Date of Joining</label>
                                <input type="date" name="doj" class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Designation</label>
                                <select name="desig" class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    <option value="-1">Select An Option</option>
                                    <option value="Front-End Developer">Front-End Developer</option>
                                    <option value="Back-End Developer">Back-End Developer</option>
                                </select>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                                <select name="category" class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    <option value="-1">Select An Option</option>
                                    <option value="Intern">Intern</option>
                                    <option value="Junior Developer">Junior Developer</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Department</label>
                                <select name="depart" class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    <option value="-1">Select An Option</option>
                                    <option value="Web">Web</option>
                                    <option value="Android">Android</option>
                                </select>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Salary</label>
                                <input type="number" name="salary" class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                        </div>

                        <button type="submit" class="mt-4 bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition duration-200 flex items-center">
                            <i class="fas fa-plus-circle mr-2"></i> Add Employee
                        </button>
                    </form>
                </div>

                <!-- View All Employees -->
                <div class="bg-white rounded-lg shadow card-hover p-6">
                    <h2 class="text-xl font-semibold text-blue-600 mb-4">View All Employees</h2>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left">
                            <thead>
                                <tr class="border-b">
                                    <th class="py-3 px-4 text-gray-600">Sr. No.</th>
                                    <th class="py-3 px-4 text-gray-600">Name</th>
                                    <th class="py-3 px-4 text-gray-600">Phone Number</th>
                                    <th class="py-3 px-4 text-gray-600">Designation</th>
                                    <th class="py-3 px-4 text-gray-600">Department</th>
                                    <th class="py-3 px-4 text-gray-600">Salary</th>
                                    <th class="py-3 px-4 text-gray-600">Operations</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b hover:bg-gray-50">
                                    <td class="py-3 px-4">1</td>
                                    <td class="py-3 px-4">Rahil</td>
                                    <td class="py-3 px-4">9876543219</td>
                                    <td class="py-3 px-4">Front-End-Developer</td>
                                    <td class="py-3 px-4">Web</td>
                                    <td class="py-3 px-4">30000</td>
                                    <td class="py-3 px-4">
                                        <a href="editEmployee.php" class="text-blue-600 hover:text-blue-800 mr-2 update">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="deleteEmployee.php" class="text-red-600 hover:text-red-800 delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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