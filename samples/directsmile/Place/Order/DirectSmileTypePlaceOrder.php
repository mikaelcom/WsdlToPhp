<?php
/**
 * Class file for DirectSmileTypePlaceOrder
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypePlaceOrder
 * @date 02/08/2012
 */
class DirectSmileTypePlaceOrder extends DirectSmileWsdlClass
{
	/**
	 * The SessionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SessionID;
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
	 * @param string SessionID
	 * @param string ImagesXML
	 * @return DirectSmileTypePlaceOrder
	 */
	public function __construct($_SessionID = null,$_ImagesXML = null)
	{
		parent::__construct(array('SessionID'=>$_SessionID,'ImagesXML'=>$_ImagesXML));
	}
	/**
	 * Set SessionID
	 * @param string SessionID
	 * @return string
	 */
	public function setSessionID($_SessionID)
	{
		return ($this->SessionID = $_SessionID);
	}
	/**
	 * Get SessionID
	 * @return string
	 */
	public function getSessionID()
	{
		return $this->SessionID;
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