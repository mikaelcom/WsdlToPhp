<?php
/**
 * Class file for XiInterBanksTypeGetKLIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetKLIBORResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetKLIBORResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetKLIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeKLIBORRate
	 */
	public $GetKLIBORResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeKLIBORRate GetKLIBORResult
	 * @return XiInterBanksTypeGetKLIBORResponse
	 */
	public function __construct($_GetKLIBORResult = null)
	{
		parent::__construct(array('GetKLIBORResult'=>$_GetKLIBORResult));
	}
	/**
	 * Set GetKLIBORResult
	 * @param KLIBORRate GetKLIBORResult
	 * @return KLIBORRate
	 */
	public function setGetKLIBORResult($_GetKLIBORResult)
	{
		return ($this->GetKLIBORResult = $_GetKLIBORResult);
	}
	/**
	 * Get GetKLIBORResult
	 * @return XiInterBanksTypeKLIBORRate
	 */
	public function getGetKLIBORResult()
	{
		return $this->GetKLIBORResult;
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