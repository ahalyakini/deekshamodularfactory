<?php

session_start();

// Check if the user clicked on the logout link
if (isset($_GET['logout'])) {
    // Destroy the session
    session_destroy();

    // Redirect to the login page
    header("Location: login.php");
    exit();
}

// Check if the user is not logged in, redirect to login page
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>




<div class="header" style="background-color: #e6e5e5;">
    <div class="row">
        <div class="col-2 d-flex justify-content-center align-items-center">
            <img src="img/logo1.png" alt="Logo" height="50px">
        </div>

        <div class="col-4 d-flex align-items-center">
            <button type="button" class="btn btn-primary  me-2"><a href="https://deekshamodularfactory.com/" target="_blank" style="color: white; text-decoration: none;">View Website</a></button>

        </div>

        <div class="col-4 d-flex align-items-center">
            <?php

            // Check if the user is not logged in, redirect to the login page
            if (!isset($_SESSION["username"])) {
                header("Location: login.php");
                exit();
            }

            // Retrieve the username from the session
            $username = $_SESSION["username"];
            ?>
            <div class="pt-3">
                <p>Welcome,
                    <?php echo $username; ?>
                </p>
            </div>

        </div>



        <div class="col-2 d-flex  align-items-center">
            <i class="far fa-comment-dots mx-2" style="font-size: 25px"></i>
            <i class="far fa-bell mx-2" style="font-size: 25px"></i>

            <button id="fullscreen-button" class="mx-2"> <i class="fa fa-expand" aria-hidden="true" style="font-size: 25px"></i></button>
            <button type="button" class="btn btn-danger mx-3"><a href="logout.php" style="color: white; text-decoration: none;">Logout</a></button>
        </div>
    </div>

</div>
<button id="sidebar-toggle" class="btn btn-primary d-md-none">
    <i class="fas fa-bars"></i>
</button>
<script>
    function toggleFullscreen() {
        if (document.fullscreenElement) {
            // If already in fullscreen, exit fullscreen
            if (document.exitFullscreen) {
                document.exitFullscreen();
            } else if (document.mozCancelFullScreen) {
                /* Firefox */
                document.mozCancelFullScreen();
            } else if (document.webkitExitFullscreen) {
                /* Chrome, Safari and Opera */
                document.webkitExitFullscreen();
            } else if (document.msExitFullscreen) {
                /* IE/Edge */
                document.msExitFullscreen();
            }
        } else {
            // If not in fullscreen, request fullscreen
            if (document.documentElement.requestFullscreen) {
                document.documentElement.requestFullscreen();
            } else if (document.documentElement.mozRequestFullScreen) {
                /* Firefox */
                document.documentElement.mozRequestFullScreen();
            } else if (document.documentElement.webkitRequestFullscreen) {
                /* Chrome, Safari and Opera */
                document.documentElement.webkitRequestFullscreen();
            } else if (document.documentElement.msRequestFullscreen) {
                /* IE/Edge */
                document.documentElement.msRequestFullscreen();
            }
        }
    }

    // Add an event listener to a button or an element to toggle fullscreen
    document.getElementById('fullscreen-button').addEventListener('click', toggleFullscreen);
</script>