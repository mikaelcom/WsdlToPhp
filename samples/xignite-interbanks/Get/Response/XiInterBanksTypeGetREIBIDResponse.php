<?php
/**
 * Class file for XiInterBanksTypeGetREIBIDResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetREIBIDResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetREIBIDResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetREIBIDResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeREIBIDRate
	 */
	public $GetREIBIDResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeREIBIDRate GetREIBIDResult
	 * @return XiInterBanksTypeGetREIBIDResponse
	 */
	public function __construct($_GetREIBIDResult = null)
	{
		parent::__construct(array('GetREIBIDResult'=>$_GetREIBIDResult));
	}
	/**
	 * Set GetREIBIDResult
	 * @param REIBIDRate GetREIBIDResult
	 * @return REIBIDRate
	 */
	public function setGetREIBIDResult($_GetREIBIDResult)
	{
		return ($this->GetREIBIDResult = $_GetREIBIDResult);
	}
	/**
	 * Get GetREIBIDResult
	 * @return XiInterBanksTypeREIBIDRate
	 */
	public function getGetREIBIDResult()
	{
		return $this->GetREIBIDResult;
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