<?php
/**
 * Class file for SODemographicsPlusTypeIncomeDistribution
 * @date 06/07/2012
 */
/**
 * Class SODemographicsPlusTypeIncomeDistribution
 * @date 06/07/2012
 */
class SODemographicsPlusTypeIncomeDistribution extends SODemographicsPlusWsdlClass
{
	/**
	 * The PercentUnder10000
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentUnder10000;
	/**
	 * The Percent10000To14999
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Percent10000To14999;
	/**
	 * The Percent15000To24999
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Percent15000To24999;
	/**
	 * The Percent25000To34999
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Percent25000To34999;
	/**
	 * The Percent35000To49999
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Percent35000To49999;
	/**
	 * The Percent50000To74999
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Percent50000To74999;
	/**
	 * The Percent75000To99999
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Percent75000To99999;
	/**
	 * The Percent100000To149999
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Percent100000To149999;
	/**
	 * The Percent150000To199999
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Percent150000To199999;
	/**
	 * The Percent200000OrMore
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Percent200000OrMore;
	/**
	 * The MedianHouseholdIncome
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $MedianHouseholdIncome;
	/**
	 * The MedianHouseholdIncome2008
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $MedianHouseholdIncome2008;
	/**
	 * The ResolutionLevel
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ResolutionLevel;
	/**
	 * Constructor
	 * @param double PercentUnder10000
	 * @param double Percent10000To14999
	 * @param double Percent15000To24999
	 * @param double Percent25000To34999
	 * @param double Percent35000To49999
	 * @param double Percent50000To74999
	 * @param double Percent75000To99999
	 * @param double Percent100000To149999
	 * @param double Percent150000To199999
	 * @param double Percent200000OrMore
	 * @param int MedianHouseholdIncome
	 * @param int MedianHouseholdIncome2008
	 * @param string ResolutionLevel
	 * @return SODemographicsPlusTypeIncomeDistribution
	 */
	public function __construct($_PercentUnder10000,$_Percent10000To14999,$_Percent15000To24999,$_Percent25000To34999,$_Percent35000To49999,$_Percent50000To74999,$_Percent75000To99999,$_Percent100000To149999,$_Percent150000To199999,$_Percent200000OrMore,$_MedianHouseholdIncome,$_MedianHouseholdIncome2008,$_ResolutionLevel = null)
	{
		parent::__construct(array('PercentUnder10000'=>$_PercentUnder10000,'Percent10000To14999'=>$_Percent10000To14999,'Percent15000To24999'=>$_Percent15000To24999,'Percent25000To34999'=>$_Percent25000To34999,'Percent35000To49999'=>$_Percent35000To49999,'Percent50000To74999'=>$_Percent50000To74999,'Percent75000To99999'=>$_Percent75000To99999,'Percent100000To149999'=>$_Percent100000To149999,'Percent150000To199999'=>$_Percent150000To199999,'Percent200000OrMore'=>$_Percent200000OrMore,'MedianHouseholdIncome'=>$_MedianHouseholdIncome,'MedianHouseholdIncome2008'=>$_MedianHouseholdIncome2008,'ResolutionLevel'=>$_ResolutionLevel));
	}
	/**
	 * Set PercentUnder10000
	 * @param double PercentUnder10000
	 * @return double
	 */
	public function setPercentUnder10000($_PercentUnder10000)
	{
		return ($this->PercentUnder10000 = $_PercentUnder10000);
	}
	/**
	 * Get PercentUnder10000
	 * @return double
	 */
	public function getPercentUnder10000()
	{
		return $this->PercentUnder10000;
	}
	/**
	 * Set Percent10000To14999
	 * @param double Percent10000To14999
	 * @return double
	 */
	public function setPercent10000To14999($_Percent10000To14999)
	{
		return ($this->Percent10000To14999 = $_Percent10000To14999);
	}
	/**
	 * Get Percent10000To14999
	 * @return double
	 */
	public function getPercent10000To14999()
	{
		return $this->Percent10000To14999;
	}
	/**
	 * Set Percent15000To24999
	 * @param double Percent15000To24999
	 * @return double
	 */
	public function setPercent15000To24999($_Percent15000To24999)
	{
		return ($this->Percent15000To24999 = $_Percent15000To24999);
	}
	/**
	 * Get Percent15000To24999
	 * @return double
	 */
	public function getPercent15000To24999()
	{
		return $this->Percent15000To24999;
	}
	/**
	 * Set Percent25000To34999
	 * @param double Percent25000To34999
	 * @return double
	 */
	public function setPercent25000To34999($_Percent25000To34999)
	{
		return ($this->Percent25000To34999 = $_Percent25000To34999);
	}
	/**
	 * Get Percent25000To34999
	 * @return double
	 */
	public function getPercent25000To34999()
	{
		return $this->Percent25000To34999;
	}
	/**
	 * Set Percent35000To49999
	 * @param double Percent35000To49999
	 * @return double
	 */
	public function setPercent35000To49999($_Percent35000To49999)
	{
		return ($this->Percent35000To49999 = $_Percent35000To49999);
	}
	/**
	 * Get Percent35000To49999
	 * @return double
	 */
	public function getPercent35000To49999()
	{
		return $this->Percent35000To49999;
	}
	/**
	 * Set Percent50000To74999
	 * @param double Percent50000To74999
	 * @return double
	 */
	public function setPercent50000To74999($_Percent50000To74999)
	{
		return ($this->Percent50000To74999 = $_Percent50000To74999);
	}
	/**
	 * Get Percent50000To74999
	 * @return double
	 */
	public function getPercent50000To74999()
	{
		return $this->Percent50000To74999;
	}
	/**
	 * Set Percent75000To99999
	 * @param double Percent75000To99999
	 * @return double
	 */
	public function setPercent75000To99999($_Percent75000To99999)
	{
		return ($this->Percent75000To99999 = $_Percent75000To99999);
	}
	/**
	 * Get Percent75000To99999
	 * @return double
	 */
	public function getPercent75000To99999()
	{
		return $this->Percent75000To99999;
	}
	/**
	 * Set Percent100000To149999
	 * @param double Percent100000To149999
	 * @return double
	 */
	public function setPercent100000To149999($_Percent100000To149999)
	{
		return ($this->Percent100000To149999 = $_Percent100000To149999);
	}
	/**
	 * Get Percent100000To149999
	 * @return double
	 */
	public function getPercent100000To149999()
	{
		return $this->Percent100000To149999;
	}
	/**
	 * Set Percent150000To199999
	 * @param double Percent150000To199999
	 * @return double
	 */
	public function setPercent150000To199999($_Percent150000To199999)
	{
		return ($this->Percent150000To199999 = $_Percent150000To199999);
	}
	/**
	 * Get Percent150000To199999
	 * @return double
	 */
	public function getPercent150000To199999()
	{
		return $this->Percent150000To199999;
	}
	/**
	 * Set Percent200000OrMore
	 * @param double Percent200000OrMore
	 * @return double
	 */
	public function setPercent200000OrMore($_Percent200000OrMore)
	{
		return ($this->Percent200000OrMore = $_Percent200000OrMore);
	}
	/**
	 * Get Percent200000OrMore
	 * @return double
	 */
	public function getPercent200000OrMore()
	{
		return $this->Percent200000OrMore;
	}
	/**
	 * Set MedianHouseholdIncome
	 * @param int MedianHouseholdIncome
	 * @return int
	 */
	public function setMedianHouseholdIncome($_MedianHouseholdIncome)
	{
		return ($this->MedianHouseholdIncome = $_MedianHouseholdIncome);
	}
	/**
	 * Get MedianHouseholdIncome
	 * @return int
	 */
	public function getMedianHouseholdIncome()
	{
		return $this->MedianHouseholdIncome;
	}
	/**
	 * Set MedianHouseholdIncome2008
	 * @param int MedianHouseholdIncome2008
	 * @return int
	 */
	public function setMedianHouseholdIncome2008($_MedianHouseholdIncome2008)
	{
		return ($this->MedianHouseholdIncome2008 = $_MedianHouseholdIncome2008);
	}
	/**
	 * Get MedianHouseholdIncome2008
	 * @return int
	 */
	public function getMedianHouseholdIncome2008()
	{
		return $this->MedianHouseholdIncome2008;
	}
	/**
	 * Set ResolutionLevel
	 * @param string ResolutionLevel
	 * @return string
	 */
	public function setResolutionLevel($_ResolutionLevel)
	{
		return ($this->ResolutionLevel = $_ResolutionLevel);
	}
	/**
	 * Get ResolutionLevel
	 * @return string
	 */
	public function getResolutionLevel()
	{
		return $this->ResolutionLevel;
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