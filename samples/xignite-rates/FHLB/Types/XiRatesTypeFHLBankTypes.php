<?php
/**
 * Class file for XiRatesTypeFHLBankTypes
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeFHLBankTypes
 * @date 08/07/2012
 */
class XiRatesTypeFHLBankTypes extends XiRatesWsdlClass
{
	/**
	 * Constant for value 'Atlanta'
	 * @return string 'Atlanta'
	 */
	const VALUE_ATLANTA = 'Atlanta';
	/**
	 * Constant for value 'Boston'
	 * @return string 'Boston'
	 */
	const VALUE_BOSTON = 'Boston';
	/**
	 * Constant for value 'Cincinnati'
	 * @return string 'Cincinnati'
	 */
	const VALUE_CINCINNATI = 'Cincinnati';
	/**
	 * Constant for value 'Chicago'
	 * @return string 'Chicago'
	 */
	const VALUE_CHICAGO = 'Chicago';
	/**
	 * Constant for value 'Dallas'
	 * @return string 'Dallas'
	 */
	const VALUE_DALLAS = 'Dallas';
	/**
	 * Constant for value 'DesMoines'
	 * @return string 'DesMoines'
	 */
	const VALUE_DESMOINES = 'DesMoines';
	/**
	 * Constant for value 'Indianapolis'
	 * @return string 'Indianapolis'
	 */
	const VALUE_INDIANAPOLIS = 'Indianapolis';
	/**
	 * Constant for value 'NewYork'
	 * @return string 'NewYork'
	 */
	const VALUE_NEWYORK = 'NewYork';
	/**
	 * Constant for value 'Pittsburgh'
	 * @return string 'Pittsburgh'
	 */
	const VALUE_PITTSBURGH = 'Pittsburgh';
	/**
	 * Constant for value 'Seattle'
	 * @return string 'Seattle'
	 */
	const VALUE_SEATTLE = 'Seattle';
	/**
	 * Constant for value 'SanFrancisco'
	 * @return string 'SanFrancisco'
	 */
	const VALUE_SANFRANCISCO = 'SanFrancisco';
	/**
	 * Constant for value 'Topeka'
	 * @return string 'Topeka'
	 */
	const VALUE_TOPEKA = 'Topeka';
	/**
	 * Constant for value 'None'
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constructor
	 * @return XiRatesTypeFHLBankTypes
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
		return in_array($_value,array(self::VALUE_ATLANTA,self::VALUE_BOSTON,self::VALUE_CINCINNATI,self::VALUE_CHICAGO,self::VALUE_DALLAS,self::VALUE_DESMOINES,self::VALUE_INDIANAPOLIS,self::VALUE_NEWYORK,self::VALUE_PITTSBURGH,self::VALUE_SEATTLE,self::VALUE_SANFRANCISCO,self::VALUE_TOPEKA,self::VALUE_NONE));
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