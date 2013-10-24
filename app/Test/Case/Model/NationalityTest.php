<?php
App::uses('Nationality', 'Model');

/**
 * Nationality Test Case
 *
 */
class NationalityTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.nationality',
		'app.consumer',
		'app.companies_like',
		'app.company',
		'app.branch',
		'app.province',
		'app.city',
		'app.complaint_category',
		'app.complaint',
		'app.manager',
		'app.user',
		'app.operator',
		'app.category',
		'app.companies_category',
		'app.complaints_like'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Nationality = ClassRegistry::init('Nationality');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Nationality);

		parent::tearDown();
	}

}
