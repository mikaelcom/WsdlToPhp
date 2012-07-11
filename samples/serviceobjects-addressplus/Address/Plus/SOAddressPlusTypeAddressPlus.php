<?php
/**
 * Class file for SOAddressPlusTypeAddressPlus
 * @date 05/07/2012
 */
/**
 * Class SOAddressPlusTypeAddressPlus
 * @date 05/07/2012
 */
class SOAddressPlusTypeAddressPlus extends SOAddressPlusWsdlClass
{
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var SOAddressPlusTypeErr
	 */
	public $Error;
	/**
	 * The Address
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Address;
	/**
	 * The City
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $City;
	/**
	 * The State
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $State;
	/**
	 * The Zip
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Zip;
	/**
	 * The Address2
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Address2;
	/**
	 * The BarcodeDigits
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $BarcodeDigits;
	/**
	 * The CarrierRoute
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CarrierRoute;
	/**
	 * The CongressCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CongressCode;
	/**
	 * The CountyCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CountyCode;
	/**
	 * The CountyName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CountyName;
	/**
	 * The Fragment
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Fragment;
	/**
	 * The FragmentHouse
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FragmentHouse;
	/**
	 * The FragmentPMBNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FragmentPMBNumber;
	/**
	 * The FragmentPMBPrefix
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FragmentPMBPrefix;
	/**
	 * The FragmentPostDir
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FragmentPostDir;
	/**
	 * The FragmentPreDir
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FragmentPreDir;
	/**
	 * The FragmentStreet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FragmentStreet;
	/**
	 * The FragmentSuffix
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FragmentSuffix;
	/**
	 * The FragmentUnit
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FragmentUnit;
	/**
	 * The DPV
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DPV;
	/**
	 * The DPVDesc
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DPVDesc;
	/**
	 * The DPVNotes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DPVNotes;
	/**
	 * The DPVNotesDesc
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DPVNotesDesc;
	/**
	 * The Corrections
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Corrections;
	/**
	 * The CorrectionsDesc
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CorrectionsDesc;
	/**
	 * The Latitude
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Latitude;
	/**
	 * The Longitude
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Longitude;
	/**
	 * The Tract
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Tract;
	/**
	 * The Block
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Block;
	/**
	 * The AreaCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AreaCode;
	/**
	 * The CityAbbreviation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CityAbbreviation;
	/**
	 * The CityType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CityType;
	/**
	 * The CountyFIPS
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CountyFIPS;
	/**
	 * The StateFIPS
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StateFIPS;
	/**
	 * The TimeZone
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TimeZone;
	/**
	 * The DayLightSavings
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DayLightSavings;
	/**
	 * The MSA
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MSA;
	/**
	 * The MD
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MD;
	/**
	 * The CBSA
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CBSA;
	/**
	 * The PMSA
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PMSA;
	/**
	 * The DMA
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DMA;
	/**
	 * The ZipLatitude
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ZipLatitude;
	/**
	 * The ZipLongitude
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ZipLongitude;
	/**
	 * The MedianIncome2000
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MedianIncome2000;
	/**
	 * The MedianIncome2005
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MedianIncome2005;
	/**
	 * The AreaHouseholdIncome
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AreaHouseholdIncome;
	/**
	 * The CountyHouseholdIncome
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CountyHouseholdIncome;
	/**
	 * The StateHouseholdIncome
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StateHouseholdIncome;
	/**
	 * The GeocodeLevel
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $GeocodeLevel;
	/**
	 * The GeocodeLevelDescription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $GeocodeLevelDescription;
	/**
	 * Constructor
	 * @param SOAddressPlusTypeErr Error
	 * @param string Address
	 * @param string City
	 * @param string State
	 * @param string Zip
	 * @param string Address2
	 * @param string BarcodeDigits
	 * @param string CarrierRoute
	 * @param string CongressCode
	 * @param string CountyCode
	 * @param string CountyName
	 * @param string Fragment
	 * @param string FragmentHouse
	 * @param string FragmentPMBNumber
	 * @param string FragmentPMBPrefix
	 * @param string FragmentPostDir
	 * @param string FragmentPreDir
	 * @param string FragmentStreet
	 * @param string FragmentSuffix
	 * @param string FragmentUnit
	 * @param string DPV
	 * @param string DPVDesc
	 * @param string DPVNotes
	 * @param string DPVNotesDesc
	 * @param string Corrections
	 * @param string CorrectionsDesc
	 * @param string Latitude
	 * @param string Longitude
	 * @param string Tract
	 * @param string Block
	 * @param string AreaCode
	 * @param string CityAbbreviation
	 * @param string CityType
	 * @param string CountyFIPS
	 * @param string StateFIPS
	 * @param string TimeZone
	 * @param string DayLightSavings
	 * @param string MSA
	 * @param string MD
	 * @param string CBSA
	 * @param string PMSA
	 * @param string DMA
	 * @param string ZipLatitude
	 * @param string ZipLongitude
	 * @param string MedianIncome2000
	 * @param string MedianIncome2005
	 * @param string AreaHouseholdIncome
	 * @param string CountyHouseholdIncome
	 * @param string StateHouseholdIncome
	 * @param string GeocodeLevel
	 * @param string GeocodeLevelDescription
	 * @return SOAddressPlusTypeAddressPlus
	 */
	public function __construct($_Error = null,$_Address = null,$_City = null,$_State = null,$_Zip = null,$_Address2 = null,$_BarcodeDigits = null,$_CarrierRoute = null,$_CongressCode = null,$_CountyCode = null,$_CountyName = null,$_Fragment = null,$_FragmentHouse = null,$_FragmentPMBNumber = null,$_FragmentPMBPrefix = null,$_FragmentPostDir = null,$_FragmentPreDir = null,$_FragmentStreet = null,$_FragmentSuffix = null,$_FragmentUnit = null,$_DPV = null,$_DPVDesc = null,$_DPVNotes = null,$_DPVNotesDesc = null,$_Corrections = null,$_CorrectionsDesc = null,$_Latitude = null,$_Longitude = null,$_Tract = null,$_Block = null,$_AreaCode = null,$_CityAbbreviation = null,$_CityType = null,$_CountyFIPS = null,$_StateFIPS = null,$_TimeZone = null,$_DayLightSavings = null,$_MSA = null,$_MD = null,$_CBSA = null,$_PMSA = null,$_DMA = null,$_ZipLatitude = null,$_ZipLongitude = null,$_MedianIncome2000 = null,$_MedianIncome2005 = null,$_AreaHouseholdIncome = null,$_CountyHouseholdIncome = null,$_StateHouseholdIncome = null,$_GeocodeLevel = null,$_GeocodeLevelDescription = null)
	{
		parent::__construct(array('Error'=>$_Error,'Address'=>$_Address,'City'=>$_City,'State'=>$_State,'Zip'=>$_Zip,'Address2'=>$_Address2,'BarcodeDigits'=>$_BarcodeDigits,'CarrierRoute'=>$_CarrierRoute,'CongressCode'=>$_CongressCode,'CountyCode'=>$_CountyCode,'CountyName'=>$_CountyName,'Fragment'=>$_Fragment,'FragmentHouse'=>$_FragmentHouse,'FragmentPMBNumber'=>$_FragmentPMBNumber,'FragmentPMBPrefix'=>$_FragmentPMBPrefix,'FragmentPostDir'=>$_FragmentPostDir,'FragmentPreDir'=>$_FragmentPreDir,'FragmentStreet'=>$_FragmentStreet,'FragmentSuffix'=>$_FragmentSuffix,'FragmentUnit'=>$_FragmentUnit,'DPV'=>$_DPV,'DPVDesc'=>$_DPVDesc,'DPVNotes'=>$_DPVNotes,'DPVNotesDesc'=>$_DPVNotesDesc,'Corrections'=>$_Corrections,'CorrectionsDesc'=>$_CorrectionsDesc,'Latitude'=>$_Latitude,'Longitude'=>$_Longitude,'Tract'=>$_Tract,'Block'=>$_Block,'AreaCode'=>$_AreaCode,'CityAbbreviation'=>$_CityAbbreviation,'CityType'=>$_CityType,'CountyFIPS'=>$_CountyFIPS,'StateFIPS'=>$_StateFIPS,'TimeZone'=>$_TimeZone,'DayLightSavings'=>$_DayLightSavings,'MSA'=>$_MSA,'MD'=>$_MD,'CBSA'=>$_CBSA,'PMSA'=>$_PMSA,'DMA'=>$_DMA,'ZipLatitude'=>$_ZipLatitude,'ZipLongitude'=>$_ZipLongitude,'MedianIncome2000'=>$_MedianIncome2000,'MedianIncome2005'=>$_MedianIncome2005,'AreaHouseholdIncome'=>$_AreaHouseholdIncome,'CountyHouseholdIncome'=>$_CountyHouseholdIncome,'StateHouseholdIncome'=>$_StateHouseholdIncome,'GeocodeLevel'=>$_GeocodeLevel,'GeocodeLevelDescription'=>$_GeocodeLevelDescription));
	}
	/**
	 * Set Error
	 * @param Err Error
	 * @return Err
	 */
	public function setError($_Error)
	{
		return ($this->Error = $_Error);
	}
	/**
	 * Get Error
	 * @return SOAddressPlusTypeErr
	 */
	public function getError()
	{
		return $this->Error;
	}
	/**
	 * Set Address
	 * @param string Address
	 * @return string
	 */
	public function setAddress($_Address)
	{
		return ($this->Address = $_Address);
	}
	/**
	 * Get Address
	 * @return string
	 */
	public function getAddress()
	{
		return $this->Address;
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
	 * Set State
	 * @param string State
	 * @return string
	 */
	public function setState($_State)
	{
		return ($this->State = $_State);
	}
	/**
	 * Get State
	 * @return string
	 */
	public function getState()
	{
		return $this->State;
	}
	/**
	 * Set Zip
	 * @param string Zip
	 * @return string
	 */
	public function setZip($_Zip)
	{
		return ($this->Zip = $_Zip);
	}
	/**
	 * Get Zip
	 * @return string
	 */
	public function getZip()
	{
		return $this->Zip;
	}
	/**
	 * Set Address2
	 * @param string Address2
	 * @return string
	 */
	public function setAddress2($_Address2)
	{
		return ($this->Address2 = $_Address2);
	}
	/**
	 * Get Address2
	 * @return string
	 */
	public function getAddress2()
	{
		return $this->Address2;
	}
	/**
	 * Set BarcodeDigits
	 * @param string BarcodeDigits
	 * @return string
	 */
	public function setBarcodeDigits($_BarcodeDigits)
	{
		return ($this->BarcodeDigits = $_BarcodeDigits);
	}
	/**
	 * Get BarcodeDigits
	 * @return string
	 */
	public function getBarcodeDigits()
	{
		return $this->BarcodeDigits;
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
	 * Set CongressCode
	 * @param string CongressCode
	 * @return string
	 */
	public function setCongressCode($_CongressCode)
	{
		return ($this->CongressCode = $_CongressCode);
	}
	/**
	 * Get CongressCode
	 * @return string
	 */
	public function getCongressCode()
	{
		return $this->CongressCode;
	}
	/**
	 * Set CountyCode
	 * @param string CountyCode
	 * @return string
	 */
	public function setCountyCode($_CountyCode)
	{
		return ($this->CountyCode = $_CountyCode);
	}
	/**
	 * Get CountyCode
	 * @return string
	 */
	public function getCountyCode()
	{
		return $this->CountyCode;
	}
	/**
	 * Set CountyName
	 * @param string CountyName
	 * @return string
	 */
	public function setCountyName($_CountyName)
	{
		return ($this->CountyName = $_CountyName);
	}
	/**
	 * Get CountyName
	 * @return string
	 */
	public function getCountyName()
	{
		return $this->CountyName;
	}
	/**
	 * Set Fragment
	 * @param string Fragment
	 * @return string
	 */
	public function setFragment($_Fragment)
	{
		return ($this->Fragment = $_Fragment);
	}
	/**
	 * Get Fragment
	 * @return string
	 */
	public function getFragment()
	{
		return $this->Fragment;
	}
	/**
	 * Set FragmentHouse
	 * @param string FragmentHouse
	 * @return string
	 */
	public function setFragmentHouse($_FragmentHouse)
	{
		return ($this->FragmentHouse = $_FragmentHouse);
	}
	/**
	 * Get FragmentHouse
	 * @return string
	 */
	public function getFragmentHouse()
	{
		return $this->FragmentHouse;
	}
	/**
	 * Set FragmentPMBNumber
	 * @param string FragmentPMBNumber
	 * @return string
	 */
	public function setFragmentPMBNumber($_FragmentPMBNumber)
	{
		return ($this->FragmentPMBNumber = $_FragmentPMBNumber);
	}
	/**
	 * Get FragmentPMBNumber
	 * @return string
	 */
	public function getFragmentPMBNumber()
	{
		return $this->FragmentPMBNumber;
	}
	/**
	 * Set FragmentPMBPrefix
	 * @param string FragmentPMBPrefix
	 * @return string
	 */
	public function setFragmentPMBPrefix($_FragmentPMBPrefix)
	{
		return ($this->FragmentPMBPrefix = $_FragmentPMBPrefix);
	}
	/**
	 * Get FragmentPMBPrefix
	 * @return string
	 */
	public function getFragmentPMBPrefix()
	{
		return $this->FragmentPMBPrefix;
	}
	/**
	 * Set FragmentPostDir
	 * @param string FragmentPostDir
	 * @return string
	 */
	public function setFragmentPostDir($_FragmentPostDir)
	{
		return ($this->FragmentPostDir = $_FragmentPostDir);
	}
	/**
	 * Get FragmentPostDir
	 * @return string
	 */
	public function getFragmentPostDir()
	{
		return $this->FragmentPostDir;
	}
	/**
	 * Set FragmentPreDir
	 * @param string FragmentPreDir
	 * @return string
	 */
	public function setFragmentPreDir($_FragmentPreDir)
	{
		return ($this->FragmentPreDir = $_FragmentPreDir);
	}
	/**
	 * Get FragmentPreDir
	 * @return string
	 */
	public function getFragmentPreDir()
	{
		return $this->FragmentPreDir;
	}
	/**
	 * Set FragmentStreet
	 * @param string FragmentStreet
	 * @return string
	 */
	public function setFragmentStreet($_FragmentStreet)
	{
		return ($this->FragmentStreet = $_FragmentStreet);
	}
	/**
	 * Get FragmentStreet
	 * @return string
	 */
	public function getFragmentStreet()
	{
		return $this->FragmentStreet;
	}
	/**
	 * Set FragmentSuffix
	 * @param string FragmentSuffix
	 * @return string
	 */
	public function setFragmentSuffix($_FragmentSuffix)
	{
		return ($this->FragmentSuffix = $_FragmentSuffix);
	}
	/**
	 * Get FragmentSuffix
	 * @return string
	 */
	public function getFragmentSuffix()
	{
		return $this->FragmentSuffix;
	}
	/**
	 * Set FragmentUnit
	 * @param string FragmentUnit
	 * @return string
	 */
	public function setFragmentUnit($_FragmentUnit)
	{
		return ($this->FragmentUnit = $_FragmentUnit);
	}
	/**
	 * Get FragmentUnit
	 * @return string
	 */
	public function getFragmentUnit()
	{
		return $this->FragmentUnit;
	}
	/**
	 * Set DPV
	 * @param string DPV
	 * @return string
	 */
	public function setDPV($_DPV)
	{
		return ($this->DPV = $_DPV);
	}
	/**
	 * Get DPV
	 * @return string
	 */
	public function getDPV()
	{
		return $this->DPV;
	}
	/**
	 * Set DPVDesc
	 * @param string DPVDesc
	 * @return string
	 */
	public function setDPVDesc($_DPVDesc)
	{
		return ($this->DPVDesc = $_DPVDesc);
	}
	/**
	 * Get DPVDesc
	 * @return string
	 */
	public function getDPVDesc()
	{
		return $this->DPVDesc;
	}
	/**
	 * Set DPVNotes
	 * @param string DPVNotes
	 * @return string
	 */
	public function setDPVNotes($_DPVNotes)
	{
		return ($this->DPVNotes = $_DPVNotes);
	}
	/**
	 * Get DPVNotes
	 * @return string
	 */
	public function getDPVNotes()
	{
		return $this->DPVNotes;
	}
	/**
	 * Set DPVNotesDesc
	 * @param string DPVNotesDesc
	 * @return string
	 */
	public function setDPVNotesDesc($_DPVNotesDesc)
	{
		return ($this->DPVNotesDesc = $_DPVNotesDesc);
	}
	/**
	 * Get DPVNotesDesc
	 * @return string
	 */
	public function getDPVNotesDesc()
	{
		return $this->DPVNotesDesc;
	}
	/**
	 * Set Corrections
	 * @param string Corrections
	 * @return string
	 */
	public function setCorrections($_Corrections)
	{
		return ($this->Corrections = $_Corrections);
	}
	/**
	 * Get Corrections
	 * @return string
	 */
	public function getCorrections()
	{
		return $this->Corrections;
	}
	/**
	 * Set CorrectionsDesc
	 * @param string CorrectionsDesc
	 * @return string
	 */
	public function setCorrectionsDesc($_CorrectionsDesc)
	{
		return ($this->CorrectionsDesc = $_CorrectionsDesc);
	}
	/**
	 * Get CorrectionsDesc
	 * @return string
	 */
	public function getCorrectionsDesc()
	{
		return $this->CorrectionsDesc;
	}
	/**
	 * Set Latitude
	 * @param string Latitude
	 * @return string
	 */
	public function setLatitude($_Latitude)
	{
		return ($this->Latitude = $_Latitude);
	}
	/**
	 * Get Latitude
	 * @return string
	 */
	public function getLatitude()
	{
		return $this->Latitude;
	}
	/**
	 * Set Longitude
	 * @param string Longitude
	 * @return string
	 */
	public function setLongitude($_Longitude)
	{
		return ($this->Longitude = $_Longitude);
	}
	/**
	 * Get Longitude
	 * @return string
	 */
	public function getLongitude()
	{
		return $this->Longitude;
	}
	/**
	 * Set Tract
	 * @param string Tract
	 * @return string
	 */
	public function setTract($_Tract)
	{
		return ($this->Tract = $_Tract);
	}
	/**
	 * Get Tract
	 * @return string
	 */
	public function getTract()
	{
		return $this->Tract;
	}
	/**
	 * Set Block
	 * @param string Block
	 * @return string
	 */
	public function setBlock($_Block)
	{
		return ($this->Block = $_Block);
	}
	/**
	 * Get Block
	 * @return string
	 */
	public function getBlock()
	{
		return $this->Block;
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
	 * Set CityAbbreviation
	 * @param string CityAbbreviation
	 * @return string
	 */
	public function setCityAbbreviation($_CityAbbreviation)
	{
		return ($this->CityAbbreviation = $_CityAbbreviation);
	}
	/**
	 * Get CityAbbreviation
	 * @return string
	 */
	public function getCityAbbreviation()
	{
		return $this->CityAbbreviation;
	}
	/**
	 * Set CityType
	 * @param string CityType
	 * @return string
	 */
	public function setCityType($_CityType)
	{
		return ($this->CityType = $_CityType);
	}
	/**
	 * Get CityType
	 * @return string
	 */
	public function getCityType()
	{
		return $this->CityType;
	}
	/**
	 * Set CountyFIPS
	 * @param string CountyFIPS
	 * @return string
	 */
	public function setCountyFIPS($_CountyFIPS)
	{
		return ($this->CountyFIPS = $_CountyFIPS);
	}
	/**
	 * Get CountyFIPS
	 * @return string
	 */
	public function getCountyFIPS()
	{
		return $this->CountyFIPS;
	}
	/**
	 * Set StateFIPS
	 * @param string StateFIPS
	 * @return string
	 */
	public function setStateFIPS($_StateFIPS)
	{
		return ($this->StateFIPS = $_StateFIPS);
	}
	/**
	 * Get StateFIPS
	 * @return string
	 */
	public function getStateFIPS()
	{
		return $this->StateFIPS;
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
	 * Set DayLightSavings
	 * @param string DayLightSavings
	 * @return string
	 */
	public function setDayLightSavings($_DayLightSavings)
	{
		return ($this->DayLightSavings = $_DayLightSavings);
	}
	/**
	 * Get DayLightSavings
	 * @return string
	 */
	public function getDayLightSavings()
	{
		return $this->DayLightSavings;
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
	 * Set MD
	 * @param string MD
	 * @return string
	 */
	public function setMD($_MD)
	{
		return ($this->MD = $_MD);
	}
	/**
	 * Get MD
	 * @return string
	 */
	public function getMD()
	{
		return $this->MD;
	}
	/**
	 * Set CBSA
	 * @param string CBSA
	 * @return string
	 */
	public function setCBSA($_CBSA)
	{
		return ($this->CBSA = $_CBSA);
	}
	/**
	 * Get CBSA
	 * @return string
	 */
	public function getCBSA()
	{
		return $this->CBSA;
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
	 * Set DMA
	 * @param string DMA
	 * @return string
	 */
	public function setDMA($_DMA)
	{
		return ($this->DMA = $_DMA);
	}
	/**
	 * Get DMA
	 * @return string
	 */
	public function getDMA()
	{
		return $this->DMA;
	}
	/**
	 * Set ZipLatitude
	 * @param string ZipLatitude
	 * @return string
	 */
	public function setZipLatitude($_ZipLatitude)
	{
		return ($this->ZipLatitude = $_ZipLatitude);
	}
	/**
	 * Get ZipLatitude
	 * @return string
	 */
	public function getZipLatitude()
	{
		return $this->ZipLatitude;
	}
	/**
	 * Set ZipLongitude
	 * @param string ZipLongitude
	 * @return string
	 */
	public function setZipLongitude($_ZipLongitude)
	{
		return ($this->ZipLongitude = $_ZipLongitude);
	}
	/**
	 * Get ZipLongitude
	 * @return string
	 */
	public function getZipLongitude()
	{
		return $this->ZipLongitude;
	}
	/**
	 * Set MedianIncome2000
	 * @param string MedianIncome2000
	 * @return string
	 */
	public function setMedianIncome2000($_MedianIncome2000)
	{
		return ($this->MedianIncome2000 = $_MedianIncome2000);
	}
	/**
	 * Get MedianIncome2000
	 * @return string
	 */
	public function getMedianIncome2000()
	{
		return $this->MedianIncome2000;
	}
	/**
	 * Set MedianIncome2005
	 * @param string MedianIncome2005
	 * @return string
	 */
	public function setMedianIncome2005($_MedianIncome2005)
	{
		return ($this->MedianIncome2005 = $_MedianIncome2005);
	}
	/**
	 * Get MedianIncome2005
	 * @return string
	 */
	public function getMedianIncome2005()
	{
		return $this->MedianIncome2005;
	}
	/**
	 * Set AreaHouseholdIncome
	 * @param string AreaHouseholdIncome
	 * @return string
	 */
	public function setAreaHouseholdIncome($_AreaHouseholdIncome)
	{
		return ($this->AreaHouseholdIncome = $_AreaHouseholdIncome);
	}
	/**
	 * Get AreaHouseholdIncome
	 * @return string
	 */
	public function getAreaHouseholdIncome()
	{
		return $this->AreaHouseholdIncome;
	}
	/**
	 * Set CountyHouseholdIncome
	 * @param string CountyHouseholdIncome
	 * @return string
	 */
	public function setCountyHouseholdIncome($_CountyHouseholdIncome)
	{
		return ($this->CountyHouseholdIncome = $_CountyHouseholdIncome);
	}
	/**
	 * Get CountyHouseholdIncome
	 * @return string
	 */
	public function getCountyHouseholdIncome()
	{
		return $this->CountyHouseholdIncome;
	}
	/**
	 * Set StateHouseholdIncome
	 * @param string StateHouseholdIncome
	 * @return string
	 */
	public function setStateHouseholdIncome($_StateHouseholdIncome)
	{
		return ($this->StateHouseholdIncome = $_StateHouseholdIncome);
	}
	/**
	 * Get StateHouseholdIncome
	 * @return string
	 */
	public function getStateHouseholdIncome()
	{
		return $this->StateHouseholdIncome;
	}
	/**
	 * Set GeocodeLevel
	 * @param string GeocodeLevel
	 * @return string
	 */
	public function setGeocodeLevel($_GeocodeLevel)
	{
		return ($this->GeocodeLevel = $_GeocodeLevel);
	}
	/**
	 * Get GeocodeLevel
	 * @return string
	 */
	public function getGeocodeLevel()
	{
		return $this->GeocodeLevel;
	}
	/**
	 * Set GeocodeLevelDescription
	 * @param string GeocodeLevelDescription
	 * @return string
	 */
	public function setGeocodeLevelDescription($_GeocodeLevelDescription)
	{
		return ($this->GeocodeLevelDescription = $_GeocodeLevelDescription);
	}
	/**
	 * Get GeocodeLevelDescription
	 * @return string
	 */
	public function getGeocodeLevelDescription()
	{
		return $this->GeocodeLevelDescription;
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