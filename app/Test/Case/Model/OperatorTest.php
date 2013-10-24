<?php
App::uses('Operator', 'Model');

/**
 * Operator Test Case
 *
 */
class OperatorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.operator',
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
		'app.manager',
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
		$this->Operator = ClassRegistry::init('Operator');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Operator);

		parent::tearDown();
	}

}
