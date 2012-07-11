<?php
/**
 * Class file for XiFuturesTypeReleaseSource
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeReleaseSource
 * @date 08/07/2012
 */
class XiFuturesTypeReleaseSource extends XiFuturesWsdlClass
{
	/**
	 * The SourceType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeReleaseSourceTypes
	 */
	public $SourceType;
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Type;
	/**
	 * The Url
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Url;
	/**
	 * Constructor
	 * @param XiFuturesTypeReleaseSourceTypes SourceType
	 * @param string Type
	 * @param string Url
	 * @return XiFuturesTypeReleaseSource
	 */
	public function __construct($_SourceType,$_Type = null,$_Url = null)
	{
		parent::__construct(array('SourceType'=>$_SourceType,'Type'=>$_Type,'Url'=>$_Url));
	}
	/**
	 * Set SourceType
	 * @param ReleaseSourceTypes SourceType
	 * @return ReleaseSourceTypes
	 */
	public function setSourceType($_SourceType)
	{
		return ($this->SourceType = XiFuturesTypeReleaseSourceTypes::valueIsValid($_SourceType)?$_SourceType:null);
	}
	/**
	 * Get SourceType
	 * @return XiFuturesTypeReleaseSourceTypes
	 */
	public function getSourceType()
	{
		return $this->SourceType;
	}
	/**
	 * Set Type
	 * @param string Type
	 * @return string
	 */
	public function setType($_Type)
	{
		return ($this->Type = $_Type);
	}
	/**
	 * Get Type
	 * @return string
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set Url
	 * @param string Url
	 * @return string
	 */
	public function setUrl($_Url)
	{
		return ($this->Url = $_Url);
	}
	/**
	 * Get Url
	 * @return string
	 */
	public function getUrl()
	{
		return $this->Url;
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