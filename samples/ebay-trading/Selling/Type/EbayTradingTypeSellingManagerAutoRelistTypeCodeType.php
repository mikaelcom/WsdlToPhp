<?php
/**
 * Class file for EbayTradingTypeSellingManagerAutoRelistTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellingManagerAutoRelistTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeSellingManagerAutoRelistTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'RelistOnceIfNotSold'
	 * Meta informations :
	 * 	- documentation : If the item is unsold, relist the item once.
	 * @return string 'RelistOnceIfNotSold'
	 */
	const VALUE_RELISTONCEIFNOTSOLD = 'RelistOnceIfNotSold';
	/**
	 * Constant for value 'RelistContinuouslyUntilSold'
	 * Meta informations :
	 * 	- documentation : Relist the item continuously, until it is sold.
	 * @return string 'RelistContinuouslyUntilSold'
	 */
	const VALUE_RELISTCONTINUOUSLYUNTILSOLD = 'RelistContinuouslyUntilSold';
	/**
	 * Constant for value 'RelistContinuously'
	 * Meta informations :
	 * 	- documentation : Relist the item continuously.
	 * @return string 'RelistContinuously'
	 */
	const VALUE_RELISTCONTINUOUSLY = 'RelistContinuously';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeSellingManagerAutoRelistTypeCodeType
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
		return in_array($_value,array(self::VALUE_RELISTONCEIFNOTSOLD,self::VALUE_RELISTCONTINUOUSLYUNTILSOLD,self::VALUE_RELISTCONTINUOUSLY,self::VALUE_CUSTOMCODE));
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