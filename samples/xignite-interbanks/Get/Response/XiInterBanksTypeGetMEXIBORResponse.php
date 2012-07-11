<?php
/**
 * Class file for XiInterBanksTypeGetMEXIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetMEXIBORResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetMEXIBORResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetMEXIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeMEXIBORRate
	 */
	public $GetMEXIBORResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeMEXIBORRate GetMEXIBORResult
	 * @return XiInterBanksTypeGetMEXIBORResponse
	 */
	public function __construct($_GetMEXIBORResult = null)
	{
		parent::__construct(array('GetMEXIBORResult'=>$_GetMEXIBORResult));
	}
	/**
	 * Set GetMEXIBORResult
	 * @param MEXIBORRate GetMEXIBORResult
	 * @return MEXIBORRate
	 */
	public function setGetMEXIBORResult($_GetMEXIBORResult)
	{
		return ($this->GetMEXIBORResult = $_GetMEXIBORResult);
	}
	/**
	 * Get GetMEXIBORResult
	 * @return XiInterBanksTypeMEXIBORRate
	 */
	public function getGetMEXIBORResult()
	{
		return $this->GetMEXIBORResult;
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