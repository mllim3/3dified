<?php

function get_list_view_html($product_id, $product) {
    
    $output = "";

    $output = $output . "<li>";
    $output = $output . '<a href="design.php?collection=Lifestyle&id=' . $product_id . '">';
    $output = $output . '<img src="' . $product["img"] . '">';
    $output = $output . "<p>View Details</p>";
    $output = $output . "</a>";
    $output = $output . "</li>";

    return $output;
}

$products = array();
$products[101] = array(
	"title" => "Leaf shaped lamp cover",
	"description" => "Beatifully designed lamp cover",
	"price" => 18,
	"username" => "Andy",
    "img" => "img/lifestyle/1.jpeg"
);
$products[102] = array(
<<<<<<< HEAD
    "title" => "Handphone Holder",
    "description" => "Holds phone",
=======
    "title" => "Makers&rsquo; Lab Key Chain",
    "description" => "A customizable key chain! So cool!",
>>>>>>> origin/master
    "price" => 18,
    "username" => "Andy",
    "img" => "img/lifestyle/2.jpeg"
);
$products[103] = array(
<<<<<<< HEAD
    "title" => "Burger Ornament",
    "description" => "Please do not eat",
=======
    "title" => "Makers&rsquo; Lab Key Chain",
    "description" => "A customizable key chain! So cool!",
>>>>>>> origin/master
    "price" => 18,
    "username" => "Andy",
    "img" => "img/lifestyle/3.jpeg"
);
$products[104] = array(
<<<<<<< HEAD
    "title" => "Iphone Cover",
    "description" => "Red phone cover",
=======
    "title" => "Makers&rsquo; Lab Key Chain",
    "description" => "A customizable key chain! So cool!",
>>>>>>> origin/master
    "price" => 18,
    "username" => "Andy",
    "img" => "img/lifestyle/4.jpeg"
);
$products[105] = array(
<<<<<<< HEAD
    "title" => "Lamp Cover",
    "description" => "Nuff said",
=======
    "title" => "Makers&rsquo; Lab Key Chain",
    "description" => "A customizable key chain! So cool!",
>>>>>>> origin/master
    "price" => 18,
    "username" => "Andy",
    "img" => "img/lifestyle/5.jpeg"
);
$products[106] = array(
<<<<<<< HEAD
    "title" => "Handphone Stand+Amp",
    "description" => "Holds phone. Amps Sound",
=======
    "title" => "Makers&rsquo; Lab Key Chain",
    "description" => "A customizable key chain! So cool!",
>>>>>>> origin/master
    "price" => 18,
    "username" => "Andy",
    "img" => "img/lifestyle/6.jpeg"
);
$products[107] = array(
<<<<<<< HEAD
    "title" => "Pencil Holder",
    "description" => "Blue pencil holder",
=======
    "title" => "Makers&rsquo; Lab Key Chain",
    "description" => "A customizable key chain! So cool!",
>>>>>>> origin/master
    "price" => 18,
    "username" => "Andy",
    "img" => "img/lifestyle/7.jpeg"
);
$products[108] = array(
<<<<<<< HEAD
    "title" => "Blue Spinwheel",
    "description" => "Cute little spinwheel",
=======
    "title" => "Makers&rsquo; Lab Key Chain",
    "description" => "A customizable key chain! So cool!",
>>>>>>> origin/master
    "price" => 18,
    "username" => "Andy",
    "img" => "img/lifestyle/8.jpeg"
);

?>