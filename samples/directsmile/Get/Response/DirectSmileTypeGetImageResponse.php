<?php
/**
 * Class file for DirectSmileTypeGetImageResponse
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeGetImageResponse
 * @date 02/08/2012
 */
class DirectSmileTypeGetImageResponse extends DirectSmileWsdlClass
{
	/**
	 * The GetImageResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var base64Binary
	 */
	public $GetImageResult;
	/**
	 * Constructor
	 * @param base64Binary GetImageResult
	 * @return DirectSmileTypeGetImageResponse
	 */
	public function __construct($_GetImageResult = null)
	{
		parent::__construct(array('GetImageResult'=>$_GetImageResult));
	}
	/**
	 * Set GetImageResult
	 * @param base64Binary GetImageResult
	 * @return base64Binary
	 */
	public function setGetImageResult($_GetImageResult)
	{
		return ($this->GetImageResult = $_GetImageResult);
	}
	/**
	 * Get GetImageResult
	 * @return base64Binary
	 */
	public function getGetImageResult()
	{
		return $this->GetImageResult;
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