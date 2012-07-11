<?php
/**
 * Class file for XiBondsTypeDailyOpenHighLowClose
 * @date 08/07/2012
 */
/**
 * Class XiBondsTypeDailyOpenHighLowClose
 * @date 08/07/2012
 */
class XiBondsTypeDailyOpenHighLowClose extends XiBondsWsdlClass
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
	 * The DailyClose
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $DailyClose;
	/**
	 * The DailyCloseDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DailyCloseDate;
	/**
	 * The DailyCloseTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DailyCloseTime;
	/**
	 * Constructor
	 * @param string ShortName
	 * @param string Symbol
	 * @param string PriceSource
	 * @param string Currency
	 * @param double DailyOpen
	 * @param string DailyOpenDate
	 * @param string DailyOpenTime
	 * @param double DailyHigh
	 * @param string DailyHighDate
	 * @param string DailyHighTime
	 * @param double DailyLow
	 * @param string DailyLowDate
	 * @param string DailyLowTime
	 * @param double DailyClose
	 * @param string DailyCloseDate
	 * @param string DailyCloseTime
	 * @return XiBondsTypeDailyOpenHighLowClose
	 */
	public function __construct($_ShortName = null,$_Symbol = null,$_PriceSource = null,$_Currency = null,$_DailyOpen,$_DailyOpenDate = null,$_DailyOpenTime = null,$_DailyHigh,$_DailyHighDate = null,$_DailyHighTime = null,$_DailyLow,$_DailyLowDate = null,$_DailyLowTime = null,$_DailyClose,$_DailyCloseDate = null,$_DailyCloseTime = null)
	{
		parent::__construct(array('ShortName'=>$_ShortName,'Symbol'=>$_Symbol,'PriceSource'=>$_PriceSource,'Currency'=>$_Currency,'DailyOpen'=>$_DailyOpen,'DailyOpenDate'=>$_DailyOpenDate,'DailyOpenTime'=>$_DailyOpenTime,'DailyHigh'=>$_DailyHigh,'DailyHighDate'=>$_DailyHighDate,'DailyHighTime'=>$_DailyHighTime,'DailyLow'=>$_DailyLow,'DailyLowDate'=>$_DailyLowDate,'DailyLowTime'=>$_DailyLowTime,'DailyClose'=>$_DailyClose,'DailyCloseDate'=>$_DailyCloseDate,'DailyCloseTime'=>$_DailyCloseTime));
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
	 * Set DailyClose
	 * @param double DailyClose
	 * @return double
	 */
	public function setDailyClose($_DailyClose)
	{
		return ($this->DailyClose = $_DailyClose);
	}
	/**
	 * Get DailyClose
	 * @return double
	 */
	public function getDailyClose()
	{
		return $this->DailyClose;
	}
	/**
	 * Set DailyCloseDate
	 * @param string DailyCloseDate
	 * @return string
	 */
	public function setDailyCloseDate($_DailyCloseDate)
	{
		return ($this->DailyCloseDate = $_DailyCloseDate);
	}
	/**
	 * Get DailyCloseDate
	 * @return string
	 */
	public function getDailyCloseDate()
	{
		return $this->DailyCloseDate;
	}
	/**
	 * Set DailyCloseTime
	 * @param string DailyCloseTime
	 * @return string
	 */
	public function setDailyCloseTime($_DailyCloseTime)
	{
		return ($this->DailyCloseTime = $_DailyCloseTime);
	}
	/**
	 * Get DailyCloseTime
	 * @return string
	 */
	public function getDailyCloseTime()
	{
		return $this->DailyCloseTime;
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