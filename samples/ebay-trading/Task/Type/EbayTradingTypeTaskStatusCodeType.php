<?php
/**
 * Class file for EbayTradingTypeTaskStatusCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeTaskStatusCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeTaskStatusCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Pending'
	 * Meta informations :
	 * 	- documentation : (out) The category changes have not started.
	 * @return string 'Pending'
	 */
	const VALUE_PENDING = 'Pending';
	/**
	 * Constant for value 'InProgress'
	 * Meta informations :
	 * 	- documentation : (out) The category changes are in progress.
	 * @return string 'InProgress'
	 */
	const VALUE_INPROGRESS = 'InProgress';
	/**
	 * Constant for value 'Complete'
	 * Meta informations :
	 * 	- documentation : (out) The category changes completed successfully.
	 * @return string 'Complete'
	 */
	const VALUE_COMPLETE = 'Complete';
	/**
	 * Constant for value 'Failed'
	 * Meta informations :
	 * 	- documentation : (out) The category changes failed.
	 * @return string 'Failed'
	 */
	const VALUE_FAILED = 'Failed';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeTaskStatusCodeType
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
		return in_array($_value,array(self::VALUE_PENDING,self::VALUE_INPROGRESS,self::VALUE_COMPLETE,self::VALUE_FAILED,self::VALUE_CUSTOMCODE));
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