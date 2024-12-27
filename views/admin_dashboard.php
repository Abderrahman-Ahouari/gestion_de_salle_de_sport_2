<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header h1 {
            margin: 0;
        }
        header .add-activity-btn {
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            font-size: 14px;
        }
        header .add-activity-btn:hover {
            opacity: 0.9;
        }
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-bottom: 15px;
            color: #333;
        }
        .clients-table {
            width: 100%;
            border-collapse: collapse;
        }
        .clients-table th, .clients-table td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }
        .clients-table th {
            background-color: #333;
            color: #fff;
        }
        .clients-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .btn {
            padding: 8px 12px;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            margin-right: 5px;
            font-size: 14px;
        }
        .btn-confirm {
            background-color: #28a745;
        }
        .btn-cancel {
            background-color: #dc3545;
        }
        .btn:hover {
            opacity: 0.9;
        }
        
    </style>
</head>
<body>


<div class="container">
    <h2>List of Clients</h2>
    <table class="clients-table">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Telephone</th>
                <th>Reserved Activity</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Sample Client Row 1 -->
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>+1 234 567 890</td>
                <td>Yoga Class</td>
                <td>
                    <a href="#" class="btn btn-confirm">Confirmer</a>
                    <a href="#" class="btn btn-cancel">Annuler</a>
                </td>
            </tr>
            <!-- Sample Client Row 2 -->
            <tr>
                <td>Jane</td>
                <td>Smith</td>
                <td>+1 987 654 321</td>
                <td>Cooking Workshop</td>
                <td>
                    <a href="#" class="btn btn-confirm">Confirmer</a>
                    <a href="#" class="btn btn-cancel">Annuler</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>


<header>
    <h1>Activity List</h1>
    <a href="addActivite.php" class="add-activity-btn">Add Activity</a>
</header>

<div class="container">
    <h2>Current Activities</h2>
    <table class="activities-table">
        <thead>
            <tr>
                <th>Activity Name</th>
                <th>Description</th>
                <th>Location</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <!-- Sample Activity Row 1 -->
            <tr>
                <td>Yoga Class</td>
                <td>Morning yoga session</td>
                <td>City Park</td>
                <td>2024-12-30</td>
            </tr>
            <!-- Sample Activity Row 2 -->
            <tr>
                <td>Cooking Workshop</td>
                <td>Learn to cook Italian dishes</td>
                <td>Community Center</td>
                <td>2024-12-28</td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>
