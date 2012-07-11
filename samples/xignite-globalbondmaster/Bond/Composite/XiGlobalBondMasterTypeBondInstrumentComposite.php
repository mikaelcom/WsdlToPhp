<?php
/**
 * Class file for XiGlobalBondMasterTypeBondInstrumentComposite
 * @date 08/07/2012
 */
/**
 * Class XiGlobalBondMasterTypeBondInstrumentComposite
 * @date 08/07/2012
 */
class XiGlobalBondMasterTypeBondInstrumentComposite extends XiGlobalBondMasterWsdlClass
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
	 * @param XiGlobalBondMasterTypeBondInstrumentBrief BondInstrumentBrief
	 * @return XiGlobalBondMasterTypeBondInstrumentComposite
	 */
	public function __construct($_InstrumentIdentifier = null,$_BondInstrumentBrief = null)
	{
		parent::__construct(array('InstrumentIdentifier'=>$_InstrumentIdentifier,'BondInstrumentBrief'=>$_BondInstrumentBrief));
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