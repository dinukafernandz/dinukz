<!-- welcome.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Welcome Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:#cce6ff ;
            border;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background: #fff;
            border: 1px solid #66a3ff ;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 350px;
            padding: 20px;
            text-align: center;
        }

        .form-header {
            background:#4d94ff ;
            padding: 10px;
            color: #fff;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            margin: -20px -20px 20px -20px;
        }

        .form-header h1 {
            margin: 0;
            font-size: 18px;
        }

        .form-group {
            margin-bottom: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .form-group label {
            font-size: 14px;
            margin-right: 10px;
            width: 80px;
            text-align: left;
        }

        .form-group input {
            flex-grow: 1;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .form-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
        }

        .form-buttons input {
            width: 45%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #83a4d4;
            border-radius: 3px;
            background:#f4f4f4;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .form-buttons input:hover {
            background: #83a4d4;
            color: #fff;
            border-color: #83a4d4; 
        }

        .form-buttons input[type="submit"]:hover {
            background: #83a4d4;
            color: #fff;
            border-color: #83a4d4; 
        }

        .form-buttons input[type="submit"]:hover {
            background: #83a4d4;
            color: #fff;
            border-color: #83a4d4; 
        }
    </style>
</head>

<body>
    <div class="form-container">
        <div class="form-header">
            <h1>Welcome Students, Let us know you</h1>
        </div>
        <form action="home.php" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-buttons">
                <input type="submit" value="Proceed">
                <input type="button" value="Cancel" onclick="window.location.href='welcome.php';">
            </div>
        </form>
    </div>
</body>

</html>