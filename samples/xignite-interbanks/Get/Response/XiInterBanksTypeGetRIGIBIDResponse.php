<?php
/**
 * Class file for XiInterBanksTypeGetRIGIBIDResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetRIGIBIDResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetRIGIBIDResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetRIGIBIDResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeRIGIBIDRate
	 */
	public $GetRIGIBIDResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeRIGIBIDRate GetRIGIBIDResult
	 * @return XiInterBanksTypeGetRIGIBIDResponse
	 */
	public function __construct($_GetRIGIBIDResult = null)
	{
		parent::__construct(array('GetRIGIBIDResult'=>$_GetRIGIBIDResult));
	}
	/**
	 * Set GetRIGIBIDResult
	 * @param RIGIBIDRate GetRIGIBIDResult
	 * @return RIGIBIDRate
	 */
	public function setGetRIGIBIDResult($_GetRIGIBIDResult)
	{
		return ($this->GetRIGIBIDResult = $_GetRIGIBIDResult);
	}
	/**
	 * Get GetRIGIBIDResult
	 * @return XiInterBanksTypeRIGIBIDRate
	 */
	public function getGetRIGIBIDResult()
	{
		return $this->GetRIGIBIDResult;
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