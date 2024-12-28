<?php 
require "../src/classes/member_classe.php";
autandificationA();
$admin = new Admin();
$admin->setEmail($_SESSION['email']);
$admin->insert();
// echo $admin->getId();
$stmt =$admin->listActivite();
$stmtReservation = $admin->listeRservation();
if(isset($_POST['edit'])){
    
}
if(isset($_POST['delete'])){
    $activite = new Activites();
    $activite->set_id_activite($_POST['idA']);
    $activite->insert();
    // echo 'id '.$_POST['idA'].'  ig' . $activite->get_id_activite();
    $admin->sepprimeActivite($activite);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyCompany - Alternative Hero Section</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../src/global.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                }
            }
        }
    </script>
</head>
<body class="font-sans">
    <!-- ... (previous header code remains unchanged) ... -->

    <header class="lg:px-16 px-4 bg-white flex flex-wrap items-center py-4 shadow-md">
    <div class="flex-1 flex justify-between items-center">
        <a href="home_admin.php" class="text-xl text-black">home</a>
    </div>

    <label for="menu-toggle" class="pointer-cursor md:hidden block">
      <svg class="fill-current text-gray-900"
        xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
        <title>menu</title>
        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
      </svg>
    </label>
    <input class="hidden" type="checkbox" id="menu-toggle" />

    <div class="hidden md:flex md:items-center md:w-auto w-full" id="menu">
        <nav>
            <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
                <li><a class="md:p-4 py-3 px-0 block" href="add_activite.php">Add Activité</a></li>
                <li><a class="md:p-4 py-3 px-0 block" href="admin_dashboard.php">Dashboard</a></li>
            </ul>
        </nav>
    </div>
</header>
<body>


<div class="container">
    <h2>List of Clients</h2>
    <table class="clients-table">
        <thead>
            <tr>
                <th>First Name</th>
                <th>statut</th>
                <th>Telephone</th>
                <th> Activity</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            while($row = $stmtReservation->fetch(PDO::FETCH_ASSOC))
            echo '
            <tr>   
                <td>'.$row['nom'].' '.$row['prenom'].'</td>
                <td>'.$row['statut'].'</td>
                <td>'.$row['telephone'].'</td>
                <td>'.$row['activite'].'</td>
                <td>
                    <a href="#" class="btn btn-confirm">Confirmer</a>
                    <a href="#" class="btn btn-cancel">Annuler</a>
                </td>
            </tr>';
            ?>

        </tbody>
    </table>
</div>


<header>
    <h1>Activity List</h1>
    <a href="add_activite.php" class="add-activity-btn">Add Activity</a>
</header>
<div class="container">
    <h2>Current Activities</h2>
    <table class="clients-table">
        <thead>
            <tr>
                <th> Name</th>
                <th>capacite</th>
                <th>disponibilite</th>
                <th>date fine</th>
                <th>Actions</th>
            </tr>
        </thead>
        
        <tbody>
            
<?php 
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
  echo ' 
    <tr>
    <td>'.$row['nom'].'</td>
    <td>'.$row['capacite'].'</td>
    <td>'.$row['disponibilite'].'</td>
    <td>'.$row['date_fin'].'</td>
    <td>
        <form method="POST">
            <input value="'.$row['id_activite'].'" name="idA" class="hidden" />
            <input type="submit" name="edit"   class="btn btn-confirm" value="edit">
        </form>
        <form method="POST">
            <input value="'.$row['id_activite'].'" name="idA" class="hidden" />
            <input name="delete" type="submit"   class="btn btn-cancel" value="delete">
        </form>
    </td>
</tr> ';
}
?>
           
        </tbody>
    </table>
</div>

<?php require('footer.php'); ?>
