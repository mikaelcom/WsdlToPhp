<?php
/**
 * Class file for XiGlobalHistoricalTypeGetTopGainersByExchange
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeGetTopGainersByExchange
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeGetTopGainersByExchange extends XiGlobalHistoricalWsdlClass
{
	/**
	 * The AsOfDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AsOfDate;
	/**
	 * The Count
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Count;
	/**
	 * The Exchange
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeExchangeTypes
	 */
	public $Exchange;
	/**
	 * Constructor
	 * @param string AsOfDate
	 * @param int Count
	 * @param XiGlobalHistoricalTypeExchangeTypes Exchange
	 * @return XiGlobalHistoricalTypeGetTopGainersByExchange
	 */
	public function __construct($_AsOfDate = null,$_Count,$_Exchange)
	{
		parent::__construct(array('AsOfDate'=>$_AsOfDate,'Count'=>$_Count,'Exchange'=>$_Exchange));
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
	 * Set Count
	 * @param int Count
	 * @return int
	 */
	public function setCount($_Count)
	{
		return ($this->Count = $_Count);
	}
	/**
	 * Get Count
	 * @return int
	 */
	public function getCount()
	{
		return $this->Count;
	}
	/**
	 * Set Exchange
	 * @param ExchangeTypes Exchange
	 * @return ExchangeTypes
	 */
	public function setExchange($_Exchange)
	{
		return ($this->Exchange = XiGlobalHistoricalTypeExchangeTypes::valueIsValid($_Exchange)?$_Exchange:null);
	}
	/**
	 * Get Exchange
	 * @return XiGlobalHistoricalTypeExchangeTypes
	 */
	public function getExchange()
	{
		return $this->Exchange;
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