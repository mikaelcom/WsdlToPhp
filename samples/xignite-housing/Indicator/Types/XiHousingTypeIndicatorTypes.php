<?php
/**
 * Class file for XiHousingTypeIndicatorTypes
 * @date 08/07/2012
 */
/**
 * Class XiHousingTypeIndicatorTypes
 * @date 08/07/2012
 */
class XiHousingTypeIndicatorTypes extends XiHousingWsdlClass
{
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
	 * Constant for value 'ExistingHomeSales'
	 * @return string 'ExistingHomeSales'
	 */
	const VALUE_EXISTINGHOMESALES = 'ExistingHomeSales';
	/**
	 * Constant for value 'NewHomeSales'
	 * @return string 'NewHomeSales'
	 */
	const VALUE_NEWHOMESALES = 'NewHomeSales';
	/**
	 * Constant for value 'HousingAffordability'
	 * @return string 'HousingAffordability'
	 */
	const VALUE_HOUSINGAFFORDABILITY = 'HousingAffordability';
	/**
	 * Constant for value 'HousingStarts'
	 * @return string 'HousingStarts'
	 */
	const VALUE_HOUSINGSTARTS = 'HousingStarts';
	/**
	 * Constant for value 'PendingHomeSalesIndex'
	 * @return string 'PendingHomeSalesIndex'
	 */
	const VALUE_PENDINGHOMESALESINDEX = 'PendingHomeSalesIndex';
	/**
	 * Constructor
	 * @return XiHousingTypeIndicatorTypes
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
		return in_array($_value,array(self::VALUE_MORTGAGERATES,self::VALUE_MORTGAGEAPPLICATIONS,self::VALUE_EXISTINGHOMESALES,self::VALUE_NEWHOMESALES,self::VALUE_HOUSINGAFFORDABILITY,self::VALUE_HOUSINGSTARTS,self::VALUE_PENDINGHOMESALESINDEX));
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