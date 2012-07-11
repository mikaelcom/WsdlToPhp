<?php
/**
 * Class file for XiFundsTypeGetHistoricalNAVsAsOfAdjusted
 * @date 08/07/2012
 */
/**
 * Class XiFundsTypeGetHistoricalNAVsAsOfAdjusted
 * @date 08/07/2012
 */
class XiFundsTypeGetHistoricalNAVsAsOfAdjusted extends XiFundsWsdlClass
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
	 * @var XiFundsTypeIdentifierTypes
	 */
	public $IdentifierType;
	/**
	 * The EndDate
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var dateTime
	 */
	public $EndDate;
	/**
	 * The PeriodType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFundsTypePeriodTypes
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
	 * The AdjustmentMethod
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var AdjustmentMethods
	 */
	public $AdjustmentMethod;
	/**
	 * Constructor
	 * @param string Identifier
	 * @param XiFundsTypeIdentifierTypes IdentifierType
	 * @param dateTime EndDate
	 * @param XiFundsTypePeriodTypes PeriodType
	 * @param int Periods
	 * @param AdjustmentMethods AdjustmentMethod
	 * @return XiFundsTypeGetHistoricalNAVsAsOfAdjusted
	 */
	public function __construct($_Identifier = null,$_IdentifierType,$_EndDate,$_PeriodType,$_Periods,$_AdjustmentMethod)
	{
		parent::__construct(array('Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType,'EndDate'=>$_EndDate,'PeriodType'=>$_PeriodType,'Periods'=>$_Periods,'AdjustmentMethod'=>$_AdjustmentMethod));
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
		return ($this->IdentifierType = XiFundsTypeIdentifierTypes::valueIsValid($_IdentifierType)?$_IdentifierType:null);
	}
	/**
	 * Get IdentifierType
	 * @return XiFundsTypeIdentifierTypes
	 */
	public function getIdentifierType()
	{
		return $this->IdentifierType;
	}
	/**
	 * Set EndDate
	 * @param dateTime EndDate
	 * @return dateTime
	 */
	public function setEndDate($_EndDate)
	{
		return ($this->EndDate = $_EndDate);
	}
	/**
	 * Get EndDate
	 * @return dateTime
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
		return ($this->PeriodType = XiFundsTypePeriodTypes::valueIsValid($_PeriodType)?$_PeriodType:null);
	}
	/**
	 * Get PeriodType
	 * @return XiFundsTypePeriodTypes
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>