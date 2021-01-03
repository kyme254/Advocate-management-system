<?php 

/**
 * SharedController Controller
 * @category  Controller / Model
 */
class SharedController extends BaseController{
	
	/**
     * users_email_value_exist Model Action
     * @return array
     */
	function users_email_value_exist($val){
		$db = $this->GetModel();
		$db->where("email", $val);
		$exist = $db->has("users");
		return $exist;
	}

	/**
     * users_username_value_exist Model Action
     * @return array
     */
	function users_username_value_exist($val){
		$db = $this->GetModel();
		$db->where("username", $val);
		$exist = $db->has("users");
		return $exist;
	}

	/**
     * getcount_users Model Action
     * @return Value
     */
	function getcount_users(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM users";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_newcase Model Action
     * @return Value
     */
	function getcount_newcase(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM newcase";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_appointment Model Action
     * @return Value
     */
	function getcount_appointment(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM appointment";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_casestudy Model Action
     * @return Value
     */
	function getcount_casestudy(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM casestudy";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_document Model Action
     * @return Value
     */
	function getcount_document(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM document";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_todolist Model Action
     * @return Value
     */
	function getcount_todolist(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM todolist";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_client Model Action
     * @return Value
     */
	function getcount_client(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM client";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_staff Model Action
     * @return Value
     */
	function getcount_staff(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM staff";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

}
