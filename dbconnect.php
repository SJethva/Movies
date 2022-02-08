<?php

$db = new SQLite3('Movies');
$query = "CREATE TABLE IF NOT EXISTS movie (id integer, movie_name char ,actor char, actress char, year integer, director char)";
$db->exec($query);
?>