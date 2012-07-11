<?php
/**
 * Class file for XiInterBanksTypeGetBRIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetBRIBORResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetBRIBORResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetBRIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeBRIBORRate
	 */
	public $GetBRIBORResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeBRIBORRate GetBRIBORResult
	 * @return XiInterBanksTypeGetBRIBORResponse
	 */
	public function __construct($_GetBRIBORResult = null)
	{
		parent::__construct(array('GetBRIBORResult'=>$_GetBRIBORResult));
	}
	/**
	 * Set GetBRIBORResult
	 * @param BRIBORRate GetBRIBORResult
	 * @return BRIBORRate
	 */
	public function setGetBRIBORResult($_GetBRIBORResult)
	{
		return ($this->GetBRIBORResult = $_GetBRIBORResult);
	}
	/**
	 * Get GetBRIBORResult
	 * @return XiInterBanksTypeBRIBORRate
	 */
	public function getGetBRIBORResult()
	{
		return $this->GetBRIBORResult;
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