<?php
/**
 * Class file for XiFundDataTypeGetFundsPerformance
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeGetFundsPerformance
 * @date 08/07/2012
 */
class XiFundDataTypeGetFundsPerformance extends XiFundDataWsdlClass
{
	/**
	 * The Identifiers
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Identifiers;
	/**
	 * The IdentifierType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeIdentifierTypes
	 */
	public $IdentifierType;
	/**
	 * Constructor
	 * @param string Identifiers
	 * @param XiFundDataTypeIdentifierTypes IdentifierType
	 * @return XiFundDataTypeGetFundsPerformance
	 */
	public function __construct($_Identifiers = null,$_IdentifierType)
	{
		parent::__construct(array('Identifiers'=>$_Identifiers,'IdentifierType'=>$_IdentifierType));
	}
	/**
	 * Set Identifiers
	 * @param string Identifiers
	 * @return string
	 */
	public function setIdentifiers($_Identifiers)
	{
		return ($this->Identifiers = $_Identifiers);
	}
	/**
	 * Get Identifiers
	 * @return string
	 */
	public function getIdentifiers()
	{
		return $this->Identifiers;
	}
	/**
	 * Set IdentifierType
	 * @param IdentifierTypes IdentifierType
	 * @return IdentifierTypes
	 */
	public function setIdentifierType($_IdentifierType)
	{
		return ($this->IdentifierType = XiFundDataTypeIdentifierTypes::valueIsValid($_IdentifierType)?$_IdentifierType:null);
	}
	/**
	 * Get IdentifierType
	 * @return XiFundDataTypeIdentifierTypes
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