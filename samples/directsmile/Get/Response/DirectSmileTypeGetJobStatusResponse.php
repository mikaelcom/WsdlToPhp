<?php
/**
 * Class file for DirectSmileTypeGetJobStatusResponse
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeGetJobStatusResponse
 * @date 02/08/2012
 */
class DirectSmileTypeGetJobStatusResponse extends DirectSmileWsdlClass
{
	/**
	 * The GetJobStatusResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $GetJobStatusResult;
	/**
	 * Constructor
	 * @param string GetJobStatusResult
	 * @return DirectSmileTypeGetJobStatusResponse
	 */
	public function __construct($_GetJobStatusResult = null)
	{
		parent::__construct(array('GetJobStatusResult'=>$_GetJobStatusResult));
	}
	/**
	 * Set GetJobStatusResult
	 * @param string GetJobStatusResult
	 * @return string
	 */
	public function setGetJobStatusResult($_GetJobStatusResult)
	{
		return ($this->GetJobStatusResult = $_GetJobStatusResult);
	}
	/**
	 * Get GetJobStatusResult
	 * @return string
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