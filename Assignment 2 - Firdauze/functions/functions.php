<?php
$pizzaSize = $_POST['PizzaSize'];
$topping = $_POST['Topping'];
$sauceT = $_POST['Sauce'];
$sauce ="";
$total = 0;
$size = "";
$sum = 0;

function small()
{
	return 10.0;
}
function medium()
{
	return 20.5;
}
function large()
{
	return 30.0;
}
function prawn()
{
	return 5.0;
}
function chicken()
{
	return 5.0;
}
function beef()
{
	return 8.0;
}

switch($pizzaSize)
{
 	case "smallPizza":
 	$size = "Small Sized Pizza (6 Inch)";
 	$sum = small();
 	for($i = 0; $i < count($topping); $i++)
 	{
 		switch($topping[$i])
 		{
 			case "Prawn":
 			$sum = $sum + prawn();
 			break;
 			case "Chicken":
 			$sum = $sum + chicken();
 			break;
 			case "Beef":
 			$sum = $sum + beef();
 			break;		
 		}
}
 		break;
 		case "medPizza":
 		$size = "Medium Sized Pizza (9 Inch)";
 		$sum = medium();
 		for($i = 0; $i < count($topping); $i++)
 	{
 		switch($topping[$i])
 		{
 			case "Prawn":
 			$sum = $sum + prawn();
 			break;
 			case "Chicken":
 			$sum = $sum + chicken();
 			break;
 			case "Beef":
 			$sum = $sum + beef();
 			break;		
 		}
}
 		break;

 		case "largePizza":
 		$size = "Large Sized Pizza (12 Inch)";
 		$sum = large();
 		for($i = 0; $i < count($topping); $i++)
 	{
 		switch($topping[$i])
 		{
 			case "Prawn":
 			$sum = $sum + prawn();
 			break;
 			case "Chicken":
 			$sum = $sum + chicken();
 			break;
 			case "Beef":
 			$sum = $sum + beef();
 			break;			
 		}
}
 		break;
 }

switch ($sauceT)
{
	case "sa":
	$sauce = "Spicy Asian Sauce";
	break;
	case "bbq":
	$sauce = "BBQ Sauce";
	break;
	case "rc":
	$sauce = "Royal Cheese Sauce";
	break;
}
$total = $sum;
echo '<br>';
echo $size . " / " . $sauce ." / " . implode(" + ",$topping);
echo '<br>';
echo "Total : RM" . $total;