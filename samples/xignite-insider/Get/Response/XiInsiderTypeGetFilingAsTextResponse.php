<?php
/**
 * Class file for XiInsiderTypeGetFilingAsTextResponse
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeGetFilingAsTextResponse
 * @date 08/07/2012
 */
class XiInsiderTypeGetFilingAsTextResponse extends XiInsiderWsdlClass
{
	/**
	 * The GetFilingAsTextResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeFilingAsText
	 */
	public $GetFilingAsTextResult;
	/**
	 * Constructor
	 * @param XiInsiderTypeFilingAsText GetFilingAsTextResult
	 * @return XiInsiderTypeGetFilingAsTextResponse
	 */
	public function __construct($_GetFilingAsTextResult = null)
	{
		parent::__construct(array('GetFilingAsTextResult'=>$_GetFilingAsTextResult));
	}
	/**
	 * Set GetFilingAsTextResult
	 * @param FilingAsText GetFilingAsTextResult
	 * @return FilingAsText
	 */
	public function setGetFilingAsTextResult($_GetFilingAsTextResult)
	{
		return ($this->GetFilingAsTextResult = $_GetFilingAsTextResult);
	}
	/**
	 * Get GetFilingAsTextResult
	 * @return XiInsiderTypeFilingAsText
	 */
	public function getGetFilingAsTextResult()
	{
		return $this->GetFilingAsTextResult;
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