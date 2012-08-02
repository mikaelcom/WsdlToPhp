<?php
/**
 * Class file for LifePicsTypeGetImagesResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetImagesResponse
 * @date 02/08/2012
 */
class LifePicsTypeGetImagesResponse extends LifePicsWsdlClass
{
	/**
	 * The GetImagesResult
	 * @var LifePicsTypeGetImagesResult
	 */
	public $GetImagesResult;
	/**
	 * Constructor
	 * @param LifePicsTypeGetImagesResult GetImagesResult
	 * @return LifePicsTypeGetImagesResponse
	 */
	public function __construct($_GetImagesResult = null)
	{
		parent::__construct(array('GetImagesResult'=>$_GetImagesResult));
	}
	/**
	 * Set GetImagesResult
	 * @param GetImagesResult GetImagesResult
	 * @return GetImagesResult
	 */
	public function setGetImagesResult($_GetImagesResult)
	{
		return ($this->GetImagesResult = $_GetImagesResult);
	}
	/**
	 * Get GetImagesResult
	 * @return LifePicsTypeGetImagesResult
	 */
	public function getGetImagesResult()
	{
		return $this->GetImagesResult;
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