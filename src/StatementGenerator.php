<?php

require_once("Statement.php");

class CustomerStatementGenerator
{
    public function generateStatement(Customer $customer, StatementFormatter $formatter): string
    {
        $statement = new Statement($customer->getName());
        $totalAmount = 0;
        $frequentRenterPoints = 0;

        foreach ($customer->getRentals() as $rental) {
            $thisAmount = $rental->getCharge();
            $frequentRenterPoints += $rental->getFrequentRenterPoints();

            $statement->addRentalLine($rental->getMovie()->getTitle(), $thisAmount);
            $totalAmount += $thisAmount;
        }

        $statement->setTotalAmount($totalAmount);
        $statement->setFrequentRenterPoints($frequentRenterPoints);

        return $formatter->format($statement);
    }
}
