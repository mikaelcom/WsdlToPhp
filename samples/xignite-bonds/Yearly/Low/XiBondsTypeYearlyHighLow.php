<?php
/**
 * Class file for XiBondsTypeYearlyHighLow
 * @date 08/07/2012
 */
/**
 * Class XiBondsTypeYearlyHighLow
 * @date 08/07/2012
 */
class XiBondsTypeYearlyHighLow extends XiBondsWsdlClass
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
	 * Constructor
	 * @param string ShortName
	 * @param string Symbol
	 * @param string PriceSource
	 * @param string Currency
	 * @param double YearlyHigh
	 * @param string YearlyHighDate
	 * @param double YearlyLow
	 * @param string YearlyLowDate
	 * @param double LastYearClose
	 * @param string LastYearCloseDate
	 * @return XiBondsTypeYearlyHighLow
	 */
	public function __construct($_ShortName = null,$_Symbol = null,$_PriceSource = null,$_Currency = null,$_YearlyHigh,$_YearlyHighDate = null,$_YearlyLow,$_YearlyLowDate = null,$_LastYearClose,$_LastYearCloseDate = null)
	{
		parent::__construct(array('ShortName'=>$_ShortName,'Symbol'=>$_Symbol,'PriceSource'=>$_PriceSource,'Currency'=>$_Currency,'YearlyHigh'=>$_YearlyHigh,'YearlyHighDate'=>$_YearlyHighDate,'YearlyLow'=>$_YearlyLow,'YearlyLowDate'=>$_YearlyLowDate,'LastYearClose'=>$_LastYearClose,'LastYearCloseDate'=>$_LastYearCloseDate));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>