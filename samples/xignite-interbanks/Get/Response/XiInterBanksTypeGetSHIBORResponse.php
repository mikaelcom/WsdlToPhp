<?php
/**
 * Class file for XiInterBanksTypeGetSHIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetSHIBORResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetSHIBORResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetSHIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeSHIBORRate
	 */
	public $GetSHIBORResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeSHIBORRate GetSHIBORResult
	 * @return XiInterBanksTypeGetSHIBORResponse
	 */
	public function __construct($_GetSHIBORResult = null)
	{
		parent::__construct(array('GetSHIBORResult'=>$_GetSHIBORResult));
	}
	/**
	 * Set GetSHIBORResult
	 * @param SHIBORRate GetSHIBORResult
	 * @return SHIBORRate
	 */
	public function setGetSHIBORResult($_GetSHIBORResult)
	{
		return ($this->GetSHIBORResult = $_GetSHIBORResult);
	}
	/**
	 * Get GetSHIBORResult
	 * @return XiInterBanksTypeSHIBORRate
	 */
	public function getGetSHIBORResult()
	{
		return $this->GetSHIBORResult;
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