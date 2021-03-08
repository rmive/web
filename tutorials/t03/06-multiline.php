<?php
    $author = "Steve Ballmer";
    echo "Developers, Developers, developers, developers, developers,
    developers, developers, developers, developers!
    - $author." . "<br>";

    $author = "Bill Gates";
    $text = "Measuring programming progress by lines of code is like
    measuring aircraft building progress by weight.
    - $author.";
    echo $text . "<br>";

    $author = "Brian W. Kernighan";
    echo <<<_END
    Debugging is twice as hard as writing the code in the first place.
    Therefore, if you write the code as cleverly as possible, you are,
    by definition, not smart enough to debug it.
    - $author.
    _END . "<br>";

    $author = "Scott Adams";
    $out = <<<_END
    Normal people believe that if it ain't broke, don't fix it.
    Engineers believe that if it ain't broke, it doesn't have enough
    features yet.
    - $author.
    _END;
    echo $out;
?>