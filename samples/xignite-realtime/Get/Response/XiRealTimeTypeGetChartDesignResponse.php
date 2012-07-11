<?php
/**
 * Class file for XiRealTimeTypeGetChartDesignResponse
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeGetChartDesignResponse
 * @date 08/07/2012
 */
class XiRealTimeTypeGetChartDesignResponse extends XiRealTimeWsdlClass
{
	/**
	 * The GetChartDesignResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRealTimeTypeChartDesign
	 */
	public $GetChartDesignResult;
	/**
	 * Constructor
	 * @param XiRealTimeTypeChartDesign GetChartDesignResult
	 * @return XiRealTimeTypeGetChartDesignResponse
	 */
	public function __construct($_GetChartDesignResult = null)
	{
		parent::__construct(array('GetChartDesignResult'=>$_GetChartDesignResult));
	}
	/**
	 * Set GetChartDesignResult
	 * @param ChartDesign GetChartDesignResult
	 * @return ChartDesign
	 */
	public function setGetChartDesignResult($_GetChartDesignResult)
	{
		return ($this->GetChartDesignResult = $_GetChartDesignResult);
	}
	/**
	 * Get GetChartDesignResult
	 * @return XiRealTimeTypeChartDesign
	 */
	public function getGetChartDesignResult()
	{
		return $this->GetChartDesignResult;
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