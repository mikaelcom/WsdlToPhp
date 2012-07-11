<?php
/**
 * Class file for XiGlobalHistoricalTypeGetSplitRatioResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeGetSplitRatioResponse
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeGetSplitRatioResponse extends XiGlobalHistoricalWsdlClass
{
	/**
	 * The GetSplitRatioResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeSplitRatio
	 */
	public $GetSplitRatioResult;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeSplitRatio GetSplitRatioResult
	 * @return XiGlobalHistoricalTypeGetSplitRatioResponse
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
	 * @return XiGlobalHistoricalTypeSplitRatio
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