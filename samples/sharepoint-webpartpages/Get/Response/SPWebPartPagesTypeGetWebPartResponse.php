<?php
/**
 * Class file for SPWebPartPagesTypeGetWebPartResponse
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeGetWebPartResponse
 * @date 06/07/2012
 */
class SPWebPartPagesTypeGetWebPartResponse extends SPWebPartPagesWsdlClass
{
	/**
	 * The GetWebPartResult
	 * @var string
	 */
	public $GetWebPartResult;
	/**
	 * Constructor
	 * @param string GetWebPartResult
	 * @return SPWebPartPagesTypeGetWebPartResponse
	 */
	public function __construct($_GetWebPartResult = null)
	{
		parent::__construct(array('GetWebPartResult'=>$_GetWebPartResult));
	}
	/**
	 * Set GetWebPartResult
	 * @param string GetWebPartResult
	 * @return string
	 */
	public function setGetWebPartResult($_GetWebPartResult)
	{
		return ($this->GetWebPartResult = $_GetWebPartResult);
	}
	/**
	 * Get GetWebPartResult
	 * @return string
	 */
	public function getGetWebPartResult()
	{
		return $this->GetWebPartResult;
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