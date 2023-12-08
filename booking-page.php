<?php

    session_start();

    if(isset($_GET["id"])){
        $busid = $_GET["id"];
        $date = $_GET["date"];
    }

    require_once('./config.php');

    $bus = mysqli_query($db,"SELECT * FROM `buses` WHERE `busid`='$busid'");

    if(!$bus){
        die("Query Failed!!!".mysqli_error($db));
    }

    else{
        $row = mysqli_fetch_assoc($bus);
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

    <!-------------------- TOP BAR SECTION --------------->
    <div class="top-section">
        <div>
            <h6>Home</h6>
            <i class='bx bx-chevron-right'></i>
            <h6>Bus Tickets</h6>
            <i class='bx bx-chevron-right'></i>
            <?php echo "<h6>$row[pickuploc] to $row[droploc]</h6>"; ?>
            <i class='bx bx-chevron-right'></i>
        </div>

        <?php echo "<h3>$row[pickuploc] to $row[droploc]</h3>"; ?>

        <div style="border-bottom: 1px solid #6d6b6b;">
            <?php echo "<h4>$row[pickuploc]</h4>"; ?>
            <i class='bx bx-right-arrow-alt'></i>
            <?php echo "<h4>$row[droploc]</h4>"; ?>
            <i class='bx bx-chevron-left'></i>
            <?php echo "<h4>$date</h4>"; ?>
            <i class='bx bx-chevron-right'></i>
            <button>Modify</button>
        </div>
    </div>

    <!-------------------- MAIN SECTION --------------->
    <div class="main-section">
        <!---- SIDE MENU ---->
        <div class="side-menu">
            <img src="./images/poster.jpeg" alt="">
        </div>

        <!---- CONTAINER ---->
        <div class="container">
            <!----- BOOKING-SECTION ------>
            <div class="booking-section">
                <div class="seats">
                    <p><b>Seat Price</b></p>
                    <button class="active">All</button>
                    <button>1720</button>
                    <button>1941</button>
                    <button>2624</button>
                </div>
                <div class="seats-selector">
                    <div class="status">
                        <div class="item">Available</div>
                        <div class="item">Booked</div>
                        <div class="item">Selected</div>
                    </div>
                    <div class="all-seats">
                        <input type="checkbox" name="tickets" id="s1">
                        <label for="s1" class="seat"></label>
                    </div>
                </div> 

                <h3 id="count">Count : 0</h3>

                <form action="./status-page.php" method="post">

                    <input type="hidden" name="busid" value="<?php echo $busid; ?>">

                    <input type="hidden" name="date" value="<?php echo $date; ?>">

                    <label for="boarding">Boarding Point: </label>
                    <select id="boarding" name="boarding" required>
                        <option value="London">London</option>
                        <option value="Scotland">Scotland</option>
                        <option value="New Castle">New Castle</option>
                        <option value="Paris">Paris</option>
                    </select>

                    <label for="dropping">Dropping Point:</label>
                    <select id="dropping" name="dropping" required>
                        <option value="London">London</option>
                        <option value="Scotland">Scotland</option>
                        <option value="New Castle">New Castle</option>
                        <option value="Paris">Paris</option>
                    </select>

                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="phone">Phone:</label>
                    <input type="text" id="phone" name="phone" required>

                    <label for="gender">Gender:</label>
                    <select id="gender" name="gender" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>

                    <label for="age">Age:</label>
                    <input type="number" id="age" name="age" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <p style="text-align: center;" id="price"><b>Total Price: 0</b></p>

                    <input type="hidden" name="total_price" id="total_price" value="0">

                    <label style="display: flex;">
                        <input type="checkbox" id="terms" name="terms" required style="width: 15px;">
                        I have read all terms & conditions
                    </label>

                    <div class="buttons">
                        <button type="button" style="background-color: red;" id="myButton" onclick='return cancelPayment()'>Cancel Payment</button>
                        <button type="submit" onclick='return Payment()'>Payment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Custom Js Script -->
    <script src="./script.js"></script>


</body>

</html>