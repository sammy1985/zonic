<?php

function zonic_author_info_box( $content ) {
  
    global $post;
    if ( is_single() && isset( $post->post_author ) ) {
        $display_name = get_the_author_meta( 'display_name', $post->post_author );
        if ( empty( $display_name ) )
            $display_name = get_the_author_meta( 'nickname', $post->post_author );
            $user_description = get_the_author_meta( 'user_description', $post->post_author );
            $user_website = get_the_author_meta('url', $post->post_author);
            $user_posts = get_author_posts_url( get_the_author_meta( 'ID' , $post->post_author));
       
        if ( ! empty( $display_name ) )
            $author_details = '<p class="author_name"><span class="icon-user"></span> About ' . $display_name . '</p>';
        if ( ! empty( $user_description ) )  
            $author_details .= '<p class="author_details">' . get_avatar( get_the_author_meta('user_email') , 90 ) . nl2br( $user_description ). '</p>';
            $author_details .= '<p class="author_links"><a href="'. $user_posts .'">View all posts by ' . $display_name . '</a>';  
        if ( ! empty( $user_website ) ) {
            $author_details .= ' | <a href="' . $user_website .'" target="_blank" rel="nofollow">Website <span class="icon-arrow-right"></span></a></p>';
      
        } else { 
            $author_details .= '</p>';
        }
        $content = $content . '<footer class="author_bio_section" >' . $author_details . '</footer>';
    }
        return $content;
}
    
add_action( 'the_content', 'zonic_author_info_box' );
remove_filter('pre_user_description', 'wp_filter_kses');