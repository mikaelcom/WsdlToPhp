<?php
/**
 * Class file for XiGlobalHistoricalTypeGetGlobalHistoricalQuotesAsOf
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeGetGlobalHistoricalQuotesAsOf
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeGetGlobalHistoricalQuotesAsOf extends XiGlobalHistoricalWsdlClass
{
	/**
	 * The Identifier
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Identifier;
	/**
	 * The IdentifierType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeIdentifierTypes
	 */
	public $IdentifierType;
	/**
	 * The AdjustmentMethod
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var AdjustmentMethods
	 */
	public $AdjustmentMethod;
	/**
	 * The EndDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EndDate;
	/**
	 * The PeriodType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypePeriodTypes
	 */
	public $PeriodType;
	/**
	 * The Periods
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Periods;
	/**
	 * Constructor
	 * @param string Identifier
	 * @param XiGlobalHistoricalTypeIdentifierTypes IdentifierType
	 * @param AdjustmentMethods AdjustmentMethod
	 * @param string EndDate
	 * @param XiGlobalHistoricalTypePeriodTypes PeriodType
	 * @param int Periods
	 * @return XiGlobalHistoricalTypeGetGlobalHistoricalQuotesAsOf
	 */
	public function __construct($_Identifier = null,$_IdentifierType,$_AdjustmentMethod,$_EndDate = null,$_PeriodType,$_Periods)
	{
		parent::__construct(array('Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType,'AdjustmentMethod'=>$_AdjustmentMethod,'EndDate'=>$_EndDate,'PeriodType'=>$_PeriodType,'Periods'=>$_Periods));
	}
	/**
	 * Set Identifier
	 * @param string Identifier
	 * @return string
	 */
	public function setIdentifier($_Identifier)
	{
		return ($this->Identifier = $_Identifier);
	}
	/**
	 * Get Identifier
	 * @return string
	 */
	public function getIdentifier()
	{
		return $this->Identifier;
	}
	/**
	 * Set IdentifierType
	 * @param IdentifierTypes IdentifierType
	 * @return IdentifierTypes
	 */
	public function setIdentifierType($_IdentifierType)
	{
		return ($this->IdentifierType = XiGlobalHistoricalTypeIdentifierTypes::valueIsValid($_IdentifierType)?$_IdentifierType:null);
	}
	/**
	 * Get IdentifierType
	 * @return XiGlobalHistoricalTypeIdentifierTypes
	 */
	public function getIdentifierType()
	{
		return $this->IdentifierType;
	}
	/**
	 * Set AdjustmentMethod
	 * @param AdjustmentMethods AdjustmentMethod
	 * @return AdjustmentMethods
	 */
	public function setAdjustmentMethod($_AdjustmentMethod)
	{
		return ($this->AdjustmentMethod = $_AdjustmentMethod);
	}
	/**
	 * Get AdjustmentMethod
	 * @return AdjustmentMethods
	 */
	public function getAdjustmentMethod()
	{
		return $this->AdjustmentMethod;
	}
	/**
	 * Set EndDate
	 * @param string EndDate
	 * @return string
	 */
	public function setEndDate($_EndDate)
	{
		return ($this->EndDate = $_EndDate);
	}
	/**
	 * Get EndDate
	 * @return string
	 */
	public function getEndDate()
	{
		return $this->EndDate;
	}
	/**
	 * Set PeriodType
	 * @param PeriodTypes PeriodType
	 * @return PeriodTypes
	 */
	public function setPeriodType($_PeriodType)
	{
		return ($this->PeriodType = XiGlobalHistoricalTypePeriodTypes::valueIsValid($_PeriodType)?$_PeriodType:null);
	}
	/**
	 * Get PeriodType
	 * @return XiGlobalHistoricalTypePeriodTypes
	 */
	public function getPeriodType()
	{
		return $this->PeriodType;
	}
	/**
	 * Set Periods
	 * @param int Periods
	 * @return int
	 */
	public function setPeriods($_Periods)
	{
		return ($this->Periods = $_Periods);
	}
	/**
	 * Get Periods
	 * @return int
	 */
	public function getPeriods()
	{
		return $this->Periods;
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