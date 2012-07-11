<?php
/**
 * Class file for XiInterBanksTypeGetTAIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetTAIBORResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetTAIBORResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetTAIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeTAIBORRate
	 */
	public $GetTAIBORResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeTAIBORRate GetTAIBORResult
	 * @return XiInterBanksTypeGetTAIBORResponse
	 */
	public function __construct($_GetTAIBORResult = null)
	{
		parent::__construct(array('GetTAIBORResult'=>$_GetTAIBORResult));
	}
	/**
	 * Set GetTAIBORResult
	 * @param TAIBORRate GetTAIBORResult
	 * @return TAIBORRate
	 */
	public function setGetTAIBORResult($_GetTAIBORResult)
	{
		return ($this->GetTAIBORResult = $_GetTAIBORResult);
	}
	/**
	 * Get GetTAIBORResult
	 * @return XiInterBanksTypeTAIBORRate
	 */
	public function getGetTAIBORResult()
	{
		return $this->GetTAIBORResult;
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