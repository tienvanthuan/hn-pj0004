<?php
/* ===============================================================================
  カスタム投稿設定ファイル
=============================================================================== */

/* 1.カスタム投稿の利用
	TRUE => 利用する　FASLE => 利用しない
------------------------------------------------------------------------------- */
define( "CUSTOM_POST_USE", true );


/* 2.カスタム投稿設定
------------------------------------------------------------------------------- */
if ( CUSTOM_POST_USE ) {
	add_action( 'init', 'addPosts' );

	function addPosts() {
		$add_post_type = array(
			array(
				'post_type' => 'products',
				'label'     => 'Products',
				'args'      => array( 'supports' => array( 'title', 'revisions' ) ),
				'taxonomies' => array(
					array( 'taxonomy' => 'products_tax', 'label' => 'Product Category' )
				),
			),

			//////

			array(
				'post_type' => 'news',
				'label'     => 'News',
				'args'      => array( 'supports' => array( 'title', 'revisions', 'thumbnail' ) ),
			),

			//////

			array(
				'post_type' => 'projects',
				'label'     => 'Projects',
				'args'      => array( 'supports' => array( 'title', 'revisions', 'thumbnail' ) ),
			),
		);

		foreach ( $add_post_type as $data ) {
			$args = array(
				'label'           => $data["label"],
				'menu_icon'       => 'dashicons-admin-post',
				'menu_position'   => 5,
				'has_archive'     => true,
				'description'     => $data["label"],
				'public'          => true,
				'show_ui'         => true,
				'show_in_menu'    => true,
				'capability_type' => 'post',
				'hierarchical'    => true,
				'rewrite'         => array( 'slug' => $data["post_type"], 'with_front' => true ),
				'query_var'       => true,
				'supports'        => array( 'title', 'editor' ),
			);

			$args = array_merge( $args, $data['args'] );

			$args['labels'] = array(
				'name'               => $data["label"],
				'singular_name'      => $data["label"],
				'menu_name'          => $data["label"],
				'add_new'            => 'Add new',
				'add_new_item'       => $data["label"] . 'Add new',
				'edit'               => 'Edit',
				'edit_item'          => $data["label"] . ' edit item',
				'new_item'           => 'New ' . $data["label"],
				'view'               => $data["label"] . ' view',
				'view_item'          => $data["label"] . ' view',
				'search_items'       => $data["label"] . ' search item',
				'all_items'          => $data["label"] . ' all',
				'not_found'          => $data["label"] . ' not found',
				'not_found_in_trash' => 'Trash is empty',
				'parent'             => 'Parent' . $data["label"],
			);

			register_post_type( $data["post_type"], $args );

			if ( ! empty( $data['taxonomies'] ) && is_array( $data['taxonomies'] ) ) {
				foreach ( $data['taxonomies'] as $tax ) {
					if ( is_string( $tax ) ) {
						register_taxonomy_for_object_type( $tax, $data["post_type"] );
						continue;
					}

					$tax_args = array(
						'public'            => true,
						'show_ui'           => true,
						'show_in_menu'      => true,
						'show_admin_column' => true,
						'rewrite'           => true,
						'hierarchical'      => true,
						//'meta_box_cb'       => 'post_categories_meta_box',
						//'meta_box_cb'       => 'post_tags_meta_box',
						//'update_count_callback' => '_update_generic_term_count',
					);

					if ( isset( $tax['args'] ) ) {
						$tax_args = array_merge( $tax_args, $tax['args'] );
					}

					if ( ! empty( $tax['label'] ) ) {
						$tax_args['label'] = $tax['label'];
					} elseif ( empty( $tax_args['label'] ) ) {
						$tax_args['label'] = ( $tax_args['hierarchical'] ) ? 'Category' : 'tag';
					}

					$tax_args['labels'] = array(
						'name'          => $tax_args['label'],
						'singular_name' => $tax_args['label'],
						'search_items'  => $tax_args['label'] . ' search items',
						'popular_items' => 'Popular items ' . $tax_args['label'],
						'all_items'     => 'All items ' . $tax_args['label'],
						'parent_item'   => 'Parent item' . $tax_args['label'],
						'edit_item'     => $tax_args['label'] . ' edit item',
						'update_item'   => 'Update item',
						'add_new_item'  => 'Add new ' . $tax_args['label'],
						'new_item_name' => 'New ' . $tax_args['label'],
					);

					register_taxonomy( $tax['taxonomy'], $data["post_type"], $tax_args );
				}
			}
		}
	}
}
