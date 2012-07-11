<?php
/**
 * Class file for EbayTradingTypeCategoryGroupType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCategoryGroupType
 * Documentation : Type defining the <b>CategoryGroup</b> container, which defines the category group to which the corresponding Business Policies profile will be applied, and a flag that indicates whether or not that Business Policies profile is the default for that category group. <br><br> <span class="tablenote"><strong>Note:</strong> Business Policies are not yet available for use on the eBay platform. </span>
 * @date 04/07/2012
 */
class EbayTradingTypeCategoryGroupType extends EbayTradingWsdlClass
{
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Defines the name of the category group tied to a Business Policies profile. Valid values are ALL (referring to all non-motor vehicle category groups) or MOTORS_VEHICLE (referring to only motor vehicle category groups). <br><br> The <b>CategoryGroup</b> container is only returned in <b>GetUserPreferences</b> if the <b>ShowSellerProfilePreferences</b> field is included in the request and set to 'true'. <br><br> <span class="tablenote"><strong>Note:</strong> Business Policies are not yet available for use on the eBay platform. </span>
	 * @var string
	 */
	public $Name;
	/**
	 * The IsDefault
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Identifies that the corresponding Business Policies profile is the default for the category group. <br><br> The <b>CategoryGroup</b> container is only returned in <b>GetUserPreferences</b> if the <b>ShowSellerProfilePreferences</b> field is included in the request and set to 'true'. <br><br> <span class="tablenote"><strong>Note:</strong> Business Policies are not yet available for use on the eBay platform. </span>
	 * @var boolean
	 */
	public $IsDefault;
	/**
	 * Constructor
	 * @param string Name
	 * @param boolean IsDefault
	 * @return EbayTradingTypeCategoryGroupType
	 */
	public function __construct($_Name = null,$_IsDefault = null)
	{
		parent::__construct(array('Name'=>$_Name,'IsDefault'=>$_IsDefault));
	}
	/**
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set IsDefault
	 * @param boolean IsDefault
	 * @return boolean
	 */
	public function setIsDefault($_IsDefault)
	{
		return ($this->IsDefault = $_IsDefault);
	}
	/**
	 * Get IsDefault
	 * @return boolean
	 */
	public function getIsDefault()
	{
		return $this->IsDefault;
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