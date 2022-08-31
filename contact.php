<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <title>bmshospital</title>
  <style>
    .logo {
      width: 300px;
      height: auto;
    }
    .hr {
      color: indigo;
      border: 2px indigo;
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
    .contacth {
      text-align: left;
      margin-right: 150px;
      margin-left: 150px;
      font-size: 30px;
      font-family: sans-serif;
    }
    .contact {
      text-align: left;
      margin-right: 150px;
      margin-left: 150px;
      font-size: 18px;
      font-family: sans-serif;
    }
  </style>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style></style>
  </head>
  <body>
 <a href="index.php"><img src="Images/logo.png" alt="bmshospital" class="logo" /></a>
    <hr
      style="
        height: 2px;
        border-width: 0;
        color: rgb(158, 147, 147);
        background-color: rgb(158, 147, 147);
      "
    />
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
    <br />
    <h1 class="contacth"><b>Contact us : </b></h1>
    <br />
    <p class="contact">
      Address : Opp. BMS Engineering College, Bull Temple Road, Bangalore –
      560019, Karnataka <br /><br />
      Phone: 91(80) 26613888/26613993 <br /><br />
      Mobile: +91 9900013234
    </p>
  </body>
</html>
