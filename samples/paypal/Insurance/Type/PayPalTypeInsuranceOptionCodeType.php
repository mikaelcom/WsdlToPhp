<?php
/**
 * Class file for PayPalTypeInsuranceOptionCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeInsuranceOptionCodeType
 * @date 14/07/2012
 */
class PayPalTypeInsuranceOptionCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Optional'
	 * Meta informations :
	 * 	- documentation : Insurance optional.
	 * @return string 'Optional'
	 */
	const VALUE_OPTIONAL = 'Optional';
	/**
	 * Constant for value 'Required'
	 * Meta informations :
	 * 	- documentation : Insurance required.
	 * @return string 'Required'
	 */
	const VALUE_REQUIRED = 'Required';
	/**
	 * Constant for value 'NotOffered'
	 * Meta informations :
	 * 	- documentation : Insurance not offered.
	 * @return string 'NotOffered'
	 */
	const VALUE_NOTOFFERED = 'NotOffered';
	/**
	 * Constant for value 'IncludedInShippingHandling'
	 * Meta informations :
	 * 	- documentation : Insurance included in Shipping and Handling costs.
	 * @return string 'IncludedInShippingHandling'
	 */
	const VALUE_INCLUDEDINSHIPPINGHANDLING = 'IncludedInShippingHandling';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return PayPalTypeInsuranceOptionCodeType
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
		return in_array($_value,array(self::VALUE_OPTIONAL,self::VALUE_REQUIRED,self::VALUE_NOTOFFERED,self::VALUE_INCLUDEDINSHIPPINGHANDLING,self::VALUE_CUSTOMCODE));
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