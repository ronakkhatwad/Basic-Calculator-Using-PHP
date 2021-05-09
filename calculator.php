<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
     <div class="container">
    <div class="row justify-content-md-center">
       <div class="col-md-5">
          <h1 class="text-center">Calculator</h1>
         <form method="POST">
   <div class="form-group mb-2">
     <label for="formGroupExampleInput">Enter Number</label>
     <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Number" name="firstNumber">
   </div>
   <div class="form-group mb-2">
     <label for="formGroupExampleInput2">Enter Number</label>
     <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter Number" name="secondNumber">
   </div>
   <div class="form-group mb-2">
    <select class="form-control" name="operation">
      <option value="add">Add</option>
      <option value="sub">Sub</option>
      <option value="mul">Mul</option>
      <option value="div">Div</option>
    </select>
  </div>
  <br>
  <input type="submit" class="btn btn-primary"  name="submit" value="Submit">
 </form>
 <p>
<?php
if(isset($_POST['submit'])){

   if($_POST['firstNumber']!='' && $_POST['secondNumber']!=''){
   $firstNumber = $_POST['firstNumber'];
   $secondNumber = $_POST['secondNumber'];
   $operation = $_POST['operation'];
   switch ($operation) {
     case 'add':
     $ans = $firstNumber + $secondNumber;
      echo "The addition is {$ans}";
       break;
       case 'sub':
       $ans = $firstNumber - $secondNumber;
        echo "The subtraction is {$ans}";
         break;
         case 'mul':
         $ans = $firstNumber * $secondNumber;
          echo "The multiplication is {$ans}";
           break;
           case 'div':
           $ans = $firstNumber / $secondNumber;
            echo "The division is {$ans}";
             break;
     default:
      echo "Select a operation";
       break;
   }
}else{
    echo "Please Enter Number";
}

}
 ?>
 </p>
</div>
</div>
     </div>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     </body>
</html>
