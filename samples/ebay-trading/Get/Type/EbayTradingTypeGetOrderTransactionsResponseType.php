<?php
/**
 * Class file for EbayTradingTypeGetOrderTransactionsResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetOrderTransactionsResponseType
 * Documentation : Response to GetOrderTransactions request.
 * @date 04/07/2012
 */
class EbayTradingTypeGetOrderTransactionsResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The OrderArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An array of Orders.
	 * @var EbayTradingTypeOrderArrayType
	 */
	public $OrderArray;
	/**
	 * Constructor
	 * @param EbayTradingTypeOrderArrayType OrderArray
	 * @return EbayTradingTypeGetOrderTransactionsResponseType
	 */
	public function __construct($_OrderArray = null)
	{
		EbayTradingWsdlClass::__construct(array('OrderArray'=>$_OrderArray));
	}
	/**
	 * Set OrderArray
	 * @param OrderArrayType OrderArray
	 * @return OrderArrayType
	 */
	public function setOrderArray($_OrderArray)
	{
		return ($this->OrderArray = $_OrderArray);
	}
	/**
	 * Get OrderArray
	 * @return EbayTradingTypeOrderArrayType
	 */
	public function getOrderArray()
	{
		return $this->OrderArray;
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