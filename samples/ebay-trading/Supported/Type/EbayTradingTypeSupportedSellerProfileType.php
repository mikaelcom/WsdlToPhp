<?php
/**
 * Class file for EbayTradingTypeSupportedSellerProfileType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSupportedSellerProfileType
 * Documentation : Type defining the <b>SupportedSellerProfile</b> container, which contains information related to specific Business Policies payment, return, and shipping policy profiles. The profile type is found in the <b>ProfileType</b> field. <br><br> <span class="tablenote"><strong>Note:</strong> Beginning with Version 763, the new Business Policies Management API and related Trading API containers/fields become available for testing in the Sandbox environment. In May 2012, Business Policies becomes fully functional and sellers can apply Business Policies profiles to live eBay listings. </span>
 * @date 04/07/2012
 */
class EbayTradingTypeSupportedSellerProfileType extends EbayTradingWsdlClass
{
	/**
	 * The ProfileID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier of a Business Policies profile. Returned only if a seller has opted in to Business Policies (SellerProfileOptedIn=true). <br><br> <span class="tablenote"><strong>Note:</strong> Beginning with Version 763, the new Business Policies Management API and related Trading API containers/fields become available for testing in the Sandbox environment. In May 2012, Business Policies becomes fully functional and sellers can apply Business Policies profiles to live eBay listings. </span>
	 * @var long
	 */
	public $ProfileID;
	/**
	 * The ProfileType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the type of the Business Policies profile. Valid values are PAYMENT, RETURN_POLICY, and SHIPPING. Returned only if a seller has opted in to Business Policies (SellerProfileOptedIn=true). <br><br> <span class="tablenote"><strong>Note:</strong> Beginning with Version 763, the new Business Policies Management API and related Trading API containers/fields become available for testing in the Sandbox environment. In May 2012, Business Policies becomes fully functional and sellers can apply Business Policies profiles to live eBay listings. </span>
	 * @var string
	 */
	public $ProfileType;
	/**
	 * The ProfileName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The seller-defined name for a Business Policy profile. Returned if SellerProfileOptedIn is true, and the seller has provided a name for the profile. <br><br> <span class="tablenote"><strong>Note:</strong> Beginning with Version 763, the new Business Policies Management API and related Trading API containers/fields become available for testing in the Sandbox environment. In May 2012, Business Policies becomes fully functional and sellers can apply Business Policies profiles to live eBay listings. </span>
	 * @var string
	 */
	public $ProfileName;
	/**
	 * The ShortSummary
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Seller-provided description of a business policy. Returned if SellerProfileOptedIn is true, and the seller has provided a description for the profile. <br><br> <span class="tablenote"><strong>Note:</strong> Beginning with Version 763, the new Business Policies Management API and related Trading API containers/fields become available for testing in the Sandbox environment. In May 2012, Business Policies becomes fully functional and sellers can apply Business Policies profiles to live eBay listings. </span>
	 * @var string
	 */
	public $ShortSummary;
	/**
	 * The CategoryGroup
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Identifies the group of categories that a Business Policies profile is associated with. Current values are ALL (referring to a group of categories that are non-motor vehicles) or MOTOR_VEHICLE (referring to categories associated with motor vehicles only). <br><br> <span class="tablenote"><strong>Note:</strong> Beginning with Version 763, the new Business Policies Management API and related Trading API containers/fields become available for testing in the Sandbox environment. In May 2012, Business Policies becomes fully functional and sellers can apply Business Policies profiles to live eBay listings. </span>
	 * @var EbayTradingTypeCategoryGroupType
	 */
	public $CategoryGroup;
	/**
	 * Constructor
	 * @param long ProfileID
	 * @param string ProfileType
	 * @param string ProfileName
	 * @param string ShortSummary
	 * @param EbayTradingTypeCategoryGroupType CategoryGroup
	 * @return EbayTradingTypeSupportedSellerProfileType
	 */
	public function __construct($_ProfileID = null,$_ProfileType = null,$_ProfileName = null,$_ShortSummary = null,$_CategoryGroup = null)
	{
		parent::__construct(array('ProfileID'=>$_ProfileID,'ProfileType'=>$_ProfileType,'ProfileName'=>$_ProfileName,'ShortSummary'=>$_ShortSummary,'CategoryGroup'=>$_CategoryGroup));
	}
	/**
	 * Set ProfileID
	 * @param long ProfileID
	 * @return long
	 */
	public function setProfileID($_ProfileID)
	{
		return ($this->ProfileID = $_ProfileID);
	}
	/**
	 * Get ProfileID
	 * @return long
	 */
	public function getProfileID()
	{
		return $this->ProfileID;
	}
	/**
	 * Set ProfileType
	 * @param string ProfileType
	 * @return string
	 */
	public function setProfileType($_ProfileType)
	{
		return ($this->ProfileType = $_ProfileType);
	}
	/**
	 * Get ProfileType
	 * @return string
	 */
	public function getProfileType()
	{
		return $this->ProfileType;
	}
	/**
	 * Set ProfileName
	 * @param string ProfileName
	 * @return string
	 */
	public function setProfileName($_ProfileName)
	{
		return ($this->ProfileName = $_ProfileName);
	}
	/**
	 * Get ProfileName
	 * @return string
	 */
	public function getProfileName()
	{
		return $this->ProfileName;
	}
	/**
	 * Set ShortSummary
	 * @param string ShortSummary
	 * @return string
	 */
	public function setShortSummary($_ShortSummary)
	{
		return ($this->ShortSummary = $_ShortSummary);
	}
	/**
	 * Get ShortSummary
	 * @return string
	 */
	public function getShortSummary()
	{
		return $this->ShortSummary;
	}
	/**
	 * Set CategoryGroup
	 * @param CategoryGroupType CategoryGroup
	 * @return CategoryGroupType
	 */
	public function setCategoryGroup($_CategoryGroup)
	{
		return ($this->CategoryGroup = $_CategoryGroup);
	}
	/**
	 * Get CategoryGroup
	 * @return EbayTradingTypeCategoryGroupType
	 */
	public function getCategoryGroup()
	{
		return $this->CategoryGroup;
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