<?php
/**
 * Class file for DirectSmileTypeGetImageUrlResponse
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeGetImageUrlResponse
 * @date 02/08/2012
 */
class DirectSmileTypeGetImageUrlResponse extends DirectSmileWsdlClass
{
	/**
	 * The GetImageUrlResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $GetImageUrlResult;
	/**
	 * Constructor
	 * @param string GetImageUrlResult
	 * @return DirectSmileTypeGetImageUrlResponse
	 */
	public function __construct($_GetImageUrlResult = null)
	{
		parent::__construct(array('GetImageUrlResult'=>$_GetImageUrlResult));
	}
	/**
	 * Set GetImageUrlResult
	 * @param string GetImageUrlResult
	 * @return string
	 */
	public function setGetImageUrlResult($_GetImageUrlResult)
	{
		return ($this->GetImageUrlResult = $_GetImageUrlResult);
	}
	/**
	 * Get GetImageUrlResult
	 * @return string
	 */
	public function getGetImageUrlResult()
	{
		return $this->GetImageUrlResult;
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