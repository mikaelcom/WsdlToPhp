<?php
/**
 * Class file for XiIndicesTypeIndexCriteriaTypes
 * @date 08/07/2012
 */
/**
 * Class XiIndicesTypeIndexCriteriaTypes
 * @date 08/07/2012
 */
class XiIndicesTypeIndexCriteriaTypes extends XiIndicesWsdlClass
{
	/**
	 * Constant for value 'Country'
	 * @return string 'Country'
	 */
	const VALUE_COUNTRY = 'Country';
	/**
	 * Constant for value 'Sector'
	 * @return string 'Sector'
	 */
	const VALUE_SECTOR = 'Sector';
	/**
	 * Constant for value 'Family'
	 * @return string 'Family'
	 */
	const VALUE_FAMILY = 'Family';
	/**
	 * Constructor
	 * @return XiIndicesTypeIndexCriteriaTypes
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
		return in_array($_value,array(self::VALUE_COUNTRY,self::VALUE_SECTOR,self::VALUE_FAMILY));
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