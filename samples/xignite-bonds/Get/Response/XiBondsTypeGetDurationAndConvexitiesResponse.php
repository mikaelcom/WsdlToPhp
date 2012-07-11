<?php
/**
 * Class file for XiBondsTypeGetDurationAndConvexitiesResponse
 * @date 08/07/2012
 */
/**
 * Class XiBondsTypeGetDurationAndConvexitiesResponse
 * @date 08/07/2012
 */
class XiBondsTypeGetDurationAndConvexitiesResponse extends XiBondsWsdlClass
{
	/**
	 * The GetDurationAndConvexitiesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsTypeArrayOfDurationAndConvexity
	 */
	public $GetDurationAndConvexitiesResult;
	/**
	 * Constructor
	 * @param XiBondsTypeArrayOfDurationAndConvexity GetDurationAndConvexitiesResult
	 * @return XiBondsTypeGetDurationAndConvexitiesResponse
	 */
	public function __construct($_GetDurationAndConvexitiesResult = null)
	{
		parent::__construct(array('GetDurationAndConvexitiesResult'=>new XiBondsTypeArrayOfDurationAndConvexity($_GetDurationAndConvexitiesResult)));
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
	 * @return XiBondsTypeArrayOfDurationAndConvexity
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