<?php
/**
 * Class file for CdyneAddressTypeAddress
 * @date 02/07/2012
 */
/**
 * Class CdyneAddressTypeAddress
 * @date 02/07/2012
 */
class CdyneAddressTypeAddress extends CdyneAddressWsdlClass
{
	/**
	 * The ServiceError
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $ServiceError;
	/**
	 * The AddressError
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $AddressError;
	/**
	 * The AddressFoundBeMoreSpecific
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $AddressFoundBeMoreSpecific;
	/**
	 * The CheckDigit
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $CheckDigit;
	/**
	 * The NeededCorrection
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $NeededCorrection;
	/**
	 * The FromLongitude
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var decimal
	 */
	public $FromLongitude;
	/**
	 * The FromLatitude
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var decimal
	 */
	public $FromLatitude;
	/**
	 * The ToLongitude
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var decimal
	 */
	public $ToLongitude;
	/**
	 * The ToLatitude
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var decimal
	 */
	public $ToLatitude;
	/**
	 * The AvgLongitude
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var decimal
	 */
	public $AvgLongitude;
	/**
	 * The AvgLatitude
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var decimal
	 */
	public $AvgLatitude;
	/**
	 * The hasDaylightSavings
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $hasDaylightSavings;
	/**
	 * The LLCertainty
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $LLCertainty;
	/**
	 * The CountyNum
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $CountyNum;
	/**
	 * The Firm
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Firm;
	/**
	 * The DeliveryAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DeliveryAddress;
	/**
	 * The DeliveryAddress2
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DeliveryAddress2;
	/**
	 * The PrimaryLow
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PrimaryLow;
	/**
	 * The PrimaryHigh
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PrimaryHigh;
	/**
	 * The PriEO
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PriEO;
	/**
	 * The SecEO
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SecEO;
	/**
	 * The SecondaryLow
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SecondaryLow;
	/**
	 * The SecondaryHigh
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SecondaryHigh;
	/**
	 * The Secondary
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Secondary;
	/**
	 * The Extra
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Extra;
	/**
	 * The City
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $City;
	/**
	 * The StateAbbrev
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StateAbbrev;
	/**
	 * The ZipCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ZipCode;
	/**
	 * The CarrierRoute
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CarrierRoute;
	/**
	 * The County
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $County;
	/**
	 * The DeliveryPoint
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DeliveryPoint;
	/**
	 * The BarCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $BarCode;
	/**
	 * The CSKey
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CSKey;
	/**
	 * The UpdateKey
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $UpdateKey;
	/**
	 * The RecordTypeCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $RecordTypeCode;
	/**
	 * The CongressDistrictNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CongressDistrictNumber;
	/**
	 * The FIPS
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FIPS;
	/**
	 * The FinanceNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FinanceNumber;
	/**
	 * The CMSA
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CMSA;
	/**
	 * The PMSA
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PMSA;
	/**
	 * The MSA
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MSA;
	/**
	 * The MA
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MA;
	/**
	 * The TimeZone
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TimeZone;
	/**
	 * The AreaCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AreaCode;
	/**
	 * The PreferredCityName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PreferredCityName;
	/**
	 * The CensusBlockNum
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CensusBlockNum;
	/**
	 * The CensusTractNum
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CensusTractNum;
	/**
	 * The Primary
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Primary;
	/**
	 * The PrefixDirection
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PrefixDirection;
	/**
	 * The StreetName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StreetName;
	/**
	 * The Suffix
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Suffix;
	/**
	 * The PostDirection
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PostDirection;
	/**
	 * The SecondaryNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SecondaryNumber;
	/**
	 * The StateLegislativeUpper
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StateLegislativeUpper;
	/**
	 * The StateLegislativeLower
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StateLegislativeLower;
	/**
	 * Constructor
	 * @param boolean ServiceError
	 * @param boolean AddressError
	 * @param boolean AddressFoundBeMoreSpecific
	 * @param int CheckDigit
	 * @param boolean NeededCorrection
	 * @param decimal FromLongitude
	 * @param decimal FromLatitude
	 * @param decimal ToLongitude
	 * @param decimal ToLatitude
	 * @param decimal AvgLongitude
	 * @param decimal AvgLatitude
	 * @param boolean hasDaylightSavings
	 * @param int LLCertainty
	 * @param int CountyNum
	 * @param string Firm
	 * @param string DeliveryAddress
	 * @param string DeliveryAddress2
	 * @param string PrimaryLow
	 * @param string PrimaryHigh
	 * @param string PriEO
	 * @param string SecEO
	 * @param string SecondaryLow
	 * @param string SecondaryHigh
	 * @param string Secondary
	 * @param string Extra
	 * @param string City
	 * @param string StateAbbrev
	 * @param string ZipCode
	 * @param string CarrierRoute
	 * @param string County
	 * @param string DeliveryPoint
	 * @param string BarCode
	 * @param string CSKey
	 * @param string UpdateKey
	 * @param string RecordTypeCode
	 * @param string CongressDistrictNumber
	 * @param string FIPS
	 * @param string FinanceNumber
	 * @param string CMSA
	 * @param string PMSA
	 * @param string MSA
	 * @param string MA
	 * @param string TimeZone
	 * @param string AreaCode
	 * @param string PreferredCityName
	 * @param string CensusBlockNum
	 * @param string CensusTractNum
	 * @param string Primary
	 * @param string PrefixDirection
	 * @param string StreetName
	 * @param string Suffix
	 * @param string PostDirection
	 * @param string SecondaryNumber
	 * @param string StateLegislativeUpper
	 * @param string StateLegislativeLower
	 * @return CdyneAddressTypeAddress
	 */
	public function __construct($_ServiceError,$_AddressError,$_AddressFoundBeMoreSpecific,$_CheckDigit,$_NeededCorrection,$_FromLongitude,$_FromLatitude,$_ToLongitude,$_ToLatitude,$_AvgLongitude,$_AvgLatitude,$_hasDaylightSavings,$_LLCertainty,$_CountyNum,$_Firm = null,$_DeliveryAddress = null,$_DeliveryAddress2 = null,$_PrimaryLow = null,$_PrimaryHigh = null,$_PriEO = null,$_SecEO = null,$_SecondaryLow = null,$_SecondaryHigh = null,$_Secondary = null,$_Extra = null,$_City = null,$_StateAbbrev = null,$_ZipCode = null,$_CarrierRoute = null,$_County = null,$_DeliveryPoint = null,$_BarCode = null,$_CSKey = null,$_UpdateKey = null,$_RecordTypeCode = null,$_CongressDistrictNumber = null,$_FIPS = null,$_FinanceNumber = null,$_CMSA = null,$_PMSA = null,$_MSA = null,$_MA = null,$_TimeZone = null,$_AreaCode = null,$_PreferredCityName = null,$_CensusBlockNum = null,$_CensusTractNum = null,$_Primary = null,$_PrefixDirection = null,$_StreetName = null,$_Suffix = null,$_PostDirection = null,$_SecondaryNumber = null,$_StateLegislativeUpper = null,$_StateLegislativeLower = null)
	{
		parent::__construct(array('ServiceError'=>$_ServiceError,'AddressError'=>$_AddressError,'AddressFoundBeMoreSpecific'=>$_AddressFoundBeMoreSpecific,'CheckDigit'=>$_CheckDigit,'NeededCorrection'=>$_NeededCorrection,'FromLongitude'=>$_FromLongitude,'FromLatitude'=>$_FromLatitude,'ToLongitude'=>$_ToLongitude,'ToLatitude'=>$_ToLatitude,'AvgLongitude'=>$_AvgLongitude,'AvgLatitude'=>$_AvgLatitude,'hasDaylightSavings'=>$_hasDaylightSavings,'LLCertainty'=>$_LLCertainty,'CountyNum'=>$_CountyNum,'Firm'=>$_Firm,'DeliveryAddress'=>$_DeliveryAddress,'DeliveryAddress2'=>$_DeliveryAddress2,'PrimaryLow'=>$_PrimaryLow,'PrimaryHigh'=>$_PrimaryHigh,'PriEO'=>$_PriEO,'SecEO'=>$_SecEO,'SecondaryLow'=>$_SecondaryLow,'SecondaryHigh'=>$_SecondaryHigh,'Secondary'=>$_Secondary,'Extra'=>$_Extra,'City'=>$_City,'StateAbbrev'=>$_StateAbbrev,'ZipCode'=>$_ZipCode,'CarrierRoute'=>$_CarrierRoute,'County'=>$_County,'DeliveryPoint'=>$_DeliveryPoint,'BarCode'=>$_BarCode,'CSKey'=>$_CSKey,'UpdateKey'=>$_UpdateKey,'RecordTypeCode'=>$_RecordTypeCode,'CongressDistrictNumber'=>$_CongressDistrictNumber,'FIPS'=>$_FIPS,'FinanceNumber'=>$_FinanceNumber,'CMSA'=>$_CMSA,'PMSA'=>$_PMSA,'MSA'=>$_MSA,'MA'=>$_MA,'TimeZone'=>$_TimeZone,'AreaCode'=>$_AreaCode,'PreferredCityName'=>$_PreferredCityName,'CensusBlockNum'=>$_CensusBlockNum,'CensusTractNum'=>$_CensusTractNum,'Primary'=>$_Primary,'PrefixDirection'=>$_PrefixDirection,'StreetName'=>$_StreetName,'Suffix'=>$_Suffix,'PostDirection'=>$_PostDirection,'SecondaryNumber'=>$_SecondaryNumber,'StateLegislativeUpper'=>$_StateLegislativeUpper,'StateLegislativeLower'=>$_StateLegislativeLower));
	}
	/**
	 * Set ServiceError
	 * @param boolean ServiceError
	 * @return boolean
	 */
	public function setServiceError($_ServiceError)
	{
		return ($this->ServiceError = $_ServiceError);
	}
	/**
	 * Get ServiceError
	 * @return boolean
	 */
	public function getServiceError()
	{
		return $this->ServiceError;
	}
	/**
	 * Set AddressError
	 * @param boolean AddressError
	 * @return boolean
	 */
	public function setAddressError($_AddressError)
	{
		return ($this->AddressError = $_AddressError);
	}
	/**
	 * Get AddressError
	 * @return boolean
	 */
	public function getAddressError()
	{
		return $this->AddressError;
	}
	/**
	 * Set AddressFoundBeMoreSpecific
	 * @param boolean AddressFoundBeMoreSpecific
	 * @return boolean
	 */
	public function setAddressFoundBeMoreSpecific($_AddressFoundBeMoreSpecific)
	{
		return ($this->AddressFoundBeMoreSpecific = $_AddressFoundBeMoreSpecific);
	}
	/**
	 * Get AddressFoundBeMoreSpecific
	 * @return boolean
	 */
	public function getAddressFoundBeMoreSpecific()
	{
		return $this->AddressFoundBeMoreSpecific;
	}
	/**
	 * Set CheckDigit
	 * @param int CheckDigit
	 * @return int
	 */
	public function setCheckDigit($_CheckDigit)
	{
		return ($this->CheckDigit = $_CheckDigit);
	}
	/**
	 * Get CheckDigit
	 * @return int
	 */
	public function getCheckDigit()
	{
		return $this->CheckDigit;
	}
	/**
	 * Set NeededCorrection
	 * @param boolean NeededCorrection
	 * @return boolean
	 */
	public function setNeededCorrection($_NeededCorrection)
	{
		return ($this->NeededCorrection = $_NeededCorrection);
	}
	/**
	 * Get NeededCorrection
	 * @return boolean
	 */
	public function getNeededCorrection()
	{
		return $this->NeededCorrection;
	}
	/**
	 * Set FromLongitude
	 * @param decimal FromLongitude
	 * @return decimal
	 */
	public function setFromLongitude($_FromLongitude)
	{
		return ($this->FromLongitude = $_FromLongitude);
	}
	/**
	 * Get FromLongitude
	 * @return decimal
	 */
	public function getFromLongitude()
	{
		return $this->FromLongitude;
	}
	/**
	 * Set FromLatitude
	 * @param decimal FromLatitude
	 * @return decimal
	 */
	public function setFromLatitude($_FromLatitude)
	{
		return ($this->FromLatitude = $_FromLatitude);
	}
	/**
	 * Get FromLatitude
	 * @return decimal
	 */
	public function getFromLatitude()
	{
		return $this->FromLatitude;
	}
	/**
	 * Set ToLongitude
	 * @param decimal ToLongitude
	 * @return decimal
	 */
	public function setToLongitude($_ToLongitude)
	{
		return ($this->ToLongitude = $_ToLongitude);
	}
	/**
	 * Get ToLongitude
	 * @return decimal
	 */
	public function getToLongitude()
	{
		return $this->ToLongitude;
	}
	/**
	 * Set ToLatitude
	 * @param decimal ToLatitude
	 * @return decimal
	 */
	public function setToLatitude($_ToLatitude)
	{
		return ($this->ToLatitude = $_ToLatitude);
	}
	/**
	 * Get ToLatitude
	 * @return decimal
	 */
	public function getToLatitude()
	{
		return $this->ToLatitude;
	}
	/**
	 * Set AvgLongitude
	 * @param decimal AvgLongitude
	 * @return decimal
	 */
	public function setAvgLongitude($_AvgLongitude)
	{
		return ($this->AvgLongitude = $_AvgLongitude);
	}
	/**
	 * Get AvgLongitude
	 * @return decimal
	 */
	public function getAvgLongitude()
	{
		return $this->AvgLongitude;
	}
	/**
	 * Set AvgLatitude
	 * @param decimal AvgLatitude
	 * @return decimal
	 */
	public function setAvgLatitude($_AvgLatitude)
	{
		return ($this->AvgLatitude = $_AvgLatitude);
	}
	/**
	 * Get AvgLatitude
	 * @return decimal
	 */
	public function getAvgLatitude()
	{
		return $this->AvgLatitude;
	}
	/**
	 * Set hasDaylightSavings
	 * @param boolean hasDaylightSavings
	 * @return boolean
	 */
	public function setHasDaylightSavings($_hasDaylightSavings)
	{
		return ($this->hasDaylightSavings = $_hasDaylightSavings);
	}
	/**
	 * Get hasDaylightSavings
	 * @return boolean
	 */
	public function getHasDaylightSavings()
	{
		return $this->hasDaylightSavings;
	}
	/**
	 * Set LLCertainty
	 * @param int LLCertainty
	 * @return int
	 */
	public function setLLCertainty($_LLCertainty)
	{
		return ($this->LLCertainty = $_LLCertainty);
	}
	/**
	 * Get LLCertainty
	 * @return int
	 */
	public function getLLCertainty()
	{
		return $this->LLCertainty;
	}
	/**
	 * Set CountyNum
	 * @param int CountyNum
	 * @return int
	 */
	public function setCountyNum($_CountyNum)
	{
		return ($this->CountyNum = $_CountyNum);
	}
	/**
	 * Get CountyNum
	 * @return int
	 */
	public function getCountyNum()
	{
		return $this->CountyNum;
	}
	/**
	 * Set Firm
	 * @param string Firm
	 * @return string
	 */
	public function setFirm($_Firm)
	{
		return ($this->Firm = $_Firm);
	}
	/**
	 * Get Firm
	 * @return string
	 */
	public function getFirm()
	{
		return $this->Firm;
	}
	/**
	 * Set DeliveryAddress
	 * @param string DeliveryAddress
	 * @return string
	 */
	public function setDeliveryAddress($_DeliveryAddress)
	{
		return ($this->DeliveryAddress = $_DeliveryAddress);
	}
	/**
	 * Get DeliveryAddress
	 * @return string
	 */
	public function getDeliveryAddress()
	{
		return $this->DeliveryAddress;
	}
	/**
	 * Set DeliveryAddress2
	 * @param string DeliveryAddress2
	 * @return string
	 */
	public function setDeliveryAddress2($_DeliveryAddress2)
	{
		return ($this->DeliveryAddress2 = $_DeliveryAddress2);
	}
	/**
	 * Get DeliveryAddress2
	 * @return string
	 */
	public function getDeliveryAddress2()
	{
		return $this->DeliveryAddress2;
	}
	/**
	 * Set PrimaryLow
	 * @param string PrimaryLow
	 * @return string
	 */
	public function setPrimaryLow($_PrimaryLow)
	{
		return ($this->PrimaryLow = $_PrimaryLow);
	}
	/**
	 * Get PrimaryLow
	 * @return string
	 */
	public function getPrimaryLow()
	{
		return $this->PrimaryLow;
	}
	/**
	 * Set PrimaryHigh
	 * @param string PrimaryHigh
	 * @return string
	 */
	public function setPrimaryHigh($_PrimaryHigh)
	{
		return ($this->PrimaryHigh = $_PrimaryHigh);
	}
	/**
	 * Get PrimaryHigh
	 * @return string
	 */
	public function getPrimaryHigh()
	{
		return $this->PrimaryHigh;
	}
	/**
	 * Set PriEO
	 * @param string PriEO
	 * @return string
	 */
	public function setPriEO($_PriEO)
	{
		return ($this->PriEO = $_PriEO);
	}
	/**
	 * Get PriEO
	 * @return string
	 */
	public function getPriEO()
	{
		return $this->PriEO;
	}
	/**
	 * Set SecEO
	 * @param string SecEO
	 * @return string
	 */
	public function setSecEO($_SecEO)
	{
		return ($this->SecEO = $_SecEO);
	}
	/**
	 * Get SecEO
	 * @return string
	 */
	public function getSecEO()
	{
		return $this->SecEO;
	}
	/**
	 * Set SecondaryLow
	 * @param string SecondaryLow
	 * @return string
	 */
	public function setSecondaryLow($_SecondaryLow)
	{
		return ($this->SecondaryLow = $_SecondaryLow);
	}
	/**
	 * Get SecondaryLow
	 * @return string
	 */
	public function getSecondaryLow()
	{
		return $this->SecondaryLow;
	}
	/**
	 * Set SecondaryHigh
	 * @param string SecondaryHigh
	 * @return string
	 */
	public function setSecondaryHigh($_SecondaryHigh)
	{
		return ($this->SecondaryHigh = $_SecondaryHigh);
	}
	/**
	 * Get SecondaryHigh
	 * @return string
	 */
	public function getSecondaryHigh()
	{
		return $this->SecondaryHigh;
	}
	/**
	 * Set Secondary
	 * @param string Secondary
	 * @return string
	 */
	public function setSecondary($_Secondary)
	{
		return ($this->Secondary = $_Secondary);
	}
	/**
	 * Get Secondary
	 * @return string
	 */
	public function getSecondary()
	{
		return $this->Secondary;
	}
	/**
	 * Set Extra
	 * @param string Extra
	 * @return string
	 */
	public function setExtra($_Extra)
	{
		return ($this->Extra = $_Extra);
	}
	/**
	 * Get Extra
	 * @return string
	 */
	public function getExtra()
	{
		return $this->Extra;
	}
	/**
	 * Set City
	 * @param string City
	 * @return string
	 */
	public function setCity($_City)
	{
		return ($this->City = $_City);
	}
	/**
	 * Get City
	 * @return string
	 */
	public function getCity()
	{
		return $this->City;
	}
	/**
	 * Set StateAbbrev
	 * @param string StateAbbrev
	 * @return string
	 */
	public function setStateAbbrev($_StateAbbrev)
	{
		return ($this->StateAbbrev = $_StateAbbrev);
	}
	/**
	 * Get StateAbbrev
	 * @return string
	 */
	public function getStateAbbrev()
	{
		return $this->StateAbbrev;
	}
	/**
	 * Set ZipCode
	 * @param string ZipCode
	 * @return string
	 */
	public function setZipCode($_ZipCode)
	{
		return ($this->ZipCode = $_ZipCode);
	}
	/**
	 * Get ZipCode
	 * @return string
	 */
	public function getZipCode()
	{
		return $this->ZipCode;
	}
	/**
	 * Set CarrierRoute
	 * @param string CarrierRoute
	 * @return string
	 */
	public function setCarrierRoute($_CarrierRoute)
	{
		return ($this->CarrierRoute = $_CarrierRoute);
	}
	/**
	 * Get CarrierRoute
	 * @return string
	 */
	public function getCarrierRoute()
	{
		return $this->CarrierRoute;
	}
	/**
	 * Set County
	 * @param string County
	 * @return string
	 */
	public function setCounty($_County)
	{
		return ($this->County = $_County);
	}
	/**
	 * Get County
	 * @return string
	 */
	public function getCounty()
	{
		return $this->County;
	}
	/**
	 * Set DeliveryPoint
	 * @param string DeliveryPoint
	 * @return string
	 */
	public function setDeliveryPoint($_DeliveryPoint)
	{
		return ($this->DeliveryPoint = $_DeliveryPoint);
	}
	/**
	 * Get DeliveryPoint
	 * @return string
	 */
	public function getDeliveryPoint()
	{
		return $this->DeliveryPoint;
	}
	/**
	 * Set BarCode
	 * @param string BarCode
	 * @return string
	 */
	public function setBarCode($_BarCode)
	{
		return ($this->BarCode = $_BarCode);
	}
	/**
	 * Get BarCode
	 * @return string
	 */
	public function getBarCode()
	{
		return $this->BarCode;
	}
	/**
	 * Set CSKey
	 * @param string CSKey
	 * @return string
	 */
	public function setCSKey($_CSKey)
	{
		return ($this->CSKey = $_CSKey);
	}
	/**
	 * Get CSKey
	 * @return string
	 */
	public function getCSKey()
	{
		return $this->CSKey;
	}
	/**
	 * Set UpdateKey
	 * @param string UpdateKey
	 * @return string
	 */
	public function setUpdateKey($_UpdateKey)
	{
		return ($this->UpdateKey = $_UpdateKey);
	}
	/**
	 * Get UpdateKey
	 * @return string
	 */
	public function getUpdateKey()
	{
		return $this->UpdateKey;
	}
	/**
	 * Set RecordTypeCode
	 * @param string RecordTypeCode
	 * @return string
	 */
	public function setRecordTypeCode($_RecordTypeCode)
	{
		return ($this->RecordTypeCode = $_RecordTypeCode);
	}
	/**
	 * Get RecordTypeCode
	 * @return string
	 */
	public function getRecordTypeCode()
	{
		return $this->RecordTypeCode;
	}
	/**
	 * Set CongressDistrictNumber
	 * @param string CongressDistrictNumber
	 * @return string
	 */
	public function setCongressDistrictNumber($_CongressDistrictNumber)
	{
		return ($this->CongressDistrictNumber = $_CongressDistrictNumber);
	}
	/**
	 * Get CongressDistrictNumber
	 * @return string
	 */
	public function getCongressDistrictNumber()
	{
		return $this->CongressDistrictNumber;
	}
	/**
	 * Set FIPS
	 * @param string FIPS
	 * @return string
	 */
	public function setFIPS($_FIPS)
	{
		return ($this->FIPS = $_FIPS);
	}
	/**
	 * Get FIPS
	 * @return string
	 */
	public function getFIPS()
	{
		return $this->FIPS;
	}
	/**
	 * Set FinanceNumber
	 * @param string FinanceNumber
	 * @return string
	 */
	public function setFinanceNumber($_FinanceNumber)
	{
		return ($this->FinanceNumber = $_FinanceNumber);
	}
	/**
	 * Get FinanceNumber
	 * @return string
	 */
	public function getFinanceNumber()
	{
		return $this->FinanceNumber;
	}
	/**
	 * Set CMSA
	 * @param string CMSA
	 * @return string
	 */
	public function setCMSA($_CMSA)
	{
		return ($this->CMSA = $_CMSA);
	}
	/**
	 * Get CMSA
	 * @return string
	 */
	public function getCMSA()
	{
		return $this->CMSA;
	}
	/**
	 * Set PMSA
	 * @param string PMSA
	 * @return string
	 */
	public function setPMSA($_PMSA)
	{
		return ($this->PMSA = $_PMSA);
	}
	/**
	 * Get PMSA
	 * @return string
	 */
	public function getPMSA()
	{
		return $this->PMSA;
	}
	/**
	 * Set MSA
	 * @param string MSA
	 * @return string
	 */
	public function setMSA($_MSA)
	{
		return ($this->MSA = $_MSA);
	}
	/**
	 * Get MSA
	 * @return string
	 */
	public function getMSA()
	{
		return $this->MSA;
	}
	/**
	 * Set MA
	 * @param string MA
	 * @return string
	 */
	public function setMA($_MA)
	{
		return ($this->MA = $_MA);
	}
	/**
	 * Get MA
	 * @return string
	 */
	public function getMA()
	{
		return $this->MA;
	}
	/**
	 * Set TimeZone
	 * @param string TimeZone
	 * @return string
	 */
	public function setTimeZone($_TimeZone)
	{
		return ($this->TimeZone = $_TimeZone);
	}
	/**
	 * Get TimeZone
	 * @return string
	 */
	public function getTimeZone()
	{
		return $this->TimeZone;
	}
	/**
	 * Set AreaCode
	 * @param string AreaCode
	 * @return string
	 */
	public function setAreaCode($_AreaCode)
	{
		return ($this->AreaCode = $_AreaCode);
	}
	/**
	 * Get AreaCode
	 * @return string
	 */
	public function getAreaCode()
	{
		return $this->AreaCode;
	}
	/**
	 * Set PreferredCityName
	 * @param string PreferredCityName
	 * @return string
	 */
	public function setPreferredCityName($_PreferredCityName)
	{
		return ($this->PreferredCityName = $_PreferredCityName);
	}
	/**
	 * Get PreferredCityName
	 * @return string
	 */
	public function getPreferredCityName()
	{
		return $this->PreferredCityName;
	}
	/**
	 * Set CensusBlockNum
	 * @param string CensusBlockNum
	 * @return string
	 */
	public function setCensusBlockNum($_CensusBlockNum)
	{
		return ($this->CensusBlockNum = $_CensusBlockNum);
	}
	/**
	 * Get CensusBlockNum
	 * @return string
	 */
	public function getCensusBlockNum()
	{
		return $this->CensusBlockNum;
	}
	/**
	 * Set CensusTractNum
	 * @param string CensusTractNum
	 * @return string
	 */
	public function setCensusTractNum($_CensusTractNum)
	{
		return ($this->CensusTractNum = $_CensusTractNum);
	}
	/**
	 * Get CensusTractNum
	 * @return string
	 */
	public function getCensusTractNum()
	{
		return $this->CensusTractNum;
	}
	/**
	 * Set Primary
	 * @param string Primary
	 * @return string
	 */
	public function setPrimary($_Primary)
	{
		return ($this->Primary = $_Primary);
	}
	/**
	 * Get Primary
	 * @return string
	 */
	public function getPrimary()
	{
		return $this->Primary;
	}
	/**
	 * Set PrefixDirection
	 * @param string PrefixDirection
	 * @return string
	 */
	public function setPrefixDirection($_PrefixDirection)
	{
		return ($this->PrefixDirection = $_PrefixDirection);
	}
	/**
	 * Get PrefixDirection
	 * @return string
	 */
	public function getPrefixDirection()
	{
		return $this->PrefixDirection;
	}
	/**
	 * Set StreetName
	 * @param string StreetName
	 * @return string
	 */
	public function setStreetName($_StreetName)
	{
		return ($this->StreetName = $_StreetName);
	}
	/**
	 * Get StreetName
	 * @return string
	 */
	public function getStreetName()
	{
		return $this->StreetName;
	}
	/**
	 * Set Suffix
	 * @param string Suffix
	 * @return string
	 */
	public function setSuffix($_Suffix)
	{
		return ($this->Suffix = $_Suffix);
	}
	/**
	 * Get Suffix
	 * @return string
	 */
	public function getSuffix()
	{
		return $this->Suffix;
	}
	/**
	 * Set PostDirection
	 * @param string PostDirection
	 * @return string
	 */
	public function setPostDirection($_PostDirection)
	{
		return ($this->PostDirection = $_PostDirection);
	}
	/**
	 * Get PostDirection
	 * @return string
	 */
	public function getPostDirection()
	{
		return $this->PostDirection;
	}
	/**
	 * Set SecondaryNumber
	 * @param string SecondaryNumber
	 * @return string
	 */
	public function setSecondaryNumber($_SecondaryNumber)
	{
		return ($this->SecondaryNumber = $_SecondaryNumber);
	}
	/**
	 * Get SecondaryNumber
	 * @return string
	 */
	public function getSecondaryNumber()
	{
		return $this->SecondaryNumber;
	}
	/**
	 * Set StateLegislativeUpper
	 * @param string StateLegislativeUpper
	 * @return string
	 */
	public function setStateLegislativeUpper($_StateLegislativeUpper)
	{
		return ($this->StateLegislativeUpper = $_StateLegislativeUpper);
	}
	/**
	 * Get StateLegislativeUpper
	 * @return string
	 */
	public function getStateLegislativeUpper()
	{
		return $this->StateLegislativeUpper;
	}
	/**
	 * Set StateLegislativeLower
	 * @param string StateLegislativeLower
	 * @return string
	 */
	public function setStateLegislativeLower($_StateLegislativeLower)
	{
		return ($this->StateLegislativeLower = $_StateLegislativeLower);
	}
	/**
	 * Get StateLegislativeLower
	 * @return string
	 */
	public function getStateLegislativeLower()
	{
		return $this->StateLegislativeLower;
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