<?php
/**
 * Class file for XiBondMasterTypeCapitalStructureComposite
 * @date 08/07/2012
 */
/**
 * Class XiBondMasterTypeCapitalStructureComposite
 * @date 08/07/2012
 */
class XiBondMasterTypeCapitalStructureComposite extends XiBondMasterTypeCommon
{
	/**
	 * The ShortName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ShortName;
	/**
	 * The InstrumentIdentifier
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondMasterTypeInstrumentIdentifier
	 */
	public $InstrumentIdentifier;
	/**
	 * The CapitalStructures
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondMasterTypeArrayOfCapitalStructure
	 */
	public $CapitalStructures;
	/**
	 * Constructor
	 * @param string ShortName
	 * @param XiBondMasterTypeInstrumentIdentifier InstrumentIdentifier
	 * @param XiBondMasterTypeArrayOfCapitalStructure CapitalStructures
	 * @return XiBondMasterTypeCapitalStructureComposite
	 */
	public function __construct($_ShortName = null,$_InstrumentIdentifier = null,$_CapitalStructures = null)
	{
		XiBondMasterWsdlClass::__construct(array('ShortName'=>$_ShortName,'InstrumentIdentifier'=>$_InstrumentIdentifier,'CapitalStructures'=>new XiBondMasterTypeArrayOfCapitalStructure($_CapitalStructures)));
	}
	/**
	 * Set ShortName
	 * @param string ShortName
	 * @return string
	 */
	public function setShortName($_ShortName)
	{
		return ($this->ShortName = $_ShortName);
	}
	/**
	 * Get ShortName
	 * @return string
	 */
	public function getShortName()
	{
		return $this->ShortName;
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
	 * Set CapitalStructures
	 * @param ArrayOfCapitalStructure CapitalStructures
	 * @return ArrayOfCapitalStructure
	 */
	public function setCapitalStructures($_CapitalStructures)
	{
		return ($this->CapitalStructures = $_CapitalStructures);
	}
	/**
	 * Get CapitalStructures
	 * @return XiBondMasterTypeArrayOfCapitalStructure
	 */
	public function getCapitalStructures()
	{
		return $this->CapitalStructures;
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