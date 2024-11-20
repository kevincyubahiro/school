<!DOCTYPE html>
 <html lang="en">
 <head>
   <style>
      /* Reset some default margins and paddings */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: center;
}

h2 {
    color: #333;
    margin-bottom: 20px;
}

input[type="text"], input[type="date"], input[type="password"] {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 14px;
    color: #333;
}

button {
    width: 100%;
    padding: 12px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #45a049;
}

input:focus, button:focus {
    outline: none;
    border-color: #4CAF50;
}

   </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <form action="" method="post"auto_completed="off">
      <H2>Registration</H2>
<input type="text" name="firstname"placeholder="firstname"required><br><br>
<input type="text" name="secondname"placeholder="secondname"required><br><br>
<input type="date"name="bod"><br><br><br>
<input type="text" name="address"placeholder="address"required><br><br><br>
<input type="password" name="password"placeholder="password"required><br><br>
<button name="submit">SUBMIT</button>

    </form>
    <script>
      document.querySelector('form').addEventListener('submit', function(event) {
    // Prevent form submission if validation fails
    event.preventDefault();

    let firstname = document.querySelector('[name="firstname"]').value;
    let secondname = document.querySelector('[name="secondname"]').value;
    let dob = document.querySelector('[name="bod"]').value;
    let address = document.querySelector('[name="address"]').value;
    let password = document.querySelector('[name="password"]').value;

    // Check if all required fields are filled
    if (!firstname || !secondname || !dob || !address || !password) {
        alert("Please fill in all fields.");
        return;
    }

    // Check if the date of birth is in the past
    let dobDate = new Date(dob);
    let today = new Date();
    if (dobDate >= today) {
        return;
    }

   
});

    </script>
 </body>
 </html>
 <?php
 include("conn.php");
 if(isset($_POST['submit'])){
    $firstname=$_POST['firstname'];
    $secondname=$_POST['secondname'];
    $address=$_POST['address'];
    $password=$_POST['password'];
    $insert=mysqli_query($conn,"INSERT INTO trainer VALUES('','$firstname','$secondname','$address','$password')");
    if($insert){
    header("location:insert2.php");
    }
    else{
        echo"no";
    }
 }
 ?>