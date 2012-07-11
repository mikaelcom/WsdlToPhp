<?php
/**
 * Class file for EccShippingUpsTypeShipping
 * @date 03/07/2012
 */
/**
 * Class EccShippingUpsTypeShipping
 * @date 03/07/2012
 */
class EccShippingUpsTypeShipping extends EccShippingUpsWsdlClass
{
	/**
	 * The Package
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccShippingUpsTypeArrayOfPostage
	 */
	public $Package;
	/**
	 * Constructor
	 * @param EccShippingUpsTypeArrayOfPostage Package
	 * @return EccShippingUpsTypeShipping
	 */
	public function __construct($_Package = null)
	{
		parent::__construct(array('Package'=>new EccShippingUpsTypeArrayOfPostage($_Package)));
	}
	/**
	 * Set Package
	 * @param ArrayOfPostage Package
	 * @return ArrayOfPostage
	 */
	public function setPackage($_Package)
	{
		return ($this->Package = $_Package);
	}
	/**
	 * Get Package
	 * @return EccShippingUpsTypeArrayOfPostage
	 */
	public function getPackage()
	{
		return $this->Package;
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