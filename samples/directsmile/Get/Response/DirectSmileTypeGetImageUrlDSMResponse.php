<?php
/**
 * Class file for DirectSmileTypeGetImageUrlDSMResponse
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeGetImageUrlDSMResponse
 * @date 02/08/2012
 */
class DirectSmileTypeGetImageUrlDSMResponse extends DirectSmileWsdlClass
{
	/**
	 * The GetImageUrlDSMResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $GetImageUrlDSMResult;
	/**
	 * Constructor
	 * @param string GetImageUrlDSMResult
	 * @return DirectSmileTypeGetImageUrlDSMResponse
	 */
	public function __construct($_GetImageUrlDSMResult = null)
	{
		parent::__construct(array('GetImageUrlDSMResult'=>$_GetImageUrlDSMResult));
	}
	/**
	 * Set GetImageUrlDSMResult
	 * @param string GetImageUrlDSMResult
	 * @return string
	 */
	public function setGetImageUrlDSMResult($_GetImageUrlDSMResult)
	{
		return ($this->GetImageUrlDSMResult = $_GetImageUrlDSMResult);
	}
	/**
	 * Get GetImageUrlDSMResult
	 * @return string
	 */
	public function getGetImageUrlDSMResult()
	{
		return $this->GetImageUrlDSMResult;
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