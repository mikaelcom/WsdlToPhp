<?php
/**
 * Class file for DirectSmileTypeStartDocPrioResponse
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeStartDocPrioResponse
 * @date 02/08/2012
 */
class DirectSmileTypeStartDocPrioResponse extends DirectSmileWsdlClass
{
	/**
	 * The StartDocPrioResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StartDocPrioResult;
	/**
	 * Constructor
	 * @param string StartDocPrioResult
	 * @return DirectSmileTypeStartDocPrioResponse
	 */
	public function __construct($_StartDocPrioResult = null)
	{
		parent::__construct(array('StartDocPrioResult'=>$_StartDocPrioResult));
	}
	/**
	 * Set StartDocPrioResult
	 * @param string StartDocPrioResult
	 * @return string
	 */
	public function setStartDocPrioResult($_StartDocPrioResult)
	{
		return ($this->StartDocPrioResult = $_StartDocPrioResult);
	}
	/**
	 * Get StartDocPrioResult
	 * @return string
	 */
	public function getStartDocPrioResult()
	{
		return $this->StartDocPrioResult;
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