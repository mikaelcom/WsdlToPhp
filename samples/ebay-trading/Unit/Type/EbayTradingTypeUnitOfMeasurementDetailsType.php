<?php
/**
 * Class file for EbayTradingTypeUnitOfMeasurementDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeUnitOfMeasurementDetailsType
 * @date 04/07/2012
 */
class EbayTradingTypeUnitOfMeasurementDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The UnitOfMeasurement
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains a suggested unit of measure name plus one or more synonyms.
	 * @var EbayTradingTypeUnitOfMeasurementType
	 */
	public $UnitOfMeasurement;
	/**
	 * The DetailVersion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the latest version number for this field. The version can be used to determine if and when to refresh cached client data.
	 * @var string
	 */
	public $DetailVersion;
	/**
	 * The UpdateTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Gives the time in GMT that the feature flags for the details were last updated. This timestamp can be used to determine if and when to refresh cached client data.
	 * @var dateTime
	 */
	public $UpdateTime;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeUnitOfMeasurementType UnitOfMeasurement
	 * @param string DetailVersion
	 * @param dateTime UpdateTime
	 * @param DOMDocument any
	 * @return EbayTradingTypeUnitOfMeasurementDetailsType
	 */
	public function __construct($_UnitOfMeasurement = null,$_DetailVersion = null,$_UpdateTime = null,$_any = null)
	{
		parent::__construct(array('UnitOfMeasurement'=>$_UnitOfMeasurement,'DetailVersion'=>$_DetailVersion,'UpdateTime'=>$_UpdateTime,'any'=>$_any));
	}
	/**
	 * Set UnitOfMeasurement
	 * @param UnitOfMeasurementType UnitOfMeasurement
	 * @return UnitOfMeasurementType
	 */
	public function setUnitOfMeasurement($_UnitOfMeasurement)
	{
		return ($this->UnitOfMeasurement = $_UnitOfMeasurement);
	}
	/**
	 * Get UnitOfMeasurement
	 * @return EbayTradingTypeUnitOfMeasurementType
	 */
	public function getUnitOfMeasurement()
	{
		return $this->UnitOfMeasurement;
	}
	/**
	 * Set DetailVersion
	 * @param string DetailVersion
	 * @return string
	 */
	public function setDetailVersion($_DetailVersion)
	{
		return ($this->DetailVersion = $_DetailVersion);
	}
	/**
	 * Get DetailVersion
	 * @return string
	 */
	public function getDetailVersion()
	{
		return $this->DetailVersion;
	}
	/**
	 * Set UpdateTime
	 * @param dateTime UpdateTime
	 * @return dateTime
	 */
	public function setUpdateTime($_UpdateTime)
	{
		return ($this->UpdateTime = $_UpdateTime);
	}
	/**
	 * Get UpdateTime
	 * @return dateTime
	 */
	public function getUpdateTime()
	{
		return $this->UpdateTime;
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