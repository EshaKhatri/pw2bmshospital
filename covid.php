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
    .doch {
      text-align: left;
      margin-right: 60px;
      margin-left: 50px;
      font-size: 30px;
      float: left;
    }
    div.gallery {
  margin: 50px;
  border: 0px solid #ccc;
  float:left;
  width: 250px;
}

div.gallery:hover {
  border: 0px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 10px;
  text-align: center;
  font-style: oblique;
  font-weight: 700;
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
    .list {
     text-align: left;
      margin-left: 30px;
      font-size: large;
    }
    .text {
      text-align: left;
      margin-left: 50px;
      margin-right: 100px;
      font-size: large;
    }
    .subhead {
      text-align: left;
      margin-right: 40px;
      margin-left: 40px;
      font-size: 20px;
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
</header>  <br>
 <h1 class="doch"><b>COVID 19</b></h1><br><br><br><br>
<div class="gallery">
  <a target="_blank" >
    <img src="images/covdtest.jpg" alt="covid test" width="500">
  </a>
  <div class="desc">Covid testing.</div>
</div>

<div class="gallery">
  <a target="_blank"">
    <img src="images/covid1.jpg" alt="precautions" width="500" >
  </a>
  <div class="desc">Precautions.</div>
</div>

   
    <p style = "font-size:20px ; margin-left: 900px;"> <b>Contact</b> : +91-99000-13238</p>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <p class="text" >
      With the prevailing pandemic, it is more important than ever to keep
      yourself and your loved one's safe. However, despite taking all
      precautions, if you start developing COVID 19 symptoms such as:
    </p>
    <br>
    <h2 class="subhead">MOST COMMON SYMPTOMS</h2> 
    <p class="list">
      
      <ul class="list">
      <li>Fever</li>
      <li>Dry cough</li>
      <li>Tiredness</li>
      </ul>
    </p>
    <br>
    <h2 class="subhead">LESS COMMON SYMPTOMS</h2> 
    <p class="list">
      <ul class="list">
      <li>Aches and pains</li>
      <li>Sore throught </li>
      <li>Diarrhoea</li>
      <li>Conjuctivitis</li>
      <li>Headache</li>
      <li>Loss of taste or smell</li>
      <li>A rash on skin or discolouration of finger or toes</li>
      </ul>
    </p>
    <br>
    
    <h2 class="subhead">SERIOUS SYMPTOMS</h2> 
    <p class="list">
      <ul class="list">
      <li>Difficulty breathing or shortness of breath</li>
      <li>Chest pain or pressure </li>
      <li>Loss of speech or movement</li>
      </ul>
    </p>
    <br>
    <h2 class="subhead">FIRST STEPS TO TAKE IF YOU START OBSERVING SYMPTOMS</h2>
    <p class="text">Quarantine and isolation should actually start from the first day you start spotting
       symptoms. Do not wait for the test results to come up and instead, start following from the initial 
       days symptoms start to show up.<br><br>

      Wear a mask and isolate yourself from your immediate family members. Even if it turns out to be
      something non-COVID, it will be a good way to stop the spread of contagious disease and get some
      much-needed rest.<br><br>

      If you share quarters, and cannot isolate alone, quarantine yourself in a well-ventilated room 
      which would have a different bathroom. Divide utilities, utensils that you would be using for the 
      next two weeks. Do not share them with the rest of the family at any cost. The ones around you should
       be getting a COVID test done too, to avoid exposure risk.</p><br>
    <h2 class="subhead">MYTHS AND FACTS ABOUTS COVID-19 VACCINE</h2>
    <p class="text">
      <br>
      <b>MYTH</b>: The ingredients in COVID-19 vaccines are dangerous.<br><br>
      <b>FACT</b>: Nearly all the ingredients in COVID-19 vaccines are also ingredients in many foods –
       fats, sugars, and salts.<br><br><br>
      <b>MYTH</b>: The natural immunity I get from being sick with COVID-19 is better than the immunity I get from COVID-19 vaccination.<br><br>
      <b>FACT</b>: Getting a COVID-19 vaccination is a safer and more dependable way to build immunity to COVID-19 than getting sick with COVID-19.<br><br><br>
      <b>MYTH</b>: COVID-19 vaccines cause variants.<br><br>
      <b>FACT</b>: COVID-19 vaccines do not create or cause variants of the virus that causes COVID-19. Instead, COVID-19 vaccines can help prevent new variants from emerging.<br><br><br>
      <b>MYTH</b>: All events reported to the Vaccine Adverse Event Reporting System (VAERS) are caused by vaccination.<br><br>
      <b>FACT</b>: Anyone can report events to VAERS, even if it is not clear whether a vaccine caused the problem. Because of this, VAERS data alone cannot determine if the reported adverse event was caused by a COVID-19 vaccination.<br><br><br>
      <b>MYTH</b>: The mRNA vaccine is not considered a vaccine.<br><br>
      <b>FACT</b>: mRNA vaccines, such as Pfizer-BioNTech and Moderna, work differently than other types of vaccines, but they still trigger an immune response inside your body.<br><br><br>
      <b>MYTH</b>: COVID-19 vaccines contain microchips.<br><br>
      <b>FACT</b>: COVID-19 vaccines do not contain microchips. Vaccines are developed to fight against disease and are not administered to track your movement.<br><br><br>
      <b>MYTH</b>: Receiving a COVID-19 vaccine can make you magnetic.<br><br>
      <b>FACT</b>: Receiving a COVID-19 vaccine will not make you magnetic, including at the site of vaccination which is usually your arm.<br><br><br>
      <b>MYTH</b>: COVID-19 vaccines can alter my DNA.<br><br>
      <b>FACT</b>: COVID-19 vaccines do not change or interact with your DNA in any way.<br><br><br>
      <b>MYTH</b>: A COVID-19 vaccine can make me sick with COVID-19.<br><br>
      <b>FACT</b>: Because none of the authorized COVID-19 vaccines in the United States contain the live virus that causes COVID-19, the vaccine cannot make you sick with COVID-19.<br><br><br>
    </p> 
  </body>
</html>