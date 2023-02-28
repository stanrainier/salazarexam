<!DOCTYPE html>
<html lang="en">
<?php
include "template.php"
?>

<!-- MOBILE -->
<div class="sm:block md:hidden flex">
<div class=" h-screen overflow-x-hidden border-t flex flex-col w-full h-full bg-gray-100">
    <div class="flex justify-center ">
        <h1 class="text-7xl font-extrabold text-black m-5">
            Mobile Portal
        </h1>

    </div>
    <div class="flex flex-col">
        <div class="bg-white rounded shadow-xl basis-1/2 m-5" >
            <a href="addStudent.php">
                <button class="w-full bg-amber-300 cta-btn font-semibold p-20  rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-blue-600 hover:text-amber-300 flex items-center justify-center transition ease-in-out delay-150 hover:scale-105" onclick="addStudent.php" >
                <i class="fa-solid fa-graduation-cap mr-3"></i></i> Add Student
                </button> 
            </a>
        </div>
      <div class="bg-white rounded shadow-xl basis-1/2 m-5">
        <a href="studentList.php">
            <button class="w-full bg-blue-700 text-amber-300 cta-btn font-semibold p-20  rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-blue-600 hover:text-amber-300 flex items-center justify-center transition ease-in-out delay-150 hover:scale-105 ">
            <i class="fa-solid fa-users mr-3"></i> Student List
            </button>
        </a>
      </div>
    </div>
    <div class="flex flex-col">
      <div class="bg-white rounded shadow-xl basis-1/2 m-5">
        <a href="addCourse.php">
            <button class="w-full bg-amber-300 cta-btn font-semibold p-20   rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-blue-600 hover:text-amber-300 flex items-center justify-center transition ease-in-out delay-150 hover:scale-105 ">
            <i class="fa-solid fa-award mr-3"></i> Add Course
            </button>
        </a>
      </div>
      <div class="bg-white rounded shadow-xl basis-1/2 m-5">
        <a href="courseList.php">
            <button class="w-full bg-blue-700 text-amber-300 cta-btn font-semibold p-20 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-blue-600 hover:text-amber-300 flex items-center justify-center transition ease-in-out delay-150 hover:scale-105 ">
            <i class="fa-solid fa-book mr-3"></i> Course List
            </button> 
        </a> 
        </div> 
    </div>
</div>
</div>






<!-- DESKTOP -->

<div class="hidden md:block h-screen overflow-x-hidden border-t flex flex-col w-full h-full ">
    <div class="flex justify-center transition ease-in-out delay-150 hover:scale-105 hover:text-amber-300">
        <h1 class="text-7xl font-extrabold">
            Portal
        </h1>
    </div>
    <div class="flex flex-row">
        <div class="bg-white rounded shadow-xl basis-1/2 m-5" >
            <a href="addStudent.php">
                <button class="w-full hover:bg-gradient-to-r from-cyan-500 to-blue-500 cta-btn font-semibold p-40  rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:text-amber-300  flex items-center justify-center transition ease-in-out delay-150 hover:scale-105" onclick="addStudent.php" >
                <i class="fa-solid fa-graduation-cap mr-3"></i></i> Add Student
                </button> 
            </a>
        </div>
      <div class="bg-white rounded shadow-xl basis-1/2 m-5">
        <a href="studentList.php">
            <button class="w-full hover:bg-gradient-to-r from-cyan-500 to-blue-500 cta-btn font-semibold p-40  rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:text-amber-300  flex items-center justify-center transition ease-in-out delay-150 hover:scale-105">
            <i class="fa-solid fa-users mr-3"></i> Student List
            </button>
        </a>
      </div>
    </div>
    <div class="flex flex-row">
      <div class="bg-white rounded shadow-xl basis-1/2 m-5">
        <a href="addCourse.php">
            <button class="w-full hover:bg-gradient-to-r from-cyan-500 to-blue-500 cta-btn font-semibold p-40  rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:text-amber-300  flex items-center justify-center transition ease-in-out delay-150 hover:scale-105">
            <i class="fa-solid fa-award mr-3"></i> Add Course
            </button>
        </a>
      </div>
      <div class="bg-white rounded shadow-xl basis-1/2 m-5">
        <a href="courseList.php">
            <button class="w-full hover:bg-gradient-to-r from-cyan-500 to-blue-500 cta-btn font-semibold p-40  rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:text-amber-300  flex items-center justify-center transition ease-in-out delay-150 hover:scale-105">
            <i class="fa-solid fa-book mr-3"></i> Course List
            </button> 
        </a> 
        </div> 
    </div>
</div>
</html>
<!-- <div class="h-screen overflow-x-hidden border-t flex flex-col ">
        <div class="p-10 bg-white rounded shadow-xl">
            <div class="w-full flex flex-row p-6 justify-evenly">
            
            <a href="studentList.php">
                <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                <i class="fas fa-plus mr-3"></i> Student List
                </button>
            </a>
            </div>
            <div class="w-full flex flex-row p-6">
            <a href="addCourse.php">
                <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                <i class="fas fa-plus mr-3"></i> Add Course
                </button>
            </a>
            <a href="courseList.php">
                <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                <i class="fas fa-plus mr-3"></i> Course List
                </button> 
            </a>
            </div>
        </div>
    </div> -->