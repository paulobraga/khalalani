<?php
App::uses('Province', 'Model');

/**
 * Province Test Case
 *
 */
class ProvinceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.province',
		'app.branch',
		'app.city',
		'app.company',
		'app.complaint_category',
		'app.complaint',
		'app.consumer',
		'app.nationality',
		'app.companies_like',
		'app.complaints_like',
		'app.manager',
		'app.user',
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
		$this->Province = ClassRegistry::init('Province');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Province);

		parent::tearDown();
	}

}
