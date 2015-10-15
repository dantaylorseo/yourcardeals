<?php 
// Calculator Script v1 
// Copyright (C) 2007 RageD 

// Define to make this all one document 
$page = $_GET['page']; 

// Defining the "calc" class 
class calc { 
     var $number1; 
     var $number2; 

          function calculate($number1,$number2,$number3) 
          { 
                   $result =$number1 * $number2 * $number3; 
                    echo("The sum of $number1 and $number2 is $result<br><br>"); 
                    echo("$number1 + $number2 = $result"); 
                    exit; 
           } 

          function subtract($number1,$number2) 
          { 
                   $result =$number1 - $number2; 
                    echo("The difference of $number1 and $number2 is $result<br><br>"); 
                    echo("$number1 &#045 $number2 = $result"); 
                    exit; 
           } 

          function divide($number1,$number2) 
          { 
                   $result =$number1 / $number2; 
                    echo("$number1 divided by $number2 is $result<br><br>"); 
                    echo("$number1 ÷ $number2 = $result"); 
                    exit; 
           } 

          function multiply($number1,$number2) 
          { 
                   $result =$number1 * $number2; 
                    echo("The product of $number1 and $number2 is $result<br><br>"); 
                    echo("$number1 x $number2 = $result"); 
                    exit; 
           } 
} 
$calc = new calc(); 
?> 
<TITLE>Vehicle Lease Calculator</TITLE> 
<form name="calc" action="?page=calc" method="POST"> 
Per Month: <input type=text name=value1><br> 
Deposit: <select name="value2" type="text" id="model">
  <option value="Deposit">Deposit</option>
  <option value="3">3</option>
  <option value="6">6</option>
  <option value="9">9</option>
</select>

<br> 
Length: <select name="value3" type="text" id="model"><br>
<option value="Lease">Lease Length</option>
  <option value="12">12</option>
  <option value="24">24</option>
  <option value="36">36</option>
  <option value="48">48</option>  
</select>

<br> 
<input type=submit name=oper value="calculate"> 
</form> 


<?php 
if($page == "calc"){ 
$number1 = $_POST['value1']; 
$number2 = $_POST['value2']; 
$number3 = $_POST['value3']; 
$oper = $_POST['oper']; 
     if(!$number1){ 
          echo("You must enter number 1!"); 
          exit; 
     } 
     if(!$number2){ 
          echo("You must enter number 2!"); 
          exit; 
     } 
     if(!$oper){ 
          echo("You must select an operation to do with the numbers!"); 
          exit; 
     } 
     if(!eregi("[0-9]", $number1)){ 
          echo("Number 1 MUST be numbers!"); 
          exit; 
     } 
     if(!eregi("[0-9]", $number2)){ 
          echo("Number 2 MUST be numbers!"); 
          exit; 
     } 
     if($oper == "calculate"){ 
          $calc->calculate($number1,$number2,$number3); 
     } 
     if($oper == "subtract"){ 
          $calc->subtract($number1,$number2); 
     } 
     if($oper == "divide"){ 
          $calc->divide($number1,$number2); 
     } 
     if($oper == "multiply"){ 
          $calc->multiply($number1,$number2); 
     } 
} 
?>