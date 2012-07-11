<?php
/**
 * Class file for GGAdwordsTypeCampaignStatus
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeCampaignStatus
 * @date 03/07/2012
 */
class GGAdwordsTypeCampaignStatus extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'ACTIVE'
	 * Meta informations :
	 * 	- documentation : Campaign is currently serving ads depending on budget information.
	 * @return string 'ACTIVE'
	 */
	const VALUE_ACTIVE = 'ACTIVE';
	/**
	 * Constant for value 'DELETED'
	 * Meta informations :
	 * 	- documentation : Campaign has been deleted.
	 * @return string 'DELETED'
	 */
	const VALUE_DELETED = 'DELETED';
	/**
	 * Constant for value 'PAUSED'
	 * Meta informations :
	 * 	- documentation : Campaign has been paused by the user.
	 * @return string 'PAUSED'
	 */
	const VALUE_PAUSED = 'PAUSED';
	/**
	 * Constructor
	 * @return GGAdwordsTypeCampaignStatus
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
		return in_array($_value,array(self::VALUE_ACTIVE,self::VALUE_DELETED,self::VALUE_PAUSED));
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