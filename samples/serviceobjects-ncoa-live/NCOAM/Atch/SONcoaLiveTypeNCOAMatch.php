<?php
/**
 * Class file for SONcoaLiveTypeNCOAMatch
 * @date 06/07/2012
 */
/**
 * Class SONcoaLiveTypeNCOAMatch
 * @date 06/07/2012
 */
class SONcoaLiveTypeNCOAMatch extends SONcoaLiveWsdlClass
{
	/**
	 * The NameMatch
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $NameMatch;
	/**
	 * The Address
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Address;
	/**
	 * The Address2
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Address2;
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
	 * The CarrierRoute
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CarrierRoute;
	/**
	 * The BarcodeDigits
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $BarcodeDigits;
	/**
	 * The COAFound
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $COAFound;
	/**
	 * The NCOAReturnCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $NCOAReturnCode;
	/**
	 * The NCOAReturnCodeDesc
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $NCOAReturnCodeDesc;
	/**
	 * The ExtendedNCOAReturnCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ExtendedNCOAReturnCode;
	/**
	 * Constructor
	 * @param string NameMatch
	 * @param string Address
	 * @param string Address2
	 * @param string City
	 * @param string State
	 * @param string Zip
	 * @param string CarrierRoute
	 * @param string BarcodeDigits
	 * @param string COAFound
	 * @param string NCOAReturnCode
	 * @param string NCOAReturnCodeDesc
	 * @param string ExtendedNCOAReturnCode
	 * @return SONcoaLiveTypeNCOAMatch
	 */
	public function __construct($_NameMatch = null,$_Address = null,$_Address2 = null,$_City = null,$_State = null,$_Zip = null,$_CarrierRoute = null,$_BarcodeDigits = null,$_COAFound = null,$_NCOAReturnCode = null,$_NCOAReturnCodeDesc = null,$_ExtendedNCOAReturnCode = null)
	{
		parent::__construct(array('NameMatch'=>$_NameMatch,'Address'=>$_Address,'Address2'=>$_Address2,'City'=>$_City,'State'=>$_State,'Zip'=>$_Zip,'CarrierRoute'=>$_CarrierRoute,'BarcodeDigits'=>$_BarcodeDigits,'COAFound'=>$_COAFound,'NCOAReturnCode'=>$_NCOAReturnCode,'NCOAReturnCodeDesc'=>$_NCOAReturnCodeDesc,'ExtendedNCOAReturnCode'=>$_ExtendedNCOAReturnCode));
	}
	/**
	 * Set NameMatch
	 * @param string NameMatch
	 * @return string
	 */
	public function setNameMatch($_NameMatch)
	{
		return ($this->NameMatch = $_NameMatch);
	}
	/**
	 * Get NameMatch
	 * @return string
	 */
	public function getNameMatch()
	{
		return $this->NameMatch;
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
	 * Set COAFound
	 * @param string COAFound
	 * @return string
	 */
	public function setCOAFound($_COAFound)
	{
		return ($this->COAFound = $_COAFound);
	}
	/**
	 * Get COAFound
	 * @return string
	 */
	public function getCOAFound()
	{
		return $this->COAFound;
	}
	/**
	 * Set NCOAReturnCode
	 * @param string NCOAReturnCode
	 * @return string
	 */
	public function setNCOAReturnCode($_NCOAReturnCode)
	{
		return ($this->NCOAReturnCode = $_NCOAReturnCode);
	}
	/**
	 * Get NCOAReturnCode
	 * @return string
	 */
	public function getNCOAReturnCode()
	{
		return $this->NCOAReturnCode;
	}
	/**
	 * Set NCOAReturnCodeDesc
	 * @param string NCOAReturnCodeDesc
	 * @return string
	 */
	public function setNCOAReturnCodeDesc($_NCOAReturnCodeDesc)
	{
		return ($this->NCOAReturnCodeDesc = $_NCOAReturnCodeDesc);
	}
	/**
	 * Get NCOAReturnCodeDesc
	 * @return string
	 */
	public function getNCOAReturnCodeDesc()
	{
		return $this->NCOAReturnCodeDesc;
	}
	/**
	 * Set ExtendedNCOAReturnCode
	 * @param string ExtendedNCOAReturnCode
	 * @return string
	 */
	public function setExtendedNCOAReturnCode($_ExtendedNCOAReturnCode)
	{
		return ($this->ExtendedNCOAReturnCode = $_ExtendedNCOAReturnCode);
	}
	/**
	 * Get ExtendedNCOAReturnCode
	 * @return string
	 */
	public function getExtendedNCOAReturnCode()
	{
		return $this->ExtendedNCOAReturnCode;
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