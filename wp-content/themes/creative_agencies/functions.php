<?php

function MainMenu()
{
    register_nav_menus(
        array(
            'header-menu' => __('Zone menu header'), 
        )
        );
}

add_action('init', 'MainMenu');

/* active nav */
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
	if (in_array('current-menu-item', $classes) ){
		$classes[] = 'active ';
	}
	
	return $classes;
}

/* menu socila (right) */
function SocialMenu(){
    register_nav_menus(
        array(
            'header-menu-social' => __('Zone menu social'), 
        )
        );
}
add_action('init', 'SocialMenu');





/*
* On utilise une fonction pour créer notre custom post type 'projets'
*/

function custom_post_type_projects() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Tous nos projets', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Projet', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Nos projets'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Tous les projets'),
		'view_item'           => __( 'Voir le projet'),
		'add_new_item'        => __( 'Ajouter un nouveau projet'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer un projet'),
		'update_item'         => __( 'Modifier un projet'),
		'search_items'        => __( 'Rechercher un projet'),
		'not_found'           => __( 'Auncun projet trouvé'),
		'not_found_in_trash'  => __( 'Auncun projet trouvé dans la corbeille'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Projects'),
		'description'         => __( 'Tout sur les projets'),
		'labels'              => $labels,
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', ),
		/* 
		* Différentes options supplémentaires
		*/
		'show_in_rest' => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'projects'),

	);
	
	// On enregistre notre custom post type qu'on nomme ici "projets" et ses arguments
	register_post_type( 'projects', $args );

}

add_action( 'init', 'custom_post_type_projects', 0 );


function footer_widgets_init() {

	register_sidebar( array(

	'name' => 'Footer Widgets Area',
	'id' => 'footer-widgets-area',
	'before_widget' => '<div class="footer-widgets-area">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	) );
   }

add_action( 'widgets_init', 'footer_widgets_init' );

class hstngr_widget extends WP_Widget {

	//Insert functions here
	function __construct() {
		parent::__construct(
		// widget ID
		'footer_widget',
		// widget name
		__('Footer Widget', ' hstngr_widget_domain'),
		// widget description
		array( 'description' => __( 'Hostinger Widget Tutorial', 'hstngr_widget_domain' ), )
		);
	}

	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );
		echo $args['before_widget'];
		//if title is present
		if ( ! empty( $title ) )
		echo $args['before_title'] . $title . $args['after_title'];
		//output
		echo __( 'Hello, World from Hostinger.com', 'hstngr_widget_domain' );
		echo $args['after_widget'];
	}

	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) )
		$title = $instance[ 'title' ];
		else
		$title = __( 'Default Title', 'hstngr_widget_domain' );
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<?php
	}
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}
}
function hstngr_register_widget() {
	register_widget( 'hstngr_widget' );
}
add_action( 'widgets_init', 'hstngr_register_widget' );

// Commentaires pour les articles de blogs // 
add_filter('comment_form_default_fields', 'website_remove');
function website_remove($fields)
{
if(isset($fields['url']))
unset($fields['url']);
return $fields;
}

function wpb_move_comment_field_to_bottom( $fields ) {
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;
	return $fields;
	}
	 
	add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );

add_action( 'init', 'custom_post_type_projects', 0 );
