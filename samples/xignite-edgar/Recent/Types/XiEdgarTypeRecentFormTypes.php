<?php
/**
 * Class file for XiEdgarTypeRecentFormTypes
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeRecentFormTypes
 * @date 08/07/2012
 */
class XiEdgarTypeRecentFormTypes extends XiEdgarWsdlClass
{
	/**
	 * Constant for value 'Form10K'
	 * @return string 'Form10K'
	 */
	const VALUE_FORM10K = 'Form10K';
	/**
	 * Constant for value 'Form10Q'
	 * @return string 'Form10Q'
	 */
	const VALUE_FORM10Q = 'Form10Q';
	/**
	 * Constant for value 'Form14'
	 * @return string 'Form14'
	 */
	const VALUE_FORM14 = 'Form14';
	/**
	 * Constant for value 'Form485'
	 * @return string 'Form485'
	 */
	const VALUE_FORM485 = 'Form485';
	/**
	 * Constant for value 'Form8K'
	 * @return string 'Form8K'
	 */
	const VALUE_FORM8K = 'Form8K';
	/**
	 * Constant for value 'FormS8'
	 * @return string 'FormS8'
	 */
	const VALUE_FORMS8 = 'FormS8';
	/**
	 * Constant for value 'All'
	 * @return string 'All'
	 */
	const VALUE_ALL = 'All';
	/**
	 * Constructor
	 * @return XiEdgarTypeRecentFormTypes
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
		return in_array($_value,array(self::VALUE_FORM10K,self::VALUE_FORM10Q,self::VALUE_FORM14,self::VALUE_FORM485,self::VALUE_FORM8K,self::VALUE_FORMS8,self::VALUE_ALL));
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