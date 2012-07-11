<?php
/**
 * Class file for XiInterBanksTypeGetHIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetHIBORResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetHIBORResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetHIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeHIBORRate
	 */
	public $GetHIBORResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeHIBORRate GetHIBORResult
	 * @return XiInterBanksTypeGetHIBORResponse
	 */
	public function __construct($_GetHIBORResult = null)
	{
		parent::__construct(array('GetHIBORResult'=>$_GetHIBORResult));
	}
	/**
	 * Set GetHIBORResult
	 * @param HIBORRate GetHIBORResult
	 * @return HIBORRate
	 */
	public function setGetHIBORResult($_GetHIBORResult)
	{
		return ($this->GetHIBORResult = $_GetHIBORResult);
	}
	/**
	 * Get GetHIBORResult
	 * @return XiInterBanksTypeHIBORRate
	 */
	public function getGetHIBORResult()
	{
		return $this->GetHIBORResult;
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