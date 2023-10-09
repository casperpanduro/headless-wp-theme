<?php
namespace CodeByPanduro\RestApi;

use CodeByPanduro\Helpers\RelativeLink;
use WP_REST_Request;
use WP_REST_Response;

/**
 * Register custom rest api endpoints
 */
class Menu {
    public static function register(): void {
        // get menu by slug
        register_rest_route('wp/v2', '/menu/', [
            'methods' => 'GET',
            'callback' => [(new self), 'getLocations']
        ]);

        // get menu by slug
        register_rest_route('wp/v2', '/menu/(?P<slug>[a-zA-Z0-9-]+)', [
            'methods' => 'GET',
            'callback' => [(new self), 'getMenu']
        ]);
    }

    public function getLocations(WP_REST_Request $request): WP_REST_Response {
        $locations = get_nav_menu_locations();
        $terms = get_terms('nav_menu', array('hide_empty' => true, 'include' => array_values($locations)));

        return new WP_REST_Response($this->formatLocations($terms), 200);
    }

    public function getMenu(WP_REST_Request $request): WP_REST_Response {
        $slug = $request->get_param('slug');
        // get menu id by location
        $locations = get_nav_menu_locations();

        try {
            $menu = $locations[$slug] ?? null;
            $menu = wp_get_nav_menu_items($menu);

            if(!$menu) {
                throw new \Exception('Menu not found');
            }

            return new WP_REST_Response($this->formatItems($menu), 200);
        } catch (\Throwable $th) {
            return new WP_REST_Response([
                'message' => $th->getMessage()
            ], 404);
        }
    }

    public function formatLocations(array $items = []): array {
        $formatted = [];
        $locations = get_nav_menu_locations();

        foreach($items as $item) {
            $formatted[] = array(
                "ID" => $item->term_id,
                "name" => $item->name,
                "slug" => $item->slug,
                "count" => $item->count,
            );
        }

        return $formatted;
    }

    public function formatItems(array $items = []): array {
        $formatted = [];
        foreach($items as $item) {
            $formatted[] = array(
                "ID" => $item->ID,
                "name" => $item->post_name,
                "url" => RelativeLink::get($item->url),
                "title" => $item->title,
                "target" => $item->target,
                "classes" => $item->classes,
            );
        }

        return $formatted;
    }
}
