<?php
/**
 * Class file for OvhTypeDedicatedBackupFtpInfoResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedBackupFtpInfoResponse
 * @date 02/07/2012
 */
class OvhTypeDedicatedBackupFtpInfoResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeDedicatedBackupFtpInfoReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeDedicatedBackupFtpInfoReturn return
	 * @return OvhTypeDedicatedBackupFtpInfoResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param dedicatedBackupFtpInfoReturn return
	 * @return dedicatedBackupFtpInfoReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypededicatedBackupFtpInfoReturn
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