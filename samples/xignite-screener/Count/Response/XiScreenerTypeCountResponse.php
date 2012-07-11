<?php
/**
 * Class file for XiScreenerTypeCountResponse
 * @date 08/07/2012
 */
/**
 * Class XiScreenerTypeCountResponse
 * @date 08/07/2012
 */
class XiScreenerTypeCountResponse extends XiScreenerWsdlClass
{
	/**
	 * The CountResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiScreenerTypeCountResults
	 */
	public $CountResult;
	/**
	 * Constructor
	 * @param XiScreenerTypeCountResults CountResult
	 * @return XiScreenerTypeCountResponse
	 */
	public function __construct($_CountResult = null)
	{
		parent::__construct(array('CountResult'=>$_CountResult));
	}
	/**
	 * Set CountResult
	 * @param CountResults CountResult
	 * @return CountResults
	 */
	public function setCountResult($_CountResult)
	{
		return ($this->CountResult = $_CountResult);
	}
	/**
	 * Get CountResult
	 * @return XiScreenerTypeCountResults
	 */
	public function getCountResult()
	{
		return $this->CountResult;
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