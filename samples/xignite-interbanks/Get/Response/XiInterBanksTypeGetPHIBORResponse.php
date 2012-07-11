<?php
/**
 * Class file for XiInterBanksTypeGetPHIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetPHIBORResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetPHIBORResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetPHIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypePHIBORRate
	 */
	public $GetPHIBORResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypePHIBORRate GetPHIBORResult
	 * @return XiInterBanksTypeGetPHIBORResponse
	 */
	public function __construct($_GetPHIBORResult = null)
	{
		parent::__construct(array('GetPHIBORResult'=>$_GetPHIBORResult));
	}
	/**
	 * Set GetPHIBORResult
	 * @param PHIBORRate GetPHIBORResult
	 * @return PHIBORRate
	 */
	public function setGetPHIBORResult($_GetPHIBORResult)
	{
		return ($this->GetPHIBORResult = $_GetPHIBORResult);
	}
	/**
	 * Get GetPHIBORResult
	 * @return XiInterBanksTypePHIBORRate
	 */
	public function getGetPHIBORResult()
	{
		return $this->GetPHIBORResult;
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