<?php 

class BMIPasien{
	public  $id,
		    $tanggal,
		    $pasien,
		    $BMI;

	public function __construct($id,$tanggal, $pasien, $BMI){
			$this->id=$id;
			$this->tanggal=$tanggal;
			$this->pasien=$pasien;
			$this->BMI=$BMI;
	}
}

 ?>
