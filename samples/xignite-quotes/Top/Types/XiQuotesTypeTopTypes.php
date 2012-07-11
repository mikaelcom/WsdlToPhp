<?php
/**
 * Class file for XiQuotesTypeTopTypes
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeTopTypes
 * @date 08/07/2012
 */
class XiQuotesTypeTopTypes extends XiQuotesWsdlClass
{
	/**
	 * Constant for value 'Most_Active'
	 * @return string 'Most_Active'
	 */
	const VALUE_MOST_ACTIVE = 'Most_Active';
	/**
	 * Constant for value 'Leading_Gainers'
	 * @return string 'Leading_Gainers'
	 */
	const VALUE_LEADING_GAINERS = 'Leading_Gainers';
	/**
	 * Constant for value 'Leading_Losers'
	 * @return string 'Leading_Losers'
	 */
	const VALUE_LEADING_LOSERS = 'Leading_Losers';
	/**
	 * Constant for value 'Top'
	 * @return string 'Top'
	 */
	const VALUE_TOP = 'Top';
	/**
	 * Constructor
	 * @return XiQuotesTypeTopTypes
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
		return in_array($_value,array(self::VALUE_MOST_ACTIVE,self::VALUE_LEADING_GAINERS,self::VALUE_LEADING_LOSERS,self::VALUE_TOP));
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