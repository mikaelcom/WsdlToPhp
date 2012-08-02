<?php
/**
 * Class file for DirectSmileTypeGetAvailableDhttListAuthResponse
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeGetAvailableDhttListAuthResponse
 * @date 02/08/2012
 */
class DirectSmileTypeGetAvailableDhttListAuthResponse extends DirectSmileWsdlClass
{
	/**
	 * The GetAvailableDhttListAuthResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $GetAvailableDhttListAuthResult;
	/**
	 * Constructor
	 * @param string GetAvailableDhttListAuthResult
	 * @return DirectSmileTypeGetAvailableDhttListAuthResponse
	 */
	public function __construct($_GetAvailableDhttListAuthResult = null)
	{
		parent::__construct(array('GetAvailableDhttListAuthResult'=>$_GetAvailableDhttListAuthResult));
	}
	/**
	 * Set GetAvailableDhttListAuthResult
	 * @param string GetAvailableDhttListAuthResult
	 * @return string
	 */
	public function setGetAvailableDhttListAuthResult($_GetAvailableDhttListAuthResult)
	{
		return ($this->GetAvailableDhttListAuthResult = $_GetAvailableDhttListAuthResult);
	}
	/**
	 * Get GetAvailableDhttListAuthResult
	 * @return string
	 */
	public function getGetAvailableDhttListAuthResult()
	{
		return $this->GetAvailableDhttListAuthResult;
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