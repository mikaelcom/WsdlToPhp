<?php
/**
 * Class file for XiGlobalBondMasterTypeBondDescription
 * @date 08/07/2012
 */
/**
 * Class XiGlobalBondMasterTypeBondDescription
 * @date 08/07/2012
 */
class XiGlobalBondMasterTypeBondDescription extends XiGlobalBondMasterTypeCommon
{
	/**
	 * The InstrumentIdentifier
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalBondMasterTypeInstrumentIdentifier
	 */
	public $InstrumentIdentifier;
	/**
	 * The Issuer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalBondMasterTypeIssuer
	 */
	public $Issuer;
	/**
	 * The BondInstrumentBrief
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalBondMasterTypeBondInstrumentBrief
	 */
	public $BondInstrumentBrief;
	/**
	 * Constructor
	 * @param XiGlobalBondMasterTypeInstrumentIdentifier InstrumentIdentifier
	 * @param XiGlobalBondMasterTypeIssuer Issuer
	 * @param XiGlobalBondMasterTypeBondInstrumentBrief BondInstrumentBrief
	 * @return XiGlobalBondMasterTypeBondDescription
	 */
	public function __construct($_InstrumentIdentifier = null,$_Issuer = null,$_BondInstrumentBrief = null)
	{
		XiGlobalBondMasterWsdlClass::__construct(array('InstrumentIdentifier'=>$_InstrumentIdentifier,'Issuer'=>$_Issuer,'BondInstrumentBrief'=>$_BondInstrumentBrief));
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
	 * @return XiGlobalBondMasterTypeInstrumentIdentifier
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
	 * @return XiGlobalBondMasterTypeIssuer
	 */
	public function getIssuer()
	{
		return $this->Issuer;
	}
	/**
	 * Set BondInstrumentBrief
	 * @param BondInstrumentBrief BondInstrumentBrief
	 * @return BondInstrumentBrief
	 */
	public function setBondInstrumentBrief($_BondInstrumentBrief)
	{
		return ($this->BondInstrumentBrief = $_BondInstrumentBrief);
	}
	/**
	 * Get BondInstrumentBrief
	 * @return XiGlobalBondMasterTypeBondInstrumentBrief
	 */
	public function getBondInstrumentBrief()
	{
		return $this->BondInstrumentBrief;
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