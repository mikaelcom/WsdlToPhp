<?php
/**
 * Class file for XiMetalsTypeGetMetalSpotChartDesignResponse
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetMetalSpotChartDesignResponse
 * @date 08/07/2012
 */
class XiMetalsTypeGetMetalSpotChartDesignResponse extends XiMetalsWsdlClass
{
	/**
	 * The GetMetalSpotChartDesignResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeChartDesign
	 */
	public $GetMetalSpotChartDesignResult;
	/**
	 * Constructor
	 * @param XiMetalsTypeChartDesign GetMetalSpotChartDesignResult
	 * @return XiMetalsTypeGetMetalSpotChartDesignResponse
	 */
	public function __construct($_GetMetalSpotChartDesignResult = null)
	{
		parent::__construct(array('GetMetalSpotChartDesignResult'=>$_GetMetalSpotChartDesignResult));
	}
	/**
	 * Set GetMetalSpotChartDesignResult
	 * @param ChartDesign GetMetalSpotChartDesignResult
	 * @return ChartDesign
	 */
	public function setGetMetalSpotChartDesignResult($_GetMetalSpotChartDesignResult)
	{
		return ($this->GetMetalSpotChartDesignResult = $_GetMetalSpotChartDesignResult);
	}
	/**
	 * Get GetMetalSpotChartDesignResult
	 * @return XiMetalsTypeChartDesign
	 */
	public function getGetMetalSpotChartDesignResult()
	{
		return $this->GetMetalSpotChartDesignResult;
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