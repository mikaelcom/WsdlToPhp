<?php
/**
 * Class file for DirectSmileTypeGetJobStatusDSMResponse
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeGetJobStatusDSMResponse
 * @date 02/08/2012
 */
class DirectSmileTypeGetJobStatusDSMResponse extends DirectSmileWsdlClass
{
	/**
	 * The GetJobStatusDSMResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $GetJobStatusDSMResult;
	/**
	 * Constructor
	 * @param string GetJobStatusDSMResult
	 * @return DirectSmileTypeGetJobStatusDSMResponse
	 */
	public function __construct($_GetJobStatusDSMResult = null)
	{
		parent::__construct(array('GetJobStatusDSMResult'=>$_GetJobStatusDSMResult));
	}
	/**
	 * Set GetJobStatusDSMResult
	 * @param string GetJobStatusDSMResult
	 * @return string
	 */
	public function setGetJobStatusDSMResult($_GetJobStatusDSMResult)
	{
		return ($this->GetJobStatusDSMResult = $_GetJobStatusDSMResult);
	}
	/**
	 * Get GetJobStatusDSMResult
	 * @return string
	 */
	public function getGetJobStatusDSMResult()
	{
		return $this->GetJobStatusDSMResult;
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