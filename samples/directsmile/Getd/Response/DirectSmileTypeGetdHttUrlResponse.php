<?php
/**
 * Class file for DirectSmileTypeGetdHttUrlResponse
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeGetdHttUrlResponse
 * @date 02/08/2012
 */
class DirectSmileTypeGetdHttUrlResponse extends DirectSmileWsdlClass
{
	/**
	 * The GetdHttUrlResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $GetdHttUrlResult;
	/**
	 * Constructor
	 * @param string GetdHttUrlResult
	 * @return DirectSmileTypeGetdHttUrlResponse
	 */
	public function __construct($_GetdHttUrlResult = null)
	{
		parent::__construct(array('GetdHttUrlResult'=>$_GetdHttUrlResult));
	}
	/**
	 * Set GetdHttUrlResult
	 * @param string GetdHttUrlResult
	 * @return string
	 */
	public function setGetdHttUrlResult($_GetdHttUrlResult)
	{
		return ($this->GetdHttUrlResult = $_GetdHttUrlResult);
	}
	/**
	 * Get GetdHttUrlResult
	 * @return string
	 */
	public function getGetdHttUrlResult()
	{
		return $this->GetdHttUrlResult;
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