<?php
/**
 * Class file for DirectSmileTypeGetAvailableDocListResponse
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeGetAvailableDocListResponse
 * @date 02/08/2012
 */
class DirectSmileTypeGetAvailableDocListResponse extends DirectSmileWsdlClass
{
	/**
	 * The GetAvailableDocListResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $GetAvailableDocListResult;
	/**
	 * Constructor
	 * @param string GetAvailableDocListResult
	 * @return DirectSmileTypeGetAvailableDocListResponse
	 */
	public function __construct($_GetAvailableDocListResult = null)
	{
		parent::__construct(array('GetAvailableDocListResult'=>$_GetAvailableDocListResult));
	}
	/**
	 * Set GetAvailableDocListResult
	 * @param string GetAvailableDocListResult
	 * @return string
	 */
	public function setGetAvailableDocListResult($_GetAvailableDocListResult)
	{
		return ($this->GetAvailableDocListResult = $_GetAvailableDocListResult);
	}
	/**
	 * Get GetAvailableDocListResult
	 * @return string
	 */
	public function getGetAvailableDocListResult()
	{
		return $this->GetAvailableDocListResult;
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