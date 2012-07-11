<?php
/**
 * Class file for XiQuotesTypeExtendedFundQuote
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeExtendedFundQuote
 * @date 08/07/2012
 */
class XiQuotesTypeExtendedFundQuote extends XiQuotesTypeCommon
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
	 * The Quote
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiQuotesTypeFundQuote
	 */
	public $Quote;
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
	 * @param XiQuotesTypeFundQuote Quote
	 * @param string Chart
	 * @param XiQuotesTypeArrayOfStockNews News
	 * @return XiQuotesTypeExtendedFundQuote
	 */
	public function __construct($_Name = null,$_Quote = null,$_Chart = null,$_News = null)
	{
		XiQuotesWsdlClass::__construct(array('Name'=>$_Name,'Quote'=>$_Quote,'Chart'=>$_Chart,'News'=>new XiQuotesTypeArrayOfStockNews($_News)));
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
	 * Set Quote
	 * @param FundQuote Quote
	 * @return FundQuote
	 */
	public function setQuote($_Quote)
	{
		return ($this->Quote = $_Quote);
	}
	/**
	 * Get Quote
	 * @return XiQuotesTypeFundQuote
	 */
	public function getQuote()
	{
		return $this->Quote;
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