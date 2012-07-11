<?php
/**
 * Class file for XiHousingTypeDataCategories
 * @date 08/07/2012
 */
/**
 * Class XiHousingTypeDataCategories
 * @date 08/07/2012
 */
class XiHousingTypeDataCategories extends XiHousingWsdlClass
{
	/**
	 * Constant for value 'Undefined'
	 * @return string 'Undefined'
	 */
	const VALUE_UNDEFINED = 'Undefined';
	/**
	 * Constant for value 'ExistingHomeSales'
	 * @return string 'ExistingHomeSales'
	 */
	const VALUE_EXISTINGHOMESALES = 'ExistingHomeSales';
	/**
	 * Constant for value 'ExistingHomeSalesNotAdjusted'
	 * @return string 'ExistingHomeSalesNotAdjusted'
	 */
	const VALUE_EXISTINGHOMESALESNOTADJUSTED = 'ExistingHomeSalesNotAdjusted';
	/**
	 * Constant for value 'ExistingCondoSales'
	 * @return string 'ExistingCondoSales'
	 */
	const VALUE_EXISTINGCONDOSALES = 'ExistingCondoSales';
	/**
	 * Constant for value 'ExistingCondoSalesNotAdjusted'
	 * @return string 'ExistingCondoSalesNotAdjusted'
	 */
	const VALUE_EXISTINGCONDOSALESNOTADJUSTED = 'ExistingCondoSalesNotAdjusted';
	/**
	 * Constant for value 'ExistingSingleFamilySales'
	 * @return string 'ExistingSingleFamilySales'
	 */
	const VALUE_EXISTINGSINGLEFAMILYSALES = 'ExistingSingleFamilySales';
	/**
	 * Constant for value 'ExistingSingleFamilySalesNotAdjusted'
	 * @return string 'ExistingSingleFamilySalesNotAdjusted'
	 */
	const VALUE_EXISTINGSINGLEFAMILYSALESNOTADJUSTED = 'ExistingSingleFamilySalesNotAdjusted';
	/**
	 * Constant for value 'NewHomeSales'
	 * @return string 'NewHomeSales'
	 */
	const VALUE_NEWHOMESALES = 'NewHomeSales';
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
	 * Constant for value 'MortgageRates'
	 * @return string 'MortgageRates'
	 */
	const VALUE_MORTGAGERATES = 'MortgageRates';
	/**
	 * Constant for value 'MortgageApplications'
	 * @return string 'MortgageApplications'
	 */
	const VALUE_MORTGAGEAPPLICATIONS = 'MortgageApplications';
	/**
	 * Constructor
	 * @return XiHousingTypeDataCategories
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
		return in_array($_value,array(self::VALUE_UNDEFINED,self::VALUE_EXISTINGHOMESALES,self::VALUE_EXISTINGHOMESALESNOTADJUSTED,self::VALUE_EXISTINGCONDOSALES,self::VALUE_EXISTINGCONDOSALESNOTADJUSTED,self::VALUE_EXISTINGSINGLEFAMILYSALES,self::VALUE_EXISTINGSINGLEFAMILYSALESNOTADJUSTED,self::VALUE_NEWHOMESALES,self::VALUE_EXISTINGHOMEMEDIANPRICE,self::VALUE_EXISTINGHOMEMEANPRICE,self::VALUE_EXISTINGCONDOMEDIANPRICE,self::VALUE_EXISTINGCONDOMEANPRICE,self::VALUE_EXISTINGSINGLEFAMILYMEDIANPRICE,self::VALUE_EXISTINGSINGLEFAMILYMEANPRICE,self::VALUE_STARTERHOMEMEDIANPRICE,self::VALUE_EXISTINGHOMEINVENTORY,self::VALUE_EXISTINGCONDOINVENTORY,self::VALUE_EXISTINGSINGLEFAMILYINVENTORY,self::VALUE_FIRSTTIMEBUYERAFFORDABILITY,self::VALUE_HOUSINGAFFORDABILITY,self::VALUE_HOUSINGAFFORDABILITYFRM,self::VALUE_HOUSINGAFFORDABILITYARM,self::VALUE_HOUSINGSTARTS,self::VALUE_MEDIANFAMILYINCOME,self::VALUE_PENDINGHOMESALESINDEX,self::VALUE_PENDINGHOMESALESINDEXNOTADJUSTED,self::VALUE_MORTGAGERATES,self::VALUE_MORTGAGEAPPLICATIONS));
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