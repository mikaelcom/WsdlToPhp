<?php
/**
 * Class file for GGAdwordsTypeConversionDeduplicationMode
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeConversionDeduplicationMode
 * @date 03/07/2012
 */
class GGAdwordsTypeConversionDeduplicationMode extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'ONE_PER_CLICK'
	 * @return string 'ONE_PER_CLICK'
	 */
	const VALUE_ONE_PER_CLICK = 'ONE_PER_CLICK';
	/**
	 * Constant for value 'MANY_PER_CLICK'
	 * Meta informations :
	 * 	- documentation : Total number of conversions per click.
	 * @return string 'MANY_PER_CLICK'
	 */
	const VALUE_MANY_PER_CLICK = 'MANY_PER_CLICK';
	/**
	 * Constructor
	 * @return GGAdwordsTypeConversionDeduplicationMode
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
		return in_array($_value,array(self::VALUE_ONE_PER_CLICK,self::VALUE_MANY_PER_CLICK));
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