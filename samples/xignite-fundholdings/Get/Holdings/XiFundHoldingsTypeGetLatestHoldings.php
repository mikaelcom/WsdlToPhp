<?php
/**
 * Class file for XiFundHoldingsTypeGetLatestHoldings
 * @date 08/07/2012
 */
/**
 * Class XiFundHoldingsTypeGetLatestHoldings
 * @date 08/07/2012
 */
class XiFundHoldingsTypeGetLatestHoldings extends XiFundHoldingsWsdlClass
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
	 * The Count
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Count;
	/**
	 * Constructor
	 * @param string Identifier
	 * @param XiFundHoldingsTypeIdentifierTypes IdentifierType
	 * @param int Count
	 * @return XiFundHoldingsTypeGetLatestHoldings
	 */
	public function __construct($_Identifier = null,$_IdentifierType,$_Count)
	{
		parent::__construct(array('Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType,'Count'=>$_Count));
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
	 * Set Count
	 * @param int Count
	 * @return int
	 */
	public function setCount($_Count)
	{
		return ($this->Count = $_Count);
	}
	/**
	 * Get Count
	 * @return int
	 */
	public function getCount()
	{
		return $this->Count;
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