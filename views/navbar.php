<body class="bg-gray-100 font-family-karla lg:flex md:flex xl:flex 2xl:flex ">


<!-- DESKTOP -->
<aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
        <div class="p-6 transition ease-in-out delay-150 hover:scale-105">
            <a href="index.php" class="text-white text-3xl font-semibold uppercase hover:text-amber-300 " >Stan Rainier Salazar</a>
        </div>
        <nav class="text-white text-base font-semibold pt-3 ">
            <a href="index.php" class="flex items-center text-white opacity-75 hover:opacity-100 active-nav-link py-4 pl-6 nav-item hover:text-amber-300 transition ease-in-out delay-150 hover:scale-105">
                <i class="fa-solid fa-house mr-3"></i>
                Home
            </a>
            <a href="addStudent.php" class="flex items-center  text-white py-4 pl-6 nav-item hover:text-amber-300 transition ease-in-out delay-150 hover:scale-105">
                <i class="fas fa-light fa-plus mr-3"></i>
                Add Student
            </a>
            <a href="studentList.php" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item active-nav-link hover:text-amber-300 transition ease-in-out delay-150 hover:scale-105">
                <i class="fas fa-table mr-3"></i>
                Student List
            </a>            
            <a href="addCourse.php" class="flex items-center  text-white py-4 pl-6 nav-item hover:text-amber-300 transition ease-in-out delay-150 hover:scale-105">
                <i class="fas fa-light fa-plus mr-3"></i>
                Add Course
            </a>
            <a href="courseList.php" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item active-nav-link hover:text-amber-300 transition ease-in-out delay-150 hover:scale-105">
                <i class="fas fa-table mr-3"></i>
                Course List
            </a>
        </nav>
    </aside>
<!-- Mobile -->
    <div class="relative w-full flex flex-col  overflow-y-hidden md:hidden lg:hidden xl:hidden 2xl:hidden">
        <!-- Mobile Header & Nav -->
        <header x-data="{ isOpen: false }" class="w-full bg-gradient-to-r from-cyan-500 to-blue-500 py-5 px-6 sm:hidden">
            <div class="flex items-center justify-between">
                <a href="index.php" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Stan</a>
                <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
                    <i x-show="!isOpen" class="fas fa-bars"></i>
                    <i x-show="isOpen" class="fas fa-times"></i>
                </button>
            </div>

            <!-- Dropdown Nav -->
            <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4 ">
            <a href="index.php" class="flex items-center text-white opacity-75 hover:opacity-100 active-nav-link py-4 pl-6 nav-item hover:text-amber-300 transition ease-in-out delay-150 hover:scale-105">
                <i class="fa-solid fa-house mr-3"></i>
                Home
            </a>
            <a href="addStudent.php" class="flex items-center  text-white py-4 pl-6 nav-item hover:text-amber-300 transition ease-in-out delay-150 hover:scale-105">
                <i class="fas fa-light fa-plus mr-3"></i>
                Add Student
            </a>
            <a href="studentList.php" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item active-nav-link hover:text-amber-300 transition ease-in-out delay-150 hover:scale-105">
                <i class="fas fa-table mr-3"></i>
                Student List
            </a>            
            <a href="addCourse.php" class="flex items-center  text-white py-4 pl-6 nav-item hover:text-amber-300 transition ease-in-out delay-150 hover:scale-105">
                <i class="fas fa-light fa-plus mr-3"></i>
                Add Course
            </a>
            <a href="courseList.php" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item active-nav-link hover:text-amber-300 transition ease-in-out delay-150 hover:scale-105">
                <i class="fas fa-table mr-3"></i>
                Course List
            </a>
            </nav>
            <!-- <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                <i class="fas fa-plus mr-3"></i> New Report
            </button> -->
        </header>
    </div>
</body>


