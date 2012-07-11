<?php
/**
 * Class file for EbayTradingTypeEndItemRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeEndItemRequestType
 * Documentation : Ends the specified item listing before the date and time at which it would normally end per the listing duration.&nbsp;<b>Also for Half.com</b>.
 * @date 04/07/2012
 */
class EbayTradingTypeEndItemRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique item ID that identifies the item listing to end. <br><br> For Half.com listings, you can either specify ItemID or SellerInventoryID. <br><br> Applicable to Half.com.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The EndingReason
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the seller's reason for ending the listing early. This field is required if the seller is ending the item early and the item did not successfully sell. <br><br> Applicable to Half.com.
	 * @var EbayTradingTypeEndReasonCodeType
	 */
	public $EndingReason;
	/**
	 * The SellerInventoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier that the seller specified when they listed the Half.com item. For Half.com items, you can either specify ItemID or SellerInventoryID. If you specify both ItemID and SellerInventoryID, they must be for the same item (otherwise an error will occur). <br><br> Applicable only to Half.com.
	 * @var string
	 */
	public $SellerInventoryID;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param EbayTradingTypeEndReasonCodeType EndingReason
	 * @param string SellerInventoryID
	 * @return EbayTradingTypeEndItemRequestType
	 */
	public function __construct($_ItemID = null,$_EndingReason = null,$_SellerInventoryID = null)
	{
		EbayTradingWsdlClass::__construct(array('ItemID'=>$_ItemID,'EndingReason'=>$_EndingReason,'SellerInventoryID'=>$_SellerInventoryID));
	}
	/**
	 * Set ItemID
	 * @param ItemIDType ItemID
	 * @return ItemIDType
	 */
	public function setItemID($_ItemID)
	{
		return ($this->ItemID = EbayTradingTypeItemIDType::valueIsValid($_ItemID)?$_ItemID:null);
	}
	/**
	 * Get ItemID
	 * @return EbayTradingTypeItemIDType
	 */
	public function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * Set EndingReason
	 * @param EndReasonCodeType EndingReason
	 * @return EndReasonCodeType
	 */
	public function setEndingReason($_EndingReason)
	{
		return ($this->EndingReason = EbayTradingTypeEndReasonCodeType::valueIsValid($_EndingReason)?$_EndingReason:null);
	}
	/**
	 * Get EndingReason
	 * @return EbayTradingTypeEndReasonCodeType
	 */
	public function getEndingReason()
	{
		return $this->EndingReason;
	}
	/**
	 * Set SellerInventoryID
	 * @param string SellerInventoryID
	 * @return string
	 */
	public function setSellerInventoryID($_SellerInventoryID)
	{
		return ($this->SellerInventoryID = $_SellerInventoryID);
	}
	/**
	 * Get SellerInventoryID
	 * @return string
	 */
	public function getSellerInventoryID()
	{
		return $this->SellerInventoryID;
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