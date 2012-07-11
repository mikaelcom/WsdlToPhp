<?php
/**
 * Class file for XiBondsRealTimeTypeGetDurationAndConvexityResponse
 * @date 08/07/2012
 */
/**
 * Class XiBondsRealTimeTypeGetDurationAndConvexityResponse
 * @date 08/07/2012
 */
class XiBondsRealTimeTypeGetDurationAndConvexityResponse extends XiBondsRealTimeWsdlClass
{
	/**
	 * The GetDurationAndConvexityResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsRealTimeTypeDurationAndConvexity
	 */
	public $GetDurationAndConvexityResult;
	/**
	 * Constructor
	 * @param XiBondsRealTimeTypeDurationAndConvexity GetDurationAndConvexityResult
	 * @return XiBondsRealTimeTypeGetDurationAndConvexityResponse
	 */
	public function __construct($_GetDurationAndConvexityResult = null)
	{
		parent::__construct(array('GetDurationAndConvexityResult'=>$_GetDurationAndConvexityResult));
	}
	/**
	 * Set GetDurationAndConvexityResult
	 * @param DurationAndConvexity GetDurationAndConvexityResult
	 * @return DurationAndConvexity
	 */
	public function setGetDurationAndConvexityResult($_GetDurationAndConvexityResult)
	{
		return ($this->GetDurationAndConvexityResult = $_GetDurationAndConvexityResult);
	}
	/**
	 * Get GetDurationAndConvexityResult
	 * @return XiBondsRealTimeTypeDurationAndConvexity
	 */
	public function getGetDurationAndConvexityResult()
	{
		return $this->GetDurationAndConvexityResult;
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