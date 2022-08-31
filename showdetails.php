<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
     <style>
    .logo {
      width: 300px;
      height: auto;
    }
    .h1 {
      text-align: left;
      margin-right: 30px;
      margin-left: 5px;
      font-size: 30px;
      float: left;
    }
    .btn-block {
        margin-top: 10px;
        text-align: center;
      }
      button {
        width: 150px;
        padding: 10px;
        border: none;
        border-radius: 5px;
        background: #669999;
        font-size: 16px;
        color: #fff;
        cursor: pointer;
      }
      button:hover {
        background: #669999;
      }
    </style>
  <head>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css
" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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
    <h1 class="h1">Today's appointments</h1><br><br><br><br>
     <table class="table">
        <thead>
			<tr>
				<th>appno</th>
        <th>name</th>
        <th>email</th>
				<th>age</th>
				<th>phone</th>
				<th>time</th>
				<th>gender</th>
				<th>department</th>
			</tr>
		</thead>

        <tbody>
    <?php
      $servername = "localhost";
			$username = "root";
			$password = "";
			$database = "bmshospital";

			// Create connection
			$connection = new mysqli($servername, $username, $password, $database);

            // Check connection
			if ($connection->connect_error) {
				die("Connection failed: " . $connection->connect_error);
			}

            // read all row from database table
			$sql = "SELECT * FROM appointment order by appno";
			$result = $connection->query($sql);

            if (!$result) {
				die("Invalid query: " . $connection->error);
			}

            // read data of each row
			while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["appno"] . "</td>
                    <td>" . $row["name"] . "</td>
                    <td>" . $row["email"] . "</td>
                    <td>" . $row["age"] . "</td>
                    <td>" . $row["phone"] . "</td>
                    <td>" . $row["time"] . "</td>
                    <td>" . $row["gender"] . "</td>
                    <td>" . $row["department"] . "</td>
                    <td>
                    
                    </td>
                </tr>";
            }

            $connection->close();
            ?>
        </tbody>
    </table>
   <br>
   <h4>Consultation billing</h4>
  <form action="backconsultationbill.php" method="post">
           <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="appno" placeholder="Consultation appointment number">
    </div>
    <div class="col">
      <input type="text" class="form-control" name="bill" placeholder="Bill in Rs.">
    </div>
  </div>

<div class="btn-block">
  
            <button name = "submit" type="submit">Submit</button>
          
      </div>
</form>
<br><br><br><br>
     <table class="table">
        <thead>
			<tr>
				<th>appno</th>
        <th>name</th>
        <th>email</th>
				<th>age</th>
				<th>phone</th>
				<th>time</th>
				<th>gender</th>
				<th>Labtest</th>
			</tr>
		</thead>

        <tbody>
    <?php
      $servername = "localhost";
			$username = "root";
			$password = "";
			$database = "bmshospital";

			// Create connection
			$connection = new mysqli($servername, $username, $password, $database);

            // Check connection
			if ($connection->connect_error) {
				die("Connection failed: " . $connection->connect_error);
			}

            // read all row from database table
			$sql = "SELECT * FROM l_appointment order by l_appno";
			$result = $connection->query($sql);

            if (!$result) {
				die("Invalid query: " . $connection->error);
			}

            // read data of each row
			while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["L_appno"] . "</td>
                    <td>" . $row["name"] . "</td>
                    <td>" . $row["email"] . "</td>
                    <td>" . $row["age"] . "</td>
                    <td>" . $row["phone"] . "</td>
                    <td>" . $row["time"] . "</td>
                    <td>" . $row["gender"] . "</td>
                    <td>" . $row["Labtest"] . "</td>
                    <td>
                    
                    </td>
                </tr>";
            }

            $connection->close();
            ?>
        </tbody>
    </table>
<br>
<h4>Labtest billing</h4>
  <form action="backlabtestbill.php" method="post">
           <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="L_appno" placeholder="Labtest appointment number">
    </div>
    <div class="col">
      <input type="text" class="form-control" name="l_bill" placeholder="Bill in Rs.">
    </div>
  </div>
  <div class="btn-block">
  
            <button name = "submit" type="submit">Submit</button>
          
      </div>
</form>

  </body>
  </html>
