<?php
/**
 * Class file for XiNASDAQLastSaleTypeGetLastSaleChartCustomResponse
 * @date 08/07/2012
 */
/**
 * Class XiNASDAQLastSaleTypeGetLastSaleChartCustomResponse
 * @date 08/07/2012
 */
class XiNASDAQLastSaleTypeGetLastSaleChartCustomResponse extends XiNASDAQLastSaleWsdlClass
{
	/**
	 * The GetLastSaleChartCustomResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiNASDAQLastSaleTypeIntradayChart
	 */
	public $GetLastSaleChartCustomResult;
	/**
	 * Constructor
	 * @param XiNASDAQLastSaleTypeIntradayChart GetLastSaleChartCustomResult
	 * @return XiNASDAQLastSaleTypeGetLastSaleChartCustomResponse
	 */
	public function __construct($_GetLastSaleChartCustomResult = null)
	{
		parent::__construct(array('GetLastSaleChartCustomResult'=>$_GetLastSaleChartCustomResult));
	}
	/**
	 * Set GetLastSaleChartCustomResult
	 * @param IntradayChart GetLastSaleChartCustomResult
	 * @return IntradayChart
	 */
	public function setGetLastSaleChartCustomResult($_GetLastSaleChartCustomResult)
	{
		return ($this->GetLastSaleChartCustomResult = $_GetLastSaleChartCustomResult);
	}
	/**
	 * Get GetLastSaleChartCustomResult
	 * @return XiNASDAQLastSaleTypeIntradayChart
	 */
	public function getGetLastSaleChartCustomResult()
	{
		return $this->GetLastSaleChartCustomResult;
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