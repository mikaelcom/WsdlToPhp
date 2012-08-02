<?php
/**
 * Class file for DirectSmileTypeGetAvailableDhttListResponse
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeGetAvailableDhttListResponse
 * @date 02/08/2012
 */
class DirectSmileTypeGetAvailableDhttListResponse extends DirectSmileWsdlClass
{
	/**
	 * The GetAvailableDhttListResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $GetAvailableDhttListResult;
	/**
	 * Constructor
	 * @param string GetAvailableDhttListResult
	 * @return DirectSmileTypeGetAvailableDhttListResponse
	 */
	public function __construct($_GetAvailableDhttListResult = null)
	{
		parent::__construct(array('GetAvailableDhttListResult'=>$_GetAvailableDhttListResult));
	}
	/**
	 * Set GetAvailableDhttListResult
	 * @param string GetAvailableDhttListResult
	 * @return string
	 */
	public function setGetAvailableDhttListResult($_GetAvailableDhttListResult)
	{
		return ($this->GetAvailableDhttListResult = $_GetAvailableDhttListResult);
	}
	/**
	 * Get GetAvailableDhttListResult
	 * @return string
	 */
	public function getGetAvailableDhttListResult()
	{
		return $this->GetAvailableDhttListResult;
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