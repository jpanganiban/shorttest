<?php

$persons = array(
	array("name" => "Jesse Panganiban", "age" => 22, "location" => "Paranaque"),
	array("name" => "Onin Pacay", "age" => 22, "location" => "Rizal"),
	array("name" => "Joseph Ross Lee", "age" => 32, "location" => "Paranaque"),
	array("name" => "Rikki Vizcarra", "age" => 35, "location" => "Paranaque")
);

function filter_by_age($persons, $age_from, $age_to) {
}

var_dump(filter_by_age($persons, 20, 50));
// Should return all entries

printf("\n\n");

var_dump(filter_by_age($persons, 0, 25));
// should return the first two

printf("\n\n");

var_dump(filter_by_age($persons, 25, 50));
// should return the last two

printf("\n\n");

var_dump(filter_by_age($persons, 22, 34));
// should return the first three

printf("\n\n");

?>
