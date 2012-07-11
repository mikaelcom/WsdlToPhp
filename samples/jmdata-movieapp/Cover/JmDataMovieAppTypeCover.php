<?php
/**
 * Class file for JmDataMovieAppTypeCover
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeCover
 * @date 10/07/2012
 */
class JmDataMovieAppTypeCover extends JmDataMovieAppWsdlClass
{
	/**
	 * The FilmID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FilmID;
	/**
	 * The Title
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Title;
	/**
	 * The CoverLink
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CoverLink;
	/**
	 * The TrailerLink
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TrailerLink;
	/**
	 * The TrailerImgLink
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TrailerImgLink;
	/**
	 * The CoverType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $CoverType;
	/**
	 * Constructor
	 * @param string FilmID
	 * @param string Title
	 * @param string CoverLink
	 * @param string TrailerLink
	 * @param string TrailerImgLink
	 * @param int CoverType
	 * @return JmDataMovieAppTypeCover
	 */
	public function __construct($_FilmID = null,$_Title = null,$_CoverLink = null,$_TrailerLink = null,$_TrailerImgLink = null,$_CoverType)
	{
		parent::__construct(array('FilmID'=>$_FilmID,'Title'=>$_Title,'CoverLink'=>$_CoverLink,'TrailerLink'=>$_TrailerLink,'TrailerImgLink'=>$_TrailerImgLink,'CoverType'=>$_CoverType));
	}
	/**
	 * Set FilmID
	 * @param string FilmID
	 * @return string
	 */
	public function setFilmID($_FilmID)
	{
		return ($this->FilmID = $_FilmID);
	}
	/**
	 * Get FilmID
	 * @return string
	 */
	public function getFilmID()
	{
		return $this->FilmID;
	}
	/**
	 * Set Title
	 * @param string Title
	 * @return string
	 */
	public function setTitle($_Title)
	{
		return ($this->Title = $_Title);
	}
	/**
	 * Get Title
	 * @return string
	 */
	public function getTitle()
	{
		return $this->Title;
	}
	/**
	 * Set CoverLink
	 * @param string CoverLink
	 * @return string
	 */
	public function setCoverLink($_CoverLink)
	{
		return ($this->CoverLink = $_CoverLink);
	}
	/**
	 * Get CoverLink
	 * @return string
	 */
	public function getCoverLink()
	{
		return $this->CoverLink;
	}
	/**
	 * Set TrailerLink
	 * @param string TrailerLink
	 * @return string
	 */
	public function setTrailerLink($_TrailerLink)
	{
		return ($this->TrailerLink = $_TrailerLink);
	}
	/**
	 * Get TrailerLink
	 * @return string
	 */
	public function getTrailerLink()
	{
		return $this->TrailerLink;
	}
	/**
	 * Set TrailerImgLink
	 * @param string TrailerImgLink
	 * @return string
	 */
	public function setTrailerImgLink($_TrailerImgLink)
	{
		return ($this->TrailerImgLink = $_TrailerImgLink);
	}
	/**
	 * Get TrailerImgLink
	 * @return string
	 */
	public function getTrailerImgLink()
	{
		return $this->TrailerImgLink;
	}
	/**
	 * Set CoverType
	 * @param int CoverType
	 * @return int
	 */
	public function setCoverType($_CoverType)
	{
		return ($this->CoverType = $_CoverType);
	}
	/**
	 * Get CoverType
	 * @return int
	 */
	public function getCoverType()
	{
		return $this->CoverType;
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