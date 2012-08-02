<?php
/**
 * Class file for DirectSmileTypeGetAvailableDocListDSMResponse
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeGetAvailableDocListDSMResponse
 * @date 02/08/2012
 */
class DirectSmileTypeGetAvailableDocListDSMResponse extends DirectSmileWsdlClass
{
	/**
	 * The GetAvailableDocListDSMResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $GetAvailableDocListDSMResult;
	/**
	 * Constructor
	 * @param string GetAvailableDocListDSMResult
	 * @return DirectSmileTypeGetAvailableDocListDSMResponse
	 */
	public function __construct($_GetAvailableDocListDSMResult = null)
	{
		parent::__construct(array('GetAvailableDocListDSMResult'=>$_GetAvailableDocListDSMResult));
	}
	/**
	 * Set GetAvailableDocListDSMResult
	 * @param string GetAvailableDocListDSMResult
	 * @return string
	 */
	public function setGetAvailableDocListDSMResult($_GetAvailableDocListDSMResult)
	{
		return ($this->GetAvailableDocListDSMResult = $_GetAvailableDocListDSMResult);
	}
	/**
	 * Get GetAvailableDocListDSMResult
	 * @return string
	 */
	public function getGetAvailableDocListDSMResult()
	{
		return $this->GetAvailableDocListDSMResult;
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