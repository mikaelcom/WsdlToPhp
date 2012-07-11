<?php
/**
 * Class file for EbayTradingTypeAddMemberMessagesAAQToBidderRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAddMemberMessagesAAQToBidderRequestType
 * Documentation : Enables a seller to send up to 10 messages to bidders, or to users who have made offers via Best Offer, regarding an active item listing.
 * @date 04/07/2012
 */
class EbayTradingTypeAddMemberMessagesAAQToBidderRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The AddMemberMessagesAAQToBidderRequestContainer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Allows a seller to send up to 10 messages to bidders and users who have made offers (via Best Offer) during an active listing.
	 * @var EbayTradingTypeAddMemberMessagesAAQToBidderRequestContainerType
	 */
	public $AddMemberMessagesAAQToBidderRequestContainer;
	/**
	 * Constructor
	 * @param EbayTradingTypeAddMemberMessagesAAQToBidderRequestContainerType AddMemberMessagesAAQToBidderRequestContainer
	 * @return EbayTradingTypeAddMemberMessagesAAQToBidderRequestType
	 */
	public function __construct($_AddMemberMessagesAAQToBidderRequestContainer = null)
	{
		EbayTradingWsdlClass::__construct(array('AddMemberMessagesAAQToBidderRequestContainer'=>$_AddMemberMessagesAAQToBidderRequestContainer));
	}
	/**
	 * Set AddMemberMessagesAAQToBidderRequestContainer
	 * @param AddMemberMessagesAAQToBidderRequestContainerType AddMemberMessagesAAQToBidderRequestContainer
	 * @return AddMemberMessagesAAQToBidderRequestContainerType
	 */
	public function setAddMemberMessagesAAQToBidderRequestContainer($_AddMemberMessagesAAQToBidderRequestContainer)
	{
		return ($this->AddMemberMessagesAAQToBidderRequestContainer = $_AddMemberMessagesAAQToBidderRequestContainer);
	}
	/**
	 * Get AddMemberMessagesAAQToBidderRequestContainer
	 * @return EbayTradingTypeAddMemberMessagesAAQToBidderRequestContainerType
	 */
	public function getAddMemberMessagesAAQToBidderRequestContainer()
	{
		return $this->AddMemberMessagesAAQToBidderRequestContainer;
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