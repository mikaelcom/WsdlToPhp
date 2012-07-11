<?php
/**
 * Class file for XiEnergyTypeStockChartStyles
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeStockChartStyles
 * @date 08/07/2012
 */
class XiEnergyTypeStockChartStyles extends XiEnergyWsdlClass
{
	/**
	 * Constant for value 'Line'
	 * @return string 'Line'
	 */
	const VALUE_LINE = 'Line';
	/**
	 * Constant for value 'Candle'
	 * @return string 'Candle'
	 */
	const VALUE_CANDLE = 'Candle';
	/**
	 * Constant for value 'Stick'
	 * @return string 'Stick'
	 */
	const VALUE_STICK = 'Stick';
	/**
	 * Constant for value 'Area'
	 * @return string 'Area'
	 */
	const VALUE_AREA = 'Area';
	/**
	 * Constant for value 'Percentage'
	 * @return string 'Percentage'
	 */
	const VALUE_PERCENTAGE = 'Percentage';
	/**
	 * Constant for value 'LinePercentage'
	 * @return string 'LinePercentage'
	 */
	const VALUE_LINEPERCENTAGE = 'LinePercentage';
	/**
	 * Constant for value 'CandlePercentage'
	 * @return string 'CandlePercentage'
	 */
	const VALUE_CANDLEPERCENTAGE = 'CandlePercentage';
	/**
	 * Constant for value 'StickPercentage'
	 * @return string 'StickPercentage'
	 */
	const VALUE_STICKPERCENTAGE = 'StickPercentage';
	/**
	 * Constant for value 'AreaPercentage'
	 * @return string 'AreaPercentage'
	 */
	const VALUE_AREAPERCENTAGE = 'AreaPercentage';
	/**
	 * Constructor
	 * @return XiEnergyTypeStockChartStyles
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
		return in_array($_value,array(self::VALUE_LINE,self::VALUE_CANDLE,self::VALUE_STICK,self::VALUE_AREA,self::VALUE_PERCENTAGE,self::VALUE_LINEPERCENTAGE,self::VALUE_CANDLEPERCENTAGE,self::VALUE_STICKPERCENTAGE,self::VALUE_AREAPERCENTAGE));
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