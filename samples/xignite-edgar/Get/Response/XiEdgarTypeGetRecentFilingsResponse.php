<?php
/**
 * Class file for XiEdgarTypeGetRecentFilingsResponse
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeGetRecentFilingsResponse
 * @date 08/07/2012
 */
class XiEdgarTypeGetRecentFilingsResponse extends XiEdgarWsdlClass
{
	/**
	 * The GetRecentFilingsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypeArrayOfFiling
	 */
	public $GetRecentFilingsResult;
	/**
	 * Constructor
	 * @param XiEdgarTypeArrayOfFiling GetRecentFilingsResult
	 * @return XiEdgarTypeGetRecentFilingsResponse
	 */
	public function __construct($_GetRecentFilingsResult = null)
	{
		parent::__construct(array('GetRecentFilingsResult'=>new XiEdgarTypeArrayOfFiling($_GetRecentFilingsResult)));
	}
	/**
	 * Set GetRecentFilingsResult
	 * @param ArrayOfFiling GetRecentFilingsResult
	 * @return ArrayOfFiling
	 */
	public function setGetRecentFilingsResult($_GetRecentFilingsResult)
	{
		return ($this->GetRecentFilingsResult = $_GetRecentFilingsResult);
	}
	/**
	 * Get GetRecentFilingsResult
	 * @return XiEdgarTypeArrayOfFiling
	 */
	public function getGetRecentFilingsResult()
	{
		return $this->GetRecentFilingsResult;
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