<?php
/**
 * Class file for EbayTradingTypeDeleteSellingManagerTemplateResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDeleteSellingManagerTemplateResponseType
 * Documentation : Response for deleting a Selling Manager template.
 * @date 04/07/2012
 */
class EbayTradingTypeDeleteSellingManagerTemplateResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The DeletedSaleTemplateID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The unique identifier of the template.
	 * @var string
	 */
	public $DeletedSaleTemplateID;
	/**
	 * The DeletedSaleTemplateName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of the Selling Manager template.
	 * @var string
	 */
	public $DeletedSaleTemplateName;
	/**
	 * Constructor
	 * @param string DeletedSaleTemplateID
	 * @param string DeletedSaleTemplateName
	 * @return EbayTradingTypeDeleteSellingManagerTemplateResponseType
	 */
	public function __construct($_DeletedSaleTemplateID = null,$_DeletedSaleTemplateName = null)
	{
		EbayTradingWsdlClass::__construct(array('DeletedSaleTemplateID'=>$_DeletedSaleTemplateID,'DeletedSaleTemplateName'=>$_DeletedSaleTemplateName));
	}
	/**
	 * Set DeletedSaleTemplateID
	 * @param string DeletedSaleTemplateID
	 * @return string
	 */
	public function setDeletedSaleTemplateID($_DeletedSaleTemplateID)
	{
		return ($this->DeletedSaleTemplateID = $_DeletedSaleTemplateID);
	}
	/**
	 * Get DeletedSaleTemplateID
	 * @return string
	 */
	public function getDeletedSaleTemplateID()
	{
		return $this->DeletedSaleTemplateID;
	}
	/**
	 * Set DeletedSaleTemplateName
	 * @param string DeletedSaleTemplateName
	 * @return string
	 */
	public function setDeletedSaleTemplateName($_DeletedSaleTemplateName)
	{
		return ($this->DeletedSaleTemplateName = $_DeletedSaleTemplateName);
	}
	/**
	 * Get DeletedSaleTemplateName
	 * @return string
	 */
	public function getDeletedSaleTemplateName()
	{
		return $this->DeletedSaleTemplateName;
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