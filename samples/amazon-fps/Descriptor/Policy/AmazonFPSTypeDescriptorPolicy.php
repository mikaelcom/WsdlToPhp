<?php
/**
 * Class file for AmazonFPSTypeDescriptorPolicy
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeDescriptorPolicy
 * @date 10/07/2012
 */
class AmazonFPSTypeDescriptorPolicy extends AmazonFPSWsdlClass
{
	/**
	 * The SoftDescriptorType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypeSoftDescriptorType
	 */
	public $SoftDescriptorType;
	/**
	 * The CSOwner
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypeCSOwner
	 */
	public $CSOwner;
	/**
	 * Constructor
	 * @param AmazonFPSTypeSoftDescriptorType SoftDescriptorType
	 * @param AmazonFPSTypeCSOwner CSOwner
	 * @return AmazonFPSTypeDescriptorPolicy
	 */
	public function __construct($_SoftDescriptorType = null,$_CSOwner = null)
	{
		parent::__construct(array('SoftDescriptorType'=>$_SoftDescriptorType,'CSOwner'=>$_CSOwner));
	}
	/**
	 * Set SoftDescriptorType
	 * @param SoftDescriptorType SoftDescriptorType
	 * @return SoftDescriptorType
	 */
	public function setSoftDescriptorType($_SoftDescriptorType)
	{
		return ($this->SoftDescriptorType = AmazonFPSTypeSoftDescriptorType::valueIsValid($_SoftDescriptorType)?$_SoftDescriptorType:null);
	}
	/**
	 * Get SoftDescriptorType
	 * @return AmazonFPSTypeSoftDescriptorType
	 */
	public function getSoftDescriptorType()
	{
		return $this->SoftDescriptorType;
	}
	/**
	 * Set CSOwner
	 * @param CSOwner CSOwner
	 * @return CSOwner
	 */
	public function setCSOwner($_CSOwner)
	{
		return ($this->CSOwner = AmazonFPSTypeCSOwner::valueIsValid($_CSOwner)?$_CSOwner:null);
	}
	/**
	 * Get CSOwner
	 * @return AmazonFPSTypeCSOwner
	 */
	public function getCSOwner()
	{
		return $this->CSOwner;
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