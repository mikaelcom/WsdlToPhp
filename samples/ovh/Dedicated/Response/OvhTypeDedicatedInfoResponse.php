<?php
/**
 * Class file for OvhTypeDedicatedInfoResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedInfoResponse
 * @date 02/07/2012
 */
class OvhTypeDedicatedInfoResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeDedicatedInfoReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeDedicatedInfoReturn return
	 * @return OvhTypeDedicatedInfoResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param dedicatedInfoReturn return
	 * @return dedicatedInfoReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypededicatedInfoReturn
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