<?php
/**
 * Class file for XiBondMasterTypeBondInstrumentComposite
 * @date 08/07/2012
 */
/**
 * Class XiBondMasterTypeBondInstrumentComposite
 * @date 08/07/2012
 */
class XiBondMasterTypeBondInstrumentComposite extends XiBondMasterWsdlClass
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
	 * @param XiBondMasterTypeBondInstrument BondInstrument
	 * @return XiBondMasterTypeBondInstrumentComposite
	 */
	public function __construct($_InstrumentIdentifier = null,$_BondInstrument = null)
	{
		parent::__construct(array('InstrumentIdentifier'=>$_InstrumentIdentifier,'BondInstrument'=>$_BondInstrument));
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