<?php
/**
 * Class file for SPSitesTypeExportWeb
 * @date 06/07/2012
 */
/**
 * Class SPSitesTypeExportWeb
 * @date 06/07/2012
 */
class SPSitesTypeExportWeb extends SPSitesWsdlClass
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
	 * The dataPath
	 * @var string
	 */
	public $dataPath;
	/**
	 * The includeSubwebs
	 * @var boolean
	 */
	public $includeSubwebs;
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
	 * The cabSize
	 * @var int
	 */
	public $cabSize;
	/**
	 * Constructor
	 * @param string jobName
	 * @param string webUrl
	 * @param string dataPath
	 * @param boolean includeSubwebs
	 * @param boolean includeUserSecurity
	 * @param boolean overWrite
	 * @param int cabSize
	 * @return SPSitesTypeExportWeb
	 */
	public function __construct($_jobName = null,$_webUrl = null,$_dataPath = null,$_includeSubwebs = null,$_includeUserSecurity = null,$_overWrite = null,$_cabSize = null)
	{
		parent::__construct(array('jobName'=>$_jobName,'webUrl'=>$_webUrl,'dataPath'=>$_dataPath,'includeSubwebs'=>$_includeSubwebs,'includeUserSecurity'=>$_includeUserSecurity,'overWrite'=>$_overWrite,'cabSize'=>$_cabSize));
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
	 * Set dataPath
	 * @param string dataPath
	 * @return string
	 */
	public function setDataPath($_dataPath)
	{
		return ($this->dataPath = $_dataPath);
	}
	/**
	 * Get dataPath
	 * @return string
	 */
	public function getDataPath()
	{
		return $this->dataPath;
	}
	/**
	 * Set includeSubwebs
	 * @param boolean includeSubwebs
	 * @return boolean
	 */
	public function setIncludeSubwebs($_includeSubwebs)
	{
		return ($this->includeSubwebs = $_includeSubwebs);
	}
	/**
	 * Get includeSubwebs
	 * @return boolean
	 */
	public function getIncludeSubwebs()
	{
		return $this->includeSubwebs;
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
	 * Set cabSize
	 * @param int cabSize
	 * @return int
	 */
	public function setCabSize($_cabSize)
	{
		return ($this->cabSize = $_cabSize);
	}
	/**
	 * Get cabSize
	 * @return int
	 */
	public function getCabSize()
	{
		return $this->cabSize;
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