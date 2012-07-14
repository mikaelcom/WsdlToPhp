<?php
/**
 * Class file for PayPalTypeEbayItemPaymentDetailsItemType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeEbayItemPaymentDetailsItemType
 * Documentation : EbayItemPaymentDetailsItemType - Type declaration to be used by other schemas. Information about an Ebay Payment Item.
 * @date 14/07/2012
 */
class PayPalTypeEbayItemPaymentDetailsItemType extends PayPalWsdlClass
{
	/**
	 * The ItemNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Auction ItemNumber. Optional Character length and limitations: 765 single-byte characters
	 * @var string
	 */
	public $ItemNumber;
	/**
	 * The AuctionTransactionId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Auction Transaction ID. Optional Character length and limitations: 255 single-byte characters
	 * @var string
	 */
	public $AuctionTransactionId;
	/**
	 * The OrderId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Ebay Order ID. Optional Character length and limitations: 64 single-byte characters
	 * @var string
	 */
	public $OrderId;
	/**
	 * The CartID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Ebay Cart ID. Optional Character length and limitations: 64 single-byte characters
	 * @var string
	 */
	public $CartID;
	/**
	 * Constructor
	 * @param string ItemNumber
	 * @param string AuctionTransactionId
	 * @param string OrderId
	 * @param string CartID
	 * @return PayPalTypeEbayItemPaymentDetailsItemType
	 */
	public function __construct($_ItemNumber = null,$_AuctionTransactionId = null,$_OrderId = null,$_CartID = null)
	{
		parent::__construct(array('ItemNumber'=>$_ItemNumber,'AuctionTransactionId'=>$_AuctionTransactionId,'OrderId'=>$_OrderId,'CartID'=>$_CartID));
	}
	/**
	 * Set ItemNumber
	 * @param string ItemNumber
	 * @return string
	 */
	public function setItemNumber($_ItemNumber)
	{
		return ($this->ItemNumber = $_ItemNumber);
	}
	/**
	 * Get ItemNumber
	 * @return string
	 */
	public function getItemNumber()
	{
		return $this->ItemNumber;
	}
	/**
	 * Set AuctionTransactionId
	 * @param string AuctionTransactionId
	 * @return string
	 */
	public function setAuctionTransactionId($_AuctionTransactionId)
	{
		return ($this->AuctionTransactionId = $_AuctionTransactionId);
	}
	/**
	 * Get AuctionTransactionId
	 * @return string
	 */
	public function getAuctionTransactionId()
	{
		return $this->AuctionTransactionId;
	}
	/**
	 * Set OrderId
	 * @param string OrderId
	 * @return string
	 */
	public function setOrderId($_OrderId)
	{
		return ($this->OrderId = $_OrderId);
	}
	/**
	 * Get OrderId
	 * @return string
	 */
	public function getOrderId()
	{
		return $this->OrderId;
	}
	/**
	 * Set CartID
	 * @param string CartID
	 * @return string
	 */
	public function setCartID($_CartID)
	{
		return ($this->CartID = $_CartID);
	}
	/**
	 * Get CartID
	 * @return string
	 */
	public function getCartID()
	{
		return $this->CartID;
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