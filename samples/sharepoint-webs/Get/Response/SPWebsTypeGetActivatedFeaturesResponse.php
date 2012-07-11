<?php
/**
 * Class file for SPWebsTypeGetActivatedFeaturesResponse
 * @date 06/07/2012
 */
/**
 * Class SPWebsTypeGetActivatedFeaturesResponse
 * @date 06/07/2012
 */
class SPWebsTypeGetActivatedFeaturesResponse extends SPWebsWsdlClass
{
	/**
	 * The GetActivatedFeaturesResult
	 * @var string
	 */
	public $GetActivatedFeaturesResult;
	/**
	 * Constructor
	 * @param string GetActivatedFeaturesResult
	 * @return SPWebsTypeGetActivatedFeaturesResponse
	 */
	public function __construct($_GetActivatedFeaturesResult = null)
	{
		parent::__construct(array('GetActivatedFeaturesResult'=>$_GetActivatedFeaturesResult));
	}
	/**
	 * Set GetActivatedFeaturesResult
	 * @param string GetActivatedFeaturesResult
	 * @return string
	 */
	public function setGetActivatedFeaturesResult($_GetActivatedFeaturesResult)
	{
		return ($this->GetActivatedFeaturesResult = $_GetActivatedFeaturesResult);
	}
	/**
	 * Get GetActivatedFeaturesResult
	 * @return string
	 */
	public function getGetActivatedFeaturesResult()
	{
		return $this->GetActivatedFeaturesResult;
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