<?php
/**
 * Class file for OvhTypeDedicatedBackupFtpInfoReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedBackupFtpInfoReturn
 * @date 02/07/2012
 */
class OvhTypeDedicatedBackupFtpInfoReturn extends OvhWsdlClass
{
	/**
	 * The ftpBackupName
	 * @var string
	 */
	public $ftpBackupName;
	/**
	 * The quotaUsed
	 * @var int
	 */
	public $quotaUsed;
	/**
	 * The quotaSize
	 * @var int
	 */
	public $quotaSize;
	/**
	 * Constructor
	 * @param string ftpBackupName
	 * @param int quotaUsed
	 * @param int quotaSize
	 * @return OvhTypeDedicatedBackupFtpInfoReturn
	 */
	public function __construct($_ftpBackupName = null,$_quotaUsed = null,$_quotaSize = null)
	{
		parent::__construct(array('ftpBackupName'=>$_ftpBackupName,'quotaUsed'=>$_quotaUsed,'quotaSize'=>$_quotaSize));
	}
	/**
	 * Set ftpBackupName
	 * @param string ftpBackupName
	 * @return string
	 */
	public function setFtpBackupName($_ftpBackupName)
	{
		return ($this->ftpBackupName = $_ftpBackupName);
	}
	/**
	 * Get ftpBackupName
	 * @return string
	 */
	public function getFtpBackupName()
	{
		return $this->ftpBackupName;
	}
	/**
	 * Set quotaUsed
	 * @param int quotaUsed
	 * @return int
	 */
	public function setQuotaUsed($_quotaUsed)
	{
		return ($this->quotaUsed = $_quotaUsed);
	}
	/**
	 * Get quotaUsed
	 * @return int
	 */
	public function getQuotaUsed()
	{
		return $this->quotaUsed;
	}
	/**
	 * Set quotaSize
	 * @param int quotaSize
	 * @return int
	 */
	public function setQuotaSize($_quotaSize)
	{
		return ($this->quotaSize = $_quotaSize);
	}
	/**
	 * Get quotaSize
	 * @return int
	 */
	public function getQuotaSize()
	{
		return $this->quotaSize;
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