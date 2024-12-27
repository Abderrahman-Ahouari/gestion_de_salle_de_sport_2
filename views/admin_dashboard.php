<?php require("headerAd.php");  ?>

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
