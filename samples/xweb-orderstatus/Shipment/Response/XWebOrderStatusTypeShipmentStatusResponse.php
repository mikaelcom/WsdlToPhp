<?php
/**
 * Class file for XWebOrderStatusTypeShipmentStatusResponse
 * @date 09/07/2012
 */
/**
 * Class XWebOrderStatusTypeShipmentStatusResponse
 * @date 09/07/2012
 */
class XWebOrderStatusTypeShipmentStatusResponse extends XWebOrderStatusWsdlClass
{
	/**
	 * The ResponseShipmentStatus
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XWebOrderStatusTypeResponseShipmentStatusType
	 */
	public $ResponseShipmentStatus;
	/**
	 * Constructor
	 * @param XWebOrderStatusTypeResponseShipmentStatusType ResponseShipmentStatus
	 * @return XWebOrderStatusTypeShipmentStatusResponse
	 */
	public function __construct($_ResponseShipmentStatus)
	{
		parent::__construct(array('ResponseShipmentStatus'=>$_ResponseShipmentStatus));
	}
	/**
	 * Set ResponseShipmentStatus
	 * @param ResponseShipmentStatusType ResponseShipmentStatus
	 * @return ResponseShipmentStatusType
	 */
	public function setResponseShipmentStatus($_ResponseShipmentStatus)
	{
		return ($this->ResponseShipmentStatus = $_ResponseShipmentStatus);
	}
	/**
	 * Get ResponseShipmentStatus
	 * @return XWebOrderStatusTypeResponseShipmentStatusType
	 */
	public function getResponseShipmentStatus()
	{
		return $this->ResponseShipmentStatus;
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