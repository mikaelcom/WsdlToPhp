<?php
/**
 * Class file for OvhTypeDedicatedInstallBasicProgressResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedInstallBasicProgressResponse
 * @date 02/07/2012
 */
class OvhTypeDedicatedInstallBasicProgressResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeDedicatedBasicInstallProgressReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeDedicatedBasicInstallProgressReturn return
	 * @return OvhTypeDedicatedInstallBasicProgressResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param dedicatedBasicInstallProgressReturn return
	 * @return dedicatedBasicInstallProgressReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypededicatedBasicInstallProgressReturn
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