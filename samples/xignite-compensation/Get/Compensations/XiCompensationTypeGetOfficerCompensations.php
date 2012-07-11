<?php
/**
 * Class file for XiCompensationTypeGetOfficerCompensations
 * @date 08/07/2012
 */
/**
 * Class XiCompensationTypeGetOfficerCompensations
 * @date 08/07/2012
 */
class XiCompensationTypeGetOfficerCompensations extends XiCompensationWsdlClass
{
	/**
	 * The OfficerID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $OfficerID;
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
	 * @var XiCompensationTypeIdentifierTypes
	 */
	public $IdentifierType;
	/**
	 * Constructor
	 * @param string OfficerID
	 * @param string Identifier
	 * @param XiCompensationTypeIdentifierTypes IdentifierType
	 * @return XiCompensationTypeGetOfficerCompensations
	 */
	public function __construct($_OfficerID = null,$_Identifier = null,$_IdentifierType)
	{
		parent::__construct(array('OfficerID'=>$_OfficerID,'Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType));
	}
	/**
	 * Set OfficerID
	 * @param string OfficerID
	 * @return string
	 */
	public function setOfficerID($_OfficerID)
	{
		return ($this->OfficerID = $_OfficerID);
	}
	/**
	 * Get OfficerID
	 * @return string
	 */
	public function getOfficerID()
	{
		return $this->OfficerID;
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
		return ($this->IdentifierType = XiCompensationTypeIdentifierTypes::valueIsValid($_IdentifierType)?$_IdentifierType:null);
	}
	/**
	 * Get IdentifierType
	 * @return XiCompensationTypeIdentifierTypes
	 */
	public function getIdentifierType()
	{
		return $this->IdentifierType;
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