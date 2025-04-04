<?php
class Bootstrap_NavWalker extends Walker_Nav_Menu {
    function start_lvl( &$output, $depth = 0, $args = null ) {
        $output .= '<ul class="dropdown-menu">';
    }

    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'nav-item';
        if ( $args->walker->has_children ) {
            $classes[] = 'dropdown';
        }

        $output .= '<li class="' . implode( ' ', $classes ) . '">';

        $atts = array();
        $atts['class'] = 'nav-link';
        if ( $args->walker->has_children ) {
            $atts['class'] .= ' dropdown-toggle';
            $atts['data-toggle'] = 'dropdown';
        }
        $atts['href'] = ! empty( $item->url ) ? $item->url : '#';

        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            $attributes .= ' ' . $attr . '="' . esc_attr( $value ) . '"';
        }

        $output .= '<a' . $attributes . '>';
        $output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $output .= '</a>';
    }
}
?>