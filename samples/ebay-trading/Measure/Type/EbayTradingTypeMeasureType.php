<?php
/**
 * Class file for EbayTradingTypeMeasureType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMeasureType
 * Documentation : The system of measurement (e.g., English).
 * @date 04/07/2012
 */
class EbayTradingTypeMeasureType extends EbayTradingWsdlClass
{
	/**
	 * The _
	 * @var decimal
	 */
	public $_;
	/**
	 * The unit
	 * Meta informations :
	 * 	- use : optional
	 * @var token
	 */
	public $unit;
	/**
	 * The measurementSystem
	 * Meta informations :
	 * 	- use : optional
	 * @var EbayTradingTypeMeasurementSystemCodeType
	 */
	public $measurementSystem;
	/**
	 * Constructor
	 * @param decimal _
	 * @param token unit
	 * @param EbayTradingTypeMeasurementSystemCodeType measurementSystem
	 * @return EbayTradingTypeMeasureType
	 */
	public function __construct($__ = null,$_unit = null,$_measurementSystem = null)
	{
		parent::__construct(array('_'=>$__,'unit'=>$_unit,'measurementSystem'=>$_measurementSystem));
	}
	/**
	 * Set _
	 * @param decimal _
	 * @return decimal
	 */
	public function set_($__)
	{
		return ($this->_ = $__);
	}
	/**
	 * Get _
	 * @return decimal
	 */
	public function get_()
	{
		return $this->_;
	}
	/**
	 * Set unit
	 * @param token unit
	 * @return token
	 */
	public function setUnit($_unit)
	{
		return ($this->unit = $_unit);
	}
	/**
	 * Get unit
	 * @return token
	 */
	public function getUnit()
	{
		return $this->unit;
	}
	/**
	 * Set measurementSystem
	 * @param MeasurementSystemCodeType measurementSystem
	 * @return MeasurementSystemCodeType
	 */
	public function setMeasurementSystem($_measurementSystem)
	{
		return ($this->measurementSystem = EbayTradingTypeMeasurementSystemCodeType::valueIsValid($_measurementSystem)?$_measurementSystem:null);
	}
	/**
	 * Get measurementSystem
	 * @return EbayTradingTypeMeasurementSystemCodeType
	 */
	public function getMeasurementSystem()
	{
		return $this->measurementSystem;
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