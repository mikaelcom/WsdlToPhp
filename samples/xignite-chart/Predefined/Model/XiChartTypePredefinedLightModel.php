<?php
/**
 * Class file for XiChartTypePredefinedLightModel
 * @date 08/07/2012
 */
/**
 * Class XiChartTypePredefinedLightModel
 * @date 08/07/2012
 */
class XiChartTypePredefinedLightModel extends XiChartWsdlClass
{
	/**
	 * Constant for value 'None'
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'SoftTopLeft'
	 * @return string 'SoftTopLeft'
	 */
	const VALUE_SOFTTOPLEFT = 'SoftTopLeft';
	/**
	 * Constant for value 'SoftFrontal'
	 * @return string 'SoftFrontal'
	 */
	const VALUE_SOFTFRONTAL = 'SoftFrontal';
	/**
	 * Constant for value 'SoftTopRight'
	 * @return string 'SoftTopRight'
	 */
	const VALUE_SOFTTOPRIGHT = 'SoftTopRight';
	/**
	 * Constant for value 'ShinyTopLeft'
	 * @return string 'ShinyTopLeft'
	 */
	const VALUE_SHINYTOPLEFT = 'ShinyTopLeft';
	/**
	 * Constant for value 'ShinyFrontal'
	 * @return string 'ShinyFrontal'
	 */
	const VALUE_SHINYFRONTAL = 'ShinyFrontal';
	/**
	 * Constant for value 'ShinyTopRight'
	 * @return string 'ShinyTopRight'
	 */
	const VALUE_SHINYTOPRIGHT = 'ShinyTopRight';
	/**
	 * Constant for value 'MetallicLustre'
	 * @return string 'MetallicLustre'
	 */
	const VALUE_METALLICLUSTRE = 'MetallicLustre';
	/**
	 * Constant for value 'NorthernLights'
	 * @return string 'NorthernLights'
	 */
	const VALUE_NORTHERNLIGHTS = 'NorthernLights';
	/**
	 * Constructor
	 * @return XiChartTypePredefinedLightModel
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
		return in_array($_value,array(self::VALUE_NONE,self::VALUE_SOFTTOPLEFT,self::VALUE_SOFTFRONTAL,self::VALUE_SOFTTOPRIGHT,self::VALUE_SHINYTOPLEFT,self::VALUE_SHINYFRONTAL,self::VALUE_SHINYTOPRIGHT,self::VALUE_METALLICLUSTRE,self::VALUE_NORTHERNLIGHTS));
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