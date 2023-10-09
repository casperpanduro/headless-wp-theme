# Headless WordPress Theme
Created by Casper Panduro aka [Code by Panduro](https://codebypanduro.dk)
![Best Headless WP Theme](https://raw.githubusercontent.com/casperpanduro/headless-wp-theme/main/screenshot.png)

## Table of Contents

1. [Getting Started](#getting-started)
2. [Theme Setup](#theme-setup)
3. [Custom Post Types](#custom-post-types)
4. [Custom REST API Endpoints](#custom-rest-api-endpoints)
5. [Contributing](#contributing)

---

## Getting Started

1. Install dependencies: `composer install`
2. Setup frontend url in `wp-config.php` as `define('WP_FRONTEND_URL', 'http://localhost:3000');`. Default is `http://localhost:3000`.

Before you get started, make sure to include the necessary files at the beginning of `functions.php`:

```php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/app/theme.php';
```

## Theme Setup
To set up your theme, the `functions.php` file utilizes the `after_setup_theme` action. It initiates the theme setup and performs specific tasks like removing user roles and adding menus.
```php
add_action('after_setup_theme', function() {
    theme()
        ->headlessSetup()
        ->removeUserRoles(['subscriber', 'contributor', 'author', 'editor'])
        ->addMenu('main', 'Main Menu');
});
```

To add your own custom functions, extend the file located at `/app/CodeByPanduro/Theme/Setup.php`.

## Custom Post Types
The `init` action helps you to register new custom post types.
```php
add_action('init', function() {
    post_type()
        ->add('book')
        ->register();
});
```
You can add your own custom post types here.

## Custom REST API Endpoints
Custom REST API endpoints can be registered using the `rest_api_init` action.
```php
add_action('rest_api_init', function () {
    rest_api()->menu();
});
```

## Contributing
For contributing to this `functions.php`, please ensure to follow the coding standards and guidelines outlined for the project.
