<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <style>
        .quick-analytics-container {
            margin-left: 15%;
            margin-top: 10%;
            margin-bottom: 30px;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(15px);
            border-radius: 20px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.3);
            width: 90%;
            max-width: 1000px;
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
        }

        .quick-analytics-container h2 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 20px;
            text-align: center;
        }

        .tws-dcp {
            display: flex;
            
            justify-content: space-around;
            align-items: center;
            gap: 30px;
            width: 100%;
            flex-wrap: wrap;
        }

        .analytics-card {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(15px);
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            width: 250px;
            height: 200px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            color: white;
            font-family: 'Poppins', sans-serif;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-title {
            font-size: 1.4rem;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .card-value {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .analytics-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.3);
        }

        .card-icon {
            font-size: 3rem;
            color: white;
        }

    </style>
</head>

<div class="quick-analytics-container">
    <h2>Quick Analytics</h2>
    <div class="tws-dcp">
        <div class="analytics-card">
            <span class="material-icons card-icon">group</span>
            <div class="card-title">Total Clients</div>
            <div class="card-value">1200</div>
        </div>

        <div class="analytics-card">
            <span class="material-icons card-icon">email</span>
            <div class="card-title">Open Tickets</div>
            <div class="card-value">35</div>
        </div>

        <div class="analytics-card">
            <span class="material-icons card-icon">check_circle</span>
            <div class="card-title">Closed Tickets</div>
            <div class="card-value">1500</div>
        </div>
    </div>
</div>
