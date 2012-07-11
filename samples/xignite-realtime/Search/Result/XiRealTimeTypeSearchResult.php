<?php
/**
 * Class file for XiRealTimeTypeSearchResult
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeSearchResult
 * @date 08/07/2012
 */
class XiRealTimeTypeSearchResult extends XiRealTimeTypeCommon
{
	/**
	 * The Change
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Change;
	/**
	 * The Quote
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRealTimeTypeRealTimeQuote
	 */
	public $Quote;
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRealTimeTypeSecurity
	 */
	public $Security;
	/**
	 * The SharesOutstanding
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $SharesOutstanding;
	/**
	 * The MarketCap
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $MarketCap;
	/**
	 * The Last
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Last;
	/**
	 * The LastClose
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $LastClose;
	/**
	 * The PercentChange
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentChange;
	/**
	 * The LastYearClose
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $LastYearClose;
	/**
	 * The YTDPercentChange
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $YTDPercentChange;
	/**
	 * The OneYearClose
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OneYearClose;
	/**
	 * The OneYearPercentChange
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OneYearPercentChange;
	/**
	 * Constructor
	 * @param double Change
	 * @param XiRealTimeTypeRealTimeQuote Quote
	 * @param XiRealTimeTypeSecurity Security
	 * @param double SharesOutstanding
	 * @param double MarketCap
	 * @param double Last
	 * @param double LastClose
	 * @param double PercentChange
	 * @param double LastYearClose
	 * @param double YTDPercentChange
	 * @param double OneYearClose
	 * @param double OneYearPercentChange
	 * @return XiRealTimeTypeSearchResult
	 */
	public function __construct($_Change,$_Quote = null,$_Security = null,$_SharesOutstanding,$_MarketCap,$_Last,$_LastClose,$_PercentChange,$_LastYearClose,$_YTDPercentChange,$_OneYearClose,$_OneYearPercentChange)
	{
		XiRealTimeWsdlClass::__construct(array('Change'=>$_Change,'Quote'=>$_Quote,'Security'=>$_Security,'SharesOutstanding'=>$_SharesOutstanding,'MarketCap'=>$_MarketCap,'Last'=>$_Last,'LastClose'=>$_LastClose,'PercentChange'=>$_PercentChange,'LastYearClose'=>$_LastYearClose,'YTDPercentChange'=>$_YTDPercentChange,'OneYearClose'=>$_OneYearClose,'OneYearPercentChange'=>$_OneYearPercentChange));
	}
	/**
	 * Set Change
	 * @param double Change
	 * @return double
	 */
	public function setChange($_Change)
	{
		return ($this->Change = $_Change);
	}
	/**
	 * Get Change
	 * @return double
	 */
	public function getChange()
	{
		return $this->Change;
	}
	/**
	 * Set Quote
	 * @param RealTimeQuote Quote
	 * @return RealTimeQuote
	 */
	public function setQuote($_Quote)
	{
		return ($this->Quote = $_Quote);
	}
	/**
	 * Get Quote
	 * @return XiRealTimeTypeRealTimeQuote
	 */
	public function getQuote()
	{
		return $this->Quote;
	}
	/**
	 * Set Security
	 * @param Security Security
	 * @return Security
	 */
	public function setSecurity($_Security)
	{
		return ($this->Security = $_Security);
	}
	/**
	 * Get Security
	 * @return XiRealTimeTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set SharesOutstanding
	 * @param double SharesOutstanding
	 * @return double
	 */
	public function setSharesOutstanding($_SharesOutstanding)
	{
		return ($this->SharesOutstanding = $_SharesOutstanding);
	}
	/**
	 * Get SharesOutstanding
	 * @return double
	 */
	public function getSharesOutstanding()
	{
		return $this->SharesOutstanding;
	}
	/**
	 * Set MarketCap
	 * @param double MarketCap
	 * @return double
	 */
	public function setMarketCap($_MarketCap)
	{
		return ($this->MarketCap = $_MarketCap);
	}
	/**
	 * Get MarketCap
	 * @return double
	 */
	public function getMarketCap()
	{
		return $this->MarketCap;
	}
	/**
	 * Set Last
	 * @param double Last
	 * @return double
	 */
	public function setLast($_Last)
	{
		return ($this->Last = $_Last);
	}
	/**
	 * Get Last
	 * @return double
	 */
	public function getLast()
	{
		return $this->Last;
	}
	/**
	 * Set LastClose
	 * @param double LastClose
	 * @return double
	 */
	public function setLastClose($_LastClose)
	{
		return ($this->LastClose = $_LastClose);
	}
	/**
	 * Get LastClose
	 * @return double
	 */
	public function getLastClose()
	{
		return $this->LastClose;
	}
	/**
	 * Set PercentChange
	 * @param double PercentChange
	 * @return double
	 */
	public function setPercentChange($_PercentChange)
	{
		return ($this->PercentChange = $_PercentChange);
	}
	/**
	 * Get PercentChange
	 * @return double
	 */
	public function getPercentChange()
	{
		return $this->PercentChange;
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
	 * Set YTDPercentChange
	 * @param double YTDPercentChange
	 * @return double
	 */
	public function setYTDPercentChange($_YTDPercentChange)
	{
		return ($this->YTDPercentChange = $_YTDPercentChange);
	}
	/**
	 * Get YTDPercentChange
	 * @return double
	 */
	public function getYTDPercentChange()
	{
		return $this->YTDPercentChange;
	}
	/**
	 * Set OneYearClose
	 * @param double OneYearClose
	 * @return double
	 */
	public function setOneYearClose($_OneYearClose)
	{
		return ($this->OneYearClose = $_OneYearClose);
	}
	/**
	 * Get OneYearClose
	 * @return double
	 */
	public function getOneYearClose()
	{
		return $this->OneYearClose;
	}
	/**
	 * Set OneYearPercentChange
	 * @param double OneYearPercentChange
	 * @return double
	 */
	public function setOneYearPercentChange($_OneYearPercentChange)
	{
		return ($this->OneYearPercentChange = $_OneYearPercentChange);
	}
	/**
	 * Get OneYearPercentChange
	 * @return double
	 */
	public function getOneYearPercentChange()
	{
		return $this->OneYearPercentChange;
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