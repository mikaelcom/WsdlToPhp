<?php
/**
 * Class file for XiFundDataTypeEquityClassification
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeEquityClassification
 * @date 08/07/2012
 */
class XiFundDataTypeEquityClassification extends XiFundDataWsdlClass
{
	/**
	 * The InvestmentObjective
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeInvestmentObjectives
	 */
	public $InvestmentObjective;
	/**
	 * Constructor
	 * @param XiFundDataTypeInvestmentObjectives InvestmentObjective
	 * @return XiFundDataTypeEquityClassification
	 */
	public function __construct($_InvestmentObjective)
	{
		parent::__construct(array('InvestmentObjective'=>$_InvestmentObjective));
	}
	/**
	 * Set InvestmentObjective
	 * @param InvestmentObjectives InvestmentObjective
	 * @return InvestmentObjectives
	 */
	public function setInvestmentObjective($_InvestmentObjective)
	{
		return ($this->InvestmentObjective = XiFundDataTypeInvestmentObjectives::valueIsValid($_InvestmentObjective)?$_InvestmentObjective:null);
	}
	/**
	 * Get InvestmentObjective
	 * @return XiFundDataTypeInvestmentObjectives
	 */
	public function getInvestmentObjective()
	{
		return $this->InvestmentObjective;
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