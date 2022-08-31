<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Our Specialists</title>

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
      .title {
        font-size: xx-large;
        font-weight: bold;
      }
      img {
        width: 125px;
        border-radius: 75px;
        float: left;
        text-align: center;
        margin-right: 10px;
      }
      .name {
        font-weight: bold;
      }
      .profile {
        background-color: rgb(139, 138, 138);
        float: right;
        width: 200px;
        height: 50px;
      }
    </style>
  </head>
  <body>
 <a href="index.php"><img src="Images/logo.png" alt="bmshospital" class="logo" /></a>    <br />
    <br />
    <br />
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
    <p class="title">Our Specialists</p>
    <img src="Images/Doct1.jpg" alt="Doctor" />
    <p class="name">Dr. Adarsh C K</p>
    <div>
      <a href="Doctor1.php"
        ><button class="profile"><b>View Profile</b></button></a
      >
    </div>
    <p>MBBS, MD - General Medicine, DNB -Gastroenterology</p>
    <p>Gastroenterologist</p>
    <p class="last">18 Years Experience Overall (9 years as specialist)</p>
    <hr />
    <img src="Images/Doct2.jpg" alt="Doctor" />
    <p class="name">Dr. Mahendra Jain</p>
    <div>
      <a href="Doctor4.php"
        ><button class="profile"><b>View Profile</b></button></a
      >
    </div>
    <p>
      MCh - Urology/Genito-Urinary Surgery, DNB - Urology/Genito - Urinary
      Surgery, MS - General Surgery, MBBS
    </p>
    <p>Urological Surgeon, Urologist</p>
    <p>32 Years Experience Overall (23 years as specialist)</p>
    <hr />
    <img src="Images/Doct3.jpg" alt="Doctor" />
    <p class="name">Dr. Maiya G.L</p>
    <div>
      <a href="Doctor3.php"
        ><button class="profile"><b>View Profile</b></button></a
      >
    </div>
    <p>MBBS, MS - General Surgery</p>
    <p>General Surgeon</p>
    <p>29 Years Experience Overall (23 years as specialist)</p>
    <hr />
    <img src="images/Doct4.jpg" alt="Doctor" />
    <p class="name">Dr. Manohar Badrappa</p>
    <div>
      <a href="Doctor2.php"
        ><button class="profile"><b>View Profile</b></button></a
      >
    </div>
    <p>
      MCh - Urology, DHMS (Diploma in Homeopathic Medicine and Surgery), MS -
      General Surgery
    </p>
    <p>Urologist, Andrologist</p>
    <p>19 Years Experience Overall (9 years as specialist)</p>
    <hr />
    <img src="images/Doct6.jpg" alt="Doctor" />
    <p class="name">Dr. Shekar Y N</p>
    <div>
      <a href="Doctor5.php"
        ><button class="profile"><b>View Profile</b></button></a
      >
    </div>
    <p>MBBS, DVD</p>
    <p>Dermatologist</p>
    <p>35 Years Experience Overall (33 years as specialist)</p>
    <hr />
    <img src="images/Doct7.jpg" alt="Doctor" />
    <p class="name">Dr. Venkatesh Prasad</p>
    <div>
      <a href="Doctor6.php"
        ><button class="profile"><b>View Profile</b></button></a
      >
    </div>
    <p>MS - Orthopaedics, DNB - Orthopedics/Orthopedic Surgery</p>
    <p>Joint Replacement Surgeon, Orthopedist</p>
    <p>21 Years Experience Overall (20 years as specialist)</p>
    <hr />
    <img src="images/Doct8.jpg" alt="Doctor" />
    <p class="name">Dr. Yeriswamy M.C</p>
    <div>
      <a href="Doctor7.php"
        ><button class="profile"><b>View Profile</b></button></a
      >
    </div>
    <p>DM - Cardiology, MBBS</p>
    <p>Cardiologist</p>
    <p>16 Years Experience Overall (15 years as specialist)</p>
    <hr />
    <img src="images/Doct5.jpg" alt="Doctor" />
    <p class="name">Dr. Raghuveer H N</p>
    <div>
      <a href="Doctor8.php"
        ><button class="profile"><b>View Profile</b></button></a
      >
    </div>
    <p>MBBS, Diploma in Medical Radio-Diagnosis</p>
    <p>Radiologist</p>
    <p>30 Years Experience Overall (8 years as specialist)</p>
  </body>
</html>
