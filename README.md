# Headless WordPress Theme

## Getting Started

1. Install dependencies: `composer install`

## Development
### Adding custom post types
1. In functions.php, you can add a new post type by adding the following in the init handler: `post_type()->add('book')->register();`
