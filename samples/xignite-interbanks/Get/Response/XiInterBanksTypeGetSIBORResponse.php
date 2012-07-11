<?php
/**
 * Class file for XiInterBanksTypeGetSIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetSIBORResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetSIBORResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetSIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeSIBORRate
	 */
	public $GetSIBORResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeSIBORRate GetSIBORResult
	 * @return XiInterBanksTypeGetSIBORResponse
	 */
	public function __construct($_GetSIBORResult = null)
	{
		parent::__construct(array('GetSIBORResult'=>$_GetSIBORResult));
	}
	/**
	 * Set GetSIBORResult
	 * @param SIBORRate GetSIBORResult
	 * @return SIBORRate
	 */
	public function setGetSIBORResult($_GetSIBORResult)
	{
		return ($this->GetSIBORResult = $_GetSIBORResult);
	}
	/**
	 * Get GetSIBORResult
	 * @return XiInterBanksTypeSIBORRate
	 */
	public function getGetSIBORResult()
	{
		return $this->GetSIBORResult;
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