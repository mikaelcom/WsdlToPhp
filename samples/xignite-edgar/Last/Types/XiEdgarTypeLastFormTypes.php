<?php
/**
 * Class file for XiEdgarTypeLastFormTypes
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeLastFormTypes
 * @date 08/07/2012
 */
class XiEdgarTypeLastFormTypes extends XiEdgarWsdlClass
{
	/**
	 * Constant for value 'Form10Q'
	 * @return string 'Form10Q'
	 */
	const VALUE_FORM10Q = 'Form10Q';
	/**
	 * Constant for value 'Form10K'
	 * @return string 'Form10K'
	 */
	const VALUE_FORM10K = 'Form10K';
	/**
	 * Constant for value 'Form14A'
	 * @return string 'Form14A'
	 */
	const VALUE_FORM14A = 'Form14A';
	/**
	 * Constant for value 'Form10X'
	 * @return string 'Form10X'
	 */
	const VALUE_FORM10X = 'Form10X';
	/**
	 * Constant for value 'Any'
	 * @return string 'Any'
	 */
	const VALUE_ANY = 'Any';
	/**
	 * Constructor
	 * @return XiEdgarTypeLastFormTypes
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
		return in_array($_value,array(self::VALUE_FORM10Q,self::VALUE_FORM10K,self::VALUE_FORM14A,self::VALUE_FORM10X,self::VALUE_ANY));
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