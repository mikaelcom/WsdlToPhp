<?php
/**
 * Class file for XiRatesTypeFHLBankRateTypes
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeFHLBankRateTypes
 * @date 08/07/2012
 */
class XiRatesTypeFHLBankRateTypes extends XiRatesWsdlClass
{
	/**
	 * Constant for value 'Advance'
	 * @return string 'Advance'
	 */
	const VALUE_ADVANCE = 'Advance';
	/**
	 * Constant for value 'MortgageMatchedAdvance'
	 * @return string 'MortgageMatchedAdvance'
	 */
	const VALUE_MORTGAGEMATCHEDADVANCE = 'MortgageMatchedAdvance';
	/**
	 * Constant for value 'LineOfCredit'
	 * @return string 'LineOfCredit'
	 */
	const VALUE_LINEOFCREDIT = 'LineOfCredit';
	/**
	 * Constant for value 'BrokeredCDRates'
	 * @return string 'BrokeredCDRates'
	 */
	const VALUE_BROKEREDCDRATES = 'BrokeredCDRates';
	/**
	 * Constant for value 'Invalid'
	 * @return string 'Invalid'
	 */
	const VALUE_INVALID = 'Invalid';
	/**
	 * Constructor
	 * @return XiRatesTypeFHLBankRateTypes
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
		return in_array($_value,array(self::VALUE_ADVANCE,self::VALUE_MORTGAGEMATCHEDADVANCE,self::VALUE_LINEOFCREDIT,self::VALUE_BROKEREDCDRATES,self::VALUE_INVALID));
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