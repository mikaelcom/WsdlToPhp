<?php
/**
 * Class file for DirectSmileTypeGetAccountInfoDSMResponse
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeGetAccountInfoDSMResponse
 * @date 02/08/2012
 */
class DirectSmileTypeGetAccountInfoDSMResponse extends DirectSmileWsdlClass
{
	/**
	 * The GetAccountInfoDSMResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $GetAccountInfoDSMResult;
	/**
	 * Constructor
	 * @param string GetAccountInfoDSMResult
	 * @return DirectSmileTypeGetAccountInfoDSMResponse
	 */
	public function __construct($_GetAccountInfoDSMResult = null)
	{
		parent::__construct(array('GetAccountInfoDSMResult'=>$_GetAccountInfoDSMResult));
	}
	/**
	 * Set GetAccountInfoDSMResult
	 * @param string GetAccountInfoDSMResult
	 * @return string
	 */
	public function setGetAccountInfoDSMResult($_GetAccountInfoDSMResult)
	{
		return ($this->GetAccountInfoDSMResult = $_GetAccountInfoDSMResult);
	}
	/**
	 * Get GetAccountInfoDSMResult
	 * @return string
	 */
	public function getGetAccountInfoDSMResult()
	{
		return $this->GetAccountInfoDSMResult;
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