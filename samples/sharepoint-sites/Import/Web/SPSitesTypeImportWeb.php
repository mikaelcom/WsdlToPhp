<?php
/**
 * Class file for SPSitesTypeImportWeb
 * @date 06/07/2012
 */
/**
 * Class SPSitesTypeImportWeb
 * @date 06/07/2012
 */
class SPSitesTypeImportWeb extends SPSitesWsdlClass
{
	/**
	 * The jobName
	 * @var string
	 */
	public $jobName;
	/**
	 * The webUrl
	 * @var string
	 */
	public $webUrl;
	/**
	 * The dataFiles
	 * @var SPSitesTypeArrayOfString
	 */
	public $dataFiles;
	/**
	 * The logPath
	 * @var string
	 */
	public $logPath;
	/**
	 * The includeUserSecurity
	 * @var boolean
	 */
	public $includeUserSecurity;
	/**
	 * The overWrite
	 * @var boolean
	 */
	public $overWrite;
	/**
	 * Constructor
	 * @param string jobName
	 * @param string webUrl
	 * @param SPSitesTypeArrayOfString dataFiles
	 * @param string logPath
	 * @param boolean includeUserSecurity
	 * @param boolean overWrite
	 * @return SPSitesTypeImportWeb
	 */
	public function __construct($_jobName = null,$_webUrl = null,$_dataFiles = null,$_logPath = null,$_includeUserSecurity = null,$_overWrite = null)
	{
		parent::__construct(array('jobName'=>$_jobName,'webUrl'=>$_webUrl,'dataFiles'=>new SPSitesTypeArrayOfString($_dataFiles),'logPath'=>$_logPath,'includeUserSecurity'=>$_includeUserSecurity,'overWrite'=>$_overWrite));
	}
	/**
	 * Set jobName
	 * @param string jobName
	 * @return string
	 */
	public function setJobName($_jobName)
	{
		return ($this->jobName = $_jobName);
	}
	/**
	 * Get jobName
	 * @return string
	 */
	public function getJobName()
	{
		return $this->jobName;
	}
	/**
	 * Set webUrl
	 * @param string webUrl
	 * @return string
	 */
	public function setWebUrl($_webUrl)
	{
		return ($this->webUrl = $_webUrl);
	}
	/**
	 * Get webUrl
	 * @return string
	 */
	public function getWebUrl()
	{
		return $this->webUrl;
	}
	/**
	 * Set dataFiles
	 * @param ArrayOfString dataFiles
	 * @return ArrayOfString
	 */
	public function setDataFiles($_dataFiles)
	{
		return ($this->dataFiles = $_dataFiles);
	}
	/**
	 * Get dataFiles
	 * @return SPSitesTypeArrayOfString
	 */
	public function getDataFiles()
	{
		return $this->dataFiles;
	}
	/**
	 * Set logPath
	 * @param string logPath
	 * @return string
	 */
	public function setLogPath($_logPath)
	{
		return ($this->logPath = $_logPath);
	}
	/**
	 * Get logPath
	 * @return string
	 */
	public function getLogPath()
	{
		return $this->logPath;
	}
	/**
	 * Set includeUserSecurity
	 * @param boolean includeUserSecurity
	 * @return boolean
	 */
	public function setIncludeUserSecurity($_includeUserSecurity)
	{
		return ($this->includeUserSecurity = $_includeUserSecurity);
	}
	/**
	 * Get includeUserSecurity
	 * @return boolean
	 */
	public function getIncludeUserSecurity()
	{
		return $this->includeUserSecurity;
	}
	/**
	 * Set overWrite
	 * @param boolean overWrite
	 * @return boolean
	 */
	public function setOverWrite($_overWrite)
	{
		return ($this->overWrite = $_overWrite);
	}
	/**
	 * Get overWrite
	 * @return boolean
	 */
	public function getOverWrite()
	{
		return $this->overWrite;
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