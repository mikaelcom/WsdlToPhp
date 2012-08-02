<?php
/**
 * Class file for LifePicsTypeGetImagesImageMaxSizeResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetImagesImageMaxSizeResponse
 * @date 02/08/2012
 */
class LifePicsTypeGetImagesImageMaxSizeResponse extends LifePicsWsdlClass
{
	/**
	 * The GetImagesImageMaxSizeResult
	 * @var LifePicsTypeGetImagesImageMaxSizeResult
	 */
	public $GetImagesImageMaxSizeResult;
	/**
	 * Constructor
	 * @param LifePicsTypeGetImagesImageMaxSizeResult GetImagesImageMaxSizeResult
	 * @return LifePicsTypeGetImagesImageMaxSizeResponse
	 */
	public function __construct($_GetImagesImageMaxSizeResult = null)
	{
		parent::__construct(array('GetImagesImageMaxSizeResult'=>$_GetImagesImageMaxSizeResult));
	}
	/**
	 * Set GetImagesImageMaxSizeResult
	 * @param GetImagesImageMaxSizeResult GetImagesImageMaxSizeResult
	 * @return GetImagesImageMaxSizeResult
	 */
	public function setGetImagesImageMaxSizeResult($_GetImagesImageMaxSizeResult)
	{
		return ($this->GetImagesImageMaxSizeResult = $_GetImagesImageMaxSizeResult);
	}
	/**
	 * Get GetImagesImageMaxSizeResult
	 * @return LifePicsTypeGetImagesImageMaxSizeResult
	 */
	public function getGetImagesImageMaxSizeResult()
	{
		return $this->GetImagesImageMaxSizeResult;
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