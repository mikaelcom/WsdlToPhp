<?php
/**
 * Class file for XWebOrderStatusTypeOrderStatusResponse
 * @date 09/07/2012
 */
/**
 * Class XWebOrderStatusTypeOrderStatusResponse
 * @date 09/07/2012
 */
class XWebOrderStatusTypeOrderStatusResponse extends XWebOrderStatusWsdlClass
{
	/**
	 * The ResponseOrderStatus
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XWebOrderStatusTypeResponseOrderStatusType
	 */
	public $ResponseOrderStatus;
	/**
	 * Constructor
	 * @param XWebOrderStatusTypeResponseOrderStatusType ResponseOrderStatus
	 * @return XWebOrderStatusTypeOrderStatusResponse
	 */
	public function __construct($_ResponseOrderStatus)
	{
		parent::__construct(array('ResponseOrderStatus'=>$_ResponseOrderStatus));
	}
	/**
	 * Set ResponseOrderStatus
	 * @param ResponseOrderStatusType ResponseOrderStatus
	 * @return ResponseOrderStatusType
	 */
	public function setResponseOrderStatus($_ResponseOrderStatus)
	{
		return ($this->ResponseOrderStatus = $_ResponseOrderStatus);
	}
	/**
	 * Get ResponseOrderStatus
	 * @return XWebOrderStatusTypeResponseOrderStatusType
	 */
	public function getResponseOrderStatus()
	{
		return $this->ResponseOrderStatus;
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