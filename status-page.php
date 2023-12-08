<?php

    session_start();

    require_once('./config.php');

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $busid = $_POST["busid"];
        $date = $_POST["date"];
        $boarding = $_POST["boarding"];
        $dropping = $_POST["dropping"];
        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $gender = $_POST["gender"];
        $age = $_POST["age"];
        $email = $_POST["email"];
        $fare = $_POST["total_price"];

        $sql = mysqli_query($db,"SELECT * FROM `buses` WHERE `busid`='$busid'");

        $row = mysqli_fetch_assoc($sql);

        $pickuptime = $row['pickuptime'];
        $pickuploc = $row['pickuploc'];
        $droploc = $row['droploc'];

        $ticketid = md5(substr($busid,1,2).substr($name,0,3).random_int(10000,99999));


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


    <!----------------- Confirm Ticket Section ------------------->
    <section class="confirm-ticket">
        <div class="ticket">
            <h1 class="heading">Ticket is Confirmed !!!</h1>
            <div class="details">
                <?php echo "<h1>Ticket ID: $ticketid</h1> "; ?>
                <?php echo "<h1 class='journey'>$pickuploc to $droploc</h1> "; ?>
                <?php echo "<h1>$date $pickuptime</h1> "; ?>
                <?php echo "<h1>Name : $name</h1> "; ?>
                <?php echo "<h1>Email: $email</h1> "; ?>
                <?php echo "<h1>Gender: $gender</h1> "; ?>
                <?php echo "<h1>Age: $age</h1> "; ?>
                <?php echo "<h1>Boarding Point: $boarding</h1> "; ?>
                <?php echo "<h1>Dropping Point: $dropping</h1> "; ?>
                <?php echo "<h1>Phone No.: +44 $phone</h1> "; ?>
                <?php echo "<h1 class='price'>Total Amount: £ $fare</h1> "; ?>
                <button>Print Ticket</button>
            </div>
        </div>
    </section>

    <!-- Custom Js Script -->
    <script src="./script.js"></script>

</body>

</html>