<?php
/**
 * FHCA functions and definitions
 *
 * @package FHCA
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'fhca_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function fhca_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on FHCA, use a find and replace
	 * to change 'fhca' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'fhca', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'fhca' ),
	) );
	
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link'
	) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'fhca_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	
	// Enables post thumbnails for pages
	add_theme_support( 'post-thumbnails', array( 'page', 'post' ) );
}
endif; // fhca_setup
add_action( 'after_setup_theme', 'fhca_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function fhca_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'fhca' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'fhca_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function fhca_scripts() {
	wp_enqueue_style( 'fhca-style', get_stylesheet_uri() );

	/*wp_enqueue_script( 'fhca-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'fhca-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	*/

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fhca_scripts' );

/* Removes the top level pages from the search results, or any particular page ID that needs to removed from internal search results*/

function jp_search_filter( $query ) {
  if ( $query->is_search && $query->is_main_query() ) {
    $query->set( 'post__not_in', array( 6,10,12,14,16 ) ); 
  }
}
add_filter( 'pre_get_posts', 'jp_search_filter' );

/* Add excerpt option to pages for the home page summaries */
add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}

function the_post_excerpt_by_id($ID, $limit) {
	$post_data = get_post($ID);
    $excerpt = strip_tags($post_data->post_excerpt);
    $excerpt_length = $limit; //number of words to limit the execerpt to
    
    $words = explode(' ', $excerpt, $excerpt_length + 1);

    if(count($words) > $excerpt_length) :
        array_pop($words);
        array_push($words, '…');
        $excerpt = implode(' ', $words);
    endif;

    echo $excerpt;
}

// Font Awesome icon associations for the pages
function the_page_fa_icon($pageID,$XX) {
	switch ($pageID) {
		    case 20: ?>
		    	<div class="fa-stack fa-<?php echo $XX ?>">	
		    		<i class="fa fa-child fa-stack-1x"></i>
		    		<i class="fa fa-circle-thin fa-stack-2x"></i>
		    	</div>
		<?php break;
		    case 26: ?>
		    	<div class="fa-stack fa-<?php echo $XX ?>">	
		    		<i class="fa fa-sitemap fa-stack-1x"></i>
		    		<i class="fa fa-circle-thin fa-stack-2x"></i>
		    	</div>
		<?php break;
		    case 28: ?>
		    	<div class="fa-stack fa-<?php echo $XX ?>">	
		    		<i class="fa fa-home fa-stack-1x"></i>
		    		<i class="fa fa-circle-thin fa-stack-2x"></i>
		    	</div>
		<?php break;
		    case 30: ?>
		    	<div class="fa-stack fa-<?php echo $XX ?>">	
		    		<i class="fa fa-comments fa-stack-1x"></i>
		    		<i class="fa fa-circle-thin fa-stack-2x"></i>
		    	</div>
		<?php break;
		    case 33: ?>
		    	<div class="fa-stack fa-<?php echo $XX ?>" id="one-line">	
		    		<i class="fa fa-pencil-square-o fa-stack-1x"></i>
		    		<i class="fa fa-circle-thin fa-stack-2x"></i>
		    	</div>
		<?php break;
		    case 36: ?>
		    	<div class="fa-stack fa-<?php echo $XX ?>">	
		    		<i class="fa fa-list-ol fa-stack-1x"></i>
		    		<i class="fa fa-circle-thin fa-stack-2x"></i>
		    	</div>
		<?php break;
		    case 38: ?>
		    	<div class="fa-stack fa-<?php echo $XX ?>">	
		    		<i class="fa fa-key fa-stack-1x"></i>
		    		<i class="fa fa-circle-thin fa-stack-2x"></i>
		    	</div>
		<?php break;
		    case 42: ?>
		    	<div class="fa-stack fa-<?php echo $XX ?>">	
		    		<i class="fa fa-arrow-circle-down fa-stack-1x"></i>
		    		<i class="fa fa-circle-thin fa-stack-2x"></i>
		    	</div>
		<?php break;
		    case 45: ?>
		    	<div class="fa-stack fa-<?php echo $XX ?>">	
		    		<i class="fa fa-car fa-stack-1x"></i>
		    		<i class="fa fa-circle-thin fa-stack-2x"></i>
		    	</div>
		<?php break;
		    case 47: ?>
		    	<div class="fa-stack fa-<?php echo $XX ?>">	
		    		<i class="fa fa-volume-up fa-stack-1x"></i>
		    		<i class="fa fa-circle-thin fa-stack-2x"></i>
		    	</div>
		<?php break;
		    case 49: ?>
		    	<div class="fa-stack fa-<?php echo $XX ?>">	
		    		<i class="fa fa-road fa-stack-1x"></i>
		    		<i class="fa fa-circle-thin fa-stack-2x"></i>
		    	</div>
		<?php break;
		    case 51: ?>
		    	<div class="fa-stack fa-<?php echo $XX ?>">	
		    		<i class="fa fa-medkit fa-stack-1x"></i>
		    		<i class="fa fa-circle-thin fa-stack-2x"></i>
		    	</div>
		<?php break;
		    case 53: ?>
		    	<div class="fa-stack fa-<?php echo $XX ?>">	
		    		<i class="fa fa-book fa-stack-1x"></i>
		    		<i class="fa fa-circle-thin fa-stack-2x"></i>
		    	</div>
		<?php break;
		    case 55: ?>
		    	<div class="fa-stack fa-<?php echo $XX ?>">	
		    		<i class="fa fa-user-md fa-stack-1x"></i>
		    		<i class="fa fa-circle-thin fa-stack-2x"></i>
		    	</div>
		<?php break;
		    case 57: ?>
		    	<div class="fa-stack fa-<?php echo $XX ?>">	
		    		<i class="fa fa-eye fa-stack-1x"></i>
		    		<i class="fa fa-circle-thin fa-stack-2x"></i>
		    	</div>
		<?php break;
		    case 68: ?>
		    	<div class="fa-stack fa-<?php echo $XX ?>">	
		    		<i class="fa fa-star fa-stack-1x"></i>
		    		<i class="fa fa-circle-thin fa-stack-2x"></i>
		    	</div>
		<?php break;
		    case 76: ?>
		    	<div class="fa-stack fa-<?php echo $XX ?>">	
		    		<i class="fa fa-group fa-stack-1x"></i>
		    		<i class="fa fa-circle-thin fa-stack-2x"></i>
		    	</div>
		<?php break;
		    case 81: ?>
		    	<div class="fa-stack fa-<?php echo $XX ?>">	
		    		<i class="fa fa-pencil fa-stack-1x"></i>
		    		<i class="fa fa-circle-thin fa-stack-2x"></i>
		    	</div>
		<?php break;
			case 255: ?>
		    	<div class="fa-stack fa-<?php echo $XX ?>">	
		    		<i class="fa fa-envelope fa-stack-1x"></i>
		    		<i class="fa fa-circle-thin fa-stack-2x"></i>
		    	</div>
		<?php break;
			case 388: ?>
		    	<div class="fa-stack fa-<?php echo $XX ?>">	
		    		<i class="fa fa-paragraph fa-stack-1x"></i>
		    		<i class="fa fa-circle-thin fa-stack-2x"></i>
		    	</div>
		<?php break;
		    default: ?>
		    	<div class="fa-stack fa-<?php echo $XX ?>">	
		    		<i class="fa fa-cube fa-stack-1x"></i>
		    		<i class="fa fa-circle-thin fa-stack-2x"></i>
		    	</div>	
	<?}
}		

if ( ! function_exists( 'fhca_paging_nav' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 */
function fhca_paging_nav() {
	// Don't print empty markup if there's only one page.
	if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
		return;
	}
	?>
	<nav class="navigation paging-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'fhca' ); ?></h1>
		<div class="nav-links">

			<?php if ( get_next_posts_link() ) : ?>
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'fhca' ) ); ?></div>
			<?php endif; ?>

			<?php if ( get_previous_posts_link() ) : ?>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'fhca' ) ); ?></div>
			<?php endif; ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'fhca_post_nav' ) ) :
/**
 * Display navigation to next/previous post when applicable.
 */
function fhca_post_nav() {
	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous ) {
		return;
	}
	?>
	<nav class="navigation post-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Post navigation', 'fhca' ); ?></h1>
		<div class="nav-links">
			<?php
				previous_post_link( '<div class="nav-previous">%link</div>', _x( '<span class="meta-nav">&larr;</span>&nbsp;%title', 'Previous post link', 'fhca' ) );
				next_post_link(     '<div class="nav-next">%link</div>',     _x( '%title&nbsp;<span class="meta-nav">&rarr;</span>', 'Next post link',     'fhca' ) );
			?>
		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'fhca_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function fhca_posted_on() {
	$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string .= '<time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		_x( 'Posted on %s', 'post date', 'fhca' ),
		'<a>' . $time_string . '</a>'
	);

	echo '<span class="posted-on">' . $posted_on . '</span>';

}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function fhca_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'fhca_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'fhca_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so fhca_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so fhca_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in fhca_categorized_blog.
 */
function fhca_category_transient_flusher() {
	// Like, beat it. Dig?
	delete_transient( 'fhca_categories' );
}
add_action( 'edit_category', 'fhca_category_transient_flusher' );
add_action( 'save_post',     'fhca_category_transient_flusher' );

// Changing excerpt more
function new_excerpt_more($more) {
	global $post;
	return '… <a class="read-more-link" href="'. get_permalink($post->ID) . '">' . 'continue reading <i class="fa fa-chevron-circle-right"></i>' . '</a>';
	}
	add_filter('excerpt_more', 'new_excerpt_more');


