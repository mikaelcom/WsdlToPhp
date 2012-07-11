<?php
/**
 * Class file for EbayTradingTypeGetDescriptionTemplatesRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetDescriptionTemplatesRequestType
 * Documentation : Retrieves Theme and Layout specifications for the display of an item's description.
 * @date 04/07/2012
 */
class EbayTradingTypeGetDescriptionTemplatesRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The CategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The category for which to retrieve templates. Enter any category ID, including Motors vehicle categories. This is ignored if you also send MotorVehicles.
	 * @var string
	 */
	public $CategoryID;
	/**
	 * The LastModifiedTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If specified, only those templates modified on or after the specified date are returned. If not specified, all templates are returned.
	 * @var dateTime
	 */
	public $LastModifiedTime;
	/**
	 * The MotorVehicles
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether to retrieve templates for motor vehicle categories for eBay Motors (site 100). If true, templates are returned for motor vehicle categories. If false, templates are returned for non-motor vehicle categories such as Parts and Accessories. If included as an input field (whether true or false), this overrides any value provided for CategoryID.
	 * @var boolean
	 */
	public $MotorVehicles;
	/**
	 * Constructor
	 * @param string CategoryID
	 * @param dateTime LastModifiedTime
	 * @param boolean MotorVehicles
	 * @return EbayTradingTypeGetDescriptionTemplatesRequestType
	 */
	public function __construct($_CategoryID = null,$_LastModifiedTime = null,$_MotorVehicles = null)
	{
		EbayTradingWsdlClass::__construct(array('CategoryID'=>$_CategoryID,'LastModifiedTime'=>$_LastModifiedTime,'MotorVehicles'=>$_MotorVehicles));
	}
	/**
	 * Set CategoryID
	 * @param string CategoryID
	 * @return string
	 */
	public function setCategoryID($_CategoryID)
	{
		return ($this->CategoryID = $_CategoryID);
	}
	/**
	 * Get CategoryID
	 * @return string
	 */
	public function getCategoryID()
	{
		return $this->CategoryID;
	}
	/**
	 * Set LastModifiedTime
	 * @param dateTime LastModifiedTime
	 * @return dateTime
	 */
	public function setLastModifiedTime($_LastModifiedTime)
	{
		return ($this->LastModifiedTime = $_LastModifiedTime);
	}
	/**
	 * Get LastModifiedTime
	 * @return dateTime
	 */
	public function getLastModifiedTime()
	{
		return $this->LastModifiedTime;
	}
	/**
	 * Set MotorVehicles
	 * @param boolean MotorVehicles
	 * @return boolean
	 */
	public function setMotorVehicles($_MotorVehicles)
	{
		return ($this->MotorVehicles = $_MotorVehicles);
	}
	/**
	 * Get MotorVehicles
	 * @return boolean
	 */
	public function getMotorVehicles()
	{
		return $this->MotorVehicles;
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