<?php
session_start();
?>
<!DOCTYPE html>
    <html>
    <head>
        
        <title>bmshospital</title>
        <style>
            .logo {
                width: 300px;
                height: auto;
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
            .welcome{
                text-align: left;
                margin-right: 60px;
                margin-left: 50px;
                font-size: 30px;
                float: left;       
            }
        
            .title{
                text-align: left;
                margin-right: 40px;
                margin-left: 60px;
                font-size: 20px;
                font-style: oblique; 
                font-weight: 400; 
            }
            .phone{
                color: rgb(235, 77, 77);
                text-align: right;
                margin-left: 1000px;
                font-size: x-large;
            }
            .picture{
                flex-basis: 50%;
            }
            .container {
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .heading{
                text-align: center;
                color:black;
                
            }
            .service-details{
                display: flex;
                flex-direction: row;
                justify-content: space-evenly;
                font-family: sans-serif;
            }
            .form {
                background-color: rgb(163, 162, 162);
                float: right;
                width: 200px;
                height: 50px;
            }
        </style>
    </head>
    <body>
 <a href="index.php"><img src="Images/logo.png" alt="bmshospital" class="logo" /></a>
         <hr style="height: 2px; border-width: 0; color: rgb(158, 147, 147); background-color: rgb(158, 147, 147);"/>
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
<li><a href="dlogin.php"> Doctor's login </a></li>        </ul>
      </nav>
    </header>  
    <body>
        <br>
            <h1 class="welcome" >Ambulance Services</h1>
        
        <br><br>
        
                <p class="title">Your health emergency is our priority.</p>
                <div class="container">
                <div class="phone">
                    Phone :<b> +1800-888-888</b></div>
                </div>       
                <div class="picture">
                <img src="./images/img2.png" alt="Ambulance" style="width: 300px; margin-left:100px;" >
                </div>
                </div>
        <div class="details">
            <div class="heading">
                <h3 >SERVICES WE OFFER</h3>
            </div>
        </div>
        </div>
        <div class="service-details">
            <div class="basic-support">
                <img src="./images/img1.png" alt="basic life support" width="200px">
                <p style="font-size: large;">
                    For patients who need medical transportation, there is a bed for patients, pulse monitor and oxygen device.
                </p>
            </div>
            <div class="mortuary-service">
                <img src="./images/img4.jpg" alt="mortuary services" width="200px">
                <p style="font-size: large;">
                    Mortuary ambulance services are available to move the dead body from one place to another.
                </p>
            </div>
            <div class="advanced-support">
                <img src="./images/img5.jpg" alt="advanced life support services" width="200px">
                <p style="font-size: large;">
                    ALS ambulance is equipped with ventilator, ECG monitoring device and paramedic staff.
                </p>
            </div>
            <div class="patient-transport">
                <img src="./images/img3.png" alt="patient transport" width="230px">
                <p style="font-size: large;">
                    PTV is a non emergency patient transport vehicle fully equipped just like a normal ambulance.
                </p>
            </div>
            </div>
    </body>
    </html>