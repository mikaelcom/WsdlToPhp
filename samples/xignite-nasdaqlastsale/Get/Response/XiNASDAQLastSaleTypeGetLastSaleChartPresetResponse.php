<?php
/**
 * Class file for XiNASDAQLastSaleTypeGetLastSaleChartPresetResponse
 * @date 08/07/2012
 */
/**
 * Class XiNASDAQLastSaleTypeGetLastSaleChartPresetResponse
 * @date 08/07/2012
 */
class XiNASDAQLastSaleTypeGetLastSaleChartPresetResponse extends XiNASDAQLastSaleWsdlClass
{
	/**
	 * The GetLastSaleChartPresetResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiNASDAQLastSaleTypeIntradayChart
	 */
	public $GetLastSaleChartPresetResult;
	/**
	 * Constructor
	 * @param XiNASDAQLastSaleTypeIntradayChart GetLastSaleChartPresetResult
	 * @return XiNASDAQLastSaleTypeGetLastSaleChartPresetResponse
	 */
	public function __construct($_GetLastSaleChartPresetResult = null)
	{
		parent::__construct(array('GetLastSaleChartPresetResult'=>$_GetLastSaleChartPresetResult));
	}
	/**
	 * Set GetLastSaleChartPresetResult
	 * @param IntradayChart GetLastSaleChartPresetResult
	 * @return IntradayChart
	 */
	public function setGetLastSaleChartPresetResult($_GetLastSaleChartPresetResult)
	{
		return ($this->GetLastSaleChartPresetResult = $_GetLastSaleChartPresetResult);
	}
	/**
	 * Get GetLastSaleChartPresetResult
	 * @return XiNASDAQLastSaleTypeIntradayChart
	 */
	public function getGetLastSaleChartPresetResult()
	{
		return $this->GetLastSaleChartPresetResult;
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