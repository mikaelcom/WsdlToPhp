<?php
/**
 * Class file for DirectSmileTypeGetAvailableSetListResponse
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeGetAvailableSetListResponse
 * @date 02/08/2012
 */
class DirectSmileTypeGetAvailableSetListResponse extends DirectSmileWsdlClass
{
	/**
	 * The GetAvailableSetListResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $GetAvailableSetListResult;
	/**
	 * Constructor
	 * @param string GetAvailableSetListResult
	 * @return DirectSmileTypeGetAvailableSetListResponse
	 */
	public function __construct($_GetAvailableSetListResult = null)
	{
		parent::__construct(array('GetAvailableSetListResult'=>$_GetAvailableSetListResult));
	}
	/**
	 * Set GetAvailableSetListResult
	 * @param string GetAvailableSetListResult
	 * @return string
	 */
	public function setGetAvailableSetListResult($_GetAvailableSetListResult)
	{
		return ($this->GetAvailableSetListResult = $_GetAvailableSetListResult);
	}
	/**
	 * Get GetAvailableSetListResult
	 * @return string
	 */
	public function getGetAvailableSetListResult()
	{
		return $this->GetAvailableSetListResult;
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