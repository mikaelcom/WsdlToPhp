<?php
/**
 * Class file for PayPalTypeStatusChangeActionType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeStatusChangeActionType
 * @date 14/07/2012
 */
class PayPalTypeStatusChangeActionType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Cancel'
	 * @return string 'Cancel'
	 */
	const VALUE_CANCEL = 'Cancel';
	/**
	 * Constant for value 'Suspend'
	 * @return string 'Suspend'
	 */
	const VALUE_SUSPEND = 'Suspend';
	/**
	 * Constant for value 'Reactivate'
	 * @return string 'Reactivate'
	 */
	const VALUE_REACTIVATE = 'Reactivate';
	/**
	 * Constructor
	 * @return PayPalTypeStatusChangeActionType
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
		return in_array($_value,array(self::VALUE_CANCEL,self::VALUE_SUSPEND,self::VALUE_REACTIVATE));
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