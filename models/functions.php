<?php

include './arrays.php';

// function filter($items, $fn)
// {
//     $filteredItems = [];
//     //***** filter by release data */
//     foreach ($items as $item) {
//         if ($fn($item)) {
//             $filteredItems[] = $item;
//         }
//     }

//     return $filteredItems;
// }

$filteredMovies = array_filter($movies, function ($movie) {
    return $movie['releaseDate'] <= 2000;
});
