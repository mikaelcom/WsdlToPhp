<?php
/**
 * Class file for XiHistoricalTypeGetHistoricalQuotesAsOf
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeGetHistoricalQuotesAsOf
 * @date 08/07/2012
 */
class XiHistoricalTypeGetHistoricalQuotesAsOf extends XiHistoricalWsdlClass
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
	 * @var XiHistoricalTypeIdentifierTypes
	 */
	public $IdentifierType;
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
	 * @var XiHistoricalTypePeriodTypes
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
	 * @param XiHistoricalTypeIdentifierTypes IdentifierType
	 * @param string EndDate
	 * @param XiHistoricalTypePeriodTypes PeriodType
	 * @param int Periods
	 * @return XiHistoricalTypeGetHistoricalQuotesAsOf
	 */
	public function __construct($_Identifier = null,$_IdentifierType,$_EndDate = null,$_PeriodType,$_Periods)
	{
		parent::__construct(array('Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType,'EndDate'=>$_EndDate,'PeriodType'=>$_PeriodType,'Periods'=>$_Periods));
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
		return ($this->IdentifierType = XiHistoricalTypeIdentifierTypes::valueIsValid($_IdentifierType)?$_IdentifierType:null);
	}
	/**
	 * Get IdentifierType
	 * @return XiHistoricalTypeIdentifierTypes
	 */
	public function getIdentifierType()
	{
		return $this->IdentifierType;
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
		return ($this->PeriodType = XiHistoricalTypePeriodTypes::valueIsValid($_PeriodType)?$_PeriodType:null);
	}
	/**
	 * Get PeriodType
	 * @return XiHistoricalTypePeriodTypes
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