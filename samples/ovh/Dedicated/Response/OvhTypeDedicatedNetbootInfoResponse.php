<?php
/**
 * Class file for OvhTypeDedicatedNetbootInfoResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedNetbootInfoResponse
 * @date 02/07/2012
 */
class OvhTypeDedicatedNetbootInfoResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeDedicatedNetbootStruct
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeDedicatedNetbootStruct return
	 * @return OvhTypeDedicatedNetbootInfoResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param dedicatedNetbootStruct return
	 * @return dedicatedNetbootStruct
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypededicatedNetbootStruct
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