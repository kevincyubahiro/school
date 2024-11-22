<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 400px;
    text-align: center;
}

h1 {
    margin-bottom: 20px;
}

.payment-options {
    display: flex;
    flex-direction: column;
    gap: 55px;
}

.payment-option {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
}

.payment-option input[type="radio"] {
    display: none;
}

.payment-option label {
    display: flex;
    align-items: center;
    cursor: pointer;
    padding: 10px;
    border-radius: 5px;
    border: 10px solid #ddd;
    background-color: #f9f9f9;
    transition: background-color 0.3s ease;
}
img{
    height:20%;
}

.payment-option label:hover {
    background-color: #e0e0e0;
}

.payment-option img {
    width: 30px;
    height: 30px;
}

.submit-btn {
    margin-top: 20px;
    background-color: #28a745;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.submit-btn:hover {
    background-color: #218838;
}

.submit-btn:disabled {
    background-color: #ccc;
    cursor: not-allowed;
}
li{
   list-style-type: none; 
}
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Methods</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Choose Payment school fees </h1>
        <div class="payment-options">
            <div class="payment-option">
                <input type="radio" id="credit-card" name="payment" value="credit-card">
                <label for="credit-card">
                    <li><a href="student.php"><img src="bpr.jpg" alt="Credit Card"></a></li>
                    
                    <p>bpr Bank</p>
                   
                </label>
            </div>
            <div class="payment-option">
                <input type="radio" id="paypal" name="payment" value="paypal">
                <label for="paypal">
                <li><a href="student.php"><img src="umwarimu.png" alt="Credit Card"></a></li><br>
                    <p>umwalimu sacco</p><br><br>
                </label>
            </div>
            <div class="payment-option">
                <input type="radio" id="bank-transfer" name="payment" value="bank-transfer">
                <label for="bank-transfer">
                    <li><a href="student.php"><img src="momo.png" alt="Credit Card"></a></li>
                    <p>Mobile momey</p>
                </label>
            </div>
        </div>
        <button class="submit-btn">Proceed to Payment</button>
    </div>
</body>
</html>
