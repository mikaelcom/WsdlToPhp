<?php
/**
 * Class file for AmazonAlexaTypeCategoryBrowseRequest
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeCategoryBrowseRequest
 * @date 10/07/2012
 */
class AmazonAlexaTypeCategoryBrowseRequest extends AmazonAlexaWsdlClass
{
	/**
	 * The Security
	 * @var AmazonAlexaTypeSecurity
	 */
	public $Security;
	/**
	 * The ResponseGroup
	 * @var string
	 */
	public $ResponseGroup;
	/**
	 * The Path
	 * @var string
	 */
	public $Path;
	/**
	 * The Version
	 * @var string
	 */
	public $Version;
	/**
	 * The Descriptions
	 * @var string
	 */
	public $Descriptions;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeSecurity Security
	 * @param string ResponseGroup
	 * @param string Path
	 * @param string Version
	 * @param string Descriptions
	 * @return AmazonAlexaTypeCategoryBrowseRequest
	 */
	public function __construct($_Security = null,$_ResponseGroup = null,$_Path = null,$_Version = null,$_Descriptions = null)
	{
		parent::__construct(array('Security'=>$_Security,'ResponseGroup'=>$_ResponseGroup,'Path'=>$_Path,'Version'=>$_Version,'Descriptions'=>$_Descriptions));
	}
	/**
	 * Set Security
	 * @param Security Security
	 * @return Security
	 */
	public function setSecurity($_Security)
	{
		return ($this->Security = $_Security);
	}
	/**
	 * Get Security
	 * @return AmazonAlexaTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set ResponseGroup
	 * @param string ResponseGroup
	 * @return string
	 */
	public function setResponseGroup($_ResponseGroup)
	{
		return ($this->ResponseGroup = $_ResponseGroup);
	}
	/**
	 * Get ResponseGroup
	 * @return string
	 */
	public function getResponseGroup()
	{
		return $this->ResponseGroup;
	}
	/**
	 * Set Path
	 * @param string Path
	 * @return string
	 */
	public function setPath($_Path)
	{
		return ($this->Path = $_Path);
	}
	/**
	 * Get Path
	 * @return string
	 */
	public function getPath()
	{
		return $this->Path;
	}
	/**
	 * Set Version
	 * @param string Version
	 * @return string
	 */
	public function setVersion($_Version)
	{
		return ($this->Version = $_Version);
	}
	/**
	 * Get Version
	 * @return string
	 */
	public function getVersion()
	{
		return $this->Version;
	}
	/**
	 * Set Descriptions
	 * @param string Descriptions
	 * @return string
	 */
	public function setDescriptions($_Descriptions)
	{
		return ($this->Descriptions = $_Descriptions);
	}
	/**
	 * Get Descriptions
	 * @return string
	 */
	public function getDescriptions()
	{
		return $this->Descriptions;
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