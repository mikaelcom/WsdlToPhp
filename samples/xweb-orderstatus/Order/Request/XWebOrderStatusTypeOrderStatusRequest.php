<?php
/**
 * Class file for XWebOrderStatusTypeOrderStatusRequest
 * @date 09/07/2012
 */
/**
 * Class XWebOrderStatusTypeOrderStatusRequest
 * @date 09/07/2012
 */
class XWebOrderStatusTypeOrderStatusRequest extends XWebOrderStatusWsdlClass
{
	/**
	 * The RequestOrderStatus
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XWebOrderStatusTypeRequestOrderStatusType
	 */
	public $RequestOrderStatus;
	/**
	 * Constructor
	 * @param XWebOrderStatusTypeRequestOrderStatusType RequestOrderStatus
	 * @return XWebOrderStatusTypeOrderStatusRequest
	 */
	public function __construct($_RequestOrderStatus)
	{
		parent::__construct(array('RequestOrderStatus'=>$_RequestOrderStatus));
	}
	/**
	 * Set RequestOrderStatus
	 * @param RequestOrderStatusType RequestOrderStatus
	 * @return RequestOrderStatusType
	 */
	public function setRequestOrderStatus($_RequestOrderStatus)
	{
		return ($this->RequestOrderStatus = $_RequestOrderStatus);
	}
	/**
	 * Get RequestOrderStatus
	 * @return XWebOrderStatusTypeRequestOrderStatusType
	 */
	public function getRequestOrderStatus()
	{
		return $this->RequestOrderStatus;
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