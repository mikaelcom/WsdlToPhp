<?php
/**
 * Class file for XiGlobalmasterTypeSectors
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeSectors
 * @date 08/07/2012
 */
class XiGlobalmasterTypeSectors extends XiGlobalmasterWsdlClass
{
	/**
	 * Constant for value 'Unknown'
	 * @return string 'Unknown'
	 */
	const VALUE_UNKNOWN = 'Unknown';
	/**
	 * Constant for value 'BasicMaterials'
	 * @return string 'BasicMaterials'
	 */
	const VALUE_BASICMATERIALS = 'BasicMaterials';
	/**
	 * Constant for value 'Conglomerates'
	 * @return string 'Conglomerates'
	 */
	const VALUE_CONGLOMERATES = 'Conglomerates';
	/**
	 * Constant for value 'ConsumerGoods'
	 * @return string 'ConsumerGoods'
	 */
	const VALUE_CONSUMERGOODS = 'ConsumerGoods';
	/**
	 * Constant for value 'Financial'
	 * @return string 'Financial'
	 */
	const VALUE_FINANCIAL = 'Financial';
	/**
	 * Constant for value 'Healthcare'
	 * @return string 'Healthcare'
	 */
	const VALUE_HEALTHCARE = 'Healthcare';
	/**
	 * Constant for value 'IndustrialGoods'
	 * @return string 'IndustrialGoods'
	 */
	const VALUE_INDUSTRIALGOODS = 'IndustrialGoods';
	/**
	 * Constant for value 'Services'
	 * @return string 'Services'
	 */
	const VALUE_SERVICES = 'Services';
	/**
	 * Constant for value 'Technology'
	 * @return string 'Technology'
	 */
	const VALUE_TECHNOLOGY = 'Technology';
	/**
	 * Constant for value 'Utilities'
	 * @return string 'Utilities'
	 */
	const VALUE_UTILITIES = 'Utilities';
	/**
	 * Constructor
	 * @return XiGlobalmasterTypeSectors
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
		return in_array($_value,array(self::VALUE_UNKNOWN,self::VALUE_BASICMATERIALS,self::VALUE_CONGLOMERATES,self::VALUE_CONSUMERGOODS,self::VALUE_FINANCIAL,self::VALUE_HEALTHCARE,self::VALUE_INDUSTRIALGOODS,self::VALUE_SERVICES,self::VALUE_TECHNOLOGY,self::VALUE_UTILITIES));
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