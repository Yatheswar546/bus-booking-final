<?php

    session_start();
    
    require_once('./config.php');

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $from = $_POST['from'];
        $to = $_POST['to'];
        $date = $_POST['date'];

        $formattedDate = (new DateTime($date))->format('d M');

    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Tickets</title>

    <!-- Font Awesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Box Icons Link -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Custom CSS Link -->
    <link rel="stylesheet" href="./style.css">

</head>

<body>

    <!---------------------------- NAVBAR SECTION ----------------------->
    <nav class="navbar">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa-solid fa-bars"></i>
        </label>
        <label class="logo"><a href="./index.php">Bus Tickets</a></label>
        <ul>
            <li><a href="./index.php">Bus Tickets</a></li>
            <li><a href="./index.php">Cab Rental</a></li>
            <li><a href="./index.php">Train Tickets</a></li>
            <li id="HelpdropdownBtn"><a href="#">Help</a><i class='bx bx-chevron-down icon'></i>
                <ul class="dropdown-content help-dropdown-content" id="HelpdropdownContent">
                    <li><a href="#" style="text-transform: lowercase;">bustickets@gmail.com</a></li>
                    <li><a href="#">Contact: 8562147930</a></li>
                </ul>
            </li>
            <li id="AccountdropdownBtn"><a href="#">Account</a><i class='bx bx-chevron-down icon'></i>
                <ul class="dropdown-content account-dropdown-content" id="AccountdropdownContent">
                    
                    <?php if(isset($_SESSION["id"])): ?>
                        <li><a href="#">Manage Profile</a></li>
                        <li><a href="#" id="email">Email/SMS</a></li>
                        <li><a href="./logout.php" class="logout">Logout</a></li>
                    <?php else: ?>
                        <li><a href="#" id="email">Email/SMS</a></li>
                        <li><a href="./forms.php">Login/Sign Up</a></li>
                    <?php endif; ?>
                </ul>
            </li>
        </ul>
    </nav>

    <!------------------------------ TOP BAR SECTION -------------------------->
    <div class="top-section">
        <div>
            <h6>Home</h6>
            <i class='bx bx-chevron-right'></i>
            <h6>Bus Tickets</h6>
            <i class='bx bx-chevron-right'></i>
            <?php echo "<h6>$from to $to</h6>"; ?>
            <i class='bx bx-chevron-right'></i>
        </div>

        <?php echo "<h3>$from to $to</h3>"; ?>

        <div style="border-bottom: 1px solid #6d6b6b;">
            <?php echo "<h4>$from</h4>"; ?>
            <i class='bx bx-right-arrow-alt'></i>
            <?php echo "<h4>$to</h4>"; ?>
            <i class='bx bx-chevron-left'></i>
            <?php echo "<h4>$formattedDate</h4>"; ?>
            <i class='bx bx-chevron-right'></i>
            <button>Modify</button>
        </div>
    </div>

    <!--------------------------------- MAIN SECTION ------------------------------>
    <div class="main-section">
        <!---- SIDE MENU ---->
        <div class="side-menu">
            <img src="./images/poster.jpeg" alt="">
        </div>

        <!---- CONTAINER ---->
        <div class="container">
            <div class="content">
                <div>
                    <h6>71 Buses</h6>
                    <p>found</p>
                </div>
                <div>
                    <h6>SORT BY: </h6>
                    <p>Departure</p>
                    <p>Duration</p>
                    <p>Arrival</p>
                    <p>Ratings</p>
                    <p>Fare</p>
                </div>
                <div>
                    <p>Seats Available</p>
                </div>
            </div>

            <?php

                $bus = mysqli_query($db,"SELECT * FROM `buses` WHERE `pickuploc`='$from' AND `droploc`='$to'");

                if(!$bus){
                    die("Query Failed!!!".mysqli_error($db));
                }
                else{

                    while($row = mysqli_fetch_assoc($bus)){;

                        echo"
                            <div class='bus-details'>
                                <div class='full-specifications'>
                                    <div class='specifications'>
                                        <p><b style='font-size: 18px;'>$row[busname]</b></p>
                                        <p style='font-weight: 300;'>A/C Seater /Sleeper (2+1)</p>
                                    </div>
                                    <div class='specifications'>
                                        <p><b style='font-size: 18px;'>$row[pickuptime]</b></p>
                                        <p style='font-weight: 300;'>$row[pickuploc]</p>
                                    </div>
                                    <div class='specifications'>
                                        <p style='font-weight: 300;'>$row[duration]</p>
                                    </div>
                                    <div class='specifications'>
                                        <h5 style='font-size: 15px;'>$row[droptime]</h5>
                                        <p style='color: red;>$formattedDate</p>
                                        <p style='font-weight: 300;'>$row[droploc]</p>
                                    </div>
                                    <div class='specifications'>
                                        <div class='rating' style='margin-bottom: 10px;'>
                                            <i class='bx bx-star'></i>$row[rating]
                                        </div>
                                        <i class='bx bx-group'></i>690
                                    </div>
                                    <div class='specifications'>
                                        <p>Starts from</p>
                                        <p>£ <b style='font-size: 18px;'>$row[price]</b></p>
                                    </div>
                                    <div class='specifications'>
                                        <p style='font-weight: 300;'>$row[available] Seats available</p>
                                        <p style='font-weight: 300;'>$row[single] Single</p>
                                    </div>
                                </div>
                                <div class='features'>
                                    <i class='fa-solid fa-bottle-water'></i>
                                    <i class='bx bx-blanket'></i>
                                    <i class='fa-solid fa-charging-station'></i>
                                    <i class='fa-solid fa-mattress-pillow'></i>
                                </div>
                                <div class='button'>
                                    <a href='./booking-page.php?id=$row[busid]&date=$formattedDate'>View Seats</a>
                                </div>
                            </div>  
                        ";
                    }
                }
            ?>
        </div>
    </div>





    <!-- Custom Js Script -->
    <script src="./script.js"></script>


</body>

</html>