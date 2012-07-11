<?php
/**
 * Class file for XiHoldingsTypeReportingEntity
 * @date 08/07/2012
 */
/**
 * Class XiHoldingsTypeReportingEntity
 * @date 08/07/2012
 */
class XiHoldingsTypeReportingEntity extends XiHoldingsTypeCommon
{
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The IRSNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IRSNumber;
	/**
	 * The PlaceOfOrganization
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PlaceOfOrganization;
	/**
	 * The SoleVotingPower
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $SoleVotingPower;
	/**
	 * The SharedVotingPower
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $SharedVotingPower;
	/**
	 * The SoleDispositivePower
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $SoleDispositivePower;
	/**
	 * The SharedDispositivePower
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $SharedDispositivePower;
	/**
	 * The AggregateAmountBeneficiallyOwned
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AggregateAmountBeneficiallyOwned;
	/**
	 * The PercentOfClassOwned
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentOfClassOwned;
	/**
	 * The TypeOfReportingPerson
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TypeOfReportingPerson;
	/**
	 * Constructor
	 * @param string Name
	 * @param string IRSNumber
	 * @param string PlaceOfOrganization
	 * @param int SoleVotingPower
	 * @param int SharedVotingPower
	 * @param int SoleDispositivePower
	 * @param int SharedDispositivePower
	 * @param double AggregateAmountBeneficiallyOwned
	 * @param double PercentOfClassOwned
	 * @param string TypeOfReportingPerson
	 * @return XiHoldingsTypeReportingEntity
	 */
	public function __construct($_Name = null,$_IRSNumber = null,$_PlaceOfOrganization = null,$_SoleVotingPower,$_SharedVotingPower,$_SoleDispositivePower,$_SharedDispositivePower,$_AggregateAmountBeneficiallyOwned,$_PercentOfClassOwned,$_TypeOfReportingPerson = null)
	{
		XiHoldingsWsdlClass::__construct(array('Name'=>$_Name,'IRSNumber'=>$_IRSNumber,'PlaceOfOrganization'=>$_PlaceOfOrganization,'SoleVotingPower'=>$_SoleVotingPower,'SharedVotingPower'=>$_SharedVotingPower,'SoleDispositivePower'=>$_SoleDispositivePower,'SharedDispositivePower'=>$_SharedDispositivePower,'AggregateAmountBeneficiallyOwned'=>$_AggregateAmountBeneficiallyOwned,'PercentOfClassOwned'=>$_PercentOfClassOwned,'TypeOfReportingPerson'=>$_TypeOfReportingPerson));
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
	 * Set IRSNumber
	 * @param string IRSNumber
	 * @return string
	 */
	public function setIRSNumber($_IRSNumber)
	{
		return ($this->IRSNumber = $_IRSNumber);
	}
	/**
	 * Get IRSNumber
	 * @return string
	 */
	public function getIRSNumber()
	{
		return $this->IRSNumber;
	}
	/**
	 * Set PlaceOfOrganization
	 * @param string PlaceOfOrganization
	 * @return string
	 */
	public function setPlaceOfOrganization($_PlaceOfOrganization)
	{
		return ($this->PlaceOfOrganization = $_PlaceOfOrganization);
	}
	/**
	 * Get PlaceOfOrganization
	 * @return string
	 */
	public function getPlaceOfOrganization()
	{
		return $this->PlaceOfOrganization;
	}
	/**
	 * Set SoleVotingPower
	 * @param int SoleVotingPower
	 * @return int
	 */
	public function setSoleVotingPower($_SoleVotingPower)
	{
		return ($this->SoleVotingPower = $_SoleVotingPower);
	}
	/**
	 * Get SoleVotingPower
	 * @return int
	 */
	public function getSoleVotingPower()
	{
		return $this->SoleVotingPower;
	}
	/**
	 * Set SharedVotingPower
	 * @param int SharedVotingPower
	 * @return int
	 */
	public function setSharedVotingPower($_SharedVotingPower)
	{
		return ($this->SharedVotingPower = $_SharedVotingPower);
	}
	/**
	 * Get SharedVotingPower
	 * @return int
	 */
	public function getSharedVotingPower()
	{
		return $this->SharedVotingPower;
	}
	/**
	 * Set SoleDispositivePower
	 * @param int SoleDispositivePower
	 * @return int
	 */
	public function setSoleDispositivePower($_SoleDispositivePower)
	{
		return ($this->SoleDispositivePower = $_SoleDispositivePower);
	}
	/**
	 * Get SoleDispositivePower
	 * @return int
	 */
	public function getSoleDispositivePower()
	{
		return $this->SoleDispositivePower;
	}
	/**
	 * Set SharedDispositivePower
	 * @param int SharedDispositivePower
	 * @return int
	 */
	public function setSharedDispositivePower($_SharedDispositivePower)
	{
		return ($this->SharedDispositivePower = $_SharedDispositivePower);
	}
	/**
	 * Get SharedDispositivePower
	 * @return int
	 */
	public function getSharedDispositivePower()
	{
		return $this->SharedDispositivePower;
	}
	/**
	 * Set AggregateAmountBeneficiallyOwned
	 * @param double AggregateAmountBeneficiallyOwned
	 * @return double
	 */
	public function setAggregateAmountBeneficiallyOwned($_AggregateAmountBeneficiallyOwned)
	{
		return ($this->AggregateAmountBeneficiallyOwned = $_AggregateAmountBeneficiallyOwned);
	}
	/**
	 * Get AggregateAmountBeneficiallyOwned
	 * @return double
	 */
	public function getAggregateAmountBeneficiallyOwned()
	{
		return $this->AggregateAmountBeneficiallyOwned;
	}
	/**
	 * Set PercentOfClassOwned
	 * @param double PercentOfClassOwned
	 * @return double
	 */
	public function setPercentOfClassOwned($_PercentOfClassOwned)
	{
		return ($this->PercentOfClassOwned = $_PercentOfClassOwned);
	}
	/**
	 * Get PercentOfClassOwned
	 * @return double
	 */
	public function getPercentOfClassOwned()
	{
		return $this->PercentOfClassOwned;
	}
	/**
	 * Set TypeOfReportingPerson
	 * @param string TypeOfReportingPerson
	 * @return string
	 */
	public function setTypeOfReportingPerson($_TypeOfReportingPerson)
	{
		return ($this->TypeOfReportingPerson = $_TypeOfReportingPerson);
	}
	/**
	 * Get TypeOfReportingPerson
	 * @return string
	 */
	public function getTypeOfReportingPerson()
	{
		return $this->TypeOfReportingPerson;
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