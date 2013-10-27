<?php
/**
 * EducationDetailFixture
 *
 */
class EducationDetailFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'level_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'course_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'country_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'level_id' => 1,
			'course_id' => 1,
			'country_id' => 1
		),
	);

}
