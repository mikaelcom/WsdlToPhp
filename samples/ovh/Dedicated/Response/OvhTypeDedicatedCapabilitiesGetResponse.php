<?php
/**
 * Class file for OvhTypeDedicatedCapabilitiesGetResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedCapabilitiesGetResponse
 * @date 02/07/2012
 */
class OvhTypeDedicatedCapabilitiesGetResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeDedicatedCapabilitiesStruct
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeDedicatedCapabilitiesStruct return
	 * @return OvhTypeDedicatedCapabilitiesGetResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param dedicatedCapabilitiesStruct return
	 * @return dedicatedCapabilitiesStruct
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypededicatedCapabilitiesStruct
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