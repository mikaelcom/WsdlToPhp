<?php
/**
 * Class file for DirectSmileTypeGetDocStatusDSMResponse
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeGetDocStatusDSMResponse
 * @date 02/08/2012
 */
class DirectSmileTypeGetDocStatusDSMResponse extends DirectSmileWsdlClass
{
	/**
	 * The GetDocStatusDSMResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $GetDocStatusDSMResult;
	/**
	 * Constructor
	 * @param string GetDocStatusDSMResult
	 * @return DirectSmileTypeGetDocStatusDSMResponse
	 */
	public function __construct($_GetDocStatusDSMResult = null)
	{
		parent::__construct(array('GetDocStatusDSMResult'=>$_GetDocStatusDSMResult));
	}
	/**
	 * Set GetDocStatusDSMResult
	 * @param string GetDocStatusDSMResult
	 * @return string
	 */
	public function setGetDocStatusDSMResult($_GetDocStatusDSMResult)
	{
		return ($this->GetDocStatusDSMResult = $_GetDocStatusDSMResult);
	}
	/**
	 * Get GetDocStatusDSMResult
	 * @return string
	 */
	public function getGetDocStatusDSMResult()
	{
		return $this->GetDocStatusDSMResult;
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