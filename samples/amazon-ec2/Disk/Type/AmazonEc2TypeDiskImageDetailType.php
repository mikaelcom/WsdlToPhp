<?php
/**
 * Class file for AmazonEc2TypeDiskImageDetailType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDiskImageDetailType
 * @date 10/07/2012
 */
class AmazonEc2TypeDiskImageDetailType extends AmazonEc2WsdlClass
{
	/**
	 * The format
	 * @var string
	 */
	public $format;
	/**
	 * The bytes
	 * @var long
	 */
	public $bytes;
	/**
	 * The importManifestUrl
	 * @var string
	 */
	public $importManifestUrl;
	/**
	 * Constructor
	 * @param string format
	 * @param long bytes
	 * @param string importManifestUrl
	 * @return AmazonEc2TypeDiskImageDetailType
	 */
	public function __construct($_format = null,$_bytes = null,$_importManifestUrl = null)
	{
		parent::__construct(array('format'=>$_format,'bytes'=>$_bytes,'importManifestUrl'=>$_importManifestUrl));
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
	 * Set bytes
	 * @param long bytes
	 * @return long
	 */
	public function setBytes($_bytes)
	{
		return ($this->bytes = $_bytes);
	}
	/**
	 * Get bytes
	 * @return long
	 */
	public function getBytes()
	{
		return $this->bytes;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>