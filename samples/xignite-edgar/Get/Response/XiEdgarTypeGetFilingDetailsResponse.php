<?php
/**
 * Class file for XiEdgarTypeGetFilingDetailsResponse
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeGetFilingDetailsResponse
 * @date 08/07/2012
 */
class XiEdgarTypeGetFilingDetailsResponse extends XiEdgarWsdlClass
{
	/**
	 * The GetFilingDetailsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypeFilingDetails
	 */
	public $GetFilingDetailsResult;
	/**
	 * Constructor
	 * @param XiEdgarTypeFilingDetails GetFilingDetailsResult
	 * @return XiEdgarTypeGetFilingDetailsResponse
	 */
	public function __construct($_GetFilingDetailsResult = null)
	{
		parent::__construct(array('GetFilingDetailsResult'=>$_GetFilingDetailsResult));
	}
	/**
	 * Set GetFilingDetailsResult
	 * @param FilingDetails GetFilingDetailsResult
	 * @return FilingDetails
	 */
	public function setGetFilingDetailsResult($_GetFilingDetailsResult)
	{
		return ($this->GetFilingDetailsResult = $_GetFilingDetailsResult);
	}
	/**
	 * Get GetFilingDetailsResult
	 * @return XiEdgarTypeFilingDetails
	 */
	public function getGetFilingDetailsResult()
	{
		return $this->GetFilingDetailsResult;
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