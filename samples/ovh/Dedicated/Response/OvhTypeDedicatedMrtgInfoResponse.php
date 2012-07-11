<?php
/**
 * Class file for OvhTypeDedicatedMrtgInfoResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedMrtgInfoResponse
 * @date 02/07/2012
 */
class OvhTypeDedicatedMrtgInfoResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeDedicatedMrtgInfoReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeDedicatedMrtgInfoReturn return
	 * @return OvhTypeDedicatedMrtgInfoResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param dedicatedMrtgInfoReturn return
	 * @return dedicatedMrtgInfoReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypededicatedMrtgInfoReturn
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