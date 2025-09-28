<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #ffe5b4, #ffcc99); /* peach gradient */
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .dashboard-box {
            background: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.2);
            text-align: center;
            width: 400px;
        }
        .dashboard-box h1 {
            margin-bottom: 20px;
            color: #2d3436;
        }
        .dashboard-box p {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .dashboard-box a {
            display: inline-block;
            padding: 10px 20px;
            background: #ff9966; 
            color: white;
            text-decoration: none;
            border-radius: 8px;
            transition: background 0.3s;
        }
        .dashboard-box a:hover {
            background: #ff7043; 
        }
    </style>
</head>
<body>
    <div class="dashboard-box">
        <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
        <p>You have successfully logged in.</p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
