<?php
require_once "connection.php";

class CourseModel{
	static public function mdlAddCourse($table, $data){
		$course_id = (new Connection)->connect()->prepare("SELECT CONCAT('C', LPAD((count(id)+1),4,'0')) as gen_id FROM course FOR UPDATE");

		$course_id->execute();
		$course_id = $course_id -> fetchAll(PDO::FETCH_ASSOC);

		$stmt = (new Connection)->connect()->prepare("INSERT INTO $table(course_id, cName, cCode, cCredits, cRoom) VALUES(:course_id, :cName, :cCode, :cCredits, :cRoom)");

		$stmt->bindParam(":course_id", $course_id[0]['gen_id'], PDO::PARAM_STR); 
		$stmt->bindParam(":cName", $data['cName'], PDO::PARAM_STR);
		$stmt->bindParam(":cCode", $data['cCode'], PDO::PARAM_STR);
		$stmt->bindParam(":cCredits", $data['cCredits'], PDO::PARAM_INT);
		$stmt->bindParam(":cRoom", $data['cRoom'], PDO::PARAM_STR);
	
		if($stmt->execute()){
			return "ok";
		}else{
			return "error";
		}

		$stmt->close();
		$stmt = null;
	}
	static public function mdlShowCourse(){
		$stmt = (new Connection)->connect()->prepare("SELECT * FROM course ORDER BY course_id");
		$stmt -> execute();
		return $stmt -> fetchAll();
		$stmt -> close();
		$stmt = null;
	}	

}

?>