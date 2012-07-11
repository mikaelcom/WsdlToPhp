<?php
/**
 * Class file for EccShippingUspsTypeShipping
 * @date 03/07/2012
 */
/**
 * Class EccShippingUspsTypeShipping
 * @date 03/07/2012
 */
class EccShippingUspsTypeShipping extends EccShippingUspsWsdlClass
{
	/**
	 * The Package
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccShippingUspsTypeArrayOfPostage
	 */
	public $Package;
	/**
	 * Constructor
	 * @param EccShippingUspsTypeArrayOfPostage Package
	 * @return EccShippingUspsTypeShipping
	 */
	public function __construct($_Package = null)
	{
		parent::__construct(array('Package'=>new EccShippingUspsTypeArrayOfPostage($_Package)));
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
	 * @return EccShippingUspsTypeArrayOfPostage
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