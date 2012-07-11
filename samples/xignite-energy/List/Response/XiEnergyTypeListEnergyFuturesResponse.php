<?php
/**
 * Class file for XiEnergyTypeListEnergyFuturesResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeListEnergyFuturesResponse
 * @date 08/07/2012
 */
class XiEnergyTypeListEnergyFuturesResponse extends XiEnergyWsdlClass
{
	/**
	 * The ListEnergyFuturesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeArrayOfFuture
	 */
	public $ListEnergyFuturesResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeArrayOfFuture ListEnergyFuturesResult
	 * @return XiEnergyTypeListEnergyFuturesResponse
	 */
	public function __construct($_ListEnergyFuturesResult = null)
	{
		parent::__construct(array('ListEnergyFuturesResult'=>new XiEnergyTypeArrayOfFuture($_ListEnergyFuturesResult)));
	}
	/**
	 * Set ListEnergyFuturesResult
	 * @param ArrayOfFuture ListEnergyFuturesResult
	 * @return ArrayOfFuture
	 */
	public function setListEnergyFuturesResult($_ListEnergyFuturesResult)
	{
		return ($this->ListEnergyFuturesResult = $_ListEnergyFuturesResult);
	}
	/**
	 * Get ListEnergyFuturesResult
	 * @return XiEnergyTypeArrayOfFuture
	 */
	public function getListEnergyFuturesResult()
	{
		return $this->ListEnergyFuturesResult;
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