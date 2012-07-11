<?php
/**
 * Class file for XiGlobalBondMasterTypeScreenBondResult
 * @date 08/07/2012
 */
/**
 * Class XiGlobalBondMasterTypeScreenBondResult
 * @date 08/07/2012
 */
class XiGlobalBondMasterTypeScreenBondResult extends XiGlobalBondMasterTypeCommon
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
	 * The BondInstrumentComposites
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalBondMasterTypeArrayOfBondInstrumentComposite
	 */
	public $BondInstrumentComposites;
	/**
	 * Constructor
	 * @param XiGlobalBondMasterTypeIssuer Issuer
	 * @param XiGlobalBondMasterTypeArrayOfBondInstrumentComposite BondInstrumentComposites
	 * @return XiGlobalBondMasterTypeScreenBondResult
	 */
	public function __construct($_Issuer = null,$_BondInstrumentComposites = null)
	{
		XiGlobalBondMasterWsdlClass::__construct(array('Issuer'=>$_Issuer,'BondInstrumentComposites'=>new XiGlobalBondMasterTypeArrayOfBondInstrumentComposite($_BondInstrumentComposites)));
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
	 * @return XiGlobalBondMasterTypeArrayOfBondInstrumentComposite
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