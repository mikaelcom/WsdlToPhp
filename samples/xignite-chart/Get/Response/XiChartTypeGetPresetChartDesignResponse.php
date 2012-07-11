<?php
/**
 * Class file for XiChartTypeGetPresetChartDesignResponse
 * @date 08/07/2012
 */
/**
 * Class XiChartTypeGetPresetChartDesignResponse
 * @date 08/07/2012
 */
class XiChartTypeGetPresetChartDesignResponse extends XiChartWsdlClass
{
	/**
	 * The GetPresetChartDesignResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiChartTypeChartDesign
	 */
	public $GetPresetChartDesignResult;
	/**
	 * Constructor
	 * @param XiChartTypeChartDesign GetPresetChartDesignResult
	 * @return XiChartTypeGetPresetChartDesignResponse
	 */
	public function __construct($_GetPresetChartDesignResult = null)
	{
		parent::__construct(array('GetPresetChartDesignResult'=>$_GetPresetChartDesignResult));
	}
	/**
	 * Set GetPresetChartDesignResult
	 * @param ChartDesign GetPresetChartDesignResult
	 * @return ChartDesign
	 */
	public function setGetPresetChartDesignResult($_GetPresetChartDesignResult)
	{
		return ($this->GetPresetChartDesignResult = $_GetPresetChartDesignResult);
	}
	/**
	 * Get GetPresetChartDesignResult
	 * @return XiChartTypeChartDesign
	 */
	public function getGetPresetChartDesignResult()
	{
		return $this->GetPresetChartDesignResult;
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