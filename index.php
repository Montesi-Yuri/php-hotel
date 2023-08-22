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
            <h1 class="text-center">
                PHP Hotels
            </h1>
        </header>

        <main>

            <div>
                <?php
                    foreach ($hotels as $hotel){
                ?>
                        <h2>
                            <?php
                                echo $hotel['name'];
                            ?>
                        </h2>
                        <p>
                            <?php
                                echo $hotel['description'];
                            ?>
                        </p>
                        <p>
                            <?php
                                echo $hotel['parking'];
                            ?>
                        </p>
                        <p>
                            <?php
                                echo $hotel['vote'];
                            ?>
                        </p>
                        <p>
                            <?php
                                echo $hotel['distance_to_center'];
                            ?>
                        </p>
                <?php
                    } 
                ?>
                    
                
                
            </div>

        </main>

        <footer>

        </footer>
    </body>
</html>