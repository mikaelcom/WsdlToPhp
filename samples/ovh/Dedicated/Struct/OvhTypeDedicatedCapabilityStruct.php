<?php
/**
 * Class file for OvhTypeDedicatedCapabilityStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedCapabilityStruct
 * @date 02/07/2012
 */
class OvhTypeDedicatedCapabilityStruct extends OvhWsdlClass
{
	/**
	 * The backupFtp
	 * @var int
	 */
	public $backupFtp;
	/**
	 * The backupFtpServer
	 * @var string
	 */
	public $backupFtpServer;
	/**
	 * The allocationBlockIp
	 * @var int
	 */
	public $allocationBlockIp;
	/**
	 * The additionalIp
	 * @var int
	 */
	public $additionalIp;
	/**
	 * The rootDevice
	 * @var string
	 */
	public $rootDevice;
	/**
	 * The diskSize
	 * @var int
	 */
	public $diskSize;
	/**
	 * The tuning
	 * @var int
	 */
	public $tuning;
	/**
	 * Constructor
	 * @param int backupFtp
	 * @param string backupFtpServer
	 * @param int allocationBlockIp
	 * @param int additionalIp
	 * @param string rootDevice
	 * @param int diskSize
	 * @param int tuning
	 * @return OvhTypeDedicatedCapabilityStruct
	 */
	public function __construct($_backupFtp = null,$_backupFtpServer = null,$_allocationBlockIp = null,$_additionalIp = null,$_rootDevice = null,$_diskSize = null,$_tuning = null)
	{
		parent::__construct(array('backupFtp'=>$_backupFtp,'backupFtpServer'=>$_backupFtpServer,'allocationBlockIp'=>$_allocationBlockIp,'additionalIp'=>$_additionalIp,'rootDevice'=>$_rootDevice,'diskSize'=>$_diskSize,'tuning'=>$_tuning));
	}
	/**
	 * Set backupFtp
	 * @param int backupFtp
	 * @return int
	 */
	public function setBackupFtp($_backupFtp)
	{
		return ($this->backupFtp = $_backupFtp);
	}
	/**
	 * Get backupFtp
	 * @return int
	 */
	public function getBackupFtp()
	{
		return $this->backupFtp;
	}
	/**
	 * Set backupFtpServer
	 * @param string backupFtpServer
	 * @return string
	 */
	public function setBackupFtpServer($_backupFtpServer)
	{
		return ($this->backupFtpServer = $_backupFtpServer);
	}
	/**
	 * Get backupFtpServer
	 * @return string
	 */
	public function getBackupFtpServer()
	{
		return $this->backupFtpServer;
	}
	/**
	 * Set allocationBlockIp
	 * @param int allocationBlockIp
	 * @return int
	 */
	public function setAllocationBlockIp($_allocationBlockIp)
	{
		return ($this->allocationBlockIp = $_allocationBlockIp);
	}
	/**
	 * Get allocationBlockIp
	 * @return int
	 */
	public function getAllocationBlockIp()
	{
		return $this->allocationBlockIp;
	}
	/**
	 * Set additionalIp
	 * @param int additionalIp
	 * @return int
	 */
	public function setAdditionalIp($_additionalIp)
	{
		return ($this->additionalIp = $_additionalIp);
	}
	/**
	 * Get additionalIp
	 * @return int
	 */
	public function getAdditionalIp()
	{
		return $this->additionalIp;
	}
	/**
	 * Set rootDevice
	 * @param string rootDevice
	 * @return string
	 */
	public function setRootDevice($_rootDevice)
	{
		return ($this->rootDevice = $_rootDevice);
	}
	/**
	 * Get rootDevice
	 * @return string
	 */
	public function getRootDevice()
	{
		return $this->rootDevice;
	}
	/**
	 * Set diskSize
	 * @param int diskSize
	 * @return int
	 */
	public function setDiskSize($_diskSize)
	{
		return ($this->diskSize = $_diskSize);
	}
	/**
	 * Get diskSize
	 * @return int
	 */
	public function getDiskSize()
	{
		return $this->diskSize;
	}
	/**
	 * Set tuning
	 * @param int tuning
	 * @return int
	 */
	public function setTuning($_tuning)
	{
		return ($this->tuning = $_tuning);
	}
	/**
	 * Get tuning
	 * @return int
	 */
	public function getTuning()
	{
		return $this->tuning;
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