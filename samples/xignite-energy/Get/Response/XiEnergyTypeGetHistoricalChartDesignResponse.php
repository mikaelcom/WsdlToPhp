<?php
/**
 * Class file for XiEnergyTypeGetHistoricalChartDesignResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetHistoricalChartDesignResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetHistoricalChartDesignResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetHistoricalChartDesignResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeChartDesign
	 */
	public $GetHistoricalChartDesignResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeChartDesign GetHistoricalChartDesignResult
	 * @return XiEnergyTypeGetHistoricalChartDesignResponse
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
	 * @return XiEnergyTypeChartDesign
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