<?php
/**
 * Class file for OvhTypeDedicatedOperationListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedOperationListResponse
 * @date 02/07/2012
 */
class OvhTypeDedicatedOperationListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfDedicatedOperationStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfDedicatedOperationStructType return
	 * @return OvhTypeDedicatedOperationListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfDedicatedOperationStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfDedicatedOperationStructType return
	 * @return MyArrayOfDedicatedOperationStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfDedicatedOperationStructType
	 */
	public function getReturn()
	{
		return $this->return;
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