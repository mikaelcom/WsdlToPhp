<?php
/**
 * Class file for XiSecurityTypeVariation
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeVariation
 * @date 08/07/2012
 */
class XiSecurityTypeVariation extends XiSecurityWsdlClass
{
	/**
	 * The StartDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StartDate;
	/**
	 * The EndDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EndDate;
	/**
	 * The Years
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Years;
	/**
	 * The StartValue
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $StartValue;
	/**
	 * The EndValue
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $EndValue;
	/**
	 * The PercentChange
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentChange;
	/**
	 * Constructor
	 * @param string StartDate
	 * @param string EndDate
	 * @param int Years
	 * @param double StartValue
	 * @param double EndValue
	 * @param double PercentChange
	 * @return XiSecurityTypeVariation
	 */
	public function __construct($_StartDate = null,$_EndDate = null,$_Years,$_StartValue,$_EndValue,$_PercentChange)
	{
		parent::__construct(array('StartDate'=>$_StartDate,'EndDate'=>$_EndDate,'Years'=>$_Years,'StartValue'=>$_StartValue,'EndValue'=>$_EndValue,'PercentChange'=>$_PercentChange));
	}
	/**
	 * Set StartDate
	 * @param string StartDate
	 * @return string
	 */
	public function setStartDate($_StartDate)
	{
		return ($this->StartDate = $_StartDate);
	}
	/**
	 * Get StartDate
	 * @return string
	 */
	public function getStartDate()
	{
		return $this->StartDate;
	}
	/**
	 * Set EndDate
	 * @param string EndDate
	 * @return string
	 */
	public function setEndDate($_EndDate)
	{
		return ($this->EndDate = $_EndDate);
	}
	/**
	 * Get EndDate
	 * @return string
	 */
	public function getEndDate()
	{
		return $this->EndDate;
	}
	/**
	 * Set Years
	 * @param int Years
	 * @return int
	 */
	public function setYears($_Years)
	{
		return ($this->Years = $_Years);
	}
	/**
	 * Get Years
	 * @return int
	 */
	public function getYears()
	{
		return $this->Years;
	}
	/**
	 * Set StartValue
	 * @param double StartValue
	 * @return double
	 */
	public function setStartValue($_StartValue)
	{
		return ($this->StartValue = $_StartValue);
	}
	/**
	 * Get StartValue
	 * @return double
	 */
	public function getStartValue()
	{
		return $this->StartValue;
	}
	/**
	 * Set EndValue
	 * @param double EndValue
	 * @return double
	 */
	public function setEndValue($_EndValue)
	{
		return ($this->EndValue = $_EndValue);
	}
	/**
	 * Get EndValue
	 * @return double
	 */
	public function getEndValue()
	{
		return $this->EndValue;
	}
	/**
	 * Set PercentChange
	 * @param double PercentChange
	 * @return double
	 */
	public function setPercentChange($_PercentChange)
	{
		return ($this->PercentChange = $_PercentChange);
	}
	/**
	 * Get PercentChange
	 * @return double
	 */
	public function getPercentChange()
	{
		return $this->PercentChange;
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