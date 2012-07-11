<?php
/**
 * Class file for XiQuotesTypeStockNews
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeStockNews
 * @date 08/07/2012
 */
class XiQuotesTypeStockNews extends XiQuotesTypeCommon
{
	/**
	 * The Headline
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Headline;
	/**
	 * The Ticker
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Ticker;
	/**
	 * The Date
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Date;
	/**
	 * The Time
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Time;
	/**
	 * The Source
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Source;
	/**
	 * The Url
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Url;
	/**
	 * Constructor
	 * @param string Headline
	 * @param string Ticker
	 * @param string Date
	 * @param string Time
	 * @param string Source
	 * @param string Url
	 * @return XiQuotesTypeStockNews
	 */
	public function __construct($_Headline = null,$_Ticker = null,$_Date = null,$_Time = null,$_Source = null,$_Url = null)
	{
		XiQuotesWsdlClass::__construct(array('Headline'=>$_Headline,'Ticker'=>$_Ticker,'Date'=>$_Date,'Time'=>$_Time,'Source'=>$_Source,'Url'=>$_Url));
	}
	/**
	 * Set Headline
	 * @param string Headline
	 * @return string
	 */
	public function setHeadline($_Headline)
	{
		return ($this->Headline = $_Headline);
	}
	/**
	 * Get Headline
	 * @return string
	 */
	public function getHeadline()
	{
		return $this->Headline;
	}
	/**
	 * Set Ticker
	 * @param string Ticker
	 * @return string
	 */
	public function setTicker($_Ticker)
	{
		return ($this->Ticker = $_Ticker);
	}
	/**
	 * Get Ticker
	 * @return string
	 */
	public function getTicker()
	{
		return $this->Ticker;
	}
	/**
	 * Set Date
	 * @param string Date
	 * @return string
	 */
	public function setDate($_Date)
	{
		return ($this->Date = $_Date);
	}
	/**
	 * Get Date
	 * @return string
	 */
	public function getDate()
	{
		return $this->Date;
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
	 * Set Source
	 * @param string Source
	 * @return string
	 */
	public function setSource($_Source)
	{
		return ($this->Source = $_Source);
	}
	/**
	 * Get Source
	 * @return string
	 */
	public function getSource()
	{
		return $this->Source;
	}
	/**
	 * Set Url
	 * @param string Url
	 * @return string
	 */
	public function setUrl($_Url)
	{
		return ($this->Url = $_Url);
	}
	/**
	 * Get Url
	 * @return string
	 */
	public function getUrl()
	{
		return $this->Url;
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