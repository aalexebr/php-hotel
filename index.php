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
    <title>PHP Hotel</title>
</head>
<body>
    <header>
        hello
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <?php
                    foreach($hotels as $index => $hotel){
                    ?>
                        <th>
                            <?php
                                echo $hotel['name']; 
                            ?>
                        </th>
                    <?php
                        }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($hotels as $index => $hotel){
                ?>
                    <tr>
                        <?php
                            foreach($hotels as $index => $hotel){
                        ?>
                            <td>
                                <?php
                                    echo $hotel['description']; 
                                ?>
                            </td>
                        <?php
                            }
                        ?>
                    </tr>
                    <tr>
                        <?php
                            foreach($hotels as $index => $hotel){
                        ?>
                            <td>
                                <?php
                                    echo $hotel['parking']; 
                                ?>
                            </td>
                        <?php
                            }
                        ?>
                    </tr>
                    <tr>
                        <?php
                            foreach($hotels as $index => $hotel){
                        ?>
                            <td>
                                <?php
                                    echo $hotel['vote']; 
                                ?>
                            </td>
                        <?php
                            }
                        ?>
                    </tr>
                    <tr>
                        <?php
                            foreach($hotels as $index => $hotel){
                        ?>
                            <td>
                                <?php
                                    echo $hotel['distance_to_center']; 
                                ?>
                            </td>
                        <?php
                            }
                        ?>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        
    </main>
</body>
</html>