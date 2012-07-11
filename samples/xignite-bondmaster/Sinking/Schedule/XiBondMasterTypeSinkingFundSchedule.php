<?php
/**
 * Class file for XiBondMasterTypeSinkingFundSchedule
 * @date 08/07/2012
 */
/**
 * Class XiBondMasterTypeSinkingFundSchedule
 * @date 08/07/2012
 */
class XiBondMasterTypeSinkingFundSchedule extends XiBondMasterTypeCommon
{
	/**
	 * The DateFrom
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DateFrom;
	/**
	 * The DateUntil
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DateUntil;
	/**
	 * The AmortizationType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AmortizationType;
	/**
	 * The AmortizationFrequency
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AmortizationFrequency;
	/**
	 * The TimeUnit
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TimeUnit;
	/**
	 * The PlannedAmortizationAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PlannedAmortizationAmount;
	/**
	 * The PlannedAmortizationAmountQuotation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PlannedAmortizationAmountQuotation;
	/**
	 * The PrincipalPoolFactor
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PrincipalPoolFactor;
	/**
	 * Constructor
	 * @param string DateFrom
	 * @param string DateUntil
	 * @param string AmortizationType
	 * @param string AmortizationFrequency
	 * @param string TimeUnit
	 * @param string PlannedAmortizationAmount
	 * @param string PlannedAmortizationAmountQuotation
	 * @param string PrincipalPoolFactor
	 * @return XiBondMasterTypeSinkingFundSchedule
	 */
	public function __construct($_DateFrom = null,$_DateUntil = null,$_AmortizationType = null,$_AmortizationFrequency = null,$_TimeUnit = null,$_PlannedAmortizationAmount = null,$_PlannedAmortizationAmountQuotation = null,$_PrincipalPoolFactor = null)
	{
		XiBondMasterWsdlClass::__construct(array('DateFrom'=>$_DateFrom,'DateUntil'=>$_DateUntil,'AmortizationType'=>$_AmortizationType,'AmortizationFrequency'=>$_AmortizationFrequency,'TimeUnit'=>$_TimeUnit,'PlannedAmortizationAmount'=>$_PlannedAmortizationAmount,'PlannedAmortizationAmountQuotation'=>$_PlannedAmortizationAmountQuotation,'PrincipalPoolFactor'=>$_PrincipalPoolFactor));
	}
	/**
	 * Set DateFrom
	 * @param string DateFrom
	 * @return string
	 */
	public function setDateFrom($_DateFrom)
	{
		return ($this->DateFrom = $_DateFrom);
	}
	/**
	 * Get DateFrom
	 * @return string
	 */
	public function getDateFrom()
	{
		return $this->DateFrom;
	}
	/**
	 * Set DateUntil
	 * @param string DateUntil
	 * @return string
	 */
	public function setDateUntil($_DateUntil)
	{
		return ($this->DateUntil = $_DateUntil);
	}
	/**
	 * Get DateUntil
	 * @return string
	 */
	public function getDateUntil()
	{
		return $this->DateUntil;
	}
	/**
	 * Set AmortizationType
	 * @param string AmortizationType
	 * @return string
	 */
	public function setAmortizationType($_AmortizationType)
	{
		return ($this->AmortizationType = $_AmortizationType);
	}
	/**
	 * Get AmortizationType
	 * @return string
	 */
	public function getAmortizationType()
	{
		return $this->AmortizationType;
	}
	/**
	 * Set AmortizationFrequency
	 * @param string AmortizationFrequency
	 * @return string
	 */
	public function setAmortizationFrequency($_AmortizationFrequency)
	{
		return ($this->AmortizationFrequency = $_AmortizationFrequency);
	}
	/**
	 * Get AmortizationFrequency
	 * @return string
	 */
	public function getAmortizationFrequency()
	{
		return $this->AmortizationFrequency;
	}
	/**
	 * Set TimeUnit
	 * @param string TimeUnit
	 * @return string
	 */
	public function setTimeUnit($_TimeUnit)
	{
		return ($this->TimeUnit = $_TimeUnit);
	}
	/**
	 * Get TimeUnit
	 * @return string
	 */
	public function getTimeUnit()
	{
		return $this->TimeUnit;
	}
	/**
	 * Set PlannedAmortizationAmount
	 * @param string PlannedAmortizationAmount
	 * @return string
	 */
	public function setPlannedAmortizationAmount($_PlannedAmortizationAmount)
	{
		return ($this->PlannedAmortizationAmount = $_PlannedAmortizationAmount);
	}
	/**
	 * Get PlannedAmortizationAmount
	 * @return string
	 */
	public function getPlannedAmortizationAmount()
	{
		return $this->PlannedAmortizationAmount;
	}
	/**
	 * Set PlannedAmortizationAmountQuotation
	 * @param string PlannedAmortizationAmountQuotation
	 * @return string
	 */
	public function setPlannedAmortizationAmountQuotation($_PlannedAmortizationAmountQuotation)
	{
		return ($this->PlannedAmortizationAmountQuotation = $_PlannedAmortizationAmountQuotation);
	}
	/**
	 * Get PlannedAmortizationAmountQuotation
	 * @return string
	 */
	public function getPlannedAmortizationAmountQuotation()
	{
		return $this->PlannedAmortizationAmountQuotation;
	}
	/**
	 * Set PrincipalPoolFactor
	 * @param string PrincipalPoolFactor
	 * @return string
	 */
	public function setPrincipalPoolFactor($_PrincipalPoolFactor)
	{
		return ($this->PrincipalPoolFactor = $_PrincipalPoolFactor);
	}
	/**
	 * Get PrincipalPoolFactor
	 * @return string
	 */
	public function getPrincipalPoolFactor()
	{
		return $this->PrincipalPoolFactor;
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