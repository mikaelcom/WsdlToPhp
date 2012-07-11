<?php
/**
 * Class file for XiRatesTypeStateRateTypes
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeStateRateTypes
 * @date 08/07/2012
 */
class XiRatesTypeStateRateTypes extends XiRatesWsdlClass
{
	/**
	 * Constant for value 'TennesseeFormulaRate'
	 * @return string 'TennesseeFormulaRate'
	 */
	const VALUE_TENNESSEEFORMULARATE = 'TennesseeFormulaRate';
	/**
	 * Constant for value 'TennesseeEffectiveRate'
	 * @return string 'TennesseeEffectiveRate'
	 */
	const VALUE_TENNESSEEEFFECTIVERATE = 'TennesseeEffectiveRate';
	/**
	 * Constant for value 'KansasUsuryRate'
	 * @return string 'KansasUsuryRate'
	 */
	const VALUE_KANSASUSURYRATE = 'KansasUsuryRate';
	/**
	 * Constant for value 'KansasCodeMortgageRate'
	 * @return string 'KansasCodeMortgageRate'
	 */
	const VALUE_KANSASCODEMORTGAGERATE = 'KansasCodeMortgageRate';
	/**
	 * Constant for value 'MissouriMarketRate'
	 * @return string 'MissouriMarketRate'
	 */
	const VALUE_MISSOURIMARKETRATE = 'MissouriMarketRate';
	/**
	 * Constructor
	 * @return XiRatesTypeStateRateTypes
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
		return in_array($_value,array(self::VALUE_TENNESSEEFORMULARATE,self::VALUE_TENNESSEEEFFECTIVERATE,self::VALUE_KANSASUSURYRATE,self::VALUE_KANSASCODEMORTGAGERATE,self::VALUE_MISSOURIMARKETRATE));
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