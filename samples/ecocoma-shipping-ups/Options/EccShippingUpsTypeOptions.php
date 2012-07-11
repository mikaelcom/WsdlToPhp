<?php
/**
 * Class file for EccShippingUpsTypeOptions
 * @date 03/07/2012
 */
/**
 * Class EccShippingUpsTypeOptions
 * @date 03/07/2012
 */
class EccShippingUpsTypeOptions extends EccShippingUpsWsdlClass
{
	/**
	 * The RateChart
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $RateChart;
	/**
	 * The Container
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Container;
	/**
	 * The Residential
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Residential;
	/**
	 * The COD
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $COD;
	/**
	 * The HazardousMaterial
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $HazardousMaterial;
	/**
	 * The HandlingCharge
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $HandlingCharge;
	/**
	 * The CallTagservice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CallTagservice;
	/**
	 * The SaturdayDelivery
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SaturdayDelivery;
	/**
	 * The DeliveryConfirmationService
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DeliveryConfirmationService;
	/**
	 * The Height
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Height;
	/**
	 * The Width
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Width;
	/**
	 * The Length
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Length;
	/**
	 * The Mode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Mode;
	/**
	 * The Sort
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Sort;
	/**
	 * Constructor
	 * @param string RateChart
	 * @param string Container
	 * @param string Residential
	 * @param string COD
	 * @param string HazardousMaterial
	 * @param string HandlingCharge
	 * @param string CallTagservice
	 * @param string SaturdayDelivery
	 * @param string DeliveryConfirmationService
	 * @param string Height
	 * @param string Width
	 * @param string Length
	 * @param string Mode
	 * @param string Sort
	 * @return EccShippingUpsTypeOptions
	 */
	public function __construct($_RateChart = null,$_Container = null,$_Residential = null,$_COD = null,$_HazardousMaterial = null,$_HandlingCharge = null,$_CallTagservice = null,$_SaturdayDelivery = null,$_DeliveryConfirmationService = null,$_Height = null,$_Width = null,$_Length = null,$_Mode = null,$_Sort = null)
	{
		parent::__construct(array('RateChart'=>$_RateChart,'Container'=>$_Container,'Residential'=>$_Residential,'COD'=>$_COD,'HazardousMaterial'=>$_HazardousMaterial,'HandlingCharge'=>$_HandlingCharge,'CallTagservice'=>$_CallTagservice,'SaturdayDelivery'=>$_SaturdayDelivery,'DeliveryConfirmationService'=>$_DeliveryConfirmationService,'Height'=>$_Height,'Width'=>$_Width,'Length'=>$_Length,'Mode'=>$_Mode,'Sort'=>$_Sort));
	}
	/**
	 * Set RateChart
	 * @param string RateChart
	 * @return string
	 */
	public function setRateChart($_RateChart)
	{
		return ($this->RateChart = $_RateChart);
	}
	/**
	 * Get RateChart
	 * @return string
	 */
	public function getRateChart()
	{
		return $this->RateChart;
	}
	/**
	 * Set Container
	 * @param string Container
	 * @return string
	 */
	public function setContainer($_Container)
	{
		return ($this->Container = $_Container);
	}
	/**
	 * Get Container
	 * @return string
	 */
	public function getContainer()
	{
		return $this->Container;
	}
	/**
	 * Set Residential
	 * @param string Residential
	 * @return string
	 */
	public function setResidential($_Residential)
	{
		return ($this->Residential = $_Residential);
	}
	/**
	 * Get Residential
	 * @return string
	 */
	public function getResidential()
	{
		return $this->Residential;
	}
	/**
	 * Set COD
	 * @param string COD
	 * @return string
	 */
	public function setCOD($_COD)
	{
		return ($this->COD = $_COD);
	}
	/**
	 * Get COD
	 * @return string
	 */
	public function getCOD()
	{
		return $this->COD;
	}
	/**
	 * Set HazardousMaterial
	 * @param string HazardousMaterial
	 * @return string
	 */
	public function setHazardousMaterial($_HazardousMaterial)
	{
		return ($this->HazardousMaterial = $_HazardousMaterial);
	}
	/**
	 * Get HazardousMaterial
	 * @return string
	 */
	public function getHazardousMaterial()
	{
		return $this->HazardousMaterial;
	}
	/**
	 * Set HandlingCharge
	 * @param string HandlingCharge
	 * @return string
	 */
	public function setHandlingCharge($_HandlingCharge)
	{
		return ($this->HandlingCharge = $_HandlingCharge);
	}
	/**
	 * Get HandlingCharge
	 * @return string
	 */
	public function getHandlingCharge()
	{
		return $this->HandlingCharge;
	}
	/**
	 * Set CallTagservice
	 * @param string CallTagservice
	 * @return string
	 */
	public function setCallTagservice($_CallTagservice)
	{
		return ($this->CallTagservice = $_CallTagservice);
	}
	/**
	 * Get CallTagservice
	 * @return string
	 */
	public function getCallTagservice()
	{
		return $this->CallTagservice;
	}
	/**
	 * Set SaturdayDelivery
	 * @param string SaturdayDelivery
	 * @return string
	 */
	public function setSaturdayDelivery($_SaturdayDelivery)
	{
		return ($this->SaturdayDelivery = $_SaturdayDelivery);
	}
	/**
	 * Get SaturdayDelivery
	 * @return string
	 */
	public function getSaturdayDelivery()
	{
		return $this->SaturdayDelivery;
	}
	/**
	 * Set DeliveryConfirmationService
	 * @param string DeliveryConfirmationService
	 * @return string
	 */
	public function setDeliveryConfirmationService($_DeliveryConfirmationService)
	{
		return ($this->DeliveryConfirmationService = $_DeliveryConfirmationService);
	}
	/**
	 * Get DeliveryConfirmationService
	 * @return string
	 */
	public function getDeliveryConfirmationService()
	{
		return $this->DeliveryConfirmationService;
	}
	/**
	 * Set Height
	 * @param string Height
	 * @return string
	 */
	public function setHeight($_Height)
	{
		return ($this->Height = $_Height);
	}
	/**
	 * Get Height
	 * @return string
	 */
	public function getHeight()
	{
		return $this->Height;
	}
	/**
	 * Set Width
	 * @param string Width
	 * @return string
	 */
	public function setWidth($_Width)
	{
		return ($this->Width = $_Width);
	}
	/**
	 * Get Width
	 * @return string
	 */
	public function getWidth()
	{
		return $this->Width;
	}
	/**
	 * Set Length
	 * @param string Length
	 * @return string
	 */
	public function setLength($_Length)
	{
		return ($this->Length = $_Length);
	}
	/**
	 * Get Length
	 * @return string
	 */
	public function getLength()
	{
		return $this->Length;
	}
	/**
	 * Set Mode
	 * @param string Mode
	 * @return string
	 */
	public function setMode($_Mode)
	{
		return ($this->Mode = $_Mode);
	}
	/**
	 * Get Mode
	 * @return string
	 */
	public function getMode()
	{
		return $this->Mode;
	}
	/**
	 * Set Sort
	 * @param string Sort
	 * @return string
	 */
	public function setSort($_Sort)
	{
		return ($this->Sort = $_Sort);
	}
	/**
	 * Get Sort
	 * @return string
	 */
	public function getSort()
	{
		return $this->Sort;
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