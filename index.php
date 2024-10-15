<?php
class Movie {
    public $title;        // string
    public $director;     // string
    public $actors;       // string / array di string
    public $year;         // int
    public $genre;        // string / array di string
    public $plot;         // string
    public $duration;     // int
    public $vote;         // float
}
$pulpFiction = new Movie();
$pulpFiction->title = 'Pulp Fiction';
$pulpFiction->director = 'Quentin Tarantino';
$pulpFiction->title =[
    'Uma Thurman',
    'Samuel L. Jackson',
    'John Travolta',
    'Harvey Keitel'
];
$pulpFiction->year = 1994;

var_dump($pulpFiction);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php oop 1</title>
</head>
<body>
    
</body>
</html>