<?php
App::uses('Complaint', 'Model');

/**
 * Complaint Test Case
 *
 */
class ComplaintTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.complaint',
		'app.company',
		'app.branch',
		'app.province',
		'app.city',
		'app.complaint_category',
		'app.manager',
		'app.operator',
		'app.category',
		'app.companies_category',
		'app.consumer'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Complaint = ClassRegistry::init('Complaint');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Complaint);

		parent::tearDown();
	}

}
