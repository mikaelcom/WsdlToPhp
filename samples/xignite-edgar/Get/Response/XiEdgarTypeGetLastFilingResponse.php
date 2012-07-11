<?php
/**
 * Class file for XiEdgarTypeGetLastFilingResponse
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeGetLastFilingResponse
 * @date 08/07/2012
 */
class XiEdgarTypeGetLastFilingResponse extends XiEdgarWsdlClass
{
	/**
	 * The GetLastFilingResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypeFiling
	 */
	public $GetLastFilingResult;
	/**
	 * Constructor
	 * @param XiEdgarTypeFiling GetLastFilingResult
	 * @return XiEdgarTypeGetLastFilingResponse
	 */
	public function __construct($_GetLastFilingResult = null)
	{
		parent::__construct(array('GetLastFilingResult'=>$_GetLastFilingResult));
	}
	/**
	 * Set GetLastFilingResult
	 * @param Filing GetLastFilingResult
	 * @return Filing
	 */
	public function setGetLastFilingResult($_GetLastFilingResult)
	{
		return ($this->GetLastFilingResult = $_GetLastFilingResult);
	}
	/**
	 * Get GetLastFilingResult
	 * @return XiEdgarTypeFiling
	 */
	public function getGetLastFilingResult()
	{
		return $this->GetLastFilingResult;
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