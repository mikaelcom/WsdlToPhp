<?php
/**
 * Class file for XWebOrderTypeResponseOrderConfirmationType
 * @date 09/07/2012
 */
/**
 * Class XWebOrderTypeResponseOrderConfirmationType
 * @date 09/07/2012
 */
class XWebOrderTypeResponseOrderConfirmationType extends XWebOrderWsdlClass
{
	/**
	 * The OrderDetail
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var XWebOrderTypeResponseOrderDetailType
	 */
	public $OrderDetail;
	/**
	 * The Message
	 * @var Message
	 */
	public $Message;
	/**
	 * Constructor
	 * @param XWebOrderTypeResponseOrderDetailType OrderDetail
	 * @param Message Message
	 * @return XWebOrderTypeResponseOrderConfirmationType
	 */
	public function __construct($_OrderDetail = null,$_Message = null)
	{
		parent::__construct(array('OrderDetail'=>$_OrderDetail,'Message'=>$_Message));
	}
	/**
	 * Set OrderDetail
	 * @param ResponseOrderDetailType OrderDetail
	 * @return ResponseOrderDetailType
	 */
	public function setOrderDetail($_OrderDetail)
	{
		return ($this->OrderDetail = $_OrderDetail);
	}
	/**
	 * Get OrderDetail
	 * @return XWebOrderTypeResponseOrderDetailType
	 */
	public function getOrderDetail()
	{
		return $this->OrderDetail;
	}
	/**
	 * Set Message
	 * @param Message Message
	 * @return Message
	 */
	public function setMessage($_Message)
	{
		return ($this->Message = $_Message);
	}
	/**
	 * Get Message
	 * @return Message
	 */
	public function getMessage()
	{
		return $this->Message;
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