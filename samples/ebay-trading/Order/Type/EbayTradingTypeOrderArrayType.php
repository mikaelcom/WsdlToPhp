<?php
/**
 * Class file for EbayTradingTypeOrderArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeOrderArrayType
 * Documentation : An array of Orders.
 * @date 04/07/2012
 */
class EbayTradingTypeOrderArrayType extends EbayTradingWsdlClass
{
	/**
	 * The Order
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Also applicable to Half.com.
	 * @var EbayTradingTypeOrderType
	 */
	public $Order;
	/**
	 * Constructor
	 * @param EbayTradingTypeOrderType Order
	 * @return EbayTradingTypeOrderArrayType
	 */
	public function __construct($_Order = null)
	{
		parent::__construct(array('Order'=>$_Order));
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