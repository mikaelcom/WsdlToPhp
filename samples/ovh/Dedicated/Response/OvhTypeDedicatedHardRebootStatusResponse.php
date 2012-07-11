<?php
/**
 * Class file for OvhTypeDedicatedHardRebootStatusResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedHardRebootStatusResponse
 * @date 02/07/2012
 */
class OvhTypeDedicatedHardRebootStatusResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeDedicatedHardRebootStatusReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeDedicatedHardRebootStatusReturn return
	 * @return OvhTypeDedicatedHardRebootStatusResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param dedicatedHardRebootStatusReturn return
	 * @return dedicatedHardRebootStatusReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypededicatedHardRebootStatusReturn
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