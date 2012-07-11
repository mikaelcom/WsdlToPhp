<?php
/**
 * Class file for XiRatesTypeGetChartDesignResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetChartDesignResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetChartDesignResponse extends XiRatesWsdlClass
{
	/**
	 * The GetChartDesignResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeChartDesign
	 */
	public $GetChartDesignResult;
	/**
	 * Constructor
	 * @param XiRatesTypeChartDesign GetChartDesignResult
	 * @return XiRatesTypeGetChartDesignResponse
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
	 * @return XiRatesTypeChartDesign
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