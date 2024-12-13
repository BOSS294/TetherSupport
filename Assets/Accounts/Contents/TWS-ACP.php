<head>
    <script src="https://vedahaven.shop/Assets/Admins/Scripts/toast-not.js"></script>
    <link rel="stylesheet" href="../../Resources/main.css">
    <style>
        .tws-acp {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: url('../../Resources/main-bg.jpg') center/cover no-repeat;
            background-attachment: fixed;
            font-family: 'Inter', sans-serif;
            overflow: hidden;
        }

        .square-card {
            width: 400px;
            height: auto;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.25);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.18);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            transition: transform 0.3s ease-in-out;
            padding: 30px;
            position: relative;
            animation: fadeInUp 1s ease-out;

        }
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .square-card h1 {
            font-size: 2rem;
            color: #ffd700; 
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
            margin-bottom: 15px;
        }

        .square-card p {
            font-size: 1rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 20px;
            max-width: 90%;
            word-wrap: break-word;
        }

        .square-card input {
            width: 80%;
            max-width: 300px;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 10px;
            font-size: 0.9rem;
            text-align: left;
            background: rgba(255, 255, 255, 0.3);
            color: #ffffff;
            box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
        }

        .square-card input::placeholder {
            color: #ffffff;
            opacity: 0.8;
        }
        .square-card .btn {
            display: inline-block;
            padding: 10px 50px;
            margin: 10px 5px;
            font-size: 1rem;
            color: #fff;
            background: rgba(255, 255, 255, 0.2); 
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
            cursor: pointer;
            transition: all 0.3s ease-in-out;
            text-decoration: none;
            transform: translateZ(0);
        }

        .square-card .btn:hover {
            transform: translateY(-5px) scale(1.05);
            background: rgba(255, 255, 255, 0.3); 
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.4);
        }

        .square-card .btn:active {
            transform: translateY(1px) scale(0.98); 
            background: rgba(255, 255, 255, 0.4);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }



        .square-card .link {
            margin-top: 15px;
            font-size: 0.9rem;
            color: #ffd700; 
            text-decoration: none;
            transition: color 0.3s;
        }

        .square-card .link:hover {
            color: #ffa500;
        }

        @media (max-width: 768px) {
            .square-card {
                width: 320px;
                padding: 20px;
            }

            .square-card h1 {
                font-size: 1.6rem;
            }

            .square-card p {
                font-size: 0.9rem;
            }

            .square-card .btn {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<div class="tws-acp">
    <div class="square-card">
        <h1>Welcome Back!</h1>
        <p>Login to access your dashboard</p>
        <form action="/login" method="POST">
            <input type="email" placeholder="Email Address" required>
            <input type="password" placeholder="Password" required>
            <button type="submit" class="btn">Sign In</button>
        </form>
        <a href="/forgot-password" class="link">Unable to login ?? Contact Support</a>

    </div>
</div>
<script>
    document.querySelector('form').addEventListener('submit', function(event) {
        event.preventDefault(); 

        const email = document.querySelector('input[type="email"]').value;
        const password = document.querySelector('input[type="password"]').value;

        const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (!emailPattern.test(email)) {
            showToast('Please enter a valid email address.', 'error');
            return;
        }

        if (password.length < 8) {
            showToast('Password must be at least 8 characters long.', 'error');
            return;
        }

        authenticateUser(email, password);
    });

    function authenticateUser(email, password) {
    const simulatedResponse = (email === 'demo@gmail.com' && password === 'demo@1234') 
        ? { success: true, message: 'Login successful!' } 
        : { success: false, message: 'Invalid credentials. Please try again.' };

    if (simulatedResponse.success) {
        showToast(simulatedResponse.message, 'success');
        window.location.href = 'dashboard.php';
    } else {
        showToast(simulatedResponse.message, 'error');
    }
}

</script>
 