<?php
/**
 * Class file for SPViewsTypeGetViewCollectionResponse
 * @date 06/07/2012
 */
/**
 * Class SPViewsTypeGetViewCollectionResponse
 * @date 06/07/2012
 */
class SPViewsTypeGetViewCollectionResponse extends SPViewsWsdlClass
{
	/**
	 * The GetViewCollectionResult
	 * @var SPViewsTypeGetViewCollectionResult
	 */
	public $GetViewCollectionResult;
	/**
	 * Constructor
	 * @param SPViewsTypeGetViewCollectionResult GetViewCollectionResult
	 * @return SPViewsTypeGetViewCollectionResponse
	 */
	public function __construct($_GetViewCollectionResult = null)
	{
		parent::__construct(array('GetViewCollectionResult'=>$_GetViewCollectionResult));
	}
	/**
	 * Set GetViewCollectionResult
	 * @param GetViewCollectionResult GetViewCollectionResult
	 * @return GetViewCollectionResult
	 */
	public function setGetViewCollectionResult($_GetViewCollectionResult)
	{
		return ($this->GetViewCollectionResult = $_GetViewCollectionResult);
	}
	/**
	 * Get GetViewCollectionResult
	 * @return SPViewsTypeGetViewCollectionResult
	 */
	public function getGetViewCollectionResult()
	{
		return $this->GetViewCollectionResult;
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