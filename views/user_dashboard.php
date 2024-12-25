<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Reservations</title>
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
            text-align: center;
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
        .user-info, .reservations {
            margin-bottom: 20px;
        }
        .user-info h2, .reservations h2 {
            margin-bottom: 15px;
            color: #333;
        }
        .user-details, .reservations-table {
            width: 100%;
            border-collapse: collapse;
        }
        .user-details td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        .reservations-table th, .reservations-table td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }
        .reservations-table th {
            background-color: #333;
            color: #fff;
        }
        .reservations-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .btn {
            padding: 8px 12px;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            margin-right: 5px;
        }
        .btn-edit {
            background-color: #007bff;
        }
        .btn-delete {
            background-color: #dc3545;
        }
        .btn:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>

<header>
    <h1>User Reservations</h1>
</header>

<div class="container">
    <!-- User Info Section -->
    <div class="user-info">
        <h2>User Information</h2>
        <table class="user-details">
            <tr>
                <td><strong>First Name:</strong></td>
                <td>John</td>
            </tr>
            <tr>
                <td><strong>Last Name:</strong></td>
                <td>Doe</td>
            </tr>
            <tr>
                <td><strong>Email:</strong></td>
                <td>johndoe@example.com</td>
            </tr>
            <tr>
                <td><strong>Telephone:</strong></td>
                <td>+1 234 567 890</td>
            </tr>
        </table>
    </div>

    <!-- Reservations Section -->
    <div class="reservations">
        <h2>Reservations</h2>
        <table class="reservations-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Reservation Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John Doe</td>
                    <td>johndoe@example.com</td>
                    <td>2024-12-25</td>
                    <td>Confirmed</td>
                    <td>
                        <a href="#" class="btn btn-edit">Edit</a>
                        <a href="#" class="btn btn-delete">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>janesmith@example.com</td>
                    <td>2024-12-26</td>
                    <td>Pending</td>
                    <td>
                        <a href="#" class="btn btn-edit">Edit</a>
                        <a href="#" class="btn btn-delete">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
