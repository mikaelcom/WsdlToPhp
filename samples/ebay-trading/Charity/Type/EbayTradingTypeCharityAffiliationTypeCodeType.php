<?php
/**
 * Class file for EbayTradingTypeCharityAffiliationTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCharityAffiliationTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeCharityAffiliationTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Community'
	 * Meta informations :
	 * 	- documentation : (out) The specified nonprofit charity organization has a community affiliation.
	 * @return string 'Community'
	 */
	const VALUE_COMMUNITY = 'Community';
	/**
	 * Constant for value 'Direct'
	 * Meta informations :
	 * 	- documentation : (out) The specified nonprofit charity organization has direct affiliation.
	 * @return string 'Direct'
	 */
	const VALUE_DIRECT = 'Direct';
	/**
	 * Constant for value 'Remove'
	 * Meta informations :
	 * 	- documentation : (out) The specified nonprofit charity organization is no longer affiliated.
	 * @return string 'Remove'
	 */
	const VALUE_REMOVE = 'Remove';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeCharityAffiliationTypeCodeType
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
		return in_array($_value,array(self::VALUE_COMMUNITY,self::VALUE_DIRECT,self::VALUE_REMOVE,self::VALUE_CUSTOMCODE));
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