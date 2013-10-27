<?php
App::uses('ContactDetail', 'Model');

/**
 * ContactDetail Test Case
 *
 */
class ContactDetailTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.contact_detail',
		'app.country',
		'app.consumer',
		'app.nationality',
		'app.user',
		'app.group',
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
		$this->ContactDetail = ClassRegistry::init('ContactDetail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ContactDetail);

		parent::tearDown();
	}

}
