<?php
/**
 * Class file for AmazonEc2TypeDiskImageDescriptionType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDiskImageDescriptionType
 * @date 10/07/2012
 */
class AmazonEc2TypeDiskImageDescriptionType extends AmazonEc2WsdlClass
{
	/**
	 * The format
	 * @var string
	 */
	public $format;
	/**
	 * The size
	 * @var long
	 */
	public $size;
	/**
	 * The importManifestUrl
	 * @var string
	 */
	public $importManifestUrl;
	/**
	 * The checksum
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $checksum;
	/**
	 * Constructor
	 * @param string format
	 * @param long size
	 * @param string importManifestUrl
	 * @param string checksum
	 * @return AmazonEc2TypeDiskImageDescriptionType
	 */
	public function __construct($_format = null,$_size = null,$_importManifestUrl = null,$_checksum = null)
	{
		parent::__construct(array('format'=>$_format,'size'=>$_size,'importManifestUrl'=>$_importManifestUrl,'checksum'=>$_checksum));
	}
	/**
	 * Set format
	 * @param string format
	 * @return string
	 */
	public function setFormat($_format)
	{
		return ($this->format = $_format);
	}
	/**
	 * Get format
	 * @return string
	 */
	public function getFormat()
	{
		return $this->format;
	}
	/**
	 * Set size
	 * @param long size
	 * @return long
	 */
	public function setSize($_size)
	{
		return ($this->size = $_size);
	}
	/**
	 * Get size
	 * @return long
	 */
	public function getSize()
	{
		return $this->size;
	}
	/**
	 * Set importManifestUrl
	 * @param string importManifestUrl
	 * @return string
	 */
	public function setImportManifestUrl($_importManifestUrl)
	{
		return ($this->importManifestUrl = $_importManifestUrl);
	}
	/**
	 * Get importManifestUrl
	 * @return string
	 */
	public function getImportManifestUrl()
	{
		return $this->importManifestUrl;
	}
	/**
	 * Set checksum
	 * @param string checksum
	 * @return string
	 */
	public function setChecksum($_checksum)
	{
		return ($this->checksum = $_checksum);
	}
	/**
	 * Get checksum
	 * @return string
	 */
	public function getChecksum()
	{
		return $this->checksum;
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