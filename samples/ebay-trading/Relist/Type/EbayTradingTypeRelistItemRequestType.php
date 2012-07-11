<?php
/**
 * Class file for EbayTradingTypeRelistItemRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeRelistItemRequestType
 * Documentation : Enables a seller to take a single item (or a single multi-item listing) and re-list it on a specified eBay site.
 * @date 04/07/2012
 */
class EbayTradingTypeRelistItemRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The Item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Child elements hold the values for item properties that change for the item re-list. Item is a required input. At a minimum, the Item.ItemID property must be set to the ID of the listing being re-listed (a listing that ended in the past 90 days). By default, the new listing's Item object properties are the same as those of the original (ended) listing. By setting a new value in the Item object, the new listing uses the new value rather than the corresponding value from the old listing.
	 * @var EbayTradingTypeItemType
	 */
	public $Item;
	/**
	 * The DeletedField
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Specifies the name of the field to delete from a listing. See the eBay Web Services guide for rules on deleting values when relisting items. Also see the relevant field descriptions to determine when to use DeletedField (and potential consequences). The request can contain zero, one, or many instances of DeletedField (one for each field to be deleted). DeletedField accepts the following path names, which delete the corresponding nodes:<br><br> Item.ApplicationData<br> Item.AttributeSetArray<br> Item.BuyItNowPrice<br> Item.Charity<br> Item.ConditionID<br> Item.ItemSpecifics<br> Item.ListingCheckoutRedirectPreference.ProStoresStoreName<br> Item.ListingCheckoutRedirectPreference.SellerThirdPartyUsername<br> Item.ListingDesigner.LayoutID<br> Item.ListingDesigner.ThemeID<br> Item.ListingDetails.LocalListingDistance<br> Item.ListingDetails.MinimumBestOfferMessage<br> Item.ListingDetails.MinimumBestOfferPrice<br> Item.ListingEnhancement[Value]<br> Item.PayPalEmailAddress<br> Item.PictureDetails.GalleryURL<br> Item.PictureDetails.PictureURL<br> Item.PostalCode<br> Item.ProductListingDetails<br> Item.SecondaryCategory<br> Item.SellerContactDetails<br> Item.SellerContactDetails.CompanyName<br> Item.SellerContactDetails.County<br> Item.SellerContactDetails.InternationalStreet<br> Item.SellerContactDetails.Phone2AreaOrCityCode<br> Item.SellerContactDetails.Phone2CountryCode<br> Item.SellerContactDetails.Phone2CountryPrefix<br> Item.SellerContactDetails.Phone2LocalNumber<br> Item.SellerContactDetails.PhoneAreaOrCityCode<br> Item.SellerContactDetails.PhoneCountryCode<br> Item.SellerContactDetails.PhoneCountryPrefix<br> Item.SellerContactDetails.PhoneLocalNumber<br> Item.SellerContactDetails.Street<br> Item.SellerContactDetails.Street2<br> Item.ShippingDetails.PaymentInstructions<br> Item.SKU<br> Item.SubTitle<br> These values are case-sensitive. Use values that match the case of the schema element names (Item.PictureDetails.GalleryURL) or make the initial letter of each field name lowercase (item.pictureDetails.galleryURL). However, do not change the case of letters in the middle of a field name. For example, item.picturedetails.galleryUrl is not allowed.<br><br> To delete a listing enhancement like Featured, specify the value you are deleting; for example, Item.ListingEnhancement[Featured].
	 * @var string
	 */
	public $DeletedField;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemType Item
	 * @param string DeletedField
	 * @return EbayTradingTypeRelistItemRequestType
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