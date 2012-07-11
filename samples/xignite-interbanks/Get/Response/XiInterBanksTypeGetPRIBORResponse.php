<?php
/**
 * Class file for XiInterBanksTypeGetPRIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetPRIBORResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetPRIBORResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetPRIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypePRIBORRate
	 */
	public $GetPRIBORResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypePRIBORRate GetPRIBORResult
	 * @return XiInterBanksTypeGetPRIBORResponse
	 */
	public function __construct($_GetPRIBORResult = null)
	{
		parent::__construct(array('GetPRIBORResult'=>$_GetPRIBORResult));
	}
	/**
	 * Set GetPRIBORResult
	 * @param PRIBORRate GetPRIBORResult
	 * @return PRIBORRate
	 */
	public function setGetPRIBORResult($_GetPRIBORResult)
	{
		return ($this->GetPRIBORResult = $_GetPRIBORResult);
	}
	/**
	 * Get GetPRIBORResult
	 * @return XiInterBanksTypePRIBORRate
	 */
	public function getGetPRIBORResult()
	{
		return $this->GetPRIBORResult;
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