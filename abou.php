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

        
        * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

:root {
  --secondary-color: #151226;
  --contrast-color: #BF307F;
}
.overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  height: 100%;
  z-index: -10;
  background-color: var(--contrast-color);
}

.container {
  display: flex;
  height: 75vh;
  width: 140vh;
  top:100px;
  
  justify-content: space-around;
  align-items: center;
  color: #fff;
  animation: expand .8s ease forwards;
  background-color: var(--secondary-color);
  position: relative;
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  transition: all .8s ease;
}

.container_content {
 width: 50%;
 
}

.container_content_inner {
  width: 80%;
  margin-left: 80px;
  margin-top: 600px
}

.container_outer_img {
  margin: 50px;
  width: 50%;
  overflow: hidden;
}   
    
.container_img {
  width: 100%;
  animation: slideIn 1.5s ease-in-out forwards;
}

.par {
  height: auto;
  overflow: hidden;
}

p{
  line-height: 28px;
  transform: translateY(300px);
  animation: slideUp .8s ease-in-out forwards .8s;
}

.btns {
  height: 100%;
  position: relative;
  width: 150px;
  overflow: hidden;
}

.btns_more {
  background: transparent;
  border: 1px solid var(--contrast-color);
  border-radius: 50px;
  padding: 8px 12px;
  color: #BF307F;
  font-size: 16px;
  text-transform: uppercase;
  position: relative;
  margin-top: 15px;
  outline: none;
  transform: translateY(50px);
  animation: slideUp .8s ease-in-out  forwards 0s;
  transition: .3s;
}
.btns_more:hover{
    background: #BF307F;
    color: #fff;
    border-radius: 0px;
}

.title {
  overflow: hidden;
  height: auto;
}

h1 {
    font-size: 40px;
    color: var(--contrast-color);
    margin-bottom: 20px;
    transform: translateY(100px);
    animation: slideUp .8s ease forwards .5s;
}

@keyframes slideIn {
  0% {
    transform: translateX(500px) scale(.2);
  }
  100% {
    transform: translateX(0px) scale(1);
  }
}

@keyframes slideUp {
  0% {
    transform: translateY(300px);
  }
  100% {
    transform: translateY(0px);
  }
}

@keyframes expand {
  0% {
    transform: translateX(1400px);
  }
  100% {
    transform: translateX(0px);
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
<div class= 'container'>
<div class="container_content">
<div class="container_content_inner">
<div class="title">
  <h1>Welcome</h1>
</div>
<div class="par">
<p>
Cupiditate alias odio omnis minima veritatis saepe porro, repellendus natus vitae, sequi exercitationem ipsam, qui possimus sit eveniet laborum sapiente quisquam quae neque velit? 
</p>
</div>
<div class="btns">
<a href="http://localhost/ProjetF/aboutUsPage.php"><button class='btns_more'> Contact Us </button></a>
</div>
</div>
</div>
 <div class="container_outer_img">
 <div class="img-inner">
 <img src='worker2.png'  alt="" class="container_img"/>
 <div class="clock-container">
  <div class="clock-col">
    <p class="clock-day clock-timer">
    </p>
    <p class="clock-label">
      Day
    </p>
  </div>
  <div class="clock-col">
    <p class="clock-hours clock-timer">
    </p>
    <p class="clock-label">
      Hours
    </p>
  </div>
  <div class="clock-col">
    <p class="clock-minutes clock-timer">
    </p>
    <p class="clock-label">
      Minutes
    </p>
  </div>
  <div class="clock-col">
    <p class="clock-seconds clock-timer">
    </p>
    <p class="clock-label">
      Seconds
    </p>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.2/moment.min.js"></script>
  <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-8216c69d01441f36c0ea791ae2d4469f0f8ff5326f00ae2d00e4bb7d20e24edb.js"></script>
  <script id="rendered-js">
document.addEventListener('DOMContentLoaded', () =>
requestAnimationFrame(updateTime));


function updateTime() {
  document.documentElement.style.setProperty('--timer-day', "'" + moment().format("dd") + "'");
  document.documentElement.style.setProperty('--timer-hours', "'" + moment().format("k") + "'");
  document.documentElement.style.setProperty('--timer-minutes', "'" + moment().format("mm") + "'");
  document.documentElement.style.setProperty('--timer-seconds', "'" + moment().format("ss") + "'");
  requestAnimationFrame(updateTime);
}
//# sourceURL=pen.js
    </script>
</div>
       </div>
     </div>
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


