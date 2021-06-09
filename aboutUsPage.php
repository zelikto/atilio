<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">

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
    margin-top:20%;
    margin-left:35%;
    margin-right:35%;
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
  line-height: 1.6;
  margin: 20px auto;
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
.header-content form .field{
  height: 50px;
  width: 100%;
  margin-top: 20px;
  position: relative;
}
.header-content form .field input{
  height: 100%;
  width: 100%;
  outline: none;
  font-size: 17px;
  padding-left: 20px;
  border: 1px solid lightgrey;
  border-radius: 25px;
  transition: all 0.3s ease;
}
.header-content form .field input:focus,
form .field input:valid{
  border-color: #4158d0;
}
.header-content form .field label{
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
  color: #fff;
  background:transparant;
  transform: translateY(-100%);
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
    width: 200px;
  margin:20px 10px;
  color: #591BC5;
  font-size: 17px;
  border:1px solid #EFEEF5;
  font-weight: 500;
  background: #EFEEF5;
  border-radius: 30px;
  padding: 10px;
  cursor:pointer;
  transition: .3s;
}
form .field input[type="submit"]:hover{
  border-radius: 0;
}
form .field input[type="submit"]:active{
  transform: scale(0.95);
}
form .signup-link{
  color: #fff;
  margin-top: 40px;
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
   </style>
<!-- navbar -->
     <nav>
        <ul>
           <li><a href="http://localhost/ProjetF/firstPage.php">Home</a></li>
            <li><a href="http://localhost/ProjetF/abou.php">About</a></li>
            <li><a href="http://localhost/ProjetF/index.php">Services</a></li>
            <li onclick="hideWelcome()"><a href="http://localhost/ProjetF/aboutUsPage.php">Contact</a></li>
         </ul>
       </nav>
<!-- logo -->
      <div class="logo" ><a href="http://localhost/ProjetF/firstPage.php"style="text-decoration: none;"><span>ATILIO</span></a></div>
<!-- title & content -->
<div id="hide">
      <section class="header-content">
         <h1>Contact Us</h1>
        <p> Lorem ipsum dolor sit amet,<br>
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
           <form action="processs.php" method="post">
        
        <div class="field">
          <input type="text" name="Email" required>
          <label>Email Address</label>
        </div>
        <div class="field">
          <input type="text" name="Subject" required>
          <label>Subject</label>
        </div>
        <div class="field">
          <input  type="text" name="msg" required>
          <label>Message</label>
        </div>
        

<div class="field">
          <input id="d" type="submit" name="btn-send" value="Send">
        </div>
<div class="signup-link">
Alredy sign up? <a href="http://localhost/ProjetF/logPage.php">Sign In Now</a></div>
</form>

      </section>
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
  
</script> 


