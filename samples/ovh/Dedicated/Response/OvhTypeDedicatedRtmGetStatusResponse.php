<?php
/**
 * Class file for OvhTypeDedicatedRtmGetStatusResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedRtmGetStatusResponse
 * @date 02/07/2012
 */
class OvhTypeDedicatedRtmGetStatusResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeDedicatedRtmStatusReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeDedicatedRtmStatusReturn return
	 * @return OvhTypeDedicatedRtmGetStatusResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param dedicatedRtmStatusReturn return
	 * @return dedicatedRtmStatusReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypededicatedRtmStatusReturn
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