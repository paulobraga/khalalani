<?php
App::uses('Level', 'Model');

/**
 * Level Test Case
 *
 */
class LevelTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.level',
		'app.education_detail',
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
		$this->Level = ClassRegistry::init('Level');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Level);

		parent::tearDown();
	}

}
