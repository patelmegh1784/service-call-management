<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

if(isset($_POST['submit'])){

   $email1 = $_POST['email'];
   $email1 = filter_var($email1, FILTER_SANITIZE_STRING);
   $pass = sha1($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);

   $select_user = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
   $select_user->execute([$email1, $pass]);
   $row = $select_user->fetch(PDO::FETCH_ASSOC);

   if($select_user->rowCount() > 0){
      $_SESSION['user_id'] = $row['id'];
      header('location:home.php');
   }else{
      $message[] = 'incorrect email or password!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <script src=js/password.js></script>

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <input type="email" name="email" required placeholder="enter your email" minlength="8" maxlength="50"  class="box" oninput="this.value = this.value.replace(/\s/g, '')" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$">
      <input type="password" name="pass" required placeholder="enter your password" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" id="typepass">
      <i style="font-size:24px; float: right;
  margin-left: -25px;
  margin-top: 20px;
  position: relative;
  z-index: 2;" class="fa" onclick="Toggle()">&#xf06e;</i>

      
      
      <input type="submit" value="login now" class="btn" name="submit">
      <p>if you don't remember ? </p>
      <a href="forget.php" class="option-btn"> forget now</a>
      <p>don't have an account?</p>
      <a href="user_register.php" class="delete-btn">register now</a>
   </form>

</section>













<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>