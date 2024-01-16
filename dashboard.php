<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  <link rel="stylesheet" href="style.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <style>
    /* import google fonts */
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700");

    * {
      margin: 0;
      padding: 0;
      outline: none;
      border: none;
      text-decoration: none;
      box-sizing: border-box;
      font-family: 'Nexa', sans-serif;
    }

    .download-link {
      text-decoration: none;
      /* Remove underline on the link */
      color: black;
      /* Icon color, you can change it as needed */
      font-size: 24px;
      /* Adjust the icon size */
    }

    .header {
      position: fixed;
      top: 0px;
      left: 0px;
      right: 0px;
      z-index: 999;
    }

    .sidebar {
      margin: 0;
      padding: 0;
      width: 16%;
      background-color: #f1f1f1;
      position: fixed;
      height: 100%;
      overflow: auto;
    }

    .sidebar a {
      display: block;
      color: black;
      padding: 16px;
      text-decoration: none;
    }

    .sidebar a.active {
      background-color: #2d373c;
      color: white;
    }

    .sidebar a:hover:not(.active) {
      background-color: #555;
      color: white;
    }

    div.content {
      margin-left: 200px;
      padding: 1px 16px;
      height: 1000px;
    }

    .nopadd {
      padding: 0px !important;
      margin-top: 50px;
    }

    .topmar {
      margin-top: 67px;
    }

    .header-content {
      display: flex;
      align-items: center;
      /* Vertically center the content */
      justify-content: space-between;
      /* Space evenly between the elements */
    }

    @media (max-width: 767px) {
      .sidebar {
        display: none;
      }
    }

    #example_wrapper {
      margin-top: 15px !important;
    }

    .container-fluid {
      padding-left: 0px !important;
    }

    .order-card {
      color: #fff;
    }

    .bg-c-blue {
      background: linear-gradient(45deg, #4099ff, #73b4ff);
    }

    .bg-c-green {
      background: linear-gradient(45deg, #2ed8b6, #59e0c5);
    }

    .bg-c-yellow {
      background: linear-gradient(45deg, #FFB64D, #ffcb80);
    }

    .bg-c-pink {
      background: linear-gradient(45deg, #FF5370, #ff869a);
    }


    .card {
      border-radius: 5px;
      -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4, 26, 55, 0.16);
      box-shadow: 0 1px 2.94px 0.06px rgba(4, 26, 55, 0.16);
      border: none;
      margin-bottom: 30px;
      -webkit-transition: all 0.3s ease-in-out;
      transition: all 0.3s ease-in-out;
    }

    .card .card-block {
      padding: 25px;
    }

    .order-card i {
      font-size: 26px;
    }

    .f-left {
      float: left;
    }

    .f-right {
      float: right;
    }
  </style>
</head>

<body>

  <div class="container-fluid">
    <div class="row">
      <?php
      include "adminHeader.php";
      ?>



      <div class="col-md-2 nopadd">
        <div class="sidebar">
          <a class="active" href="dashboard.php">Dashboard</a>
          <a class="" href="loginhome.php">Enquiries</a>
          <a class="" href="user-admin-data.php">Admin Details</a>
        </div>
        <button id="sidebar-toggle" class="btn btn-primary d-md-none">
          <i class="fas fa-bars"></i>
        </button>
      </div>
      <div class="col-md-10 topmar ">
        <div class="row">
          <?php
          // Include your database connection here
          include("dbconnection.php");  // Replace with your actual database connection file

          // Query to get the total number of inquiries
          $totalInquiriesQuery = "SELECT COUNT(*) AS total FROM contact_data";
          $result = $conn->query($totalInquiriesQuery);
          $row = $result->fetch_assoc();
          $totalInquiries = $row['total'];


          ?>

          <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
              <div class="card-block">
                <h2 class="text-right"><?php echo $totalInquiries; ?></h2>
                <p class="m-b-0">Total Enquiries</p>
              </div>
            </div>
          </div>







</body>

</html>