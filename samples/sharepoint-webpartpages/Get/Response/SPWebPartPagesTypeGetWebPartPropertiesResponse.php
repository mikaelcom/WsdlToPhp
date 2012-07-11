<?php
/**
 * Class file for SPWebPartPagesTypeGetWebPartPropertiesResponse
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeGetWebPartPropertiesResponse
 * @date 06/07/2012
 */
class SPWebPartPagesTypeGetWebPartPropertiesResponse extends SPWebPartPagesWsdlClass
{
	/**
	 * The GetWebPartPropertiesResult
	 * @var SPWebPartPagesTypeGetWebPartPropertiesResult
	 */
	public $GetWebPartPropertiesResult;
	/**
	 * Constructor
	 * @param SPWebPartPagesTypeGetWebPartPropertiesResult GetWebPartPropertiesResult
	 * @return SPWebPartPagesTypeGetWebPartPropertiesResponse
	 */
	public function __construct($_GetWebPartPropertiesResult = null)
	{
		parent::__construct(array('GetWebPartPropertiesResult'=>$_GetWebPartPropertiesResult));
	}
	/**
	 * Set GetWebPartPropertiesResult
	 * @param GetWebPartPropertiesResult GetWebPartPropertiesResult
	 * @return GetWebPartPropertiesResult
	 */
	public function setGetWebPartPropertiesResult($_GetWebPartPropertiesResult)
	{
		return ($this->GetWebPartPropertiesResult = $_GetWebPartPropertiesResult);
	}
	/**
	 * Get GetWebPartPropertiesResult
	 * @return SPWebPartPagesTypeGetWebPartPropertiesResult
	 */
	public function getGetWebPartPropertiesResult()
	{
		return $this->GetWebPartPropertiesResult;
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