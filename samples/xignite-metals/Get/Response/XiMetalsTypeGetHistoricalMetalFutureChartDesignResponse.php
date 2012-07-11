<?php
/**
 * Class file for XiMetalsTypeGetHistoricalMetalFutureChartDesignResponse
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetHistoricalMetalFutureChartDesignResponse
 * @date 08/07/2012
 */
class XiMetalsTypeGetHistoricalMetalFutureChartDesignResponse extends XiMetalsWsdlClass
{
	/**
	 * The GetHistoricalMetalFutureChartDesignResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeChartDesign
	 */
	public $GetHistoricalMetalFutureChartDesignResult;
	/**
	 * Constructor
	 * @param XiMetalsTypeChartDesign GetHistoricalMetalFutureChartDesignResult
	 * @return XiMetalsTypeGetHistoricalMetalFutureChartDesignResponse
	 */
	public function __construct($_GetHistoricalMetalFutureChartDesignResult = null)
	{
		parent::__construct(array('GetHistoricalMetalFutureChartDesignResult'=>$_GetHistoricalMetalFutureChartDesignResult));
	}
	/**
	 * Set GetHistoricalMetalFutureChartDesignResult
	 * @param ChartDesign GetHistoricalMetalFutureChartDesignResult
	 * @return ChartDesign
	 */
	public function setGetHistoricalMetalFutureChartDesignResult($_GetHistoricalMetalFutureChartDesignResult)
	{
		return ($this->GetHistoricalMetalFutureChartDesignResult = $_GetHistoricalMetalFutureChartDesignResult);
	}
	/**
	 * Get GetHistoricalMetalFutureChartDesignResult
	 * @return XiMetalsTypeChartDesign
	 */
	public function getGetHistoricalMetalFutureChartDesignResult()
	{
		return $this->GetHistoricalMetalFutureChartDesignResult;
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