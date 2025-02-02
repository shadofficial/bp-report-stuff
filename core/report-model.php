<?php
namespace bp_report_stuff;

/**
 * Class report-model handles data, permission checks, and other I/O for reports
 *
 * @author lordmatt
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
 */
class report_model {
	
	# method params TBD
	public function new_report($data){
		
	}
	
	public function add_comment_to_report($report_id,$comment,$user,$action){
		
	}
	
	public function get_available_actions($report_id){
		$temp_list = array('pending','warned','closed-not-offence','account-closed','close-other');
		return $temp_list;
	}
	
	public function get_comments($report_id){
		
	}
	
	public function get_raw_report($report_id){
		
	}
	
	public function get_report_and_comments($report_id){
		
	}
	
	public function get_reports_by_user($user){
		if(!$this->user_can_view_users_reports($this->get_current_user_id(),$user)){
			return FALSE;
		}
		// return list of user's reports devided into open and closed
	}
	
	// helpers
	protected function get_current_user_id(){
		
	}
	
	
	
	// permissions
	
	public function user_can_($action, $user=NULL, $report_id=NULL){
		if($user===NULL){
			$user = $this->get_current_user_id();
		}
		$method_name = "user_can_{$action}";
		if(  method_exists( $this, $method_name )){
			if($report_id!=NULL){
				call_user_method($method_name, $this, $user, $report_id);
			}else{
				call_user_method($method_name, $this, $user);
			}
		}
	}
	
	public function user_can_view_report($user, $report_id){
		//
	}	
	public function user_can_view_users_reports($user,$other_user){
		//
	}		
	public function user_can_edit_report($user, $report_id){
		//
	}	
	
	public function user_can_report($user){
		
	}
	
}
