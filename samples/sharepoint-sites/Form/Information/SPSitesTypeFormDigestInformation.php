<?php
/**
 * Class file for SPSitesTypeFormDigestInformation
 * @date 06/07/2012
 */
/**
 * Class SPSitesTypeFormDigestInformation
 * @date 06/07/2012
 */
class SPSitesTypeFormDigestInformation extends SPSitesWsdlClass
{
	/**
	 * The DigestValue
	 * @var string
	 */
	public $DigestValue;
	/**
	 * The TimeoutSeconds
	 * @var int
	 */
	public $TimeoutSeconds;
	/**
	 * The WebFullUrl
	 * @var string
	 */
	public $WebFullUrl;
	/**
	 * The LibraryVersion
	 * @var string
	 */
	public $LibraryVersion;
	/**
	 * The SupportedSchemaVersions
	 * @var string
	 */
	public $SupportedSchemaVersions;
	/**
	 * Constructor
	 * @param string DigestValue
	 * @param int TimeoutSeconds
	 * @param string WebFullUrl
	 * @param string LibraryVersion
	 * @param string SupportedSchemaVersions
	 * @return SPSitesTypeFormDigestInformation
	 */
	public function __construct($_DigestValue = null,$_TimeoutSeconds = null,$_WebFullUrl = null,$_LibraryVersion = null,$_SupportedSchemaVersions = null)
	{
		parent::__construct(array('DigestValue'=>$_DigestValue,'TimeoutSeconds'=>$_TimeoutSeconds,'WebFullUrl'=>$_WebFullUrl,'LibraryVersion'=>$_LibraryVersion,'SupportedSchemaVersions'=>$_SupportedSchemaVersions));
	}
	/**
	 * Set DigestValue
	 * @param string DigestValue
	 * @return string
	 */
	public function setDigestValue($_DigestValue)
	{
		return ($this->DigestValue = $_DigestValue);
	}
	/**
	 * Get DigestValue
	 * @return string
	 */
	public function getDigestValue()
	{
		return $this->DigestValue;
	}
	/**
	 * Set TimeoutSeconds
	 * @param int TimeoutSeconds
	 * @return int
	 */
	public function setTimeoutSeconds($_TimeoutSeconds)
	{
		return ($this->TimeoutSeconds = $_TimeoutSeconds);
	}
	/**
	 * Get TimeoutSeconds
	 * @return int
	 */
	public function getTimeoutSeconds()
	{
		return $this->TimeoutSeconds;
	}
	/**
	 * Set WebFullUrl
	 * @param string WebFullUrl
	 * @return string
	 */
	public function setWebFullUrl($_WebFullUrl)
	{
		return ($this->WebFullUrl = $_WebFullUrl);
	}
	/**
	 * Get WebFullUrl
	 * @return string
	 */
	public function getWebFullUrl()
	{
		return $this->WebFullUrl;
	}
	/**
	 * Set LibraryVersion
	 * @param string LibraryVersion
	 * @return string
	 */
	public function setLibraryVersion($_LibraryVersion)
	{
		return ($this->LibraryVersion = $_LibraryVersion);
	}
	/**
	 * Get LibraryVersion
	 * @return string
	 */
	public function getLibraryVersion()
	{
		return $this->LibraryVersion;
	}
	/**
	 * Set SupportedSchemaVersions
	 * @param string SupportedSchemaVersions
	 * @return string
	 */
	public function setSupportedSchemaVersions($_SupportedSchemaVersions)
	{
		return ($this->SupportedSchemaVersions = $_SupportedSchemaVersions);
	}
	/**
	 * Get SupportedSchemaVersions
	 * @return string
	 */
	public function getSupportedSchemaVersions()
	{
		return $this->SupportedSchemaVersions;
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