<?php
/**
 * Class file for XiInterBanksTypeGetKORIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetKORIBORResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetKORIBORResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetKORIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeKORIBORRate
	 */
	public $GetKORIBORResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeKORIBORRate GetKORIBORResult
	 * @return XiInterBanksTypeGetKORIBORResponse
	 */
	public function __construct($_GetKORIBORResult = null)
	{
		parent::__construct(array('GetKORIBORResult'=>$_GetKORIBORResult));
	}
	/**
	 * Set GetKORIBORResult
	 * @param KORIBORRate GetKORIBORResult
	 * @return KORIBORRate
	 */
	public function setGetKORIBORResult($_GetKORIBORResult)
	{
		return ($this->GetKORIBORResult = $_GetKORIBORResult);
	}
	/**
	 * Get GetKORIBORResult
	 * @return XiInterBanksTypeKORIBORRate
	 */
	public function getGetKORIBORResult()
	{
		return $this->GetKORIBORResult;
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