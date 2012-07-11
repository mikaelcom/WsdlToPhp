<?php
/**
 * Class file for SPFormsTypeGetFormCollectionResponse
 * @date 06/07/2012
 */
/**
 * Class SPFormsTypeGetFormCollectionResponse
 * @date 06/07/2012
 */
class SPFormsTypeGetFormCollectionResponse extends SPFormsWsdlClass
{
	/**
	 * The GetFormCollectionResult
	 * @var SPFormsTypeGetFormCollectionResult
	 */
	public $GetFormCollectionResult;
	/**
	 * Constructor
	 * @param SPFormsTypeGetFormCollectionResult GetFormCollectionResult
	 * @return SPFormsTypeGetFormCollectionResponse
	 */
	public function __construct($_GetFormCollectionResult = null)
	{
		parent::__construct(array('GetFormCollectionResult'=>$_GetFormCollectionResult));
	}
	/**
	 * Set GetFormCollectionResult
	 * @param GetFormCollectionResult GetFormCollectionResult
	 * @return GetFormCollectionResult
	 */
	public function setGetFormCollectionResult($_GetFormCollectionResult)
	{
		return ($this->GetFormCollectionResult = $_GetFormCollectionResult);
	}
	/**
	 * Get GetFormCollectionResult
	 * @return SPFormsTypeGetFormCollectionResult
	 */
	public function getGetFormCollectionResult()
	{
		return $this->GetFormCollectionResult;
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