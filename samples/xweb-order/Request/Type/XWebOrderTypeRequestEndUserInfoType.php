<?php
/**
 * Class file for XWebOrderTypeRequestEndUserInfoType
 * @date 09/07/2012
 */
/**
 * Class XWebOrderTypeRequestEndUserInfoType
 * @date 09/07/2012
 */
class XWebOrderTypeRequestEndUserInfoType extends XWebOrderWsdlClass
{
	/**
	 * The EuiGovAgency
	 * @var EuiGovAgency
	 */
	public $EuiGovAgency;
	/**
	 * The EuiGovCabinetLevel
	 * @var EuiGovCabinetLevel
	 */
	public $EuiGovCabinetLevel;
	/**
	 * The EuiContractNbr
	 * @var EuiContractNbr
	 */
	public $EuiContractNbr;
	/**
	 * The EuiContractType
	 * @var EuiContractType
	 */
	public $EuiContractType;
	/**
	 * The EuiOrderPriority
	 * @var EuiOrderPriority
	 */
	public $EuiOrderPriority;
	/**
	 * The EuiMarketType
	 * @var EuiMarketType
	 */
	public $EuiMarketType;
	/**
	 * The EuiContactName
	 * @var EuiContactName
	 */
	public $EuiContactName;
	/**
	 * The EuiPhoneNbr
	 * @var EuiPhoneNbr
	 */
	public $EuiPhoneNbr;
	/**
	 * The EuiFaxNbr
	 * @var EuiFaxNbr
	 */
	public $EuiFaxNbr;
	/**
	 * The EuiName
	 * @var EuiName
	 */
	public $EuiName;
	/**
	 * The EuiAddr1
	 * @var EuiAddr1
	 */
	public $EuiAddr1;
	/**
	 * The EuiAddr2
	 * @var EuiAddr2
	 */
	public $EuiAddr2;
	/**
	 * The EuiAddr3
	 * @var EuiAddr3
	 */
	public $EuiAddr3;
	/**
	 * The EuiCityName
	 * @var EuiCityName
	 */
	public $EuiCityName;
	/**
	 * The EuiStateProvinceCode
	 * @var EuiStateProvinceCode
	 */
	public $EuiStateProvinceCode;
	/**
	 * The EuiPostalCode
	 * @var EuiPostalCode
	 */
	public $EuiPostalCode;
	/**
	 * The EuiCountryCode
	 * @var EuiCountryCode
	 */
	public $EuiCountryCode;
	/**
	 * The EuiSicCode
	 * @var EuiSicCode
	 */
	public $EuiSicCode;
	/**
	 * The EuiOrderPromoType
	 * @var EuiOrderPromoType
	 */
	public $EuiOrderPromoType;
	/**
	 * The EuiEndUserLicenseNbr
	 * @var EuiEndUserLicenseNbr
	 */
	public $EuiEndUserLicenseNbr;
	/**
	 * The EuiEndUserPODate
	 * @var EuiEndUserPODate
	 */
	public $EuiEndUserPODate;
	/**
	 * The EuiEndUserRef1
	 * @var EuiEndUserRef1
	 */
	public $EuiEndUserRef1;
	/**
	 * The EuiEndUserRef2
	 * @var EuiEndUserRef2
	 */
	public $EuiEndUserRef2;
	/**
	 * The EuiEndUserRef3
	 * @var EuiEndUserRef3
	 */
	public $EuiEndUserRef3;
	/**
	 * The EuiInstallName
	 * @var EuiInstallName
	 */
	public $EuiInstallName;
	/**
	 * The EuiDropShipType
	 * @var EuiDropShipType
	 */
	public $EuiDropShipType;
	/**
	 * The EuiContactEmailAddr1
	 * @var EuiContactEmailAddr1
	 */
	public $EuiContactEmailAddr1;
	/**
	 * The EuiContactEmailAddr2
	 * @var EuiContactEmailAddr2
	 */
	public $EuiContactEmailAddr2;
	/**
	 * Constructor
	 * @param EuiGovAgency EuiGovAgency
	 * @param EuiGovCabinetLevel EuiGovCabinetLevel
	 * @param EuiContractNbr EuiContractNbr
	 * @param EuiContractType EuiContractType
	 * @param EuiOrderPriority EuiOrderPriority
	 * @param EuiMarketType EuiMarketType
	 * @param EuiContactName EuiContactName
	 * @param EuiPhoneNbr EuiPhoneNbr
	 * @param EuiFaxNbr EuiFaxNbr
	 * @param EuiName EuiName
	 * @param EuiAddr1 EuiAddr1
	 * @param EuiAddr2 EuiAddr2
	 * @param EuiAddr3 EuiAddr3
	 * @param EuiCityName EuiCityName
	 * @param EuiStateProvinceCode EuiStateProvinceCode
	 * @param EuiPostalCode EuiPostalCode
	 * @param EuiCountryCode EuiCountryCode
	 * @param EuiSicCode EuiSicCode
	 * @param EuiOrderPromoType EuiOrderPromoType
	 * @param EuiEndUserLicenseNbr EuiEndUserLicenseNbr
	 * @param EuiEndUserPODate EuiEndUserPODate
	 * @param EuiEndUserRef1 EuiEndUserRef1
	 * @param EuiEndUserRef2 EuiEndUserRef2
	 * @param EuiEndUserRef3 EuiEndUserRef3
	 * @param EuiInstallName EuiInstallName
	 * @param EuiDropShipType EuiDropShipType
	 * @param EuiContactEmailAddr1 EuiContactEmailAddr1
	 * @param EuiContactEmailAddr2 EuiContactEmailAddr2
	 * @return XWebOrderTypeRequestEndUserInfoType
	 */
	public function __construct($_EuiGovAgency = null,$_EuiGovCabinetLevel = null,$_EuiContractNbr = null,$_EuiContractType = null,$_EuiOrderPriority = null,$_EuiMarketType = null,$_EuiContactName = null,$_EuiPhoneNbr = null,$_EuiFaxNbr = null,$_EuiName = null,$_EuiAddr1 = null,$_EuiAddr2 = null,$_EuiAddr3 = null,$_EuiCityName = null,$_EuiStateProvinceCode = null,$_EuiPostalCode = null,$_EuiCountryCode = null,$_EuiSicCode = null,$_EuiOrderPromoType = null,$_EuiEndUserLicenseNbr = null,$_EuiEndUserPODate = null,$_EuiEndUserRef1 = null,$_EuiEndUserRef2 = null,$_EuiEndUserRef3 = null,$_EuiInstallName = null,$_EuiDropShipType = null,$_EuiContactEmailAddr1 = null,$_EuiContactEmailAddr2 = null)
	{
		parent::__construct(array('EuiGovAgency'=>$_EuiGovAgency,'EuiGovCabinetLevel'=>$_EuiGovCabinetLevel,'EuiContractNbr'=>$_EuiContractNbr,'EuiContractType'=>$_EuiContractType,'EuiOrderPriority'=>$_EuiOrderPriority,'EuiMarketType'=>$_EuiMarketType,'EuiContactName'=>$_EuiContactName,'EuiPhoneNbr'=>$_EuiPhoneNbr,'EuiFaxNbr'=>$_EuiFaxNbr,'EuiName'=>$_EuiName,'EuiAddr1'=>$_EuiAddr1,'EuiAddr2'=>$_EuiAddr2,'EuiAddr3'=>$_EuiAddr3,'EuiCityName'=>$_EuiCityName,'EuiStateProvinceCode'=>$_EuiStateProvinceCode,'EuiPostalCode'=>$_EuiPostalCode,'EuiCountryCode'=>$_EuiCountryCode,'EuiSicCode'=>$_EuiSicCode,'EuiOrderPromoType'=>$_EuiOrderPromoType,'EuiEndUserLicenseNbr'=>$_EuiEndUserLicenseNbr,'EuiEndUserPODate'=>$_EuiEndUserPODate,'EuiEndUserRef1'=>$_EuiEndUserRef1,'EuiEndUserRef2'=>$_EuiEndUserRef2,'EuiEndUserRef3'=>$_EuiEndUserRef3,'EuiInstallName'=>$_EuiInstallName,'EuiDropShipType'=>$_EuiDropShipType,'EuiContactEmailAddr1'=>$_EuiContactEmailAddr1,'EuiContactEmailAddr2'=>$_EuiContactEmailAddr2));
	}
	/**
	 * Set EuiGovAgency
	 * @param EuiGovAgency EuiGovAgency
	 * @return EuiGovAgency
	 */
	public function setEuiGovAgency($_EuiGovAgency)
	{
		return ($this->EuiGovAgency = $_EuiGovAgency);
	}
	/**
	 * Get EuiGovAgency
	 * @return EuiGovAgency
	 */
	public function getEuiGovAgency()
	{
		return $this->EuiGovAgency;
	}
	/**
	 * Set EuiGovCabinetLevel
	 * @param EuiGovCabinetLevel EuiGovCabinetLevel
	 * @return EuiGovCabinetLevel
	 */
	public function setEuiGovCabinetLevel($_EuiGovCabinetLevel)
	{
		return ($this->EuiGovCabinetLevel = $_EuiGovCabinetLevel);
	}
	/**
	 * Get EuiGovCabinetLevel
	 * @return EuiGovCabinetLevel
	 */
	public function getEuiGovCabinetLevel()
	{
		return $this->EuiGovCabinetLevel;
	}
	/**
	 * Set EuiContractNbr
	 * @param EuiContractNbr EuiContractNbr
	 * @return EuiContractNbr
	 */
	public function setEuiContractNbr($_EuiContractNbr)
	{
		return ($this->EuiContractNbr = $_EuiContractNbr);
	}
	/**
	 * Get EuiContractNbr
	 * @return EuiContractNbr
	 */
	public function getEuiContractNbr()
	{
		return $this->EuiContractNbr;
	}
	/**
	 * Set EuiContractType
	 * @param EuiContractType EuiContractType
	 * @return EuiContractType
	 */
	public function setEuiContractType($_EuiContractType)
	{
		return ($this->EuiContractType = $_EuiContractType);
	}
	/**
	 * Get EuiContractType
	 * @return EuiContractType
	 */
	public function getEuiContractType()
	{
		return $this->EuiContractType;
	}
	/**
	 * Set EuiOrderPriority
	 * @param EuiOrderPriority EuiOrderPriority
	 * @return EuiOrderPriority
	 */
	public function setEuiOrderPriority($_EuiOrderPriority)
	{
		return ($this->EuiOrderPriority = $_EuiOrderPriority);
	}
	/**
	 * Get EuiOrderPriority
	 * @return EuiOrderPriority
	 */
	public function getEuiOrderPriority()
	{
		return $this->EuiOrderPriority;
	}
	/**
	 * Set EuiMarketType
	 * @param EuiMarketType EuiMarketType
	 * @return EuiMarketType
	 */
	public function setEuiMarketType($_EuiMarketType)
	{
		return ($this->EuiMarketType = $_EuiMarketType);
	}
	/**
	 * Get EuiMarketType
	 * @return EuiMarketType
	 */
	public function getEuiMarketType()
	{
		return $this->EuiMarketType;
	}
	/**
	 * Set EuiContactName
	 * @param EuiContactName EuiContactName
	 * @return EuiContactName
	 */
	public function setEuiContactName($_EuiContactName)
	{
		return ($this->EuiContactName = $_EuiContactName);
	}
	/**
	 * Get EuiContactName
	 * @return EuiContactName
	 */
	public function getEuiContactName()
	{
		return $this->EuiContactName;
	}
	/**
	 * Set EuiPhoneNbr
	 * @param EuiPhoneNbr EuiPhoneNbr
	 * @return EuiPhoneNbr
	 */
	public function setEuiPhoneNbr($_EuiPhoneNbr)
	{
		return ($this->EuiPhoneNbr = $_EuiPhoneNbr);
	}
	/**
	 * Get EuiPhoneNbr
	 * @return EuiPhoneNbr
	 */
	public function getEuiPhoneNbr()
	{
		return $this->EuiPhoneNbr;
	}
	/**
	 * Set EuiFaxNbr
	 * @param EuiFaxNbr EuiFaxNbr
	 * @return EuiFaxNbr
	 */
	public function setEuiFaxNbr($_EuiFaxNbr)
	{
		return ($this->EuiFaxNbr = $_EuiFaxNbr);
	}
	/**
	 * Get EuiFaxNbr
	 * @return EuiFaxNbr
	 */
	public function getEuiFaxNbr()
	{
		return $this->EuiFaxNbr;
	}
	/**
	 * Set EuiName
	 * @param EuiName EuiName
	 * @return EuiName
	 */
	public function setEuiName($_EuiName)
	{
		return ($this->EuiName = $_EuiName);
	}
	/**
	 * Get EuiName
	 * @return EuiName
	 */
	public function getEuiName()
	{
		return $this->EuiName;
	}
	/**
	 * Set EuiAddr1
	 * @param EuiAddr1 EuiAddr1
	 * @return EuiAddr1
	 */
	public function setEuiAddr1($_EuiAddr1)
	{
		return ($this->EuiAddr1 = $_EuiAddr1);
	}
	/**
	 * Get EuiAddr1
	 * @return EuiAddr1
	 */
	public function getEuiAddr1()
	{
		return $this->EuiAddr1;
	}
	/**
	 * Set EuiAddr2
	 * @param EuiAddr2 EuiAddr2
	 * @return EuiAddr2
	 */
	public function setEuiAddr2($_EuiAddr2)
	{
		return ($this->EuiAddr2 = $_EuiAddr2);
	}
	/**
	 * Get EuiAddr2
	 * @return EuiAddr2
	 */
	public function getEuiAddr2()
	{
		return $this->EuiAddr2;
	}
	/**
	 * Set EuiAddr3
	 * @param EuiAddr3 EuiAddr3
	 * @return EuiAddr3
	 */
	public function setEuiAddr3($_EuiAddr3)
	{
		return ($this->EuiAddr3 = $_EuiAddr3);
	}
	/**
	 * Get EuiAddr3
	 * @return EuiAddr3
	 */
	public function getEuiAddr3()
	{
		return $this->EuiAddr3;
	}
	/**
	 * Set EuiCityName
	 * @param EuiCityName EuiCityName
	 * @return EuiCityName
	 */
	public function setEuiCityName($_EuiCityName)
	{
		return ($this->EuiCityName = $_EuiCityName);
	}
	/**
	 * Get EuiCityName
	 * @return EuiCityName
	 */
	public function getEuiCityName()
	{
		return $this->EuiCityName;
	}
	/**
	 * Set EuiStateProvinceCode
	 * @param EuiStateProvinceCode EuiStateProvinceCode
	 * @return EuiStateProvinceCode
	 */
	public function setEuiStateProvinceCode($_EuiStateProvinceCode)
	{
		return ($this->EuiStateProvinceCode = $_EuiStateProvinceCode);
	}
	/**
	 * Get EuiStateProvinceCode
	 * @return EuiStateProvinceCode
	 */
	public function getEuiStateProvinceCode()
	{
		return $this->EuiStateProvinceCode;
	}
	/**
	 * Set EuiPostalCode
	 * @param EuiPostalCode EuiPostalCode
	 * @return EuiPostalCode
	 */
	public function setEuiPostalCode($_EuiPostalCode)
	{
		return ($this->EuiPostalCode = $_EuiPostalCode);
	}
	/**
	 * Get EuiPostalCode
	 * @return EuiPostalCode
	 */
	public function getEuiPostalCode()
	{
		return $this->EuiPostalCode;
	}
	/**
	 * Set EuiCountryCode
	 * @param EuiCountryCode EuiCountryCode
	 * @return EuiCountryCode
	 */
	public function setEuiCountryCode($_EuiCountryCode)
	{
		return ($this->EuiCountryCode = $_EuiCountryCode);
	}
	/**
	 * Get EuiCountryCode
	 * @return EuiCountryCode
	 */
	public function getEuiCountryCode()
	{
		return $this->EuiCountryCode;
	}
	/**
	 * Set EuiSicCode
	 * @param EuiSicCode EuiSicCode
	 * @return EuiSicCode
	 */
	public function setEuiSicCode($_EuiSicCode)
	{
		return ($this->EuiSicCode = $_EuiSicCode);
	}
	/**
	 * Get EuiSicCode
	 * @return EuiSicCode
	 */
	public function getEuiSicCode()
	{
		return $this->EuiSicCode;
	}
	/**
	 * Set EuiOrderPromoType
	 * @param EuiOrderPromoType EuiOrderPromoType
	 * @return EuiOrderPromoType
	 */
	public function setEuiOrderPromoType($_EuiOrderPromoType)
	{
		return ($this->EuiOrderPromoType = $_EuiOrderPromoType);
	}
	/**
	 * Get EuiOrderPromoType
	 * @return EuiOrderPromoType
	 */
	public function getEuiOrderPromoType()
	{
		return $this->EuiOrderPromoType;
	}
	/**
	 * Set EuiEndUserLicenseNbr
	 * @param EuiEndUserLicenseNbr EuiEndUserLicenseNbr
	 * @return EuiEndUserLicenseNbr
	 */
	public function setEuiEndUserLicenseNbr($_EuiEndUserLicenseNbr)
	{
		return ($this->EuiEndUserLicenseNbr = $_EuiEndUserLicenseNbr);
	}
	/**
	 * Get EuiEndUserLicenseNbr
	 * @return EuiEndUserLicenseNbr
	 */
	public function getEuiEndUserLicenseNbr()
	{
		return $this->EuiEndUserLicenseNbr;
	}
	/**
	 * Set EuiEndUserPODate
	 * @param EuiEndUserPODate EuiEndUserPODate
	 * @return EuiEndUserPODate
	 */
	public function setEuiEndUserPODate($_EuiEndUserPODate)
	{
		return ($this->EuiEndUserPODate = $_EuiEndUserPODate);
	}
	/**
	 * Get EuiEndUserPODate
	 * @return EuiEndUserPODate
	 */
	public function getEuiEndUserPODate()
	{
		return $this->EuiEndUserPODate;
	}
	/**
	 * Set EuiEndUserRef1
	 * @param EuiEndUserRef1 EuiEndUserRef1
	 * @return EuiEndUserRef1
	 */
	public function setEuiEndUserRef1($_EuiEndUserRef1)
	{
		return ($this->EuiEndUserRef1 = $_EuiEndUserRef1);
	}
	/**
	 * Get EuiEndUserRef1
	 * @return EuiEndUserRef1
	 */
	public function getEuiEndUserRef1()
	{
		return $this->EuiEndUserRef1;
	}
	/**
	 * Set EuiEndUserRef2
	 * @param EuiEndUserRef2 EuiEndUserRef2
	 * @return EuiEndUserRef2
	 */
	public function setEuiEndUserRef2($_EuiEndUserRef2)
	{
		return ($this->EuiEndUserRef2 = $_EuiEndUserRef2);
	}
	/**
	 * Get EuiEndUserRef2
	 * @return EuiEndUserRef2
	 */
	public function getEuiEndUserRef2()
	{
		return $this->EuiEndUserRef2;
	}
	/**
	 * Set EuiEndUserRef3
	 * @param EuiEndUserRef3 EuiEndUserRef3
	 * @return EuiEndUserRef3
	 */
	public function setEuiEndUserRef3($_EuiEndUserRef3)
	{
		return ($this->EuiEndUserRef3 = $_EuiEndUserRef3);
	}
	/**
	 * Get EuiEndUserRef3
	 * @return EuiEndUserRef3
	 */
	public function getEuiEndUserRef3()
	{
		return $this->EuiEndUserRef3;
	}
	/**
	 * Set EuiInstallName
	 * @param EuiInstallName EuiInstallName
	 * @return EuiInstallName
	 */
	public function setEuiInstallName($_EuiInstallName)
	{
		return ($this->EuiInstallName = $_EuiInstallName);
	}
	/**
	 * Get EuiInstallName
	 * @return EuiInstallName
	 */
	public function getEuiInstallName()
	{
		return $this->EuiInstallName;
	}
	/**
	 * Set EuiDropShipType
	 * @param EuiDropShipType EuiDropShipType
	 * @return EuiDropShipType
	 */
	public function setEuiDropShipType($_EuiDropShipType)
	{
		return ($this->EuiDropShipType = $_EuiDropShipType);
	}
	/**
	 * Get EuiDropShipType
	 * @return EuiDropShipType
	 */
	public function getEuiDropShipType()
	{
		return $this->EuiDropShipType;
	}
	/**
	 * Set EuiContactEmailAddr1
	 * @param EuiContactEmailAddr1 EuiContactEmailAddr1
	 * @return EuiContactEmailAddr1
	 */
	public function setEuiContactEmailAddr1($_EuiContactEmailAddr1)
	{
		return ($this->EuiContactEmailAddr1 = $_EuiContactEmailAddr1);
	}
	/**
	 * Get EuiContactEmailAddr1
	 * @return EuiContactEmailAddr1
	 */
	public function getEuiContactEmailAddr1()
	{
		return $this->EuiContactEmailAddr1;
	}
	/**
	 * Set EuiContactEmailAddr2
	 * @param EuiContactEmailAddr2 EuiContactEmailAddr2
	 * @return EuiContactEmailAddr2
	 */
	public function setEuiContactEmailAddr2($_EuiContactEmailAddr2)
	{
		return ($this->EuiContactEmailAddr2 = $_EuiContactEmailAddr2);
	}
	/**
	 * Get EuiContactEmailAddr2
	 * @return EuiContactEmailAddr2
	 */
	public function getEuiContactEmailAddr2()
	{
		return $this->EuiContactEmailAddr2;
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