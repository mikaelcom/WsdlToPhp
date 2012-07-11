<?php
/**
 * Class file for EbayTradingTypeBestOfferActionCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeBestOfferActionCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeBestOfferActionCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Accept'
	 * Meta informations :
	 * 	- documentation : (in) To accept something.
	 * @return string 'Accept'
	 */
	const VALUE_ACCEPT = 'Accept';
	/**
	 * Constant for value 'Decline'
	 * Meta informations :
	 * 	- documentation : (in) To decline something.
	 * @return string 'Decline'
	 */
	const VALUE_DECLINE = 'Decline';
	/**
	 * Constant for value 'Counter'
	 * Meta informations :
	 * 	- documentation : (in) To counter offer.
	 * @return string 'Counter'
	 */
	const VALUE_COUNTER = 'Counter';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeBestOfferActionCodeType
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
		return in_array($_value,array(self::VALUE_ACCEPT,self::VALUE_DECLINE,self::VALUE_COUNTER,self::VALUE_CUSTOMCODE));
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