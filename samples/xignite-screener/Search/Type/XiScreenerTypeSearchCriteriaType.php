<?php
/**
 * Class file for XiScreenerTypeSearchCriteriaType
 * @date 08/07/2012
 */
/**
 * Class XiScreenerTypeSearchCriteriaType
 * @date 08/07/2012
 */
class XiScreenerTypeSearchCriteriaType extends XiScreenerWsdlClass
{
	/**
	 * Constant for value 'Equal'
	 * @return string 'Equal'
	 */
	const VALUE_EQUAL = 'Equal';
	/**
	 * Constant for value 'LessThan'
	 * @return string 'LessThan'
	 */
	const VALUE_LESSTHAN = 'LessThan';
	/**
	 * Constant for value 'GreaterThan'
	 * @return string 'GreaterThan'
	 */
	const VALUE_GREATERTHAN = 'GreaterThan';
	/**
	 * Constant for value 'LessOrEqualTo'
	 * @return string 'LessOrEqualTo'
	 */
	const VALUE_LESSOREQUALTO = 'LessOrEqualTo';
	/**
	 * Constant for value 'GreaterOrEqualTo'
	 * @return string 'GreaterOrEqualTo'
	 */
	const VALUE_GREATEROREQUALTO = 'GreaterOrEqualTo';
	/**
	 * Constant for value 'Between'
	 * @return string 'Between'
	 */
	const VALUE_BETWEEN = 'Between';
	/**
	 * Constant for value 'Like'
	 * @return string 'Like'
	 */
	const VALUE_LIKE = 'Like';
	/**
	 * Constant for value 'StartsWith'
	 * @return string 'StartsWith'
	 */
	const VALUE_STARTSWITH = 'StartsWith';
	/**
	 * Constant for value 'EndsWith'
	 * @return string 'EndsWith'
	 */
	const VALUE_ENDSWITH = 'EndsWith';
	/**
	 * Constant for value 'InList'
	 * @return string 'InList'
	 */
	const VALUE_INLIST = 'InList';
	/**
	 * Constant for value 'SoundsLike'
	 * @return string 'SoundsLike'
	 */
	const VALUE_SOUNDSLIKE = 'SoundsLike';
	/**
	 * Constant for value 'NotLike'
	 * @return string 'NotLike'
	 */
	const VALUE_NOTLIKE = 'NotLike';
	/**
	 * Constructor
	 * @return XiScreenerTypeSearchCriteriaType
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
		return in_array($_value,array(self::VALUE_EQUAL,self::VALUE_LESSTHAN,self::VALUE_GREATERTHAN,self::VALUE_LESSOREQUALTO,self::VALUE_GREATEROREQUALTO,self::VALUE_BETWEEN,self::VALUE_LIKE,self::VALUE_STARTSWITH,self::VALUE_ENDSWITH,self::VALUE_INLIST,self::VALUE_SOUNDSLIKE,self::VALUE_NOTLIKE));
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