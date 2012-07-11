<?php
/**
 * Class file for SPWebsTypeGetWebCollectionResponse
 * @date 06/07/2012
 */
/**
 * Class SPWebsTypeGetWebCollectionResponse
 * @date 06/07/2012
 */
class SPWebsTypeGetWebCollectionResponse extends SPWebsWsdlClass
{
	/**
	 * The GetWebCollectionResult
	 * @var SPWebsTypeGetWebCollectionResult
	 */
	public $GetWebCollectionResult;
	/**
	 * Constructor
	 * @param SPWebsTypeGetWebCollectionResult GetWebCollectionResult
	 * @return SPWebsTypeGetWebCollectionResponse
	 */
	public function __construct($_GetWebCollectionResult = null)
	{
		parent::__construct(array('GetWebCollectionResult'=>$_GetWebCollectionResult));
	}
	/**
	 * Set GetWebCollectionResult
	 * @param GetWebCollectionResult GetWebCollectionResult
	 * @return GetWebCollectionResult
	 */
	public function setGetWebCollectionResult($_GetWebCollectionResult)
	{
		return ($this->GetWebCollectionResult = $_GetWebCollectionResult);
	}
	/**
	 * Get GetWebCollectionResult
	 * @return SPWebsTypeGetWebCollectionResult
	 */
	public function getGetWebCollectionResult()
	{
		return $this->GetWebCollectionResult;
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