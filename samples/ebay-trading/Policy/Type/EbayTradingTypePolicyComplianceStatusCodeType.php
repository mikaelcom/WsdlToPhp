<?php
/**
 * Class file for EbayTradingTypePolicyComplianceStatusCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePolicyComplianceStatusCodeType
 * @date 04/07/2012
 */
class EbayTradingTypePolicyComplianceStatusCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Good'
	 * Meta informations :
	 * 	- documentation : You're doing a good job of selling and are in line with eBay policies. <br><br> Be sure to continue to follow eBay rules in your selling activities. While your risk of restrictions is low, a future policy violation could result in a lower policy-compliance rating.
	 * @return string 'Good'
	 */
	const VALUE_GOOD = 'Good';
	/**
	 * Constant for value 'Fair'
	 * Meta informations :
	 * 	- documentation : You could do a better job of following eBay policies and you are at risk of having your listings canceled. <br><br> Check to see what policies you violated and what steps you can take to avoid those mistakes in the future. Additonal violations could cause eBay to cancel your listings.
	 * @return string 'Fair'
	 */
	const VALUE_FAIR = 'Fair';
	/**
	 * Constant for value 'Poor'
	 * Meta informations :
	 * 	- documentation : You are doing a poor job of following the eBay selling policies and rules. Your selling status and privileges are at risk. <br><br> Check to see what policies you have violated and take steps improve your selling practices. Additonal violations could cause eBay to cancel your listings and/or add restrictions on your account. You could lose your PowerSeller status and privileges.
	 * @return string 'Poor'
	 */
	const VALUE_POOR = 'Poor';
	/**
	 * Constant for value 'Failing'
	 * Meta informations :
	 * 	- documentation : You need to increase your compliance with the eBay selling policies and rules immediately. Your account is at risk and may be suspended. <br><br> Check the policies you violated and improve your selling practices immediately. Additonal violations could cause eBay to cancel your listings, add restrictions on your account, suspend your account, or take other measures. You could lose your PowerSeller status and privileges.
	 * @return string 'Failing'
	 */
	const VALUE_FAILING = 'Failing';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypePolicyComplianceStatusCodeType
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
		return in_array($_value,array(self::VALUE_GOOD,self::VALUE_FAIR,self::VALUE_POOR,self::VALUE_FAILING,self::VALUE_CUSTOMCODE));
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