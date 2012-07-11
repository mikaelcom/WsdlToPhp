<?php
/**
 * Class file for XiFuturesTypeGetIntradayChartDesignResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetIntradayChartDesignResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetIntradayChartDesignResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetIntradayChartDesignResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeChartDesign
	 */
	public $GetIntradayChartDesignResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeChartDesign GetIntradayChartDesignResult
	 * @return XiFuturesTypeGetIntradayChartDesignResponse
	 */
	public function __construct($_GetIntradayChartDesignResult = null)
	{
		parent::__construct(array('GetIntradayChartDesignResult'=>$_GetIntradayChartDesignResult));
	}
	/**
	 * Set GetIntradayChartDesignResult
	 * @param ChartDesign GetIntradayChartDesignResult
	 * @return ChartDesign
	 */
	public function setGetIntradayChartDesignResult($_GetIntradayChartDesignResult)
	{
		return ($this->GetIntradayChartDesignResult = $_GetIntradayChartDesignResult);
	}
	/**
	 * Get GetIntradayChartDesignResult
	 * @return XiFuturesTypeChartDesign
	 */
	public function getGetIntradayChartDesignResult()
	{
		return $this->GetIntradayChartDesignResult;
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