<?php
/**
 * Class file for XiInterBanksTypeGetKIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetKIBORResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetKIBORResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetKIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeKIBORRate
	 */
	public $GetKIBORResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeKIBORRate GetKIBORResult
	 * @return XiInterBanksTypeGetKIBORResponse
	 */
	public function __construct($_GetKIBORResult = null)
	{
		parent::__construct(array('GetKIBORResult'=>$_GetKIBORResult));
	}
	/**
	 * Set GetKIBORResult
	 * @param KIBORRate GetKIBORResult
	 * @return KIBORRate
	 */
	public function setGetKIBORResult($_GetKIBORResult)
	{
		return ($this->GetKIBORResult = $_GetKIBORResult);
	}
	/**
	 * Get GetKIBORResult
	 * @return XiInterBanksTypeKIBORRate
	 */
	public function getGetKIBORResult()
	{
		return $this->GetKIBORResult;
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