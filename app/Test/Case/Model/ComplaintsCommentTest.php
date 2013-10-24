<?php
App::uses('ComplaintsComment', 'Model');

/**
 * ComplaintsComment Test Case
 *
 */
class ComplaintsCommentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.complaints_comment',
		'app.user',
		'app.complaint',
		'app.company',
		'app.branch',
		'app.province',
		'app.city',
		'app.complaint_category',
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
		$this->ComplaintsComment = ClassRegistry::init('ComplaintsComment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ComplaintsComment);

		parent::tearDown();
	}

}
