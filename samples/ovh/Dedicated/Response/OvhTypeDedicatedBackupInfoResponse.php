<?php
/**
 * Class file for OvhTypeDedicatedBackupInfoResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedBackupInfoResponse
 * @date 02/07/2012
 */
class OvhTypeDedicatedBackupInfoResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeDedicatedBackupListReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeDedicatedBackupListReturn return
	 * @return OvhTypeDedicatedBackupInfoResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param dedicatedBackupListReturn return
	 * @return dedicatedBackupListReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypededicatedBackupListReturn
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