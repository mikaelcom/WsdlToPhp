<?php
/**
 * Class file for XiFundDataTypeInsuranceClassification
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeInsuranceClassification
 * @date 08/07/2012
 */
class XiFundDataTypeInsuranceClassification extends XiFundDataWsdlClass
{
	/**
	 * The VariableAnnuityContracts
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $VariableAnnuityContracts;
	/**
	 * The ScheduledPremiumVariableLiveContracts
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $ScheduledPremiumVariableLiveContracts;
	/**
	 * The FlexiblePremiumVariableLiveContracts
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $FlexiblePremiumVariableLiveContracts;
	/**
	 * The OtherTypesOfInsuranceProducts
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $OtherTypesOfInsuranceProducts;
	/**
	 * Constructor
	 * @param boolean VariableAnnuityContracts
	 * @param boolean ScheduledPremiumVariableLiveContracts
	 * @param boolean FlexiblePremiumVariableLiveContracts
	 * @param boolean OtherTypesOfInsuranceProducts
	 * @return XiFundDataTypeInsuranceClassification
	 */
	public function __construct($_VariableAnnuityContracts,$_ScheduledPremiumVariableLiveContracts,$_FlexiblePremiumVariableLiveContracts,$_OtherTypesOfInsuranceProducts)
	{
		parent::__construct(array('VariableAnnuityContracts'=>$_VariableAnnuityContracts,'ScheduledPremiumVariableLiveContracts'=>$_ScheduledPremiumVariableLiveContracts,'FlexiblePremiumVariableLiveContracts'=>$_FlexiblePremiumVariableLiveContracts,'OtherTypesOfInsuranceProducts'=>$_OtherTypesOfInsuranceProducts));
	}
	/**
	 * Set VariableAnnuityContracts
	 * @param boolean VariableAnnuityContracts
	 * @return boolean
	 */
	public function setVariableAnnuityContracts($_VariableAnnuityContracts)
	{
		return ($this->VariableAnnuityContracts = $_VariableAnnuityContracts);
	}
	/**
	 * Get VariableAnnuityContracts
	 * @return boolean
	 */
	public function getVariableAnnuityContracts()
	{
		return $this->VariableAnnuityContracts;
	}
	/**
	 * Set ScheduledPremiumVariableLiveContracts
	 * @param boolean ScheduledPremiumVariableLiveContracts
	 * @return boolean
	 */
	public function setScheduledPremiumVariableLiveContracts($_ScheduledPremiumVariableLiveContracts)
	{
		return ($this->ScheduledPremiumVariableLiveContracts = $_ScheduledPremiumVariableLiveContracts);
	}
	/**
	 * Get ScheduledPremiumVariableLiveContracts
	 * @return boolean
	 */
	public function getScheduledPremiumVariableLiveContracts()
	{
		return $this->ScheduledPremiumVariableLiveContracts;
	}
	/**
	 * Set FlexiblePremiumVariableLiveContracts
	 * @param boolean FlexiblePremiumVariableLiveContracts
	 * @return boolean
	 */
	public function setFlexiblePremiumVariableLiveContracts($_FlexiblePremiumVariableLiveContracts)
	{
		return ($this->FlexiblePremiumVariableLiveContracts = $_FlexiblePremiumVariableLiveContracts);
	}
	/**
	 * Get FlexiblePremiumVariableLiveContracts
	 * @return boolean
	 */
	public function getFlexiblePremiumVariableLiveContracts()
	{
		return $this->FlexiblePremiumVariableLiveContracts;
	}
	/**
	 * Set OtherTypesOfInsuranceProducts
	 * @param boolean OtherTypesOfInsuranceProducts
	 * @return boolean
	 */
	public function setOtherTypesOfInsuranceProducts($_OtherTypesOfInsuranceProducts)
	{
		return ($this->OtherTypesOfInsuranceProducts = $_OtherTypesOfInsuranceProducts);
	}
	/**
	 * Get OtherTypesOfInsuranceProducts
	 * @return boolean
	 */
	public function getOtherTypesOfInsuranceProducts()
	{
		return $this->OtherTypesOfInsuranceProducts;
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