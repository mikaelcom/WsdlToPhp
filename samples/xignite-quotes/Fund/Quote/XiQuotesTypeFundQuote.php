<?php
/**
 * Class file for XiQuotesTypeFundQuote
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeFundQuote
 * @date 08/07/2012
 */
class XiQuotesTypeFundQuote extends XiQuotesWsdlClass
{
	/**
	 * The Symbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Symbol;
	/**
	 * The Previous_Close
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Previous_Close;
	/**
	 * The NAV
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $NAV;
	/**
	 * The Change
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Change;
	/**
	 * The Percent_Change
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Percent_Change;
	/**
	 * The Time
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Time;
	/**
	 * The YTDReturn
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $YTDReturn;
	/**
	 * The Net_Assets
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Net_Assets;
	/**
	 * The Yield
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Yield;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param string Previous_Close
	 * @param string NAV
	 * @param string Change
	 * @param string Percent_Change
	 * @param string Time
	 * @param string YTDReturn
	 * @param string Net_Assets
	 * @param string Yield
	 * @return XiQuotesTypeFundQuote
	 */
	public function __construct($_Symbol = null,$_Previous_Close = null,$_NAV = null,$_Change = null,$_Percent_Change = null,$_Time = null,$_YTDReturn = null,$_Net_Assets = null,$_Yield = null)
	{
		parent::__construct(array('Symbol'=>$_Symbol,'Previous_Close'=>$_Previous_Close,'NAV'=>$_NAV,'Change'=>$_Change,'Percent_Change'=>$_Percent_Change,'Time'=>$_Time,'YTDReturn'=>$_YTDReturn,'Net_Assets'=>$_Net_Assets,'Yield'=>$_Yield));
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
	 * Set Previous_Close
	 * @param string Previous_Close
	 * @return string
	 */
	public function setPrevious_Close($_Previous_Close)
	{
		return ($this->Previous_Close = $_Previous_Close);
	}
	/**
	 * Get Previous_Close
	 * @return string
	 */
	public function getPrevious_Close()
	{
		return $this->Previous_Close;
	}
	/**
	 * Set NAV
	 * @param string NAV
	 * @return string
	 */
	public function setNAV($_NAV)
	{
		return ($this->NAV = $_NAV);
	}
	/**
	 * Get NAV
	 * @return string
	 */
	public function getNAV()
	{
		return $this->NAV;
	}
	/**
	 * Set Change
	 * @param string Change
	 * @return string
	 */
	public function setChange($_Change)
	{
		return ($this->Change = $_Change);
	}
	/**
	 * Get Change
	 * @return string
	 */
	public function getChange()
	{
		return $this->Change;
	}
	/**
	 * Set Percent_Change
	 * @param string Percent_Change
	 * @return string
	 */
	public function setPercent_Change($_Percent_Change)
	{
		return ($this->Percent_Change = $_Percent_Change);
	}
	/**
	 * Get Percent_Change
	 * @return string
	 */
	public function getPercent_Change()
	{
		return $this->Percent_Change;
	}
	/**
	 * Set Time
	 * @param string Time
	 * @return string
	 */
	public function setTime($_Time)
	{
		return ($this->Time = $_Time);
	}
	/**
	 * Get Time
	 * @return string
	 */
	public function getTime()
	{
		return $this->Time;
	}
	/**
	 * Set YTDReturn
	 * @param string YTDReturn
	 * @return string
	 */
	public function setYTDReturn($_YTDReturn)
	{
		return ($this->YTDReturn = $_YTDReturn);
	}
	/**
	 * Get YTDReturn
	 * @return string
	 */
	public function getYTDReturn()
	{
		return $this->YTDReturn;
	}
	/**
	 * Set Net_Assets
	 * @param string Net_Assets
	 * @return string
	 */
	public function setNet_Assets($_Net_Assets)
	{
		return ($this->Net_Assets = $_Net_Assets);
	}
	/**
	 * Get Net_Assets
	 * @return string
	 */
	public function getNet_Assets()
	{
		return $this->Net_Assets;
	}
	/**
	 * Set Yield
	 * @param string Yield
	 * @return string
	 */
	public function setYield($_Yield)
	{
		return ($this->Yield = $_Yield);
	}
	/**
	 * Get Yield
	 * @return string
	 */
	public function getYield()
	{
		return $this->Yield;
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