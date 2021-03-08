<?php
require_once 'technical.php';

$c1 =  new technical();
	var_dump($c1); 
		echo "<br/>"; 

    print_r($c1); 

      echo "<br/>"; 

    var_export($c1); 

      echo "<br/>"; 

     $c1-> setEmployeeName("heru","MR",5000000);
     echo "$c1<br/>";

     echo "name = {$c1 -> getEmployeeProfile()}";
     echo "tittle = {$c1  -> getEmployeeTittle()}";
     echo "salary = {$c1 -> getEmployeeMonthlySalary()}"; 
?>