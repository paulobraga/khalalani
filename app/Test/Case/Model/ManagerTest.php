<?php
App::uses('Manager', 'Model');

/**
 * Manager Test Case
 *
 */
class ManagerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.manager',
		'app.user',
		'app.company',
		'app.branch',
		'app.province',
		'app.city',
		'app.complaint_category',
		'app.complaint',
		'app.consumer',
		'app.nationality',
		'app.companies_like',
		'app.complaints_like',
		'app.operator',
		'app.category',
		'app.companies_category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Manager = ClassRegistry::init('Manager');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Manager);

		parent::tearDown();
	}

}
