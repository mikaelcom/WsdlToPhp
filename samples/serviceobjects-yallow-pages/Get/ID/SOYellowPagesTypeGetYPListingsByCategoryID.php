<?php
/**
 * Class file for SOYellowPagesTypeGetYPListingsByCategoryID
 * @date 08/07/2012
 */
/**
 * Class SOYellowPagesTypeGetYPListingsByCategoryID
 * @date 08/07/2012
 */
class SOYellowPagesTypeGetYPListingsByCategoryID extends SOYellowPagesWsdlClass
{
	/**
	 * The CategoryID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $CategoryID;
	/**
	 * The PostalCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PostalCode;
	/**
	 * The Radius
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Radius;
	/**
	 * The LicenseKey
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LicenseKey;
	/**
	 * Constructor
	 * @param int CategoryID
	 * @param string PostalCode
	 * @param int Radius
	 * @param string LicenseKey
	 * @return SOYellowPagesTypeGetYPListingsByCategoryID
	 */
	public function __construct($_CategoryID,$_PostalCode = null,$_Radius,$_LicenseKey = null)
	{
		parent::__construct(array('CategoryID'=>$_CategoryID,'PostalCode'=>$_PostalCode,'Radius'=>$_Radius,'LicenseKey'=>$_LicenseKey));
	}
	/**
	 * Set CategoryID
	 * @param int CategoryID
	 * @return int
	 */
	public function setCategoryID($_CategoryID)
	{
		return ($this->CategoryID = $_CategoryID);
	}
	/**
	 * Get CategoryID
	 * @return int
	 */
	public function getCategoryID()
	{
		return $this->CategoryID;
	}
	/**
	 * Set PostalCode
	 * @param string PostalCode
	 * @return string
	 */
	public function setPostalCode($_PostalCode)
	{
		return ($this->PostalCode = $_PostalCode);
	}
	/**
	 * Get PostalCode
	 * @return string
	 */
	public function getPostalCode()
	{
		return $this->PostalCode;
	}
	/**
	 * Set Radius
	 * @param int Radius
	 * @return int
	 */
	public function setRadius($_Radius)
	{
		return ($this->Radius = $_Radius);
	}
	/**
	 * Get Radius
	 * @return int
	 */
	public function getRadius()
	{
		return $this->Radius;
	}
	/**
	 * Set LicenseKey
	 * @param string LicenseKey
	 * @return string
	 */
	public function setLicenseKey($_LicenseKey)
	{
		return ($this->LicenseKey = $_LicenseKey);
	}
	/**
	 * Get LicenseKey
	 * @return string
	 */
	public function getLicenseKey()
	{
		return $this->LicenseKey;
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