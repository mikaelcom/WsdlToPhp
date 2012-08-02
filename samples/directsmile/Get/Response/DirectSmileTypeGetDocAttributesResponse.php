<?php
/**
 * Class file for DirectSmileTypeGetDocAttributesResponse
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeGetDocAttributesResponse
 * @date 02/08/2012
 */
class DirectSmileTypeGetDocAttributesResponse extends DirectSmileWsdlClass
{
	/**
	 * The GetDocAttributesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $GetDocAttributesResult;
	/**
	 * Constructor
	 * @param string GetDocAttributesResult
	 * @return DirectSmileTypeGetDocAttributesResponse
	 */
	public function __construct($_GetDocAttributesResult = null)
	{
		parent::__construct(array('GetDocAttributesResult'=>$_GetDocAttributesResult));
	}
	/**
	 * Set GetDocAttributesResult
	 * @param string GetDocAttributesResult
	 * @return string
	 */
	public function setGetDocAttributesResult($_GetDocAttributesResult)
	{
		return ($this->GetDocAttributesResult = $_GetDocAttributesResult);
	}
	/**
	 * Get GetDocAttributesResult
	 * @return string
	 */
	public function getGetDocAttributesResult()
	{
		return $this->GetDocAttributesResult;
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