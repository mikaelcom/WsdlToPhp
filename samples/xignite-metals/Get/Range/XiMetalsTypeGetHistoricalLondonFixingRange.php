<?php
/**
 * Class file for XiMetalsTypeGetHistoricalLondonFixingRange
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetHistoricalLondonFixingRange
 * @date 08/07/2012
 */
class XiMetalsTypeGetHistoricalLondonFixingRange extends XiMetalsWsdlClass
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeFixingTypes
	 */
	public $Type;
	/**
	 * The PeriodType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypePeriodType
	 */
	public $PeriodType;
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeFixingCurrencyTypes
	 */
	public $Currency;
	/**
	 * The StartDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StartDate;
	/**
	 * The EndDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EndDate;
	/**
	 * Constructor
	 * @param XiMetalsTypeFixingTypes Type
	 * @param XiMetalsTypePeriodType PeriodType
	 * @param XiMetalsTypeFixingCurrencyTypes Currency
	 * @param string StartDate
	 * @param string EndDate
	 * @return XiMetalsTypeGetHistoricalLondonFixingRange
	 */
	public function __construct($_Type,$_PeriodType,$_Currency,$_StartDate = null,$_EndDate = null)
	{
		parent::__construct(array('Type'=>$_Type,'PeriodType'=>$_PeriodType,'Currency'=>$_Currency,'StartDate'=>$_StartDate,'EndDate'=>$_EndDate));
	}
	/**
	 * Set Type
	 * @param FixingTypes Type
	 * @return FixingTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiMetalsTypeFixingTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiMetalsTypeFixingTypes
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set PeriodType
	 * @param PeriodType PeriodType
	 * @return PeriodType
	 */
	public function setPeriodType($_PeriodType)
	{
		return ($this->PeriodType = XiMetalsTypePeriodType::valueIsValid($_PeriodType)?$_PeriodType:null);
	}
	/**
	 * Get PeriodType
	 * @return XiMetalsTypePeriodType
	 */
	public function getPeriodType()
	{
		return $this->PeriodType;
	}
	/**
	 * Set Currency
	 * @param FixingCurrencyTypes Currency
	 * @return FixingCurrencyTypes
	 */
	public function setCurrency($_Currency)
	{
		return ($this->Currency = XiMetalsTypeFixingCurrencyTypes::valueIsValid($_Currency)?$_Currency:null);
	}
	/**
	 * Get Currency
	 * @return XiMetalsTypeFixingCurrencyTypes
	 */
	public function getCurrency()
	{
		return $this->Currency;
	}
	/**
	 * Set StartDate
	 * @param string StartDate
	 * @return string
	 */
	public function setStartDate($_StartDate)
	{
		return ($this->StartDate = $_StartDate);
	}
	/**
	 * Get StartDate
	 * @return string
	 */
	public function getStartDate()
	{
		return $this->StartDate;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>