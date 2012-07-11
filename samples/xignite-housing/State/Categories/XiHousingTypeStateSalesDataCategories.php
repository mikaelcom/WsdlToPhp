<?php
/**
 * Class file for XiHousingTypeStateSalesDataCategories
 * @date 08/07/2012
 */
/**
 * Class XiHousingTypeStateSalesDataCategories
 * @date 08/07/2012
 */
class XiHousingTypeStateSalesDataCategories extends XiHousingWsdlClass
{
	/**
	 * Constant for value 'ExistingHomeSales'
	 * @return string 'ExistingHomeSales'
	 */
	const VALUE_EXISTINGHOMESALES = 'ExistingHomeSales';
	/**
	 * Constructor
	 * @return XiHousingTypeStateSalesDataCategories
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
		return in_array($_value,array(self::VALUE_EXISTINGHOMESALES));
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