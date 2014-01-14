<html>
<head>
<title>Online PHP Script Execution</title>
</head>
<body>
<?php
   echo "<h1>Hello, PHP!</h1>";
   class A {
    //privsate $ar = array ("abc" => "mpq", "edf" => "345");
    private $profile = 
  	array(
			"uid"=>"anonymous", 
			'firstName'=>'Fence', 
			'lastName'=>'Cracker', 
			'gender'=>'M', 
			'DOB'=>'1999-09-09', 
			'year'=>'SO', 
			'major1'=>'MATH', 
			'major2'=>'CS', 
			'musicListening'=>'headphone', 
			'visitors'=>'sometimes', 
			'cleanness'=>'weekly', 
			'sleepTime'=>'12-2', 
			'wakeTime'=>'7-9', 
			'call'=>'919-666-9999', 
			'email'=>'fence.cracker@gmail.com', 
			'facebook'=>'http://www.facebook.com/fence.cracker',
			'aboutMe'=>'An nice, easy-going and patient person', 
			'profilePhotoURL'=>'/image/users/fencecracker.jpg'
		); //profile, contact
    public function show(){
      var_dump($this->profile);
      echo "<hr>";
      echo json_encode($this->profile);
    }
   }
   $a = new A();
   $a->show();
   
?>
</body>
</html>
