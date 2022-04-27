 <?php 
    
    $con = mysqli_connect('localhost','root','','registration');


   $name = $_POST['name'];
   $surname = $_POST['surname'];
   $student_id = $_POST['student_id'];
   $message = $_POST['message'];

   $query = "INSERT INTO feedback (name, surname, student_id, message) VALUES('$name','$surname','$student_id','$message')";
   mysqli_query($con,$query);
   header('location:index.php');



 
 ?>