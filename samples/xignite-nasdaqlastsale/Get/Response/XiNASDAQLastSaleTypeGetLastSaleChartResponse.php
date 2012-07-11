<?php
/**
 * Class file for XiNASDAQLastSaleTypeGetLastSaleChartResponse
 * @date 08/07/2012
 */
/**
 * Class XiNASDAQLastSaleTypeGetLastSaleChartResponse
 * @date 08/07/2012
 */
class XiNASDAQLastSaleTypeGetLastSaleChartResponse extends XiNASDAQLastSaleWsdlClass
{
	/**
	 * The GetLastSaleChartResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiNASDAQLastSaleTypeIntradayChart
	 */
	public $GetLastSaleChartResult;
	/**
	 * Constructor
	 * @param XiNASDAQLastSaleTypeIntradayChart GetLastSaleChartResult
	 * @return XiNASDAQLastSaleTypeGetLastSaleChartResponse
	 */
	public function __construct($_GetLastSaleChartResult = null)
	{
		parent::__construct(array('GetLastSaleChartResult'=>$_GetLastSaleChartResult));
	}
	/**
	 * Set GetLastSaleChartResult
	 * @param IntradayChart GetLastSaleChartResult
	 * @return IntradayChart
	 */
	public function setGetLastSaleChartResult($_GetLastSaleChartResult)
	{
		return ($this->GetLastSaleChartResult = $_GetLastSaleChartResult);
	}
	/**
	 * Get GetLastSaleChartResult
	 * @return XiNASDAQLastSaleTypeIntradayChart
	 */
	public function getGetLastSaleChartResult()
	{
		return $this->GetLastSaleChartResult;
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