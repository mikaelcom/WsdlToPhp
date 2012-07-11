<?php
/**
 * Class file for EbayTradingTypeItemTransactionIDArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeItemTransactionIDArrayType
 * Documentation : Container of ItemTransactionIDs.
 * @date 04/07/2012
 */
class EbayTradingTypeItemTransactionIDArrayType extends EbayTradingWsdlClass
{
	/**
	 * The ItemTransactionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : An ItemID-TransactionID container. Note: OrderID is not returned when the GetOrderTransactions request includes ItemTransactionID, even if the transaction is part of an order. To get the OrderID for a transaction, call GetItemTransaction with IncludeContainingOrder = true.
	 * @var EbayTradingTypeItemTransactionIDType
	 */
	public $ItemTransactionID;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemTransactionIDType ItemTransactionID
	 * @return EbayTradingTypeItemTransactionIDArrayType
	 */
	public function __construct($_ItemTransactionID = null)
	{
		parent::__construct(array('ItemTransactionID'=>$_ItemTransactionID));
	}
	/**
	 * Set ItemTransactionID
	 * @param ItemTransactionIDType ItemTransactionID
	 * @return ItemTransactionIDType
	 */
	public function setItemTransactionID($_ItemTransactionID)
	{
		return ($this->ItemTransactionID = $_ItemTransactionID);
	}
	/**
	 * Get ItemTransactionID
	 * @return EbayTradingTypeItemTransactionIDType
	 */
	public function getItemTransactionID()
	{
		return $this->ItemTransactionID;
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