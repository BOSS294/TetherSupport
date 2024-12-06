<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <style>


        .control-section-container {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(15px);
            border-radius: 20px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.3);
            width: 80%;
            margin-left: 5%;
            max-width: 1300px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
        }

        .control-section-container h2 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 20px;
            text-align: center;
        }

        .twc-dcc {
            display: flex;
            justify-content: space-around;
            align-items: center;
            gap: 30px;
            width: 100%;
            flex-wrap: wrap;
        }

        .control-card {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(15px);
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            width: 150px;
            height: 150px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            color: white;
            font-family: 'Poppins', sans-serif;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .control-card-title {
            font-size: 1rem;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .control-card-description {
            font-size: 0.8rem;
            text-align: center;
        }

        .control-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.3);
        }

        .control-card-icon {
            font-size: 3rem;
            color: white;
            margin-bottom: 15px;
        }
        
        .badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #ff0000;
            color: white;
            font-size: 14px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<div class="control-section-container">
    <h2>Control Section</h2>
    <div class="twc-dcc">
        <div class="control-card">
            <span class="material-icons control-card-icon">email</span>
            <div class="control-card-title">Manage Ticket</div>
            <div class="control-card-description">Manage and assign tickets for clients.</div>
            <div class="badge">50</div> 

        </div>

        <div class="control-card">
            <span class="material-icons control-card-icon">people</span>
            <div class="control-card-title">Manage Clients</div>
            <div class="control-card-description">View and manage client details and information.</div>
            <div class="badge">90</div> 

        </div>

        <div class="control-card">
            <span class="material-icons control-card-icon">email</span>
            <div class="control-card-title">Open Tickets</div>
            <div class="control-card-description">View all open tickets that need attention.</div>
            <div class="badge">3</div> 

        </div>

        <div class="control-card">
            <span class="material-icons control-card-icon">check_circle</span>
            <div class="control-card-title">Closed Tickets</div>
            <div class="control-card-description">Review all tickets that have been resolved.</div>
            <div class="badge">13</div> 

        </div>

        <div class="control-card">
            <span class="material-icons control-card-icon">assignment</span>
            <div class="control-card-title">Plan Controls</div>
            <div class="control-card-description">Manage and set up subscription plans.</div>
            <div class="badge">21</div> 

        </div>

        <div class="control-card">
            <span class="material-icons control-card-icon">info</span>
            
            <div class="control-card-title">Web Info</div>
            <div class="control-card-description">Get the latest information about the website.</div>
            <div class="badge">9</div> 

        </div>
      
    </div>
</div>
