<?php
/**
 * Class file for XiBondMasterTypeBondsByName
 * @date 08/07/2012
 */
/**
 * Class XiBondMasterTypeBondsByName
 * @date 08/07/2012
 */
class XiBondMasterTypeBondsByName extends XiBondMasterTypeCommon
{
	/**
	 * The Issuer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondMasterTypeIssuer
	 */
	public $Issuer;
	/**
	 * The InstrumentIdentifierBriefs
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondMasterTypeArrayOfInstrumentIdentifierBrief
	 */
	public $InstrumentIdentifierBriefs;
	/**
	 * Constructor
	 * @param XiBondMasterTypeIssuer Issuer
	 * @param XiBondMasterTypeArrayOfInstrumentIdentifierBrief InstrumentIdentifierBriefs
	 * @return XiBondMasterTypeBondsByName
	 */
	public function __construct($_Issuer = null,$_InstrumentIdentifierBriefs = null)
	{
		XiBondMasterWsdlClass::__construct(array('Issuer'=>$_Issuer,'InstrumentIdentifierBriefs'=>new XiBondMasterTypeArrayOfInstrumentIdentifierBrief($_InstrumentIdentifierBriefs)));
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
	 * @return XiBondMasterTypeArrayOfInstrumentIdentifierBrief
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