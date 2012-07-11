<?php
/**
 * Class file for XiInterBanksTypeGetKAIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetKAIBORResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetKAIBORResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetKAIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeKAIBORRate
	 */
	public $GetKAIBORResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeKAIBORRate GetKAIBORResult
	 * @return XiInterBanksTypeGetKAIBORResponse
	 */
	public function __construct($_GetKAIBORResult = null)
	{
		parent::__construct(array('GetKAIBORResult'=>$_GetKAIBORResult));
	}
	/**
	 * Set GetKAIBORResult
	 * @param KAIBORRate GetKAIBORResult
	 * @return KAIBORRate
	 */
	public function setGetKAIBORResult($_GetKAIBORResult)
	{
		return ($this->GetKAIBORResult = $_GetKAIBORResult);
	}
	/**
	 * Get GetKAIBORResult
	 * @return XiInterBanksTypeKAIBORRate
	 */
	public function getGetKAIBORResult()
	{
		return $this->GetKAIBORResult;
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