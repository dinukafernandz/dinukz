<!-- home.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color:#f4f4f4 ;
        }
        header {
            background-color:#cce6ff;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: black;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        nav ul li {
            display: inline;
            margin: 0 15px;
            font-size: 18px;
            cursor: pointer;
        }
        nav ul li:hover {
            text-decoration: underline;
        }
        .cart-icon {
            background-image: url('https://as1.ftcdn.net/v2/jpg/04/06/69/00/1000_F_406690058_3aFL85D8SpbYucvbwW6MOozhM6uu3jLx.jpg');
            background-size: cover;
            width: 60px;
            height: 60px;
        }
        .course-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            padding: 40px;
        }
        .course-item {
            background-color: #ccf5ff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .course-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }
        .course-item h3 {
            font-size: 25px;
            margin-bottom: 10px;
            color:#0000e6 ;
        }
        .course-item p {
            margin: 10px 0;
            font-size: 16px;
            color:#000000 ;
        }
        footer {
            text-align: center;
            margin-top: 10px;
            font-size: 20px;
            color: #666;
            padding: 20px 0;
            background-color:#cce6ff ;
            color: black;
        }
        button {
            background-color:#4d94ff ;
            border: none;
            padding: 10px 20px;
            color: white;
            border-radius: 5px;
            font-size: 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <!-- PHP to display the user's name and email -->
    <?php
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    ?>
    
    <!-- Header Section with Menu and Cart -->
    <header>
        <div>
            <h2>Welcome, <?php echo $name; ?> (<?php echo $email; ?>)</h2>
        </div>
        <nav>
            <ul>
                <li>Home</li>
                <li>Courses</li>
                <li>Affiliations</li>
                <li>How to Join</li>
                <li>Testimonials</li>
            </ul>
        </nav>
        <div class="cart-icon"></div>
    </header>
    
    <!-- Course Grid Section -->
    <div class="course-grid">

        <!-- Course 1 -->
        <div class="course-item">
            <h3>Quantitative Analysis</h3>
            <p>Code: EC0001</p>
            <p>(45 Hours)</p>
            <button> Rs. 35,000/-</button>
        </div>
        
        <!-- Course 2 -->
        <div class="course-item">
            <h3>Information Technology in Retailing</h3>
            <p>Code: EC0002</p>
            <p>(45 Hours)</p>
            <button>Rs. 35,000/-</button>
        </div>

        <!-- Course 3 -->
        <div class="course-item">
            <h3>Brand Innovation & Development</h3>
            <p>Code: EC0003</p>
            <p>(30 Hours)</p>
            
            <button>Rs. 25,000/-</button>
        </div>

        <!-- Course 3 -->
        <div class="course-item">
            <h3>Packaging & Logistic Management</h3>
            <p>Code: EC0004</p>
            <p>(30 Hours)</p>
            <button>Rs. 25,000/-</button>
        </div>

        <!-- Course 3 -->
        <div class="course-item">
            <h3>Service Marketing</h3>
            <p>Code: EC0005</p>
            <p>(40 Hours)</p>
            <button>Rs. 30,000/-</button>
    </div>

        <!-- Course 3 -->
        <div class="course-item">
            <h3>E-Commerce</h3>
            <p>Code: EC0006</p>
            <p>(45 Hours)</p>
            <button>Rs. 35,000/-</button>
        </div>
        
        <!-- More courses can be added here -->
    </div>

    <!-- header with Live Clock -->
<footer>
    <p>Current Date and Time: <span id="date-time"></span></p>
    </footer>

<!-- JavaScript to show live Date/Time -->
<script>
    function updateTime() {
        const now = new Date();

        // Get the formatted date string
        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        const dateString = now.toLocaleDateString('en-US', options);

        // Get the formatted time string
        const timeString = now.toLocaleTimeString('en-US');

        // Combine dateString and timeString
        const dateTimeString = `${dateString}, ${timeString}`;

        // Update the content of the span with the combined date and time
        document.getElementById('date-time').innerHTML = dateTimeString;
    }
    setInterval(updateTime, 1000); // Update every second
    updateTime();  // Call once to immediately display the time
</script>


</body>
</html>