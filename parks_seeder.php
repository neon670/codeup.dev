<?php

require 'parks_login.php';
require 'db_connect.php';

$insert = $dbc->prepare('TRUNCATE national_parks');
$query = "INSERT INTO national_parks (name, location, date_established, area_in_acres, description)
		   VALUES (:name, :location, :date_established, :area_in_acres, :description)";
$insert->execute();

$parks = [
	['name'=>'Arches','location'=>'Utah','date_established'=>'1971-01-20','area_in_acres'=>'76359','description'=>'This park contains more than 2,000 natural arches—the greatest concentration in the country. But numbers have no significance beside the grandeur of the landscape—the arches, the giant balanced rocks, spires, pinnacles, and slickrock domes against the enormous sky.'],
	['name'=>'Badlands','location'=>'South Dakota','date_established'=>'1978-02-10','area_in_acres'=>'244300','description'=>'They call it The Wall. It extends for a hundred miles through the dry plains of South Dakota—a huge natural barrier ridging the landscape, sculptured into fantastic pinnacles and tortuous gullies by the forces of water.'],
	['name'=>'Death Valley','location'=>'Californa & Nevada','date_established'=>'1984-02-10','area_in_acres'=>'3400000','description'=>'The largest national park south of Alaska, Death Valley is known for extremes: It is North America\'s driest and hottest spot (with fewer than two inches/five centimeters of rainfall annually and a record high of 134°F), and has the lowest elevation on the continent—282 feet below sea level'],
	['name'=>'Denali','location'=>'Alaksa','date_established'=>'1917-10-10','area_in_acres'=>'6076029','description'=>'Other North American parks have their wildlife, but none has animals so visible or diverse as Denali. And other parks have their mountains, but none with a stature so stunning, a summit so towering as McKinley.'],
	['name'=>'Everglades','location'=>'Florida','date_established'=>'1947-09-10','area_in_acres'=>'1542526','description'=>'A short parade of visitors follows a ranger on an Everglades nature walk. For more than an hour she has shown them the living wonders around them—butterflies and snails, alligators and fish, and bird after bird.'],
	['name'=>'Glacier','location'=>'Montana','date_established'=>'1910-09-07','area_in_acres'=>'1013572','description'=>'Water originating in Glacier National Park—much of it from snowmelt—can be considered the headwater of the continent. Water that runs down Triple Divide Peak flows in three directions, eventually winding up in the Pacific Ocean, the Gulf of Mexico, and Hudson Bay'],
	['name'=>'Grand Canyon','location'=>'Arizona','date_established'=>'1919-09-10','area_in_acres'=>'1217403','description'=>'You wonder if you have made a wrong turn. All at once an immense gorge a mile deep and up to 18 miles wide opens up. The scale is so vast that even from the best vantage point only a fraction of the canyon\'s 277 miles can be seen.'],
	['name'=>'Great Smokey Mts','location'=>'South Carolina & Tennessee','date_established'=>'1934-03-19','area_in_acres'=>'521896','description'=>'The park was designated an International Biosphere Reserve in 1976 and a UNESCO World Heritage site in 1983.'],
	['name'=>'Shenandoa','location'=>'Virgina','date_established'=>'1935-05-05','area_in_acres'=>'197411','description'=>'The drive, following ridge trails walked by Indians and early settlers, transports visitors to a park built on a frontier that lingered into modern times.'],
	['name'=>'Yellowstone','location'=>'Wyoming, Idaho & Montana','date_established'=>'1872-01-01','area_in_acres'=>'2221766','description'=>'Located astride the Continental Divide, most of the park occupies a high plateau surrounded by mountains and drained by several rivers.']

];

$stmt = $dbc->prepare($query);

foreach ($parks as $park){
	$stmt->bindValue(':name', $park['name'], PDO::PARAM_STR);
	$stmt->bindValue(':location', $park['location'], PDO::PARAM_STR);
	$stmt->bindValue(':date_established', $park['date_established'], PDO::PARAM_STR);
	$stmt->bindValue(':area_in_acres', $park['area_in_acres'], PDO::PARAM_STR);
	$stmt->bindValue(':description', $park['description'], PDO::PARAM_STR);
	$stmt->execute();

	// $dbc->exec($query);
}

