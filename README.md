# Video Rental Store Project
![image](https://github.com/BrettskiPy/movie-rental-store-example/assets/30988215/b6541c8b-311f-4884-845c-bf535bf8c0df)

## Overview
This educational project is designed to demonstrate the use of the Strategy Pattern and interfaces in a PHP project. The project is structured into various classes and interfaces, each demonstrating key principles of object-oriented programming and design patterns. For additional information about the Strategy Pattern see [this article](https://refactoring.guru/design-patterns/strategy) by refactoring.guru

## Concept of Strategy Pattern
The Strategy Pattern is a behavioral design pattern that enables selecting an algorithm's runtime behavior. It defines a family of algorithms, encapsulates each one, and makes them interchangeable without altering the client's code. This pattern is used to:
- Separate the behavior (strategy) from the class that uses the algorithm (context).
- Enable the addition of new strategies without modifying the context.

## Use of Interfaces and Contracted Concrete Classes
Interfaces in PHP are contracts that define what methods a class should implement. Contracted concrete classes are those that implement these interfaces, providing specific functionality. This approach promotes:
- Loose coupling between classes.
- Flexibility and reusability of code.
- Easier maintenance and extension of the application.

## File Structure and Implementation
- **Classification.php**: Demonstrates different classification strategies. Each class represents a unique strategy with a common interface.
- **Customer.php**: Represents a client that uses various strategies. Interacts with other classes based on the Strategy Pattern.
- **Movie.php**: An example of a context class that can use different classification strategies.
- **Rental.php**: Another context class, showing how different strategies can be applied in various scenarios.
- **Statement.php**: Focuses on generating statements, possibly using different formats or structures as strategies.
- **StatementFormatter.php**: Illustrates different formatting strategies for statements.
- **StatementGenerator.php**: An example of a class that could use various strategies to generate different types of statements.
- **Index.php**: The entry point of the application, demonstrating how the Strategy Pattern is initialized and utilized.

## Usage of the Strategy Pattern in This Project
1. **Define Strategy Interfaces**: Each strategy has a corresponding interface defining the methods it must implement.
2. **Implement Strategies**: Concrete classes implement these interfaces, providing specific algorithmic behavior.
3. **Context Class**: A class that uses a strategy, which can be set at runtime, allowing the class's behavior to change dynamically.

## Educational Purpose
This README aims to provide insights into the implementation of the Strategy Pattern and the use of interfaces in PHP, showcasing a practical example that can be used for learning and teaching purposes.

## Unit Tests
To run the unit tests ensure the dependencies are installed and run this command: `./vendor/bin/phpunit --testdox tests`
