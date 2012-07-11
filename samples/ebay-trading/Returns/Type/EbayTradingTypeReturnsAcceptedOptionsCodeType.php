<?php
/**
 * Class file for EbayTradingTypeReturnsAcceptedOptionsCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeReturnsAcceptedOptionsCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeReturnsAcceptedOptionsCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'ReturnsAccepted'
	 * Meta informations :
	 * 	- documentation : The seller accepts returns, subject to other details specified in the policy.
	 * @return string 'ReturnsAccepted'
	 */
	const VALUE_RETURNSACCEPTED = 'ReturnsAccepted';
	/**
	 * Constant for value 'ReturnsNotAccepted'
	 * Meta informations :
	 * 	- documentation : The seller does not accept returns.
	 * @return string 'ReturnsNotAccepted'
	 */
	const VALUE_RETURNSNOTACCEPTED = 'ReturnsNotAccepted';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeReturnsAcceptedOptionsCodeType
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
		return in_array($_value,array(self::VALUE_RETURNSACCEPTED,self::VALUE_RETURNSNOTACCEPTED,self::VALUE_CUSTOMCODE));
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