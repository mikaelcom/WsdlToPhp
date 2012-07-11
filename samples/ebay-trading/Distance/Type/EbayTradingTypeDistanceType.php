<?php
/**
 * Class file for EbayTradingTypeDistanceType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDistanceType
 * Documentation : DistanceType used in proximity search
 * @date 04/07/2012
 */
class EbayTradingTypeDistanceType extends EbayTradingWsdlClass
{
	/**
	 * The DistanceMeasurement
	 * Meta informations :
	 * 	- documentation : The measurement used in a proximity search distance calculation.
	 * @var int
	 */
	public $DistanceMeasurement;
	/**
	 * The DistanceUnit
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The unit used in a proximity search distance calculation.
	 * @var string
	 */
	public $DistanceUnit;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int DistanceMeasurement
	 * @param string DistanceUnit
	 * @param DOMDocument any
	 * @return EbayTradingTypeDistanceType
	 */
	public function __construct($_DistanceMeasurement = null,$_DistanceUnit = null,$_any = null)
	{
		parent::__construct(array('DistanceMeasurement'=>$_DistanceMeasurement,'DistanceUnit'=>$_DistanceUnit,'any'=>$_any));
	}
	/**
	 * Set DistanceMeasurement
	 * @param int DistanceMeasurement
	 * @return int
	 */
	public function setDistanceMeasurement($_DistanceMeasurement)
	{
		return ($this->DistanceMeasurement = $_DistanceMeasurement);
	}
	/**
	 * Get DistanceMeasurement
	 * @return int
	 */
	public function getDistanceMeasurement()
	{
		return $this->DistanceMeasurement;
	}
	/**
	 * Set DistanceUnit
	 * @param string DistanceUnit
	 * @return string
	 */
	public function setDistanceUnit($_DistanceUnit)
	{
		return ($this->DistanceUnit = $_DistanceUnit);
	}
	/**
	 * Get DistanceUnit
	 * @return string
	 */
	public function getDistanceUnit()
	{
		return $this->DistanceUnit;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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