<?php
/**
 * Class file for DirectSmileTypeGetInterfaceVersionResponse
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeGetInterfaceVersionResponse
 * @date 02/08/2012
 */
class DirectSmileTypeGetInterfaceVersionResponse extends DirectSmileWsdlClass
{
	/**
	 * The GetInterfaceVersionResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $GetInterfaceVersionResult;
	/**
	 * Constructor
	 * @param string GetInterfaceVersionResult
	 * @return DirectSmileTypeGetInterfaceVersionResponse
	 */
	public function __construct($_GetInterfaceVersionResult = null)
	{
		parent::__construct(array('GetInterfaceVersionResult'=>$_GetInterfaceVersionResult));
	}
	/**
	 * Set GetInterfaceVersionResult
	 * @param string GetInterfaceVersionResult
	 * @return string
	 */
	public function setGetInterfaceVersionResult($_GetInterfaceVersionResult)
	{
		return ($this->GetInterfaceVersionResult = $_GetInterfaceVersionResult);
	}
	/**
	 * Get GetInterfaceVersionResult
	 * @return string
	 */
	public function getGetInterfaceVersionResult()
	{
		return $this->GetInterfaceVersionResult;
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