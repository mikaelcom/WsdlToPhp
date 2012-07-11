<?php
/**
 * Class file for OvhTypeDedicatedInstallAllowedDistributionGetResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedInstallAllowedDistributionGetResponse
 * @date 02/07/2012
 */
class OvhTypeDedicatedInstallAllowedDistributionGetResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeDedicatedAllowedDistributionReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeDedicatedAllowedDistributionReturn return
	 * @return OvhTypeDedicatedInstallAllowedDistributionGetResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param dedicatedAllowedDistributionReturn return
	 * @return dedicatedAllowedDistributionReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypededicatedAllowedDistributionReturn
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