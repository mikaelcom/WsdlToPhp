<?php
/**
 * Class file for EbayTradingTypeAdFormatLeadStatusCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAdFormatLeadStatusCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeAdFormatLeadStatusCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'New'
	 * Meta informations :
	 * 	- documentation : A new message from a prospective buyer that the seller has not yet responded to.
	 * @return string 'New'
	 */
	const VALUE_NEW = 'New';
	/**
	 * Constant for value 'Responded'
	 * Meta informations :
	 * 	- documentation : A message from a prospective buyer that the seller has responded to.
	 * @return string 'Responded'
	 */
	const VALUE_RESPONDED = 'Responded';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeAdFormatLeadStatusCodeType
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
		return in_array($_value,array(self::VALUE_NEW,self::VALUE_RESPONDED,self::VALUE_CUSTOMCODE));
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