<!DOCTYPE html>
<html lang=>
<?php
include "template.php";


?>
<body class="bg-gray-100 font-family-karla flex">
    <div class="relative w-full flex  h-screen overflow-y-hidden">
        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            <main class="w-full p-6">
                <h1 class="w-full text-3xl text-black pb-6 bg-amber-300 transition ease-in-out delay-200 hover:bg-blue-700 hover:text-white font-extrabold text-center pt-5">Add New Course</h1>
                <div class="flex flex-wrap">
                    <div class="w-full mt-6 pl-0 lg:pl-2 justify-self-auto">
                        <p class="text-xl pb-6 flex items-center">
                            <i class="fas fa-list mr-3"></i> Course Form
                        </p>
                        <div class="leading-loose">
                            <form class="p-10 bg-white rounded shadow-xl" method="post">
                                <p class="text-lg text-gray-800 font-medium pb-4">Course Information</p>
                                <div class="">
                                    <label class="block text-sm text-gray-600" for="cName">Course Name</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="cName" name="cName" type="text" required placeholder="Course Name" aria-label="Course Name" autocomplete="off">
                                </div>
                                <div class="mt-2">
                                    <label class="block text-sm text-gray-600" for="cCode">Course Code</label>
                                    <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="cCode" name="cCode" type="text" required="" placeholder="Course Code" aria-label="Course" autocomplete="off">
                                </div>
                                <div class="mt-2">
                                    <label class=" block text-sm text-gray-600" for="cCredits">Credits</label>
                                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cCredits" name="cCredits" type="text" required="" placeholder="Credits" aria-label="Credits" autocomplete="off">
                                </div>
                                <div class="mt-2">
                                    <label class=" text-sm block text-gray-600" for="cRoom">Room</label>
                                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cRoom" name="cRoom" type="text" required="" placeholder="Room" aria-label="Room" autocomplete="off">
                                </div>
                                <div class="mt-6 flex justify-end">
                                    <button class="px-4 py-1 text-white font-light tracking-wider bg-cyan-500 hover:bg-cyan-700 rounded justify-self-end transition ease-in-out delay-150 hover:scale-105" type="submit">Add Course</button>
                                    <button class="px-4 py-1 text-white font-light tracking-wider bg-rose-500 hover:bg-rose-700 rounded ml-3 transition ease-in-out delay-150 hover:scale-105" type="">Clear</button>
                                </div>
                <?php 
                        require_once "../controllers/course.controllers.php";
                        $addboarder = new ControllerCourse();
                        $addboarder -> addCourse();
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
