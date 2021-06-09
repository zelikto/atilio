<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">

<?php 
session_start();

include("connection.php");
include("functions.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
{
  //something was posted
  $user_name = $_POST['user_name'];
  $password = $_POST['password'];

  if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
  {

    //read from database
    $query = "select * from users where user_name = '$user_name' limit 1";
    $result = mysqli_query($con, $query);

    if($result)
    {
      if($result && mysqli_num_rows($result) > 0)
      {

        $user_data = mysqli_fetch_assoc($result);
        
        if($user_data['password'] === $password)
        {

          $_SESSION['user_id'] = $user_data['user_id'];
          header("Location: index.php");
          die;
        }
      }
    }
    //echo "document.getElementById(\"error\").style..visibility = \"visible\"";
    //echo "$(\"#loader\").show().delay(1000).hide('slow')";

    echo '<script type="text/javascript">';
echo ' alert("wrong username or password!")';  //not showing an alert box.
echo '</script>';

  }else
  {
    echo "document.getElementById(\"error\").style..visibility = \"visible\"";
    echo "$(\"#loader\").show().delay(1000).hide('slow')";
  }
}





?>
<!-- Background & animion & navbar & title -->
  <div class="container-fluid">
<!-- Background animtion-->
    <div class="background">
       <div class="cube"></div>
       <div class="cube"></div>
       <div class="cube"></div>
       <div class="cube"></div>
      <div class="cube"></div>
    </div>
<!-- header -->
   <header>
   <style>
body {
    background: linear-gradient(132deg, #FC415A, #591BC5, #212335);
  background-size: 400% 400%;
  animation: Gradient 15s ease infinite;
  position: relative;
  height: 100vh;
  width: 100%;
  overflow: hidden;
  padding:0;
  margin:0px;
  font-family: 'Josefin Sans', sans-serif;
  box-sizing: border-box;
}
.container-fluid{
  height: 100%;
  margin: 0;
  padding: 0;
  width: 100%;
  background: #FFF;
}
/* ============= Animation background ========= */
.background {
  background: linear-gradient(132deg, #FC415A, #591BC5, #212335);
  background-size: 400% 400%;
  animation: Gradient 15s ease infinite;
  position: relative;
  height: 100vh;
  width: 100%;
  overflow: hidden;
  padding:0;
  margin:0px;
}
.cube {
  position: absolute;
  top: 80vh;
  left: 45vw;
  width: 10px;
  height: 10px;
  border: solid 1px #D7D4E4;
  transform-origin: top left;
  transform: scale(0) rotate(0deg) translate(-50%, -50%);
  animation: cube 12s ease-in forwards infinite;
}
.cube:nth-child(2n) {
  border-color: #FFF ;
}
.cube:nth-child(2) {
  animation-delay: 2s;
  left: 25vw;
  top: 40vh;
}
.cube:nth-child(3) {
  animation-delay: 4s;
  left: 75vw;
  top: 50vh;
}
.cube:nth-child(4) {
  animation-delay: 6s;
  left: 90vw;
  top: 10vh;
}
.cube:nth-child(5) {
  animation-delay: 8s;
  left: 10vw;
  top: 85vh;
}
.cube:nth-child(6) {
  animation-delay: 10s;
  left: 50vw;
  top: 10vh;
}
/* ================= Header ============ */
header{
  position: absolute;
  top:0%;
  left: 0%;
  width:100%;
  margin: 0;
  padding: 0;
}
/* navbar */
nav{
  color: #FFF;
  float: right;
  margin:30px 90px;
}
nav ul{
  list-style: none;
}
nav ul li {
  float: left;
  transition: .3s;
}
nav ul li a{
  text-decoration: none;
  color: #EFEEF5;
  transition: .5;
  font-size: 15px;
  margin-left:16px;
}
nav ul li:hover a{
  text-decoration: none;
  color: #fff;
}
nav ul li:hover{
  height: 20px;
  padding-top: 10px;
  margin-top: -16px;
  background: transparant;
  
  
}
/* Logo */
.logo{
  width: 150px;
  height: 35px;
  background: transparant;
  margin: 40px 63px;
  float: left;
  transform: rotate(0deg);
  
  
}
.logo span{
  color: white;
  font-size: 3em;
  line-height: 1.4;
  padding-left: 5px;
  font-weight: bold;
}
/* Header content & title & button*/
.header-content{
  margin-top:25%;
  text-align: center;
  color:  #EFEEF5;
}
.header-content h1{
  text-transform: uppercase;
  font-size: 3em;
  letter-spacing: 1px;
}
.header-content p {
  font-size: 20px;
  line-height: 1.5;
  margin: 20px auto;
}
.header-content button{
  width: 140px;
  margin:20px 10px;
  color: #591BC5;
  font-size: 17px;
  border:1px solid #EFEEF5;
  font-weight: 500;
  background: #EFEEF5;
  border-radius: 20px;
  padding: 10px;
  cursor:pointer;
  transition: .3s;
}
.header-content button:hover{
  border-radius: 0;
}
/* Animate Background*/
@keyframes Gradient {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}
@keyframes cube {
  from {
    transform: scale(0) rotate(0deg) translate(-50%, -50%);
    opacity: 1;
  }
  to {
    transform: scale(20) rotate(960deg) translate(-50%, -50%);
    opacity: 0;
  }
}
.ContactUsForm2{
  display : none;
}
#error
{
  color: red;
  visibility: hidden;
}
.wrapper{
    
    position: absolute;
    animation: expand .8s ease forwards;
    left: 0;
    top: 800px;
    bottom : 0;
    right : 0 ;
    width: 400px;
    height: 450px;
    margin : auto;
    background: #fff;
    border-radius: 15px;
    box-shadow: 0px 15px 20px rgba(0,0,0,0.3);
    transition: all .8s ease;
}
@keyframes expand {
  0% {
    transform: translateX(1400px);
  }
  100% {
    transform: translateX(0px);
  }
}
.homePage{
    position: absolute;
    top:0;
    
    right:14px;
    transform: rotate(45deg);
    font-size: 42px;

}
.wrapper .title{
  font-size: 35px;
  font-weight: 600;
  text-align: center;
  line-height: 100px;
  color: #fff;
  user-select: none;
  border-radius: 15px 15px 0 0;
  background: linear-gradient(-135deg, #c850c0, #4158d0);
}
.wrapper form{
  padding: 10px 30px 50px 30px;
}
.wrapper form .field{
  height: 50px;
  width: 100%;
  margin-top: 20px;
  position: relative;
}
.wrapper form .field input{
  height: 100%;
  width: 100%;
  outline: none;
  font-size: 17px;
  padding-left: 20px;
  border: 1px solid lightgrey;
  border-radius: 25px;
  transition: all 0.3s ease;
}
.wrapper form .field input:focus,
form .field input:valid{
  border-color: #4158d0;
}
.wrapper form .field label{
  position: absolute;
  top: 50%;
  left: 20px;
  color: #999999;
  font-weight: 400;
  font-size: 17px;
  pointer-events: none;
  transform: translateY(-50%);
  transition: all 0.3s ease;
}
form .field input:focus ~ label,
form .field input:valid ~ label{
  top: 0%;
  font-size: 16px;
  color: #4158d0;
  background: #fff;
  transform: translateY(-50%);
}
form .content{
  display: flex;
  width: 100%;
  height: 50px;
  font-size: 16px;
  align-items: center;
  justify-content: space-around;
}
form .content .checkbox{
  display: flex;
  align-items: center;
  justify-content: center;
}
form .content input{
  width: 15px;
  height: 15px;
  background: red;
}
form .content label{
  color: #262626;
  user-select: none;
  padding-left: 5px;
}
form .content .pass-link{
  color: "";
}
form .field input[type="submit"]{
  color: #fff;
  border: none;
  padding-left: 0;
  margin-top: -10px;
  font-size: 20px;
  font-weight: 500;
  cursor: pointer;
  background: linear-gradient(-135deg, #c850c0, #4158d0);
  transition: all 0.3s ease;
}
form .field input[type="submit"]:hover{
  border-radius:0px;
}
form .signup-link{
  color: #262626;
  margin-top: 20px;
  text-align: center;
}
form .pass-link a,
form .signup-link a{
  color: #4158d0;
  text-decoration: none;
}
form .pass-link a:hover,
form .signup-link a:hover{
  text-decoration: underline;
}
@keyframes Gradient {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}
   </style>
<!-- navbar -->
     <nav>
        <ul>
           <li><a href="http://localhost/ProjetF/firstPage.php">Home</a></li>
            <li><a href="http://localhost/ProjetF/abou.php">About</a></li>
            <li><a href="http://localhost/ProjetF/index.php">Services</a></li>
            <li><a href="#">Portfolio</a></li>
            <li onclick="hideWelcome()"><a href="http://localhost/ProjetF/aboutUsPage.php">Contact</a></li>
         </ul>
       </nav>
<!-- logo -->
      <div class="logo" ><a href="http://localhost/ProjetF/firstPage.php"style="text-decoration: none;"><span>ATILIO</span></a></div>
<!-- title & content -->
<div class="wrapper">
    <div class="homePage"><a href="http://localhost/ProjetF/firstPage.php" style="text-decoration: none;">+</a></div>
      <div class="title">
Sign In Form</div>
<form method="POST">
        <div class="field">
          <label id="error">Wrong password or username</label>
          <input type="text" name="user_name" required>
          <label>User_Name</label>
        </div>
<div class="field">
          <input type="password" name="password" required>
          <label>Password</label>
        </div>
<div class="content">
          <div class="checkbox">
            <input type="checkbox" id="remember-me">
            <label for="remember-me">Remember me</label>
          </div>
<div class="pass-link">
<a href="#">Forgot password?</a></div>
</div>
<div class="field">
          <input type="submit" value="Login">
        </div>
<div class="signup-link">
Not a member? <a href="http://localhost/ProjetF/logUpPage.php">Sign Up Now</a></div>
</form>
</div>
     
  </header>
 
 
<script>
var a;
function hideWelcome(){

  if(a == 1){
   
    document.getElementById("hide").style.display="inline";
    return a=0;
  }else {
    
    document.getElementById("hide").style.display="none";
    return a=1;
  }
}
/*function showerror(){
  //document.getElementById("error").style.visibility = "visible";
  $("#error").hide().html().slideDown();
}*/
</script> 


