<?php
/**
 * Class file for EbayTradingTypeReasonCodeDetailType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeReasonCodeDetailType
 * Documentation : A unique identifier assigned to a reason code.
 * @date 04/07/2012
 */
class EbayTradingTypeReasonCodeDetailType extends EbayTradingWsdlClass
{
	/**
	 * The BriefText
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The short description of the infringement associated with the reason code ID.
	 * @var string
	 */
	public $BriefText;
	/**
	 * The DetailedText
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The long description of the infringement associated with the reason code ID.
	 * @var string
	 */
	public $DetailedText;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * The codeID
	 * @var long
	 */
	public $codeID;
	/**
	 * Constructor
	 * @param string BriefText
	 * @param string DetailedText
	 * @param DOMDocument any
	 * @param long codeID
	 * @return EbayTradingTypeReasonCodeDetailType
	 */
	public function __construct($_BriefText = null,$_DetailedText = null,$_any = null,$_codeID = null)
	{
		parent::__construct(array('BriefText'=>$_BriefText,'DetailedText'=>$_DetailedText,'any'=>$_any,'codeID'=>$_codeID));
	}
	/**
	 * Set BriefText
	 * @param string BriefText
	 * @return string
	 */
	public function setBriefText($_BriefText)
	{
		return ($this->BriefText = $_BriefText);
	}
	/**
	 * Get BriefText
	 * @return string
	 */
	public function getBriefText()
	{
		return $this->BriefText;
	}
	/**
	 * Set DetailedText
	 * @param string DetailedText
	 * @return string
	 */
	public function setDetailedText($_DetailedText)
	{
		return ($this->DetailedText = $_DetailedText);
	}
	/**
	 * Get DetailedText
	 * @return string
	 */
	public function getDetailedText()
	{
		return $this->DetailedText;
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
	 * Set codeID
	 * @param long codeID
	 * @return long
	 */
	public function setCodeID($_codeID)
	{
		return ($this->codeID = $_codeID);
	}
	/**
	 * Get codeID
	 * @return long
	 */
	public function getCodeID()
	{
		return $this->codeID;
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