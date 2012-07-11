<?php
/**
 * Class file for XiInterBanksTypeRateDescription
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeRateDescription
 * @date 08/07/2012
 */
class XiInterBanksTypeRateDescription extends XiInterBanksTypeCommon
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeRateTypes
	 */
	public $Type;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Description;
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The Maturity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Maturity;
	/**
	 * The MaturityUnit
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeMaturityUnitTypes
	 */
	public $MaturityUnit;
	/**
	 * The MaturityCount
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $MaturityCount;
	/**
	 * The SeasonallyAdjusted
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $SeasonallyAdjusted;
	/**
	 * The Availability
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Availability;
	/**
	 * The Source
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Source;
	/**
	 * The Discontinued
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Discontinued;
	/**
	 * The Service
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Service;
	/**
	 * The Suffix
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Suffix;
	/**
	 * The Factor
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Factor;
	/**
	 * The Precision
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Precision;
	/**
	 * Constructor
	 * @param XiInterBanksTypeRateTypes Type
	 * @param string Description
	 * @param string Name
	 * @param string Maturity
	 * @param XiInterBanksTypeMaturityUnitTypes MaturityUnit
	 * @param int MaturityCount
	 * @param boolean SeasonallyAdjusted
	 * @param string Availability
	 * @param string Source
	 * @param boolean Discontinued
	 * @param string Service
	 * @param string Suffix
	 * @param int Factor
	 * @param int Precision
	 * @return XiInterBanksTypeRateDescription
	 */
	public function __construct($_Type,$_Description = null,$_Name = null,$_Maturity = null,$_MaturityUnit,$_MaturityCount,$_SeasonallyAdjusted,$_Availability = null,$_Source = null,$_Discontinued,$_Service = null,$_Suffix = null,$_Factor,$_Precision)
	{
		XiInterBanksWsdlClass::__construct(array('Type'=>$_Type,'Description'=>$_Description,'Name'=>$_Name,'Maturity'=>$_Maturity,'MaturityUnit'=>$_MaturityUnit,'MaturityCount'=>$_MaturityCount,'SeasonallyAdjusted'=>$_SeasonallyAdjusted,'Availability'=>$_Availability,'Source'=>$_Source,'Discontinued'=>$_Discontinued,'Service'=>$_Service,'Suffix'=>$_Suffix,'Factor'=>$_Factor,'Precision'=>$_Precision));
	}
	/**
	 * Set Type
	 * @param RateTypes Type
	 * @return RateTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiInterBanksTypeRateTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiInterBanksTypeRateTypes
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set Maturity
	 * @param string Maturity
	 * @return string
	 */
	public function setMaturity($_Maturity)
	{
		return ($this->Maturity = $_Maturity);
	}
	/**
	 * Get Maturity
	 * @return string
	 */
	public function getMaturity()
	{
		return $this->Maturity;
	}
	/**
	 * Set MaturityUnit
	 * @param MaturityUnitTypes MaturityUnit
	 * @return MaturityUnitTypes
	 */
	public function setMaturityUnit($_MaturityUnit)
	{
		return ($this->MaturityUnit = XiInterBanksTypeMaturityUnitTypes::valueIsValid($_MaturityUnit)?$_MaturityUnit:null);
	}
	/**
	 * Get MaturityUnit
	 * @return XiInterBanksTypeMaturityUnitTypes
	 */
	public function getMaturityUnit()
	{
		return $this->MaturityUnit;
	}
	/**
	 * Set MaturityCount
	 * @param int MaturityCount
	 * @return int
	 */
	public function setMaturityCount($_MaturityCount)
	{
		return ($this->MaturityCount = $_MaturityCount);
	}
	/**
	 * Get MaturityCount
	 * @return int
	 */
	public function getMaturityCount()
	{
		return $this->MaturityCount;
	}
	/**
	 * Set SeasonallyAdjusted
	 * @param boolean SeasonallyAdjusted
	 * @return boolean
	 */
	public function setSeasonallyAdjusted($_SeasonallyAdjusted)
	{
		return ($this->SeasonallyAdjusted = $_SeasonallyAdjusted);
	}
	/**
	 * Get SeasonallyAdjusted
	 * @return boolean
	 */
	public function getSeasonallyAdjusted()
	{
		return $this->SeasonallyAdjusted;
	}
	/**
	 * Set Availability
	 * @param string Availability
	 * @return string
	 */
	public function setAvailability($_Availability)
	{
		return ($this->Availability = $_Availability);
	}
	/**
	 * Get Availability
	 * @return string
	 */
	public function getAvailability()
	{
		return $this->Availability;
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
	 * Set Discontinued
	 * @param boolean Discontinued
	 * @return boolean
	 */
	public function setDiscontinued($_Discontinued)
	{
		return ($this->Discontinued = $_Discontinued);
	}
	/**
	 * Get Discontinued
	 * @return boolean
	 */
	public function getDiscontinued()
	{
		return $this->Discontinued;
	}
	/**
	 * Set Service
	 * @param string Service
	 * @return string
	 */
	public function setService($_Service)
	{
		return ($this->Service = $_Service);
	}
	/**
	 * Get Service
	 * @return string
	 */
	public function getService()
	{
		return $this->Service;
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
	 * Set Factor
	 * @param int Factor
	 * @return int
	 */
	public function setFactor($_Factor)
	{
		return ($this->Factor = $_Factor);
	}
	/**
	 * Get Factor
	 * @return int
	 */
	public function getFactor()
	{
		return $this->Factor;
	}
	/**
	 * Set Precision
	 * @param int Precision
	 * @return int
	 */
	public function setPrecision($_Precision)
	{
		return ($this->Precision = $_Precision);
	}
	/**
	 * Get Precision
	 * @return int
	 */
	public function getPrecision()
	{
		return $this->Precision;
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