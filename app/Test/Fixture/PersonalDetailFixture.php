<?php
/**
 * PersonalDetailFixture
 *
 */
class PersonalDetailFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'first_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'middle_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'last_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'gender' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4),
		'birthday' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'marital_status' => array('type' => 'integer', 'null' => true, 'default' => null),
		'nationality_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'country_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'province_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'city_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'first_name' => 'Lorem ipsum dolor sit amet',
			'middle_name' => 'Lorem ipsum dolor sit amet',
			'last_name' => 'Lorem ipsum dolor sit amet',
			'gender' => 1,
			'birthday' => 'Lorem ipsum dolor sit amet',
			'marital_status' => 1,
			'nationality_id' => 1,
			'country_id' => 1,
			'province_id' => 1,
			'city_id' => 1,
			'user_id' => 1
		),
	);

}
