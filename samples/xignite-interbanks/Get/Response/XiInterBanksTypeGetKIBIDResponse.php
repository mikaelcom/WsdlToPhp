<?php
/**
 * Class file for XiInterBanksTypeGetKIBIDResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetKIBIDResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetKIBIDResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetKIBIDResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeKIBIDRate
	 */
	public $GetKIBIDResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeKIBIDRate GetKIBIDResult
	 * @return XiInterBanksTypeGetKIBIDResponse
	 */
	public function __construct($_GetKIBIDResult = null)
	{
		parent::__construct(array('GetKIBIDResult'=>$_GetKIBIDResult));
	}
	/**
	 * Set GetKIBIDResult
	 * @param KIBIDRate GetKIBIDResult
	 * @return KIBIDRate
	 */
	public function setGetKIBIDResult($_GetKIBIDResult)
	{
		return ($this->GetKIBIDResult = $_GetKIBIDResult);
	}
	/**
	 * Get GetKIBIDResult
	 * @return XiInterBanksTypeKIBIDRate
	 */
	public function getGetKIBIDResult()
	{
		return $this->GetKIBIDResult;
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