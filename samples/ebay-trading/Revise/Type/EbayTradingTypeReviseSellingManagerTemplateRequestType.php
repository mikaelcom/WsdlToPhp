<?php
/**
 * Class file for EbayTradingTypeReviseSellingManagerTemplateRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeReviseSellingManagerTemplateRequestType
 * Documentation : Revises a Selling Manager template. This call is subject to change without notice; the deprecation process is inapplicable to this call.
 * @date 04/07/2012
 */
class EbayTradingTypeReviseSellingManagerTemplateRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The SaleTemplateID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ID of the sale template. You can obtain a SaleTemplateID by calling GetSellingManagerInventory or AddSellingManagerTemplate.
	 * @var long
	 */
	public $SaleTemplateID;
	/**
	 * The ProductID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Reserved for future use.
	 * @var long
	 */
	public $ProductID;
	/**
	 * The SaleTemplateName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of the sale template.
	 * @var string
	 */
	public $SaleTemplateName;
	/**
	 * The Item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Required. In Item.ItemID, specify the same value as the value you specified in SaleTemplateID. Other child elements hold the values for properties that are being changed. Set values in the Item object only for those properties that are changing. Use DeletedField to remove a property.
	 * @var EbayTradingTypeItemType
	 */
	public $Item;
	/**
	 * The DeletedField
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Specifies the name of a field to remove from a template. See the eBay Web Services guide for rules on removing values when revising items. Also see the relevant field descriptions to determine when to use DeletedField (and potential consequences). The request can contain zero, one, or many instances of DeletedField (one for each field to be removed). DeletedField accepts the following path names, which remove the corresponding fields: <br><br> Item.ApplicationData<br> Item.AttributeSetArray<br> Item.ConditionID<br> Item.ItemSpecifics<br> Item.ListingCheckoutRedirectPreference.ProStoresStoreName<br> Item.ListingCheckoutRedirectPreference.SellerThirdPartyUsername<br> Item.ListingDesigner.LayoutID<br> Item.ListingDesigner.ThemeID<br> Item.ListingEnhancement[Value]<br> Item.PayPalEmailAddress<br> Item.PictureDetails.GalleryURL<br> Item.PictureDetails.PictureURL<br> Item.PostalCode<br> Item.ProductListingDetails<br> item.ShippingDetails.PaymentInstructions<br> item.SKU<br> Item.SubTitle<br><br> These values are case-sensitive. Use values that match the case of the schema element names (Item.PictureDetails.GalleryURL) or make the initial letter of each field name lowercase (item.pictureDetails.galleryURL). However, do not change the case of letters in the middle of a field name (e.g., item.picturedetails.galleryUrl is not allowed). <br><br> Depending on how you have configured your pictures, you cannot necessarily delete both GalleryURL and PictureURL from an existing listing. If GalleryType was already set for the item you are revising, you cannot remove it. This means you still need to include either a first picture or a gallery URL in your revised listing.
	 * @var string
	 */
	public $DeletedField;
	/**
	 * The VerifyOnly
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Use this field to verify the template instead of revising it.
	 * @var boolean
	 */
	public $VerifyOnly;
	/**
	 * Constructor
	 * @param long SaleTemplateID
	 * @param long ProductID
	 * @param string SaleTemplateName
	 * @param EbayTradingTypeItemType Item
	 * @param string DeletedField
	 * @param boolean VerifyOnly
	 * @return EbayTradingTypeReviseSellingManagerTemplateRequestType
	 */
	public function __construct($_SaleTemplateID = null,$_ProductID = null,$_SaleTemplateName = null,$_Item = null,$_DeletedField = null,$_VerifyOnly = null)
	{
		EbayTradingWsdlClass::__construct(array('SaleTemplateID'=>$_SaleTemplateID,'ProductID'=>$_ProductID,'SaleTemplateName'=>$_SaleTemplateName,'Item'=>$_Item,'DeletedField'=>$_DeletedField,'VerifyOnly'=>$_VerifyOnly));
	}
	/**
	 * Set SaleTemplateID
	 * @param long SaleTemplateID
	 * @return long
	 */
	public function setSaleTemplateID($_SaleTemplateID)
	{
		return ($this->SaleTemplateID = $_SaleTemplateID);
	}
	/**
	 * Get SaleTemplateID
	 * @return long
	 */
	public function getSaleTemplateID()
	{
		return $this->SaleTemplateID;
	}
	/**
	 * Set ProductID
	 * @param long ProductID
	 * @return long
	 */
	public function setProductID($_ProductID)
	{
		return ($this->ProductID = $_ProductID);
	}
	/**
	 * Get ProductID
	 * @return long
	 */
	public function getProductID()
	{
		return $this->ProductID;
	}
	/**
	 * Set SaleTemplateName
	 * @param string SaleTemplateName
	 * @return string
	 */
	public function setSaleTemplateName($_SaleTemplateName)
	{
		return ($this->SaleTemplateName = $_SaleTemplateName);
	}
	/**
	 * Get SaleTemplateName
	 * @return string
	 */
	public function getSaleTemplateName()
	{
		return $this->SaleTemplateName;
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
	 * Set DeletedField
	 * @param string DeletedField
	 * @return string
	 */
	public function setDeletedField($_DeletedField)
	{
		return ($this->DeletedField = $_DeletedField);
	}
	/**
	 * Get DeletedField
	 * @return string
	 */
	public function getDeletedField()
	{
		return $this->DeletedField;
	}
	/**
	 * Set VerifyOnly
	 * @param boolean VerifyOnly
	 * @return boolean
	 */
	public function setVerifyOnly($_VerifyOnly)
	{
		return ($this->VerifyOnly = $_VerifyOnly);
	}
	/**
	 * Get VerifyOnly
	 * @return boolean
	 */
	public function getVerifyOnly()
	{
		return $this->VerifyOnly;
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