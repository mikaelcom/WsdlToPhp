<?php
/**
 * Class file for XiHousingTypePriceDataCategories
 * @date 08/07/2012
 */
/**
 * Class XiHousingTypePriceDataCategories
 * @date 08/07/2012
 */
class XiHousingTypePriceDataCategories extends XiHousingWsdlClass
{
	/**
	 * Constant for value 'ExistingHomeMedianPrice'
	 * @return string 'ExistingHomeMedianPrice'
	 */
	const VALUE_EXISTINGHOMEMEDIANPRICE = 'ExistingHomeMedianPrice';
	/**
	 * Constant for value 'ExistingHomeMeanPrice'
	 * @return string 'ExistingHomeMeanPrice'
	 */
	const VALUE_EXISTINGHOMEMEANPRICE = 'ExistingHomeMeanPrice';
	/**
	 * Constant for value 'ExistingCondoMedianPrice'
	 * @return string 'ExistingCondoMedianPrice'
	 */
	const VALUE_EXISTINGCONDOMEDIANPRICE = 'ExistingCondoMedianPrice';
	/**
	 * Constant for value 'ExistingCondoMeanPrice'
	 * @return string 'ExistingCondoMeanPrice'
	 */
	const VALUE_EXISTINGCONDOMEANPRICE = 'ExistingCondoMeanPrice';
	/**
	 * Constant for value 'ExistingSingleFamilyMedianPrice'
	 * @return string 'ExistingSingleFamilyMedianPrice'
	 */
	const VALUE_EXISTINGSINGLEFAMILYMEDIANPRICE = 'ExistingSingleFamilyMedianPrice';
	/**
	 * Constant for value 'ExistingSingleFamilyMeanPrice'
	 * @return string 'ExistingSingleFamilyMeanPrice'
	 */
	const VALUE_EXISTINGSINGLEFAMILYMEANPRICE = 'ExistingSingleFamilyMeanPrice';
	/**
	 * Constant for value 'StarterHomeMedianPrice'
	 * @return string 'StarterHomeMedianPrice'
	 */
	const VALUE_STARTERHOMEMEDIANPRICE = 'StarterHomeMedianPrice';
	/**
	 * Constructor
	 * @return XiHousingTypePriceDataCategories
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
		return in_array($_value,array(self::VALUE_EXISTINGHOMEMEDIANPRICE,self::VALUE_EXISTINGHOMEMEANPRICE,self::VALUE_EXISTINGCONDOMEDIANPRICE,self::VALUE_EXISTINGCONDOMEANPRICE,self::VALUE_EXISTINGSINGLEFAMILYMEDIANPRICE,self::VALUE_EXISTINGSINGLEFAMILYMEANPRICE,self::VALUE_STARTERHOMEMEDIANPRICE));
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