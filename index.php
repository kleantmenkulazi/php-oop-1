<?php
class Movie {
    private $title;        // string
    public $director;     // string
    public $actors;       // string / array di string
    public $year;         // int
    public $genres;        // string / array di string
    public $plot;         // string
    public $duration;     // int
    public $vote;         // float

function __construct(
    string $title, 
    string $director, 
    array $actors, 
    int $year, 
    string $genres = null, 
    string $plot = null, 
    string $duration = null, 
    float $vote = null,
) {
    $this->setTitle($title);
    $this->directors = $director;
    $this->actors = $actors;
    $this->year = $year;
    $this->genres = $genres;
    $this->plot = $plot;
    $this->duration = $duration;
    $this->vote = $vote;
}

public function getTitle() {
    return $title->title;
}


public function setTitle($title) {
    if (is_string($title) && strlen($title) > 0) {
        $this->title = $title;
    }
    else {
         showError('Titolo non valido');
    }
}
}


// $pulpFiction = new Movie();
// $pulpFiction->title = 'Pulp Fiction';
// $pulpFiction->setTitle('Pulp Fiction');
// $pulpFiction->director = 'Quentin Tarantino';
// $pulpFiction->actors =[
//    'Uma Thurman',
//    'Samuel L. Jackson',
//    'John Travolta',
//    'Harvey Keitel'
// ];
// $pulpFiction->year = 1994;

 $actors =[
    'Uma Thurman',
    'Samuel L. Jackson',
    'John Travolta',
    'Harvey Keitel'
 ];

 $pulpFiction = new Movie('Pulp fiction', 'Quentin Tarantino', $actors, 1994);

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