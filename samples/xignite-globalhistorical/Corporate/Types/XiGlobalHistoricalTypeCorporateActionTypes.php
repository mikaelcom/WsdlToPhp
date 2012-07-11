<?php
/**
 * Class file for XiGlobalHistoricalTypeCorporateActionTypes
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeCorporateActionTypes
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeCorporateActionTypes extends XiGlobalHistoricalWsdlClass
{
	/**
	 * Constant for value 'None'
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'AddNewIssue'
	 * @return string 'AddNewIssue'
	 */
	const VALUE_ADDNEWISSUE = 'AddNewIssue';
	/**
	 * Constant for value 'DeleteExistingIssue'
	 * @return string 'DeleteExistingIssue'
	 */
	const VALUE_DELETEEXISTINGISSUE = 'DeleteExistingIssue';
	/**
	 * Constant for value 'ChangeExistingIssue'
	 * @return string 'ChangeExistingIssue'
	 */
	const VALUE_CHANGEEXISTINGISSUE = 'ChangeExistingIssue';
	/**
	 * Constant for value 'DefaultValue'
	 * @return string 'DefaultValue'
	 */
	const VALUE_DEFAULTVALUE = 'DefaultValue';
	/**
	 * Constructor
	 * @return XiGlobalHistoricalTypeCorporateActionTypes
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
		return in_array($_value,array(self::VALUE_NONE,self::VALUE_ADDNEWISSUE,self::VALUE_DELETEEXISTINGISSUE,self::VALUE_CHANGEEXISTINGISSUE,self::VALUE_DEFAULTVALUE));
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