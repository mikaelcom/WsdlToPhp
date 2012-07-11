<?php
/**
 * Class file for XiBondsRealTimeTypeTradedPrice
 * @date 08/07/2012
 */
/**
 * Class XiBondsRealTimeTypeTradedPrice
 * @date 08/07/2012
 */
class XiBondsRealTimeTypeTradedPrice extends XiBondsRealTimeWsdlClass
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
	 * The LastSale
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $LastSale;
	/**
	 * The LastSaleDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LastSaleDate;
	/**
	 * The LastSaleTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LastSaleTime;
	/**
	 * The LastSaleSize
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $LastSaleSize;
	/**
	 * The DailyOpen
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $DailyOpen;
	/**
	 * The DailyOpenDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DailyOpenDate;
	/**
	 * The DailyOpenTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DailyOpenTime;
	/**
	 * The DailyHigh
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $DailyHigh;
	/**
	 * The DailyHighDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DailyHighDate;
	/**
	 * The DailyHighTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DailyHighTime;
	/**
	 * The DailyLow
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $DailyLow;
	/**
	 * The DailyLowDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DailyLowDate;
	/**
	 * The DailyLowTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DailyLowTime;
	/**
	 * The YearlyHigh
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $YearlyHigh;
	/**
	 * The YearlyHighDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $YearlyHighDate;
	/**
	 * The YearlyLow
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $YearlyLow;
	/**
	 * The YearlyLowDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $YearlyLowDate;
	/**
	 * The LastYearClose
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $LastYearClose;
	/**
	 * The LastYearCloseDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LastYearCloseDate;
	/**
	 * The YieldToMaturity
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $YieldToMaturity;
	/**
	 * The PriceUsedForCalculations
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PriceUsedForCalculations;
	/**
	 * The PriceUsedForCalculationsDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PriceUsedForCalculationsDate;
	/**
	 * The PriceUsedForCalculationsTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PriceUsedForCalculationsTime;
	/**
	 * Constructor
	 * @param string ShortName
	 * @param string Symbol
	 * @param string PriceSource
	 * @param string Currency
	 * @param double LastSale
	 * @param string LastSaleDate
	 * @param string LastSaleTime
	 * @param int LastSaleSize
	 * @param double DailyOpen
	 * @param string DailyOpenDate
	 * @param string DailyOpenTime
	 * @param double DailyHigh
	 * @param string DailyHighDate
	 * @param string DailyHighTime
	 * @param double DailyLow
	 * @param string DailyLowDate
	 * @param string DailyLowTime
	 * @param double YearlyHigh
	 * @param string YearlyHighDate
	 * @param double YearlyLow
	 * @param string YearlyLowDate
	 * @param double LastYearClose
	 * @param string LastYearCloseDate
	 * @param double YieldToMaturity
	 * @param double PriceUsedForCalculations
	 * @param string PriceUsedForCalculationsDate
	 * @param string PriceUsedForCalculationsTime
	 * @return XiBondsRealTimeTypeTradedPrice
	 */
	public function __construct($_ShortName = null,$_Symbol = null,$_PriceSource = null,$_Currency = null,$_LastSale,$_LastSaleDate = null,$_LastSaleTime = null,$_LastSaleSize,$_DailyOpen,$_DailyOpenDate = null,$_DailyOpenTime = null,$_DailyHigh,$_DailyHighDate = null,$_DailyHighTime = null,$_DailyLow,$_DailyLowDate = null,$_DailyLowTime = null,$_YearlyHigh,$_YearlyHighDate = null,$_YearlyLow,$_YearlyLowDate = null,$_LastYearClose,$_LastYearCloseDate = null,$_YieldToMaturity,$_PriceUsedForCalculations,$_PriceUsedForCalculationsDate = null,$_PriceUsedForCalculationsTime = null)
	{
		parent::__construct(array('ShortName'=>$_ShortName,'Symbol'=>$_Symbol,'PriceSource'=>$_PriceSource,'Currency'=>$_Currency,'LastSale'=>$_LastSale,'LastSaleDate'=>$_LastSaleDate,'LastSaleTime'=>$_LastSaleTime,'LastSaleSize'=>$_LastSaleSize,'DailyOpen'=>$_DailyOpen,'DailyOpenDate'=>$_DailyOpenDate,'DailyOpenTime'=>$_DailyOpenTime,'DailyHigh'=>$_DailyHigh,'DailyHighDate'=>$_DailyHighDate,'DailyHighTime'=>$_DailyHighTime,'DailyLow'=>$_DailyLow,'DailyLowDate'=>$_DailyLowDate,'DailyLowTime'=>$_DailyLowTime,'YearlyHigh'=>$_YearlyHigh,'YearlyHighDate'=>$_YearlyHighDate,'YearlyLow'=>$_YearlyLow,'YearlyLowDate'=>$_YearlyLowDate,'LastYearClose'=>$_LastYearClose,'LastYearCloseDate'=>$_LastYearCloseDate,'YieldToMaturity'=>$_YieldToMaturity,'PriceUsedForCalculations'=>$_PriceUsedForCalculations,'PriceUsedForCalculationsDate'=>$_PriceUsedForCalculationsDate,'PriceUsedForCalculationsTime'=>$_PriceUsedForCalculationsTime));
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
	 * Set LastSale
	 * @param double LastSale
	 * @return double
	 */
	public function setLastSale($_LastSale)
	{
		return ($this->LastSale = $_LastSale);
	}
	/**
	 * Get LastSale
	 * @return double
	 */
	public function getLastSale()
	{
		return $this->LastSale;
	}
	/**
	 * Set LastSaleDate
	 * @param string LastSaleDate
	 * @return string
	 */
	public function setLastSaleDate($_LastSaleDate)
	{
		return ($this->LastSaleDate = $_LastSaleDate);
	}
	/**
	 * Get LastSaleDate
	 * @return string
	 */
	public function getLastSaleDate()
	{
		return $this->LastSaleDate;
	}
	/**
	 * Set LastSaleTime
	 * @param string LastSaleTime
	 * @return string
	 */
	public function setLastSaleTime($_LastSaleTime)
	{
		return ($this->LastSaleTime = $_LastSaleTime);
	}
	/**
	 * Get LastSaleTime
	 * @return string
	 */
	public function getLastSaleTime()
	{
		return $this->LastSaleTime;
	}
	/**
	 * Set LastSaleSize
	 * @param int LastSaleSize
	 * @return int
	 */
	public function setLastSaleSize($_LastSaleSize)
	{
		return ($this->LastSaleSize = $_LastSaleSize);
	}
	/**
	 * Get LastSaleSize
	 * @return int
	 */
	public function getLastSaleSize()
	{
		return $this->LastSaleSize;
	}
	/**
	 * Set DailyOpen
	 * @param double DailyOpen
	 * @return double
	 */
	public function setDailyOpen($_DailyOpen)
	{
		return ($this->DailyOpen = $_DailyOpen);
	}
	/**
	 * Get DailyOpen
	 * @return double
	 */
	public function getDailyOpen()
	{
		return $this->DailyOpen;
	}
	/**
	 * Set DailyOpenDate
	 * @param string DailyOpenDate
	 * @return string
	 */
	public function setDailyOpenDate($_DailyOpenDate)
	{
		return ($this->DailyOpenDate = $_DailyOpenDate);
	}
	/**
	 * Get DailyOpenDate
	 * @return string
	 */
	public function getDailyOpenDate()
	{
		return $this->DailyOpenDate;
	}
	/**
	 * Set DailyOpenTime
	 * @param string DailyOpenTime
	 * @return string
	 */
	public function setDailyOpenTime($_DailyOpenTime)
	{
		return ($this->DailyOpenTime = $_DailyOpenTime);
	}
	/**
	 * Get DailyOpenTime
	 * @return string
	 */
	public function getDailyOpenTime()
	{
		return $this->DailyOpenTime;
	}
	/**
	 * Set DailyHigh
	 * @param double DailyHigh
	 * @return double
	 */
	public function setDailyHigh($_DailyHigh)
	{
		return ($this->DailyHigh = $_DailyHigh);
	}
	/**
	 * Get DailyHigh
	 * @return double
	 */
	public function getDailyHigh()
	{
		return $this->DailyHigh;
	}
	/**
	 * Set DailyHighDate
	 * @param string DailyHighDate
	 * @return string
	 */
	public function setDailyHighDate($_DailyHighDate)
	{
		return ($this->DailyHighDate = $_DailyHighDate);
	}
	/**
	 * Get DailyHighDate
	 * @return string
	 */
	public function getDailyHighDate()
	{
		return $this->DailyHighDate;
	}
	/**
	 * Set DailyHighTime
	 * @param string DailyHighTime
	 * @return string
	 */
	public function setDailyHighTime($_DailyHighTime)
	{
		return ($this->DailyHighTime = $_DailyHighTime);
	}
	/**
	 * Get DailyHighTime
	 * @return string
	 */
	public function getDailyHighTime()
	{
		return $this->DailyHighTime;
	}
	/**
	 * Set DailyLow
	 * @param double DailyLow
	 * @return double
	 */
	public function setDailyLow($_DailyLow)
	{
		return ($this->DailyLow = $_DailyLow);
	}
	/**
	 * Get DailyLow
	 * @return double
	 */
	public function getDailyLow()
	{
		return $this->DailyLow;
	}
	/**
	 * Set DailyLowDate
	 * @param string DailyLowDate
	 * @return string
	 */
	public function setDailyLowDate($_DailyLowDate)
	{
		return ($this->DailyLowDate = $_DailyLowDate);
	}
	/**
	 * Get DailyLowDate
	 * @return string
	 */
	public function getDailyLowDate()
	{
		return $this->DailyLowDate;
	}
	/**
	 * Set DailyLowTime
	 * @param string DailyLowTime
	 * @return string
	 */
	public function setDailyLowTime($_DailyLowTime)
	{
		return ($this->DailyLowTime = $_DailyLowTime);
	}
	/**
	 * Get DailyLowTime
	 * @return string
	 */
	public function getDailyLowTime()
	{
		return $this->DailyLowTime;
	}
	/**
	 * Set YearlyHigh
	 * @param double YearlyHigh
	 * @return double
	 */
	public function setYearlyHigh($_YearlyHigh)
	{
		return ($this->YearlyHigh = $_YearlyHigh);
	}
	/**
	 * Get YearlyHigh
	 * @return double
	 */
	public function getYearlyHigh()
	{
		return $this->YearlyHigh;
	}
	/**
	 * Set YearlyHighDate
	 * @param string YearlyHighDate
	 * @return string
	 */
	public function setYearlyHighDate($_YearlyHighDate)
	{
		return ($this->YearlyHighDate = $_YearlyHighDate);
	}
	/**
	 * Get YearlyHighDate
	 * @return string
	 */
	public function getYearlyHighDate()
	{
		return $this->YearlyHighDate;
	}
	/**
	 * Set YearlyLow
	 * @param double YearlyLow
	 * @return double
	 */
	public function setYearlyLow($_YearlyLow)
	{
		return ($this->YearlyLow = $_YearlyLow);
	}
	/**
	 * Get YearlyLow
	 * @return double
	 */
	public function getYearlyLow()
	{
		return $this->YearlyLow;
	}
	/**
	 * Set YearlyLowDate
	 * @param string YearlyLowDate
	 * @return string
	 */
	public function setYearlyLowDate($_YearlyLowDate)
	{
		return ($this->YearlyLowDate = $_YearlyLowDate);
	}
	/**
	 * Get YearlyLowDate
	 * @return string
	 */
	public function getYearlyLowDate()
	{
		return $this->YearlyLowDate;
	}
	/**
	 * Set LastYearClose
	 * @param double LastYearClose
	 * @return double
	 */
	public function setLastYearClose($_LastYearClose)
	{
		return ($this->LastYearClose = $_LastYearClose);
	}
	/**
	 * Get LastYearClose
	 * @return double
	 */
	public function getLastYearClose()
	{
		return $this->LastYearClose;
	}
	/**
	 * Set LastYearCloseDate
	 * @param string LastYearCloseDate
	 * @return string
	 */
	public function setLastYearCloseDate($_LastYearCloseDate)
	{
		return ($this->LastYearCloseDate = $_LastYearCloseDate);
	}
	/**
	 * Get LastYearCloseDate
	 * @return string
	 */
	public function getLastYearCloseDate()
	{
		return $this->LastYearCloseDate;
	}
	/**
	 * Set YieldToMaturity
	 * @param double YieldToMaturity
	 * @return double
	 */
	public function setYieldToMaturity($_YieldToMaturity)
	{
		return ($this->YieldToMaturity = $_YieldToMaturity);
	}
	/**
	 * Get YieldToMaturity
	 * @return double
	 */
	public function getYieldToMaturity()
	{
		return $this->YieldToMaturity;
	}
	/**
	 * Set PriceUsedForCalculations
	 * @param double PriceUsedForCalculations
	 * @return double
	 */
	public function setPriceUsedForCalculations($_PriceUsedForCalculations)
	{
		return ($this->PriceUsedForCalculations = $_PriceUsedForCalculations);
	}
	/**
	 * Get PriceUsedForCalculations
	 * @return double
	 */
	public function getPriceUsedForCalculations()
	{
		return $this->PriceUsedForCalculations;
	}
	/**
	 * Set PriceUsedForCalculationsDate
	 * @param string PriceUsedForCalculationsDate
	 * @return string
	 */
	public function setPriceUsedForCalculationsDate($_PriceUsedForCalculationsDate)
	{
		return ($this->PriceUsedForCalculationsDate = $_PriceUsedForCalculationsDate);
	}
	/**
	 * Get PriceUsedForCalculationsDate
	 * @return string
	 */
	public function getPriceUsedForCalculationsDate()
	{
		return $this->PriceUsedForCalculationsDate;
	}
	/**
	 * Set PriceUsedForCalculationsTime
	 * @param string PriceUsedForCalculationsTime
	 * @return string
	 */
	public function setPriceUsedForCalculationsTime($_PriceUsedForCalculationsTime)
	{
		return ($this->PriceUsedForCalculationsTime = $_PriceUsedForCalculationsTime);
	}
	/**
	 * Get PriceUsedForCalculationsTime
	 * @return string
	 */
	public function getPriceUsedForCalculationsTime()
	{
		return $this->PriceUsedForCalculationsTime;
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