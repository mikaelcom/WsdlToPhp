<?php
/**
 * Class file for OvhTypeDedicatedBackupListStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedBackupListStruct
 * @date 02/07/2012
 */
class OvhTypeDedicatedBackupListStruct extends OvhWsdlClass
{
	/**
	 * The backupId
	 * @var int
	 */
	public $backupId;
	/**
	 * The backupFeature
	 * @var string
	 */
	public $backupFeature;
	/**
	 * The enable
	 * @var int
	 */
	public $enable;
	/**
	 * The language
	 * @var string
	 */
	public $language;
	/**
	 * The backupSize
	 * @var string
	 */
	public $backupSize;
	/**
	 * The sshPort
	 * @var int
	 */
	public $sshPort;
	/**
	 * The percentUsed
	 * @var string
	 */
	public $percentUsed;
	/**
	 * The hostname
	 * @var string
	 */
	public $hostname;
	/**
	 * The backupName
	 * @var string
	 */
	public $backupName;
	/**
	 * The email
	 * @var string
	 */
	public $email;
	/**
	 * The snapshotNumber
	 * @var int
	 */
	public $snapshotNumber;
	/**
	 * The superBackupName
	 * @var string
	 */
	public $superBackupName;
	/**
	 * The backupType
	 * @var string
	 */
	public $backupType;
	/**
	 * The src
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $src;
	/**
	 * The include
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $include;
	/**
	 * The exclude
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $exclude;
	/**
	 * The excludeHard
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $excludeHard;
	/**
	 * Constructor
	 * @param int backupId
	 * @param string backupFeature
	 * @param int enable
	 * @param string language
	 * @param string backupSize
	 * @param int sshPort
	 * @param string percentUsed
	 * @param string hostname
	 * @param string backupName
	 * @param string email
	 * @param int snapshotNumber
	 * @param string superBackupName
	 * @param string backupType
	 * @param OvhTypeMyArrayOfStringType src
	 * @param OvhTypeMyArrayOfStringType include
	 * @param OvhTypeMyArrayOfStringType exclude
	 * @param OvhTypeMyArrayOfStringType excludeHard
	 * @return OvhTypeDedicatedBackupListStruct
	 */
	public function __construct($_backupId = null,$_backupFeature = null,$_enable = null,$_language = null,$_backupSize = null,$_sshPort = null,$_percentUsed = null,$_hostname = null,$_backupName = null,$_email = null,$_snapshotNumber = null,$_superBackupName = null,$_backupType = null,$_src = null,$_include = null,$_exclude = null,$_excludeHard = null)
	{
		parent::__construct(array('backupId'=>$_backupId,'backupFeature'=>$_backupFeature,'enable'=>$_enable,'language'=>$_language,'backupSize'=>$_backupSize,'sshPort'=>$_sshPort,'percentUsed'=>$_percentUsed,'hostname'=>$_hostname,'backupName'=>$_backupName,'email'=>$_email,'snapshotNumber'=>$_snapshotNumber,'superBackupName'=>$_superBackupName,'backupType'=>$_backupType,'src'=>new OvhTypeMyArrayOfStringType($_src),'include'=>new OvhTypeMyArrayOfStringType($_include),'exclude'=>new OvhTypeMyArrayOfStringType($_exclude),'excludeHard'=>new OvhTypeMyArrayOfStringType($_excludeHard)));
	}
	/**
	 * Set backupId
	 * @param int backupId
	 * @return int
	 */
	public function setBackupId($_backupId)
	{
		return ($this->backupId = $_backupId);
	}
	/**
	 * Get backupId
	 * @return int
	 */
	public function getBackupId()
	{
		return $this->backupId;
	}
	/**
	 * Set backupFeature
	 * @param string backupFeature
	 * @return string
	 */
	public function setBackupFeature($_backupFeature)
	{
		return ($this->backupFeature = $_backupFeature);
	}
	/**
	 * Get backupFeature
	 * @return string
	 */
	public function getBackupFeature()
	{
		return $this->backupFeature;
	}
	/**
	 * Set enable
	 * @param int enable
	 * @return int
	 */
	public function setEnable($_enable)
	{
		return ($this->enable = $_enable);
	}
	/**
	 * Get enable
	 * @return int
	 */
	public function getEnable()
	{
		return $this->enable;
	}
	/**
	 * Set language
	 * @param string language
	 * @return string
	 */
	public function setLanguage($_language)
	{
		return ($this->language = $_language);
	}
	/**
	 * Get language
	 * @return string
	 */
	public function getLanguage()
	{
		return $this->language;
	}
	/**
	 * Set backupSize
	 * @param string backupSize
	 * @return string
	 */
	public function setBackupSize($_backupSize)
	{
		return ($this->backupSize = $_backupSize);
	}
	/**
	 * Get backupSize
	 * @return string
	 */
	public function getBackupSize()
	{
		return $this->backupSize;
	}
	/**
	 * Set sshPort
	 * @param int sshPort
	 * @return int
	 */
	public function setSshPort($_sshPort)
	{
		return ($this->sshPort = $_sshPort);
	}
	/**
	 * Get sshPort
	 * @return int
	 */
	public function getSshPort()
	{
		return $this->sshPort;
	}
	/**
	 * Set percentUsed
	 * @param string percentUsed
	 * @return string
	 */
	public function setPercentUsed($_percentUsed)
	{
		return ($this->percentUsed = $_percentUsed);
	}
	/**
	 * Get percentUsed
	 * @return string
	 */
	public function getPercentUsed()
	{
		return $this->percentUsed;
	}
	/**
	 * Set hostname
	 * @param string hostname
	 * @return string
	 */
	public function setHostname($_hostname)
	{
		return ($this->hostname = $_hostname);
	}
	/**
	 * Get hostname
	 * @return string
	 */
	public function getHostname()
	{
		return $this->hostname;
	}
	/**
	 * Set backupName
	 * @param string backupName
	 * @return string
	 */
	public function setBackupName($_backupName)
	{
		return ($this->backupName = $_backupName);
	}
	/**
	 * Get backupName
	 * @return string
	 */
	public function getBackupName()
	{
		return $this->backupName;
	}
	/**
	 * Set email
	 * @param string email
	 * @return string
	 */
	public function setEmail($_email)
	{
		return ($this->email = $_email);
	}
	/**
	 * Get email
	 * @return string
	 */
	public function getEmail()
	{
		return $this->email;
	}
	/**
	 * Set snapshotNumber
	 * @param int snapshotNumber
	 * @return int
	 */
	public function setSnapshotNumber($_snapshotNumber)
	{
		return ($this->snapshotNumber = $_snapshotNumber);
	}
	/**
	 * Get snapshotNumber
	 * @return int
	 */
	public function getSnapshotNumber()
	{
		return $this->snapshotNumber;
	}
	/**
	 * Set superBackupName
	 * @param string superBackupName
	 * @return string
	 */
	public function setSuperBackupName($_superBackupName)
	{
		return ($this->superBackupName = $_superBackupName);
	}
	/**
	 * Get superBackupName
	 * @return string
	 */
	public function getSuperBackupName()
	{
		return $this->superBackupName;
	}
	/**
	 * Set backupType
	 * @param string backupType
	 * @return string
	 */
	public function setBackupType($_backupType)
	{
		return ($this->backupType = $_backupType);
	}
	/**
	 * Get backupType
	 * @return string
	 */
	public function getBackupType()
	{
		return $this->backupType;
	}
	/**
	 * Set src
	 * @param MyArrayOfStringType src
	 * @return MyArrayOfStringType
	 */
	public function setSrc($_src)
	{
		return ($this->src = $_src);
	}
	/**
	 * Get src
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getSrc()
	{
		return $this->src;
	}
	/**
	 * Set include
	 * @param MyArrayOfStringType include
	 * @return MyArrayOfStringType
	 */
	public function setInclude($_include)
	{
		return ($this->include = $_include);
	}
	/**
	 * Get include
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getInclude()
	{
		return $this->include;
	}
	/**
	 * Set exclude
	 * @param MyArrayOfStringType exclude
	 * @return MyArrayOfStringType
	 */
	public function setExclude($_exclude)
	{
		return ($this->exclude = $_exclude);
	}
	/**
	 * Get exclude
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getExclude()
	{
		return $this->exclude;
	}
	/**
	 * Set excludeHard
	 * @param MyArrayOfStringType excludeHard
	 * @return MyArrayOfStringType
	 */
	public function setExcludeHard($_excludeHard)
	{
		return ($this->excludeHard = $_excludeHard);
	}
	/**
	 * Get excludeHard
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getExcludeHard()
	{
		return $this->excludeHard;
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