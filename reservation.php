<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Reservation Form</title>
<style>
    body{
        background-color: black;
        color: white;
        font-family: Arial, sans-serif;
    }
    .container {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }
    input[type="text"],
    input[type="email"],
    input[type="date"],
    textarea,
    input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin-top: 10px;
        border: none;
        border-radius: 5px;
        background-color: rgba(255, 255, 255, 0.1);
        color: white;
        box-sizing: border-box;
    }
    input[type="submit"] {
        background-color: #007bff;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #0056b3;
    }
   </style>
</head>
<body>
<div class="container">
    <img src="https://www.bombaybrasserie.in/images/BB_Website_big.png" style="height: 60%; width:60%;"><br>
    <h2>Bombay Brasserie</h2>
    <form id="reservationForm" method="post" action="form_insert.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="Name" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required><br><br>
        <br>
        <select style="height: 30px; width: 60%;">
            <option value="">Select city</option>
            <option value="kolkata">kolkata</option>
            <option value="Bangalore">Bangalore</option>
            <option value="Chennai">Chennai</option>
            <option value="Mumbai">Mumbai</option>
        </select><br><br><br>
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea><br><br>
<label>Password</label>	
<input type="password"  name="password">       
 <input type="submit" value=" Make a Reservation" name="submit">
    </form>
</div>
</body>
</html>


