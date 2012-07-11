<?php
/**
 * Class file for XiBondMasterTypeScreenBondResult
 * @date 08/07/2012
 */
/**
 * Class XiBondMasterTypeScreenBondResult
 * @date 08/07/2012
 */
class XiBondMasterTypeScreenBondResult extends XiBondMasterTypeCommon
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
	 * The BondInstrumentComposites
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondMasterTypeArrayOfBondInstrumentComposite
	 */
	public $BondInstrumentComposites;
	/**
	 * Constructor
	 * @param XiBondMasterTypeIssuer Issuer
	 * @param XiBondMasterTypeArrayOfBondInstrumentComposite BondInstrumentComposites
	 * @return XiBondMasterTypeScreenBondResult
	 */
	public function __construct($_Issuer = null,$_BondInstrumentComposites = null)
	{
		XiBondMasterWsdlClass::__construct(array('Issuer'=>$_Issuer,'BondInstrumentComposites'=>new XiBondMasterTypeArrayOfBondInstrumentComposite($_BondInstrumentComposites)));
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
	 * Set BondInstrumentComposites
	 * @param ArrayOfBondInstrumentComposite BondInstrumentComposites
	 * @return ArrayOfBondInstrumentComposite
	 */
	public function setBondInstrumentComposites($_BondInstrumentComposites)
	{
		return ($this->BondInstrumentComposites = $_BondInstrumentComposites);
	}
	/**
	 * Get BondInstrumentComposites
	 * @return XiBondMasterTypeArrayOfBondInstrumentComposite
	 */
	public function getBondInstrumentComposites()
	{
		return $this->BondInstrumentComposites;
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