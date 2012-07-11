<?php
/**
 * Class file for GGAdwordsTypeServingStatus
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeServingStatus
 * @date 03/07/2012
 */
class GGAdwordsTypeServingStatus extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'SERVING'
	 * Meta informations :
	 * 	- documentation : The campaign is currently serving ads.
	 * @return string 'SERVING'
	 */
	const VALUE_SERVING = 'SERVING';
	/**
	 * Constant for value 'NONE'
	 * Meta informations :
	 * 	- documentation : This is the catch-all if none of the other statuses make sense. Such a campaign is not serving, but none of the other statuses are sensible options.
	 * @return string 'NONE'
	 */
	const VALUE_NONE = 'NONE';
	/**
	 * Constant for value 'ENDED'
	 * Meta informations :
	 * 	- documentation : The campaign end date has been past.
	 * @return string 'ENDED'
	 */
	const VALUE_ENDED = 'ENDED';
	/**
	 * Constant for value 'PENDING'
	 * Meta informations :
	 * 	- documentation : The campaign start date has not yet been reached.
	 * @return string 'PENDING'
	 */
	const VALUE_PENDING = 'PENDING';
	/**
	 * Constant for value 'SUSPENDED'
	 * Meta informations :
	 * 	- documentation : The campaign has been suspended probably from lack of allocated funds.
	 * @return string 'SUSPENDED'
	 */
	const VALUE_SUSPENDED = 'SUSPENDED';
	/**
	 * Constructor
	 * @return GGAdwordsTypeServingStatus
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
		return in_array($_value,array(self::VALUE_SERVING,self::VALUE_NONE,self::VALUE_ENDED,self::VALUE_PENDING,self::VALUE_SUSPENDED));
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