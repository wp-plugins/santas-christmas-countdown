<?php


/*
Plugin Name: Christmas Countdown Widget
Plugin URI: http://christmaswebmaster.com/santa-claus-christmas-countdown-wordpress-plugin
Description: Displays a cute Christmas countdown in your sidebar.
Author: Monica Mays
Version: 1.0
Author URI: http://christmaswebmaster.com/

Christmas Countdown Widget is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or 
any later version.

Christmas Countdown Widget is distributed in the hope that it will be useful, 
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Christmas Countdown Widget. If not, see <http://www.gnu.org/licenses/>.
*/
 
 
class xmascount extends WP_Widget
{
  function xmascount()
  {
    $widget_ops = array('classname' => 'xmascount', 'description' => 'Displays a cute Christmas countdown' );
    $this->WP_Widget('xmascount', 'Christmas Countdown', $widget_ops);
  }
 
  function form($instance)
  {
    $instance = wp_parse_args( (array) $instance, array( 'title' => '' ) );
    $title = $instance['title'];
?>
  <p><label for="<?php echo $this->get_field_id('title'); ?>">Title: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" /></label></p>
<?php
  }
 
  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
    $instance['title'] = $new_instance['title'];
    return $instance;
  }
 
  function widget($args, $instance)
  {
    extract($args, EXTR_SKIP);
 
    echo $before_widget;
    $title = empty($instance['title']) ? ' ' : apply_filters('widget_title', $instance['title']);
 
    if (!empty($title))
      echo $before_title . $title . $after_title;;
 
    // WIDGET CODE GOES HERE
    echo "<iframe frameborder=0 marginheight=0 marginwidth=0 scrolling=no height=191 width=100% src=http://christmaswebmaster.com/plugin-files/SantasCountdown/santas-count.html></iframe>";
 
    echo $after_widget;
  }
 
}
add_action( 'widgets_init', create_function('', 'return register_widget("xmascount");') );?>