<?php
/**
 * Class file for XiSecurityTypeStockGrowthVariations
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeStockGrowthVariations
 * @date 08/07/2012
 */
class XiSecurityTypeStockGrowthVariations extends XiSecurityTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiSecurityTypeSecurity
	 */
	public $Security;
	/**
	 * The VariationType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiSecurityTypeVariationTypes
	 */
	public $VariationType;
	/**
	 * The Variations
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiSecurityTypeArrayOfVariation
	 */
	public $Variations;
	/**
	 * Constructor
	 * @param XiSecurityTypeSecurity Security
	 * @param XiSecurityTypeVariationTypes VariationType
	 * @param XiSecurityTypeArrayOfVariation Variations
	 * @return XiSecurityTypeStockGrowthVariations
	 */
	public function __construct($_Security = null,$_VariationType,$_Variations = null)
	{
		XiSecurityWsdlClass::__construct(array('Security'=>$_Security,'VariationType'=>$_VariationType,'Variations'=>new XiSecurityTypeArrayOfVariation($_Variations)));
	}
	/**
	 * Set Security
	 * @param Security Security
	 * @return Security
	 */
	public function setSecurity($_Security)
	{
		return ($this->Security = $_Security);
	}
	/**
	 * Get Security
	 * @return XiSecurityTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set VariationType
	 * @param VariationTypes VariationType
	 * @return VariationTypes
	 */
	public function setVariationType($_VariationType)
	{
		return ($this->VariationType = XiSecurityTypeVariationTypes::valueIsValid($_VariationType)?$_VariationType:null);
	}
	/**
	 * Get VariationType
	 * @return XiSecurityTypeVariationTypes
	 */
	public function getVariationType()
	{
		return $this->VariationType;
	}
	/**
	 * Set Variations
	 * @param ArrayOfVariation Variations
	 * @return ArrayOfVariation
	 */
	public function setVariations($_Variations)
	{
		return ($this->Variations = $_Variations);
	}
	/**
	 * Get Variations
	 * @return XiSecurityTypeArrayOfVariation
	 */
	public function getVariations()
	{
		return $this->Variations;
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