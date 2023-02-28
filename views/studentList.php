<html lang="en">
<?php
include "template.php"
?>

<body class="bg-gray-100 font-family-karla flex">
    <div class="relative w-full flex flex-col h-screen overflow-y-hidden">
        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6 ">
                <h1 class="w-full text-3xl text-black pb-6 bg-amber-300 transition ease-in-out delay-200 hover:bg-blue-700 hover:text-white font-extrabold text-center pt-5">Student List</h1>
                <div class="w-full mt-6">
                    <div class="p-10 bg-white rounded shadow-xl">
                    <h1 class="text-xl pb-3 flex items-center">
                        <i class="fas fa-list mr-3"></i> Student Table
                    </h1>
                    <form id="searchForm" class="mb-4">
                        <input id="searchQuery" type="text" placeholder="Search..." class="w-full py-2 px-3 mt-3 mb-4 rounded-lg border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent" onkeyup="filterTable()">
                    </form>
                    <div class="bg-white overflow-auto">
                        <table class="min-w-full bg-white table-fixed leading-loose " id="studentTable">
                            <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Student ID</th>
                                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Student Name</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Course</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Age</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Gender</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700 ">
                            <?php
                               require_once "../controllers/student.controllers.php";
                                $student = (new ControllerStudent)->ctrShowStudents();
                                foreach ($student as $key => $value) {
                                  echo '<tr class="hover:bg-amber-200 hover:font-bold ">
                                          <td>'.$value["student_id"].'</td>
                                          <td>'.$value["sName"].'</td>
                                          <td>'.$value["sCourse"].'</td>
                                          <td>'.$value["sAge"].'</td>  
                                          <td>'.$value["sGender"].'</td>
                                        </tr>';
                                  }
                              ?>                                
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
<script>
function filterTable() {
  var input, filter, table, tr, td, i, j, txtValue;
  input = document.getElementById("searchQuery");
  filter = input.value.toUpperCase();
  table = document.getElementById("studentTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {

    for (j = 0; j < tr[i].getElementsByTagName("td").length; j++) {
      td = tr[i].getElementsByTagName("td")[j];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
          break;
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }
}

</script>
</html>
