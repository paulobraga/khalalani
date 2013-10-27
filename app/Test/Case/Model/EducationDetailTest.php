<?php
App::uses('EducationDetail', 'Model');

/**
 * EducationDetail Test Case
 *
 */
class EducationDetailTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.education_detail',
		'app.level',
		'app.course',
		'app.country',
		'app.consumer',
		'app.nationality',
		'app.user',
		'app.group',
		'app.contact_detail',
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
		'app.personal_detail',
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
		$this->EducationDetail = ClassRegistry::init('EducationDetail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EducationDetail);

		parent::tearDown();
	}

}
