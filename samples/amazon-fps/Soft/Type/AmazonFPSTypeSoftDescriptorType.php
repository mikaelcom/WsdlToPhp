<?php
/**
 * Class file for AmazonFPSTypeSoftDescriptorType
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeSoftDescriptorType
 * @date 10/07/2012
 */
class AmazonFPSTypeSoftDescriptorType extends AmazonFPSWsdlClass
{
	/**
	 * Constant for value 'Dynamic'
	 * @return string 'Dynamic'
	 */
	const VALUE_DYNAMIC = 'Dynamic';
	/**
	 * Constant for value 'Static'
	 * @return string 'Static'
	 */
	const VALUE_STATIC = 'Static';
	/**
	 * Constructor
	 * @return AmazonFPSTypeSoftDescriptorType
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
		return in_array($_value,array(self::VALUE_DYNAMIC,self::VALUE_STATIC));
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