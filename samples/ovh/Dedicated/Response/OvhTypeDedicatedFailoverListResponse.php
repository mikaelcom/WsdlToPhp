<?php
/**
 * Class file for OvhTypeDedicatedFailoverListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedFailoverListResponse
 * @date 02/07/2012
 */
class OvhTypeDedicatedFailoverListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfDedicatedFailoverStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfDedicatedFailoverStructType return
	 * @return OvhTypeDedicatedFailoverListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfDedicatedFailoverStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfDedicatedFailoverStructType return
	 * @return MyArrayOfDedicatedFailoverStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfDedicatedFailoverStructType
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