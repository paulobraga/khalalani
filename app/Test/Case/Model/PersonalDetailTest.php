<?php
App::uses('PersonalDetail', 'Model');

/**
 * PersonalDetail Test Case
 *
 */
class PersonalDetailTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.personal_detail',
		'app.nationality',
		'app.consumer',
		'app.user',
		'app.group',
		'app.contact_detail',
		'app.country',
		'app.education_detail',
		'app.level',
		'app.course',
		'app.province',
		'app.branch',
		'app.city',
		'app.company',
		'app.complaint_category',
		'app.complaint',
		'app.manager',
		'app.operator',
		'app.category',
		'app.companies_category',
		'app.complaints_comment',
		'app.companies_like',
		'app.complaints_like'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PersonalDetail = ClassRegistry::init('PersonalDetail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PersonalDetail);

		parent::tearDown();
	}

}
