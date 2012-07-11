<?php
/**
 * Class file for XiInterBanksTypeGetBRIBIDResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetBRIBIDResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetBRIBIDResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetBRIBIDResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeBRIBIDRate
	 */
	public $GetBRIBIDResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeBRIBIDRate GetBRIBIDResult
	 * @return XiInterBanksTypeGetBRIBIDResponse
	 */
	public function __construct($_GetBRIBIDResult = null)
	{
		parent::__construct(array('GetBRIBIDResult'=>$_GetBRIBIDResult));
	}
	/**
	 * Set GetBRIBIDResult
	 * @param BRIBIDRate GetBRIBIDResult
	 * @return BRIBIDRate
	 */
	public function setGetBRIBIDResult($_GetBRIBIDResult)
	{
		return ($this->GetBRIBIDResult = $_GetBRIBIDResult);
	}
	/**
	 * Get GetBRIBIDResult
	 * @return XiInterBanksTypeBRIBIDRate
	 */
	public function getGetBRIBIDResult()
	{
		return $this->GetBRIBIDResult;
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