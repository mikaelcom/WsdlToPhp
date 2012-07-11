<?php
/**
 * Class file for XiMetalsTypeGetIntradayMetalFutureChartDesignResponse
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetIntradayMetalFutureChartDesignResponse
 * @date 08/07/2012
 */
class XiMetalsTypeGetIntradayMetalFutureChartDesignResponse extends XiMetalsWsdlClass
{
	/**
	 * The GetIntradayMetalFutureChartDesignResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeChartDesign
	 */
	public $GetIntradayMetalFutureChartDesignResult;
	/**
	 * Constructor
	 * @param XiMetalsTypeChartDesign GetIntradayMetalFutureChartDesignResult
	 * @return XiMetalsTypeGetIntradayMetalFutureChartDesignResponse
	 */
	public function __construct($_GetIntradayMetalFutureChartDesignResult = null)
	{
		parent::__construct(array('GetIntradayMetalFutureChartDesignResult'=>$_GetIntradayMetalFutureChartDesignResult));
	}
	/**
	 * Set GetIntradayMetalFutureChartDesignResult
	 * @param ChartDesign GetIntradayMetalFutureChartDesignResult
	 * @return ChartDesign
	 */
	public function setGetIntradayMetalFutureChartDesignResult($_GetIntradayMetalFutureChartDesignResult)
	{
		return ($this->GetIntradayMetalFutureChartDesignResult = $_GetIntradayMetalFutureChartDesignResult);
	}
	/**
	 * Get GetIntradayMetalFutureChartDesignResult
	 * @return XiMetalsTypeChartDesign
	 */
	public function getGetIntradayMetalFutureChartDesignResult()
	{
		return $this->GetIntradayMetalFutureChartDesignResult;
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