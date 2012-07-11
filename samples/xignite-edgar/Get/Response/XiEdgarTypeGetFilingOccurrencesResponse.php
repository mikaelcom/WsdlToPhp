<?php
/**
 * Class file for XiEdgarTypeGetFilingOccurrencesResponse
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeGetFilingOccurrencesResponse
 * @date 08/07/2012
 */
class XiEdgarTypeGetFilingOccurrencesResponse extends XiEdgarWsdlClass
{
	/**
	 * The GetFilingOccurrencesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypeArrayOfFilingOccurrence
	 */
	public $GetFilingOccurrencesResult;
	/**
	 * Constructor
	 * @param XiEdgarTypeArrayOfFilingOccurrence GetFilingOccurrencesResult
	 * @return XiEdgarTypeGetFilingOccurrencesResponse
	 */
	public function __construct($_GetFilingOccurrencesResult = null)
	{
		parent::__construct(array('GetFilingOccurrencesResult'=>new XiEdgarTypeArrayOfFilingOccurrence($_GetFilingOccurrencesResult)));
	}
	/**
	 * Set GetFilingOccurrencesResult
	 * @param ArrayOfFilingOccurrence GetFilingOccurrencesResult
	 * @return ArrayOfFilingOccurrence
	 */
	public function setGetFilingOccurrencesResult($_GetFilingOccurrencesResult)
	{
		return ($this->GetFilingOccurrencesResult = $_GetFilingOccurrencesResult);
	}
	/**
	 * Get GetFilingOccurrencesResult
	 * @return XiEdgarTypeArrayOfFilingOccurrence
	 */
	public function getGetFilingOccurrencesResult()
	{
		return $this->GetFilingOccurrencesResult;
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