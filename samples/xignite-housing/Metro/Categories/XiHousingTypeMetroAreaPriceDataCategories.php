<?php
/**
 * Class file for XiHousingTypeMetroAreaPriceDataCategories
 * @date 08/07/2012
 */
/**
 * Class XiHousingTypeMetroAreaPriceDataCategories
 * @date 08/07/2012
 */
class XiHousingTypeMetroAreaPriceDataCategories extends XiHousingWsdlClass
{
	/**
	 * Constant for value 'ExistingCondoMedianPrice'
	 * @return string 'ExistingCondoMedianPrice'
	 */
	const VALUE_EXISTINGCONDOMEDIANPRICE = 'ExistingCondoMedianPrice';
	/**
	 * Constant for value 'ExistingSingleFamilyMedianPrice'
	 * @return string 'ExistingSingleFamilyMedianPrice'
	 */
	const VALUE_EXISTINGSINGLEFAMILYMEDIANPRICE = 'ExistingSingleFamilyMedianPrice';
	/**
	 * Constructor
	 * @return XiHousingTypeMetroAreaPriceDataCategories
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
		return in_array($_value,array(self::VALUE_EXISTINGCONDOMEDIANPRICE,self::VALUE_EXISTINGSINGLEFAMILYMEDIANPRICE));
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