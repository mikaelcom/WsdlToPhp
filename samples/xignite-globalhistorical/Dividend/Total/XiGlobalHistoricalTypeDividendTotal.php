<?php
/**
 * Class file for XiGlobalHistoricalTypeDividendTotal
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeDividendTotal
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeDividendTotal extends XiGlobalHistoricalTypeAbstractGlobalHistoricalObject
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeSecurity
	 */
	public $Security;
	/**
	 * The CashTotal
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $CashTotal;
	/**
	 * The StockCumulativeRatio
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $StockCumulativeRatio;
	/**
	 * The FromDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FromDate;
	/**
	 * The ToDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ToDate;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeSecurity Security
	 * @param double CashTotal
	 * @param double StockCumulativeRatio
	 * @param string FromDate
	 * @param string ToDate
	 * @return XiGlobalHistoricalTypeDividendTotal
	 */
	public function __construct($_Security = null,$_CashTotal,$_StockCumulativeRatio,$_FromDate = null,$_ToDate = null)
	{
		XiGlobalHistoricalWsdlClass::__construct(array('Security'=>$_Security,'CashTotal'=>$_CashTotal,'StockCumulativeRatio'=>$_StockCumulativeRatio,'FromDate'=>$_FromDate,'ToDate'=>$_ToDate));
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
	 * @return XiGlobalHistoricalTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set CashTotal
	 * @param double CashTotal
	 * @return double
	 */
	public function setCashTotal($_CashTotal)
	{
		return ($this->CashTotal = $_CashTotal);
	}
	/**
	 * Get CashTotal
	 * @return double
	 */
	public function getCashTotal()
	{
		return $this->CashTotal;
	}
	/**
	 * Set StockCumulativeRatio
	 * @param double StockCumulativeRatio
	 * @return double
	 */
	public function setStockCumulativeRatio($_StockCumulativeRatio)
	{
		return ($this->StockCumulativeRatio = $_StockCumulativeRatio);
	}
	/**
	 * Get StockCumulativeRatio
	 * @return double
	 */
	public function getStockCumulativeRatio()
	{
		return $this->StockCumulativeRatio;
	}
	/**
	 * Set FromDate
	 * @param string FromDate
	 * @return string
	 */
	public function setFromDate($_FromDate)
	{
		return ($this->FromDate = $_FromDate);
	}
	/**
	 * Get FromDate
	 * @return string
	 */
	public function getFromDate()
	{
		return $this->FromDate;
	}
	/**
	 * Set ToDate
	 * @param string ToDate
	 * @return string
	 */
	public function setToDate($_ToDate)
	{
		return ($this->ToDate = $_ToDate);
	}
	/**
	 * Get ToDate
	 * @return string
	 */
	public function getToDate()
	{
		return $this->ToDate;
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