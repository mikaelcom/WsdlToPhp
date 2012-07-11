<?php
/**
 * Class file for EbayTradingTypeAddOrderRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAddOrderRequestType
 * Documentation : Combines two or more order line items into a single order, enabling a buyer to pay for all of those order line items with a single payment (and, if so arranged, ship all of the items together).
 * @date 04/07/2012
 */
class EbayTradingTypeAddOrderRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The Order
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The order that is being created.
	 * @var EbayTradingTypeOrderType
	 */
	public $Order;
	/**
	 * Constructor
	 * @param EbayTradingTypeOrderType Order
	 * @return EbayTradingTypeAddOrderRequestType
	 */
	public function __construct($_Order = null)
	{
		EbayTradingWsdlClass::__construct(array('Order'=>$_Order));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>