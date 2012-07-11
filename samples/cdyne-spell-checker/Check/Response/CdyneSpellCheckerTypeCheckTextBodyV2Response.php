<?php
/**
 * Class file for CdyneSpellCheckerTypeCheckTextBodyV2Response
 * @date 03/07/2012
 */
/**
 * Class CdyneSpellCheckerTypeCheckTextBodyV2Response
 * @date 03/07/2012
 */
class CdyneSpellCheckerTypeCheckTextBodyV2Response extends CdyneSpellCheckerWsdlClass
{
	/**
	 * The DocumentSummary
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- nillable : true
	 * @var CdyneSpellCheckerTypeDocumentSummary
	 */
	public $DocumentSummary;
	/**
	 * Constructor
	 * @param CdyneSpellCheckerTypeDocumentSummary DocumentSummary
	 * @return CdyneSpellCheckerTypeCheckTextBodyV2Response
	 */
	public function __construct($_DocumentSummary)
	{
		parent::__construct(array('DocumentSummary'=>$_DocumentSummary));
	}
	/**
	 * Set DocumentSummary
	 * @param DocumentSummary DocumentSummary
	 * @return DocumentSummary
	 */
	public function setDocumentSummary($_DocumentSummary)
	{
		return ($this->DocumentSummary = $_DocumentSummary);
	}
	/**
	 * Get DocumentSummary
	 * @return CdyneSpellCheckerTypeDocumentSummary
	 */
	public function getDocumentSummary()
	{
		return $this->DocumentSummary;
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