<?php
/**
 * Class file for MicrosoftSmDhTypeGetAllSensorsByPublisher
 * @date 05/07/2012
 */
/**
 * Class MicrosoftSmDhTypeGetAllSensorsByPublisher
 * @date 05/07/2012
 */
class MicrosoftSmDhTypeGetAllSensorsByPublisher extends MicrosoftSmDhWsdlClass
{
	/**
	 * The publisherName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $publisherName;
	/**
	 * The password
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $password;
	/**
	 * Constructor
	 * @param string publisherName
	 * @param string password
	 * @return MicrosoftSmDhTypeGetAllSensorsByPublisher
	 */
	public function __construct($_publisherName = null,$_password = null)
	{
		parent::__construct(array('publisherName'=>$_publisherName,'password'=>$_password));
	}
	/**
	 * Set publisherName
	 * @param string publisherName
	 * @return string
	 */
	public function setPublisherName($_publisherName)
	{
		return ($this->publisherName = $_publisherName);
	}
	/**
	 * Get publisherName
	 * @return string
	 */
	public function getPublisherName()
	{
		return $this->publisherName;
	}
	/**
	 * Set password
	 * @param string password
	 * @return string
	 */
	public function setPassword($_password)
	{
		return ($this->password = $_password);
	}
	/**
	 * Get password
	 * @return string
	 */
	public function getPassword()
	{
		return $this->password;
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