<html>
<head>
<title>wedding form</title>
<style>
.wedHead{
            background-color: rgb(220, 235, 172);
            padding-left: 570px;
            background-image: url(wedform.jpeg);
        }
.wed{
            height: 550px;
            width: 400px;
            background-color: rgb(143, 153, 120);
            text-align: center;
            border-radius: 50px;
            border-bottom: 1px;
            border:none;
            outline:none; 
            border-bottom: 1px solid black;
        
        }
        #name{
            border:none;
            outline:none; 
            border-bottom: 1px solid black; 
            background-color: rgb(143, 153, 120);
        }
        #email{
            border:none;
            outline:none; 
            border-bottom: 1px solid black; 
            background-color: rgb(143, 153, 120);
        }
        #phone{
            border:none;
            outline:none; 
            border-bottom: 1px solid black; 
            background-color: rgb(143, 153, 120);
        }
        #date{
            border:none;
            outline:none; 
            border-bottom: 1px solid black; 
            background-color: rgb(143, 153, 120);
            width: 170px;
        }
        #guests{
            border:none;
            outline:none; 
            border-bottom: 1px solid black; 
            background-color: rgb(143, 153, 120);
            width: 170px;
        }
        #message{
            border:none;
            outline:none; 
            border-bottom: 1px solid black; 
            background-color: rgb(143, 153, 120);
        }
</style>
</head>
<body>
<div class="wedHead">
        <div class="wed">
            <form id="bookingForm" action="wed_insert_form.php" method="POST">
                <label for="name">Your Name:</label><br><br>
                <input type="text" id="name" name="name" required><br><br>
            
                <label for="email">Email:</label><br><br>
                <input type="email" id="email" name="email" required><br><br>
            
                <label for="phone">Phone:</label><br><br>
                <input type="tel" id="phone" name="phone" required><br><br>
            
                <label for="date">Wedding Date:</label><br><br>
                <input type="date" id="date" name="date" required ><br><br>
            
                <label for="guests">Number of Guests:</label><br><br>
                <input type="number" id="guests" name="guests" required><br><br>
            
                <label for="message">Additional Requests:</label><br><br>
                <textarea id="message" name="message" rows="4"></textarea><br><br>
            
                <button type="submit">Submit</button>
            </form>
            </div>
        </div>
    </div>
</body>
</html>