<?php
/**
 * Class file for XiIndicesTypeIndexComponentWeightTypes
 * @date 08/07/2012
 */
/**
 * Class XiIndicesTypeIndexComponentWeightTypes
 * @date 08/07/2012
 */
class XiIndicesTypeIndexComponentWeightTypes extends XiIndicesWsdlClass
{
	/**
	 * Constant for value 'Unknown'
	 * @return string 'Unknown'
	 */
	const VALUE_UNKNOWN = 'Unknown';
	/**
	 * Constant for value 'MarketCapitalizationWeighted'
	 * @return string 'MarketCapitalizationWeighted'
	 */
	const VALUE_MARKETCAPITALIZATIONWEIGHTED = 'MarketCapitalizationWeighted';
	/**
	 * Constant for value 'EqualWeighted'
	 * @return string 'EqualWeighted'
	 */
	const VALUE_EQUALWEIGHTED = 'EqualWeighted';
	/**
	 * Constant for value 'PriceWeighted'
	 * @return string 'PriceWeighted'
	 */
	const VALUE_PRICEWEIGHTED = 'PriceWeighted';
	/**
	 * Constant for value 'MarketCapitalizationWeightedWithLimits'
	 * @return string 'MarketCapitalizationWeightedWithLimits'
	 */
	const VALUE_MARKETCAPITALIZATIONWEIGHTEDWITHLIMITS = 'MarketCapitalizationWeightedWithLimits';
	/**
	 * Constant for value 'OtherWeighting'
	 * @return string 'OtherWeighting'
	 */
	const VALUE_OTHERWEIGHTING = 'OtherWeighting';
	/**
	 * Constructor
	 * @return XiIndicesTypeIndexComponentWeightTypes
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
		return in_array($_value,array(self::VALUE_UNKNOWN,self::VALUE_MARKETCAPITALIZATIONWEIGHTED,self::VALUE_EQUALWEIGHTED,self::VALUE_PRICEWEIGHTED,self::VALUE_MARKETCAPITALIZATIONWEIGHTEDWITHLIMITS,self::VALUE_OTHERWEIGHTING));
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