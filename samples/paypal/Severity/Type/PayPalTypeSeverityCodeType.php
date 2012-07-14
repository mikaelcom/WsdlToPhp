<?php
/**
 * Class file for PayPalTypeSeverityCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeSeverityCodeType
 * @date 14/07/2012
 */
class PayPalTypeSeverityCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Warning'
	 * Meta informations :
	 * 	- documentation : Warning or informational error.
	 * @return string 'Warning'
	 */
	const VALUE_WARNING = 'Warning';
	/**
	 * Constant for value 'Error'
	 * Meta informations :
	 * 	- documentation : Application-level error.
	 * @return string 'Error'
	 */
	const VALUE_ERROR = 'Error';
	/**
	 * Constant for value 'PartialSuccess'
	 * Meta informations :
	 * 	- documentation : Partial Success.
	 * @return string 'PartialSuccess'
	 */
	const VALUE_PARTIALSUCCESS = 'PartialSuccess';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return PayPalTypeSeverityCodeType
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
		return in_array($_value,array(self::VALUE_WARNING,self::VALUE_ERROR,self::VALUE_PARTIALSUCCESS,self::VALUE_CUSTOMCODE));
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