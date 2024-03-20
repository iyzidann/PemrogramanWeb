<?php 

$loremIpsum = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
    Voluptatem minus illo nam a eligendi tenetur aperiam odit? 
    Exercitationem eligendi provident doloremque facilis fugiat molestiae et nemo minima excepturi ex, 
    necessitatibus quasi cumque non voluptas. Voluptate temporibus, nisi hic porro maxime reiciendis?.";

    echo "<p>{$loremIpsum}</p>";
    echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";
    echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
    echo "<p>" . strtoupper($loremIpsum) . "</p>";
    echo "<p>" . strtolower($loremIpsum) . "</p>";
?>