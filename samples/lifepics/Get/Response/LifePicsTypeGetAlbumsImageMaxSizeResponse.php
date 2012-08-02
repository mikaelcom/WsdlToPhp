<?php
/**
 * Class file for LifePicsTypeGetAlbumsImageMaxSizeResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetAlbumsImageMaxSizeResponse
 * @date 02/08/2012
 */
class LifePicsTypeGetAlbumsImageMaxSizeResponse extends LifePicsWsdlClass
{
	/**
	 * The GetAlbumsImageMaxSizeResult
	 * @var LifePicsTypeGetAlbumsImageMaxSizeResult
	 */
	public $GetAlbumsImageMaxSizeResult;
	/**
	 * Constructor
	 * @param LifePicsTypeGetAlbumsImageMaxSizeResult GetAlbumsImageMaxSizeResult
	 * @return LifePicsTypeGetAlbumsImageMaxSizeResponse
	 */
	public function __construct($_GetAlbumsImageMaxSizeResult = null)
	{
		parent::__construct(array('GetAlbumsImageMaxSizeResult'=>$_GetAlbumsImageMaxSizeResult));
	}
	/**
	 * Set GetAlbumsImageMaxSizeResult
	 * @param GetAlbumsImageMaxSizeResult GetAlbumsImageMaxSizeResult
	 * @return GetAlbumsImageMaxSizeResult
	 */
	public function setGetAlbumsImageMaxSizeResult($_GetAlbumsImageMaxSizeResult)
	{
		return ($this->GetAlbumsImageMaxSizeResult = $_GetAlbumsImageMaxSizeResult);
	}
	/**
	 * Get GetAlbumsImageMaxSizeResult
	 * @return LifePicsTypeGetAlbumsImageMaxSizeResult
	 */
	public function getGetAlbumsImageMaxSizeResult()
	{
		return $this->GetAlbumsImageMaxSizeResult;
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