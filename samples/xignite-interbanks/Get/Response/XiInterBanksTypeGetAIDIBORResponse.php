<?php
/**
 * Class file for XiInterBanksTypeGetAIDIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetAIDIBORResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetAIDIBORResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetAIDIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeAIDIBORRate
	 */
	public $GetAIDIBORResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeAIDIBORRate GetAIDIBORResult
	 * @return XiInterBanksTypeGetAIDIBORResponse
	 */
	public function __construct($_GetAIDIBORResult = null)
	{
		parent::__construct(array('GetAIDIBORResult'=>$_GetAIDIBORResult));
	}
	/**
	 * Set GetAIDIBORResult
	 * @param AIDIBORRate GetAIDIBORResult
	 * @return AIDIBORRate
	 */
	public function setGetAIDIBORResult($_GetAIDIBORResult)
	{
		return ($this->GetAIDIBORResult = $_GetAIDIBORResult);
	}
	/**
	 * Get GetAIDIBORResult
	 * @return XiInterBanksTypeAIDIBORRate
	 */
	public function getGetAIDIBORResult()
	{
		return $this->GetAIDIBORResult;
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