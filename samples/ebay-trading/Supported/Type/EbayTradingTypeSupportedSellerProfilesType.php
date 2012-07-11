<?php
/**
 * Class file for EbayTradingTypeSupportedSellerProfilesType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSupportedSellerProfilesType
 * Documentation : Type defining the <b>SupportedSellerProfiles</b> container for all payment, return, and shipping policy profiles that a seller has defined for a site. <br><br> <span class="tablenote"><strong>Note:</strong> Beginning with Version 763, the new Business Policies Management API and related Trading API containers/fields become available for testing in the Sandbox environment. In May 2012, Business Policies becomes fully functional and sellers can apply Business Policies profiles to live eBay listings. </span>
 * @date 04/07/2012
 */
class EbayTradingTypeSupportedSellerProfilesType extends EbayTradingWsdlClass
{
	/**
	 * The SupportedSellerProfile
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Container consisting of information related to specific Business Policies payment, return, and shipping policy profiles. The profile type is found in the <b>ProfileType</b> field. <br><br> <span class="tablenote"><strong>Note:</strong> Beginning with Version 763, the new Business Policies Management API and related Trading API containers/fields become available for testing in the Sandbox environment. In May 2012, Business Policies becomes fully functional and sellers can apply Business Policies profiles to live eBay listings. </span>
	 * @var EbayTradingTypeSupportedSellerProfileType
	 */
	public $SupportedSellerProfile;
	/**
	 * Constructor
	 * @param EbayTradingTypeSupportedSellerProfileType SupportedSellerProfile
	 * @return EbayTradingTypeSupportedSellerProfilesType
	 */
	public function __construct($_SupportedSellerProfile = null)
	{
		parent::__construct(array('SupportedSellerProfile'=>$_SupportedSellerProfile));
	}
	/**
	 * Set SupportedSellerProfile
	 * @param SupportedSellerProfileType SupportedSellerProfile
	 * @return SupportedSellerProfileType
	 */
	public function setSupportedSellerProfile($_SupportedSellerProfile)
	{
		return ($this->SupportedSellerProfile = $_SupportedSellerProfile);
	}
	/**
	 * Get SupportedSellerProfile
	 * @return EbayTradingTypeSupportedSellerProfileType
	 */
	public function getSupportedSellerProfile()
	{
		return $this->SupportedSellerProfile;
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