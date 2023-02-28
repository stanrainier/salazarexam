<!DOCTYPE html>
<html lang=>
<?php
include "template.php";

?>
<body class="bg-gray-100 font-family-karla flex">
    <div class="relative w-full flex  h-screen  ">
        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            <main class="w-full p-6">
                <h1 class="w-full text-3xl text-black pb-6 bg-amber-300 transition ease-in-out delay-200 hover:bg-blue-700 hover:text-white font-extrabold text-center pt-5">Add Student</h1>
                <div class="flex flex-wrap">
                    <div class="w-full mt-6 pl-0 lg:pl-2 justify-self-auto">
                        <p class="text-xl pb-6 flex items-center">
                            <i class="fas fa-list mr-3"></i> Student Form
                        </p>
                        <div class="leading-loose">
                            <form class="p-10 bg-white rounded shadow-xl" method="post" id="studentForm">
                                <p class="text-lg text-gray-800 font-medium pb-4">Student information</p>
                                <div class="">
                                    <label class="block text-sm text-gray-600" for="sName">Full Name</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="sName" name="sName" type="text" required placeholder="Student Name" aria-label="Full Name" autocomplete="off">
                                </div>
                                <div class="mt-2">
                                    <label class="block text-sm text-gray-600" for="sCourse">Course</label>
                                    <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="sCourse" name="sCourse" type="text" required="" placeholder="Course" aria-label="Course " autocomplete="off">
                                </div>
                                <div class="mt-2">
                                    <label class=" block text-sm text-gray-600" for="sAge">Age</label>
                                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="sAge" name="sAge" type="text" required="" placeholder="Age" aria-label="Age" autocomplete="off">
                                </div>
                                <div class="mt-2">
                                    <label class=" text-sm block text-gray-600" for="sGender">Gender</label>
                                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="sGender" name="sGender" type="text" required="" placeholder="Gender" aria-label="Gender" autocomplete="off">
                                </div>
                                <div class="mt-6  flex justify-end">
                                    <button class="px-4 py-1 text-white font-light tracking-wider bg-cyan-500 hover:bg-cyan-700 rounded transition ease-in-out delay-150 hover:scale-105" type="submit">Add Student</button>
                                    <button class="px-4 py-1 text-white font-light tracking-wider bg-rose-500 hover:bg-rose-700 rounded ml-3 transition ease-in-out delay-150 hover:scale-105" id="clearButton" onclick="clearForm()">Clear</button>
                                </div>
                <?php 
                        require_once "../controllers/student.controllers.php";
                        $addboarder = new ControllerStudent();
                        $addboarder -> addStudent();
                ?>                                
                            </form>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>


</html>
