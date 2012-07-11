<?php
/**
 * Class file for OvhTypeTelephonyPlugAndPhoneInfoReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyPlugAndPhoneInfoReturn
 * @date 02/07/2012
 */
class OvhTypeTelephonyPlugAndPhoneInfoReturn extends OvhWsdlClass
{
	/**
	 * The brand
	 * @var string
	 */
	public $brand;
	/**
	 * The protocol
	 * @var string
	 */
	public $protocol;
	/**
	 * The mac
	 * @var string
	 */
	public $mac;
	/**
	 * The gfKeyCount
	 * @var int
	 */
	public $gfKeyCount;
	/**
	 * The skin
	 * @var string
	 */
	public $skin;
	/**
	 * Constructor
	 * @param string brand
	 * @param string protocol
	 * @param string mac
	 * @param int gfKeyCount
	 * @param string skin
	 * @return OvhTypeTelephonyPlugAndPhoneInfoReturn
	 */
	public function __construct($_brand = null,$_protocol = null,$_mac = null,$_gfKeyCount = null,$_skin = null)
	{
		parent::__construct(array('brand'=>$_brand,'protocol'=>$_protocol,'mac'=>$_mac,'gfKeyCount'=>$_gfKeyCount,'skin'=>$_skin));
	}
	/**
	 * Set brand
	 * @param string brand
	 * @return string
	 */
	public function setBrand($_brand)
	{
		return ($this->brand = $_brand);
	}
	/**
	 * Get brand
	 * @return string
	 */
	public function getBrand()
	{
		return $this->brand;
	}
	/**
	 * Set protocol
	 * @param string protocol
	 * @return string
	 */
	public function setProtocol($_protocol)
	{
		return ($this->protocol = $_protocol);
	}
	/**
	 * Get protocol
	 * @return string
	 */
	public function getProtocol()
	{
		return $this->protocol;
	}
	/**
	 * Set mac
	 * @param string mac
	 * @return string
	 */
	public function setMac($_mac)
	{
		return ($this->mac = $_mac);
	}
	/**
	 * Get mac
	 * @return string
	 */
	public function getMac()
	{
		return $this->mac;
	}
	/**
	 * Set gfKeyCount
	 * @param int gfKeyCount
	 * @return int
	 */
	public function setGfKeyCount($_gfKeyCount)
	{
		return ($this->gfKeyCount = $_gfKeyCount);
	}
	/**
	 * Get gfKeyCount
	 * @return int
	 */
	public function getGfKeyCount()
	{
		return $this->gfKeyCount;
	}
	/**
	 * Set skin
	 * @param string skin
	 * @return string
	 */
	public function setSkin($_skin)
	{
		return ($this->skin = $_skin);
	}
	/**
	 * Get skin
	 * @return string
	 */
	public function getSkin()
	{
		return $this->skin;
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