<?php

$servername = "localhost";
$username = "root";
if ($os == "Mac") {
    $password = "root";
}
else {
    $password = "";
}
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

$sql = "SELECT * FROM Collections";
$collections = $conn->query($sql);
$conn->close();


function get_list_view_html($collection) {
    
    $output = "";

    $output = $output . "<li>";
    $output = $output . '<a href="collection.php?collection=' . $collection["name"] . '">';
    $output = $output . '<img src="' . $collection["img"] . '" alt="' . $collection["name"] . '">';
    $output = $output . "<p>".$collection['name']."</p>";
    $output = $output . "</a>";
    $output = $output . "</li>";

    return $output;
}

// $collections = array();
// $collections[101] = array(
// 	"name" => "Household",
// 	"img" => "img/household/3.jpeg",
//     "price" => 18,
//     "paypal" => "RK4LQQB9L7K6L",
//     "sizes" => array("Small","Medium","Large","X-Large")
// );
// $collections[102] = array(
//     "name" => "Lifestyle",
//     "img" => "img/lifestyle/6.jpeg",
//     "price" => 18,
//     "paypal" => "RK4LQQB9L7K6L",
//     "sizes" => array("Small","Medium","Large","X-Large")
// );
// $collections[103] = array(
//     "name" => "Gifts",
//     "img" => "img/gifts/2.jpeg",
//     "price" => 18,
//     "paypal" => "RK4LQQB9L7K6L",
//     "sizes" => array("Small","Medium","Large","X-Large")
// );
// $collections[104] = array(
//     "name" => "Collectibles",
//     "img" => "img/collectibles/8.jpeg",
//     "price" => 18,
//     "paypal" => "RK4LQQB9L7K6L",
//     "sizes" => array("Small","Medium","Large","X-Large")
// );
// $collections[105] = array(
//     "name" => "Art",
//     "img" => "img/art/6.jpeg",
//     "price" => 18,
//     "paypal" => "RK4LQQB9L7K6L",
//     "sizes" => array("Small","Medium","Large","X-Large")
// );
// $collections[106] = array(
//     "name" => "Hobbies",
//     "img" => "img/hobbies/1.jpeg",
//     "price" => 18,
//     "paypal" => "RK4LQQB9L7K6L",
//     "sizes" => array("Small","Medium","Large","X-Large")
// );
// $collections[107] = array(
//     "name" => "Toys",
//     "img" => "img/toys/6.jpeg",
//     "price" => 18,
//     "paypal" => "RK4LQQB9L7K6L",
//     "sizes" => array("Small","Medium","Large","X-Large")
// );
// $collections[108] = array(
//     "name" => "Fashion",
//     "img" => "img/fashion/2.jpeg",
//     "price" => 18,
//     "paypal" => "RK4LQQB9L7K6L",
//     "sizes" => array("Small","Medium","Large","X-Large")
// );

?>