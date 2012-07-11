<?php
/**
 * Class file for GGAdwordsTypeNewEntityCreationErrorReason
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeNewEntityCreationErrorReason
 * @date 03/07/2012
 */
class GGAdwordsTypeNewEntityCreationErrorReason extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'CANNOT_SET_ID_FOR_ADD'
	 * Meta informations :
	 * 	- documentation : Do not set the id field while creating new entities.
	 * @return string 'CANNOT_SET_ID_FOR_ADD'
	 */
	const VALUE_CANNOT_SET_ID_FOR_ADD = 'CANNOT_SET_ID_FOR_ADD';
	/**
	 * Constructor
	 * @return GGAdwordsTypeNewEntityCreationErrorReason
	 */
	public function __construct()
	{
		parent::__construct(array());
	}
	/**
	 * Return true if value is allowed
	 * @param string value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(self::VALUE_CANNOT_SET_ID_FOR_ADD));
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>