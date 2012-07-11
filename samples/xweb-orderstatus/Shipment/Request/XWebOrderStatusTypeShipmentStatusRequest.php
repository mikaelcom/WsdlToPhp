<?php
/**
 * Class file for XWebOrderStatusTypeShipmentStatusRequest
 * @date 09/07/2012
 */
/**
 * Class XWebOrderStatusTypeShipmentStatusRequest
 * @date 09/07/2012
 */
class XWebOrderStatusTypeShipmentStatusRequest extends XWebOrderStatusWsdlClass
{
	/**
	 * The RequestShipmentStatus
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XWebOrderStatusTypeRequestOrderStatusType
	 */
	public $RequestShipmentStatus;
	/**
	 * Constructor
	 * @param XWebOrderStatusTypeRequestOrderStatusType RequestShipmentStatus
	 * @return XWebOrderStatusTypeShipmentStatusRequest
	 */
	public function __construct($_RequestShipmentStatus)
	{
		parent::__construct(array('RequestShipmentStatus'=>$_RequestShipmentStatus));
	}
	/**
	 * Set RequestShipmentStatus
	 * @param RequestOrderStatusType RequestShipmentStatus
	 * @return RequestOrderStatusType
	 */
	public function setRequestShipmentStatus($_RequestShipmentStatus)
	{
		return ($this->RequestShipmentStatus = $_RequestShipmentStatus);
	}
	/**
	 * Get RequestShipmentStatus
	 * @return XWebOrderStatusTypeRequestOrderStatusType
	 */
	public function getRequestShipmentStatus()
	{
		return $this->RequestShipmentStatus;
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