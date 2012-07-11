<?php
/**
 * Class file for SPWebPartPagesTypeGetWebPart2Response
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeGetWebPart2Response
 * @date 06/07/2012
 */
class SPWebPartPagesTypeGetWebPart2Response extends SPWebPartPagesWsdlClass
{
	/**
	 * The GetWebPart2Result
	 * @var string
	 */
	public $GetWebPart2Result;
	/**
	 * Constructor
	 * @param string GetWebPart2Result
	 * @return SPWebPartPagesTypeGetWebPart2Response
	 */
	public function __construct($_GetWebPart2Result = null)
	{
		parent::__construct(array('GetWebPart2Result'=>$_GetWebPart2Result));
	}
	/**
	 * Set GetWebPart2Result
	 * @param string GetWebPart2Result
	 * @return string
	 */
	public function setGetWebPart2Result($_GetWebPart2Result)
	{
		return ($this->GetWebPart2Result = $_GetWebPart2Result);
	}
	/**
	 * Get GetWebPart2Result
	 * @return string
	 */
	public function getGetWebPart2Result()
	{
		return $this->GetWebPart2Result;
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