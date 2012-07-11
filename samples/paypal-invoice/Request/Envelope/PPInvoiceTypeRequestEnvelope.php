<?php
/**
 * Class file for PPInvoiceTypeRequestEnvelope
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceTypeRequestEnvelope
 * Documentation : This specifies the list of parameters with every request to the service.
 * @date 02/07/2012
 */
class PPInvoiceTypeRequestEnvelope extends PPInvoiceWsdlClass
{
	/**
	 * The detailLevel
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This specifies the required detail level that is needed by a client application pertaining to a particular data component (e.g., Item, Transaction, etc.). The detail level is specified in the DetailLevelCodeType which has all the enumerated values of the detail level for each component.
	 * @var PPInvoiceTypeDetailLevelCode
	 */
	public $detailLevel;
	/**
	 * The errorLanguage
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- default : en_US
	 * 	- documentation : This should be the standard RFC 3066 language identification tag, e.g., en_US.
	 * @var string
	 */
	public $errorLanguage;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param PPInvoiceTypeDetailLevelCode detailLevel
	 * @param string errorLanguage
	 * @param DOMDocument any
	 * @return PPInvoiceTypeRequestEnvelope
	 */
	public function __construct($_detailLevel = null,$_errorLanguage = 'en_US',$_any = null)
	{
		parent::__construct(array('detailLevel'=>$_detailLevel,'errorLanguage'=>$_errorLanguage,'any'=>$_any));
	}
	/**
	 * Set detailLevel
	 * @param DetailLevelCode detailLevel
	 * @return DetailLevelCode
	 */
	public function setDetailLevel($_detailLevel)
	{
		return ($this->detailLevel = PPInvoiceTypeDetailLevelCode::valueIsValid($_detailLevel)?$_detailLevel:null);
	}
	/**
	 * Get detailLevel
	 * @return PPInvoiceTypeDetailLevelCode
	 */
	public function getDetailLevel()
	{
		return $this->detailLevel;
	}
	/**
	 * Set errorLanguage
	 * @param string errorLanguage
	 * @return string
	 */
	public function setErrorLanguage($_errorLanguage)
	{
		return ($this->errorLanguage = $_errorLanguage);
	}
	/**
	 * Get errorLanguage
	 * @return string
	 */
	public function getErrorLanguage()
	{
		return $this->errorLanguage;
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