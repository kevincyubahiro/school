<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        /* Body Styles */
        body {
            background-color: rgb(0, 0, 0);
            color: white;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Navbar Styles */
        nav {
            background-color: rgb(39, 69, 95);
            height: 60px;
            width: 100%;
            padding: 10px 20px;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Navbar List Styling */
        ul {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            margin: 0;
            padding: 0;
        }

        li {
            list-style-type: none;
        }

        a {
            text-decoration: none;
            color: white;
            margin-left:-50px;
            margin: 0 15px;
            font-size: 18px;
            transition: color 0.3s ease;
        }

        a:hover {
            color: rgb(63, 239, 10); /* Light green on hover */
        }

        /* Login Button Styles */
        .lgt {
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 18px;
        }

        .lgt button {
            height: 45px;
            width: 120px;
            background-color: rgb(63, 239, 10);
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
            color: white;
            transition: background-color 0.3s ease;
        }

        .lgt button:hover {
            background-color: rgb(46, 187, 8); /* Darker green on hover */
        }

        /* Centered Text Styling */
        .txt {
            text-align: center;
            margin-top: 50px;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        /* Image Styling */
        .tss img {
            height: 300px;
            width: 300px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin-top: 20px;
        }

        .services {
    background-color: #ecf0f1;
    padding: 40px 20px;
    text-align: center;
}

.services h2 {
    color: #34495e;
    font-size: 36px;
    margin-bottom: 40px;
}

.service-list {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}

.service-item {
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 350px;
    text-align: center;
    padding: 20px;
    transition: transform 0.3s, box-shadow 0.3s;
}

.service-item:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.service-item img {
    width: 100%;
    height: auto;
    border-radius: 8px;
}

.service-item h3 {
    color: #2c3e50;
    font-size: 24px;
    margin: 20px 0;
}

.service-item p {
    font-size: 16px;
    color: #7f8c8d;
}

footer {
    background-color: #2c3e50;
    color: white;
    padding: 20px;
    text-align: center;
}

footer p {
    font-size: 14px;
}
        /* Responsiveness */
        @media (max-width: 768px) {
            ul {
                flex-direction: column;
                align-items: center;
            }

            a {
                font-size: 16px;
                margin: 10px 0;
            }

            .txt h1 {
                font-size: 28px;
            }

            .tss img {
                height: 250px;
                width: 250px;
            }

            .lgt button {
                height: 40px;
                width: 100px;
                font-size: 14px;
            }
        }

        /* Footer Styling */
footer {
    background-color: #2c3e50;
    color: #fff;
    padding: 40px 20px;
    font-size: 16px;
}

.footer-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 30px;
    max-width: 1200px;
    margin: 0 auto;
}

.footer-column {
    flex: 1;
    min-width: 200px;
    margin-bottom: 20px;
}

.footer-column h3 {
    font-size: 18px;
    margin-bottom: 15px;
    color: #ecf0f1;
}

.footer-column p, .footer-column a {
    color: #bdc3c7;
    text-decoration: none;
    font-size: 14px;
    margin-bottom: 10px;
}

.footer-column a:hover {
    color: #e74c3c;
}

/* Social Icons */
.social-icons {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.social-icon {
    color: #bdc3c7;
    text-decoration: none;
    font-size: 14px;
}

.social-icon:hover {
    color: #e74c3c;
}

/* Footer Bottom */
.footer-bottom {
    text-align: center;
    margin-top: 20px;
    font-size: 14px;
    color: #bdc3c7;
}

/* Responsive Design */
@media (max-width: 768px) {
    .footer-container {
        flex-direction: column;
        align-items: center;
    }

    .footer-column {
        text-align: center;
    }

    .social-icons {
        flex-direction: row;
        justify-content: center;
    }

    .social-icon {
        margin-right: 15px;
    }
}

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gikonko Technical Secondary School</title>
</head>
<body>
    <!-- Navigation Bar -->
    <div class="nav_bar">
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="kk.html">Administration</a></li>
                <li><a href="index.html">Services</a></li>
                <li><a href="insert2.php">Trainer's</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="about us.html">About Us</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <div class="lgt">
        <button>
            <a href="loginn.php" style="color: white; text-decoration: none;">Trainee's </a>
        </button>
    </div>
    </div>

    <!-- Login Button and Welcome Text -->
    

    <div class="txt">
        <h1>Welcome to Gikonko Technical Secondary School (GIKONKO TSS)</h1>
        <section class="services">
        <div class="container">
            <h2>Our kitchen</h2>
            <div class="service-list">
                <!-- Service 1 -->
                <div class="service-item">
                    <img src="kitchen.jpg" alt="Library Services">
                    <h3>Library Services</h3>
                    <p>Our state-of-the-art library offers a wide range of books, journals, and digital resources for student learning.</p>
                </div>

                <!-- Service 2 -->
                <div class="service-item">
                    <img src="kitchen1.jpg" alt="Sports Facilities">
                    <h3>Sports Facilities</h3>
                    <p>Our sports complex includes basketball courts, football fields, and a swimming pool to promote physical wellness.</p>
                </div>

                <!-- Service 3 -->
                <div class="service-item">
                    <img src="muvero.jpg" alt="Counseling Services">
                    <h3>Counseling Services</h3>
                    <p>We offer professional counseling services to support the emotional and mental well-being of our students.</p>
                </div>
                <!-- Service 3 -->
                <div class="service-item">
                    <img src="ravabo.jpg" alt="Counseling Services">
                    <h3>Counseling Services</h3>
                    <p>We offer professional counseling services to support the emotional and mental well-being of our students.</p>
                </div>

                <!-- Service 4 -->
               
            </div>
        </div>
    </section>

    
</body>
</html>

<section class="services">
    <div class="container">
        <h2>Software Developers Side</h2>
        <div class="service-list">
            <!-- Service 1 -->
            <div class="service-item">
                <img src="sod.jpg" alt="Library Services">
                <h3>Library Services</h3>
                <p>Our state-of-the-art library offers a wide range of books, journals, and digital resources for student learning.</p>
            </div>

            <!-- Service 2 -->
            <div class="service-item">
                <img src="mater.jpg" alt="Sports Facilities">
                <h3>Sports Facilities</h3>
                <p>Our sports complex includes basketball courts, football fields, and a swimming pool to promote physical wellness.</p>
            </div>

            <!-- Service 3 -->
            <div class="service-item">
                <img src="sod2.jpg" alt="Counseling Services">
                <h3>Counseling Services</h3>
                <p>We offer professional counseling services to support the emotional and mental well-being of our students.</p>
            </div>

            <!-- Service 4 -->
            <div class="service-item">
                <img src="sod3.jpg" alt="Online Learning">
                <h3>Online Learning</h3>
                <p>Our online learning platform enables students to access courses and materials from anywhere, anytime.</p>
            </div>
        </div>
    </div>
</section>



<section class="services">
    <div class="container">
        <h2>Our  Electrician Services</h2>
        <div class="service-list">
            <!-- Service 1 -->
            <div class="service-item">
                <img src="pop.png" alt="Library Services">
                <h3>Library Services</h3>
                <p>Our state-of-the-art library offers a wide range of books, journals, and digital resources for student learning.</p>
            </div>

            <!-- Service 2 -->
            <div class="service-item">
                <img src="elect.jpg" alt="Sports Facilities">
                <h3>Sports Facilities</h3>
                <p>Our sports complex includes basketball courts, football fields, and a swimming pool to promote physical wellness.</p>
            </div>

            <!-- Service 3 -->
            <div class="service-item">
                <img src="elec.jpg" alt="Counseling Services">
                <h3>Counseling Services</h3>
                <p>We offer professional counseling services to support the emotional and mental well-being of our students.</p>
            </div>

            <!-- Service 4 -->
            <div class="service-item">
                <img src="pop.png" alt="Online Learning">
                <h3>Online Learning</h3>
                <p>Our online learning platform enables students to access courses and materials from anywhere, anytime.</p>
            </div>
        </div>
    </div>
</section>
    </div>
    
<section class="services">
    <div class="container">
        <h2>Our  Building and construction Services</h2>
        <div class="service-list">
            <!-- Service 1 -->
            <div class="service-item">
                <img src="hh.png" alt="Library Services">
                <h3>Library Services</h3>
                <p>Our state-of-the-art library offers a wide range of books, journals, and digital resources for student learning.</p>
            </div>

            <!-- Service 2 -->
            <div class="service-item">
                <img src="mason1.jpg" alt="Sports Facilities"><br><br><br><br><br><br><br><br><br><br>
                <h3>Sports Facilities</h3>
                <p>Our sports complex includes basketball courts, football fields, and a swimming pool to promote physical wellness.</p>
            </div>

            <!-- Service 3 -->
            <div class="service-item">
                <img src="ma.jpg" alt="Counseling Services">
                <h3>Counseling Services</h3>
                <p>We offer professional counseling services to support the emotional and mental well-being of our students.</p>
            </div>

            <!-- Service 4 -->
            <div class="service-item">
                <img src="mason.png" alt="Online Learning">
                <h3>Online Learning</h3>
                <p>Our online learning platform enables students to access courses and materials from anywhere, anytime.</p>
            </div>
        </div>
    </div>
</section>
    </div>
     <!-- Footer Section -->
    <footer>
        <div class="footer-container">
            <!-- Column 1: About -->
            <div class="footer-column">
                <h3>About Us</h3>
                <p>ABC School is dedicated to providing quality education and fostering holistic development for all students.</p>
            </div>

            <!-- Column 2: Quick Links -->
            <div class="footer-column">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>

            <!-- Column 3: Social Media -->
            <div class="footer-column">
                <h3>Follow Us</h3>
                <div class="social-icons">
                    <a href="#" class="social-icon">Facebook</a>
                    <a href="#" class="social-icon">Twitter</a>
                    <a href="#" class="social-icon">Instagram</a>
                    <a href="#" class="social-icon">LinkedIn</a>
                </div>
            </div>

            <!-- Column 4: Contact -->
            <div class="footer-column">
                <h3>Contact Us</h3>
                <p>Email: gikonkotss.com</p>
                <p>Phone: +0784264621</p>
                <p>Address: Gikonko, Gisagara, Rwanda</p>
            </div>
        </div>

        <!-- Copyright -->
        <div class="footer-bottom">
            <p>&copy; 2024 ABC School. All rights reserved C.kevin</p>
        </div>
    </footer>
</body>
</html>
