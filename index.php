<?php
class Movie {
    private $title;        // string
    public $director;     // string
    public $actors;       // string / array di string
    public $year;         // int
    public $genre;        // string / array di string
    public $plot;         // string
    public $duration;     // int
    public $vote;         // float

public function getTitle() {
    return $title->title;
}
public function setTitle($title) {
    if (is_string($title) && strlen($title) > 0) {
        $this->title = $title;
    }
    else {
         // Azione
    }
}
}


$pulpFiction = new Movie();
// $pulpFiction->title = 'Pulp Fiction';
$pulpFiction->setTitle('Pulp Fiction');
$pulpFiction->director = 'Quentin Tarantino';
$pulpFiction->title =[
    'Uma Thurman',
    'Samuel L. Jackson',
    'John Travolta',
    'Harvey Keitel'
];
$pulpFiction->year = 1994;

var_dump($pulpFiction);
var_dump($pulpFiction->getTitle());



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