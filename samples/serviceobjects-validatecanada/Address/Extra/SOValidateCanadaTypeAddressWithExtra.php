<?php
/**
 * Class file for SOValidateCanadaTypeAddressWithExtra
 * @date 05/07/2012
 */
/**
 * Class SOValidateCanadaTypeAddressWithExtra
 * @date 05/07/2012
 */
class SOValidateCanadaTypeAddressWithExtra extends SOValidateCanadaWsdlClass
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
	 * The Address2
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Address2;
	/**
	 * The Municipality
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Municipality;
	/**
	 * The Province
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Province;
	/**
	 * The PostalCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PostalCode;
	/**
	 * The TimeZone
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TimeZone;
	/**
	 * The AddressNumberFragment
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AddressNumberFragment;
	/**
	 * The StreetNameFragment
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StreetNameFragment;
	/**
	 * The StreetTypeFragment
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StreetTypeFragment;
	/**
	 * The DirectionalCodeFragment
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DirectionalCodeFragment;
	/**
	 * The UnitTypeFragment
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $UnitTypeFragment;
	/**
	 * The UnitNumberFragment
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $UnitNumberFragment;
	/**
	 * The IsPOBox
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IsPOBox;
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOValidateCanadaTypeErr
	 */
	public $Error;
	/**
	 * Constructor
	 * @param string Address
	 * @param string Address2
	 * @param string Municipality
	 * @param string Province
	 * @param string PostalCode
	 * @param string TimeZone
	 * @param string AddressNumberFragment
	 * @param string StreetNameFragment
	 * @param string StreetTypeFragment
	 * @param string DirectionalCodeFragment
	 * @param string UnitTypeFragment
	 * @param string UnitNumberFragment
	 * @param string IsPOBox
	 * @param SOValidateCanadaTypeErr Error
	 * @return SOValidateCanadaTypeAddressWithExtra
	 */
	public function __construct($_Address = null,$_Address2 = null,$_Municipality = null,$_Province = null,$_PostalCode = null,$_TimeZone = null,$_AddressNumberFragment = null,$_StreetNameFragment = null,$_StreetTypeFragment = null,$_DirectionalCodeFragment = null,$_UnitTypeFragment = null,$_UnitNumberFragment = null,$_IsPOBox = null,$_Error = null)
	{
		parent::__construct(array('Address'=>$_Address,'Address2'=>$_Address2,'Municipality'=>$_Municipality,'Province'=>$_Province,'PostalCode'=>$_PostalCode,'TimeZone'=>$_TimeZone,'AddressNumberFragment'=>$_AddressNumberFragment,'StreetNameFragment'=>$_StreetNameFragment,'StreetTypeFragment'=>$_StreetTypeFragment,'DirectionalCodeFragment'=>$_DirectionalCodeFragment,'UnitTypeFragment'=>$_UnitTypeFragment,'UnitNumberFragment'=>$_UnitNumberFragment,'IsPOBox'=>$_IsPOBox,'Error'=>$_Error));
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
	 * Set Municipality
	 * @param string Municipality
	 * @return string
	 */
	public function setMunicipality($_Municipality)
	{
		return ($this->Municipality = $_Municipality);
	}
	/**
	 * Get Municipality
	 * @return string
	 */
	public function getMunicipality()
	{
		return $this->Municipality;
	}
	/**
	 * Set Province
	 * @param string Province
	 * @return string
	 */
	public function setProvince($_Province)
	{
		return ($this->Province = $_Province);
	}
	/**
	 * Get Province
	 * @return string
	 */
	public function getProvince()
	{
		return $this->Province;
	}
	/**
	 * Set PostalCode
	 * @param string PostalCode
	 * @return string
	 */
	public function setPostalCode($_PostalCode)
	{
		return ($this->PostalCode = $_PostalCode);
	}
	/**
	 * Get PostalCode
	 * @return string
	 */
	public function getPostalCode()
	{
		return $this->PostalCode;
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
	 * Set AddressNumberFragment
	 * @param string AddressNumberFragment
	 * @return string
	 */
	public function setAddressNumberFragment($_AddressNumberFragment)
	{
		return ($this->AddressNumberFragment = $_AddressNumberFragment);
	}
	/**
	 * Get AddressNumberFragment
	 * @return string
	 */
	public function getAddressNumberFragment()
	{
		return $this->AddressNumberFragment;
	}
	/**
	 * Set StreetNameFragment
	 * @param string StreetNameFragment
	 * @return string
	 */
	public function setStreetNameFragment($_StreetNameFragment)
	{
		return ($this->StreetNameFragment = $_StreetNameFragment);
	}
	/**
	 * Get StreetNameFragment
	 * @return string
	 */
	public function getStreetNameFragment()
	{
		return $this->StreetNameFragment;
	}
	/**
	 * Set StreetTypeFragment
	 * @param string StreetTypeFragment
	 * @return string
	 */
	public function setStreetTypeFragment($_StreetTypeFragment)
	{
		return ($this->StreetTypeFragment = $_StreetTypeFragment);
	}
	/**
	 * Get StreetTypeFragment
	 * @return string
	 */
	public function getStreetTypeFragment()
	{
		return $this->StreetTypeFragment;
	}
	/**
	 * Set DirectionalCodeFragment
	 * @param string DirectionalCodeFragment
	 * @return string
	 */
	public function setDirectionalCodeFragment($_DirectionalCodeFragment)
	{
		return ($this->DirectionalCodeFragment = $_DirectionalCodeFragment);
	}
	/**
	 * Get DirectionalCodeFragment
	 * @return string
	 */
	public function getDirectionalCodeFragment()
	{
		return $this->DirectionalCodeFragment;
	}
	/**
	 * Set UnitTypeFragment
	 * @param string UnitTypeFragment
	 * @return string
	 */
	public function setUnitTypeFragment($_UnitTypeFragment)
	{
		return ($this->UnitTypeFragment = $_UnitTypeFragment);
	}
	/**
	 * Get UnitTypeFragment
	 * @return string
	 */
	public function getUnitTypeFragment()
	{
		return $this->UnitTypeFragment;
	}
	/**
	 * Set UnitNumberFragment
	 * @param string UnitNumberFragment
	 * @return string
	 */
	public function setUnitNumberFragment($_UnitNumberFragment)
	{
		return ($this->UnitNumberFragment = $_UnitNumberFragment);
	}
	/**
	 * Get UnitNumberFragment
	 * @return string
	 */
	public function getUnitNumberFragment()
	{
		return $this->UnitNumberFragment;
	}
	/**
	 * Set IsPOBox
	 * @param string IsPOBox
	 * @return string
	 */
	public function setIsPOBox($_IsPOBox)
	{
		return ($this->IsPOBox = $_IsPOBox);
	}
	/**
	 * Get IsPOBox
	 * @return string
	 */
	public function getIsPOBox()
	{
		return $this->IsPOBox;
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
	 * @return SOValidateCanadaTypeErr
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