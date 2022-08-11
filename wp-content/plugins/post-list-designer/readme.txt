=== Post List Designer by Category  ===
Contributors: infornweb, pluginandplay 
Tags: post list, list post, category post list, list design, post by category, archive post list,minimal post list, post list designer, post designs, post list layout, recent post list
Requires at least: 4.0
Tested up to: 5.7
Requires PHP: 5.4
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Display WordPress Post on your website in List, simple/minimal list and archive list view. Display category post list as well.

== Description ==

= ✅ Post List Designer is best for: =

* Display post list with beautiful designs (2 designs). 
* Display post list with simple/minimal design.
* Display post list with archive design.
* Display post list by category.

Post List Designer is use to display WordPress posts with list designs. You can display latest post on your homepage/frontpage as well as in inner pages.

View [FREE DEMO](https://demo.infornweb.com/post-list-designer-demo/) for more details.

Post List Designer allows you to list posts by category in a post or page using the shortcode.

The shortcode accepts a category id, the order in which you want the posts to display, and the number of posts to display. You can also display the post author, date, excerpt, even the content!

Checkout [Premium Version Demo](https://premium.infornweb.com/post-list-designer-pro/) | [Buy Premium Version](https://premium.infornweb.com/post-list-designer-pro/)  for more designs and options.

> <strong>Premium Version</strong> supports custom post type, custom taxonomy, custom tags, featured post, trending post as well as many cool features.
> You can get [Post List Designer Premium here](https://premium.infornweb.com/post-list-designer-pro/)!

= This WordPress plugin contains 1 shortcode =

✅ 1) Post List Shortcode

<code>[pld_post_list]</code>

= Following are Post shortcode Parameters: =

* **Limit :** [pld_post_list limit="10"] (Display latest 10 post and then pagination).
* **Category :** [pld_post_list category="category_id OR category_slug"] (Display post categories wise).
* **Design:** [pld_post_list design="design-1"] (Select the grid design. Right now there are 2 designs. design-1 and design-2).
* **Display Author :** [pld_post_list show_author="true"] (Display Post author OR not. By default value is "true". Values are "true" and "false" )
* **Display Content :** [pld_post_list show_content="true" ] (Display post Short content OR not. By default value is "true". Options are "true" and "false").
* **Display Date :** [pld_post_list show_date="false"] (Display Post date OR not. By default value is "true". Options are "true" and "false")
* **Display Category Name :** [pld_post_list show_category_name="true" ] (Display post category name OR not. By default value is "true". Options are "true" and "false").
* **Display Tags :** [pld_post_list show_tags="true"] (show post tags or not.)
* **Content Words Limit :** [pld_post_list content_words_limit="30" ] (Control post short content Words limit. By default limit is 20 words).
* **Display Comments :** [pld_post_list show_comments="true"] (Show post comments or not.)
* **Post Order :** [pld_post_list order="DESC"] (Designates the ascending or descending order of the 'orderby' parameter. Defaults to 'DESC'. Values are "DESC" and "ASC")
* **Post Order by :** [pld_post_list orderby="post_date"] (Sort retrieved posts by parameter. Defaults to 'date' (post_date). One or more options can be passed. 'none',ID','author','title','name',rand',date')
* **Pagination :** [pld_post_list pagination="true"] (show post pagination or not.)
* **Pagination Type :** [pld_post_list pagination_type="prev-next"] (pagination type. values are "numeric" OR "prev-next". By default is numeric)

✅ 2) Post Simple/Minimal List Shortcode

<code>[pld_simple_list]</code>

= Following are Post shortcode Parameters: =

* **Limit :** [pld_simple_list limit="10"] (Display latest 10 post and then pagination).
* **Category :** [pld_simple_list category="category_id OR category_slug"] (Display post categories wise).
* **List Style :** [pld_simple_list list_style="ul"] (Select list type. By default value is "ul" You can use 'ul' OR 'ol').
* **Title Tag :** [pld_simple_list title_tag="div"] (Select title tag. By default value is "div". You can use 'h2' OR 'h3' etc).
* **Display Author :** [pld_simple_list show_author="true"] (Display Post author OR not. By default value is "false". Values are "true" and "false" )
* **Display Content :** [pld_simple_list show_content="true" ] (Display post Short content OR not. By default value is "false". Options are "true" and "false").
* **Show Read More :** [pld_simple_list show_read_more="true" ] (Display read more link OR not. By default value is "false". Options are "true" and "false").
* **Display Date :** [pld_simple_list show_date="false"] (Display Post date OR not. By default value is "false". Options are "true" and "false")
* **Display Category Name :** [pld_simple_list show_category_name="true" ] (Display post category name OR not. By default value is "false". Options are "true" and "false").
* **Display Comments :** [pld_simple_list show_comments="true"] (Show post comments or not.)
* **Content Words Limit :** [pld_simple_list content_words_limit="30" ] (Control post short content Words limit. By default limit is 20 words).
* **Post Order :** [pld_simple_list order="DESC"] (Designates the ascending or descending order of the 'orderby' parameter. Defaults to 'DESC'. Values are "DESC" and "ASC")
* **Post Order by :** [pld_simple_list orderby="post_date"] (Sort retrieved posts by parameter. Defaults to 'date' (post_date). One or more options can be passed. 'none',ID','author','title','name',rand',date')
* **Dislay Image :** [pld_simple_list show_image="false"] (Display Post image OR not. By default value is "false". Options are "true" and "false")
* **Pagination :** [pld_simple_list pagination="true"] (show post pagination or not.)
* **Pagination Type :** [pld_simple_list pagination_type="prev-next"] (pagination type. values are "numeric" OR "prev-next". By default is numeric)

✅ 3) Post Archive List Shortcode

<code>[pld_archive_list]</code>

= Following are Post shortcode Parameters: =

* **Limit :** [pld_archive_list limit="10"] (Display latest 10 post and then pagination).
* **Category :** [pld_archive_list category="category_id OR category_slug"] (Display post categories wise).
* **List Style :** [pld_archive_list list_style="ul"] (Select list type. By default value is "ul" You can use 'ul' OR 'ol').
* **Title Tag :** [pld_archive_list title_tag="div"] (Select title tag. By default value is "div". You can use 'h2' OR 'h3' etc).
* **Display Author :** [pld_archive_list show_author="true"] (Display Post author OR not. By default value is "false". Values are "true" and "false" )
* **Display Content :** [pld_archive_list show_content="true" ] (Display post Short content OR not. By default value is "false". Options are "true" and "false").
* **Show Read More :** [pld_archive_list show_read_more="true" ] (Display read more link OR not. By default value is "false". Options are "true" and "false").
* **Display Date :** [pld_archive_list show_date="false"] (Display Post date OR not. By default value is "false". Options are "true" and "false")
* **Display Category Name :** [pld_archive_list show_category_name="true" ] (Display post category name OR not. By default value is "false". Options are "true" and "false").
* **Display Comments :** [pld_archive_list show_comments="true"] (Show post comments or not.)
* **Content Words Limit :** [pld_archive_list content_words_limit="30" ] (Control post short content Words limit. By default limit is 20 words).
* **Post Order :** [pld_archive_list order="DESC"] (Designates the ascending or descending order of the 'orderby' parameter. Defaults to 'DESC'. Values are "DESC" and "ASC")
* **Post Order by :** [pld_archive_list orderby="post_date"] (Sort retrieved posts by parameter. Defaults to 'date' (post_date). One or more options can be passed. 'none',ID','author','title','name',rand',date')
* **Dislay Image :** [pld_archive_list show_image="false"] (Display Post image OR not. By default value is "false". Options are "true" and "false")
* **Pagination :** [pld_archive_list pagination="true"] (show post pagination or not.)
* **Pagination Type :** [pld_archive_list pagination_type="prev-next"] (pagination type. values are "numeric" OR "prev-next". By default is numeric)

=  ✅ Stunning Features: =

* Display post in list view.
* Display post as archive view.
* Display post list category wise.
* 100% mobile & tablet responsive.
* Work in any WordPress theme.
* Lightweight, Fast & Powerful.
* And more features coming soon!

= PRO Features Include : =
> <strong>Premium Version</strong>
> * 10+ Designs
> * Create multiple layout.
> * Works with any Custom Post Type.
> * Works with any Custom Taxonomy.
> * Works with any Custom Tags.
> * Set custom link for post.
> * Featured Post Functionality.
> * Trending Post Functionality.
> * Multiple Post Type Functionality.
> * 5 Types of different pagination.
> * Load More and Prev – Next Ajax Pagination.
> * Infinite Scroll Pagination.
> * Shortcode Generator with Live Preview Panel – No hassles for documentation.
> * Amazing Shortcode Template Functionality – Control your shortcode from one place on various location!!
> * Set "Order" and "Orderby" sorting parameters via shortcode.
> * Drag & Drop Post Order Change.
> * WPBakery Page Builder support.
> * Elementor Page Builder support.
> * 100% Multilanguage.
> * Many more other features also…
>
> View [PRO DEMO and Features](https://premium.infornweb.com/post-list-designer-pro/) for additional information.
>

== Installation ==
1. Upload the 'post-list-designer' folder to the '/wp-content/plugins/' directory.
2. Activate the 'post-list-designer' list plugin through the 'Plugins' menu in WordPress.

== Frequently Asked Questions ==

= Why My Blog Page is not changed OR Blog Page Design is same like Theme Design? =

Blog page content is handled by WordPress it self.

To enable plugin design on Blog page, you need to make sure that Blog page should not be selected on posts page of Reading settings.

Please refer [screenshot](https://infornweb.com/subdomains/images/blog-designer-pack-pro/blog-designer-pack-blog-page-setting.png) and make this changes with your WordPress setup.

**Blog page is already created**

If "Blog" page is already created and assigned that page as a "Posts page" under WordPress Settings > Reading then please de-select this setting.

Once you de-select this setting, open your "Blog" page in edit mode and add the plugin shortcode (Shortcodes are shown under Getting Started section of plugin menu)

**Blog page is not created**

If Blog page is not created then go to Pages > Add New and create a blog page OR some other name as per your need and add the shortcode (Shortcodes are shown under Getting Started section of plugin menu)

= I want to display latest post list on my home page or any other page =

To display post list designs on your home page or any other page just use the following shortcode:

<code>[pld_post_list limit="5" pagination="false"] </code>

This code will display latest 5 posts on your desired page.

= Does Post List Designer plugin have pagination? =

Yes, Post List Designer plugin have pagination feature. There are still four types of different pagination like "Load More", "Infinite Scroll" and etc available in Pro version.

= What about custom post type support? =

Custom Post type support only available with Post List Designer PRO version.

= Will Post List Designer plugin work with my theme? =

Yes, Post List Designer will work with any WordPress themes, but may require some styling changes to make it compatible with your theme. If you are facing any compatibility issue with Post List Designer plugin then please contact us at [Support Forum](https://wordpress.org/support/plugin/post-list-designer/) page.

= Where can I find complete shortcode parameters? =

Each shortcode parameters can be found on this page at plugin "Details" tab.

= Where can I ask for help or talk for plugin issues? =

If you need any help, you can ask it at Post List Designer plugin [Support Forum](https://wordpress.org/support/plugin/post-list-designer/) page.

== Screenshots ==

1. List Design 1
2. List Design 2

== Changelog ==

= 2.1.4 (28 March, 2021) =
* [*] Updated freemius SDK to latest version.
* [*] Tested up to WordPress 5.7

= 2.1.3 (14 Dec, 2020) =
* [*] Updated freemius SDK to latest version.
* [*] Tested up to WordPress 5.6

= 2.1.2 (14 Sep, 2020) =
* [*] Added category slug support for shortocode parameter : category. Now you can use like this category="5" OR category="tech" where category name is Tech, id is 5 an slug name is tech.

= 2.1.1 (08 Sep, 2020) =
* [*] Tested up to: 5.5

= 2.1 (29 July, 2020) =
* [+] Added: Added 2 new shortcode parameters order and orderby.
* [+] Added: Added 2 new shortcodes [pld_simple_list] and [pld_archive_list]

= 2.0 (02 March, 2020) =
* Introduced premium version.
* Fixed some minor issues.

= 1.2 (15 Dec, 2019) =
* Fixed some minor issues.
* Fixed some designing issues.

= 1.1 =
* Follow WordPress plugin guidelines.

= 1.0 =
* Initial release.

== Upgrade Notice ==

= 1.0 =
* Initial release.