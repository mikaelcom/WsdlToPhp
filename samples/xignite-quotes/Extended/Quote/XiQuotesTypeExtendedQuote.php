<?php
/**
 * Class file for XiQuotesTypeExtendedQuote
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeExtendedQuote
 * @date 08/07/2012
 */
class XiQuotesTypeExtendedQuote extends XiQuotesTypeCommon
{
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The Exchange
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Exchange;
	/**
	 * The Quote
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiQuotesTypeStockQuote
	 */
	public $Quote;
	/**
	 * The Statistics
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiQuotesTypeStockStatistics
	 */
	public $Statistics;
	/**
	 * The Chart
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Chart;
	/**
	 * The News
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiQuotesTypeArrayOfStockNews
	 */
	public $News;
	/**
	 * Constructor
	 * @param string Name
	 * @param string Exchange
	 * @param XiQuotesTypeStockQuote Quote
	 * @param XiQuotesTypeStockStatistics Statistics
	 * @param string Chart
	 * @param XiQuotesTypeArrayOfStockNews News
	 * @return XiQuotesTypeExtendedQuote
	 */
	public function __construct($_Name = null,$_Exchange = null,$_Quote = null,$_Statistics = null,$_Chart = null,$_News = null)
	{
		XiQuotesWsdlClass::__construct(array('Name'=>$_Name,'Exchange'=>$_Exchange,'Quote'=>$_Quote,'Statistics'=>$_Statistics,'Chart'=>$_Chart,'News'=>new XiQuotesTypeArrayOfStockNews($_News)));
	}
	/**
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set Exchange
	 * @param string Exchange
	 * @return string
	 */
	public function setExchange($_Exchange)
	{
		return ($this->Exchange = $_Exchange);
	}
	/**
	 * Get Exchange
	 * @return string
	 */
	public function getExchange()
	{
		return $this->Exchange;
	}
	/**
	 * Set Quote
	 * @param StockQuote Quote
	 * @return StockQuote
	 */
	public function setQuote($_Quote)
	{
		return ($this->Quote = $_Quote);
	}
	/**
	 * Get Quote
	 * @return XiQuotesTypeStockQuote
	 */
	public function getQuote()
	{
		return $this->Quote;
	}
	/**
	 * Set Statistics
	 * @param StockStatistics Statistics
	 * @return StockStatistics
	 */
	public function setStatistics($_Statistics)
	{
		return ($this->Statistics = $_Statistics);
	}
	/**
	 * Get Statistics
	 * @return XiQuotesTypeStockStatistics
	 */
	public function getStatistics()
	{
		return $this->Statistics;
	}
	/**
	 * Set Chart
	 * @param string Chart
	 * @return string
	 */
	public function setChart($_Chart)
	{
		return ($this->Chart = $_Chart);
	}
	/**
	 * Get Chart
	 * @return string
	 */
	public function getChart()
	{
		return $this->Chart;
	}
	/**
	 * Set News
	 * @param ArrayOfStockNews News
	 * @return ArrayOfStockNews
	 */
	public function setNews($_News)
	{
		return ($this->News = $_News);
	}
	/**
	 * Get News
	 * @return XiQuotesTypeArrayOfStockNews
	 */
	public function getNews()
	{
		return $this->News;
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