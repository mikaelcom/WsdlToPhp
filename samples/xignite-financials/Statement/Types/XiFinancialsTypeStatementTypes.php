<?php
/**
 * Class file for XiFinancialsTypeStatementTypes
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeStatementTypes
 * @date 08/07/2012
 */
class XiFinancialsTypeStatementTypes extends XiFinancialsWsdlClass
{
	/**
	 * Constant for value 'BalanceSheet'
	 * @return string 'BalanceSheet'
	 */
	const VALUE_BALANCESHEET = 'BalanceSheet';
	/**
	 * Constant for value 'IncomeStatement'
	 * @return string 'IncomeStatement'
	 */
	const VALUE_INCOMESTATEMENT = 'IncomeStatement';
	/**
	 * Constant for value 'CashFlowStatement'
	 * @return string 'CashFlowStatement'
	 */
	const VALUE_CASHFLOWSTATEMENT = 'CashFlowStatement';
	/**
	 * Constructor
	 * @return XiFinancialsTypeStatementTypes
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
		return in_array($_value,array(self::VALUE_BALANCESHEET,self::VALUE_INCOMESTATEMENT,self::VALUE_CASHFLOWSTATEMENT));
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