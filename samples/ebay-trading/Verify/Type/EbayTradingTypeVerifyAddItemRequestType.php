<?php
/**
 * Class file for EbayTradingTypeVerifyAddItemRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeVerifyAddItemRequestType
 * Documentation : Enables a seller to specify the definition of a new item and submit the definition to eBay without creating a listing.&nbsp;<b>Also for Half.com</b>. <br><br> Sellers who engage in cross-border trade on sites that require a recoupment agreement, must agree to the recoupment terms before adding or verifying items. This agreement allows eBay to reimburse a buyer during a dispute and then recoup the cost from the seller. The US site is a recoupment site, and the agreement is located <a href="https://scgi.ebay.com/ws/eBayISAPI.dll?CBTRecoupAgreement">here</a>. The list of the sites where a user has agreed to the recoupment terms is returned by the GetUser response.
 * @date 04/07/2012
 */
class EbayTradingTypeVerifyAddItemRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The Item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Root container holding all values that define a new listing.
	 * @var EbayTradingTypeItemType
	 */
	public $Item;
	/**
	 * The IncludeExpressRequirements
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates if the response should include detailed data relating to whether an item would qualify as an Express listing. For information about the Express-related data that can be returned when IncludeExpressRequirements is set to true, see the response of VerifyAddItem and see the eBay Web Services Guide.
	 * @var boolean
	 */
	public $IncludeExpressRequirements;
	/**
	 * The ExternalProductID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <b>Deprecated.</b> This field will be removed from the schema in a future release. Recommended usage as of release 439 varies for eBay.com listings and Half.com listings. <br><br> For eBay.com listings: As of release 439, this field can still be passed in, but we recommend that you update your applications to use the ExternalProductID field defined on the item instead (i.e., Item.ExternalProductID). If you specify both Item.ExternalProductID and this field in the same request, eBay uses the value in Item.ExternalProductID and ignores the value in this field. See Item.ExternalProductID for information on using an external ID for eBay.com listings. <br><br> For Half.com listings: As of release 439, this field is required for Half.com listings. Causes Half.com to list the item with Pre-filled Item Information based on an ISBN value or other supported external ID, plus other meta-data that you specify. See the eBay Web Services guide for information about listing to Half.com.
	 * @var EbayTradingTypeExternalProductIDType
	 */
	public $ExternalProductID;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemType Item
	 * @param boolean IncludeExpressRequirements
	 * @param EbayTradingTypeExternalProductIDType ExternalProductID
	 * @return EbayTradingTypeVerifyAddItemRequestType
	 */
	public function __construct($_Item = null,$_IncludeExpressRequirements = null,$_ExternalProductID = null)
	{
		EbayTradingWsdlClass::__construct(array('Item'=>$_Item,'IncludeExpressRequirements'=>$_IncludeExpressRequirements,'ExternalProductID'=>$_ExternalProductID));
	}
	/**
	 * Set Item
	 * @param ItemType Item
	 * @return ItemType
	 */
	public function setItem($_Item)
	{
		return ($this->Item = $_Item);
	}
	/**
	 * Get Item
	 * @return EbayTradingTypeItemType
	 */
	public function getItem()
	{
		return $this->Item;
	}
	/**
	 * Set IncludeExpressRequirements
	 * @param boolean IncludeExpressRequirements
	 * @return boolean
	 */
	public function setIncludeExpressRequirements($_IncludeExpressRequirements)
	{
		return ($this->IncludeExpressRequirements = $_IncludeExpressRequirements);
	}
	/**
	 * Get IncludeExpressRequirements
	 * @return boolean
	 */
	public function getIncludeExpressRequirements()
	{
		return $this->IncludeExpressRequirements;
	}
	/**
	 * Set ExternalProductID
	 * @param ExternalProductIDType ExternalProductID
	 * @return ExternalProductIDType
	 */
	public function setExternalProductID($_ExternalProductID)
	{
		return ($this->ExternalProductID = $_ExternalProductID);
	}
	/**
	 * Get ExternalProductID
	 * @return EbayTradingTypeExternalProductIDType
	 */
	public function getExternalProductID()
	{
		return $this->ExternalProductID;
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