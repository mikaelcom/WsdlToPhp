<?php
/**
 * Class file for EccShippingDhlTypeShipping
 * @date 03/07/2012
 */
/**
 * Class EccShippingDhlTypeShipping
 * @date 03/07/2012
 */
class EccShippingDhlTypeShipping extends EccShippingDhlWsdlClass
{
	/**
	 * The Package
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccShippingDhlTypeArrayOfPostage
	 */
	public $Package;
	/**
	 * Constructor
	 * @param EccShippingDhlTypeArrayOfPostage Package
	 * @return EccShippingDhlTypeShipping
	 */
	public function __construct($_Package = null)
	{
		parent::__construct(array('Package'=>new EccShippingDhlTypeArrayOfPostage($_Package)));
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
	 * @return EccShippingDhlTypeArrayOfPostage
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