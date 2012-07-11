<?php
/**
 * Class file for XiFuturesTypeGetHistoricalChartDesignResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetHistoricalChartDesignResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetHistoricalChartDesignResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetHistoricalChartDesignResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeChartDesign
	 */
	public $GetHistoricalChartDesignResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeChartDesign GetHistoricalChartDesignResult
	 * @return XiFuturesTypeGetHistoricalChartDesignResponse
	 */
	public function __construct($_GetHistoricalChartDesignResult = null)
	{
		parent::__construct(array('GetHistoricalChartDesignResult'=>$_GetHistoricalChartDesignResult));
	}
	/**
	 * Set GetHistoricalChartDesignResult
	 * @param ChartDesign GetHistoricalChartDesignResult
	 * @return ChartDesign
	 */
	public function setGetHistoricalChartDesignResult($_GetHistoricalChartDesignResult)
	{
		return ($this->GetHistoricalChartDesignResult = $_GetHistoricalChartDesignResult);
	}
	/**
	 * Get GetHistoricalChartDesignResult
	 * @return XiFuturesTypeChartDesign
	 */
	public function getGetHistoricalChartDesignResult()
	{
		return $this->GetHistoricalChartDesignResult;
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