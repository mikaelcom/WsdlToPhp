<?php
/**
 * Class file for EbayTradingTypeNonProfitSocialAddressType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeNonProfitSocialAddressType
 * Documentation : Type defining the <b>NonProfitSocialAddress</b> container, which identifies the nonprofit organization's social networking site account ID. A <b>NonProfitSocialAddress</b> container will exist for each social networking site that the charity organization is asssociated with.
 * @date 04/07/2012
 */
class EbayTradingTypeNonProfitSocialAddressType extends EbayTradingWsdlClass
{
	/**
	 * The SocialAddressType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Enumeration value that indicates the social networking site that the nonprofit charity organization is associated with. This is a required field for each social networking account associated with the nonprofit organzation.
	 * @var EbayTradingTypeSocialAddressTypeCodeType
	 */
	public $SocialAddressType;
	/**
	 * The SocialAddressId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The account ID/handle associated with the nonprofit charity organization's social networking site. This is a required field for each social networking account associated with the nonprofit organzation.
	 * @var string
	 */
	public $SocialAddressId;
	/**
	 * Constructor
	 * @param EbayTradingTypeSocialAddressTypeCodeType SocialAddressType
	 * @param string SocialAddressId
	 * @return EbayTradingTypeNonProfitSocialAddressType
	 */
	public function __construct($_SocialAddressType = null,$_SocialAddressId = null)
	{
		parent::__construct(array('SocialAddressType'=>$_SocialAddressType,'SocialAddressId'=>$_SocialAddressId));
	}
	/**
	 * Set SocialAddressType
	 * @param SocialAddressTypeCodeType SocialAddressType
	 * @return SocialAddressTypeCodeType
	 */
	public function setSocialAddressType($_SocialAddressType)
	{
		return ($this->SocialAddressType = EbayTradingTypeSocialAddressTypeCodeType::valueIsValid($_SocialAddressType)?$_SocialAddressType:null);
	}
	/**
	 * Get SocialAddressType
	 * @return EbayTradingTypeSocialAddressTypeCodeType
	 */
	public function getSocialAddressType()
	{
		return $this->SocialAddressType;
	}
	/**
	 * Set SocialAddressId
	 * @param string SocialAddressId
	 * @return string
	 */
	public function setSocialAddressId($_SocialAddressId)
	{
		return ($this->SocialAddressId = $_SocialAddressId);
	}
	/**
	 * Get SocialAddressId
	 * @return string
	 */
	public function getSocialAddressId()
	{
		return $this->SocialAddressId;
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