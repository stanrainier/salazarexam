<?php 
require_once "../models/student.model.php";

class ControllerStudent{
	static public function addStudent(){

		if(isset($_POST["sName"])){
			$table = "students";
			$data = array(
						"sName"=>$_POST["sName"],
						"sCourse"=>$_POST["sCourse"],
						"sAge"=>$_POST["sAge"],
						"sGender"=>$_POST["sGender"]);
			
			$answer = (new StudentModel)->mdlAddStudent($table,$data);
			   	if($answer == "ok"){
				echo'<script>
                    Swal.fire({
			          title: "Boarder details successfully appended!",
			          icon: "success",
			          confirmButtonText: "Proceed",
			          confirmButtonClass: "btn btn-outline-success",
			          allowOutsideClick: false,
			          buttonsStyling: false,
			        }).then(function(answer){
			          if(result.value) {
                        window.location = "addStudent.php";
			          }
			        })
			    </script>';    
			}

		}
	}
	static public function ctrShowStudents(){
		$answer = (new StudentModel)->mdlShowStudent();
		return $answer;
	}

}

?>