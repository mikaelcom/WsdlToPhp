<?php
/**
 * Class file for AmazonECommerceServiceTypePackageDimensions
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypePackageDimensions
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypePackageDimensions extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The Height
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonECommerceServiceTypeDecimalWithUnits
	 */
	public $Height;
	/**
	 * The Length
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonECommerceServiceTypeDecimalWithUnits
	 */
	public $Length;
	/**
	 * The Weight
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonECommerceServiceTypeDecimalWithUnits
	 */
	public $Weight;
	/**
	 * The Width
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonECommerceServiceTypeDecimalWithUnits
	 */
	public $Width;
	/**
	 * Constructor
	 * @param AmazonECommerceServiceTypeDecimalWithUnits Height
	 * @param AmazonECommerceServiceTypeDecimalWithUnits Length
	 * @param AmazonECommerceServiceTypeDecimalWithUnits Weight
	 * @param AmazonECommerceServiceTypeDecimalWithUnits Width
	 * @return AmazonECommerceServiceTypePackageDimensions
	 */
	public function __construct($_Height = null,$_Length = null,$_Weight = null,$_Width = null)
	{
		parent::__construct(array('Height'=>$_Height,'Length'=>$_Length,'Weight'=>$_Weight,'Width'=>$_Width));
	}
	/**
	 * Set Height
	 * @param DecimalWithUnits Height
	 * @return DecimalWithUnits
	 */
	public function setHeight($_Height)
	{
		return ($this->Height = $_Height);
	}
	/**
	 * Get Height
	 * @return AmazonECommerceServiceTypeDecimalWithUnits
	 */
	public function getHeight()
	{
		return $this->Height;
	}
	/**
	 * Set Length
	 * @param DecimalWithUnits Length
	 * @return DecimalWithUnits
	 */
	public function setLength($_Length)
	{
		return ($this->Length = $_Length);
	}
	/**
	 * Get Length
	 * @return AmazonECommerceServiceTypeDecimalWithUnits
	 */
	public function getLength()
	{
		return $this->Length;
	}
	/**
	 * Set Weight
	 * @param DecimalWithUnits Weight
	 * @return DecimalWithUnits
	 */
	public function setWeight($_Weight)
	{
		return ($this->Weight = $_Weight);
	}
	/**
	 * Get Weight
	 * @return AmazonECommerceServiceTypeDecimalWithUnits
	 */
	public function getWeight()
	{
		return $this->Weight;
	}
	/**
	 * Set Width
	 * @param DecimalWithUnits Width
	 * @return DecimalWithUnits
	 */
	public function setWidth($_Width)
	{
		return ($this->Width = $_Width);
	}
	/**
	 * Get Width
	 * @return AmazonECommerceServiceTypeDecimalWithUnits
	 */
	public function getWidth()
	{
		return $this->Width;
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