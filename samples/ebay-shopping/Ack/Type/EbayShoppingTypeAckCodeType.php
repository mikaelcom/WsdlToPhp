<?php
/**
 * Class file for EbayShoppingTypeAckCodeType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeAckCodeType
 * @date 05/07/2012
 */
class EbayShoppingTypeAckCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'Success'
	 * Meta informations :
	 * 	- documentation : (out) Request processing succeeded
	 * @return string 'Success'
	 */
	const VALUE_SUCCESS = 'Success';
	/**
	 * Constant for value 'Failure'
	 * Meta informations :
	 * 	- documentation : (out) Request processing failed
	 * @return string 'Failure'
	 */
	const VALUE_FAILURE = 'Failure';
	/**
	 * Constant for value 'Warning'
	 * Meta informations :
	 * 	- documentation : (out) Request processing completed with warning information being included in the response message
	 * @return string 'Warning'
	 */
	const VALUE_WARNING = 'Warning';
	/**
	 * Constant for value 'PartialFailure'
	 * Meta informations :
	 * 	- documentation : (out) Request processing completed with some failures. See the Errors data to determine which portions of the request failed.
	 * @return string 'PartialFailure'
	 */
	const VALUE_PARTIALFAILURE = 'PartialFailure';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayShoppingTypeAckCodeType
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
		return in_array($_value,array(self::VALUE_SUCCESS,self::VALUE_FAILURE,self::VALUE_WARNING,self::VALUE_PARTIALFAILURE,self::VALUE_CUSTOMCODE));
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