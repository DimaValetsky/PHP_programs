<?php
$mysqli = new mysqli("localhost", "root", "", "testbase");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$mysqli->set_charset('utf8');




$res1 = $mysqli->query("SELECT * FROM persons, transactions WHERE transactions.from_person_id = persons.id");
$res2 = $mysqli->query("SELECT * FROM persons, transactions WHERE transactions.to_person_id = persons.id");
while ($row1 = $res1->fetch_assoc() and $row2 = $res2->fetch_assoc() ){
	if ($row1['city_id'] == $row2['city_id']) {
		echo "Name 1: " . $row1['fullname'] . " Name 2: " . $row2['fullname'] . " City id: " . $row2['city_id'] ." Transaction_id: " . $row2['transaction_id'];
	}
}

echo "<br/>";

?>