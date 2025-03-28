<nav class="bg-white shadow-lg p-4 flex items-center justify-between navbar">
    <div class="flex items-center space-x-3">
        <a href="dashboard.php" class="flex items-center space-x-2">
            <img src="assets/img/logo1.png" class="h-10 w-auto nav-image" alt="Logo">
            <span class="text-xl font-semibold text-gray-800">Employee System</span>
        </a>
    </div>
    <div class="flex items-center space-x-4">
        <button class="md:hidden text-gray-600 hover:text-gray-800 sideNavToggle">
            <i class="fas fa-bars text-xl"></i>
        </button>
        <div class="relative">
            <button class="bg-blue-600 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-blue-700 transition duration-200" id="userDropdown">
                <i class="fas fa-user"></i>
            </button>
            <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg dropdown-menu hidden" id="dropdownMenu">
                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100"><i class="fas fa-edit mr-2"></i>Edit Profile</a>
                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100"><i class="fas fa-key mr-2"></i>Change Password</a>
                <div class="border-t border-gray-200"></div>
                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100"><i class="fas fa-lock mr-2"></i>Logout</a>
            </div>
        </div>
    </div>
</nav>
<script>
    document.getElementById('userDropdown').addEventListener('click', function() {
        document.getElementById('dropdownMenu').classList.toggle('hidden');
    });
</script>