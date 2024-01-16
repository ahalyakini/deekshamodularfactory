<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard </title>
  <link rel="stylesheet" href="style.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
<style>/*  import google fonts */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700");
*{
  margin: 0;
  padding: 0;
  outline: none;
  border: none;
  text-decoration: none;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body{
  background: #fff;
}
.container{
  display: flex;
}
nav{
  position: relative;
  top: 0;
  bottom: 0;
  height: 100vh;
  left: 0;
  background: #fff;
  width: 280px;
  overflow: hidden;
  box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
}
.logo{
  text-align: center;
  display: flex;
  margin: 10px 0 0 10px;
}
.logo img{
  width: 45px;
  height: 55px;
  border-radius: 0%;
}
.logo span{
  font-weight: bold;
  padding-left: 15px;
  font-size: 18px;
  text-transform: uppercase;
}
a{
  position: relative;
  color: rgb(85, 83, 83);
  font-size: 14px;
  display: table;
  width: 280px;
  padding: 10px;
}
nav .fas{
  position: relative;
  width: 70px;
  height: 40px;
  top: 14px;
  font-size: 20px;
  text-align: center;
}
.nav-item{
  position: relative;
  top: 12px;
  margin-left: 10px;
}
a:hover{
  background: #eee;
}
.logout{
  position: absolute;
  bottom: 0;
}

/* Main Section */
.main{
  position: relative;
  padding: 20px;
  width: 100%;
}
table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

  </style>
</head>
<body>
  <div class="container">
    <nav>
      <ul>
        <li><a href="#" class="logo">
        
          <span class="nav-item">Deeksha <br>Modular Factory</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-home"></i>
          <span class="nav-item">Home</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-user"></i>
          <span class="nav-item">Profile</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-wallet"></i>
          <span class="nav-item">Wallet</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-chart-bar"></i>
          <span class="nav-item">Analytics</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-tasks"></i>
          <span class="nav-item">Tasks</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-cog"></i>
          <span class="nav-item">Settings</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-question-circle"></i>
          <span class="nav-item">Help</span>
        </a></li>
        <?php
       

          // Check if the user clicked on the logout link
             if (isset($_GET['logout'])) {
           // Destroy the session
            session_destroy();
    
            // Redirect to the login page
            header("Location: login.php");
            exit();
              }
             ?>
        <li><a href="?logout=true" class="logout">
  <i class="fas fa-sign-out-alt"></i>
  <span class="nav-item">Log out</span>
</a></li>
      </ul>
    </nav>

    <section class="main">
      <div class="main-top">
        <h1>Admin Pannel</h1>
        <table>
        <tr>
            <!-- <th>S.NO</th> -->
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Whatsapp</th>
            <th>pincode</th>
        </tr>
        <?php
        
        session_start();

        include_once "dbconnection.php";
        $sql="SELECT * from contact_db";
        $result=$conn-> query($sql);
          

        // Display data in the table
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                //echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["fname"] . "</td>";
                echo "<td>" . $row["lname"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["phone"] . "</td>";
                echo "<td>" . $row["message"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No records found</td></tr>";
        }

        // Close the database connection
        $conn->close();
        ?>
   
      </div>
      
      </section>
    </section>
  </div>
</body>
</html>