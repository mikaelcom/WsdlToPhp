<?php
/**
 * Class file for EbayTradingTypeStoreFontSizeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeStoreFontSizeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeStoreFontSizeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'XXS'
	 * Meta informations :
	 * 	- documentation : Extra extra small.
	 * @return string 'XXS'
	 */
	const VALUE_XXS = 'XXS';
	/**
	 * Constant for value 'XS'
	 * Meta informations :
	 * 	- documentation : Extra small.
	 * @return string 'XS'
	 */
	const VALUE_XS = 'XS';
	/**
	 * Constant for value 'S'
	 * Meta informations :
	 * 	- documentation : Small.
	 * @return string 'S'
	 */
	const VALUE_S = 'S';
	/**
	 * Constant for value 'M'
	 * Meta informations :
	 * 	- documentation : Medium.
	 * @return string 'M'
	 */
	const VALUE_M = 'M';
	/**
	 * Constant for value 'L'
	 * Meta informations :
	 * 	- documentation : Large.
	 * @return string 'L'
	 */
	const VALUE_L = 'L';
	/**
	 * Constant for value 'XL'
	 * Meta informations :
	 * 	- documentation : Extra large.
	 * @return string 'XL'
	 */
	const VALUE_XL = 'XL';
	/**
	 * Constant for value 'XXL'
	 * Meta informations :
	 * 	- documentation : Extra extra large.
	 * @return string 'XXL'
	 */
	const VALUE_XXL = 'XXL';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeStoreFontSizeCodeType
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
		return in_array($_value,array(self::VALUE_XXS,self::VALUE_XS,self::VALUE_S,self::VALUE_M,self::VALUE_L,self::VALUE_XL,self::VALUE_XXL,self::VALUE_CUSTOMCODE));
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