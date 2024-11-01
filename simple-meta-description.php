<?php
/*
Plugin Name: Simple Meta Description
Plugin URI: http://www.twolittlefishes.co.uk/blog/2010/10/simple-meta-description-plugin-for-wordpress/
Description: Uses the excerpt to add a description meta tag
Version: 0.9
Author: Nick Bramwell
Author URI: http://www.twolittlefishes.co.uk
License: GPL2
*/
?>
<?php
/*  Copyright 2010  Nick Bramwell  (email : nick@twolittlefishes.co.uk)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
?>
<?php
function tlf_add_meta_description() {
	if (is_single()) {
		$description = strip_tags(get_the_excerpt());
		$description = preg_replace('/\s\s+/', ' ', $description);
		echo '<meta name="description" content="'.$description.'" />';
	}
}

add_action('wp_head','tlf_add_meta_description')
?>