<?php
/*
Plugin Name: Make A Reddit 
Version: 1.0
Description: Adds Reddit button to your posts so that you can easily share it on Reddit.com.
Author: Abhinandan Bharti
Author URI: http://www.techbusy.org/
Plugin URI: http://www.techbusy.org/blog/make-a-reddit-wordpress-plugin-released/189/
*/
/*
Copyright 2010 Abhinandan Bharti

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function share_link()
{
global $post;
// get the URL to the post
$link=get_permalink($post->ID);
// get the post title
$title=$post->post_title;
//create the links
$link_gen=<<<TTT
<script type="text/javascript">
  reddit_url = "$link";
  reddit_title = "$title";
  reddit_bgcolor = "FFF";
  reddit_bordercolor = "FFF";
</script>
<script type="text/javascript" src="http://www.reddit.com/button.js?t=3"></script>
TTT;
return $link_gen;
}
?>