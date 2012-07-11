<?php
/**
 * Class file for XiInterBanksTypeGetTIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetTIBORResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetTIBORResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetTIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeTIBORRate
	 */
	public $GetTIBORResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeTIBORRate GetTIBORResult
	 * @return XiInterBanksTypeGetTIBORResponse
	 */
	public function __construct($_GetTIBORResult = null)
	{
		parent::__construct(array('GetTIBORResult'=>$_GetTIBORResult));
	}
	/**
	 * Set GetTIBORResult
	 * @param TIBORRate GetTIBORResult
	 * @return TIBORRate
	 */
	public function setGetTIBORResult($_GetTIBORResult)
	{
		return ($this->GetTIBORResult = $_GetTIBORResult);
	}
	/**
	 * Get GetTIBORResult
	 * @return XiInterBanksTypeTIBORRate
	 */
	public function getGetTIBORResult()
	{
		return $this->GetTIBORResult;
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