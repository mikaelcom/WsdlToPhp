<?php
/**
 * Class file for PayPalTypeIdentificationInfoType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeIdentificationInfoType
 * @date 14/07/2012
 */
class PayPalTypeIdentificationInfoType extends PayPalWsdlClass
{
	/**
	 * The MobileIDInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Mobile specific buyer identification.
	 * @var PayPalTypeMobileIDInfoType
	 */
	public $MobileIDInfo;
	/**
	 * The RememberMeIDInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Contains login bypass information.
	 * @var PayPalTypeRememberMeIDInfoType
	 */
	public $RememberMeIDInfo;
	/**
	 * The IdentityTokenInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Identity Access Token.
	 * @var PayPalTypeIdentityTokenInfoType
	 */
	public $IdentityTokenInfo;
	/**
	 * Constructor
	 * @param PayPalTypeMobileIDInfoType MobileIDInfo
	 * @param PayPalTypeRememberMeIDInfoType RememberMeIDInfo
	 * @param PayPalTypeIdentityTokenInfoType IdentityTokenInfo
	 * @return PayPalTypeIdentificationInfoType
	 */
	public function __construct($_MobileIDInfo = null,$_RememberMeIDInfo = null,$_IdentityTokenInfo = null)
	{
		parent::__construct(array('MobileIDInfo'=>$_MobileIDInfo,'RememberMeIDInfo'=>$_RememberMeIDInfo,'IdentityTokenInfo'=>$_IdentityTokenInfo));
	}
	/**
	 * Set MobileIDInfo
	 * @param MobileIDInfoType MobileIDInfo
	 * @return MobileIDInfoType
	 */
	public function setMobileIDInfo($_MobileIDInfo)
	{
		return ($this->MobileIDInfo = $_MobileIDInfo);
	}
	/**
	 * Get MobileIDInfo
	 * @return PayPalTypeMobileIDInfoType
	 */
	public function getMobileIDInfo()
	{
		return $this->MobileIDInfo;
	}
	/**
	 * Set RememberMeIDInfo
	 * @param RememberMeIDInfoType RememberMeIDInfo
	 * @return RememberMeIDInfoType
	 */
	public function setRememberMeIDInfo($_RememberMeIDInfo)
	{
		return ($this->RememberMeIDInfo = $_RememberMeIDInfo);
	}
	/**
	 * Get RememberMeIDInfo
	 * @return PayPalTypeRememberMeIDInfoType
	 */
	public function getRememberMeIDInfo()
	{
		return $this->RememberMeIDInfo;
	}
	/**
	 * Set IdentityTokenInfo
	 * @param IdentityTokenInfoType IdentityTokenInfo
	 * @return IdentityTokenInfoType
	 */
	public function setIdentityTokenInfo($_IdentityTokenInfo)
	{
		return ($this->IdentityTokenInfo = $_IdentityTokenInfo);
	}
	/**
	 * Get IdentityTokenInfo
	 * @return PayPalTypeIdentityTokenInfoType
	 */
	public function getIdentityTokenInfo()
	{
		return $this->IdentityTokenInfo;
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