<?php
/**
 * Class file for CdyneSpellCheckerTypeDocumentSummary
 * @date 03/07/2012
 */
/**
 * Class CdyneSpellCheckerTypeDocumentSummary
 * @date 03/07/2012
 */
class CdyneSpellCheckerTypeDocumentSummary extends CdyneSpellCheckerWsdlClass
{
	/**
	 * The MisspelledWord
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var CdyneSpellCheckerTypeWords
	 */
	public $MisspelledWord;
	/**
	 * The ver
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ver;
	/**
	 * The body
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $body;
	/**
	 * The MisspelledWordCount
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $MisspelledWordCount;
	/**
	 * Constructor
	 * @param CdyneSpellCheckerTypeWords MisspelledWord
	 * @param string ver
	 * @param string body
	 * @param int MisspelledWordCount
	 * @return CdyneSpellCheckerTypeDocumentSummary
	 */
	public function __construct($_MisspelledWord = null,$_ver = null,$_body = null,$_MisspelledWordCount)
	{
		parent::__construct(array('MisspelledWord'=>$_MisspelledWord,'ver'=>$_ver,'body'=>$_body,'MisspelledWordCount'=>$_MisspelledWordCount));
	}
	/**
	 * Set MisspelledWord
	 * @param Words MisspelledWord
	 * @return Words
	 */
	public function setMisspelledWord($_MisspelledWord)
	{
		return ($this->MisspelledWord = $_MisspelledWord);
	}
	/**
	 * Get MisspelledWord
	 * @return CdyneSpellCheckerTypeWords
	 */
	public function getMisspelledWord()
	{
		return $this->MisspelledWord;
	}
	/**
	 * Set ver
	 * @param string ver
	 * @return string
	 */
	public function setVer($_ver)
	{
		return ($this->ver = $_ver);
	}
	/**
	 * Get ver
	 * @return string
	 */
	public function getVer()
	{
		return $this->ver;
	}
	/**
	 * Set body
	 * @param string body
	 * @return string
	 */
	public function setBody($_body)
	{
		return ($this->body = $_body);
	}
	/**
	 * Get body
	 * @return string
	 */
	public function getBody()
	{
		return $this->body;
	}
	/**
	 * Set MisspelledWordCount
	 * @param int MisspelledWordCount
	 * @return int
	 */
	public function setMisspelledWordCount($_MisspelledWordCount)
	{
		return ($this->MisspelledWordCount = $_MisspelledWordCount);
	}
	/**
	 * Get MisspelledWordCount
	 * @return int
	 */
	public function getMisspelledWordCount()
	{
		return $this->MisspelledWordCount;
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