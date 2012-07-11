<?php
/**
 * Class file for EbayTradingTypeSaveItemToSellingManagerTemplateResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSaveItemToSellingManagerTemplateResponseType
 * Documentation : Returns the status of save to template operation.
 * @date 04/07/2012
 */
class EbayTradingTypeSaveItemToSellingManagerTemplateResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The TemplateID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Template ID that is newly created.
	 * @var long
	 */
	public $TemplateID;
	/**
	 * Constructor
	 * @param long TemplateID
	 * @return EbayTradingTypeSaveItemToSellingManagerTemplateResponseType
	 */
	public function __construct($_TemplateID = null)
	{
		EbayTradingWsdlClass::__construct(array('TemplateID'=>$_TemplateID));
	}
	/**
	 * Set TemplateID
	 * @param long TemplateID
	 * @return long
	 */
	public function setTemplateID($_TemplateID)
	{
		return ($this->TemplateID = $_TemplateID);
	}
	/**
	 * Get TemplateID
	 * @return long
	 */
	public function getTemplateID()
	{
		return $this->TemplateID;
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