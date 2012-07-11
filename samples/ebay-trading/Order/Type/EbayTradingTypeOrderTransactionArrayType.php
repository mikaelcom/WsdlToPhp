<?php
/**
 * Class file for EbayTradingTypeOrderTransactionArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeOrderTransactionArrayType
 * Documentation : Contains a list of orders, transactions, or both, each of OrderTransactionType.
 * @date 04/07/2012
 */
class EbayTradingTypeOrderTransactionArrayType extends EbayTradingWsdlClass
{
	/**
	 * The OrderTransaction
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The individual order or transaction.
	 * @var EbayTradingTypeOrderTransactionType
	 */
	public $OrderTransaction;
	/**
	 * Constructor
	 * @param EbayTradingTypeOrderTransactionType OrderTransaction
	 * @return EbayTradingTypeOrderTransactionArrayType
	 */
	public function __construct($_OrderTransaction = null)
	{
		parent::__construct(array('OrderTransaction'=>$_OrderTransaction));
	}
	/**
	 * Set OrderTransaction
	 * @param OrderTransactionType OrderTransaction
	 * @return OrderTransactionType
	 */
	public function setOrderTransaction($_OrderTransaction)
	{
		return ($this->OrderTransaction = $_OrderTransaction);
	}
	/**
	 * Get OrderTransaction
	 * @return EbayTradingTypeOrderTransactionType
	 */
	public function getOrderTransaction()
	{
		return $this->OrderTransaction;
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