<?php
/**
 * Class file for DirectSmileTypeStartDocDSMResponse
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeStartDocDSMResponse
 * @date 02/08/2012
 */
class DirectSmileTypeStartDocDSMResponse extends DirectSmileWsdlClass
{
	/**
	 * The StartDocDSMResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StartDocDSMResult;
	/**
	 * Constructor
	 * @param string StartDocDSMResult
	 * @return DirectSmileTypeStartDocDSMResponse
	 */
	public function __construct($_StartDocDSMResult = null)
	{
		parent::__construct(array('StartDocDSMResult'=>$_StartDocDSMResult));
	}
	/**
	 * Set StartDocDSMResult
	 * @param string StartDocDSMResult
	 * @return string
	 */
	public function setStartDocDSMResult($_StartDocDSMResult)
	{
		return ($this->StartDocDSMResult = $_StartDocDSMResult);
	}
	/**
	 * Get StartDocDSMResult
	 * @return string
	 */
	public function getStartDocDSMResult()
	{
		return $this->StartDocDSMResult;
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