<?php
/**
 * Class file for XiEdgarTypeGetSharesOutstandingResponse
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeGetSharesOutstandingResponse
 * @date 08/07/2012
 */
class XiEdgarTypeGetSharesOutstandingResponse extends XiEdgarWsdlClass
{
	/**
	 * The GetSharesOutstandingResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypeSharesOutstanding
	 */
	public $GetSharesOutstandingResult;
	/**
	 * Constructor
	 * @param XiEdgarTypeSharesOutstanding GetSharesOutstandingResult
	 * @return XiEdgarTypeGetSharesOutstandingResponse
	 */
	public function __construct($_GetSharesOutstandingResult = null)
	{
		parent::__construct(array('GetSharesOutstandingResult'=>$_GetSharesOutstandingResult));
	}
	/**
	 * Set GetSharesOutstandingResult
	 * @param SharesOutstanding GetSharesOutstandingResult
	 * @return SharesOutstanding
	 */
	public function setGetSharesOutstandingResult($_GetSharesOutstandingResult)
	{
		return ($this->GetSharesOutstandingResult = $_GetSharesOutstandingResult);
	}
	/**
	 * Get GetSharesOutstandingResult
	 * @return XiEdgarTypeSharesOutstanding
	 */
	public function getGetSharesOutstandingResult()
	{
		return $this->GetSharesOutstandingResult;
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