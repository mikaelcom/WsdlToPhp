<?php
/**
 * Class file for XiGlobalBondMasterTypeBondsByIssuer
 * @date 08/07/2012
 */
/**
 * Class XiGlobalBondMasterTypeBondsByIssuer
 * @date 08/07/2012
 */
class XiGlobalBondMasterTypeBondsByIssuer extends XiGlobalBondMasterTypeCommon
{
	/**
	 * The Issuer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalBondMasterTypeIssuer
	 */
	public $Issuer;
	/**
	 * The InstrumentIdentifierBriefs
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalBondMasterTypeArrayOfInstrumentIdentifierBrief
	 */
	public $InstrumentIdentifierBriefs;
	/**
	 * Constructor
	 * @param XiGlobalBondMasterTypeIssuer Issuer
	 * @param XiGlobalBondMasterTypeArrayOfInstrumentIdentifierBrief InstrumentIdentifierBriefs
	 * @return XiGlobalBondMasterTypeBondsByIssuer
	 */
	public function __construct($_Issuer = null,$_InstrumentIdentifierBriefs = null)
	{
		XiGlobalBondMasterWsdlClass::__construct(array('Issuer'=>$_Issuer,'InstrumentIdentifierBriefs'=>new XiGlobalBondMasterTypeArrayOfInstrumentIdentifierBrief($_InstrumentIdentifierBriefs)));
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
	 * Set InstrumentIdentifierBriefs
	 * @param ArrayOfInstrumentIdentifierBrief InstrumentIdentifierBriefs
	 * @return ArrayOfInstrumentIdentifierBrief
	 */
	public function setInstrumentIdentifierBriefs($_InstrumentIdentifierBriefs)
	{
		return ($this->InstrumentIdentifierBriefs = $_InstrumentIdentifierBriefs);
	}
	/**
	 * Get InstrumentIdentifierBriefs
	 * @return XiGlobalBondMasterTypeArrayOfInstrumentIdentifierBrief
	 */
	public function getInstrumentIdentifierBriefs()
	{
		return $this->InstrumentIdentifierBriefs;
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