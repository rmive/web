<?php
    // numeric array
    $chessboard = array(
        array('r', 'n', 'b', 'q', 'k', 'b', 'n', 'r'),
        array('p', 'p', 'p', 'p', 'p', 'p', 'p', 'p'),
        array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
        array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
        array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
        array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
        array('P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
        array('R', 'N', 'B', 'Q', 'K', 'B', 'N', 'R')
    );
    echo "<pre>";
    foreach($chessboard as $row) {
        foreach ($row as $piece) {
            echo "$piece ";
        }
        echo "<br>";
    }
    echo "</pre>";
    echo $chessboard[7][3];

    // associative array
    $products = array(
        'paper' =>  array (
            'copier' => "Copier & Multipurpose",
            'inkjet' => "Inkjet Printer",
            'laser'  => "Laser Printer",
            'photo'  => "Photographic Paper"
        ),
        'pens' => array (
            'ball'   => "Ball Point",
            'hilite' => "Highlighters",
            'marker' => "Markers"
        ),
        'misc' => array(
            'tape'   => "Sticky Tape",
            'glue'   => "Adhesives",
            'clips'  => "Paperclips"
        ) 
    );
    echo "<pre>";
    foreach ($products as $section => $items){
        foreach ($items as $key => $value) {
            echo "$section:\t$key\t($value)<br>";
        }
    }
    echo "</pre>";
    echo "products['misc']['glue']";
?>