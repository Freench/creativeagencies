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

/* menu social (right) */
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
		'has_archive'         => false,
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

function pre_footer_left_widgets_init() {

	register_sidebar( array(

	'name' => 'Pre Footer Widgets Area Left',
	'id' => 'pre-footer-widgets-area-left',
	// 'before_widget' => '<div class="pre-footer-widgets-area-left">',
	// 'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	) );
   }

add_action( 'widgets_init', 'pre_footer_left_widgets_init' );

function pre_footer_right_widgets_init() {

	register_sidebar( array(

	'name' => 'Pre Footer Widgets Area right',
	'id' => 'pre-footer-widgets-area-right',
	// 'before_widget' => '<div class="pre-footer-widgets-area-right">',
	// 'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	) );
   }

add_action( 'widgets_init', 'pre_footer_right_widgets_init' );

function footer_register_widget() {
	register_widget( 'footer_widget' );
	}

add_action( 'widgets_init', 'footer_register_widget' );

class footer_widget extends WP_Widget {

	function __construct() {
		parent::__construct(
		// widget ID
		'footer_widget',
		// widget name
		__('Footer Sample Widget', ' footer_widget_domain'),
		// widget description
		array( 'description' => __( 'Footer Widget Tutorial', 'footer_widget_domain' ), )
		);
	}
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );
		$mention = apply_filters( 'widget_title', $instance['mention'] );
		echo $args['before_widget'];
		
		//if mention is present
		if ( ! empty( $mention ) ){
			echo $args['before_title'] .'© '. $mention .' – All Right Reserved'. $args['after_title'];
		}
		echo $args['after_widget'];
		
		//if title is present
		if ( ! empty( $title ) ){
			echo $args['before_title'] . 'Designed by ' . $title . $args['after_title'];
		}
		echo $args['after_widget'];

		echo $args['before_widget'];
		
	}
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ){
			$title = $instance[ 'title' ];
		}
		if ( isset( $instance[ 'mention' ] ) ){
			$mention = $instance[ 'mention' ];
		}

		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'mention' ); ?>"><?php _e( 'Mention:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'mention' ); ?>" name="<?php echo $this->get_field_name( 'mention' ); ?>" type="text" value="<?php echo esc_attr( $mention ); ?>" />
		</p>
		<?php
	}
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['mention'] = ( ! empty( $new_instance['mention'] ) ) ? strip_tags( $new_instance['mention'] ) : '';
	return $instance;
	}
	
	}