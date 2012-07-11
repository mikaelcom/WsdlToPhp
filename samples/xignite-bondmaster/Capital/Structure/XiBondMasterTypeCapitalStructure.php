<?php
/**
 * Class file for XiBondMasterTypeCapitalStructure
 * @date 08/07/2012
 */
/**
 * Class XiBondMasterTypeCapitalStructure
 * @date 08/07/2012
 */
class XiBondMasterTypeCapitalStructure extends XiBondMasterWsdlClass
{
	/**
	 * The CapitalType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CapitalType;
	/**
	 * The NominalCapital
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $NominalCapital;
	/**
	 * The EffectiveDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EffectiveDate;
	/**
	 * Constructor
	 * @param string CapitalType
	 * @param string NominalCapital
	 * @param string EffectiveDate
	 * @return XiBondMasterTypeCapitalStructure
	 */
	public function __construct($_CapitalType = null,$_NominalCapital = null,$_EffectiveDate = null)
	{
		parent::__construct(array('CapitalType'=>$_CapitalType,'NominalCapital'=>$_NominalCapital,'EffectiveDate'=>$_EffectiveDate));
	}
	/**
	 * Set CapitalType
	 * @param string CapitalType
	 * @return string
	 */
	public function setCapitalType($_CapitalType)
	{
		return ($this->CapitalType = $_CapitalType);
	}
	/**
	 * Get CapitalType
	 * @return string
	 */
	public function getCapitalType()
	{
		return $this->CapitalType;
	}
	/**
	 * Set NominalCapital
	 * @param string NominalCapital
	 * @return string
	 */
	public function setNominalCapital($_NominalCapital)
	{
		return ($this->NominalCapital = $_NominalCapital);
	}
	/**
	 * Get NominalCapital
	 * @return string
	 */
	public function getNominalCapital()
	{
		return $this->NominalCapital;
	}
	/**
	 * Set EffectiveDate
	 * @param string EffectiveDate
	 * @return string
	 */
	public function setEffectiveDate($_EffectiveDate)
	{
		return ($this->EffectiveDate = $_EffectiveDate);
	}
	/**
	 * Get EffectiveDate
	 * @return string
	 */
	public function getEffectiveDate()
	{
		return $this->EffectiveDate;
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