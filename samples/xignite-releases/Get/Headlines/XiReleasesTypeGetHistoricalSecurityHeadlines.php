<?php
/**
 * Class file for XiReleasesTypeGetHistoricalSecurityHeadlines
 * @date 08/07/2012
 */
/**
 * Class XiReleasesTypeGetHistoricalSecurityHeadlines
 * @date 08/07/2012
 */
class XiReleasesTypeGetHistoricalSecurityHeadlines extends XiReleasesWsdlClass
{
	/**
	 * The Identifier
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Identifier;
	/**
	 * The IdentifierType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiReleasesTypeIdentifierTypes
	 */
	public $IdentifierType;
	/**
	 * The Source
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiReleasesTypeReleaseSourceTypes
	 */
	public $Source;
	/**
	 * The StartDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StartDate;
	/**
	 * The EndDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EndDate;
	/**
	 * Constructor
	 * @param string Identifier
	 * @param XiReleasesTypeIdentifierTypes IdentifierType
	 * @param XiReleasesTypeReleaseSourceTypes Source
	 * @param string StartDate
	 * @param string EndDate
	 * @return XiReleasesTypeGetHistoricalSecurityHeadlines
	 */
	public function __construct($_Identifier = null,$_IdentifierType,$_Source,$_StartDate = null,$_EndDate = null)
	{
		parent::__construct(array('Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType,'Source'=>$_Source,'StartDate'=>$_StartDate,'EndDate'=>$_EndDate));
	}
	/**
	 * Set Identifier
	 * @param string Identifier
	 * @return string
	 */
	public function setIdentifier($_Identifier)
	{
		return ($this->Identifier = $_Identifier);
	}
	/**
	 * Get Identifier
	 * @return string
	 */
	public function getIdentifier()
	{
		return $this->Identifier;
	}
	/**
	 * Set IdentifierType
	 * @param IdentifierTypes IdentifierType
	 * @return IdentifierTypes
	 */
	public function setIdentifierType($_IdentifierType)
	{
		return ($this->IdentifierType = XiReleasesTypeIdentifierTypes::valueIsValid($_IdentifierType)?$_IdentifierType:null);
	}
	/**
	 * Get IdentifierType
	 * @return XiReleasesTypeIdentifierTypes
	 */
	public function getIdentifierType()
	{
		return $this->IdentifierType;
	}
	/**
	 * Set Source
	 * @param ReleaseSourceTypes Source
	 * @return ReleaseSourceTypes
	 */
	public function setSource($_Source)
	{
		return ($this->Source = XiReleasesTypeReleaseSourceTypes::valueIsValid($_Source)?$_Source:null);
	}
	/**
	 * Get Source
	 * @return XiReleasesTypeReleaseSourceTypes
	 */
	public function getSource()
	{
		return $this->Source;
	}
	/**
	 * Set StartDate
	 * @param string StartDate
	 * @return string
	 */
	public function setStartDate($_StartDate)
	{
		return ($this->StartDate = $_StartDate);
	}
	/**
	 * Get StartDate
	 * @return string
	 */
	public function getStartDate()
	{
		return $this->StartDate;
	}
	/**
	 * Set EndDate
	 * @param string EndDate
	 * @return string
	 */
	public function setEndDate($_EndDate)
	{
		return ($this->EndDate = $_EndDate);
	}
	/**
	 * Get EndDate
	 * @return string
	 */
	public function getEndDate()
	{
		return $this->EndDate;
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