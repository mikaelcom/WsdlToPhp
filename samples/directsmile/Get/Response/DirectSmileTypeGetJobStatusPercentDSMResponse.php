<?php
/**
 * Class file for DirectSmileTypeGetJobStatusPercentDSMResponse
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeGetJobStatusPercentDSMResponse
 * @date 02/08/2012
 */
class DirectSmileTypeGetJobStatusPercentDSMResponse extends DirectSmileWsdlClass
{
	/**
	 * The GetJobStatusPercentDSMResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $GetJobStatusPercentDSMResult;
	/**
	 * Constructor
	 * @param string GetJobStatusPercentDSMResult
	 * @return DirectSmileTypeGetJobStatusPercentDSMResponse
	 */
	public function __construct($_GetJobStatusPercentDSMResult = null)
	{
		parent::__construct(array('GetJobStatusPercentDSMResult'=>$_GetJobStatusPercentDSMResult));
	}
	/**
	 * Set GetJobStatusPercentDSMResult
	 * @param string GetJobStatusPercentDSMResult
	 * @return string
	 */
	public function setGetJobStatusPercentDSMResult($_GetJobStatusPercentDSMResult)
	{
		return ($this->GetJobStatusPercentDSMResult = $_GetJobStatusPercentDSMResult);
	}
	/**
	 * Get GetJobStatusPercentDSMResult
	 * @return string
	 */
	public function getGetJobStatusPercentDSMResult()
	{
		return $this->GetJobStatusPercentDSMResult;
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