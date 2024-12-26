<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book an Appointment</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
    margin: 0;
    font-family: Arial, sans-serif;
    line-height: 1.6;
}

.header {
    background: #fff;
    padding: 1rem 2rem;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.header .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    font-size: 1.5rem;
    font-weight: bold;
    color: #333;
    text-decoration: none;
}

.nav .nav-list {
    list-style: none;
    display: flex;
    gap: 1rem;
    margin: 0;
    padding: 0;
}

.nav .nav-list a {
    text-decoration: none;
    color: #333;
    padding: 0.5rem 1rem;
    border-radius: 5px;
    transition: background 0.3s ease;
}

.nav .nav-list a:hover {
    background: #f4f4f4;
}

.main-section {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    margin: 2rem;
    gap: 2rem;
}

.form-container {
    flex: 1;
    max-width: 500px;
    padding: 1rem;
    background: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.form-title {
    text-align: center;
    font-size: 1.5rem;
    color: #333;
    margin-bottom: 1rem;
}

.form-group {
    margin-bottom: 1rem;
}

.form-group label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: bold;
    color: #333;
}

.form-control {
    width: 100%;
    padding: 0.5rem;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

.btn {
    display: block;
    width: 100%;
    padding: 0.75rem;
    background: #333;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-align: center;
    font-size: 1rem;
    transition: background 0.3s ease;
}

.btn:hover {
    background: #555;
}

.image-container {
    flex: 1;
    max-width: 500px;
}

.image-container img {
    width: 100%;
    height: auto;
    border-radius: 5px;
    object-fit: cover;
}

</style>
<body>
<header class="header">
    <div class="container">
        <a href="#" class="logo">Company</a>
        <nav class="nav">
            <ul class="nav-list">
                <li><a href="cretationCont.php">Add reservation</a></li>
                <li><a href="listeResrvate.php">Les réservations</a></li>
                <li><a href="creatActivite.php">Add Activite</a></li>
            </ul>
        </nav>
    </div>
</header>
<section class="main-section">
    <div class="form-container">
        <h2 class="form-title">Book an Appointment</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="activite">Activite</label>
                <select id="activite" name="activite" class="form-control">
                    <option value="Select a service">Select a service</option>
                </select>
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" id="date" name="dateR" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" name="conservation" class="btn">Conservation</button>
            </div>
        </form>
    </div>
    <div class="image-container">
        <img src="https://images.unsplash.com/photo-1536147116438-62679a5e01f2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" alt="Leafs">
    </div>
</section>
</body>
</html>
