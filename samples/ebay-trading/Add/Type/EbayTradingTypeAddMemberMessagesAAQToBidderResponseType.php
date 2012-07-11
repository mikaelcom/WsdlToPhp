<?php
/**
 * Class file for EbayTradingTypeAddMemberMessagesAAQToBidderResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAddMemberMessagesAAQToBidderResponseType
 * Documentation : Contains the response information.
 * @date 04/07/2012
 */
class EbayTradingTypeAddMemberMessagesAAQToBidderResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The AddMemberMessagesAAQToBidderResponseContainer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains the response information.
	 * @var EbayTradingTypeAddMemberMessagesAAQToBidderResponseContainerType
	 */
	public $AddMemberMessagesAAQToBidderResponseContainer;
	/**
	 * Constructor
	 * @param EbayTradingTypeAddMemberMessagesAAQToBidderResponseContainerType AddMemberMessagesAAQToBidderResponseContainer
	 * @return EbayTradingTypeAddMemberMessagesAAQToBidderResponseType
	 */
	public function __construct($_AddMemberMessagesAAQToBidderResponseContainer = null)
	{
		EbayTradingWsdlClass::__construct(array('AddMemberMessagesAAQToBidderResponseContainer'=>$_AddMemberMessagesAAQToBidderResponseContainer));
	}
	/**
	 * Set AddMemberMessagesAAQToBidderResponseContainer
	 * @param AddMemberMessagesAAQToBidderResponseContainerType AddMemberMessagesAAQToBidderResponseContainer
	 * @return AddMemberMessagesAAQToBidderResponseContainerType
	 */
	public function setAddMemberMessagesAAQToBidderResponseContainer($_AddMemberMessagesAAQToBidderResponseContainer)
	{
		return ($this->AddMemberMessagesAAQToBidderResponseContainer = $_AddMemberMessagesAAQToBidderResponseContainer);
	}
	/**
	 * Get AddMemberMessagesAAQToBidderResponseContainer
	 * @return EbayTradingTypeAddMemberMessagesAAQToBidderResponseContainerType
	 */
	public function getAddMemberMessagesAAQToBidderResponseContainer()
	{
		return $this->AddMemberMessagesAAQToBidderResponseContainer;
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