<?php
App::uses('Country', 'Model');

/**
 * Country Test Case
 *
 */
class CountryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.country',
		'app.consumer',
		'app.nationality',
		'app.user',
		'app.group',
		'app.contact_detail',
		'app.manager',
		'app.company',
		'app.branch',
		'app.province',
		'app.city',
		'app.personal_detail',
		'app.complaint_category',
		'app.complaint',
		'app.operator',
		'app.category',
		'app.companies_category',
		'app.complaints_comment',
		'app.companies_like',
		'app.complaints_like',
		'app.education_detail'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Country = ClassRegistry::init('Country');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Country);

		parent::tearDown();
	}

}
