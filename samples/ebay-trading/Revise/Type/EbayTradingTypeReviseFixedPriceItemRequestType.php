<?php
/**
 * Class file for EbayTradingTypeReviseFixedPriceItemRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeReviseFixedPriceItemRequestType
 * Documentation : Enables a seller to change the properties of a currently active fixed-price listing (including multi-variation listings).
 * @date 04/07/2012
 */
class EbayTradingTypeReviseFixedPriceItemRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The Item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Child elements hold the values for item details that you want to change. The Item.ItemID must always be set to the ID of the listing being changed. Only specify Item fields for the details that are changing. Unless otherwise specified in the field descriptions below, the listing retains its existing values for fields that you don't pass in the ReviseFixedPriceItem request. Use DeletedField to remove a field from the listing.
	 * @var EbayTradingTypeItemType
	 */
	public $Item;
	/**
	 * The DeletedField
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Specifies the name of a field to delete from a listing. The request can contain zero, one, or many instances of DeletedField (one for each field to be deleted). See the relevant field descriptions to determine when to use DeletedField (and potential consequences). <br><br> You cannot delete required fields from a listing. <br><br> Some fields are optional when you first list an item (e.g., SecondaryCategory), but once they are set they cannot be deleted when you revise an item. Some optional fields cannot be deleted if the item has bids and/or ends within 12 hours. Some optional fields cannot be deleted if other fields depend on them. See the eBay Trading API guide for rules on removing values when revising items. <br><br> Some data (such as Variation nodes within Variations) can't be deleted by using DeletedFields. See the relevant field descriptions for how to delete such data. <br><br> DeletedField accepts the following path names, which delete the corresponding nodes: <br><br> Item.ApplicationData<br> Item.AttributeSetArray<br> Item.ConditionID<br> Item.ItemSpecifics<br> Item.ListingCheckoutRedirectPreference.ProStoresStoreName<br> Item.ListingCheckoutRedirectPreference.SellerThirdPartyUsername<br> Item.ListingDesigner.LayoutID<br> Item.ListingDesigner.ThemeID<br> Item.ListingEnhancement[Value]<br> Item.PayPalEmailAddress<br> Item.PictureDetails.GalleryURL<br> Item.PictureDetails.PictureURL<br> Item.PostalCode<br> Item.ProductListingDetails<br> Item.SellerContactDetails<br> Item.SellerContactDetails.CompanyName<br> Item.SellerContactDetails.County<br> Item.SellerContactDetails.InternationalStreet<br> Item.SellerContactDetails.Phone2AreaOrCityCode<br> Item.SellerContactDetails.Phone2CountryCode<br> Item.SellerContactDetails.Phone2CountryPrefix<br> Item.SellerContactDetails.Phone2LocalNumber<br> Item.SellerContactDetails.PhoneAreaOrCityCode<br> Item.SellerContactDetails.PhoneCountryCode<br> Item.SellerContactDetails.PhoneCountryPrefix<br> Item.SellerContactDetails.PhoneLocalNumber<br> Item.SellerContactDetails.Street<br> Item.SellerContactDetails.Street2<br> Item.ShippingDetails.PaymentInstructions<br> Item.SKU (unless InventoryTrackingMethod is SKU)<br> Item.SubTitle <br><br> These values are case-sensitive. Use values that match the case of the schema element names (Item.PictureDetails.GalleryURL) or make the initial letter of each field name lowercase (item.pictureDetails.galleryURL). However, do not change the case of letters in the middle of a field name. For example, item.picturedetails.galleryUrl is not allowed. <br><br> To delete a listing enhancement like BoldTitle, specify the value you are deleting in square brackets ("[ ]"); for example, Item.ListingEnhancement[BoldTitle].
	 * @var string
	 */
	public $DeletedField;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemType Item
	 * @param string DeletedField
	 * @return EbayTradingTypeReviseFixedPriceItemRequestType
	 */
	public function __construct($_Item = null,$_DeletedField = null)
	{
		EbayTradingWsdlClass::__construct(array('Item'=>$_Item,'DeletedField'=>$_DeletedField));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>