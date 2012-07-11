<?php
/**
 * Class file for XiInterBanksTypeGetJIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetJIBORResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetJIBORResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetJIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeJIBORRate
	 */
	public $GetJIBORResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeJIBORRate GetJIBORResult
	 * @return XiInterBanksTypeGetJIBORResponse
	 */
	public function __construct($_GetJIBORResult = null)
	{
		parent::__construct(array('GetJIBORResult'=>$_GetJIBORResult));
	}
	/**
	 * Set GetJIBORResult
	 * @param JIBORRate GetJIBORResult
	 * @return JIBORRate
	 */
	public function setGetJIBORResult($_GetJIBORResult)
	{
		return ($this->GetJIBORResult = $_GetJIBORResult);
	}
	/**
	 * Get GetJIBORResult
	 * @return XiInterBanksTypeJIBORRate
	 */
	public function getGetJIBORResult()
	{
		return $this->GetJIBORResult;
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