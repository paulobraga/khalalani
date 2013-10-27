<?php
App::uses('ComplaintComment', 'Model');

/**
 * ComplaintComment Test Case
 *
 */
class ComplaintCommentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.complaint_comment',
		'app.user',
		'app.group',
		'app.consumer',
		'app.company_like',
		'app.complaint_like',
		'app.complaint',
		'app.company',
		'app.branch',
		'app.province',
		'app.country',
		'app.contact_detail',
		'app.city',
		'app.education_detail',
		'app.level',
		'app.course',
		'app.personal_detail',
		'app.nationality',
		'app.complaint_category',
		'app.manager',
		'app.operator',
		'app.category',
		'app.companies_category',
		'app.complaints_comment'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ComplaintComment = ClassRegistry::init('ComplaintComment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ComplaintComment);

		parent::tearDown();
	}

}
