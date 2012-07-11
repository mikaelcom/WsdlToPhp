<?php
/**
 * Class file for XiNASDAQLastSaleTypeGetChartDesignResponse
 * @date 08/07/2012
 */
/**
 * Class XiNASDAQLastSaleTypeGetChartDesignResponse
 * @date 08/07/2012
 */
class XiNASDAQLastSaleTypeGetChartDesignResponse extends XiNASDAQLastSaleWsdlClass
{
	/**
	 * The GetChartDesignResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiNASDAQLastSaleTypeChartDesign
	 */
	public $GetChartDesignResult;
	/**
	 * Constructor
	 * @param XiNASDAQLastSaleTypeChartDesign GetChartDesignResult
	 * @return XiNASDAQLastSaleTypeGetChartDesignResponse
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
	 * @return XiNASDAQLastSaleTypeChartDesign
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