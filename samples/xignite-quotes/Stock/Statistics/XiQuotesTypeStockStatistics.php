<?php
/**
 * Class file for XiQuotesTypeStockStatistics
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeStockStatistics
 * @date 08/07/2012
 */
class XiQuotesTypeStockStatistics extends XiQuotesWsdlClass
{
	/**
	 * The Price_Earnings
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Price_Earnings;
	/**
	 * The Price_Sales
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Price_Sales;
	/**
	 * The Market_Cap
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Market_Cap;
	/**
	 * The EPS
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EPS;
	/**
	 * The EPS_Estimate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EPS_Estimate;
	/**
	 * Constructor
	 * @param string Price_Earnings
	 * @param string Price_Sales
	 * @param string Market_Cap
	 * @param string EPS
	 * @param string EPS_Estimate
	 * @return XiQuotesTypeStockStatistics
	 */
	public function __construct($_Price_Earnings = null,$_Price_Sales = null,$_Market_Cap = null,$_EPS = null,$_EPS_Estimate = null)
	{
		parent::__construct(array('Price_Earnings'=>$_Price_Earnings,'Price_Sales'=>$_Price_Sales,'Market_Cap'=>$_Market_Cap,'EPS'=>$_EPS,'EPS_Estimate'=>$_EPS_Estimate));
	}
	/**
	 * Set Price_Earnings
	 * @param string Price_Earnings
	 * @return string
	 */
	public function setPrice_Earnings($_Price_Earnings)
	{
		return ($this->Price_Earnings = $_Price_Earnings);
	}
	/**
	 * Get Price_Earnings
	 * @return string
	 */
	public function getPrice_Earnings()
	{
		return $this->Price_Earnings;
	}
	/**
	 * Set Price_Sales
	 * @param string Price_Sales
	 * @return string
	 */
	public function setPrice_Sales($_Price_Sales)
	{
		return ($this->Price_Sales = $_Price_Sales);
	}
	/**
	 * Get Price_Sales
	 * @return string
	 */
	public function getPrice_Sales()
	{
		return $this->Price_Sales;
	}
	/**
	 * Set Market_Cap
	 * @param string Market_Cap
	 * @return string
	 */
	public function setMarket_Cap($_Market_Cap)
	{
		return ($this->Market_Cap = $_Market_Cap);
	}
	/**
	 * Get Market_Cap
	 * @return string
	 */
	public function getMarket_Cap()
	{
		return $this->Market_Cap;
	}
	/**
	 * Set EPS
	 * @param string EPS
	 * @return string
	 */
	public function setEPS($_EPS)
	{
		return ($this->EPS = $_EPS);
	}
	/**
	 * Get EPS
	 * @return string
	 */
	public function getEPS()
	{
		return $this->EPS;
	}
	/**
	 * Set EPS_Estimate
	 * @param string EPS_Estimate
	 * @return string
	 */
	public function setEPS_Estimate($_EPS_Estimate)
	{
		return ($this->EPS_Estimate = $_EPS_Estimate);
	}
	/**
	 * Get EPS_Estimate
	 * @return string
	 */
	public function getEPS_Estimate()
	{
		return $this->EPS_Estimate;
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