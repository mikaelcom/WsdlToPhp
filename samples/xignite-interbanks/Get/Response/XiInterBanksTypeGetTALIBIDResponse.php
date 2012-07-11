<?php
/**
 * Class file for XiInterBanksTypeGetTALIBIDResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetTALIBIDResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetTALIBIDResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetTALIBIDResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeTALIBIDRate
	 */
	public $GetTALIBIDResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeTALIBIDRate GetTALIBIDResult
	 * @return XiInterBanksTypeGetTALIBIDResponse
	 */
	public function __construct($_GetTALIBIDResult = null)
	{
		parent::__construct(array('GetTALIBIDResult'=>$_GetTALIBIDResult));
	}
	/**
	 * Set GetTALIBIDResult
	 * @param TALIBIDRate GetTALIBIDResult
	 * @return TALIBIDRate
	 */
	public function setGetTALIBIDResult($_GetTALIBIDResult)
	{
		return ($this->GetTALIBIDResult = $_GetTALIBIDResult);
	}
	/**
	 * Get GetTALIBIDResult
	 * @return XiInterBanksTypeTALIBIDRate
	 */
	public function getGetTALIBIDResult()
	{
		return $this->GetTALIBIDResult;
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