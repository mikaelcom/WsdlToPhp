<?php
/**
 * Class file for OvhTypeDedicatedIPForUDPGetResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedIPForUDPGetResponse
 * @date 02/07/2012
 */
class OvhTypeDedicatedIPForUDPGetResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfDedicatedIPForUDPStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfDedicatedIPForUDPStructType return
	 * @return OvhTypeDedicatedIPForUDPGetResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfDedicatedIPForUDPStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfDedicatedIPForUDPStructType return
	 * @return MyArrayOfDedicatedIPForUDPStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfDedicatedIPForUDPStructType
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