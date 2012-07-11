<?php
/**
 * Class file for EbayTradingTypeInvocationStatusType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeInvocationStatusType
 * @date 04/07/2012
 */
class EbayTradingTypeInvocationStatusType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'InProgress'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'InProgress'
	 */
	const VALUE_INPROGRESS = 'InProgress';
	/**
	 * Constant for value 'Success'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'Success'
	 */
	const VALUE_SUCCESS = 'Success';
	/**
	 * Constant for value 'Failure'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'Failure'
	 */
	const VALUE_FAILURE = 'Failure';
	/**
	 * Constant for value 'CustomCode'
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeInvocationStatusType
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
		return in_array($_value,array(self::VALUE_INPROGRESS,self::VALUE_SUCCESS,self::VALUE_FAILURE,self::VALUE_CUSTOMCODE));
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