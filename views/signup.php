<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<header class="lg:px-16 px-4 bg-white flex flex-wrap items-center py-4 shadow-md">
    <div class="flex-1 flex justify-between items-center">
        <a href="#" class="text-xl">Company</a>
    </div>
    <label for="menu-toggle" class="pointer-cursor md:hidden block">
        <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
            <title>menu</title>
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
        </svg>
    </label>
    <input class="hidden" type="checkbox" id="menu-toggle" />
    <div class="hidden md:flex md:items-center md:w-auto w-full" id="menu">
        <nav>
            <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
                <li><a class="md:p-4 py-3 px-0 block" href="cretationCont.php">Add reservation</a></li>
                <li><a class="md:p-4 py-3 px-0 block" href="listeResrvate.php">Les réservations</a></li>
                <li><a class="md:p-4 py-3 px-0 block" href="creatActivite.php">Add Activite</a></li>
            </ul>
        </nav>
    </div>
</header>
<section>
    <div class="flex flex-wrap">
        <div class="w-full sm:w-8/12 mb-10">
            <div class="container mx-auto h-full sm:p-10">
                <div class="max-w-md mx-auto mt-10 bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="text-2xl py-4 px-6 bg-gray-900 text-white text-center font-bold uppercase">
                        Book an Appointment
                    </div>
                    <form class="py-4 px-6" action="" method="POST">
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="nom">
                                Name
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nom" type="text" placeholder="Enter your name" name="nom"/>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="prenom">
                                Last Name
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="prenom" name="prenom" type="text" placeholder="Enter your last name" />
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="email">
                                Email
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" name="email" placeholder="Enter your email"/>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="phone">
                                Phone Number
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone" type="tel" name="phone" placeholder="Enter your phone number"/>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="role">
                                role
                            </label>
                            <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="activite" name="activite">
                                <option value="Select a service">Select role</option>
                                <option value="Select a service">admin</option>
                                <option value="Select a service">member</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="Password">
                                Password
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone" type="password" name="phone" placeholder="Password"/>
                        </div>
                        <div class="flex items-center justify-center mb-4">
                            <button class="bg-gray-900 text-white py-2 px-4 rounded hover:bg-gray-800 focus:outline-none focus:shadow-outline" type="submit" name="conservation">
                                Conservation
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <img src="https://images.unsplash.com/photo-1536147116438-62679a5e01f2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" alt="Leafs" class="w-full h-48 object-cover sm:h-screen sm:w-4/12">
    </div>
</section>
</body>
</html>
