<?php
/**
 * Class file for XiBondsRealTimeTypeBondAccruedInterest
 * @date 08/07/2012
 */
/**
 * Class XiBondsRealTimeTypeBondAccruedInterest
 * @date 08/07/2012
 */
class XiBondsRealTimeTypeBondAccruedInterest extends XiBondsRealTimeWsdlClass
{
	/**
	 * The ShortName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ShortName;
	/**
	 * The Symbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Symbol;
	/**
	 * The PriceSource
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PriceSource;
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Currency;
	/**
	 * The AccruedInterest
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AccruedInterest;
	/**
	 * The AccruedInterestDayCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AccruedInterestDayCount;
	/**
	 * The AccruedInterestDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AccruedInterestDate;
	/**
	 * The AccruedInterestTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AccruedInterestTime;
	/**
	 * The AccruedInterestDPlus3
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AccruedInterestDPlus3;
	/**
	 * The NoOfAccruedDays
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $NoOfAccruedDays;
	/**
	 * The DailyAccruedInterest
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $DailyAccruedInterest;
	/**
	 * The ExDividendAccruedInterestTradeDate
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ExDividendAccruedInterestTradeDate;
	/**
	 * The ExDividendAccruedInterestSetDate
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ExDividendAccruedInterestSetDate;
	/**
	 * Constructor
	 * @param string ShortName
	 * @param string Symbol
	 * @param string PriceSource
	 * @param string Currency
	 * @param double AccruedInterest
	 * @param string AccruedInterestDayCount
	 * @param string AccruedInterestDate
	 * @param string AccruedInterestTime
	 * @param double AccruedInterestDPlus3
	 * @param int NoOfAccruedDays
	 * @param double DailyAccruedInterest
	 * @param double ExDividendAccruedInterestTradeDate
	 * @param double ExDividendAccruedInterestSetDate
	 * @return XiBondsRealTimeTypeBondAccruedInterest
	 */
	public function __construct($_ShortName = null,$_Symbol = null,$_PriceSource = null,$_Currency = null,$_AccruedInterest,$_AccruedInterestDayCount = null,$_AccruedInterestDate = null,$_AccruedInterestTime = null,$_AccruedInterestDPlus3,$_NoOfAccruedDays,$_DailyAccruedInterest,$_ExDividendAccruedInterestTradeDate,$_ExDividendAccruedInterestSetDate)
	{
		parent::__construct(array('ShortName'=>$_ShortName,'Symbol'=>$_Symbol,'PriceSource'=>$_PriceSource,'Currency'=>$_Currency,'AccruedInterest'=>$_AccruedInterest,'AccruedInterestDayCount'=>$_AccruedInterestDayCount,'AccruedInterestDate'=>$_AccruedInterestDate,'AccruedInterestTime'=>$_AccruedInterestTime,'AccruedInterestDPlus3'=>$_AccruedInterestDPlus3,'NoOfAccruedDays'=>$_NoOfAccruedDays,'DailyAccruedInterest'=>$_DailyAccruedInterest,'ExDividendAccruedInterestTradeDate'=>$_ExDividendAccruedInterestTradeDate,'ExDividendAccruedInterestSetDate'=>$_ExDividendAccruedInterestSetDate));
	}
	/**
	 * Set ShortName
	 * @param string ShortName
	 * @return string
	 */
	public function setShortName($_ShortName)
	{
		return ($this->ShortName = $_ShortName);
	}
	/**
	 * Get ShortName
	 * @return string
	 */
	public function getShortName()
	{
		return $this->ShortName;
	}
	/**
	 * Set Symbol
	 * @param string Symbol
	 * @return string
	 */
	public function setSymbol($_Symbol)
	{
		return ($this->Symbol = $_Symbol);
	}
	/**
	 * Get Symbol
	 * @return string
	 */
	public function getSymbol()
	{
		return $this->Symbol;
	}
	/**
	 * Set PriceSource
	 * @param string PriceSource
	 * @return string
	 */
	public function setPriceSource($_PriceSource)
	{
		return ($this->PriceSource = $_PriceSource);
	}
	/**
	 * Get PriceSource
	 * @return string
	 */
	public function getPriceSource()
	{
		return $this->PriceSource;
	}
	/**
	 * Set Currency
	 * @param string Currency
	 * @return string
	 */
	public function setCurrency($_Currency)
	{
		return ($this->Currency = $_Currency);
	}
	/**
	 * Get Currency
	 * @return string
	 */
	public function getCurrency()
	{
		return $this->Currency;
	}
	/**
	 * Set AccruedInterest
	 * @param double AccruedInterest
	 * @return double
	 */
	public function setAccruedInterest($_AccruedInterest)
	{
		return ($this->AccruedInterest = $_AccruedInterest);
	}
	/**
	 * Get AccruedInterest
	 * @return double
	 */
	public function getAccruedInterest()
	{
		return $this->AccruedInterest;
	}
	/**
	 * Set AccruedInterestDayCount
	 * @param string AccruedInterestDayCount
	 * @return string
	 */
	public function setAccruedInterestDayCount($_AccruedInterestDayCount)
	{
		return ($this->AccruedInterestDayCount = $_AccruedInterestDayCount);
	}
	/**
	 * Get AccruedInterestDayCount
	 * @return string
	 */
	public function getAccruedInterestDayCount()
	{
		return $this->AccruedInterestDayCount;
	}
	/**
	 * Set AccruedInterestDate
	 * @param string AccruedInterestDate
	 * @return string
	 */
	public function setAccruedInterestDate($_AccruedInterestDate)
	{
		return ($this->AccruedInterestDate = $_AccruedInterestDate);
	}
	/**
	 * Get AccruedInterestDate
	 * @return string
	 */
	public function getAccruedInterestDate()
	{
		return $this->AccruedInterestDate;
	}
	/**
	 * Set AccruedInterestTime
	 * @param string AccruedInterestTime
	 * @return string
	 */
	public function setAccruedInterestTime($_AccruedInterestTime)
	{
		return ($this->AccruedInterestTime = $_AccruedInterestTime);
	}
	/**
	 * Get AccruedInterestTime
	 * @return string
	 */
	public function getAccruedInterestTime()
	{
		return $this->AccruedInterestTime;
	}
	/**
	 * Set AccruedInterestDPlus3
	 * @param double AccruedInterestDPlus3
	 * @return double
	 */
	public function setAccruedInterestDPlus3($_AccruedInterestDPlus3)
	{
		return ($this->AccruedInterestDPlus3 = $_AccruedInterestDPlus3);
	}
	/**
	 * Get AccruedInterestDPlus3
	 * @return double
	 */
	public function getAccruedInterestDPlus3()
	{
		return $this->AccruedInterestDPlus3;
	}
	/**
	 * Set NoOfAccruedDays
	 * @param int NoOfAccruedDays
	 * @return int
	 */
	public function setNoOfAccruedDays($_NoOfAccruedDays)
	{
		return ($this->NoOfAccruedDays = $_NoOfAccruedDays);
	}
	/**
	 * Get NoOfAccruedDays
	 * @return int
	 */
	public function getNoOfAccruedDays()
	{
		return $this->NoOfAccruedDays;
	}
	/**
	 * Set DailyAccruedInterest
	 * @param double DailyAccruedInterest
	 * @return double
	 */
	public function setDailyAccruedInterest($_DailyAccruedInterest)
	{
		return ($this->DailyAccruedInterest = $_DailyAccruedInterest);
	}
	/**
	 * Get DailyAccruedInterest
	 * @return double
	 */
	public function getDailyAccruedInterest()
	{
		return $this->DailyAccruedInterest;
	}
	/**
	 * Set ExDividendAccruedInterestTradeDate
	 * @param double ExDividendAccruedInterestTradeDate
	 * @return double
	 */
	public function setExDividendAccruedInterestTradeDate($_ExDividendAccruedInterestTradeDate)
	{
		return ($this->ExDividendAccruedInterestTradeDate = $_ExDividendAccruedInterestTradeDate);
	}
	/**
	 * Get ExDividendAccruedInterestTradeDate
	 * @return double
	 */
	public function getExDividendAccruedInterestTradeDate()
	{
		return $this->ExDividendAccruedInterestTradeDate;
	}
	/**
	 * Set ExDividendAccruedInterestSetDate
	 * @param double ExDividendAccruedInterestSetDate
	 * @return double
	 */
	public function setExDividendAccruedInterestSetDate($_ExDividendAccruedInterestSetDate)
	{
		return ($this->ExDividendAccruedInterestSetDate = $_ExDividendAccruedInterestSetDate);
	}
	/**
	 * Get ExDividendAccruedInterestSetDate
	 * @return double
	 */
	public function getExDividendAccruedInterestSetDate()
	{
		return $this->ExDividendAccruedInterestSetDate;
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