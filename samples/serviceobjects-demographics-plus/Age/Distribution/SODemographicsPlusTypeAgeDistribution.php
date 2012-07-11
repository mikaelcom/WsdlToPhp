<?php
/**
 * Class file for SODemographicsPlusTypeAgeDistribution
 * @date 06/07/2012
 */
/**
 * Class SODemographicsPlusTypeAgeDistribution
 * @date 06/07/2012
 */
class SODemographicsPlusTypeAgeDistribution extends SODemographicsPlusWsdlClass
{
	/**
	 * The PercentUnder5
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentUnder5;
	/**
	 * The Percent5To9
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Percent5To9;
	/**
	 * The Percent10To14
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Percent10To14;
	/**
	 * The Percent15To19
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Percent15To19;
	/**
	 * The Percent20To24
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Percent20To24;
	/**
	 * The Percent25To34
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Percent25To34;
	/**
	 * The Percent35To44
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Percent35To44;
	/**
	 * The Percent45To54
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Percent45To54;
	/**
	 * The Percent55To59
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Percent55To59;
	/**
	 * The Percent60To64
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Percent60To64;
	/**
	 * The Percent65To74
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Percent65To74;
	/**
	 * The Percent75To84
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Percent75To84;
	/**
	 * The Percent85AndOver
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Percent85AndOver;
	/**
	 * The Percent18AndOver
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Percent18AndOver;
	/**
	 * The Percent21AndOver
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Percent21AndOver;
	/**
	 * The Percent62AndOver
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Percent62AndOver;
	/**
	 * The Percent65AndOver
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Percent65AndOver;
	/**
	 * The MedianAge
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $MedianAge;
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
	 * @param double PercentUnder5
	 * @param double Percent5To9
	 * @param double Percent10To14
	 * @param double Percent15To19
	 * @param double Percent20To24
	 * @param double Percent25To34
	 * @param double Percent35To44
	 * @param double Percent45To54
	 * @param double Percent55To59
	 * @param double Percent60To64
	 * @param double Percent65To74
	 * @param double Percent75To84
	 * @param double Percent85AndOver
	 * @param double Percent18AndOver
	 * @param double Percent21AndOver
	 * @param double Percent62AndOver
	 * @param double Percent65AndOver
	 * @param double MedianAge
	 * @param string ResolutionLevel
	 * @return SODemographicsPlusTypeAgeDistribution
	 */
	public function __construct($_PercentUnder5,$_Percent5To9,$_Percent10To14,$_Percent15To19,$_Percent20To24,$_Percent25To34,$_Percent35To44,$_Percent45To54,$_Percent55To59,$_Percent60To64,$_Percent65To74,$_Percent75To84,$_Percent85AndOver,$_Percent18AndOver,$_Percent21AndOver,$_Percent62AndOver,$_Percent65AndOver,$_MedianAge,$_ResolutionLevel = null)
	{
		parent::__construct(array('PercentUnder5'=>$_PercentUnder5,'Percent5To9'=>$_Percent5To9,'Percent10To14'=>$_Percent10To14,'Percent15To19'=>$_Percent15To19,'Percent20To24'=>$_Percent20To24,'Percent25To34'=>$_Percent25To34,'Percent35To44'=>$_Percent35To44,'Percent45To54'=>$_Percent45To54,'Percent55To59'=>$_Percent55To59,'Percent60To64'=>$_Percent60To64,'Percent65To74'=>$_Percent65To74,'Percent75To84'=>$_Percent75To84,'Percent85AndOver'=>$_Percent85AndOver,'Percent18AndOver'=>$_Percent18AndOver,'Percent21AndOver'=>$_Percent21AndOver,'Percent62AndOver'=>$_Percent62AndOver,'Percent65AndOver'=>$_Percent65AndOver,'MedianAge'=>$_MedianAge,'ResolutionLevel'=>$_ResolutionLevel));
	}
	/**
	 * Set PercentUnder5
	 * @param double PercentUnder5
	 * @return double
	 */
	public function setPercentUnder5($_PercentUnder5)
	{
		return ($this->PercentUnder5 = $_PercentUnder5);
	}
	/**
	 * Get PercentUnder5
	 * @return double
	 */
	public function getPercentUnder5()
	{
		return $this->PercentUnder5;
	}
	/**
	 * Set Percent5To9
	 * @param double Percent5To9
	 * @return double
	 */
	public function setPercent5To9($_Percent5To9)
	{
		return ($this->Percent5To9 = $_Percent5To9);
	}
	/**
	 * Get Percent5To9
	 * @return double
	 */
	public function getPercent5To9()
	{
		return $this->Percent5To9;
	}
	/**
	 * Set Percent10To14
	 * @param double Percent10To14
	 * @return double
	 */
	public function setPercent10To14($_Percent10To14)
	{
		return ($this->Percent10To14 = $_Percent10To14);
	}
	/**
	 * Get Percent10To14
	 * @return double
	 */
	public function getPercent10To14()
	{
		return $this->Percent10To14;
	}
	/**
	 * Set Percent15To19
	 * @param double Percent15To19
	 * @return double
	 */
	public function setPercent15To19($_Percent15To19)
	{
		return ($this->Percent15To19 = $_Percent15To19);
	}
	/**
	 * Get Percent15To19
	 * @return double
	 */
	public function getPercent15To19()
	{
		return $this->Percent15To19;
	}
	/**
	 * Set Percent20To24
	 * @param double Percent20To24
	 * @return double
	 */
	public function setPercent20To24($_Percent20To24)
	{
		return ($this->Percent20To24 = $_Percent20To24);
	}
	/**
	 * Get Percent20To24
	 * @return double
	 */
	public function getPercent20To24()
	{
		return $this->Percent20To24;
	}
	/**
	 * Set Percent25To34
	 * @param double Percent25To34
	 * @return double
	 */
	public function setPercent25To34($_Percent25To34)
	{
		return ($this->Percent25To34 = $_Percent25To34);
	}
	/**
	 * Get Percent25To34
	 * @return double
	 */
	public function getPercent25To34()
	{
		return $this->Percent25To34;
	}
	/**
	 * Set Percent35To44
	 * @param double Percent35To44
	 * @return double
	 */
	public function setPercent35To44($_Percent35To44)
	{
		return ($this->Percent35To44 = $_Percent35To44);
	}
	/**
	 * Get Percent35To44
	 * @return double
	 */
	public function getPercent35To44()
	{
		return $this->Percent35To44;
	}
	/**
	 * Set Percent45To54
	 * @param double Percent45To54
	 * @return double
	 */
	public function setPercent45To54($_Percent45To54)
	{
		return ($this->Percent45To54 = $_Percent45To54);
	}
	/**
	 * Get Percent45To54
	 * @return double
	 */
	public function getPercent45To54()
	{
		return $this->Percent45To54;
	}
	/**
	 * Set Percent55To59
	 * @param double Percent55To59
	 * @return double
	 */
	public function setPercent55To59($_Percent55To59)
	{
		return ($this->Percent55To59 = $_Percent55To59);
	}
	/**
	 * Get Percent55To59
	 * @return double
	 */
	public function getPercent55To59()
	{
		return $this->Percent55To59;
	}
	/**
	 * Set Percent60To64
	 * @param double Percent60To64
	 * @return double
	 */
	public function setPercent60To64($_Percent60To64)
	{
		return ($this->Percent60To64 = $_Percent60To64);
	}
	/**
	 * Get Percent60To64
	 * @return double
	 */
	public function getPercent60To64()
	{
		return $this->Percent60To64;
	}
	/**
	 * Set Percent65To74
	 * @param double Percent65To74
	 * @return double
	 */
	public function setPercent65To74($_Percent65To74)
	{
		return ($this->Percent65To74 = $_Percent65To74);
	}
	/**
	 * Get Percent65To74
	 * @return double
	 */
	public function getPercent65To74()
	{
		return $this->Percent65To74;
	}
	/**
	 * Set Percent75To84
	 * @param double Percent75To84
	 * @return double
	 */
	public function setPercent75To84($_Percent75To84)
	{
		return ($this->Percent75To84 = $_Percent75To84);
	}
	/**
	 * Get Percent75To84
	 * @return double
	 */
	public function getPercent75To84()
	{
		return $this->Percent75To84;
	}
	/**
	 * Set Percent85AndOver
	 * @param double Percent85AndOver
	 * @return double
	 */
	public function setPercent85AndOver($_Percent85AndOver)
	{
		return ($this->Percent85AndOver = $_Percent85AndOver);
	}
	/**
	 * Get Percent85AndOver
	 * @return double
	 */
	public function getPercent85AndOver()
	{
		return $this->Percent85AndOver;
	}
	/**
	 * Set Percent18AndOver
	 * @param double Percent18AndOver
	 * @return double
	 */
	public function setPercent18AndOver($_Percent18AndOver)
	{
		return ($this->Percent18AndOver = $_Percent18AndOver);
	}
	/**
	 * Get Percent18AndOver
	 * @return double
	 */
	public function getPercent18AndOver()
	{
		return $this->Percent18AndOver;
	}
	/**
	 * Set Percent21AndOver
	 * @param double Percent21AndOver
	 * @return double
	 */
	public function setPercent21AndOver($_Percent21AndOver)
	{
		return ($this->Percent21AndOver = $_Percent21AndOver);
	}
	/**
	 * Get Percent21AndOver
	 * @return double
	 */
	public function getPercent21AndOver()
	{
		return $this->Percent21AndOver;
	}
	/**
	 * Set Percent62AndOver
	 * @param double Percent62AndOver
	 * @return double
	 */
	public function setPercent62AndOver($_Percent62AndOver)
	{
		return ($this->Percent62AndOver = $_Percent62AndOver);
	}
	/**
	 * Get Percent62AndOver
	 * @return double
	 */
	public function getPercent62AndOver()
	{
		return $this->Percent62AndOver;
	}
	/**
	 * Set Percent65AndOver
	 * @param double Percent65AndOver
	 * @return double
	 */
	public function setPercent65AndOver($_Percent65AndOver)
	{
		return ($this->Percent65AndOver = $_Percent65AndOver);
	}
	/**
	 * Get Percent65AndOver
	 * @return double
	 */
	public function getPercent65AndOver()
	{
		return $this->Percent65AndOver;
	}
	/**
	 * Set MedianAge
	 * @param double MedianAge
	 * @return double
	 */
	public function setMedianAge($_MedianAge)
	{
		return ($this->MedianAge = $_MedianAge);
	}
	/**
	 * Get MedianAge
	 * @return double
	 */
	public function getMedianAge()
	{
		return $this->MedianAge;
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