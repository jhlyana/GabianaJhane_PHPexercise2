<?php
//array of cities
$cities = array("Buenos Aires", "Cairo", "Lagos", "London", "Mexico City", "Mumbai", "New York City", "Seoul", "Shanghai", "Tokyo");

//sort list
sort($cities);
$sorted_list = "<ul>";
foreach ($cities as $city) {
    $sorted_list .= "<li>$city</li>";
}
$sorted_list .= "</ul>";

//add cities
array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing");

//sort updated list
sort($cities);
$updated_sorted_list = "<ul>";
foreach ($cities as $city) {
    $updated_sorted_list .= "<li>$city</li>";
}
$updated_sorted_list .= "</ul>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cities 🏙️</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background: url('CITY.png') no-repeat center center/cover;
            font-family: 'Poppins', sans-serif;
            color: white;
            text-align: center;
            padding: 10px;
            margin: 0;
        }
        h1 {
            font-size: 36px;
            font-weight: bold;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6);
            margin-top: 0;
            margin-bottom: 5px;
        }
        .subtitle {
            font-size: 18px;
            font-weight: 500;
            margin-bottom: 5px;
        }
        .container {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin-top: 20px;
        }
        .list-box {
            background: rgba(73, 90, 94, 0.78); 
            padding: 5px;
            border-radius: 12px;
            width: 250px;
            text-align: left;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        }
        h2 {
            font-size: 26px;
            font-weight: bold;
            color: #ffcc00;
            text-align: center;
            margin-bottom: 10px;
        }
        ul {
            list-style-type: disc;
            padding-left: 20px;
            font-size: 10px; 
            line-height: 0.2; 
        }
        li {
            padding: 5px 0; 
        }
    </style>
</head>
<body>

    <h1>🏙️ Ten Largest Cities in the World 🏙️</h1>
    <p class="subtitle">
        Tokyo, Mexico City, New York City, Mumbai, Seoul, Shanghai, Lagos, Buenos Aires, Cairo, London
    </p>

    <div class="container">
        <div class="list-box">
            <h2>Sorted List:</h2>
            <?php echo $sorted_list; ?>
        </div>
        <div class="list-box">
            <h2>Updated List:</h2>
            <?php echo $updated_sorted_list; ?>
        </div>
    </div>

</body>
</html>