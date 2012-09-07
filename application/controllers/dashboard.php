<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Dashboard controller.
*
* Shows the main menu for the app.
*
* @package		SAAV
* @subpackage	Controllers
* @author		Mario Cuba <mario@mariocuba.net>
*/
class Dashboard extends EXT_Controller {
	
	/**
	* The class constructor.
	*
	* @access	public
	*/
	public function __construct() {
		parent::__construct();
		
		// set the page title
		$this->data->title = 'Escritorio';
	}
	
 	/**
 	* Shows the dashboard.
 	*
 	* @access	public
 	*/
	public function index() {
		$this->load->presenter('dashboard');
	}
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */