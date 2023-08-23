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

        // unset($hotels[0]);
    if(isset( $_GET['parking'])){  
        // var_dump($_GET['parking']);
        foreach($hotels as $i => $element){
            // var_dump($hotels[$i]);
            // var_dump($element);
            var_dump($element['parking']);
            $converted_res = $element['parking'] ? 'true' : 'false';
            var_dump( $converted_res);
            if($converted_res != $_GET['parking']){
                
                var_dump(($element));
                unset($hotels[$i]);
            }
        };
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP Hotel</title>
</head>
<body>
    <header>
        <?php /*
            foreach($hotels as $index => $hotel){
                // echo var_dump($hotel);
                foreach($hotel as $i => $value){
                    echo $value;
                }

            };*/
        ?>
        <form method="GET">
            <select name="parking" id="">
                <option value="true">yes parking</option>
                <option value="false">no parking</option>
            </select>
            <button type="submit">submit</button>
        </form>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th></th>
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
                    <tr>
                        <td>
                            description
                        </td>
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
                        <td>
                            parking
                        </td>
                        <?php
                            foreach($hotels as $index => $hotel){
                        ?>
                            <td>
                                <?php
                                    if($hotel['parking']){echo 'yes';}
                                    else echo 'no';
                                    // echo $hotel['parking']; 
                                    // echo $hotel['parking'] ? 'yes' : 'no';
                                ?>
                            </td>
                        <?php
                            }
                        ?>
                    </tr>
                    <tr>
                        <td>
                            vote
                        </td>
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
                        <td>
                            distance to center
                        </td>
                        <?php
                            foreach($hotels as $index => $hotel){
                        ?>
                            <td>
                                <?php
                                    echo $hotel['distance_to_center']; 
                                ?>
                                km
                            </td>
                        <?php
                            }
                        ?>
                    </tr>
            </tbody>
        </table>
        <table>
            <thead>
                <tr>
                    <th>
                        NAME
                    </th>
                    <th>
                        NAME
                    </th>
                    <th>
                        NAME
                    </th>
                    <th>
                        NAME
                    </th>
                    <th>
                        NAME
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($hotels as $hotel){
                ?>
                    <tr>
                        <?php
                            foreach($hotel as $key => $value){
                        ?>
                            <td>
                                <?php echo $value ?>
                            </td>
                        <?php } ?>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>
</body>
</html>