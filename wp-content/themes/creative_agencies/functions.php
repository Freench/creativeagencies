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