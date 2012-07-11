<?php
/**
 * Class file for XiEdgarTypeDayTypes
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeDayTypes
 * @date 08/07/2012
 */
class XiEdgarTypeDayTypes extends XiEdgarWsdlClass
{
	/**
	 * Constant for value 'Today'
	 * @return string 'Today'
	 */
	const VALUE_TODAY = 'Today';
	/**
	 * Constant for value 'TMinus1'
	 * @return string 'TMinus1'
	 */
	const VALUE_TMINUS1 = 'TMinus1';
	/**
	 * Constant for value 'TMinus2'
	 * @return string 'TMinus2'
	 */
	const VALUE_TMINUS2 = 'TMinus2';
	/**
	 * Constant for value 'TMinus3'
	 * @return string 'TMinus3'
	 */
	const VALUE_TMINUS3 = 'TMinus3';
	/**
	 * Constant for value 'TMinus4'
	 * @return string 'TMinus4'
	 */
	const VALUE_TMINUS4 = 'TMinus4';
	/**
	 * Constant for value 'TMinus5'
	 * @return string 'TMinus5'
	 */
	const VALUE_TMINUS5 = 'TMinus5';
	/**
	 * Constructor
	 * @return XiEdgarTypeDayTypes
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
		return in_array($_value,array(self::VALUE_TODAY,self::VALUE_TMINUS1,self::VALUE_TMINUS2,self::VALUE_TMINUS3,self::VALUE_TMINUS4,self::VALUE_TMINUS5));
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