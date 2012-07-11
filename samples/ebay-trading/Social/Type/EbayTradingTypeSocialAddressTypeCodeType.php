<?php
/**
 * Class file for EbayTradingTypeSocialAddressTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSocialAddressTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeSocialAddressTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Facebook'
	 * Meta informations :
	 * 	- documentation : This value indicates that the <b>Charity.NonProfitSocialAddress.SocialAddressId</b> is associated with the nonprofit company's Facebook account.
	 * @return string 'Facebook'
	 */
	const VALUE_FACEBOOK = 'Facebook';
	/**
	 * Constant for value 'Twitter'
	 * Meta informations :
	 * 	- documentation : This value indicates that the <b>Charity.NonProfitSocialAddress.SocialAddressId</b> is associated with the nonprofit company's Twitter account.
	 * @return string 'Twitter'
	 */
	const VALUE_TWITTER = 'Twitter';
	/**
	 * Constant for value 'Linkedin'
	 * Meta informations :
	 * 	- documentation : This value indicates that the <b>Charity.NonProfitSocialAddress.SocialAddressId</b> is associated with the nonprofit company's LinkedIn account.
	 * @return string 'Linkedin'
	 */
	const VALUE_LINKEDIN = 'Linkedin';
	/**
	 * Constant for value 'GooglePlus'
	 * Meta informations :
	 * 	- documentation : This value indicates that the <b>Charity.NonProfitSocialAddress.SocialAddressId</b> is associated with the nonprofit company's Google+ account.
	 * @return string 'GooglePlus'
	 */
	const VALUE_GOOGLEPLUS = 'GooglePlus';
	/**
	 * Constant for value 'Myspace'
	 * Meta informations :
	 * 	- documentation : This value indicates that the <b>Charity.NonProfitSocialAddress.SocialAddressId</b> is associated with the nonprofit company's MySpace account.
	 * @return string 'Myspace'
	 */
	const VALUE_MYSPACE = 'Myspace';
	/**
	 * Constant for value 'Orkut'
	 * Meta informations :
	 * 	- documentation : This value indicates that the <b>Charity.NonProfitSocialAddress.SocialAddressId</b> is associated with the nonprofit company's Orkut account.
	 * @return string 'Orkut'
	 */
	const VALUE_ORKUT = 'Orkut';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeSocialAddressTypeCodeType
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
		return in_array($_value,array(self::VALUE_FACEBOOK,self::VALUE_TWITTER,self::VALUE_LINKEDIN,self::VALUE_GOOGLEPLUS,self::VALUE_MYSPACE,self::VALUE_ORKUT,self::VALUE_CUSTOMCODE));
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