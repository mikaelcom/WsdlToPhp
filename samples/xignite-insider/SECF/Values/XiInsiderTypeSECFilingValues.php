<?php
/**
 * Class file for XiInsiderTypeSECFilingValues
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeSECFilingValues
 * @date 08/07/2012
 */
class XiInsiderTypeSECFilingValues extends XiInsiderWsdlClass
{
	/**
	 * The FormType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FormType;
	/**
	 * The SECFileNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SECFileNumber;
	/**
	 * The FilmNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FilmNumber;
	/**
	 * The SECAct
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SECAct;
	/**
	 * Constructor
	 * @param string FormType
	 * @param string SECFileNumber
	 * @param string FilmNumber
	 * @param string SECAct
	 * @return XiInsiderTypeSECFilingValues
	 */
	public function __construct($_FormType = null,$_SECFileNumber = null,$_FilmNumber = null,$_SECAct = null)
	{
		parent::__construct(array('FormType'=>$_FormType,'SECFileNumber'=>$_SECFileNumber,'FilmNumber'=>$_FilmNumber,'SECAct'=>$_SECAct));
	}
	/**
	 * Set FormType
	 * @param string FormType
	 * @return string
	 */
	public function setFormType($_FormType)
	{
		return ($this->FormType = $_FormType);
	}
	/**
	 * Get FormType
	 * @return string
	 */
	public function getFormType()
	{
		return $this->FormType;
	}
	/**
	 * Set SECFileNumber
	 * @param string SECFileNumber
	 * @return string
	 */
	public function setSECFileNumber($_SECFileNumber)
	{
		return ($this->SECFileNumber = $_SECFileNumber);
	}
	/**
	 * Get SECFileNumber
	 * @return string
	 */
	public function getSECFileNumber()
	{
		return $this->SECFileNumber;
	}
	/**
	 * Set FilmNumber
	 * @param string FilmNumber
	 * @return string
	 */
	public function setFilmNumber($_FilmNumber)
	{
		return ($this->FilmNumber = $_FilmNumber);
	}
	/**
	 * Get FilmNumber
	 * @return string
	 */
	public function getFilmNumber()
	{
		return $this->FilmNumber;
	}
	/**
	 * Set SECAct
	 * @param string SECAct
	 * @return string
	 */
	public function setSECAct($_SECAct)
	{
		return ($this->SECAct = $_SECAct);
	}
	/**
	 * Get SECAct
	 * @return string
	 */
	public function getSECAct()
	{
		return $this->SECAct;
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