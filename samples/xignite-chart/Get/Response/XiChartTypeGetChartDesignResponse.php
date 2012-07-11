<?php
/**
 * Class file for XiChartTypeGetChartDesignResponse
 * @date 08/07/2012
 */
/**
 * Class XiChartTypeGetChartDesignResponse
 * @date 08/07/2012
 */
class XiChartTypeGetChartDesignResponse extends XiChartWsdlClass
{
	/**
	 * The GetChartDesignResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiChartTypeChartDesign
	 */
	public $GetChartDesignResult;
	/**
	 * Constructor
	 * @param XiChartTypeChartDesign GetChartDesignResult
	 * @return XiChartTypeGetChartDesignResponse
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
	 * @return XiChartTypeChartDesign
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