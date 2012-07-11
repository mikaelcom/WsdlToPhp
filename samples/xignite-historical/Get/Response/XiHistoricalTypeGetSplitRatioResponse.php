<?php
/**
 * Class file for XiHistoricalTypeGetSplitRatioResponse
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeGetSplitRatioResponse
 * @date 08/07/2012
 */
class XiHistoricalTypeGetSplitRatioResponse extends XiHistoricalWsdlClass
{
	/**
	 * The GetSplitRatioResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeSplitRatio
	 */
	public $GetSplitRatioResult;
	/**
	 * Constructor
	 * @param XiHistoricalTypeSplitRatio GetSplitRatioResult
	 * @return XiHistoricalTypeGetSplitRatioResponse
	 */
	public function __construct($_GetSplitRatioResult = null)
	{
		parent::__construct(array('GetSplitRatioResult'=>$_GetSplitRatioResult));
	}
	/**
	 * Set GetSplitRatioResult
	 * @param SplitRatio GetSplitRatioResult
	 * @return SplitRatio
	 */
	public function setGetSplitRatioResult($_GetSplitRatioResult)
	{
		return ($this->GetSplitRatioResult = $_GetSplitRatioResult);
	}
	/**
	 * Get GetSplitRatioResult
	 * @return XiHistoricalTypeSplitRatio
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