<?php
/**
 * Class file for DirectSmileTypeGetAvailableSetListAuthResponse
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeGetAvailableSetListAuthResponse
 * @date 02/08/2012
 */
class DirectSmileTypeGetAvailableSetListAuthResponse extends DirectSmileWsdlClass
{
	/**
	 * The GetAvailableSetListAuthResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $GetAvailableSetListAuthResult;
	/**
	 * Constructor
	 * @param string GetAvailableSetListAuthResult
	 * @return DirectSmileTypeGetAvailableSetListAuthResponse
	 */
	public function __construct($_GetAvailableSetListAuthResult = null)
	{
		parent::__construct(array('GetAvailableSetListAuthResult'=>$_GetAvailableSetListAuthResult));
	}
	/**
	 * Set GetAvailableSetListAuthResult
	 * @param string GetAvailableSetListAuthResult
	 * @return string
	 */
	public function setGetAvailableSetListAuthResult($_GetAvailableSetListAuthResult)
	{
		return ($this->GetAvailableSetListAuthResult = $_GetAvailableSetListAuthResult);
	}
	/**
	 * Get GetAvailableSetListAuthResult
	 * @return string
	 */
	public function getGetAvailableSetListAuthResult()
	{
		return $this->GetAvailableSetListAuthResult;
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