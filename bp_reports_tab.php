<?php

/**
 * Allow a user to review reports they have made from their profile UI.
 * 
 * 
 * This file is part of BP Report Stuff.
 * 
 * BP Report Stuff is free software: you can redistribute it and/or modify it under 
 * the terms of the GNU General Public License as published by the Free Software 
 * Foundation, either version 2 of the License, or (at your option) any later 
 * version.
 * 
 * BP Report Stuff is distributed in the hope that it will be useful, but WITHOUT ANY 
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR 
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License along with 
 * datastore. If not, see http://www.gnu.org/licenses/.
 * 
 */
public function moderator_nav() {
        if ( !is_user_logged_in() || bp_displayed_user_id() != get_current_user_id() ) {
                            return;
                        } 
  else {
                   bp_core_new_nav_item( array(
				          'name' => 'Reported',
				          'slug' => 'reportedbyme',
				          'screen_function' => '',// Add function which will show reported content by user
				          'position' => 70,
				         'default_subnav_slug' => 'content'
			) );
  
                        
                        $displayed_user_id = bp_displayed_user_id();
                        $user_domain = ( ! empty( $displayed_user_id ) ) ? bp_displayed_user_domain() : bp_loggedin_user_domain();

                        $reported_link = trailingslashit( $user_domain . 'reported' );
                        
                        // Add subnav items     
                        bp_core_new_subnav_item( array(
                            'name' => 'content',
                            'slug' => 'content',
                            'parent_url' => $reported_link,
                            'parent_slug' => 'content',
                            'screen_function' => '', // function to show content reported by user
                            'position' => 10,
                        ) );
                        
                        // Add subnav items
                         bp_core_new_subnav_item( array(
                                'name' => 'In process',
                                'slug' => 'in process',
                                'parent_url' => $reported_link,
                                'parent_slug' => 'content',
                                'screen_function' => '', // function which will handle the content which are in process to be reviewed
                                'position' => 20,
                            ) );
                        }
		}
