<?php
/**
 * Class file for XiSecurityTypeGetSplitRatioResponse
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeGetSplitRatioResponse
 * @date 08/07/2012
 */
class XiSecurityTypeGetSplitRatioResponse extends XiSecurityWsdlClass
{
	/**
	 * The GetSplitRatioResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiSecurityTypeStockSplit
	 */
	public $GetSplitRatioResult;
	/**
	 * Constructor
	 * @param XiSecurityTypeStockSplit GetSplitRatioResult
	 * @return XiSecurityTypeGetSplitRatioResponse
	 */
	public function __construct($_GetSplitRatioResult = null)
	{
		parent::__construct(array('GetSplitRatioResult'=>$_GetSplitRatioResult));
	}
	/**
	 * Set GetSplitRatioResult
	 * @param StockSplit GetSplitRatioResult
	 * @return StockSplit
	 */
	public function setGetSplitRatioResult($_GetSplitRatioResult)
	{
		return ($this->GetSplitRatioResult = $_GetSplitRatioResult);
	}
	/**
	 * Get GetSplitRatioResult
	 * @return XiSecurityTypeStockSplit
	 */
	public function getGetSplitRatioResult()
	{
		return $this->GetSplitRatioResult;
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