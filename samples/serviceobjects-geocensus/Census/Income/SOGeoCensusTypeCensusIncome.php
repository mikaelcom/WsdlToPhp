<?php
/**
 * Class file for SOGeoCensusTypeCensusIncome
 * @date 06/07/2012
 */
/**
 * Class SOGeoCensusTypeCensusIncome
 * @date 06/07/2012
 */
class SOGeoCensusTypeCensusIncome extends SOGeoCensusWsdlClass
{
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
	 * The State
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $State;
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
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoCensusTypeErr
	 */
	public $Error;
	/**
	 * Constructor
	 * @param string City
	 * @param string County
	 * @param string State
	 * @param string MedianIncome2000
	 * @param string MedianIncome2005
	 * @param string AreaHouseholdIncome
	 * @param string CountyHouseholdIncome
	 * @param string StateHouseholdIncome
	 * @param SOGeoCensusTypeErr Error
	 * @return SOGeoCensusTypeCensusIncome
	 */
	public function __construct($_City = null,$_County = null,$_State = null,$_MedianIncome2000 = null,$_MedianIncome2005 = null,$_AreaHouseholdIncome = null,$_CountyHouseholdIncome = null,$_StateHouseholdIncome = null,$_Error = null)
	{
		parent::__construct(array('City'=>$_City,'County'=>$_County,'State'=>$_State,'MedianIncome2000'=>$_MedianIncome2000,'MedianIncome2005'=>$_MedianIncome2005,'AreaHouseholdIncome'=>$_AreaHouseholdIncome,'CountyHouseholdIncome'=>$_CountyHouseholdIncome,'StateHouseholdIncome'=>$_StateHouseholdIncome,'Error'=>$_Error));
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
	 * @return SOGeoCensusTypeErr
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