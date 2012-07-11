<?php
/**
 * Class file for XiInterBanksTypeGetChartDesignResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetChartDesignResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetChartDesignResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetChartDesignResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeChartDesign
	 */
	public $GetChartDesignResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeChartDesign GetChartDesignResult
	 * @return XiInterBanksTypeGetChartDesignResponse
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
	 * @return XiInterBanksTypeChartDesign
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