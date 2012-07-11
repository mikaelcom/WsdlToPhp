<?php
/**
 * Class file for AmazonEc2TypeUserDataType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeUserDataType
 * @date 10/07/2012
 */
class AmazonEc2TypeUserDataType extends AmazonEc2WsdlClass
{
	/**
	 * The data
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $data;
	/**
	 * The version
	 * Meta informations :
	 * 	- use : required
	 * 	- fixed : 1.0
	 * @var string
	 */
	public $version;
	/**
	 * The encoding
	 * Meta informations :
	 * 	- use : required
	 * 	- fixed : base64
	 * @var string
	 */
	public $encoding;
	/**
	 * Constructor
	 * @param string data
	 * @param string version
	 * @param string encoding
	 * @return AmazonEc2TypeUserDataType
	 */
	public function __construct($_data = null,$_version = null,$_encoding = null)
	{
		parent::__construct(array('data'=>$_data,'version'=>$_version,'encoding'=>$_encoding));
	}
	/**
	 * Set data
	 * @param string data
	 * @return string
	 */
	public function setData($_data)
	{
		return ($this->data = $_data);
	}
	/**
	 * Get data
	 * @return string
	 */
	public function getData()
	{
		return $this->data;
	}
	/**
	 * Set version
	 * @param string version
	 * @return string
	 */
	public function setVersion($_version)
	{
		return ($this->version = $_version);
	}
	/**
	 * Get version
	 * @return string
	 */
	public function getVersion()
	{
		return $this->version;
	}
	/**
	 * Set encoding
	 * @param string encoding
	 * @return string
	 */
	public function setEncoding($_encoding)
	{
		return ($this->encoding = $_encoding);
	}
	/**
	 * Get encoding
	 * @return string
	 */
	public function getEncoding()
	{
		return $this->encoding;
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