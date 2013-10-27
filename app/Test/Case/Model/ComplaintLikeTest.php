<?php
App::uses('ComplaintLike', 'Model');

/**
 * ComplaintLike Test Case
 *
 */
class ComplaintLikeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.complaint_like',
		'app.complaint',
		'app.company',
		'app.branch',
		'app.province',
		'app.country',
		'app.consumer',
		'app.company_like',
		'app.contact_detail',
		'app.city',
		'app.user',
		'app.group',
		'app.manager',
		'app.operator',
		'app.personal_detail',
		'app.nationality',
		'app.complaints_comment',
		'app.education_detail',
		'app.level',
		'app.course',
		'app.complaint_category',
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
		$this->ComplaintLike = ClassRegistry::init('ComplaintLike');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ComplaintLike);

		parent::tearDown();
	}

}
