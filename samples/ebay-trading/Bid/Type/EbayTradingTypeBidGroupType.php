<?php
/**
 * Class file for EbayTradingTypeBidGroupType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeBidGroupType
 * Documentation : Contains a paginated list of items in a bid group.
 * @date 04/07/2012
 */
class EbayTradingTypeBidGroupType extends EbayTradingWsdlClass
{
	/**
	 * The BidGroupItem
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains a list of bid group item types.
	 * @var EbayTradingTypeBidGroupItemType
	 */
	public $BidGroupItem;
	/**
	 * The BidGroupID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the bid group ID.
	 * @var long
	 */
	public $BidGroupID;
	/**
	 * The BidGroupName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the bid group name.
	 * @var string
	 */
	public $BidGroupName;
	/**
	 * The BidGroupStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the bid group status.
	 * @var EbayTradingTypeBidGroupStatusCodeType
	 */
	public $BidGroupStatus;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeBidGroupItemType BidGroupItem
	 * @param long BidGroupID
	 * @param string BidGroupName
	 * @param EbayTradingTypeBidGroupStatusCodeType BidGroupStatus
	 * @param DOMDocument any
	 * @return EbayTradingTypeBidGroupType
	 */
	public function __construct($_BidGroupItem = null,$_BidGroupID = null,$_BidGroupName = null,$_BidGroupStatus = null,$_any = null)
	{
		parent::__construct(array('BidGroupItem'=>$_BidGroupItem,'BidGroupID'=>$_BidGroupID,'BidGroupName'=>$_BidGroupName,'BidGroupStatus'=>$_BidGroupStatus,'any'=>$_any));
	}
	/**
	 * Set BidGroupItem
	 * @param BidGroupItemType BidGroupItem
	 * @return BidGroupItemType
	 */
	public function setBidGroupItem($_BidGroupItem)
	{
		return ($this->BidGroupItem = $_BidGroupItem);
	}
	/**
	 * Get BidGroupItem
	 * @return EbayTradingTypeBidGroupItemType
	 */
	public function getBidGroupItem()
	{
		return $this->BidGroupItem;
	}
	/**
	 * Set BidGroupID
	 * @param long BidGroupID
	 * @return long
	 */
	public function setBidGroupID($_BidGroupID)
	{
		return ($this->BidGroupID = $_BidGroupID);
	}
	/**
	 * Get BidGroupID
	 * @return long
	 */
	public function getBidGroupID()
	{
		return $this->BidGroupID;
	}
	/**
	 * Set BidGroupName
	 * @param string BidGroupName
	 * @return string
	 */
	public function setBidGroupName($_BidGroupName)
	{
		return ($this->BidGroupName = $_BidGroupName);
	}
	/**
	 * Get BidGroupName
	 * @return string
	 */
	public function getBidGroupName()
	{
		return $this->BidGroupName;
	}
	/**
	 * Set BidGroupStatus
	 * @param BidGroupStatusCodeType BidGroupStatus
	 * @return BidGroupStatusCodeType
	 */
	public function setBidGroupStatus($_BidGroupStatus)
	{
		return ($this->BidGroupStatus = EbayTradingTypeBidGroupStatusCodeType::valueIsValid($_BidGroupStatus)?$_BidGroupStatus:null);
	}
	/**
	 * Get BidGroupStatus
	 * @return EbayTradingTypeBidGroupStatusCodeType
	 */
	public function getBidGroupStatus()
	{
		return $this->BidGroupStatus;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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