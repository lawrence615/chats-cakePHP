<?php
App::uses('CakeTime', 'Utility');
/**
 * Attendees Controller
 *
 * @property Attendee $Attendee
 * @property PaginatorComponent $Paginator
 */
class AttendeesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('RequestHandler');
 	private $attendees_array = array();
/**
 * index method
 *
 * @return void
 */
	
	public function index() {
		//$this->layout = null ;
		// $attendees = $this->Attendee->find('all', array('fields'=>array('HOUR(timestamp)')));

		// if ($this->request->is('ajax')) {
		//     echo "Bazinga!";
		// }

		$attendees = $this->Attendee->find('all', array('fields'=>array('HOUR(timestamp) AS h, COUNT(*)'),'group' => array('h')));

		$data = array();
		// $data=array();
		foreach($attendees as $att):
			$data['data'][] = $att[0]['COUNT(*)'];
			// $data['data'][] = $att[0]['h'];
		endforeach;

		//return json_encode($data, JSON_NUMERIC_CHECK);
		print json_encode($data, JSON_NUMERIC_CHECK);


	}

	// public function beforeFilter(){
	// 	if ($this->request->is('ajax')) {
	// 	    $this->RequestHandler->setContent('json', 'application/json');
	// 	}
	// }



}
