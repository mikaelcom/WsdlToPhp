<?php
/**
 * Class file for EbayTradingTypeGetAttributesCSResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetAttributesCSResponseType
 * Documentation : Returns XML that describes how to present Item Specifics to a seller and how to validate selected eBay attributes on the client before including them in an AddItem call or related calls. See the Developer's Guide for an overview of Item Specifics and details about the eBay attribute model. Also returns the current version of the meta-data system.
 * @date 04/07/2012
 */
class EbayTradingTypeGetAttributesCSResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The AttributeSystemVersion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Current version of the Item Specifics meta-data system for the site. This value changes each time changes are made to the meta-data. The current version value is not necessarily greater than the previous value. Therefore, when comparing versions, only compare whether the value has changed.
	 * @var string
	 */
	public $AttributeSystemVersion;
	/**
	 * The AttributeData
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A string containing a list of all the attributes that are applicable to the site (or characteristic sets in the request), along with related meta-data. The meta-data specifies all the possible values of each attribute, the logic for presenting attributes to a user, and rules for validating the user's selections. Individual elements are not described in the eBay schema format. For information about each element in the AttributeData string, see the attribute model documentation in the eBay Web Services guide (see links below).<br> <br> Because this is returned as a string, the XML markup elements are escaped with character entity references (e.g., &amp;lt;eBay&amp;gt;&amp;lt;Attributes&amp;gt; ...). See the appendices in the eBay Web Services guide for general information about string data types.
	 * @var string
	 */
	public $AttributeData;
	/**
	 * Constructor
	 * @param string AttributeSystemVersion
	 * @param string AttributeData
	 * @return EbayTradingTypeGetAttributesCSResponseType
	 */
	public function __construct($_AttributeSystemVersion = null,$_AttributeData = null)
	{
		EbayTradingWsdlClass::__construct(array('AttributeSystemVersion'=>$_AttributeSystemVersion,'AttributeData'=>$_AttributeData));
	}
	/**
	 * Set AttributeSystemVersion
	 * @param string AttributeSystemVersion
	 * @return string
	 */
	public function setAttributeSystemVersion($_AttributeSystemVersion)
	{
		return ($this->AttributeSystemVersion = $_AttributeSystemVersion);
	}
	/**
	 * Get AttributeSystemVersion
	 * @return string
	 */
	public function getAttributeSystemVersion()
	{
		return $this->AttributeSystemVersion;
	}
	/**
	 * Set AttributeData
	 * @param string AttributeData
	 * @return string
	 */
	public function setAttributeData($_AttributeData)
	{
		return ($this->AttributeData = $_AttributeData);
	}
	/**
	 * Get AttributeData
	 * @return string
	 */
	public function getAttributeData()
	{
		return $this->AttributeData;
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