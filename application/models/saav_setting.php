<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Settings model.
*
* Handles settings insertions and retrievals.
*
* @package		SAAV
* @subpackage	Models
* @author		Mario Cuba <mario@mariocuba.net>
*/ 
class Saav_setting extends EXT_Model {

	// the table used in the model
	public $_table = 'setting';

	/**
	* The class constructor.
	*
	* @access	public
	*/
	public function __construct() {
		parent::__construct();
	}
	
	/**
	* Fetches a setting value.
	*
	* @access	public
	*/ 
	public function getSetting($name) {
		$this->cdb->select('value')
		->where('name', $name);

		return $this->cdb->get($this->_table)->row()->value;
	}

	/**
	* Fetches a group of settings.
	*
	* @access	public
	*/ 
	public function getSettings($data) {
		$this->cdb->select('name, value')
		->where_in('name', $data);

		$sql = $this->cdb->get($this->_table)->result();
		$settings = new StdClass;

		foreach($sql as $s) {
			$name = $s->name;
			$settings->$name = $s->value;
		}

		return $settings;
	}
}

/* End of file saav_settings.php */
/* Location: ./application/models/saav_settings.php */