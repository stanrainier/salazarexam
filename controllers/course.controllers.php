<?php 
require_once "../models/course.model.php";

class ControllerCourse{
	static public function addCourse(){

		if(isset($_POST["cName"])){
			$table = "course";
			$data = array(
						"cName"=>$_POST["cName"],
						"cCode"=>$_POST["cCode"],
						"cCredits"=>$_POST["cCredits"],
						"cRoom"=>$_POST["cRoom"]);
			
			$answer = (new CourseModel)->mdlAddCourse($table,$data);
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
                        window.location = "addCourse.php";
			          }
			        })
			    </script>';    
			}

		}
	}
	static public function ctrShowCourse(){
		$answer = (new CourseModel)->mdlShowCourse();
		return $answer;
	}

}

?>