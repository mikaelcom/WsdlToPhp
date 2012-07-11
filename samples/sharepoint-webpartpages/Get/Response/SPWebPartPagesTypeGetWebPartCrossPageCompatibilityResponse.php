<?php
/**
 * Class file for SPWebPartPagesTypeGetWebPartCrossPageCompatibilityResponse
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeGetWebPartCrossPageCompatibilityResponse
 * @date 06/07/2012
 */
class SPWebPartPagesTypeGetWebPartCrossPageCompatibilityResponse extends SPWebPartPagesWsdlClass
{
	/**
	 * The GetWebPartCrossPageCompatibilityResult
	 * @var string
	 */
	public $GetWebPartCrossPageCompatibilityResult;
	/**
	 * Constructor
	 * @param string GetWebPartCrossPageCompatibilityResult
	 * @return SPWebPartPagesTypeGetWebPartCrossPageCompatibilityResponse
	 */
	public function __construct($_GetWebPartCrossPageCompatibilityResult = null)
	{
		parent::__construct(array('GetWebPartCrossPageCompatibilityResult'=>$_GetWebPartCrossPageCompatibilityResult));
	}
	/**
	 * Set GetWebPartCrossPageCompatibilityResult
	 * @param string GetWebPartCrossPageCompatibilityResult
	 * @return string
	 */
	public function setGetWebPartCrossPageCompatibilityResult($_GetWebPartCrossPageCompatibilityResult)
	{
		return ($this->GetWebPartCrossPageCompatibilityResult = $_GetWebPartCrossPageCompatibilityResult);
	}
	/**
	 * Get GetWebPartCrossPageCompatibilityResult
	 * @return string
	 */
	public function getGetWebPartCrossPageCompatibilityResult()
	{
		return $this->GetWebPartCrossPageCompatibilityResult;
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