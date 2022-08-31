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
    /><br>
    <form action = "dshowdetails.php" method= "post">
      <label for="browser" class="form-label"><b>Choose your department</b></label>
    <select class="form-select form-select-lg" name="department">
              <option value="">Select</option>
              <option value="Dr.Adarsh C K- Gastroenterologist">Dr.Adarsh C K- Gastroenterologist</option>
              <option value="Dr.Mahendra Jain-Urologist">Dr.Mahendra Jain-Urologist</option>
              <option value="Dr.Maiya G.L-General Surgeon">Dr.Maiya G.L-General Surgeon</option>
              <option value="Dr.Manohar Badrappa-Urologist">Dr.Manohar Badrappa-Urologist</option>
              <option value="Dr. Shekar Y N-Dermatologist">Dr. Shekar Y N-Dermatologist</option>
              <option value="Dr. Venkatesh Prasad-Orthopedist">Dr. Venkatesh Prasad-Orthopedist</option>
              <option value="Dr. Yeriswamy M.C-Cardiologist">Dr. Yeriswamy M.C-Cardiologist</option>
              <option value="Dr. Raghuveer H N-Radiologist">Dr. Raghuveer H N-Radiologist</option>
   </select>
   <div class="btn-block">
  
            <button name = "submit" type="submit">Submit</button>
          
      </div>
    </form><br><br>
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
    error_reporting(0);
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
            $department = $_POST['department'];

            // read all row from database table
			$sql = "SELECT * FROM appointment where department='{$department}' order by appno";
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
  </body>
  </html>
