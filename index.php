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
    .responsiveimg {
      width: 100%;
      height: 400px;
    }
    .appointment {
     background-color: rgba(167, 161, 155, 0.712);
      color: rgb(41, 39, 39);
      font-size: xx-large;
      font-family: sans-serif;
      margin-left: 500px;
      border-width: 0px;
    }
    .intro {
      text-align: left;
      margin-right: 150px;
      margin-left: 150px;
      font-size: 18px;
    
    }
    .facilies {
      text-align: left;
      font-size: x-large;
      font-family: sans-serif;
    }
    .facility{
      text-align: left;
    }
    table{
      border-collapse: separate;
      border-spacing:100px 10px;
    }
    td{
      padding: 10px 0;
    }
  </style>
  <head>
   
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
    <img class="responsiveimg" src="Images/BMSHOSPITAL.jpg">
    <img class="responsiveimg" src="Images/reception.jpg">
    <img class="responsiveimg" src="Images/ambulance.jpg">
    <img class="responsiveimg" src="Images/covid1.jpg">
    <br /><br /><br />
    <div>
      <a href="appointment.php"
        ><button class="appointment"><b>BOOK AN APPOINTMENT</b></button></a
      >
    </div>
    <br /><br />

    <p class="intro">
      Six decades ago a man with a mission to educate people first private
      Engineering College. The man was none other than the founding father of
      BMS educational institution Sri B.M Sreenivasaiah. His son, Mr. B.S
      Narayan, pursued his father’s dream to help the needy and laid the
      foundation stone for B.S Narayan memorial hospital in the year 1991.
      Before his efforts could gain momentum his soul left us with the
      responsibility to carry forward his legacy and give the best affordable
      medical facility. Our life trustee Mrs. Ragini Narayan, kindled by the
      benevolent and noble thoughts of her husband, has turned B.S Narayan
      Memorial Day Care center into a state of the art multidimensional
      hospital, where anyone can seek cure and are under the guidance of
      experienced doctors without worrying about the cost.
    </p>
    <br /><br />
    <h2 class="facilies"><b>Facilities and Specialities </b></h2><br>

                    <table>
                          <thead>
                            <tr>
                              <th width="50%">Facilities Available</th>
                              <th width="50%">Specialities Available</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>OPD Consultations</td>
                              <td>General Medicine</td>
                            </tr>
                            <tr>
                              <td>Emergency</td>
                              <td>General Surgery</td>
                            </tr>
                            <tr>
                              <td>Operation Theatre with fully Equipped Recovery Room</td>
                              <td>Obstetrician and Gynecology</td>
                            </tr>
                            <tr>
                              <td>Trauma and Casualty</td>
                              <td>Pediatrics</td>
                            </tr>
                            <tr>
                              <td>Inpatient Services</td>
                              <td>Orthopedic and Physiotherapy</td>
                            </tr>
                            <tr>
                              <td>Radiology (Digital X-Ray, Ultrasound, Doppler)</td>
                              <td>Cardiology</td>
                            </tr>
                            <tr>
                              <td>2D Echo + Colour Doppler, TMT(Stress ECG)</td>
                              <td>Diabetology</td>
                            </tr>
                            <tr>
                              <td>Laboratory</td>
                              <td>Gastroenterology</td>
                            </tr>
                            <tr>
                              <td>Pulmonary Function Test</td>
                              <td>Oncology</td>
                            </tr>
                            <tr>
                              <td>Physiotherapy</td>
                              <td>ENT</td>
                            </tr>
                            <tr>
                              <td>Ambulance Services</td>
                              <td>Pulmonology</td>
                            </tr>
                            <tr>
                              <td>Pharmacy</td>
                              <td>Urology</td>
                            </tr>
                            <tr>
                              <td>Yoga</td>
                              <td>Nephrology</td>
                            </tr>
                            <tr>
                              <td>Dentistry</td>
                              <td>Ophthalmology</td>
                            </tr>
                            <tr>
                              <td>Cosmetology</td>
                              <td>Neurology</td>
                            </tr>
                            <tr>
                              <td>Thermal Mammography</td>
                              <td style="width: 177px;">&nbsp;</td>
                            </tr>
                          </tbody>
                        </table>
                    
                </div>
            </div>
    </p>
    <script>
      var slideIndex = 0;
  carousel();
  
  function carousel() {
    var i;
    var x = document.getElementsByClassName("responsiveimg");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1}
    x[slideIndex-1].style.display = "block";
    setTimeout(carousel, 2000); // Change image every 2 seconds
  }
    </script>
  </body>
</html>