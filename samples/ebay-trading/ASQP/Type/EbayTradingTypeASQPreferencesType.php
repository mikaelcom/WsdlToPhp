<?php
/**
 * Class file for EbayTradingTypeASQPreferencesType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeASQPreferencesType
 * Documentation : Enables a seller to add custom Ask Seller a Question (ASQ) subjects to display on the seller's Ask a Question page, or reset the custom subjects to the default values.
 * @date 04/07/2012
 */
class EbayTradingTypeASQPreferencesType extends EbayTradingWsdlClass
{
	/**
	 * The ResetDefaultSubjects
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Used to reset custom subjects to their default values. For SetMessagePreferences, either ResetDefaultSubjects or Subject is required in the request, but not both.
	 * @var boolean
	 */
	public $ResetDefaultSubjects;
	/**
	 * The Subject
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains the ASQ subjects to display on the seller's Ask a Question page, with one subject per Subject node up to a maximum of nine. The tenth subject, "General question about this item," cannot be edited. An error wil be returned if subjects are duplicated. <br><br> For SetMessagePreferences, either ResetDefaultSubjects or Subject is required in the request, but not both. Subjects are displayed on the ASQ drop-down list in same order as the request. <br><br> Note that the default ASQ subjects will display in the site's language if retrieved from a site other than the seller's own. For example, if if a US seller sells on the DE and the FR sites, the default subjects will display in German and French respectively. However, if the seller adds custom questions, all questions will display only in the seller's language. In the example case, FR and DE buyers would see custom subjects in English only. Use ResetDefaultSubjects to restore the default subjects and the default language display behavior.
	 * @var string
	 */
	public $Subject;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param boolean ResetDefaultSubjects
	 * @param string Subject
	 * @param DOMDocument any
	 * @return EbayTradingTypeASQPreferencesType
	 */
	public function __construct($_ResetDefaultSubjects = null,$_Subject = null,$_any = null)
	{
		parent::__construct(array('ResetDefaultSubjects'=>$_ResetDefaultSubjects,'Subject'=>$_Subject,'any'=>$_any));
	}
	/**
	 * Set ResetDefaultSubjects
	 * @param boolean ResetDefaultSubjects
	 * @return boolean
	 */
	public function setResetDefaultSubjects($_ResetDefaultSubjects)
	{
		return ($this->ResetDefaultSubjects = $_ResetDefaultSubjects);
	}
	/**
	 * Get ResetDefaultSubjects
	 * @return boolean
	 */
	public function getResetDefaultSubjects()
	{
		return $this->ResetDefaultSubjects;
	}
	/**
	 * Set Subject
	 * @param string Subject
	 * @return string
	 */
	public function setSubject($_Subject)
	{
		return ($this->Subject = $_Subject);
	}
	/**
	 * Get Subject
	 * @return string
	 */
	public function getSubject()
	{
		return $this->Subject;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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