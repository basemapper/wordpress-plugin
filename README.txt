=== Plugin Name ===
Contributors: @basemapper
Donate link: https://basemapper.com
Tags: store locator, find my distributor
Requires at least: 3.0.1
Tested up to: 5.4.1
Stable tag: trunk
License: LGPL-3.0+
License URI: https://www.gnu.org/licenses/lgpl-3.0.html

Basemapper is an easy way to add a product locator to your application. Product locators are useful
for pointing your customers to where they can find your product in stores. They are great for mapping distributors,
resturant locations, or even food trucks.

== Description ==

With Basemapper, you can build and manage a store locator for your application. All locations are managed via our
web interface at https://basemapper.com. You can easily import existing locations, manually add new ones, 
track store hours, add tag filters and custom attributes all in one place. 

This plugin adds a Basemapper shortcode and widget so you can integrate your map easily on any page.

== Installation ==

Installation should take only a few minutes.

1. Upload the `basemapper` plugin to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. You can now access the Basemapper admin panel under `Settings -> Basemapper`. From there, you can
add a global default Map ID from https://basemapper.com/dashboard. You can find your Map ID on the
General Settings tab for your map. 

### Using the shortcode
Once your Map ID is added you can then use the `[basemapper]` shortcode on any page to render a map. If you
have multiple maps and would like to specify a different map, you can override the global Map ID by specifying
it in the shortcode like `[basemapper map="89fb1f31-b36f-4d98-9dc4-90e7dd92a2ad"]`.

### Using the widget
Widget availability will be based on your theme, but wherever you can add a widget you can select the Basemapper
widget by clicking on `Add a Widget` and selecting `Basemapper Store Locator`.  

== Frequently Asked Questions ==

= What is the Mapbox API Token? =

For your map to render, you will need to register for a Mapbox API token.  Once registered, you can access your
token at https://account.mapbox.com/access-tokens/.

== Screenshots ==

1. Add a store locator to your site in minutes. Manage locations, store hours, and more all in one place.

== Changelog ==

= 1.0 =
* Initial release

== Upgrade Notice ==

= 1.0 =
Initial release
