<?php
/**
 * Class file for AmazonECommerceServiceTypeImage
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeImage
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeImage extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The URL
	 * @var string
	 */
	public $URL;
	/**
	 * The Height
	 * @var AmazonECommerceServiceTypeDecimalWithUnits
	 */
	public $Height;
	/**
	 * The Width
	 * @var AmazonECommerceServiceTypeDecimalWithUnits
	 */
	public $Width;
	/**
	 * The IsVerified
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $IsVerified;
	/**
	 * Constructor
	 * @param string URL
	 * @param AmazonECommerceServiceTypeDecimalWithUnits Height
	 * @param AmazonECommerceServiceTypeDecimalWithUnits Width
	 * @param string IsVerified
	 * @return AmazonECommerceServiceTypeImage
	 */
	public function __construct($_URL = null,$_Height = null,$_Width = null,$_IsVerified = null)
	{
		parent::__construct(array('URL'=>$_URL,'Height'=>$_Height,'Width'=>$_Width,'IsVerified'=>$_IsVerified));
	}
	/**
	 * Set URL
	 * @param string URL
	 * @return string
	 */
	public function setURL($_URL)
	{
		return ($this->URL = $_URL);
	}
	/**
	 * Get URL
	 * @return string
	 */
	public function getURL()
	{
		return $this->URL;
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
	 * Set IsVerified
	 * @param string IsVerified
	 * @return string
	 */
	public function setIsVerified($_IsVerified)
	{
		return ($this->IsVerified = $_IsVerified);
	}
	/**
	 * Get IsVerified
	 * @return string
	 */
	public function getIsVerified()
	{
		return $this->IsVerified;
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