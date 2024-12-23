<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        /* General Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: #f4f4f4;
}

/* Navigation Bar */
.navbar {
   
    
    background-color: #333;
    padding: 5px;
}



.navbar nav ul li {
    display: inline;
    margin-left: 20px;
}



/* About Section */
.about {
    background-color: #ffffff;
    padding: 50px 20px;
    text-align: center;
}

.about h2 {
    font-size: 36px;
    color: #333;
    margin-bottom: 20px;
}

.about p {
    color: #666;
    font-size: 18px;
    margin-bottom: 20px;
}

.about-image {
    width: 100%;
    max-width: 600px;
    margin-top: 20px;
}

/* Courses Section */
.courses {
    background-color: #eeeeee;
    padding: 50px 20px;
    text-align: center;
}

.courses h2 {
    font-size: 36px;
    margin-bottom: 30px;
}

.course-cards {
    display: flex;
    justify-content: center;
    gap: 20px;
}

.course-card {
    background-color: white;
    border-radius: 10px;
    width: 200px;
    padding: 20px;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.course-card img {
    width: 100%;
    border-radius: 10px;
}

.course-card h3 {
    margin-top: 15px;
    font-size: 22px;
    color: #333;
}

.course-card p {
    font-size: 14px;
    color: #666;
}
.course-card img {
    margin-left: -40px;
}

/* Faculty Section */
.faculty {
    background-color: #ffffff;
    padding: 50px 20px;
    text-align: center;
}

.faculty h2 {
    font-size: 36px;
    margin-bottom: 30px;
}

.faculty-cards {
    display: flex;
    justify-content: center;
    gap: 20px;
}

.faculty-card {
    background-color: white;
    border-radius: 10px;
    width: 200px;
    padding: 20px;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.faculty-card img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin-bottom: 15px;
}

.faculty-card h3 {
    font-size: 22px;
    color: #333;
}

.faculty-card p {
    font-size: 14px;
    color: #666;
}

/* Contact Section */
.contact {
    background-color: #eeeeee;
    padding: 50px 20px;
    text-align: center;
}

.contact h2 {
    font-size: 36px;
    margin-bottom: 30px;
}

.contact form {
    max-width: 600px;
    margin: 0 auto;
}
h1{
    color: #fff;
    text-align: center;
}

.contact form input, .contact form textarea {
    width: 100%;
    padding: 15px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

.contact form button {
    padding: 15px 20px;
    background-color: #333;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
}

.contact form button:hover {
    background-color: #555;
}

/* Footer */
.footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 20px;
    margin-top: 40px;
}

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Administration</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Navigation Bar -->
    <header class="navbar">
        <div class="logo">
            
        </div>
        <nav>
            <ul>
               <h1>Gikonko technical secondary school Administration</h1>
            </ul>
        </nav>
    </header>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <h2>School Mananger</h2>
            
            <p>Welcome to our high school platform! We are committed to providing quality education and a supportive environment for all students.</p>
            <p>The mission of a school leader is to set a vision and  <br> mission for the school, and to guide the school community towards achieving that vision. <br>
             A school leader's responsibilities include: 
Communicating the school's mission <br>
A school leader should communicate the school's mission, vision, and values  to all stakeholders, including students, teachers, and staff</p>
            <img src="mng.jpg" alt="School Building" class="about-image"><br> <br>
            <h3> H.O.T  :  Chem NSHIMYIMANA</h3>
        </div>
    </section>

    <!-- Courses Section -->
    <section id="courses" class="courses">
        <div class="container">
            <h2>Our trainee's</h2>
            <div class="course-cards">
                <div class="course-card">
                    <img src="gustave.jpg" alt="bsn Course">
                    <h3>Gustave MUVARA</h3>
                    <p>Explore the world of numbers and logic through advanced mathematics courses.
                        Explore the world of numbers and logic through advanced mathematics courses.
                        Explore the world of numbers and logic through advanced mathematics courses.
                    </p><br><br>
                    <img src="sm.png" alt="bsn Course">
                    <h3>Samuel NSENGIMANA</h3>
                    <p>Explore the world of numbers and logic through advanced mathematics courses.</p>
                </div>
                <div class="course-card">
                    <img src="ange.jpg" alt="bsn Course">
                    <h3>BYUKUSENGE Ange sylvia</h3>
                    <p>Explore the world of numbers and logic through advanced mathematics courses.</p><br><br><br><br>
                    <img src="michel2.png" alt="bsn Course">
                    <h3>Michel NDUWIMANA</h3>
                    <p>Explore the world of numbers and logic through advanced mathematics courses.</p>
                </div>
                <div class="course-card">
                    <img src="alice.png" alt="Science Course"><br><br>
                    <h3>Alice UWASE</h3>
                    <p>Discover the wonders of the natural world with hands-on science experiments.</p><br><br><br><br>
                    <img src="mutwa.jpg" alt="Science Course"><br><br>
                    <h3>Scretery</h3>
                    <p>Discover the wonders of the natural world with hands-on science experiments.</p>
                </div>
                <div class="course-card">
                    <img src="musolin.png" alt="developer Course" style="height: 230px;       width: 230px;;
                    "> <br><br>
                     <h3>MUNYANDEKWE Charles</h3>
                     <p>Learn about the history of the world and how it shapes the present day.</p><br><br><br><br>
                    <img src="bt1.jpg" alt="developer Course" style="height: 230px;       width: 230px;;
                    "> <br><br>
                    <h3>MUNYANDEKWE Charles</h3>
                    <p>Learn about the history of the world and how it shapes the present day.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Faculty Section -->
    <section id="faculty" class="faculty">
        <div class="container">
            <h2>Our Faculty</h2>
            <div class="faculty-cards">
                <div class="faculty-card">
                    <img src="me.jpg" alt="Faculty Member">
                    <h3> I.T CKevin</h3>
                    <p>Web 3.0 and ML</p>
                </div>
                <div class="faculty-card">
                    <img src="aime.jpg" alt="Faculty Member">
                    <h3>I.T Aime</h3>
                    <p>Non-relational Db and Smart Contract</p>
                </div>
                <div class="faculty-card">
                    <img src="https://via.placeholder.com/150x150" alt="Faculty Member">
                    <h3>G.Souvenir</h3>
                    <p>Develop mobile  app by using Flutter</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <p>If you have any questions, feel free to reach out to us.</p>
            <form>
                <input type="text" placeholder="Your Name" required>
                <input type="email" placeholder="Your Email" required>
                <textarea placeholder="Your Message" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 High School Platform. All rights reserved.</p>
    </footer>

</body>
</html>
