<?php
/**
 * Class file for DirectSmileTypeGetJobStatusAuthResponse
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeGetJobStatusAuthResponse
 * @date 02/08/2012
 */
class DirectSmileTypeGetJobStatusAuthResponse extends DirectSmileWsdlClass
{
	/**
	 * The GetJobStatusAuthResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $GetJobStatusAuthResult;
	/**
	 * Constructor
	 * @param string GetJobStatusAuthResult
	 * @return DirectSmileTypeGetJobStatusAuthResponse
	 */
	public function __construct($_GetJobStatusAuthResult = null)
	{
		parent::__construct(array('GetJobStatusAuthResult'=>$_GetJobStatusAuthResult));
	}
	/**
	 * Set GetJobStatusAuthResult
	 * @param string GetJobStatusAuthResult
	 * @return string
	 */
	public function setGetJobStatusAuthResult($_GetJobStatusAuthResult)
	{
		return ($this->GetJobStatusAuthResult = $_GetJobStatusAuthResult);
	}
	/**
	 * Get GetJobStatusAuthResult
	 * @return string
	 */
	public function getGetJobStatusAuthResult()
	{
		return $this->GetJobStatusAuthResult;
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