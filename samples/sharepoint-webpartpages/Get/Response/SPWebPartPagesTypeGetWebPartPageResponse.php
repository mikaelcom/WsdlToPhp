<?php
/**
 * Class file for SPWebPartPagesTypeGetWebPartPageResponse
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeGetWebPartPageResponse
 * @date 06/07/2012
 */
class SPWebPartPagesTypeGetWebPartPageResponse extends SPWebPartPagesWsdlClass
{
	/**
	 * The GetWebPartPageResult
	 * @var string
	 */
	public $GetWebPartPageResult;
	/**
	 * Constructor
	 * @param string GetWebPartPageResult
	 * @return SPWebPartPagesTypeGetWebPartPageResponse
	 */
	public function __construct($_GetWebPartPageResult = null)
	{
		parent::__construct(array('GetWebPartPageResult'=>$_GetWebPartPageResult));
	}
	/**
	 * Set GetWebPartPageResult
	 * @param string GetWebPartPageResult
	 * @return string
	 */
	public function setGetWebPartPageResult($_GetWebPartPageResult)
	{
		return ($this->GetWebPartPageResult = $_GetWebPartPageResult);
	}
	/**
	 * Get GetWebPartPageResult
	 * @return string
	 */
	public function getGetWebPartPageResult()
	{
		return $this->GetWebPartPageResult;
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