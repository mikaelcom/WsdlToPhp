<?php
/**
 * Class file for EbayTradingTypeOrderRoleCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeOrderRoleCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeOrderRoleCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Buyer'
	 * @return string 'Buyer'
	 */
	const VALUE_BUYER = 'Buyer';
	/**
	 * Constant for value 'Seller'
	 * @return string 'Seller'
	 */
	const VALUE_SELLER = 'Seller';
	/**
	 * Constant for value 'CustomCode'
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeOrderRoleCodeType
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
		return in_array($_value,array(self::VALUE_BUYER,self::VALUE_SELLER,self::VALUE_CUSTOMCODE));
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