<?php

interface StatementFormatter
{
    public function format(Statement $statement): string;
}

class HtmlStatementFormatter implements StatementFormatter
{
    public function format(Statement $statement): string
    {
        $result = "<h1>Rentals for <em>" . htmlspecialchars($statement->getCustomerName()) . "</em></h1>\n";
        foreach ($statement->getRentalLines() as $line) {
            $result .= htmlspecialchars($line['title']) . ": " . htmlspecialchars($line['amount']) . "<br>\n";
        }
        $result .= "<p>Amount owed is $<em>" . $statement->getTotalAmount() . "</em></p>\n";
        $result .= "<p>You earned <em>" . $statement->getFrequentRenterPoints() . "</em> frequent renter points</p>";
        return $result;
    }
}

class ColorfulHtmlStatementFormatter implements StatementFormatter
{
    public function format(Statement $statement): string
    {
        $colorfulStyle = "background-image: linear-gradient(to left, violet, indigo, blue, green, red); -webkit-background-clip: text; color: transparent; background-color: #333; padding: 4px 6px; border-radius: 4px;";

        $result = "<h1 style='" . $colorfulStyle . "'>Rentals for <em>" . htmlspecialchars($statement->getCustomerName()) . "</em></h1>\n";
        foreach ($statement->getRentalLines() as $line) {
            $result .= "<span style='" . $colorfulStyle . "'>" . htmlspecialchars($line['title']) . "</span>: <span style='" . $colorfulStyle . "'>" . htmlspecialchars($line['amount']) . "</span><br>\n";
        }
        $result .= "<p style='" . $colorfulStyle . "'>Amount owed is $<em>" . htmlspecialchars($statement->getTotalAmount()) . "</em></p>\n";
        $result .= "<p style='" . $colorfulStyle . "'>You earned <em>" . htmlspecialchars($statement->getFrequentRenterPoints()) . "</em> frequent renter points</p>";

        return $result;
    }
}