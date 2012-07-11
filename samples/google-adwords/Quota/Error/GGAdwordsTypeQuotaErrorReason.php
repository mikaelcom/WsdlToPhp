<?php
/**
 * Class file for GGAdwordsTypeQuotaErrorReason
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeQuotaErrorReason
 * @date 03/07/2012
 */
class GGAdwordsTypeQuotaErrorReason extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'TOO_MANY_ADGROUPS_PER_CAMPAIGN'
	 * Meta informations :
	 * 	- documentation : Too many ad groups per campaign.
	 * @return string 'TOO_MANY_ADGROUPS_PER_CAMPAIGN'
	 */
	const VALUE_TOO_MANY_ADGROUPS_PER_CAMPAIGN = 'TOO_MANY_ADGROUPS_PER_CAMPAIGN';
	/**
	 * Constant for value 'TOO_MANY_CAMPAIGNS_PER_ACCOUNT'
	 * Meta informations :
	 * 	- documentation : Too many campaigns per account.
	 * @return string 'TOO_MANY_CAMPAIGNS_PER_ACCOUNT'
	 */
	const VALUE_TOO_MANY_CAMPAIGNS_PER_ACCOUNT = 'TOO_MANY_CAMPAIGNS_PER_ACCOUNT';
	/**
	 * Constant for value 'TOO_MANY_CONVERSION_TYPES_PER_ACCOUNT'
	 * Meta informations :
	 * 	- documentation : Too many conversion types per account.
	 * @return string 'TOO_MANY_CONVERSION_TYPES_PER_ACCOUNT'
	 */
	const VALUE_TOO_MANY_CONVERSION_TYPES_PER_ACCOUNT = 'TOO_MANY_CONVERSION_TYPES_PER_ACCOUNT';
	/**
	 * Constant for value 'TOO_MANY_KEYWORDS_PER_ADGROUP'
	 * Meta informations :
	 * 	- documentation : Too many keywords per ad group.
	 * @return string 'TOO_MANY_KEYWORDS_PER_ADGROUP'
	 */
	const VALUE_TOO_MANY_KEYWORDS_PER_ADGROUP = 'TOO_MANY_KEYWORDS_PER_ADGROUP';
	/**
	 * Constant for value 'TOO_MANY_KEYWORDS_PER_CAMPAIGN'
	 * Meta informations :
	 * 	- documentation : Too many keywords per campaign.
	 * @return string 'TOO_MANY_KEYWORDS_PER_CAMPAIGN'
	 */
	const VALUE_TOO_MANY_KEYWORDS_PER_CAMPAIGN = 'TOO_MANY_KEYWORDS_PER_CAMPAIGN';
	/**
	 * Constant for value 'TOO_MANY_KEYWORDS_PER_CUSTOMER'
	 * Meta informations :
	 * 	- documentation : Too many keywords per customer.
	 * @return string 'TOO_MANY_KEYWORDS_PER_CUSTOMER'
	 */
	const VALUE_TOO_MANY_KEYWORDS_PER_CUSTOMER = 'TOO_MANY_KEYWORDS_PER_CUSTOMER';
	/**
	 * Constant for value 'TOO_MANY_SITES_PER_ADGROUP'
	 * Meta informations :
	 * 	- documentation : Too many sites per ad group.
	 * @return string 'TOO_MANY_SITES_PER_ADGROUP'
	 */
	const VALUE_TOO_MANY_SITES_PER_ADGROUP = 'TOO_MANY_SITES_PER_ADGROUP';
	/**
	 * Constant for value 'TOO_MANY_SITES_PER_CAMPAIGN'
	 * Meta informations :
	 * 	- documentation : Too many sites per campaign.
	 * @return string 'TOO_MANY_SITES_PER_CAMPAIGN'
	 */
	const VALUE_TOO_MANY_SITES_PER_CAMPAIGN = 'TOO_MANY_SITES_PER_CAMPAIGN';
	/**
	 * Constant for value 'TOO_MANY_CRITERIA_PER_ACCOUNT'
	 * Meta informations :
	 * 	- documentation : Too many campaign level negative keywords + negative sites + geo targets for the account.
	 * @return string 'TOO_MANY_CRITERIA_PER_ACCOUNT'
	 */
	const VALUE_TOO_MANY_CRITERIA_PER_ACCOUNT = 'TOO_MANY_CRITERIA_PER_ACCOUNT';
	/**
	 * Constant for value 'UNKNOWN'
	 * @return string 'UNKNOWN'
	 */
	const VALUE_UNKNOWN = 'UNKNOWN';
	/**
	 * Constructor
	 * @return GGAdwordsTypeQuotaErrorReason
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
		return in_array($_value,array(self::VALUE_TOO_MANY_ADGROUPS_PER_CAMPAIGN,self::VALUE_TOO_MANY_CAMPAIGNS_PER_ACCOUNT,self::VALUE_TOO_MANY_CONVERSION_TYPES_PER_ACCOUNT,self::VALUE_TOO_MANY_KEYWORDS_PER_ADGROUP,self::VALUE_TOO_MANY_KEYWORDS_PER_CAMPAIGN,self::VALUE_TOO_MANY_KEYWORDS_PER_CUSTOMER,self::VALUE_TOO_MANY_SITES_PER_ADGROUP,self::VALUE_TOO_MANY_SITES_PER_CAMPAIGN,self::VALUE_TOO_MANY_CRITERIA_PER_ACCOUNT,self::VALUE_UNKNOWN));
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