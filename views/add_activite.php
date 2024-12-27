<?php

$admin_id = '2';

if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
    $nom = $_POST['nom']; 
    $description = $_POST['description']; 
    $capacité = $_POST['Capacité']; 
    $date_début = $_POST['date_début']; 
    $date_fin = $_POST['date_fin'];
    $disponibilité = $_POST['disponibilité'];



    }
    require("headerAd.php"); 
?> 
<section>
    <div class="flex flex-wrap">
        <div class="w-full sm:w-8/12 mb-10">
            <div class="container mx-auto h-full sm:p-10">
                <div class="max-w-md mx-auto mt-10 bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="text-2xl py-4 px-6 bg-gray-900 text-white text-center font-bold uppercase">
                        Add Activity
                    </div>
                    <form class="py-4 px-6" action="" methode="POST" >
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="nom d'activiter">
                                nom d'activiter
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nom" type="text" placeholder="nom d'activiter" name="nom"/>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="description d'activiter">
                                description d'activiter
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description" name="description" type="text" placeholder="description d'activiter" />
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for=" Capacité">
                                Capacité
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="Capacité" type="text" name="Capacité" placeholder="Capacité"/>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="date début">
                                date début
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="date début" type="date" name="date_début" placeholder="date début"/>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="date fin">
                                date fin
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="date fin" type="date" name="date_fin" placeholder="date fin"/>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="disponibiliter">
                                disponibiliter
                            </label>
                            <select name="disponibilité" id="disponibiliter" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="disponible">disponible</option>
                                <option value="non disponible">non disponible</option>
                            </select>
                        </div>
                        <div class="flex items-center justify-center mb-4">
                            <button class="bg-gray-900 text-white py-2 px-4 rounded hover:bg-gray-800 focus:outline-none focus:shadow-outline" type="submit" name="conservation">
                                save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <img src="https://images.unsplash.com/photo-1536147116438-62679a5e01f2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" alt="Leafs" class="w-full h-48 object-cover sm:h-screen sm:w-4/12">
    </div>
</section>

<script>
document.querySelector("form").addEventListener("submit", function (event) {
    event.preventDefault();

    const submitter = event.submitter;
    if (submitter && submitter.name === "conservation") {
        const fields = [
            {
                id: "nom",
                name: "nom d'activiter",
                regex: /^[A-Za-z\s]{1,50}$/,
                error: "doit contenir uniquement des lettres et ne pas dépasser 50 caractères."
            },
            {
                id: "description",
                name: "description d'activiter",
                regex: /^[A-Za-z0-9\s]{1,350}$/,
                error: "doit contenir uniquement des lettres et des chiffres et ne pas dépasser 350 caractères."
            },
            {
                id: "Capacité",
                name: "Capacité",
                regex: /^[0-9]+$/,
                error: "doit contenir uniquement des chiffres."
            }
        ];

        let isValid = true;

        fields.forEach(field => {
            const input = document.getElementById(field.id);
            if (!input.value.trim()) {
                isValid = false;
                alert(`Le champ '${field.name}' ne peut pas être vide.`);
            } else if (!field.regex.test(input.value)) {
                isValid = false;
                alert(`Le champ '${field.name}' ${field.error}`);
            }
        });

        if (isValid) {
            alert("Les champs ont été validés avec succès !");
            this.submit();
        }
    }
});


</script>
</body>
</html>
