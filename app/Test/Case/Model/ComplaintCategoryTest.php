<?php
App::uses('ComplaintCategory', 'Model');

/**
 * ComplaintCategory Test Case
 *
 */
class ComplaintCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.complaint_category',
		'app.company',
		'app.branch',
		'app.province',
		'app.city',
		'app.complaint',
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
		$this->ComplaintCategory = ClassRegistry::init('ComplaintCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ComplaintCategory);

		parent::tearDown();
	}

}
