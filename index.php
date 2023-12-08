<?php

    session_start();

    require_once('./config.php');

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

    <!---------------------------- BANNER SECTION ----------------------->
    <section class="banner">
        <div>
            <form action="./searchbuses.php" method="post">
                <label for="from">From:</label>
                <select id="from" name="from" required>
                    <option value="London">London</option>
                    <option value="Scotland">Scotland</option>
                    <option value="New Castle">New Castle</option>
                    <option value="Paris">Paris</option>
                </select>

                <label for="to">To:</label>
                <select id="to" name="to" required>
                    <option value="London">London</option>
                    <option value="Scotland">Scotland</option>
                    <option value="New Castle">New Castle</option>
                    <option value="Paris">Paris</option>
                </select>

                <label for="date">Message:</label>
                <input type="date" id="date" name="date" required>

                <button type="submit">Search Buses</button>
            </form>
        </div>
        <div class="image">
            <img src="./images/banner/banner5.jpeg" alt="">
        </div>
    </section>

    <!---------------------------- Gallery SECTION ----------------------->
    <section class="gallery">
        <h1>Our Buses</h1>
        <div class="images">
            <div>
                <img src="./images/buses/bus1.jpeg" alt="">
            </div>
            <div>
                <img src="./images/buses/bus2.jpeg" alt="">
            </div>
            <div>
                <img src="./images/buses/bus3.jpeg" alt="">
            </div>
            <div>
                <img src="./images/buses/bus4.jpeg" alt="">
            </div>
            <div>
                <img src="./images/buses/bus5.jpeg" alt="">
            </div>
            <div>
                <img src="./images/buses/bus6.jpeg" alt="">
            </div>
        </div>
    </section>


    <!---------------------------- Global Presence SECTION ----------------------->
    <section class="global">
        <h1>Global Presence</h1>
        <div class="images">
            <div><img src="./images/country/Colombia.svg" alt="">
                <p>Colombia</p>
            </div>
            <div><img src="./images/country/India.svg" alt="">
                <p>India</p>
            </div>
            <div><img src="./images/country/Indonesia.svg" alt="">
                <p>Indonesia</p>
            </div>
            <div><img src="./images/country/Malaysia.svg" alt="">
                <p>Malaysia</p>
            </div>
            <div><img src="./images/country/Peru.svg" alt="">
                <p>Peru</p>
            </div>
            <div><img src="./images/country/Singapore.svg" alt="">
                <p>Singapore</p>
            </div>
        </div>
    </section>

    <!---------------------------- BOOK TICKETS ONLINE SECTION ----------------------->
    <section class="book-tickets">
        <h1>Book Bus Tickets Online</h1>
        <div class="content">
            <p>
                It can be hard to find the right bus ticket booking system that fits your needs. Not all bus booking 
                software are created equal. Some are difficult to use, some have outdated software solution, and others
                 just don't provide the level of technical support that fits your business needs.
            </p>
            <p>BusTickets is the perfect software solution for your bus ticketing needs. Our online bus booking system
                is easy to use, our technology is up-to-date, and our customer service team is here to help you and bus
                operators every step of the way. Plus, we provide a variety of features that other bus ticketing systems
                don't offer, like fare alerts, real time seat availability and selection data, bus schedules, route
                management, and trip details. So look no further than BusTickets! Our bus ticket reservation system
                makes more opportunities to sell, track, and manage transportation tickets. Our experienced team is also
                here to help you every step of the way! So why wait? Get started today and see the difference
                BusTickets makes!
            </p>
        </div>
    </section>


    <!---------------------------- FAQ SECTION ----------------------->
    <section class="faq">
        <h1>FAQs</h1>
        <div class="questions">
            <div class="question">
                <h3>Can I track the location of my booked bus online?</h3>
            </div>
            <div class="answer">
                <p>Yes, you can track your bus online by using our bus tracking app feature called “Track My Bus”. This
                    feature allows passengers and their families to track the live bus tracking location. You may follow
                    your bus on a map and use the information to plan your trip to the boarding point and to get off at
                    the correct stop. Family and friends may also check the bus position to plan pick-ups and ensure
                    your safety.</p>
            </div>
        </div>

        <div class="questions">
            <div class="question">
                <h3>What are the advantages of purchasing a bus ticket with BusTickets?</h3>
            </div>
            <div class="answer">
                <p>There are many advantages to purchasing online bus tickets with BusTickets. BusTickets is India’s most
                    trusted bus ticket company, where you can book any type of private or Government owned buses. BusTickets
                    allows you to find the different types of buses, choose the preferred bus seats, and your nearest
                    boarding and dropping points. You can also filter the buses based on timings like morning, evening
                    bus etc.</p>
            </div>
        </div>

        <div class="questions">
            <div class="question">
                <h3>Why book bus tickets online on BusTickets?</h3>
            </div>
            <div class="answer">
                <p>Booking bus tickets online on BusTickets is increasingly becoming the preferred choice for travelers due
                    to its numerous advantages over traditional methods.With BusTickets, customers can book their bus
                    tickets effortlessly from the comfort of their homes, avoiding the inconvenience of standing in long
                    lines at bus stations or travel agencies. Online bus booking not only offers the luxury of comparing
                    different bus schedules and operators but also presents various discount offers and exclusive deals,
                    resulting in significant savings.

                    Payment security is another notable feature of online booking, which ensures that your financial
                    information is well-protected against fraud. Additionally, customers get the privilege to pick their
                    seats, providing a customized travel experience. Online bus booking platforms give real-time updates
                    about any changes in the bus timetable, including delays or cancellations, enabling better planning.

                    The convenience doesn't stop here; travelers can even compare onboard amenities like charging points
                    or snacks, further enhancing the travel experience.</p>
            </div>
        </div>
    </section>


    <!---------------------------- Footer SECTION ----------------------->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="about">
                    <h3>About Us</h3>
                    <p>BusTickets is the world's largest online bus ticket booking service trusted by over 25 million happy
                        customers globally. BusTickets offers bus ticket booking through its website, iOS and Android mobile
                        apps for all major routes.</p>
                    <ul class="icons">
                        <li><a href=""><i class="fab fa-facebook-f" style="color: #fff;"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter" style="color: #fff;"></i></a></li>
                        <li><a href=""><i class="fab fa-instagram" style="color: #fff;"></i></a></li>
                        <li><a href=""><i class="fab fa-whatsapp" style="color: #fff;"></i></a></li>
                    </ul>
                </div>
                <div class="quicklinks">
                    <h3>About BusTickets</h3>
                    <ul>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#">Sitemap</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Values</a></li>
                        <li><a href="#">Offers</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="quicklinks">
                    <h3>Info</h3>
                    <ul>
                        <li><a href="#">T&C</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">User Agreement</a></li>
                    </ul>
                </div>
                <div class="footer-content">
                    <h3>Global Sites</h3>
                    <ul>
                        <li><a href="#">India</a></li>
                        <li><a href="#">Singapore</a></li>
                        <li><a href="#">Malaysia</a></li>
                        <li><a href="#">Indonesia</a></li>
                        <li><a href="#">Peru</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright">
        <p>Copright © 2023 BusTicktes | All Rights Reserved</p>
    </div>


    <!-- Custom Js Script -->
    <script src="./script.js"></script>

</body>

</html>