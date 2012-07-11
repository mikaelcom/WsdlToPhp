<?php
/**
 * Class file for XiInterBanksTypeGetCHIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetCHIBORResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetCHIBORResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetCHIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeCHIBORRate
	 */
	public $GetCHIBORResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeCHIBORRate GetCHIBORResult
	 * @return XiInterBanksTypeGetCHIBORResponse
	 */
	public function __construct($_GetCHIBORResult = null)
	{
		parent::__construct(array('GetCHIBORResult'=>$_GetCHIBORResult));
	}
	/**
	 * Set GetCHIBORResult
	 * @param CHIBORRate GetCHIBORResult
	 * @return CHIBORRate
	 */
	public function setGetCHIBORResult($_GetCHIBORResult)
	{
		return ($this->GetCHIBORResult = $_GetCHIBORResult);
	}
	/**
	 * Get GetCHIBORResult
	 * @return XiInterBanksTypeCHIBORRate
	 */
	public function getGetCHIBORResult()
	{
		return $this->GetCHIBORResult;
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