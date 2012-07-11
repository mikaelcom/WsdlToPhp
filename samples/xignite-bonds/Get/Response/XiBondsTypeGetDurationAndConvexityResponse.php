<?php
/**
 * Class file for XiBondsTypeGetDurationAndConvexityResponse
 * @date 08/07/2012
 */
/**
 * Class XiBondsTypeGetDurationAndConvexityResponse
 * @date 08/07/2012
 */
class XiBondsTypeGetDurationAndConvexityResponse extends XiBondsWsdlClass
{
	/**
	 * The GetDurationAndConvexityResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsTypeDurationAndConvexity
	 */
	public $GetDurationAndConvexityResult;
	/**
	 * Constructor
	 * @param XiBondsTypeDurationAndConvexity GetDurationAndConvexityResult
	 * @return XiBondsTypeGetDurationAndConvexityResponse
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
	 * @return XiBondsTypeDurationAndConvexity
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