<?php
// register_sidebars();

register_sidebar(array(
  'name' => __( 'Left Menu Sidebar' ),
  'id' => 'left-sidebar',
  'description' => __( 'Widgets in this area will be shown on the left-hand side of the page.' ),
  'before_widget' => '<div>',
  'after_widget'  => '</div>',  
  'before_title' => '<h3>',
  'after_title' => '</h3>'
));
 
register_sidebar(array(
  'name' => __( 'Right Front Sidebar' ),
  'id' => 'right-sidebar',
  'description' => __( 'Widgets in this area will be shown on the right-hand side of the front page.' ),
  'before_widget' => '<div>',
  'after_widget'  => '</div>',  
  'before_title' => '<h3>',
  'after_title' => '</h3>'
));

register_sidebar(array(
  'name' => __( 'Right Front Sidebar Highlights' ),
  'id' => 'right-sidebar-highlights',
  'description' => __( 'Widgets in this area will be shown on the right-hand side of the front page, highlighted.' ),
  'before_widget' => '<div class="side-highlight">',
  'after_widget'  => '</div>',  
  'before_title' => '<h3>',
  'after_title' => '</h3>'
));
?>
