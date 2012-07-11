<?php
/**
 * Class file for XiInterBanksTypeGetMOSIBIDResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetMOSIBIDResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetMOSIBIDResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetMOSIBIDResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeMOSIBIDRate
	 */
	public $GetMOSIBIDResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeMOSIBIDRate GetMOSIBIDResult
	 * @return XiInterBanksTypeGetMOSIBIDResponse
	 */
	public function __construct($_GetMOSIBIDResult = null)
	{
		parent::__construct(array('GetMOSIBIDResult'=>$_GetMOSIBIDResult));
	}
	/**
	 * Set GetMOSIBIDResult
	 * @param MOSIBIDRate GetMOSIBIDResult
	 * @return MOSIBIDRate
	 */
	public function setGetMOSIBIDResult($_GetMOSIBIDResult)
	{
		return ($this->GetMOSIBIDResult = $_GetMOSIBIDResult);
	}
	/**
	 * Get GetMOSIBIDResult
	 * @return XiInterBanksTypeMOSIBIDRate
	 */
	public function getGetMOSIBIDResult()
	{
		return $this->GetMOSIBIDResult;
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