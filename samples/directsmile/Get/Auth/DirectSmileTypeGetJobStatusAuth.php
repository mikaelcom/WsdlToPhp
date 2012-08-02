<?php
/**
 * Class file for DirectSmileTypeGetJobStatusAuth
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeGetJobStatusAuth
 * @date 02/08/2012
 */
class DirectSmileTypeGetJobStatusAuth extends DirectSmileWsdlClass
{
	/**
	 * The AuthenticationCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AuthenticationCode;
	/**
	 * The JobID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $JobID;
	/**
	 * Constructor
	 * @param string AuthenticationCode
	 * @param string JobID
	 * @return DirectSmileTypeGetJobStatusAuth
	 */
	public function __construct($_AuthenticationCode = null,$_JobID = null)
	{
		parent::__construct(array('AuthenticationCode'=>$_AuthenticationCode,'JobID'=>$_JobID));
	}
	/**
	 * Set AuthenticationCode
	 * @param string AuthenticationCode
	 * @return string
	 */
	public function setAuthenticationCode($_AuthenticationCode)
	{
		return ($this->AuthenticationCode = $_AuthenticationCode);
	}
	/**
	 * Get AuthenticationCode
	 * @return string
	 */
	public function getAuthenticationCode()
	{
		return $this->AuthenticationCode;
	}
	/**
	 * Set JobID
	 * @param string JobID
	 * @return string
	 */
	public function setJobID($_JobID)
	{
		return ($this->JobID = $_JobID);
	}
	/**
	 * Get JobID
	 * @return string
	 */
	public function getJobID()
	{
		return $this->JobID;
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