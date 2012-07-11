<?php
/**
 * Class file for OvhTypeDedicatedFailoverRipeGetIpResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedFailoverRipeGetIpResponse
 * @date 02/07/2012
 */
class OvhTypeDedicatedFailoverRipeGetIpResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfDedicatedRipeGetIpStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfDedicatedRipeGetIpStructType return
	 * @return OvhTypeDedicatedFailoverRipeGetIpResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfDedicatedRipeGetIpStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfDedicatedRipeGetIpStructType return
	 * @return MyArrayOfDedicatedRipeGetIpStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfDedicatedRipeGetIpStructType
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