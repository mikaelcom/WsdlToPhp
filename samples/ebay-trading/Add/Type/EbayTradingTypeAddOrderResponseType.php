<?php
/**
 * Class file for EbayTradingTypeAddOrderResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAddOrderResponseType
 * Documentation : Returns a unique identifier for the order. A buyer may make a single payment to purchase all of the order line items included in the order.
 * @date 04/07/2012
 */
class EbayTradingTypeAddOrderResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The OrderID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The unique identifier for the Combined Payment order. This OrderID can be used as an input filter in GetOrders.
	 * @var EbayTradingTypeOrderIDType
	 */
	public $OrderID;
	/**
	 * The CreatedTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The date and time the Combined Payment order was created.
	 * @var dateTime
	 */
	public $CreatedTime;
	/**
	 * Constructor
	 * @param EbayTradingTypeOrderIDType OrderID
	 * @param dateTime CreatedTime
	 * @return EbayTradingTypeAddOrderResponseType
	 */
	public function __construct($_OrderID = null,$_CreatedTime = null)
	{
		EbayTradingWsdlClass::__construct(array('OrderID'=>$_OrderID,'CreatedTime'=>$_CreatedTime));
	}
	/**
	 * Set OrderID
	 * @param OrderIDType OrderID
	 * @return OrderIDType
	 */
	public function setOrderID($_OrderID)
	{
		return ($this->OrderID = EbayTradingTypeOrderIDType::valueIsValid($_OrderID)?$_OrderID:null);
	}
	/**
	 * Get OrderID
	 * @return EbayTradingTypeOrderIDType
	 */
	public function getOrderID()
	{
		return $this->OrderID;
	}
	/**
	 * Set CreatedTime
	 * @param dateTime CreatedTime
	 * @return dateTime
	 */
	public function setCreatedTime($_CreatedTime)
	{
		return ($this->CreatedTime = $_CreatedTime);
	}
	/**
	 * Get CreatedTime
	 * @return dateTime
	 */
	public function getCreatedTime()
	{
		return $this->CreatedTime;
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