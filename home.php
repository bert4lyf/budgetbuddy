<?php
session_start();
if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];

}else{
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <!-- Tailwind CSS for utility classes -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Inter font from Google Fonts */
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f0f4f8; /* A light, clean background color */
            
            /* Background image styling */
            background-image: url('https://images.unsplash.com/photo-1549414002-3c467a147e45?q=80&w=2670&auto=format&fit=crop'); /* Replace this URL with your desired image */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            position: relative;
        }

        /* Overlay for the faded background effect */
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(240, 244, 248, 0.85); /* Faded effect with opacity */
            z-index: -1; /* Place the overlay behind the content */
        }
        
        .user-details {
            background: #ffffff;
            border-radius: 1.5rem; /* Rounded corners for a modern feel */
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            padding: 2.5rem;
            width: 100%;
            max-width: 400px;
            text-align: center;
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            position: relative;
            z-index: 1; /* Ensure content is on top of the overlay */
        }

        .user-details h1 {
            font-weight: 700;
            font-size: 2.5rem;
            color: #1f2937;
        }

        .user-details p {
            color: #4b5563;
            font-size: 1rem;
            line-height: 1.5;
        }

        .user-info-text {
            border-top: 1px solid #e5e7eb;
            border-bottom: 1px solid #e5e7eb;
            padding: 1rem 0;
            margin-bottom: 1rem;
        }

        .user-info-text p {
            margin: 0.5rem 0;
            text-align: center;
            font-weight: 700;

        }
        
        /* Button styling with hover animation */
        .btn {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            border-radius: 0.75rem;
            font-weight: 600;
            text-decoration: none;
            transition: transform 0.2s ease, background-color 0.2s ease, box-shadow 0.2s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .btn-primary {
            background-color: #4f46e5;
            color: #ffffff;
        }
        
        .btn-primary:hover {
            background-color: #4338ca;
        }

        .btn-secondary {
            background-color: #ef4444;
            color: #ffffff;
        }

        .btn-secondary:hover {
            background-color: #dc2626;
        }
    </style>
</head>

<body>
    <div class="user-details">
        <h1 class="text-3xl font-extrabold text-gray-800">Welcome</h1>
        <div class="user-info-text">
            <?php
            echo '<p><strong><span class="font-bold text-gray-700"></strong></span> ' . htmlspecialchars($user['name']) . '</p>';
            ?>
        </div>

        <a href="./main.html" class="btn btn-primary">BudgetBuddy Web App</a>
        <a href="logout.php" class="btn btn-secondary">Logout</a>
    </div>
</body>
</html>
