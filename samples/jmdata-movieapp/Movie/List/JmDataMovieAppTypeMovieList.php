<?php
/**
 * Class file for JmDataMovieAppTypeMovieList
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeMovieList
 * @date 10/07/2012
 */
class JmDataMovieAppTypeMovieList extends JmDataMovieAppWsdlClass
{
	/**
	 * The ID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $ID;
	/**
	 * The Title
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Title;
	/**
	 * The MovieType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MovieType;
	/**
	 * The Genere
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Genere;
	/**
	 * The Actors
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Actors;
	/**
	 * The ThumbLink
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ThumbLink;
	/**
	 * The ReleaseDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ReleaseDate;
	/**
	 * The TrailerLink
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TrailerLink;
	/**
	 * The Rating
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Rating;
	/**
	 * Constructor
	 * @param int ID
	 * @param string Title
	 * @param string MovieType
	 * @param string Genere
	 * @param string Actors
	 * @param string ThumbLink
	 * @param string ReleaseDate
	 * @param string TrailerLink
	 * @param int Rating
	 * @return JmDataMovieAppTypeMovieList
	 */
	public function __construct($_ID,$_Title = null,$_MovieType = null,$_Genere = null,$_Actors = null,$_ThumbLink = null,$_ReleaseDate = null,$_TrailerLink = null,$_Rating)
	{
		parent::__construct(array('ID'=>$_ID,'Title'=>$_Title,'MovieType'=>$_MovieType,'Genere'=>$_Genere,'Actors'=>$_Actors,'ThumbLink'=>$_ThumbLink,'ReleaseDate'=>$_ReleaseDate,'TrailerLink'=>$_TrailerLink,'Rating'=>$_Rating));
	}
	/**
	 * Set ID
	 * @param int ID
	 * @return int
	 */
	public function setID($_ID)
	{
		return ($this->ID = $_ID);
	}
	/**
	 * Get ID
	 * @return int
	 */
	public function getID()
	{
		return $this->ID;
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
	 * Set MovieType
	 * @param string MovieType
	 * @return string
	 */
	public function setMovieType($_MovieType)
	{
		return ($this->MovieType = $_MovieType);
	}
	/**
	 * Get MovieType
	 * @return string
	 */
	public function getMovieType()
	{
		return $this->MovieType;
	}
	/**
	 * Set Genere
	 * @param string Genere
	 * @return string
	 */
	public function setGenere($_Genere)
	{
		return ($this->Genere = $_Genere);
	}
	/**
	 * Get Genere
	 * @return string
	 */
	public function getGenere()
	{
		return $this->Genere;
	}
	/**
	 * Set Actors
	 * @param string Actors
	 * @return string
	 */
	public function setActors($_Actors)
	{
		return ($this->Actors = $_Actors);
	}
	/**
	 * Get Actors
	 * @return string
	 */
	public function getActors()
	{
		return $this->Actors;
	}
	/**
	 * Set ThumbLink
	 * @param string ThumbLink
	 * @return string
	 */
	public function setThumbLink($_ThumbLink)
	{
		return ($this->ThumbLink = $_ThumbLink);
	}
	/**
	 * Get ThumbLink
	 * @return string
	 */
	public function getThumbLink()
	{
		return $this->ThumbLink;
	}
	/**
	 * Set ReleaseDate
	 * @param string ReleaseDate
	 * @return string
	 */
	public function setReleaseDate($_ReleaseDate)
	{
		return ($this->ReleaseDate = $_ReleaseDate);
	}
	/**
	 * Get ReleaseDate
	 * @return string
	 */
	public function getReleaseDate()
	{
		return $this->ReleaseDate;
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
	 * Set Rating
	 * @param int Rating
	 * @return int
	 */
	public function setRating($_Rating)
	{
		return ($this->Rating = $_Rating);
	}
	/**
	 * Get Rating
	 * @return int
	 */
	public function getRating()
	{
		return $this->Rating;
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