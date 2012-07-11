<?php
/**
 * Class file for XiGlobalmasterTypeAlternateSecurityIdentifier
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeAlternateSecurityIdentifier
 * @date 08/07/2012
 */
class XiGlobalmasterTypeAlternateSecurityIdentifier extends XiGlobalmasterWsdlClass
{
	/**
	 * The AlternateIdentifier
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AlternateIdentifier;
	/**
	 * The IdentifierType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiGlobalmasterTypeAlternateIdentifierTypes
	 */
	public $IdentifierType;
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
	 * @param string AlternateIdentifier
	 * @param XiGlobalmasterTypeAlternateIdentifierTypes IdentifierType
	 * @param string StartDate
	 * @param string EndDate
	 * @return XiGlobalmasterTypeAlternateSecurityIdentifier
	 */
	public function __construct($_AlternateIdentifier = null,$_IdentifierType,$_StartDate = null,$_EndDate = null)
	{
		parent::__construct(array('AlternateIdentifier'=>$_AlternateIdentifier,'IdentifierType'=>$_IdentifierType,'StartDate'=>$_StartDate,'EndDate'=>$_EndDate));
	}
	/**
	 * Set AlternateIdentifier
	 * @param string AlternateIdentifier
	 * @return string
	 */
	public function setAlternateIdentifier($_AlternateIdentifier)
	{
		return ($this->AlternateIdentifier = $_AlternateIdentifier);
	}
	/**
	 * Get AlternateIdentifier
	 * @return string
	 */
	public function getAlternateIdentifier()
	{
		return $this->AlternateIdentifier;
	}
	/**
	 * Set IdentifierType
	 * @param AlternateIdentifierTypes IdentifierType
	 * @return AlternateIdentifierTypes
	 */
	public function setIdentifierType($_IdentifierType)
	{
		return ($this->IdentifierType = XiGlobalmasterTypeAlternateIdentifierTypes::valueIsValid($_IdentifierType)?$_IdentifierType:null);
	}
	/**
	 * Get IdentifierType
	 * @return XiGlobalmasterTypeAlternateIdentifierTypes
	 */
	public function getIdentifierType()
	{
		return $this->IdentifierType;
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