<?php
/**
 * Class file for DirectSmileTypeGetAvailableDocListAuthResponse
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeGetAvailableDocListAuthResponse
 * @date 02/08/2012
 */
class DirectSmileTypeGetAvailableDocListAuthResponse extends DirectSmileWsdlClass
{
	/**
	 * The GetAvailableDocListAuthResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $GetAvailableDocListAuthResult;
	/**
	 * Constructor
	 * @param string GetAvailableDocListAuthResult
	 * @return DirectSmileTypeGetAvailableDocListAuthResponse
	 */
	public function __construct($_GetAvailableDocListAuthResult = null)
	{
		parent::__construct(array('GetAvailableDocListAuthResult'=>$_GetAvailableDocListAuthResult));
	}
	/**
	 * Set GetAvailableDocListAuthResult
	 * @param string GetAvailableDocListAuthResult
	 * @return string
	 */
	public function setGetAvailableDocListAuthResult($_GetAvailableDocListAuthResult)
	{
		return ($this->GetAvailableDocListAuthResult = $_GetAvailableDocListAuthResult);
	}
	/**
	 * Get GetAvailableDocListAuthResult
	 * @return string
	 */
	public function getGetAvailableDocListAuthResult()
	{
		return $this->GetAvailableDocListAuthResult;
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