<?php
/**
 * Class file for EbayTradingTypeReviseItemRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeReviseItemRequestType
 * Documentation : Enables a seller to change the properties of a currently active listing.&nbsp;<b>Also for Half.com</b>. <br> <br> After one item in a multi-quantity fixed-price listing has been sold, you can not the values in the Title, Primary Category, Secondary Category, Listing Duration, and Listing Type fields for that listing. However, all other fields in the multi-quantity, fixed-price listing are editable. <br> <br> Inputs are the Item ID of the listing you are revising, and the field or fields that you are updating.
 * @date 04/07/2012
 */
class EbayTradingTypeReviseItemRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The Item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Child elements hold the values for properties that are changing. The Item.ItemID property must always be set to the ID of the item listing being changed. Set values in the Item object only for those properties that are changing. Use DeletedField to remove a property. <br><br> Applicable to Half.com.
	 * @var EbayTradingTypeItemType
	 */
	public $Item;
	/**
	 * The DeletedField
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Specifies the name of a field to delete from a listing. See the eBay Trading API guide for rules on deleting values when revising items. Also see the relevant field descriptions to determine when to use DeletedField (and potential consequences). The request can contain zero, one, or many instances of DeletedField (one for each field to be deleted). <br><br> You cannot delete required fields from a listing. <br><br> Some fields are optional when you first list an item (e.g., SecondaryCategory), but once they are set they cannot be deleted when you revise an item. Some optional fields cannot be deleted from auction listings if the item has bids and/or ends within 12 hours. Some optional fields cannot be deleted if other fields depend on them. <br><br> Some data (such as Variation nodes within Variations) can't be deleted by using DeletedFields. See the relevant field descriptions for how to delete such data. See the eBay Web Services guide for rules on removing values when revising items. Also see the relevant field descriptions for details on when to use DeletedField (and potential consequences). <br><br> DeletedField accepts the following path names, which delete the corresponding nodes: <br><br> Item.ApplicationData<br> Item.AttributeSetArray<br> Item.BuyItNowPrice<br> Item.ConditionID<br> Item.ExtendedSellerContactDetails<br> Item.ClassifiedAdContactByEmailEnabled<br> Item.ItemSpecifics<br> Item.ListingCheckoutRedirectPreference.ProStoresStoreName<br> Item.ListingCheckoutRedirectPreference.SellerThirdPartyUsername<br> Item.ListingDesigner.LayoutID<br> Item.ListingDesigner.ThemeID<br> Item.ListingDetails.MinimumBestOfferMessage<br> Item.ListingDetails.MinimumBestOfferPrice<br> Item.ListingEnhancement[Value]<br> Item.PayPalEmailAddress<br> Item.PictureDetails.GalleryURL<br> Item.PictureDetails.PictureURL<br> Item.PostalCode<br> Item.ProductListingDetails<br> Item.SellerContactDetails<br> Item.SellerContactDetails.CompanyName<br> Item.SellerContactDetails.County<br> Item.SellerContactDetails.InternationalStreet<br> Item.SellerContactDetails.Phone2AreaOrCityCode<br> Item.SellerContactDetails.Phone2CountryCode<br> Item.SellerContactDetails.Phone2CountryPrefix<br> Item.SellerContactDetails.Phone2LocalNumber<br> Item.SellerContactDetails.PhoneAreaOrCityCode<br> Item.SellerContactDetails.PhoneCountryCode<br> Item.SellerContactDetails.PhoneCountryPrefix<br> Item.SellerContactDetails.PhoneLocalNumber<br> Item.SellerContactDetails.Street<br> Item.SellerContactDetails.Street2<br> Item.ShippingDetails.PaymentInstructions<br> Item.SKU (unless InventoryTrackingMethod is SKU)<br> Item.SubTitle <br><br> These values are case-sensitive. Use values that match the case of the schema element names (Item.PictureDetails.GalleryURL) or make the initial letter of each field name lowercase (item.pictureDetails.galleryURL). However, do not change the case of letters in the middle of a field name. For example, item.picturedetails.galleryUrl is not allowed. <br><br> To delete a listing enhancement like BoldTitle, specify the value you are deleting in square brackets ("[ ]"); for example, Item.ListingEnhancement[BoldTitle].
	 * @var string
	 */
	public $DeletedField;
	/**
	 * The VerifyOnly
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : When the VerifyOnly boolean tag value is supplied as 'true', the response will include the calculated listing price change if there is an increase in the BIN/Start price, but does not persist the values in DB. This call is similar to VerifyAddItem in revise mode.
	 * @var boolean
	 */
	public $VerifyOnly;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemType Item
	 * @param string DeletedField
	 * @param boolean VerifyOnly
	 * @return EbayTradingTypeReviseItemRequestType
	 */
	public function __construct($_Item = null,$_DeletedField = null,$_VerifyOnly = null)
	{
		EbayTradingWsdlClass::__construct(array('Item'=>$_Item,'DeletedField'=>$_DeletedField,'VerifyOnly'=>$_VerifyOnly));
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