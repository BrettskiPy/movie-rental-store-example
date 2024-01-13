<?php

$codedir = '../src';

require_once("$codedir/Movie.php");
require_once("$codedir/Rental.php");
require_once("$codedir/Customer.php");
require_once("$codedir/Classification.php");
require_once("$codedir/StatementGenerator.php");
require_once("$codedir/StatementFormatter.php");

// Create movies with unique classification strategies
$theMatrix = new Movie("The Matrix", NewRelease::class);
$myNeighborTotoro = new Movie("My Neighbor Totoro", Childrens::class);
$theGodfather = new Movie("The Godfather", Regular::class);
$scream = new Movie("Scream", Horror::class);

// Create customer and add rentals with the number of days rented
$customer = new Customer("Rasmus Lerdorf");
$customer->addRental(new Rental($theMatrix, 3));
$customer->addRental(new Rental($myNeighborTotoro, 1));
$customer->addRental(new Rental($theGodfather, 1));
$customer->addRental(new Rental($scream, 5));

// Instantiate the customer statement generator and generate multiple kinds of formatted customer statements 
$customerStatementGenerator = new CustomerStatementGenerator();
$htmlStatement = $customerStatementGenerator->generateStatement($customer, new HtmlStatementFormatter());
$colorfulHtmlStatement = $customerStatementGenerator->generateStatement($customer, new ColorfulHtmlStatementFormatter()); 

// Display the customer HTML statement
echo $htmlStatement;

// Display a colorful customer HTML statement
echo $colorfulHtmlStatement; // example