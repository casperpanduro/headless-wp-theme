# Headless WordPress Theme

## Getting Started

1. Install dependencies: `composer install`
2. Setup frontend url in `wp-config.php` as `define('WP_FRONTEND_URL', 'http://localhost:3000');`. Default is `http://localhost:3000`.

## Development
### Adding custom post types
1. In functions.php, you can add a new post type by adding the following in the init handler: `post_type()->add('book')->register();`
