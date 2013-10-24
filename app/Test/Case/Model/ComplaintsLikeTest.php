<?php
App::uses('ComplaintsLike', 'Model');

/**
 * ComplaintsLike Test Case
 *
 */
class ComplaintsLikeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.complaints_like',
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
		$this->ComplaintsLike = ClassRegistry::init('ComplaintsLike');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ComplaintsLike);

		parent::tearDown();
	}

}
