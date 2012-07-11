<?php
/**
 * Class file for XiInterBanksTypeGetJIBARResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetJIBARResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetJIBARResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetJIBARResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeJIBARRate
	 */
	public $GetJIBARResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeJIBARRate GetJIBARResult
	 * @return XiInterBanksTypeGetJIBARResponse
	 */
	public function __construct($_GetJIBARResult = null)
	{
		parent::__construct(array('GetJIBARResult'=>$_GetJIBARResult));
	}
	/**
	 * Set GetJIBARResult
	 * @param JIBARRate GetJIBARResult
	 * @return JIBARRate
	 */
	public function setGetJIBARResult($_GetJIBARResult)
	{
		return ($this->GetJIBARResult = $_GetJIBARResult);
	}
	/**
	 * Get GetJIBARResult
	 * @return XiInterBanksTypeJIBARRate
	 */
	public function getGetJIBARResult()
	{
		return $this->GetJIBARResult;
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