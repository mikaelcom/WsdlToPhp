<?php
/**
 * Class file for XiInterBanksTypeGetMIBIDResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetMIBIDResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetMIBIDResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetMIBIDResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeMIBIDRate
	 */
	public $GetMIBIDResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeMIBIDRate GetMIBIDResult
	 * @return XiInterBanksTypeGetMIBIDResponse
	 */
	public function __construct($_GetMIBIDResult = null)
	{
		parent::__construct(array('GetMIBIDResult'=>$_GetMIBIDResult));
	}
	/**
	 * Set GetMIBIDResult
	 * @param MIBIDRate GetMIBIDResult
	 * @return MIBIDRate
	 */
	public function setGetMIBIDResult($_GetMIBIDResult)
	{
		return ($this->GetMIBIDResult = $_GetMIBIDResult);
	}
	/**
	 * Get GetMIBIDResult
	 * @return XiInterBanksTypeMIBIDRate
	 */
	public function getGetMIBIDResult()
	{
		return $this->GetMIBIDResult;
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