<?php
/*
Plugin Name: Treehouse Badges Widget
Plugin URI: http://teamtreehouse.com/psyne
Description: Grabs your badges from your treehouse profile
Author: Mark Flavin
Version: 1.2
Author URI: http://teamtreehouse.com/psyne
*/
 
 
class TreehouseBadgesWidget extends WP_Widget
{
  function TreehouseBadgesWidget()
  {
    $widget_ops = array('classname' => 'TreehouseBadgesWidget', 'description' => 'Pulls in your badges from Team Treehouse' );
    $this->WP_Widget('TreehouseBadgesWidget', 'Treehouse Badges', $widget_ops);
    $this->register_scripts_and_styles(); 
  }
 
  function form($instance)
  {
    $instance = wp_parse_args( (array) $instance, array( 'title' => '', 'treehouseId' => '' ) );
    $title = $instance['title'];
    $treehouseId = $instance['treehouseId'];
?>
  <p><label for="<?php echo $this->get_field_id('title'); ?>">Title: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" /></label></p>
  <p><label for="<?php echo $this->get_field_id('treehouseId'); ?>">Treehouse Id: <input class="widefat" id="<?php echo $this->get_field_id('treehouseId'); ?>" name="<?php echo $this->get_field_name('treehouseId'); ?>" type="text" value="<?php echo attribute_escape($treehouseId); ?>" /></label></p>
<?php
  }
 
  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
    $instance['title'] = $new_instance['title'];
    $instance['treehouseId'] = $new_instance['treehouseId'];
    return $instance;
  }
 
 private function register_scripts_and_styles(){
	 wp_enqueue_script("jquery");
	 wp_enqueue_script('treehouse', plugins_url('/team-treehouse-badges/js/treehouse.js'));
	 wp_enqueue_style('treehouse_style', plugins_url('/team-treehouse-badges/css/treehouse.css'));
 }
 
  function widget($args, $instance)
  {
    extract($args, EXTR_SKIP);
 
    echo $before_widget;
    $title = empty($instance['title']) ? ' ' : apply_filters('widget_title', $instance['title']);
    
    if (!empty($title))
      echo $before_title . $title . $after_title;
    
    $tid = $instance['treehouseId'];
    
    // WIDGET CODE GOES HERE
    echo "<div id='badges_holder' data-treehouse='$tid'><ul id='badges'></ul></div>";
 
    echo $after_widget;
  }
 
}
add_action( 'widgets_init', create_function('', 'return register_widget("TreehouseBadgesWidget");') );?>
