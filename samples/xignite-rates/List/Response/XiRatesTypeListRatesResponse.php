<?php
/**
 * Class file for XiRatesTypeListRatesResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeListRatesResponse
 * @date 08/07/2012
 */
class XiRatesTypeListRatesResponse extends XiRatesWsdlClass
{
	/**
	 * The ListRatesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeArrayOfRateDescription
	 */
	public $ListRatesResult;
	/**
	 * Constructor
	 * @param XiRatesTypeArrayOfRateDescription ListRatesResult
	 * @return XiRatesTypeListRatesResponse
	 */
	public function __construct($_ListRatesResult = null)
	{
		parent::__construct(array('ListRatesResult'=>new XiRatesTypeArrayOfRateDescription($_ListRatesResult)));
	}
	/**
	 * Set ListRatesResult
	 * @param ArrayOfRateDescription ListRatesResult
	 * @return ArrayOfRateDescription
	 */
	public function setListRatesResult($_ListRatesResult)
	{
		return ($this->ListRatesResult = $_ListRatesResult);
	}
	/**
	 * Get ListRatesResult
	 * @return XiRatesTypeArrayOfRateDescription
	 */
	public function getListRatesResult()
	{
		return $this->ListRatesResult;
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