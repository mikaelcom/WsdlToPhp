<?php
/**
 * Class file for DirectSmileTypeGetAuthenticationCodeResponse
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeGetAuthenticationCodeResponse
 * @date 02/08/2012
 */
class DirectSmileTypeGetAuthenticationCodeResponse extends DirectSmileWsdlClass
{
	/**
	 * The GetAuthenticationCodeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $GetAuthenticationCodeResult;
	/**
	 * Constructor
	 * @param string GetAuthenticationCodeResult
	 * @return DirectSmileTypeGetAuthenticationCodeResponse
	 */
	public function __construct($_GetAuthenticationCodeResult = null)
	{
		parent::__construct(array('GetAuthenticationCodeResult'=>$_GetAuthenticationCodeResult));
	}
	/**
	 * Set GetAuthenticationCodeResult
	 * @param string GetAuthenticationCodeResult
	 * @return string
	 */
	public function setGetAuthenticationCodeResult($_GetAuthenticationCodeResult)
	{
		return ($this->GetAuthenticationCodeResult = $_GetAuthenticationCodeResult);
	}
	/**
	 * Get GetAuthenticationCodeResult
	 * @return string
	 */
	public function getGetAuthenticationCodeResult()
	{
		return $this->GetAuthenticationCodeResult;
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