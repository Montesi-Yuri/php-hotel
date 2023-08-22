<?php 
    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Hotels</title>
        <!-- Tailwind -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <header>
            <h1 class="text-center text-4xl font-bold my-8">
                PHP Hotels
            </h1>
        </header>

        <main>
            <div class="flex justify-center">
                <table>
                    <thead class="text-2xl">
                        <tr>
                            <th>
                                Name
                            </th>
                            <th>
                                Description
                            </th>
                            <th>
                                Parking
                            </th>
                            <th>
                                Vote
                            </th>
                            <th>
                                Distance to center
                            </th>
                        </tr>
                    </thead>
                    <?php
                        foreach ($hotels as $key => $hotel){
                    ?>
                    <tbody>
                        <tr class="text-center">
                            <td class="bg-slate-200">
                                <?php
                                    echo $hotel['name'];
                                ?>
                            </td>
                            <td class="bg-gray-100">
                                <?php
                                    echo $hotel['description'];
                                ?>
                            </td>
                            <td class="bg-slate-200">
                                <?php
                                    if($hotel['parking'] == true){
                                        echo 'Yes';
                                    }
                                    else{
                                        echo 'No';
                                    }
                                ?>
                            </td>
                            <td>
                                <?php
                                    // echo $hotel['vote'];
                                ?>
                                <div class="flex">
                                    <?php
                                        for($i = 0; $i < $hotel['vote']; $i++){
                                    ?>
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-yellow-400">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                            </svg>
                                        </div>
                                    <?php 
                                        }
                                    ?>
                                </div>
                            </td>
                            <td class="bg-slate-200">
                                <?php
                                    echo $hotel['distance_to_center']. ' km';
                                ?>
                            </td>
                        </tr>
                    </tbody>
                    <?php
                        } 
                    ?>
                </table>
            </div>
        </main>

        <footer>

        </footer>
    </body>
</html>