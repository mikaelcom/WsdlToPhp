<?php
/**
 * Class file for OvhTypeDedicatedReverseListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedReverseListResponse
 * @date 02/07/2012
 */
class OvhTypeDedicatedReverseListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfDedicatedReverseStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfDedicatedReverseStructType return
	 * @return OvhTypeDedicatedReverseListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfDedicatedReverseStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfDedicatedReverseStructType return
	 * @return MyArrayOfDedicatedReverseStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfDedicatedReverseStructType
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