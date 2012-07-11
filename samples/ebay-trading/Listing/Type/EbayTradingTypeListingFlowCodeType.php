<?php
/**
 * Class file for EbayTradingTypeListingFlowCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeListingFlowCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeListingFlowCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'AddItem'
	 * Meta informations :
	 * 	- documentation : (in) AddItem (Sell Your Item) listing flow.
	 * @return string 'AddItem'
	 */
	const VALUE_ADDITEM = 'AddItem';
	/**
	 * Constant for value 'ReviseItem'
	 * Meta informations :
	 * 	- documentation : (in) ReviseItem (Revise Your Item) listing flow.
	 * @return string 'ReviseItem'
	 */
	const VALUE_REVISEITEM = 'ReviseItem';
	/**
	 * Constant for value 'RelistItem'
	 * Meta informations :
	 * 	- documentation : (in) RelistItem listing flow.
	 * @return string 'RelistItem'
	 */
	const VALUE_RELISTITEM = 'RelistItem';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeListingFlowCodeType
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
		return in_array($_value,array(self::VALUE_ADDITEM,self::VALUE_REVISEITEM,self::VALUE_RELISTITEM,self::VALUE_CUSTOMCODE));
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