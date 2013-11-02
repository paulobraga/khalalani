<?php
App::uses('CompanyLike', 'Model');

/**
 * CompanyLike Test Case
 *
 */
class CompanyLikeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.company_like',
		'app.company',
		'app.country',
		'app.consumer',
		'app.user',
		'app.group',
		'app.contact_detail',
		'app.province',
		'app.branch',
		'app.city',
		'app.personal_detail',
		'app.marital_status',
		'app.nationality',
		'app.manager',
		'app.operator',
		'app.education_detail',
		'app.level',
		'app.course',
		'app.complaint_comment',
		'app.complaint',
		'app.complaint_like',
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
		$this->CompanyLike = ClassRegistry::init('CompanyLike');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CompanyLike);

		parent::tearDown();
	}

}
