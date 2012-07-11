<?php
/**
 * Class file for EbayTradingTypeTransactionArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeTransactionArrayType
 * Documentation : Contains an array of Transaction objects, withe each Transaction object containing data on an order line item.
 * @date 04/07/2012
 */
class EbayTradingTypeTransactionArrayType extends EbayTradingWsdlClass
{
	/**
	 * The Transaction
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Information about one order line item. Also applicable to Half.com (for GetOrders).
	 * @var EbayTradingTypeTransactionType
	 */
	public $Transaction;
	/**
	 * Constructor
	 * @param EbayTradingTypeTransactionType Transaction
	 * @return EbayTradingTypeTransactionArrayType
	 */
	public function __construct($_Transaction = null)
	{
		parent::__construct(array('Transaction'=>$_Transaction));
	}
	/**
	 * Set Transaction
	 * @param TransactionType Transaction
	 * @return TransactionType
	 */
	public function setTransaction($_Transaction)
	{
		return ($this->Transaction = $_Transaction);
	}
	/**
	 * Get Transaction
	 * @return EbayTradingTypeTransactionType
	 */
	public function getTransaction()
	{
		return $this->Transaction;
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