<?php
/**
 * Class file for OvhTypeDedicatedInstallConfigurationParametersStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedInstallConfigurationParametersStruct
 * @date 02/07/2012
 */
class OvhTypeDedicatedInstallConfigurationParametersStruct extends OvhWsdlClass
{
	/**
	 * The language
	 * @var string
	 */
	public $language;
	/**
	 * The bitFormat
	 * @var string
	 */
	public $bitFormat;
	/**
	 * The softRaidDevices
	 * @var int
	 */
	public $softRaidDevices;
	/**
	 * The serverName
	 * @var string
	 */
	public $serverName;
	/**
	 * The softRaid
	 * @var string
	 */
	public $softRaid;
	/**
	 * The distribution
	 * @var string
	 */
	public $distribution;
	/**
	 * The resinstallTodoId
	 * @var int
	 */
	public $resinstallTodoId;
	/**
	 * Constructor
	 * @param string language
	 * @param string bitFormat
	 * @param int softRaidDevices
	 * @param string serverName
	 * @param string softRaid
	 * @param string distribution
	 * @param int resinstallTodoId
	 * @return OvhTypeDedicatedInstallConfigurationParametersStruct
	 */
	public function __construct($_language = null,$_bitFormat = null,$_softRaidDevices = null,$_serverName = null,$_softRaid = null,$_distribution = null,$_resinstallTodoId = null)
	{
		parent::__construct(array('language'=>$_language,'bitFormat'=>$_bitFormat,'softRaidDevices'=>$_softRaidDevices,'serverName'=>$_serverName,'softRaid'=>$_softRaid,'distribution'=>$_distribution,'resinstallTodoId'=>$_resinstallTodoId));
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
	 * Set bitFormat
	 * @param string bitFormat
	 * @return string
	 */
	public function setBitFormat($_bitFormat)
	{
		return ($this->bitFormat = $_bitFormat);
	}
	/**
	 * Get bitFormat
	 * @return string
	 */
	public function getBitFormat()
	{
		return $this->bitFormat;
	}
	/**
	 * Set softRaidDevices
	 * @param int softRaidDevices
	 * @return int
	 */
	public function setSoftRaidDevices($_softRaidDevices)
	{
		return ($this->softRaidDevices = $_softRaidDevices);
	}
	/**
	 * Get softRaidDevices
	 * @return int
	 */
	public function getSoftRaidDevices()
	{
		return $this->softRaidDevices;
	}
	/**
	 * Set serverName
	 * @param string serverName
	 * @return string
	 */
	public function setServerName($_serverName)
	{
		return ($this->serverName = $_serverName);
	}
	/**
	 * Get serverName
	 * @return string
	 */
	public function getServerName()
	{
		return $this->serverName;
	}
	/**
	 * Set softRaid
	 * @param string softRaid
	 * @return string
	 */
	public function setSoftRaid($_softRaid)
	{
		return ($this->softRaid = $_softRaid);
	}
	/**
	 * Get softRaid
	 * @return string
	 */
	public function getSoftRaid()
	{
		return $this->softRaid;
	}
	/**
	 * Set distribution
	 * @param string distribution
	 * @return string
	 */
	public function setDistribution($_distribution)
	{
		return ($this->distribution = $_distribution);
	}
	/**
	 * Get distribution
	 * @return string
	 */
	public function getDistribution()
	{
		return $this->distribution;
	}
	/**
	 * Set resinstallTodoId
	 * @param int resinstallTodoId
	 * @return int
	 */
	public function setResinstallTodoId($_resinstallTodoId)
	{
		return ($this->resinstallTodoId = $_resinstallTodoId);
	}
	/**
	 * Get resinstallTodoId
	 * @return int
	 */
	public function getResinstallTodoId()
	{
		return $this->resinstallTodoId;
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