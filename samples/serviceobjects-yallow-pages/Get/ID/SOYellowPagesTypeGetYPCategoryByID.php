<?php
/**
 * Class file for SOYellowPagesTypeGetYPCategoryByID
 * @date 08/07/2012
 */
/**
 * Class SOYellowPagesTypeGetYPCategoryByID
 * @date 08/07/2012
 */
class SOYellowPagesTypeGetYPCategoryByID extends SOYellowPagesWsdlClass
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
	 * @param string LicenseKey
	 * @return SOYellowPagesTypeGetYPCategoryByID
	 */
	public function __construct($_CategoryID,$_LicenseKey = null)
	{
		parent::__construct(array('CategoryID'=>$_CategoryID,'LicenseKey'=>$_LicenseKey));
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