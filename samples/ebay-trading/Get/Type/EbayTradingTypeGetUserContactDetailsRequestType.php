<?php
/**
 * Class file for EbayTradingTypeGetUserContactDetailsRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetUserContactDetailsRequestType
 * Documentation : Returns contact information for a specified user, given that a bidding relationship (as either a buyer or seller) exists between the caller and the user.
 * @date 04/07/2012
 */
class EbayTradingTypeGetUserContactDetailsRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An eBay item ID that uniquely identifies a currently active item.
	 * @var string
	 */
	public $ItemID;
	/**
	 * The ContactID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An eBay ID that uniquely identifies a given user for whom the caller is seeking information. This is the user's eBay username. Either a seller's or bidder's username can be specified here, as long as a bidding relationship exists between the requester and the user specified by this field. That is, a bidder must be bidding on the seller's active item, or have made an offer on the item via Best Offer.
	 * @var string
	 */
	public $ContactID;
	/**
	 * The RequesterID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An eBay ID that uniquely identifies the person who is making the call. This is the requester's eBay username. Either a seller's or bidder's username can be specified here, as long as a bidding relationship exists between the requester and the user for whom information is being requested.
	 * @var string
	 */
	public $RequesterID;
	/**
	 * Constructor
	 * @param string ItemID
	 * @param string ContactID
	 * @param string RequesterID
	 * @return EbayTradingTypeGetUserContactDetailsRequestType
	 */
	public function __construct($_ItemID = null,$_ContactID = null,$_RequesterID = null)
	{
		EbayTradingWsdlClass::__construct(array('ItemID'=>$_ItemID,'ContactID'=>$_ContactID,'RequesterID'=>$_RequesterID));
	}
	/**
	 * Set ItemID
	 * @param string ItemID
	 * @return string
	 */
	public function setItemID($_ItemID)
	{
		return ($this->ItemID = $_ItemID);
	}
	/**
	 * Get ItemID
	 * @return string
	 */
	public function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * Set ContactID
	 * @param string ContactID
	 * @return string
	 */
	public function setContactID($_ContactID)
	{
		return ($this->ContactID = $_ContactID);
	}
	/**
	 * Get ContactID
	 * @return string
	 */
	public function getContactID()
	{
		return $this->ContactID;
	}
	/**
	 * Set RequesterID
	 * @param string RequesterID
	 * @return string
	 */
	public function setRequesterID($_RequesterID)
	{
		return ($this->RequesterID = $_RequesterID);
	}
	/**
	 * Get RequesterID
	 * @return string
	 */
	public function getRequesterID()
	{
		return $this->RequesterID;
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