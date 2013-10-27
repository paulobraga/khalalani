<?php
App::uses('User', 'Model');

/**
 * User Test Case
 *
 */
class UserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user',
		'app.group',
		'app.consumer',
		'app.nationality',
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
		'app.complaints_like',
		'app.contact_detail',
		'app.personal_detail',
		'app.complaints_comment'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->User = ClassRegistry::init('User');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->User);

		parent::tearDown();
	}

}
