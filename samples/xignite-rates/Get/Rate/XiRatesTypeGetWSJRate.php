<?php
/**
 * Class file for XiRatesTypeGetWSJRate
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetWSJRate
 * @date 08/07/2012
 */
class XiRatesTypeGetWSJRate extends XiRatesWsdlClass
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeWSJRateTypes
	 */
	public $Type;
	/**
	 * The AsOfDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AsOfDate;
	/**
	 * The Qualifier
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Qualifier;
	/**
	 * Constructor
	 * @param XiRatesTypeWSJRateTypes Type
	 * @param string AsOfDate
	 * @param string Qualifier
	 * @return XiRatesTypeGetWSJRate
	 */
	public function __construct($_Type,$_AsOfDate = null,$_Qualifier = null)
	{
		parent::__construct(array('Type'=>$_Type,'AsOfDate'=>$_AsOfDate,'Qualifier'=>$_Qualifier));
	}
	/**
	 * Set Type
	 * @param WSJRateTypes Type
	 * @return WSJRateTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiRatesTypeWSJRateTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiRatesTypeWSJRateTypes
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set AsOfDate
	 * @param string AsOfDate
	 * @return string
	 */
	public function setAsOfDate($_AsOfDate)
	{
		return ($this->AsOfDate = $_AsOfDate);
	}
	/**
	 * Get AsOfDate
	 * @return string
	 */
	public function getAsOfDate()
	{
		return $this->AsOfDate;
	}
	/**
	 * Set Qualifier
	 * @param string Qualifier
	 * @return string
	 */
	public function setQualifier($_Qualifier)
	{
		return ($this->Qualifier = $_Qualifier);
	}
	/**
	 * Get Qualifier
	 * @return string
	 */
	public function getQualifier()
	{
		return $this->Qualifier;
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