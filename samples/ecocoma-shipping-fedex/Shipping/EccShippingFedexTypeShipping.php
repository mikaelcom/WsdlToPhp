<?php
/**
 * Class file for EccShippingFedexTypeShipping
 * @date 03/07/2012
 */
/**
 * Class EccShippingFedexTypeShipping
 * @date 03/07/2012
 */
class EccShippingFedexTypeShipping extends EccShippingFedexWsdlClass
{
	/**
	 * The Package
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccShippingFedexTypeArrayOfPostage
	 */
	public $Package;
	/**
	 * Constructor
	 * @param EccShippingFedexTypeArrayOfPostage Package
	 * @return EccShippingFedexTypeShipping
	 */
	public function __construct($_Package = null)
	{
		parent::__construct(array('Package'=>new EccShippingFedexTypeArrayOfPostage($_Package)));
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
	 * @return EccShippingFedexTypeArrayOfPostage
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