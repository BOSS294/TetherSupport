<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>
        nav {
            position: fixed;
            top: 10%;
            left: 50%;
            transform: translate(-50%, -50%); 
            width: 70%;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(12px);
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            padding: 12px 30px;
            z-index: 100;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all 0.3s ease;
        }

        .brand-name {
            font-size: 1.8rem;
            font-weight: bold;
            color: #ffffff;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
            font-family: 'Poppins', sans-serif; 
            letter-spacing: 2px;
            transition: color 0.3s ease;
        }

        .brand-name:hover {
            color: #4A90E2;
        }

        .icons {
            display: flex;
            align-items: center;
        }

        .icon {
            position: relative;
            margin-left: 10px;
            margin-right: 10px;
            width: 45px;
            height: 45px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
            border-radius: 50%;
            color: white;
            font-size: 22px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.3s ease;
        }

        .icon:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.3);
        }

        .icon:active {
            transform: scale(0.95);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2); 
            transition: transform 0.1s, box-shadow 0.1s ease;
        }
        .notification {
            position: relative;
            background: rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
            border-radius: 50%;
            width: 45px;
            height: 45px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 22px;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s, box-shadow 0.3s ease;
        }

        .notification:hover {
                transform: scale(1.1);
                box-shadow: 0 8px 12px rgba(0, 0, 0, 0.3);
        }

        .notification .count {
                position: absolute;
                top: -5px;
                right: -5px;
                background-color: #ff6347; 
                color: white;
                font-size: 12px;
                border-radius: 50%;
                padding: 5px;
                width: 10px;
                height: 10px;
                display: flex;
                justify-content: center;
                align-items: center;
        }

        .icons i {
            font-size: 1.5rem;
        }
        .icon, .notification {
            position: relative;
        }

        .icon::after, .notification::after {
            content: attr(data-tooltip);
            position: absolute;
            bottom: 100%;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 6px 12px;
            border-radius: 5px;
            font-size: 12px;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s, transform 0.3s;
            pointer-events: none;
            transform: translate(-50%, -10px); 
        }

        .icon:hover::after, .notification:hover::after {
            opacity: 1;
            visibility: visible;
            transform: translate(-50%, -15px); 
        }

        .icon:hover::after, .notification:hover::after {
            animation: fadeInUp 0.3s ease-out forwards;
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translate(-50%, -10px);
            }
            100% {
                opacity: 1;
                transform: translate(-50%, -15px);
            }
        }

        .notification::after {
            width: max-content;
            padding: 6px 12px;
            font-size: 12px;
        }

        .icon::after {
            width: max-content;
            padding: 6px 12px;
            font-size: 12px;
        }

    </style>
</head>

<nav>
    <div class="brand-name">TetherSupport</div>

    <div class="icons">
        <div class="icon" data-tooltip="You are logged in">
            <i class="material-icons">person</i>
            
        </div>
        <div class="notification" data-tooltip="Click to view notifications">
            <i class="material-icons">notifications</i>
            <div class="count">3</div>
        </div>
        <div class="icon" data-tooltip="Click to open settings">
            <i class="material-icons">settings</i>
            
        </div>

    </div>
</nav>
