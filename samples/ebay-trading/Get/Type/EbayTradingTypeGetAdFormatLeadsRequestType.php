<?php
/**
 * Class file for EbayTradingTypeGetAdFormatLeadsRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetAdFormatLeadsRequestType
 * Documentation : Retrieves sales lead information for a lead generation listing.
 * @date 04/07/2012
 */
class EbayTradingTypeGetAdFormatLeadsRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The unique identifier of an item listed on the eBay site. Returned by eBay when the item is created. This ID must correspond to an ad format item.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The Status
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Filters the leads based on their status.
	 * @var EbayTradingTypeMessageStatusTypeCodeType
	 */
	public $Status;
	/**
	 * The IncludeMemberMessages
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Boolean which indicates whether to return mail messages for this lead in a MemberMessage node.
	 * @var boolean
	 */
	public $IncludeMemberMessages;
	/**
	 * The StartCreationTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Used with EndCreationTime to limit the returned leads for a user to only those with a creation date greater than or equal to the specified date and time.
	 * @var dateTime
	 */
	public $StartCreationTime;
	/**
	 * The EndCreationTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Used with StartCreationTime to limit the returned leads for a user to only those with a creation date less than or equal to the specified date and time.
	 * @var dateTime
	 */
	public $EndCreationTime;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param EbayTradingTypeMessageStatusTypeCodeType Status
	 * @param boolean IncludeMemberMessages
	 * @param dateTime StartCreationTime
	 * @param dateTime EndCreationTime
	 * @return EbayTradingTypeGetAdFormatLeadsRequestType
	 */
	public function __construct($_ItemID = null,$_Status = null,$_IncludeMemberMessages = null,$_StartCreationTime = null,$_EndCreationTime = null)
	{
		EbayTradingWsdlClass::__construct(array('ItemID'=>$_ItemID,'Status'=>$_Status,'IncludeMemberMessages'=>$_IncludeMemberMessages,'StartCreationTime'=>$_StartCreationTime,'EndCreationTime'=>$_EndCreationTime));
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
	 * Set Status
	 * @param MessageStatusTypeCodeType Status
	 * @return MessageStatusTypeCodeType
	 */
	public function setStatus($_Status)
	{
		return ($this->Status = EbayTradingTypeMessageStatusTypeCodeType::valueIsValid($_Status)?$_Status:null);
	}
	/**
	 * Get Status
	 * @return EbayTradingTypeMessageStatusTypeCodeType
	 */
	public function getStatus()
	{
		return $this->Status;
	}
	/**
	 * Set IncludeMemberMessages
	 * @param boolean IncludeMemberMessages
	 * @return boolean
	 */
	public function setIncludeMemberMessages($_IncludeMemberMessages)
	{
		return ($this->IncludeMemberMessages = $_IncludeMemberMessages);
	}
	/**
	 * Get IncludeMemberMessages
	 * @return boolean
	 */
	public function getIncludeMemberMessages()
	{
		return $this->IncludeMemberMessages;
	}
	/**
	 * Set StartCreationTime
	 * @param dateTime StartCreationTime
	 * @return dateTime
	 */
	public function setStartCreationTime($_StartCreationTime)
	{
		return ($this->StartCreationTime = $_StartCreationTime);
	}
	/**
	 * Get StartCreationTime
	 * @return dateTime
	 */
	public function getStartCreationTime()
	{
		return $this->StartCreationTime;
	}
	/**
	 * Set EndCreationTime
	 * @param dateTime EndCreationTime
	 * @return dateTime
	 */
	public function setEndCreationTime($_EndCreationTime)
	{
		return ($this->EndCreationTime = $_EndCreationTime);
	}
	/**
	 * Get EndCreationTime
	 * @return dateTime
	 */
	public function getEndCreationTime()
	{
		return $this->EndCreationTime;
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