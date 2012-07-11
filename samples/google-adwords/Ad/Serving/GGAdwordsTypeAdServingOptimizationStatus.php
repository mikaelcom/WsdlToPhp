<?php
/**
 * Class file for GGAdwordsTypeAdServingOptimizationStatus
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeAdServingOptimizationStatus
 * @date 03/07/2012
 */
class GGAdwordsTypeAdServingOptimizationStatus extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'OPTIMIZE'
	 * Meta informations :
	 * 	- documentation : Ad serving is optimized based on CTR for the campaign.
	 * @return string 'OPTIMIZE'
	 */
	const VALUE_OPTIMIZE = 'OPTIMIZE';
	/**
	 * Constant for value 'CONVERSION_OPTIMIZE'
	 * Meta informations :
	 * 	- documentation : Ad serving is optimized based on CTR * Conversion for the campaign. If the campaign is not in the conversion optimizer bidding strategy, it will default to OPTIMIZED.
	 * @return string 'CONVERSION_OPTIMIZE'
	 */
	const VALUE_CONVERSION_OPTIMIZE = 'CONVERSION_OPTIMIZE';
	/**
	 * Constant for value 'ROTATE'
	 * Meta informations :
	 * 	- documentation : Ads are rotated evenly for 30 days, then optimized for clicks.
	 * @return string 'ROTATE'
	 */
	const VALUE_ROTATE = 'ROTATE';
	/**
	 * Constant for value 'UNAVAILABLE'
	 * Meta informations :
	 * 	- documentation : Ad serving optimization status is not available.
	 * @return string 'UNAVAILABLE'
	 */
	const VALUE_UNAVAILABLE = 'UNAVAILABLE';
	/**
	 * Constructor
	 * @return GGAdwordsTypeAdServingOptimizationStatus
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
		return in_array($_value,array(self::VALUE_OPTIMIZE,self::VALUE_CONVERSION_OPTIMIZE,self::VALUE_ROTATE,self::VALUE_UNAVAILABLE));
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