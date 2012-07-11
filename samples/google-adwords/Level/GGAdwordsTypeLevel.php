<?php
/**
 * Class file for GGAdwordsTypeLevel
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeLevel
 * @date 03/07/2012
 */
class GGAdwordsTypeLevel extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'CREATIVE'
	 * Meta informations :
	 * 	- documentation : The cap is applied at the creative level.
	 * @return string 'CREATIVE'
	 */
	const VALUE_CREATIVE = 'CREATIVE';
	/**
	 * Constant for value 'ADGROUP'
	 * Meta informations :
	 * 	- documentation : The cap is applied at the ad group level.
	 * @return string 'ADGROUP'
	 */
	const VALUE_ADGROUP = 'ADGROUP';
	/**
	 * Constant for value 'CAMPAIGN'
	 * Meta informations :
	 * 	- documentation : The cap is applied at the campaign level.
	 * @return string 'CAMPAIGN'
	 */
	const VALUE_CAMPAIGN = 'CAMPAIGN';
	/**
	 * Constant for value 'UNKNOWN'
	 * Meta informations :
	 * 	- documentation : This value cannot be set by the user and sent to the AdWords API servers, as it would generate a RejectedError. It can only be received by the user from the AdWords API servers and it means that a new value available in a newer API release version is not known in the current API release version. If the user encounters this value, it means an upgrade is required in order to take advantage of the latest AdWords API functionality. <span class="constraint Rejected">Used for return value only. An enumeration could not be processed, typically due to incompatibility with your WSDL version.</span>
	 * @return string 'UNKNOWN'
	 */
	const VALUE_UNKNOWN = 'UNKNOWN';
	/**
	 * Constructor
	 * @return GGAdwordsTypeLevel
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
		return in_array($_value,array(self::VALUE_CREATIVE,self::VALUE_ADGROUP,self::VALUE_CAMPAIGN,self::VALUE_UNKNOWN));
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