<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Webpage</title>
    <style>
        /* Resetting some default styles */
        body, h1, p {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        /* Body Styling */
        body {
            background-color: #f7f7f7;
            padding: 20px;
            line-height: 1.6;
        }

        /* Header Styling */
        header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 20px 0;
            border-radius: 5px;
        }

        header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        header p {
            font-size: 1rem;
        }

        /* Main Content Section */
        main {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }

        main h2 {
            color: #333;
            font-size: 1.8rem;
            margin-bottom: 15px;
        }

        main p {
            font-size: 1rem;
            color: #555;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        /* PDF Link Styling */
        .pdf-link {
            font-size: 1.2rem;
            color: #4CAF50;
            text-decoration: none;
            padding: 10px 15px;
            background-color: #f1f1f1;
            border: 1px solid #4CAF50;
            border-radius: 5px;
            display: inline-block;
        }

        .pdf-link:hover {
            background-color: #4CAF50;
            color: white;
            border-color: #4CAF50;
        }

        /* Footer Styling */
        footer {
            margin-top: 40px;
            text-align: center;
            padding: 10px;
            background-color: #333;
            color: white;
            border-radius: 5px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            header h1 {
                font-size: 2rem;
            }
            main h2 {
                font-size: 1.5rem;
            }
            .pdf-link {
                font-size: 1rem;
            }
        }
        li{
            list-style-type: none;
           
            
        }
        button{
            height: 40%;
            width: 10%;
            padding:10px;
            
            margin:10px;
            background-color: blue;
        }
        a{
            color:white;
            
            text-decoration:none;
        }
        
    </style>
</head>
<body>
    <button><a href="image.php">back</a></button>

    

   
    <a href="loginn.php" style="background-color:red;height:100px;">cancel</a></button>
    
    <!-- Header Section -->
    <header>
        <h1>blockchain courses</h1>
        <p></p>
    </header>

    <!-- Main Content Section -->
    <main>
        <h2>Blockchain</h2>
        <p><strong>What is Blockchain?</strong><br>
            Blockchain is a decentralized digital ledger technology that securely records transactions across a distributed network of computers (also known as nodes). It allows multiple parties to maintain and verify a shared, immutable record of data without the need for a trusted central authority like a bank or government. Blockchain is most commonly known for its use in cryptocurrencies, like Bitcoin, but it has applications in various industries, including finance, healthcare, supply chain, and more.</p>
        


        <!-- Download PDF Link -->
        <h2>Download Important Notes</h2>
        <p>For your convenience, we have made available a PDF note on [insert topic, e.g., "Blockchain Basics"]. You can download the PDF document below to help you with your studies.</p>
        <a href="https://www.buffalo.edu/content/dam/www/ubblockchain/files/basics/001%20What%20is%20Blockchain.pdf" class="pdf-link" target="_blank">Download BLOCKCHAIN  PDF Note</a>
    </main>

    <!-- Footer Section -->
   

    <!-- Header Section -->
    <header>
        <h1>nosql courses</h1>
       
    </header>

    <!-- Main Content Section -->
    <main>
        <h2>NOSQL</h2>
        <p><strong>What is NO SQL</strong><br>
            A NoSQL database is a database that stores data in a format other than relational tables</p>
        


        <!-- Download PDF Link -->
        <h2>Download Important Notes</h2>
        <p>For your convenience, we have made available a PDF note on [insert topic, e.g., "NOSQL Basics"]. You can download the PDF document below to help you with your studies.</p>
        <a href="https://bmsce.ac.in/Content/CS/NoSql-Unit-1.pdf" class="pdf-link" target="_blank">Download NOSQL PDF Note</a>
    </main>

    <!-- Header Section -->
    <header>
        
        <p><h1>machine learning</h1></p>
    </header>

    <!-- Main Content Section -->
    <main>
        <h2>Machine learning</h2>
        <p><strong>What is ML?</strong><br>
            ML stands for machine learning, which is a branch of artificial intelligence (AI) that allows machines to learn from data without being explicitly programmed:</p>
        


        <!-- Download PDF Link -->
        <h2>Download Important Notes</h2>
        <p>For your convenience, we have made available a PDF note on [insert topic, e.g., "ML Basics"]. You can download the PDF document below to help you with your studies.</p>
        <a href="https://mrcet.com/downloads/digital_notes/CSE/IV%20Year/MACHINE%20LEARNING(R17A0534).pdf" class="pdf-link" target="_blank">Download ML PDF Note</a>
    </main>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Gikonko Technical Secondary School. All Rights Reserved.</p>
    </footer>
</body>
</html>
