<?php
/**
 * Class file for EbayTradingTypePerformanceStatusCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePerformanceStatusCodeType
 * @date 04/07/2012
 */
class EbayTradingTypePerformanceStatusCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'TopRated'
	 * Meta informations :
	 * 	- documentation : You are a Top-Rated seller.
	 * @return string 'TopRated'
	 */
	const VALUE_TOPRATED = 'TopRated';
	/**
	 * Constant for value 'AboveStandard'
	 * Meta informations :
	 * 	- documentation : Your seller performance rating is Above Standard.
	 * @return string 'AboveStandard'
	 */
	const VALUE_ABOVESTANDARD = 'AboveStandard';
	/**
	 * Constant for value 'Standard'
	 * Meta informations :
	 * 	- documentation : Your seller performance rating is Standard.
	 * @return string 'Standard'
	 */
	const VALUE_STANDARD = 'Standard';
	/**
	 * Constant for value 'BelowStandard'
	 * Meta informations :
	 * 	- documentation : Your seller performance rating is Below Standard.
	 * @return string 'BelowStandard'
	 */
	const VALUE_BELOWSTANDARD = 'BelowStandard';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypePerformanceStatusCodeType
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
		return in_array($_value,array(self::VALUE_TOPRATED,self::VALUE_ABOVESTANDARD,self::VALUE_STANDARD,self::VALUE_BELOWSTANDARD,self::VALUE_CUSTOMCODE));
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