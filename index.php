<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Hotel</title>
</head>
<body>
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
    <h1>Lista Hotel</h1>
    <br>
    <div>
        <?php
            foreach ($hotels as $value) {
            $name = $value["name"];
            $description = $value["description"];
            $parking = $value["parking"];
            $vote = $value["vote"];
            $distance_to_center = $value["distance_to_center"];

            if ($parking === true) {
                $parkingstring = "Disponibile";
            } else {
                $parkingstring = " NON Disponibile";
            }
            }    
        ?>
        
    </div>

    <div>
        <?php if (count($hotels) > 0): ?>
            <table>
            <thead>
                <tr>
                <th><?php echo implode('</th><th>', array_keys(current($hotels))); ?></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($hotels as $row): array_map('htmlentities', $row); ?>
                <tr>
                <td><?php echo implode('</td><td>', $row); ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
            </table>
    <?php endif; ?>
    </div>
</body>
</html>