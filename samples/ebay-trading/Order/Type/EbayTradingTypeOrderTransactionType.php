<?php
/**
 * Class file for EbayTradingTypeOrderTransactionType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeOrderTransactionType
 * Documentation : Contains an order or a transaction. A transaction is the sale of one or more items from a seller's listing to a buyer. An order combines two or more transactions into a single payment.
 * @date 04/07/2012
 */
class EbayTradingTypeOrderTransactionType extends EbayTradingWsdlClass
{
	/**
	 * The Order
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the information describing an order.
	 * @var EbayTradingTypeOrderType
	 */
	public $Order;
	/**
	 * The Transaction
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the information describing a transaction.
	 * @var EbayTradingTypeTransactionType
	 */
	public $Transaction;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeOrderType Order
	 * @param EbayTradingTypeTransactionType Transaction
	 * @param DOMDocument any
	 * @return EbayTradingTypeOrderTransactionType
	 */
	public function __construct($_Order = null,$_Transaction = null,$_any = null)
	{
		parent::__construct(array('Order'=>$_Order,'Transaction'=>$_Transaction,'any'=>$_any));
	}
	/**
	 * Set Order
	 * @param OrderType Order
	 * @return OrderType
	 */
	public function setOrder($_Order)
	{
		return ($this->Order = $_Order);
	}
	/**
	 * Get Order
	 * @return EbayTradingTypeOrderType
	 */
	public function getOrder()
	{
		return $this->Order;
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