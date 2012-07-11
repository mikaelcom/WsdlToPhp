<?php
/**
 * Class file for XiEdgarTypeGetFilingAsTextResponse
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeGetFilingAsTextResponse
 * @date 08/07/2012
 */
class XiEdgarTypeGetFilingAsTextResponse extends XiEdgarWsdlClass
{
	/**
	 * The GetFilingAsTextResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypeFilingAsText
	 */
	public $GetFilingAsTextResult;
	/**
	 * Constructor
	 * @param XiEdgarTypeFilingAsText GetFilingAsTextResult
	 * @return XiEdgarTypeGetFilingAsTextResponse
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
	 * @return XiEdgarTypeFilingAsText
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