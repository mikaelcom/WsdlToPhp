<?php
/**
 * Class file for SOAddressValidateTypeAddress
 * @date 05/07/2012
 */
/**
 * Class SOAddressValidateTypeAddress
 * @date 05/07/2012
 */
class SOAddressValidateTypeAddress extends SOAddressValidateWsdlClass
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
	 * The Exception
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Exception;
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOAddressValidateTypeErr
	 */
	public $Error;
	/**
	 * Constructor
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
	 * @param string Exception
	 * @param SOAddressValidateTypeErr Error
	 * @return SOAddressValidateTypeAddress
	 */
	public function __construct($_Address = null,$_City = null,$_State = null,$_Zip = null,$_Address2 = null,$_BarcodeDigits = null,$_CarrierRoute = null,$_CongressCode = null,$_CountyCode = null,$_CountyName = null,$_Fragment = null,$_Exception = null,$_Error = null)
	{
		parent::__construct(array('Address'=>$_Address,'City'=>$_City,'State'=>$_State,'Zip'=>$_Zip,'Address2'=>$_Address2,'BarcodeDigits'=>$_BarcodeDigits,'CarrierRoute'=>$_CarrierRoute,'CongressCode'=>$_CongressCode,'CountyCode'=>$_CountyCode,'CountyName'=>$_CountyName,'Fragment'=>$_Fragment,'Exception'=>$_Exception,'Error'=>$_Error));
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
	 * Set Exception
	 * @param string Exception
	 * @return string
	 */
	public function setException($_Exception)
	{
		return ($this->Exception = $_Exception);
	}
	/**
	 * Get Exception
	 * @return string
	 */
	public function getException()
	{
		return $this->Exception;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>