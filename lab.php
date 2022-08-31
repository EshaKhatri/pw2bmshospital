<?php
session_start();
?>
<head>
<body style="background-color: white;">
    <title>bmshospital</title>
<style>
.card {
max-width: 600px;
margin: auto;
text-align: left;
font-size: 18px;

}
.logo {
      width: 300px;
      height: auto;
    }

.title{
  font-size: 30px;
}
.point{
  color: black;
  font-size: 20px;
  text-decoration-color:cadetblue;
  margin-left: 30px;
}
.button{
        background-color: rgba(167, 161, 155, 0.712);
        color: black;
        font-size: 18px;
        float: right;
        width: 250px;
        height: 60px;
        border-width: 2px;
        margin-right: 10%;
}
 header {
        background-color: rgba(167, 161, 155, 0.712);
        left: 0;
        right: 0;
        top: 5px;
        height: 30px;
        display: flex;
        align-items: center;
      }
      header * {
        display: inline;
      }
      header li {
        margin: 20px;
      }
      header li a {
        color: rgb(0, 0, 0);
        text-decoration: none;
        font-family: sans-serif;
        font-weight: 600;
      }
</style>
</head>
<body id="main">
   <a href="index.php"><img src="Images/logo.png" alt="bmshospital" class="logo" /></a>
    <hr
      style="
        height: 0.8px;
        border-width: 0;
        color: rgb(156, 147, 147);
        background-color: rgb(156, 147, 147);"/>
         <header>
      <nav>
        <ul>
          <li>
            <a href="index.php"> Home </a>
          </li>
          <li>
            <a href="doctors.php"> Doctors </a>
          </li>
          <li>
            <a href="ambulance.php"> Ambulance </a>
          </li>
          <li><a href="covid.php"> Covid-19 </a></li>
          <li>
            <a href="lab.php"> Lab tests </a>
          </li>
          <li>
            <a href="https://maps.app.goo.gl/8LtMLmSCuywuBxoT9"> Location </a>
          </li>
          <li><a href="contact.php"> Contact </a></li>
          <li><a href="stafflogin.php"> Staff login </a></li>
<li><a href="dlogin.php"> Doctor's login </a></li>
        </ul>
      </nav>
    </header>
<h2 style="text-align:center" class="title">LAB TESTS</h2>
<p><a href="completebloodcount.php" class="point">Complete blood count</a></p>
<div>
      <a href="labbook.php"
        ><button class="button"><b>Book an appointment</b></button></a
      >
    </div>
<p><a href="hemoglobin.php" class="point">Hemoglobin</a></p>
<p><a href="urinalysis.php" class="point">Urinalysis</a></p>
<p><a href="thyroidstimulatinghormone.php" class="point">Thyroid stimulating hormone</a></p>
<p><a href="prothrombintime.php" class="point">Prothrombin time</a></p><br>

<div class="picture">
<img src="images/LT1.jpeg" width="360" height="300">
<img src="images/LT2.jpeg" width="360" height="300">
<img src="images/LT3.png" width="360" height="300">
</div>
</h2>
</div>
</body>