<?php
/**
 * Class file for PayPalTypeFMFPendingTransactionActionType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeFMFPendingTransactionActionType
 * @date 14/07/2012
 */
class PayPalTypeFMFPendingTransactionActionType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Accept'
	 * @return string 'Accept'
	 */
	const VALUE_ACCEPT = 'Accept';
	/**
	 * Constant for value 'Deny'
	 * @return string 'Deny'
	 */
	const VALUE_DENY = 'Deny';
	/**
	 * Constructor
	 * @return PayPalTypeFMFPendingTransactionActionType
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
		return in_array($_value,array(self::VALUE_ACCEPT,self::VALUE_DENY));
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