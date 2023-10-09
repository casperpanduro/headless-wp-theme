# Coding Standards

This document outlines the coding standards for this project. Adherence to these standards ensures the codebase remains clean, consistent, and easy to read.

## Table of Contents

1. [General Guidelines](#general-guidelines)
2. [Naming Conventions](#naming-conventions)
3. [Code Structure](#code-structure)
4. [Comments](#comments)
5. [Version Control](#version-control)

---

## General Guidelines

- Code should be written with readability in mind.
- Keep line lengths to around 80 characters when possible.
- Use 4 spaces for indentation. Do not use tabs.

## Naming Conventions

### Variables

- Use `camelCase` for variable names.
- Variable names should be descriptive.

```php
// Good
$userEmail = 'email@example.com';

// Bad
$ue = 'email@example.com';
```

### Functions and Methods

- Use `camelCase` for function names.
- The function name should describe what the function does.

```php
// Good
function calculateTotalAmount() { ... }

// Bad
function doStuff() { ... }
```

### Classes

- Use `PascalCase` for class names.

```php
// Good
class UserAuthentication { ... }

// Bad
class userAuth { ... }
```

## Code Structure

### Control Structures

- Use curly braces even for single-line `if`, `for`, or `while` statements.

```php
// Good
if (true) {
echo "This is good";
}

// Bad
if (true) echo "This is bad";
```

### Functions and Methods

- Always specify visibility (`public`, `private`, `protected`) for methods.
- Group similar methods together, and place helper methods last.

## Comments

- Use comments to explain why the code is doing something, not what it's doing.
- Use JSDoc-style comments for functions and methods.

```php
/**
* Calculate the total amount.
*
* @param int \$price
* @param int \$quantity
* @return int
  */
  function calculateTotalAmount(\$price, \$quantity) {
  return $price * $quantity;
  }
  ```

## Version Control

- Write meaningful commit messages.
- Keep each commit focused on a single task.

---

By adhering to these standards, we ensure that our code is clean, consistent, and easy to understand. Thank you for contributing!
