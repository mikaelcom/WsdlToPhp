<?php
/**
 * Class file for XiBondsRealTimeTypeGetDurationAndConvexitiesResponse
 * @date 08/07/2012
 */
/**
 * Class XiBondsRealTimeTypeGetDurationAndConvexitiesResponse
 * @date 08/07/2012
 */
class XiBondsRealTimeTypeGetDurationAndConvexitiesResponse extends XiBondsRealTimeWsdlClass
{
	/**
	 * The GetDurationAndConvexitiesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsRealTimeTypeArrayOfDurationAndConvexity
	 */
	public $GetDurationAndConvexitiesResult;
	/**
	 * Constructor
	 * @param XiBondsRealTimeTypeArrayOfDurationAndConvexity GetDurationAndConvexitiesResult
	 * @return XiBondsRealTimeTypeGetDurationAndConvexitiesResponse
	 */
	public function __construct($_GetDurationAndConvexitiesResult = null)
	{
		parent::__construct(array('GetDurationAndConvexitiesResult'=>new XiBondsRealTimeTypeArrayOfDurationAndConvexity($_GetDurationAndConvexitiesResult)));
	}
	/**
	 * Set GetDurationAndConvexitiesResult
	 * @param ArrayOfDurationAndConvexity GetDurationAndConvexitiesResult
	 * @return ArrayOfDurationAndConvexity
	 */
	public function setGetDurationAndConvexitiesResult($_GetDurationAndConvexitiesResult)
	{
		return ($this->GetDurationAndConvexitiesResult = $_GetDurationAndConvexitiesResult);
	}
	/**
	 * Get GetDurationAndConvexitiesResult
	 * @return XiBondsRealTimeTypeArrayOfDurationAndConvexity
	 */
	public function getGetDurationAndConvexitiesResult()
	{
		return $this->GetDurationAndConvexitiesResult;
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