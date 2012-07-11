<?php
/**
 * Class file for EbayTradingTypeSellerProfilePreferencesType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellerProfilePreferencesType
 * Documentation : Type defining the <b>SellerProfilePreferences</b> container. This container consists of a flag that indicates whether or not the seller has opted into Business Policies, as well as a list of Business Policies profiles that have been set up for the seller's account. <br><br> <span class="tablenote"><strong>Note:</strong> Beginning with Version 763, the new Business Policies Management API and related Trading API containers/fields become available for testing in the Sandbox environment. In May 2012, Business Policies becomes fully functional and sellers can apply Business Policies profiles to live eBay listings. </span>
 * @date 04/07/2012
 */
class EbayTradingTypeSellerProfilePreferencesType extends EbayTradingWsdlClass
{
	/**
	 * The SellerProfileOptedIn
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If included and set to true, this boolean flag indicates that a seller has opted in to Business Policies. If set to false, it means the seller has not opted into Business Policies. If the seller wants to use some features that are only provided by this service, they must opt in. <br><br> <span class="tablenote"><strong>Note:</strong> Beginning with Version 763, the new Business Policies Management API and related Trading API containers/fields become available for testing in the Sandbox environment. In May 2012, Business Policies becomes fully functional and sellers can apply Business Policies profiles to live eBay listings. </span>
	 * @var boolean
	 */
	public $SellerProfileOptedIn;
	/**
	 * The SupportedSellerProfiles
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container for all Business Policies profiles established for a seller's account. Returned only if SellerProfileOptedIn field is set to true. <br><br> <span class="tablenote"><strong>Note:</strong> Beginning with Version 763, the new Business Policies Management API and related Trading API containers/fields become available for testing in the Sandbox environment. In May 2012, Business Policies becomes fully functional and sellers can apply Business Policies profiles to live eBay listings. </span>
	 * @var EbayTradingTypeSupportedSellerProfilesType
	 */
	public $SupportedSellerProfiles;
	/**
	 * Constructor
	 * @param boolean SellerProfileOptedIn
	 * @param EbayTradingTypeSupportedSellerProfilesType SupportedSellerProfiles
	 * @return EbayTradingTypeSellerProfilePreferencesType
	 */
	public function __construct($_SellerProfileOptedIn = null,$_SupportedSellerProfiles = null)
	{
		parent::__construct(array('SellerProfileOptedIn'=>$_SellerProfileOptedIn,'SupportedSellerProfiles'=>$_SupportedSellerProfiles));
	}
	/**
	 * Set SellerProfileOptedIn
	 * @param boolean SellerProfileOptedIn
	 * @return boolean
	 */
	public function setSellerProfileOptedIn($_SellerProfileOptedIn)
	{
		return ($this->SellerProfileOptedIn = $_SellerProfileOptedIn);
	}
	/**
	 * Get SellerProfileOptedIn
	 * @return boolean
	 */
	public function getSellerProfileOptedIn()
	{
		return $this->SellerProfileOptedIn;
	}
	/**
	 * Set SupportedSellerProfiles
	 * @param SupportedSellerProfilesType SupportedSellerProfiles
	 * @return SupportedSellerProfilesType
	 */
	public function setSupportedSellerProfiles($_SupportedSellerProfiles)
	{
		return ($this->SupportedSellerProfiles = $_SupportedSellerProfiles);
	}
	/**
	 * Get SupportedSellerProfiles
	 * @return EbayTradingTypeSupportedSellerProfilesType
	 */
	public function getSupportedSellerProfiles()
	{
		return $this->SupportedSellerProfiles;
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