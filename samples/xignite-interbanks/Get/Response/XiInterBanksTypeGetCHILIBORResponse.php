<?php
/**
 * Class file for XiInterBanksTypeGetCHILIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetCHILIBORResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetCHILIBORResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetCHILIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeCHILIBORRate
	 */
	public $GetCHILIBORResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeCHILIBORRate GetCHILIBORResult
	 * @return XiInterBanksTypeGetCHILIBORResponse
	 */
	public function __construct($_GetCHILIBORResult = null)
	{
		parent::__construct(array('GetCHILIBORResult'=>$_GetCHILIBORResult));
	}
	/**
	 * Set GetCHILIBORResult
	 * @param CHILIBORRate GetCHILIBORResult
	 * @return CHILIBORRate
	 */
	public function setGetCHILIBORResult($_GetCHILIBORResult)
	{
		return ($this->GetCHILIBORResult = $_GetCHILIBORResult);
	}
	/**
	 * Get GetCHILIBORResult
	 * @return XiInterBanksTypeCHILIBORRate
	 */
	public function getGetCHILIBORResult()
	{
		return $this->GetCHILIBORResult;
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