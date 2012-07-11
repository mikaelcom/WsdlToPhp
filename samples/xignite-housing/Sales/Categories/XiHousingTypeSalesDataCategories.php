<?php
/**
 * Class file for XiHousingTypeSalesDataCategories
 * @date 08/07/2012
 */
/**
 * Class XiHousingTypeSalesDataCategories
 * @date 08/07/2012
 */
class XiHousingTypeSalesDataCategories extends XiHousingWsdlClass
{
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
	 * Constructor
	 * @return XiHousingTypeSalesDataCategories
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
		return in_array($_value,array(self::VALUE_EXISTINGHOMESALES,self::VALUE_EXISTINGHOMESALESNOTADJUSTED,self::VALUE_EXISTINGCONDOSALES,self::VALUE_EXISTINGCONDOSALESNOTADJUSTED,self::VALUE_EXISTINGSINGLEFAMILYSALES,self::VALUE_EXISTINGSINGLEFAMILYSALESNOTADJUSTED,self::VALUE_NEWHOMESALES));
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