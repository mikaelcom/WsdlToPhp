<?php
/**
 * Class file for XiInterBanksTypeGetBAIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetBAIBORResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetBAIBORResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetBAIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeBAIBORRate
	 */
	public $GetBAIBORResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeBAIBORRate GetBAIBORResult
	 * @return XiInterBanksTypeGetBAIBORResponse
	 */
	public function __construct($_GetBAIBORResult = null)
	{
		parent::__construct(array('GetBAIBORResult'=>$_GetBAIBORResult));
	}
	/**
	 * Set GetBAIBORResult
	 * @param BAIBORRate GetBAIBORResult
	 * @return BAIBORRate
	 */
	public function setGetBAIBORResult($_GetBAIBORResult)
	{
		return ($this->GetBAIBORResult = $_GetBAIBORResult);
	}
	/**
	 * Get GetBAIBORResult
	 * @return XiInterBanksTypeBAIBORRate
	 */
	public function getGetBAIBORResult()
	{
		return $this->GetBAIBORResult;
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