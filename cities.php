<?php
// Array of cities
$cities = array("Buenos Aires", "Cairo", "Lagos", "London", "Mexico City", "Mumbai", "New York City", "Seoul", "Shanghai", "Tokyo");

// Sort list
sort($cities);
$sorted_list = "<ul>";
foreach ($cities as $city) {
    $sorted_list .= "<li>$city</li>";
}
$sorted_list .= "</ul>";

// Add cities
array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing");

// Sort updated list
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
    <link rel="stylesheet" href="CITYstyles.css"> 
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
