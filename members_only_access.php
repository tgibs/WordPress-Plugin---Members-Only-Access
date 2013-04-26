<?php
/*
Plugin Name: Members Only Access
Plugin URI: https://github.com/michallachowski/WordPress-Plugin---Members-Only-Access
Description: Simple plugin that redirects visitors to login page, if they are not logged in. 
Version: 1.0
Author: Michał Lachowski
Author URI: http://michallachowski.pl
License:

  Copyright 2013 Michał Lachowski (github@michallachowski.pl)

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


function members_only_access() {
  global $wp;
  $current_url = add_query_arg( $wp->query_string, '', home_url($wp->request) );

  if ( !is_user_logged_in() ) {
          wp_redirect( wp_login_url($current_url) );
          exit;
  }
}

add_action('get_header', 'members_only_access');


?>
