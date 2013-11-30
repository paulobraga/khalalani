<?php
App::uses('Message', 'Model');

/**
 * Message Test Case
 *
 */
class MessageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.message',
		'app.sender',
		'app.group',
		'app.user',
		'app.consumer',
		'app.company_like',
		'app.company',
		'app.country',
		'app.contact_detail',
		'app.province',
		'app.branch',
		'app.city',
		'app.personal_detail',
		'app.marital_status',
		'app.nationality',
		'app.education_detail',
		'app.level',
		'app.course',
		'app.complaint_category',
		'app.complaint',
		'app.complaint_comment',
		'app.complaint_like',
		'app.manager',
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
		$this->Message = ClassRegistry::init('Message');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Message);

		parent::tearDown();
	}

}
