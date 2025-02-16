# PHP Object Reference Bug

This repository demonstrates a subtle but common bug in PHP related to object references and inheritance.  When assigning an object to another variable, you are not creating a copy; you're creating a new reference to the same object in memory.  This can lead to unexpected behavior, particularly when working with inheritance.

The `bug.php` file showcases the problem, while `bugSolution.php` provides a solution using cloning to create independent object copies.

## Reproducing the Bug

1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the unexpected output.

## Solution

The `bugSolution.php` file demonstrates how to correctly handle this situation using the `clone` keyword to create a true copy of the object, preventing unintended modifications.