<?php
/**
 * Class file for EbayTradingTypeGetOrderTransactionsRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetOrderTransactionsRequestType
 * Documentation : Use this call to retrieve information about one or more orders based on OrderIDs, ItemIDs, or SKU values. &nbsp;<b>Also for Half.com</b>.
 * @date 04/07/2012
 */
class EbayTradingTypeGetOrderTransactionsRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ItemTransactionIDArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An array of ItemTransactionIDs.
	 * @var EbayTradingTypeItemTransactionIDArrayType
	 */
	public $ItemTransactionIDArray;
	/**
	 * The OrderIDArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An array of OrderIDs. You can specify, at most, twenty OrderIDs.
	 * @var EbayTradingTypeOrderIDArrayType
	 */
	public $OrderIDArray;
	/**
	 * The Platform
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Name of the eBay co-branded site upon which the order line item was created. This will serve as a filter for the orders to get emitted in the response.
	 * @var EbayTradingTypeTransactionPlatformCodeType
	 */
	public $Platform;
	/**
	 * The IncludeFinalValueFees
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether to include Final Value Fee (FVF) in the response. For most listing types, the Final Value Fee is returned in Transaction.FinalValueFee. The Final Value Fee is returned on a transaction-by-transaction basis for FixedPriceItem and StoresFixedPrice listing types. For all other listing types, the Final Value Fee is returned when the listing status is Completed. This value is not returned if the auction ended with Buy It Now. <br><br> For Dutch Buy It Now listings, the Final Value Fee is returned on a transaction-by-transaction basis. <br><br> <span class="tablenote"><strong>Note:</strong> As of version 619, Dutch-style (multi-item) competitive-bid auctions are deprecated. eBay throws an error if you submit a Dutch item listing with AddItem or VerifyAddItem. If you use RelistItem to update a Dutch auction listing, eBay generates a warning and resets the Quantity value to 1. </span> <br>
	 * @var boolean
	 */
	public $IncludeFinalValueFees;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemTransactionIDArrayType ItemTransactionIDArray
	 * @param EbayTradingTypeOrderIDArrayType OrderIDArray
	 * @param EbayTradingTypeTransactionPlatformCodeType Platform
	 * @param boolean IncludeFinalValueFees
	 * @return EbayTradingTypeGetOrderTransactionsRequestType
	 */
	public function __construct($_ItemTransactionIDArray = null,$_OrderIDArray = null,$_Platform = null,$_IncludeFinalValueFees = null)
	{
		EbayTradingWsdlClass::__construct(array('ItemTransactionIDArray'=>$_ItemTransactionIDArray,'OrderIDArray'=>$_OrderIDArray,'Platform'=>$_Platform,'IncludeFinalValueFees'=>$_IncludeFinalValueFees));
	}
	/**
	 * Set ItemTransactionIDArray
	 * @param ItemTransactionIDArrayType ItemTransactionIDArray
	 * @return ItemTransactionIDArrayType
	 */
	public function setItemTransactionIDArray($_ItemTransactionIDArray)
	{
		return ($this->ItemTransactionIDArray = $_ItemTransactionIDArray);
	}
	/**
	 * Get ItemTransactionIDArray
	 * @return EbayTradingTypeItemTransactionIDArrayType
	 */
	public function getItemTransactionIDArray()
	{
		return $this->ItemTransactionIDArray;
	}
	/**
	 * Set OrderIDArray
	 * @param OrderIDArrayType OrderIDArray
	 * @return OrderIDArrayType
	 */
	public function setOrderIDArray($_OrderIDArray)
	{
		return ($this->OrderIDArray = $_OrderIDArray);
	}
	/**
	 * Get OrderIDArray
	 * @return EbayTradingTypeOrderIDArrayType
	 */
	public function getOrderIDArray()
	{
		return $this->OrderIDArray;
	}
	/**
	 * Set Platform
	 * @param TransactionPlatformCodeType Platform
	 * @return TransactionPlatformCodeType
	 */
	public function setPlatform($_Platform)
	{
		return ($this->Platform = EbayTradingTypeTransactionPlatformCodeType::valueIsValid($_Platform)?$_Platform:null);
	}
	/**
	 * Get Platform
	 * @return EbayTradingTypeTransactionPlatformCodeType
	 */
	public function getPlatform()
	{
		return $this->Platform;
	}
	/**
	 * Set IncludeFinalValueFees
	 * @param boolean IncludeFinalValueFees
	 * @return boolean
	 */
	public function setIncludeFinalValueFees($_IncludeFinalValueFees)
	{
		return ($this->IncludeFinalValueFees = $_IncludeFinalValueFees);
	}
	/**
	 * Get IncludeFinalValueFees
	 * @return boolean
	 */
	public function getIncludeFinalValueFees()
	{
		return $this->IncludeFinalValueFees;
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