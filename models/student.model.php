<?php
require_once "connection.php";

class StudentModel{
	static public function mdlAddStudent($table, $data){
		$student_id = (new Connection)->connect()->prepare("SELECT CONCAT('S', LPAD((count(id)+1),4,'0')) as gen_id FROM students FOR UPDATE");

		$student_id->execute();
		$student_id = $student_id -> fetchAll(PDO::FETCH_ASSOC);

		$stmt = (new Connection)->connect()->prepare("INSERT INTO $table(student_id, sName, sCourse, sAge, sGender) VALUES(:student_id, :sName, :sCourse, :sAge, :sGender)");

		$stmt->bindParam(":student_id", $student_id[0]['gen_id'], PDO::PARAM_STR); 
		$stmt->bindParam(":sName", $data['sName'], PDO::PARAM_STR);
		$stmt->bindParam(":sCourse", $data['sCourse'], PDO::PARAM_STR);
		$stmt->bindParam(":sAge", $data['sAge'], PDO::PARAM_INT);
		$stmt->bindParam(":sGender", $data['sGender'], PDO::PARAM_STR);
	
		if($stmt->execute()){
			return "ok";
		}else{
			return "error";
		}

		$stmt->close();
		$stmt = null;
	}
	static public function mdlShowStudent(){
		$stmt = (new Connection)->connect()->prepare("SELECT * FROM students ORDER BY student_id");
		$stmt -> execute();
		return $stmt -> fetchAll();
		$stmt -> close();
		$stmt = null;
	}	

}

?>