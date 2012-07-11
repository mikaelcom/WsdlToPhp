<?php
/**
 * Class file for XiBondMasterTypeBondDescription
 * @date 08/07/2012
 */
/**
 * Class XiBondMasterTypeBondDescription
 * @date 08/07/2012
 */
class XiBondMasterTypeBondDescription extends XiBondMasterTypeCommon
{
	/**
	 * The InstrumentIdentifier
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondMasterTypeInstrumentIdentifier
	 */
	public $InstrumentIdentifier;
	/**
	 * The Issuer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondMasterTypeIssuer
	 */
	public $Issuer;
	/**
	 * The BondInstrument
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondMasterTypeBondInstrument
	 */
	public $BondInstrument;
	/**
	 * Constructor
	 * @param XiBondMasterTypeInstrumentIdentifier InstrumentIdentifier
	 * @param XiBondMasterTypeIssuer Issuer
	 * @param XiBondMasterTypeBondInstrument BondInstrument
	 * @return XiBondMasterTypeBondDescription
	 */
	public function __construct($_InstrumentIdentifier = null,$_Issuer = null,$_BondInstrument = null)
	{
		XiBondMasterWsdlClass::__construct(array('InstrumentIdentifier'=>$_InstrumentIdentifier,'Issuer'=>$_Issuer,'BondInstrument'=>$_BondInstrument));
	}
	/**
	 * Set InstrumentIdentifier
	 * @param InstrumentIdentifier InstrumentIdentifier
	 * @return InstrumentIdentifier
	 */
	public function setInstrumentIdentifier($_InstrumentIdentifier)
	{
		return ($this->InstrumentIdentifier = $_InstrumentIdentifier);
	}
	/**
	 * Get InstrumentIdentifier
	 * @return XiBondMasterTypeInstrumentIdentifier
	 */
	public function getInstrumentIdentifier()
	{
		return $this->InstrumentIdentifier;
	}
	/**
	 * Set Issuer
	 * @param Issuer Issuer
	 * @return Issuer
	 */
	public function setIssuer($_Issuer)
	{
		return ($this->Issuer = $_Issuer);
	}
	/**
	 * Get Issuer
	 * @return XiBondMasterTypeIssuer
	 */
	public function getIssuer()
	{
		return $this->Issuer;
	}
	/**
	 * Set BondInstrument
	 * @param BondInstrument BondInstrument
	 * @return BondInstrument
	 */
	public function setBondInstrument($_BondInstrument)
	{
		return ($this->BondInstrument = $_BondInstrument);
	}
	/**
	 * Get BondInstrument
	 * @return XiBondMasterTypeBondInstrument
	 */
	public function getBondInstrument()
	{
		return $this->BondInstrument;
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