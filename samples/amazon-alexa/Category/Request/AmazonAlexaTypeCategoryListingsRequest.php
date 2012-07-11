<?php
/**
 * Class file for AmazonAlexaTypeCategoryListingsRequest
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeCategoryListingsRequest
 * @date 10/07/2012
 */
class AmazonAlexaTypeCategoryListingsRequest extends AmazonAlexaWsdlClass
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
	 * The SortBy
	 * @var string
	 */
	public $SortBy;
	/**
	 * The Recursive
	 * @var string
	 */
	public $Recursive;
	/**
	 * The Start
	 * @var string
	 */
	public $Start;
	/**
	 * The Count
	 * @var string
	 */
	public $Count;
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
	 * @param string SortBy
	 * @param string Recursive
	 * @param string Start
	 * @param string Count
	 * @param string Version
	 * @param string Descriptions
	 * @return AmazonAlexaTypeCategoryListingsRequest
	 */
	public function __construct($_Security = null,$_ResponseGroup = null,$_Path = null,$_SortBy = null,$_Recursive = null,$_Start = null,$_Count = null,$_Version = null,$_Descriptions = null)
	{
		parent::__construct(array('Security'=>$_Security,'ResponseGroup'=>$_ResponseGroup,'Path'=>$_Path,'SortBy'=>$_SortBy,'Recursive'=>$_Recursive,'Start'=>$_Start,'Count'=>$_Count,'Version'=>$_Version,'Descriptions'=>$_Descriptions));
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
	 * Set SortBy
	 * @param string SortBy
	 * @return string
	 */
	public function setSortBy($_SortBy)
	{
		return ($this->SortBy = $_SortBy);
	}
	/**
	 * Get SortBy
	 * @return string
	 */
	public function getSortBy()
	{
		return $this->SortBy;
	}
	/**
	 * Set Recursive
	 * @param string Recursive
	 * @return string
	 */
	public function setRecursive($_Recursive)
	{
		return ($this->Recursive = $_Recursive);
	}
	/**
	 * Get Recursive
	 * @return string
	 */
	public function getRecursive()
	{
		return $this->Recursive;
	}
	/**
	 * Set Start
	 * @param string Start
	 * @return string
	 */
	public function setStart($_Start)
	{
		return ($this->Start = $_Start);
	}
	/**
	 * Get Start
	 * @return string
	 */
	public function getStart()
	{
		return $this->Start;
	}
	/**
	 * Set Count
	 * @param string Count
	 * @return string
	 */
	public function setCount($_Count)
	{
		return ($this->Count = $_Count);
	}
	/**
	 * Get Count
	 * @return string
	 */
	public function getCount()
	{
		return $this->Count;
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