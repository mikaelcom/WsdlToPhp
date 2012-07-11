<?php
/**
 * Class file for OvhTypeDedicatedFailoverRipeListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedFailoverRipeListResponse
 * @date 02/07/2012
 */
class OvhTypeDedicatedFailoverRipeListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfDedicatedFailoverRipeStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfDedicatedFailoverRipeStructType return
	 * @return OvhTypeDedicatedFailoverRipeListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfDedicatedFailoverRipeStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfDedicatedFailoverRipeStructType return
	 * @return MyArrayOfDedicatedFailoverRipeStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfDedicatedFailoverRipeStructType
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