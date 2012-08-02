<?php
/**
 * Class file for DirectSmileTypePlaceOrderAuth
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypePlaceOrderAuth
 * @date 02/08/2012
 */
class DirectSmileTypePlaceOrderAuth extends DirectSmileWsdlClass
{
	/**
	 * The AuthenticationCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AuthenticationCode;
	/**
	 * The ImagesXML
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ImagesXML;
	/**
	 * Constructor
	 * @param string AuthenticationCode
	 * @param string ImagesXML
	 * @return DirectSmileTypePlaceOrderAuth
	 */
	public function __construct($_AuthenticationCode = null,$_ImagesXML = null)
	{
		parent::__construct(array('AuthenticationCode'=>$_AuthenticationCode,'ImagesXML'=>$_ImagesXML));
	}
	/**
	 * Set AuthenticationCode
	 * @param string AuthenticationCode
	 * @return string
	 */
	public function setAuthenticationCode($_AuthenticationCode)
	{
		return ($this->AuthenticationCode = $_AuthenticationCode);
	}
	/**
	 * Get AuthenticationCode
	 * @return string
	 */
	public function getAuthenticationCode()
	{
		return $this->AuthenticationCode;
	}
	/**
	 * Set ImagesXML
	 * @param string ImagesXML
	 * @return string
	 */
	public function setImagesXML($_ImagesXML)
	{
		return ($this->ImagesXML = $_ImagesXML);
	}
	/**
	 * Get ImagesXML
	 * @return string
	 */
	public function getImagesXML()
	{
		return $this->ImagesXML;
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