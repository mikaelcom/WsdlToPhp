<?php
/**
 * Class file for AmazonAlexaTypeImages
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeImages
 * @date 10/07/2012
 */
class AmazonAlexaTypeImages extends AmazonAlexaWsdlClass
{
	/**
	 * The Image
	 * @var token
	 */
	public $Image;
	/**
	 * Constructor
	 * @param token Image
	 * @return AmazonAlexaTypeImages
	 */
	public function __construct($_Image = null)
	{
		parent::__construct(array('Image'=>$_Image));
	}
	/**
	 * Set Image
	 * @param token Image
	 * @return token
	 */
	public function setImage($_Image)
	{
		return ($this->Image = $_Image);
	}
	/**
	 * Get Image
	 * @return token
	 */
	public function getImage()
	{
		return $this->Image;
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