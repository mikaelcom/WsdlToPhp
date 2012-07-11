<?php
/**
 * Class file for XiGlobalmasterTypeGetIssuerByCompanyIdentifier
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeGetIssuerByCompanyIdentifier
 * @date 08/07/2012
 */
class XiGlobalmasterTypeGetIssuerByCompanyIdentifier extends XiGlobalmasterWsdlClass
{
	/**
	 * The IncludeRelated
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiGlobalmasterTypeIssuerRelatedTypes
	 */
	public $IncludeRelated;
	/**
	 * The Identifier
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Identifier;
	/**
	 * Constructor
	 * @param XiGlobalmasterTypeIssuerRelatedTypes IncludeRelated
	 * @param string Identifier
	 * @return XiGlobalmasterTypeGetIssuerByCompanyIdentifier
	 */
	public function __construct($_IncludeRelated,$_Identifier = null)
	{
		parent::__construct(array('IncludeRelated'=>$_IncludeRelated,'Identifier'=>$_Identifier));
	}
	/**
	 * Set IncludeRelated
	 * @param IssuerRelatedTypes IncludeRelated
	 * @return IssuerRelatedTypes
	 */
	public function setIncludeRelated($_IncludeRelated)
	{
		return ($this->IncludeRelated = XiGlobalmasterTypeIssuerRelatedTypes::valueIsValid($_IncludeRelated)?$_IncludeRelated:null);
	}
	/**
	 * Get IncludeRelated
	 * @return XiGlobalmasterTypeIssuerRelatedTypes
	 */
	public function getIncludeRelated()
	{
		return $this->IncludeRelated;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>