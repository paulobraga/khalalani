<?php
App::uses('CompaniesLike', 'Model');

/**
 * CompaniesLike Test Case
 *
 */
class CompaniesLikeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.companies_like',
		'app.company',
		'app.branch',
		'app.province',
		'app.city',
		'app.complaint_category',
		'app.complaint',
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
		$this->CompaniesLike = ClassRegistry::init('CompaniesLike');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CompaniesLike);

		parent::tearDown();
	}

}
