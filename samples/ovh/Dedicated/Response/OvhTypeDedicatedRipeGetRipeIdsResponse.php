<?php
/**
 * Class file for OvhTypeDedicatedRipeGetRipeIdsResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedRipeGetRipeIdsResponse
 * @date 02/07/2012
 */
class OvhTypeDedicatedRipeGetRipeIdsResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfStringType return
	 * @return OvhTypeDedicatedRipeGetRipeIdsResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfStringType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfStringType return
	 * @return MyArrayOfStringType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfStringType
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