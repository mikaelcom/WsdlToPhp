<?php
/**
 * Class file for SPWebPartPagesTypeGetWebPartPageConnectionInfoResponse
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeGetWebPartPageConnectionInfoResponse
 * @date 06/07/2012
 */
class SPWebPartPagesTypeGetWebPartPageConnectionInfoResponse extends SPWebPartPagesWsdlClass
{
	/**
	 * The GetWebPartPageConnectionInfoResult
	 * @var string
	 */
	public $GetWebPartPageConnectionInfoResult;
	/**
	 * Constructor
	 * @param string GetWebPartPageConnectionInfoResult
	 * @return SPWebPartPagesTypeGetWebPartPageConnectionInfoResponse
	 */
	public function __construct($_GetWebPartPageConnectionInfoResult = null)
	{
		parent::__construct(array('GetWebPartPageConnectionInfoResult'=>$_GetWebPartPageConnectionInfoResult));
	}
	/**
	 * Set GetWebPartPageConnectionInfoResult
	 * @param string GetWebPartPageConnectionInfoResult
	 * @return string
	 */
	public function setGetWebPartPageConnectionInfoResult($_GetWebPartPageConnectionInfoResult)
	{
		return ($this->GetWebPartPageConnectionInfoResult = $_GetWebPartPageConnectionInfoResult);
	}
	/**
	 * Get GetWebPartPageConnectionInfoResult
	 * @return string
	 */
	public function getGetWebPartPageConnectionInfoResult()
	{
		return $this->GetWebPartPageConnectionInfoResult;
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