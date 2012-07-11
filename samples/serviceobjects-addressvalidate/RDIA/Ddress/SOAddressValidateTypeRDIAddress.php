<?php
/**
 * Class file for SOAddressValidateTypeRDIAddress
 * @date 05/07/2012
 */
/**
 * Class SOAddressValidateTypeRDIAddress
 * @date 05/07/2012
 */
class SOAddressValidateTypeRDIAddress extends SOAddressValidateWsdlClass
{
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
	 * The IsResidential
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IsResidential;
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
	 * The Source
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Source;
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
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOAddressValidateTypeErr
	 */
	public $Error;
	/**
	 * The Debug
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Debug;
	/**
	 * Constructor
	 * @param string Address
	 * @param string City
	 * @param string State
	 * @param string Zip
	 * @param string Address2
	 * @param string IsResidential
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
	 * @param string Source
	 * @param string DPV
	 * @param string DPVDesc
	 * @param string DPVNotes
	 * @param string DPVNotesDesc
	 * @param string Corrections
	 * @param string CorrectionsDesc
	 * @param SOAddressValidateTypeErr Error
	 * @param string Debug
	 * @return SOAddressValidateTypeRDIAddress
	 */
	public function __construct($_Address = null,$_City = null,$_State = null,$_Zip = null,$_Address2 = null,$_IsResidential = null,$_BarcodeDigits = null,$_CarrierRoute = null,$_CongressCode = null,$_CountyCode = null,$_CountyName = null,$_Fragment = null,$_FragmentHouse = null,$_FragmentPMBNumber = null,$_FragmentPMBPrefix = null,$_FragmentPostDir = null,$_FragmentPreDir = null,$_FragmentStreet = null,$_FragmentSuffix = null,$_FragmentUnit = null,$_Source = null,$_DPV = null,$_DPVDesc = null,$_DPVNotes = null,$_DPVNotesDesc = null,$_Corrections = null,$_CorrectionsDesc = null,$_Error = null,$_Debug = null)
	{
		parent::__construct(array('Address'=>$_Address,'City'=>$_City,'State'=>$_State,'Zip'=>$_Zip,'Address2'=>$_Address2,'IsResidential'=>$_IsResidential,'BarcodeDigits'=>$_BarcodeDigits,'CarrierRoute'=>$_CarrierRoute,'CongressCode'=>$_CongressCode,'CountyCode'=>$_CountyCode,'CountyName'=>$_CountyName,'Fragment'=>$_Fragment,'FragmentHouse'=>$_FragmentHouse,'FragmentPMBNumber'=>$_FragmentPMBNumber,'FragmentPMBPrefix'=>$_FragmentPMBPrefix,'FragmentPostDir'=>$_FragmentPostDir,'FragmentPreDir'=>$_FragmentPreDir,'FragmentStreet'=>$_FragmentStreet,'FragmentSuffix'=>$_FragmentSuffix,'FragmentUnit'=>$_FragmentUnit,'Source'=>$_Source,'DPV'=>$_DPV,'DPVDesc'=>$_DPVDesc,'DPVNotes'=>$_DPVNotes,'DPVNotesDesc'=>$_DPVNotesDesc,'Corrections'=>$_Corrections,'CorrectionsDesc'=>$_CorrectionsDesc,'Error'=>$_Error,'Debug'=>$_Debug));
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
	 * Set IsResidential
	 * @param string IsResidential
	 * @return string
	 */
	public function setIsResidential($_IsResidential)
	{
		return ($this->IsResidential = $_IsResidential);
	}
	/**
	 * Get IsResidential
	 * @return string
	 */
	public function getIsResidential()
	{
		return $this->IsResidential;
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
	 * Set Source
	 * @param string Source
	 * @return string
	 */
	public function setSource($_Source)
	{
		return ($this->Source = $_Source);
	}
	/**
	 * Get Source
	 * @return string
	 */
	public function getSource()
	{
		return $this->Source;
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
	 * @return SOAddressValidateTypeErr
	 */
	public function getError()
	{
		return $this->Error;
	}
	/**
	 * Set Debug
	 * @param string Debug
	 * @return string
	 */
	public function setDebug($_Debug)
	{
		return ($this->Debug = $_Debug);
	}
	/**
	 * Get Debug
	 * @return string
	 */
	public function getDebug()
	{
		return $this->Debug;
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