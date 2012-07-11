<?php
/**
 * Class file for XiHousingTypeIndicatorDataCategories
 * @date 08/07/2012
 */
/**
 * Class XiHousingTypeIndicatorDataCategories
 * @date 08/07/2012
 */
class XiHousingTypeIndicatorDataCategories extends XiHousingWsdlClass
{
	/**
	 * Constant for value 'ExistingHomeInventory'
	 * @return string 'ExistingHomeInventory'
	 */
	const VALUE_EXISTINGHOMEINVENTORY = 'ExistingHomeInventory';
	/**
	 * Constant for value 'ExistingCondoInventory'
	 * @return string 'ExistingCondoInventory'
	 */
	const VALUE_EXISTINGCONDOINVENTORY = 'ExistingCondoInventory';
	/**
	 * Constant for value 'ExistingSingleFamilyInventory'
	 * @return string 'ExistingSingleFamilyInventory'
	 */
	const VALUE_EXISTINGSINGLEFAMILYINVENTORY = 'ExistingSingleFamilyInventory';
	/**
	 * Constant for value 'FirstTimeBuyerAffordability'
	 * @return string 'FirstTimeBuyerAffordability'
	 */
	const VALUE_FIRSTTIMEBUYERAFFORDABILITY = 'FirstTimeBuyerAffordability';
	/**
	 * Constant for value 'HousingAffordability'
	 * @return string 'HousingAffordability'
	 */
	const VALUE_HOUSINGAFFORDABILITY = 'HousingAffordability';
	/**
	 * Constant for value 'HousingAffordabilityFRM'
	 * @return string 'HousingAffordabilityFRM'
	 */
	const VALUE_HOUSINGAFFORDABILITYFRM = 'HousingAffordabilityFRM';
	/**
	 * Constant for value 'HousingAffordabilityARM'
	 * @return string 'HousingAffordabilityARM'
	 */
	const VALUE_HOUSINGAFFORDABILITYARM = 'HousingAffordabilityARM';
	/**
	 * Constant for value 'HousingStarts'
	 * @return string 'HousingStarts'
	 */
	const VALUE_HOUSINGSTARTS = 'HousingStarts';
	/**
	 * Constant for value 'MedianFamilyIncome'
	 * @return string 'MedianFamilyIncome'
	 */
	const VALUE_MEDIANFAMILYINCOME = 'MedianFamilyIncome';
	/**
	 * Constant for value 'PendingHomeSalesIndex'
	 * @return string 'PendingHomeSalesIndex'
	 */
	const VALUE_PENDINGHOMESALESINDEX = 'PendingHomeSalesIndex';
	/**
	 * Constant for value 'PendingHomeSalesIndexNotAdjusted'
	 * @return string 'PendingHomeSalesIndexNotAdjusted'
	 */
	const VALUE_PENDINGHOMESALESINDEXNOTADJUSTED = 'PendingHomeSalesIndexNotAdjusted';
	/**
	 * Constructor
	 * @return XiHousingTypeIndicatorDataCategories
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
		return in_array($_value,array(self::VALUE_EXISTINGHOMEINVENTORY,self::VALUE_EXISTINGCONDOINVENTORY,self::VALUE_EXISTINGSINGLEFAMILYINVENTORY,self::VALUE_FIRSTTIMEBUYERAFFORDABILITY,self::VALUE_HOUSINGAFFORDABILITY,self::VALUE_HOUSINGAFFORDABILITYFRM,self::VALUE_HOUSINGAFFORDABILITYARM,self::VALUE_HOUSINGSTARTS,self::VALUE_MEDIANFAMILYINCOME,self::VALUE_PENDINGHOMESALESINDEX,self::VALUE_PENDINGHOMESALESINDEXNOTADJUSTED));
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