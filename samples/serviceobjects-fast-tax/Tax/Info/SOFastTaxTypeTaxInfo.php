<?php
/**
 * Class file for SOFastTaxTypeTaxInfo
 * @date 08/07/2012
 */
/**
 * Class SOFastTaxTypeTaxInfo
 * @date 08/07/2012
 */
class SOFastTaxTypeTaxInfo extends SOFastTaxWsdlClass
{
	/**
	 * The Zip
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Zip;
	/**
	 * The City
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $City;
	/**
	 * The County
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $County;
	/**
	 * The CountyFIPS
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CountyFIPS;
	/**
	 * The StateName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StateName;
	/**
	 * The StateAbbreviation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StateAbbreviation;
	/**
	 * The TotalTaxRate
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var decimal
	 */
	public $TotalTaxRate;
	/**
	 * The TotalTaxExempt
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TotalTaxExempt;
	/**
	 * The StateRate
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var decimal
	 */
	public $StateRate;
	/**
	 * The CityRate
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var decimal
	 */
	public $CityRate;
	/**
	 * The CountyRate
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var decimal
	 */
	public $CountyRate;
	/**
	 * The CountyDistrictRate
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var decimal
	 */
	public $CountyDistrictRate;
	/**
	 * The CityDistrictRate
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var decimal
	 */
	public $CityDistrictRate;
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOFastTaxTypeErr
	 */
	public $Error;
	/**
	 * Constructor
	 * @param string Zip
	 * @param string City
	 * @param string County
	 * @param string CountyFIPS
	 * @param string StateName
	 * @param string StateAbbreviation
	 * @param decimal TotalTaxRate
	 * @param string TotalTaxExempt
	 * @param decimal StateRate
	 * @param decimal CityRate
	 * @param decimal CountyRate
	 * @param decimal CountyDistrictRate
	 * @param decimal CityDistrictRate
	 * @param SOFastTaxTypeErr Error
	 * @return SOFastTaxTypeTaxInfo
	 */
	public function __construct($_Zip = null,$_City = null,$_County = null,$_CountyFIPS = null,$_StateName = null,$_StateAbbreviation = null,$_TotalTaxRate,$_TotalTaxExempt = null,$_StateRate,$_CityRate,$_CountyRate,$_CountyDistrictRate,$_CityDistrictRate,$_Error = null)
	{
		parent::__construct(array('Zip'=>$_Zip,'City'=>$_City,'County'=>$_County,'CountyFIPS'=>$_CountyFIPS,'StateName'=>$_StateName,'StateAbbreviation'=>$_StateAbbreviation,'TotalTaxRate'=>$_TotalTaxRate,'TotalTaxExempt'=>$_TotalTaxExempt,'StateRate'=>$_StateRate,'CityRate'=>$_CityRate,'CountyRate'=>$_CountyRate,'CountyDistrictRate'=>$_CountyDistrictRate,'CityDistrictRate'=>$_CityDistrictRate,'Error'=>$_Error));
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
	 * Set StateName
	 * @param string StateName
	 * @return string
	 */
	public function setStateName($_StateName)
	{
		return ($this->StateName = $_StateName);
	}
	/**
	 * Get StateName
	 * @return string
	 */
	public function getStateName()
	{
		return $this->StateName;
	}
	/**
	 * Set StateAbbreviation
	 * @param string StateAbbreviation
	 * @return string
	 */
	public function setStateAbbreviation($_StateAbbreviation)
	{
		return ($this->StateAbbreviation = $_StateAbbreviation);
	}
	/**
	 * Get StateAbbreviation
	 * @return string
	 */
	public function getStateAbbreviation()
	{
		return $this->StateAbbreviation;
	}
	/**
	 * Set TotalTaxRate
	 * @param decimal TotalTaxRate
	 * @return decimal
	 */
	public function setTotalTaxRate($_TotalTaxRate)
	{
		return ($this->TotalTaxRate = $_TotalTaxRate);
	}
	/**
	 * Get TotalTaxRate
	 * @return decimal
	 */
	public function getTotalTaxRate()
	{
		return $this->TotalTaxRate;
	}
	/**
	 * Set TotalTaxExempt
	 * @param string TotalTaxExempt
	 * @return string
	 */
	public function setTotalTaxExempt($_TotalTaxExempt)
	{
		return ($this->TotalTaxExempt = $_TotalTaxExempt);
	}
	/**
	 * Get TotalTaxExempt
	 * @return string
	 */
	public function getTotalTaxExempt()
	{
		return $this->TotalTaxExempt;
	}
	/**
	 * Set StateRate
	 * @param decimal StateRate
	 * @return decimal
	 */
	public function setStateRate($_StateRate)
	{
		return ($this->StateRate = $_StateRate);
	}
	/**
	 * Get StateRate
	 * @return decimal
	 */
	public function getStateRate()
	{
		return $this->StateRate;
	}
	/**
	 * Set CityRate
	 * @param decimal CityRate
	 * @return decimal
	 */
	public function setCityRate($_CityRate)
	{
		return ($this->CityRate = $_CityRate);
	}
	/**
	 * Get CityRate
	 * @return decimal
	 */
	public function getCityRate()
	{
		return $this->CityRate;
	}
	/**
	 * Set CountyRate
	 * @param decimal CountyRate
	 * @return decimal
	 */
	public function setCountyRate($_CountyRate)
	{
		return ($this->CountyRate = $_CountyRate);
	}
	/**
	 * Get CountyRate
	 * @return decimal
	 */
	public function getCountyRate()
	{
		return $this->CountyRate;
	}
	/**
	 * Set CountyDistrictRate
	 * @param decimal CountyDistrictRate
	 * @return decimal
	 */
	public function setCountyDistrictRate($_CountyDistrictRate)
	{
		return ($this->CountyDistrictRate = $_CountyDistrictRate);
	}
	/**
	 * Get CountyDistrictRate
	 * @return decimal
	 */
	public function getCountyDistrictRate()
	{
		return $this->CountyDistrictRate;
	}
	/**
	 * Set CityDistrictRate
	 * @param decimal CityDistrictRate
	 * @return decimal
	 */
	public function setCityDistrictRate($_CityDistrictRate)
	{
		return ($this->CityDistrictRate = $_CityDistrictRate);
	}
	/**
	 * Get CityDistrictRate
	 * @return decimal
	 */
	public function getCityDistrictRate()
	{
		return $this->CityDistrictRate;
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
	 * @return SOFastTaxTypeErr
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