<?php
/**
 * Class file for SPEmailWsTypeGetJobStatusResponse
 * @date 06/07/2012
 */
/**
 * Class SPEmailWsTypeGetJobStatusResponse
 * @date 06/07/2012
 */
class SPEmailWsTypeGetJobStatusResponse extends SPEmailWsWsdlClass
{
	/**
	 * The GetJobStatusResult
	 * @var SPEmailWsTypeRequestResponse
	 */
	public $GetJobStatusResult;
	/**
	 * Constructor
	 * @param SPEmailWsTypeRequestResponse GetJobStatusResult
	 * @return SPEmailWsTypeGetJobStatusResponse
	 */
	public function __construct($_GetJobStatusResult = null)
	{
		parent::__construct(array('GetJobStatusResult'=>$_GetJobStatusResult));
	}
	/**
	 * Set GetJobStatusResult
	 * @param RequestResponse GetJobStatusResult
	 * @return RequestResponse
	 */
	public function setGetJobStatusResult($_GetJobStatusResult)
	{
		return ($this->GetJobStatusResult = $_GetJobStatusResult);
	}
	/**
	 * Get GetJobStatusResult
	 * @return SPEmailWsTypeRequestResponse
	 */
	public function getGetJobStatusResult()
	{
		return $this->GetJobStatusResult;
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