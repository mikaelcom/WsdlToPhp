<?php
/**
 * Class file for XiReleasesTypeGetLastSecurityHeadlines
 * @date 08/07/2012
 */
/**
 * Class XiReleasesTypeGetLastSecurityHeadlines
 * @date 08/07/2012
 */
class XiReleasesTypeGetLastSecurityHeadlines extends XiReleasesWsdlClass
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
	 * The SinceDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SinceDate;
	/**
	 * Constructor
	 * @param string Identifier
	 * @param XiReleasesTypeIdentifierTypes IdentifierType
	 * @param string SinceDate
	 * @return XiReleasesTypeGetLastSecurityHeadlines
	 */
	public function __construct($_Identifier = null,$_IdentifierType,$_SinceDate = null)
	{
		parent::__construct(array('Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType,'SinceDate'=>$_SinceDate));
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
	 * Set SinceDate
	 * @param string SinceDate
	 * @return string
	 */
	public function setSinceDate($_SinceDate)
	{
		return ($this->SinceDate = $_SinceDate);
	}
	/**
	 * Get SinceDate
	 * @return string
	 */
	public function getSinceDate()
	{
		return $this->SinceDate;
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