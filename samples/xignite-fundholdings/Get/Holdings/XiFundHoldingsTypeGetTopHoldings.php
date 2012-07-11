<?php
/**
 * Class file for XiFundHoldingsTypeGetTopHoldings
 * @date 08/07/2012
 */
/**
 * Class XiFundHoldingsTypeGetTopHoldings
 * @date 08/07/2012
 */
class XiFundHoldingsTypeGetTopHoldings extends XiFundHoldingsWsdlClass
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
	 * @var XiFundHoldingsTypeIdentifierTypes
	 */
	public $IdentifierType;
	/**
	 * The TopType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFundHoldingsTypeTopTypes
	 */
	public $TopType;
	/**
	 * Constructor
	 * @param string Identifier
	 * @param XiFundHoldingsTypeIdentifierTypes IdentifierType
	 * @param XiFundHoldingsTypeTopTypes TopType
	 * @return XiFundHoldingsTypeGetTopHoldings
	 */
	public function __construct($_Identifier = null,$_IdentifierType,$_TopType)
	{
		parent::__construct(array('Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType,'TopType'=>$_TopType));
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
		return ($this->IdentifierType = XiFundHoldingsTypeIdentifierTypes::valueIsValid($_IdentifierType)?$_IdentifierType:null);
	}
	/**
	 * Get IdentifierType
	 * @return XiFundHoldingsTypeIdentifierTypes
	 */
	public function getIdentifierType()
	{
		return $this->IdentifierType;
	}
	/**
	 * Set TopType
	 * @param TopTypes TopType
	 * @return TopTypes
	 */
	public function setTopType($_TopType)
	{
		return ($this->TopType = XiFundHoldingsTypeTopTypes::valueIsValid($_TopType)?$_TopType:null);
	}
	/**
	 * Get TopType
	 * @return XiFundHoldingsTypeTopTypes
	 */
	public function getTopType()
	{
		return $this->TopType;
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