<?php
session_start();
?><!DOCTYPE html>

<html>
  <style>
    .logo {
      width: 300px;
      height: auto;
    }
    .text {
      text-align: left;
      margin-right: 50px;
      margin-left: 50px;
      font-size: 20px;
    }
  </style>
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
    <h1>Complete blood count</h1>

    <p class="text">
      White blood cells (WBC) - 4500-11,000/mm3<br />
      Red blood cells (RBC) - Male: 4.3-5.9 million/mm3 Female: 3.5-5.5
      million/mm3<br />
      Hemoglobin (HGB) - Male: 13.5-17.5 g/dL Female: 12.0-16.0 g/dL<br />
      Hematocrit (HT) - Male: 41%-53% Female: 36%-46%
    </p>
    <br />
  </body>
</html>
