<?php
/**
 * Class file for PayPalTypeAuctionInfoType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeAuctionInfoType
 * Documentation : AuctionInfoType Basic information about an auction.
 * @date 14/07/2012
 */
class PayPalTypeAuctionInfoType extends PayPalWsdlClass
{
	/**
	 * The BuyerID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Customer's auction ID
	 * @var string
	 */
	public $BuyerID;
	/**
	 * The ClosingDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Auction's close date
	 * @var dateTime
	 */
	public $ClosingDate;
	/**
	 * The multiItem
	 * Meta informations :
	 * 	- use : required
	 * @var string
	 */
	public $multiItem;
	/**
	 * Constructor
	 * @param string BuyerID
	 * @param dateTime ClosingDate
	 * @param string multiItem
	 * @return PayPalTypeAuctionInfoType
	 */
	public function __construct($_BuyerID = null,$_ClosingDate = null,$_multiItem = null)
	{
		parent::__construct(array('BuyerID'=>$_BuyerID,'ClosingDate'=>$_ClosingDate,'multiItem'=>$_multiItem));
	}
	/**
	 * Set BuyerID
	 * @param string BuyerID
	 * @return string
	 */
	public function setBuyerID($_BuyerID)
	{
		return ($this->BuyerID = $_BuyerID);
	}
	/**
	 * Get BuyerID
	 * @return string
	 */
	public function getBuyerID()
	{
		return $this->BuyerID;
	}
	/**
	 * Set ClosingDate
	 * @param dateTime ClosingDate
	 * @return dateTime
	 */
	public function setClosingDate($_ClosingDate)
	{
		return ($this->ClosingDate = $_ClosingDate);
	}
	/**
	 * Get ClosingDate
	 * @return dateTime
	 */
	public function getClosingDate()
	{
		return $this->ClosingDate;
	}
	/**
	 * Set multiItem
	 * @param string multiItem
	 * @return string
	 */
	public function setMultiItem($_multiItem)
	{
		return ($this->multiItem = $_multiItem);
	}
	/**
	 * Get multiItem
	 * @return string
	 */
	public function getMultiItem()
	{
		return $this->multiItem;
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