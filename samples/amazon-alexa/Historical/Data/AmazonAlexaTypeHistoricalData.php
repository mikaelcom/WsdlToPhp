<?php
/**
 * Class file for AmazonAlexaTypeHistoricalData
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeHistoricalData
 * @date 10/07/2012
 */
class AmazonAlexaTypeHistoricalData extends AmazonAlexaWsdlClass
{
	/**
	 * The Data
	 * @var AmazonAlexaTypeData
	 */
	public $Data;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeData Data
	 * @return AmazonAlexaTypeHistoricalData
	 */
	public function __construct($_Data = null)
	{
		parent::__construct(array('Data'=>$_Data));
	}
	/**
	 * Set Data
	 * @param Data Data
	 * @return Data
	 */
	public function setData($_Data)
	{
		return ($this->Data = $_Data);
	}
	/**
	 * Get Data
	 * @return AmazonAlexaTypeData
	 */
	public function getData()
	{
		return $this->Data;
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