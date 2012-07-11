<?php
/**
 * Class file for XiFundDataTypeInvestmentObjectives
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeInvestmentObjectives
 * @date 08/07/2012
 */
class XiFundDataTypeInvestmentObjectives extends XiFundDataWsdlClass
{
	/**
	 * Constant for value 'NotApplicable'
	 * @return string 'NotApplicable'
	 */
	const VALUE_NOTAPPLICABLE = 'NotApplicable';
	/**
	 * Constant for value 'AggressiveCapitalAppreciation'
	 * @return string 'AggressiveCapitalAppreciation'
	 */
	const VALUE_AGGRESSIVECAPITALAPPRECIATION = 'AggressiveCapitalAppreciation';
	/**
	 * Constant for value 'CapitalAppreciation'
	 * @return string 'CapitalAppreciation'
	 */
	const VALUE_CAPITALAPPRECIATION = 'CapitalAppreciation';
	/**
	 * Constant for value 'Growth'
	 * @return string 'Growth'
	 */
	const VALUE_GROWTH = 'Growth';
	/**
	 * Constant for value 'GrowthAndIncome'
	 * @return string 'GrowthAndIncome'
	 */
	const VALUE_GROWTHANDINCOME = 'GrowthAndIncome';
	/**
	 * Constant for value 'Income'
	 * @return string 'Income'
	 */
	const VALUE_INCOME = 'Income';
	/**
	 * Constant for value 'TotalReturn'
	 * @return string 'TotalReturn'
	 */
	const VALUE_TOTALRETURN = 'TotalReturn';
	/**
	 * Constructor
	 * @return XiFundDataTypeInvestmentObjectives
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
		return in_array($_value,array(self::VALUE_NOTAPPLICABLE,self::VALUE_AGGRESSIVECAPITALAPPRECIATION,self::VALUE_CAPITALAPPRECIATION,self::VALUE_GROWTH,self::VALUE_GROWTHANDINCOME,self::VALUE_INCOME,self::VALUE_TOTALRETURN));
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