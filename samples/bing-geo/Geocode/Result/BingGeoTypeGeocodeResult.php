<?php
/**
 * Class file for BingGeoTypeGeocodeResult
 * @date 02/07/2012
 */
/**
 * Class BingGeoTypeGeocodeResult
 * @date 02/07/2012
 */
class BingGeoTypeGeocodeResult extends BingGeoWsdlClass
{
	/**
	 * The Address
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var BingGeoTypeAddress
	 */
	public $Address;
	/**
	 * The BestView
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var BingGeoTypeRectangle
	 */
	public $BestView;
	/**
	 * The Confidence
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var BingGeoTypeConfidence
	 */
	public $Confidence;
	/**
	 * The DisplayName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $DisplayName;
	/**
	 * The EntityType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $EntityType;
	/**
	 * The Locations
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var BingGeoTypeArrayOfGeocodeLocation
	 */
	public $Locations;
	/**
	 * The MatchCodes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var BingGeoTypeArrayOfstring
	 */
	public $MatchCodes;
	/**
	 * Constructor
	 * @param BingGeoTypeAddress Address
	 * @param BingGeoTypeRectangle BestView
	 * @param BingGeoTypeConfidence Confidence
	 * @param string DisplayName
	 * @param string EntityType
	 * @param BingGeoTypeArrayOfGeocodeLocation Locations
	 * @param BingGeoTypeArrayOfstring MatchCodes
	 * @return BingGeoTypeGeocodeResult
	 */
	public function __construct($_Address = null,$_BestView = null,$_Confidence = null,$_DisplayName = null,$_EntityType = null,$_Locations = null,$_MatchCodes = null)
	{
		parent::__construct(array('Address'=>$_Address,'BestView'=>$_BestView,'Confidence'=>$_Confidence,'DisplayName'=>$_DisplayName,'EntityType'=>$_EntityType,'Locations'=>new BingGeoTypeArrayOfGeocodeLocation($_Locations),'MatchCodes'=>new BingGeoTypeArrayOfstring($_MatchCodes)));
	}
	/**
	 * Set Address
	 * @param Address Address
	 * @return Address
	 */
	public function setAddress($_Address)
	{
		return ($this->Address = $_Address);
	}
	/**
	 * Get Address
	 * @return BingGeoTypeAddress
	 */
	public function getAddress()
	{
		return $this->Address;
	}
	/**
	 * Set BestView
	 * @param Rectangle BestView
	 * @return Rectangle
	 */
	public function setBestView($_BestView)
	{
		return ($this->BestView = $_BestView);
	}
	/**
	 * Get BestView
	 * @return BingGeoTypeRectangle
	 */
	public function getBestView()
	{
		return $this->BestView;
	}
	/**
	 * Set Confidence
	 * @param Confidence Confidence
	 * @return Confidence
	 */
	public function setConfidence($_Confidence)
	{
		return ($this->Confidence = BingGeoTypeConfidence::valueIsValid($_Confidence)?$_Confidence:null);
	}
	/**
	 * Get Confidence
	 * @return BingGeoTypeConfidence
	 */
	public function getConfidence()
	{
		return $this->Confidence;
	}
	/**
	 * Set DisplayName
	 * @param string DisplayName
	 * @return string
	 */
	public function setDisplayName($_DisplayName)
	{
		return ($this->DisplayName = $_DisplayName);
	}
	/**
	 * Get DisplayName
	 * @return string
	 */
	public function getDisplayName()
	{
		return $this->DisplayName;
	}
	/**
	 * Set EntityType
	 * @param string EntityType
	 * @return string
	 */
	public function setEntityType($_EntityType)
	{
		return ($this->EntityType = $_EntityType);
	}
	/**
	 * Get EntityType
	 * @return string
	 */
	public function getEntityType()
	{
		return $this->EntityType;
	}
	/**
	 * Set Locations
	 * @param ArrayOfGeocodeLocation Locations
	 * @return ArrayOfGeocodeLocation
	 */
	public function setLocations($_Locations)
	{
		return ($this->Locations = $_Locations);
	}
	/**
	 * Get Locations
	 * @return BingGeoTypeArrayOfGeocodeLocation
	 */
	public function getLocations()
	{
		return $this->Locations;
	}
	/**
	 * Set MatchCodes
	 * @param ArrayOfstring MatchCodes
	 * @return ArrayOfstring
	 */
	public function setMatchCodes($_MatchCodes)
	{
		return ($this->MatchCodes = $_MatchCodes);
	}
	/**
	 * Get MatchCodes
	 * @return BingGeoTypeArrayOfstring
	 */
	public function getMatchCodes()
	{
		return $this->MatchCodes;
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