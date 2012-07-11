<?php
/**
 * Class file for XiMetalsTypeGetHistoricalLondonFixing
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetHistoricalLondonFixing
 * @date 08/07/2012
 */
class XiMetalsTypeGetHistoricalLondonFixing extends XiMetalsWsdlClass
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
	 * The AsOfDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AsOfDate;
	/**
	 * Constructor
	 * @param XiMetalsTypeFixingTypes Type
	 * @param XiMetalsTypePeriodType PeriodType
	 * @param XiMetalsTypeFixingCurrencyTypes Currency
	 * @param string AsOfDate
	 * @return XiMetalsTypeGetHistoricalLondonFixing
	 */
	public function __construct($_Type,$_PeriodType,$_Currency,$_AsOfDate = null)
	{
		parent::__construct(array('Type'=>$_Type,'PeriodType'=>$_PeriodType,'Currency'=>$_Currency,'AsOfDate'=>$_AsOfDate));
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
	 * Set AsOfDate
	 * @param string AsOfDate
	 * @return string
	 */
	public function setAsOfDate($_AsOfDate)
	{
		return ($this->AsOfDate = $_AsOfDate);
	}
	/**
	 * Get AsOfDate
	 * @return string
	 */
	public function getAsOfDate()
	{
		return $this->AsOfDate;
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