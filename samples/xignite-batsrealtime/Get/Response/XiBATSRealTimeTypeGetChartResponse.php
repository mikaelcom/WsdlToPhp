<?php
/**
 * Class file for XiBATSRealTimeTypeGetChartResponse
 * @date 08/07/2012
 */
/**
 * Class XiBATSRealTimeTypeGetChartResponse
 * @date 08/07/2012
 */
class XiBATSRealTimeTypeGetChartResponse extends XiBATSRealTimeWsdlClass
{
	/**
	 * The GetChartResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBATSRealTimeTypeIntradayChart
	 */
	public $GetChartResult;
	/**
	 * Constructor
	 * @param XiBATSRealTimeTypeIntradayChart GetChartResult
	 * @return XiBATSRealTimeTypeGetChartResponse
	 */
	public function __construct($_GetChartResult = null)
	{
		parent::__construct(array('GetChartResult'=>$_GetChartResult));
	}
	/**
	 * Set GetChartResult
	 * @param IntradayChart GetChartResult
	 * @return IntradayChart
	 */
	public function setGetChartResult($_GetChartResult)
	{
		return ($this->GetChartResult = $_GetChartResult);
	}
	/**
	 * Get GetChartResult
	 * @return XiBATSRealTimeTypeIntradayChart
	 */
	public function getGetChartResult()
	{
		return $this->GetChartResult;
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