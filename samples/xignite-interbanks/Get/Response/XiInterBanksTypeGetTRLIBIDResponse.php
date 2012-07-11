<?php
/**
 * Class file for XiInterBanksTypeGetTRLIBIDResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetTRLIBIDResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetTRLIBIDResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetTRLIBIDResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeTRLIBIDRate
	 */
	public $GetTRLIBIDResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeTRLIBIDRate GetTRLIBIDResult
	 * @return XiInterBanksTypeGetTRLIBIDResponse
	 */
	public function __construct($_GetTRLIBIDResult = null)
	{
		parent::__construct(array('GetTRLIBIDResult'=>$_GetTRLIBIDResult));
	}
	/**
	 * Set GetTRLIBIDResult
	 * @param TRLIBIDRate GetTRLIBIDResult
	 * @return TRLIBIDRate
	 */
	public function setGetTRLIBIDResult($_GetTRLIBIDResult)
	{
		return ($this->GetTRLIBIDResult = $_GetTRLIBIDResult);
	}
	/**
	 * Get GetTRLIBIDResult
	 * @return XiInterBanksTypeTRLIBIDRate
	 */
	public function getGetTRLIBIDResult()
	{
		return $this->GetTRLIBIDResult;
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