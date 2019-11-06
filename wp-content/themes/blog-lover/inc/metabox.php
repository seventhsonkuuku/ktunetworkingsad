<?php
/**
 * Metabox file
 *
 * @package Moral
 */

/**
 * Register meta box(es).
 */
function blog_lover_register_meta_boxes() {
    add_meta_box( 'blog-lover-select-sidebar', __( 'Sidebar position', 'blog-lover' ), 'blog_lover_display_metabox', array( 'post', 'page' ), 'side' );
}
add_action( 'add_meta_boxes', 'blog_lover_register_meta_boxes' );
 
/**
 * Meta box display callback.
 *
 * @param WP_Post $post Current post object.
 */
function blog_lover_display_metabox( $post ) {
    // Display code/markup goes here. Don't forget to include nonces!

    // Add a nonce field so we can check for it later.
    wp_nonce_field( 'blog_lover_select_sidebar_save_meta_box', 'blog_lover_select_sidebar_meta_box_nonce' );

    $blog_lover_sidebar_meta = get_post_meta( $post->ID, 'blog-lover-select-sidebar', true );
	$choices = array( 
			'left'  => esc_html__( 'Left', 'blog-lover' ), 
			'right' => esc_html__( 'Right', 'blog-lover' ), 
			'no'    => esc_html__( 'No Sidebar', 'blog-lover' ), 
		);

		foreach ( $choices as $value => $name ) : ?>
	    	<p>
	    		<label>
					<input value="<?php echo esc_attr( $value ); ?>" <?php checked( $blog_lover_sidebar_meta, $value, true ); ?> name="blog-lover-select-sidebar" type="radio" />
					<?php echo esc_html( $name ); ?>
	    		</label>
			</p>	
		<?php endforeach; 

}
 
/**
 * Save meta box content.
 *
 * @param int $post_id Post ID
 */
function blog_lover_save_meta_box( $post_id ) {
    // Save logic goes here. Don't forget to include nonce checks!

    /*
     * We need to verify this came from our screen and with proper authorization,
     * because the save_post action can be triggered at other times.
     */

    // Check if our nonce is set.
    if ( ! isset( $_POST['blog-lover-select-sidebar'] ) ) {
        return;
    }

    // Verify that the nonce is valid.
    if ( ! wp_verify_nonce( sanitize_key( $_POST['blog_lover_select_sidebar_meta_box_nonce'] ), 'blog_lover_select_sidebar_save_meta_box' ) ) {
        return;
    }

    // If this is an autosave, our form has not been submitted, so we don't want to do anything.
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    // Check the user's permissions.
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    /* OK, it's safe for us to save the data now. */
    
    // Make sure that it is set.
    if ( isset( $_POST['blog-lover-select-sidebar'] ) ) {
        // Sanitize user input.
        $blog_lover_sidebar_meta = sanitize_text_field( wp_unslash( $_POST['blog-lover-select-sidebar'] ) );
        // Update the meta field in the database.
        update_post_meta( $post_id, 'blog-lover-select-sidebar', $blog_lover_sidebar_meta );
    }
}
add_action( 'save_post', 'blog_lover_save_meta_box' );