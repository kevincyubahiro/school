<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    /* General Reset */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Body and Layout */
body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
  color: #333;
}

header {
  background-color: #0044cc;
  color: white;
  padding: 20px;
  text-align: center;
}

header h1 {
  font-size: 2rem;
}

footer {
  background-color: #0044cc;
  color: white;
  text-align: center;
  padding: 20px;
  position: fixed;
  bottom: 0;
  width: 100%;
}

/* Gallery Section */
.gallery {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
  gap: 20px;
  padding: 40px;
}

.gallery-item {
  position: relative;
  overflow: hidden;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.gallery-item img {
  width: 110%;
  height: 110%;
  object-fit: cover;
  transition: transform 0.3s ease;
  border-radius: 10px;
}

.gallery-item:hover img {
  transform: scale(1.1);
}

.overlay {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  font-size: 1.5rem;
  font-weight: bold;
  background-color: rgba(0, 0, 0, 0.5);
  padding: 10px 20px;
  border-radius: 5px;
  opacity: 0;
  transition: opacity 0.3s ease;
}

.gallery-item:hover .overlay {
  opacity: 1;
}

/* Footer */
footer {
  margin-top: 20px;
}

  </style>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>School Image Services</title>
   <link rel="stylesheet" href="assets/css/style.css">
 </head>
 <body>
  <li><a href="home.php">back</a>
    
  </li>
 
   <!-- Header Section -->
   <header>
     <div class="logo">
       <h1>School Image Services</h1>
     </div>
   </header>
 
   <!-- Gallery Section -->
   <section class="gallery">
     <div class="gallery-item">
       <img src="sod.jpg" alt="Classroom">
       <div class="overlay">
         <p>Software development</p>
       </div>
     </div>
     <!--  image---->
     <div class="gallery-item">
       <img src="mas.jpg" alt="Classroom">
       <div class="overlay">
         <p>Building And Construction</p>
       </div>
     </div>
     <div class="gallery-item">
       <img src="elec.jpg" alt="Sports">
       <div class="overlay">
         <p>Electricity Generation</p>
       </div>
     </div>
     <div class="gallery-item">
       <img src="cap.jpg" alt="Sports">
       <div class="overlay">
         <p>Capentry</p>
       </div>
     </div>
     <div class="gallery-item">
       <img src="hai.jpg" alt="Event">
       <div class="overlay">
         <p>HairDressing</p>
       </div>
     </div>
     <div class="gallery-item">
       <img src="tai.jpg" alt="Event"><br> <br>
       <div class="overlay">
         <p>Trailoring</p>
       </div>
     </div>
     <div class="gallery-item">
       <img src="tai.jpg" alt="Event"><br> <br>
       <div class="overlay">
         <p>Trailoring</p>
       </div>
     </div>
     <div class="gallery-item">
       <img src="tai.jpg" alt="Event"><br> <br>
       <div class="overlay">
         <p>Trailoring</p>
       </div>
     </div>
     <div class="gallery-item">
       <img src="tai.jpg" alt="Event"><br> <br>
       <div class="overlay">
         <p>Trailoring</p>
       </div>
     </div>
     <div class="gallery-item">
       <img src="tai.jpg" alt="Event"><br> <br>
       <div class="overlay">
         <p>Trailoring</p>
       </div>
     </div>
   </section>
 
   <!-- Footer Section -->
   <footer>
     <p>&copy; 2024 School. All Rights Reserved C.kevin</p>
   </footer>
 
 </body>
 </html>
 