<?php
/**
 * Class file for XiEnergyTypeGetIntradayChartDesignResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetIntradayChartDesignResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetIntradayChartDesignResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetIntradayChartDesignResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeChartDesign
	 */
	public $GetIntradayChartDesignResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeChartDesign GetIntradayChartDesignResult
	 * @return XiEnergyTypeGetIntradayChartDesignResponse
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
	 * @return XiEnergyTypeChartDesign
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