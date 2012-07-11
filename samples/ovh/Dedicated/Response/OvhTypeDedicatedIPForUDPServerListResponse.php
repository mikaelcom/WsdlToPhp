<?php
/**
 * Class file for OvhTypeDedicatedIPForUDPServerListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedIPForUDPServerListResponse
 * @date 02/07/2012
 */
class OvhTypeDedicatedIPForUDPServerListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfIPForUDPServerListStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfIPForUDPServerListStructType return
	 * @return OvhTypeDedicatedIPForUDPServerListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfIPForUDPServerListStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfIPForUDPServerListStructType return
	 * @return MyArrayOfIPForUDPServerListStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfIPForUDPServerListStructType
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