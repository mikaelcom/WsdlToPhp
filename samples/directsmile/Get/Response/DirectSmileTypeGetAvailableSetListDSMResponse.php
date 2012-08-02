<?php
/**
 * Class file for DirectSmileTypeGetAvailableSetListDSMResponse
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeGetAvailableSetListDSMResponse
 * @date 02/08/2012
 */
class DirectSmileTypeGetAvailableSetListDSMResponse extends DirectSmileWsdlClass
{
	/**
	 * The GetAvailableSetListDSMResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $GetAvailableSetListDSMResult;
	/**
	 * Constructor
	 * @param string GetAvailableSetListDSMResult
	 * @return DirectSmileTypeGetAvailableSetListDSMResponse
	 */
	public function __construct($_GetAvailableSetListDSMResult = null)
	{
		parent::__construct(array('GetAvailableSetListDSMResult'=>$_GetAvailableSetListDSMResult));
	}
	/**
	 * Set GetAvailableSetListDSMResult
	 * @param string GetAvailableSetListDSMResult
	 * @return string
	 */
	public function setGetAvailableSetListDSMResult($_GetAvailableSetListDSMResult)
	{
		return ($this->GetAvailableSetListDSMResult = $_GetAvailableSetListDSMResult);
	}
	/**
	 * Get GetAvailableSetListDSMResult
	 * @return string
	 */
	public function getGetAvailableSetListDSMResult()
	{
		return $this->GetAvailableSetListDSMResult;
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