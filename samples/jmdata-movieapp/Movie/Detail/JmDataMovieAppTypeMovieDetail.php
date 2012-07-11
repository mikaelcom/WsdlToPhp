<?php
/**
 * Class file for JmDataMovieAppTypeMovieDetail
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeMovieDetail
 * @date 10/07/2012
 */
class JmDataMovieAppTypeMovieDetail extends JmDataMovieAppWsdlClass
{
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
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Description;
	/**
	 * The TrailerLink
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TrailerLink;
	/**
	 * The OriginalTitle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $OriginalTitle;
	/**
	 * The DirectorName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DirectorName;
	/**
	 * The ReleaseDate
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var dateTime
	 */
	public $ReleaseDate;
	/**
	 * The ProductionYear
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $ProductionYear;
	/**
	 * The Duration
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Duration;
	/**
	 * The Age
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Age;
	/**
	 * The AspectRatio
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AspectRatio;
	/**
	 * The SoundSystem
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SoundSystem;
	/**
	 * The Subtitles
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Subtitles;
	/**
	 * The Voice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Voice;
	/**
	 * The AdditionalMaterial
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AdditionalMaterial;
	/**
	 * The Supplier
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Supplier;
	/**
	 * The NotInStore
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $NotInStore;
	/**
	 * The Rating
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Rating;
	/**
	 * The Review
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Review;
	/**
	 * The MovieID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $MovieID;
	/**
	 * Constructor
	 * @param string Title
	 * @param string MovieType
	 * @param string Genere
	 * @param string Actors
	 * @param string ThumbLink
	 * @param string Description
	 * @param string TrailerLink
	 * @param string OriginalTitle
	 * @param string DirectorName
	 * @param dateTime ReleaseDate
	 * @param int ProductionYear
	 * @param string Duration
	 * @param int Age
	 * @param string AspectRatio
	 * @param string SoundSystem
	 * @param string Subtitles
	 * @param string Voice
	 * @param string AdditionalMaterial
	 * @param string Supplier
	 * @param boolean NotInStore
	 * @param string Rating
	 * @param string Review
	 * @param int MovieID
	 * @return JmDataMovieAppTypeMovieDetail
	 */
	public function __construct($_Title = null,$_MovieType = null,$_Genere = null,$_Actors = null,$_ThumbLink = null,$_Description = null,$_TrailerLink = null,$_OriginalTitle = null,$_DirectorName = null,$_ReleaseDate,$_ProductionYear,$_Duration = null,$_Age,$_AspectRatio = null,$_SoundSystem = null,$_Subtitles = null,$_Voice = null,$_AdditionalMaterial = null,$_Supplier = null,$_NotInStore,$_Rating = null,$_Review = null,$_MovieID)
	{
		parent::__construct(array('Title'=>$_Title,'MovieType'=>$_MovieType,'Genere'=>$_Genere,'Actors'=>$_Actors,'ThumbLink'=>$_ThumbLink,'Description'=>$_Description,'TrailerLink'=>$_TrailerLink,'OriginalTitle'=>$_OriginalTitle,'DirectorName'=>$_DirectorName,'ReleaseDate'=>$_ReleaseDate,'ProductionYear'=>$_ProductionYear,'Duration'=>$_Duration,'Age'=>$_Age,'AspectRatio'=>$_AspectRatio,'SoundSystem'=>$_SoundSystem,'Subtitles'=>$_Subtitles,'Voice'=>$_Voice,'AdditionalMaterial'=>$_AdditionalMaterial,'Supplier'=>$_Supplier,'NotInStore'=>$_NotInStore,'Rating'=>$_Rating,'Review'=>$_Review,'MovieID'=>$_MovieID));
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
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
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
	 * Set OriginalTitle
	 * @param string OriginalTitle
	 * @return string
	 */
	public function setOriginalTitle($_OriginalTitle)
	{
		return ($this->OriginalTitle = $_OriginalTitle);
	}
	/**
	 * Get OriginalTitle
	 * @return string
	 */
	public function getOriginalTitle()
	{
		return $this->OriginalTitle;
	}
	/**
	 * Set DirectorName
	 * @param string DirectorName
	 * @return string
	 */
	public function setDirectorName($_DirectorName)
	{
		return ($this->DirectorName = $_DirectorName);
	}
	/**
	 * Get DirectorName
	 * @return string
	 */
	public function getDirectorName()
	{
		return $this->DirectorName;
	}
	/**
	 * Set ReleaseDate
	 * @param dateTime ReleaseDate
	 * @return dateTime
	 */
	public function setReleaseDate($_ReleaseDate)
	{
		return ($this->ReleaseDate = $_ReleaseDate);
	}
	/**
	 * Get ReleaseDate
	 * @return dateTime
	 */
	public function getReleaseDate()
	{
		return $this->ReleaseDate;
	}
	/**
	 * Set ProductionYear
	 * @param int ProductionYear
	 * @return int
	 */
	public function setProductionYear($_ProductionYear)
	{
		return ($this->ProductionYear = $_ProductionYear);
	}
	/**
	 * Get ProductionYear
	 * @return int
	 */
	public function getProductionYear()
	{
		return $this->ProductionYear;
	}
	/**
	 * Set Duration
	 * @param string Duration
	 * @return string
	 */
	public function setDuration($_Duration)
	{
		return ($this->Duration = $_Duration);
	}
	/**
	 * Get Duration
	 * @return string
	 */
	public function getDuration()
	{
		return $this->Duration;
	}
	/**
	 * Set Age
	 * @param int Age
	 * @return int
	 */
	public function setAge($_Age)
	{
		return ($this->Age = $_Age);
	}
	/**
	 * Get Age
	 * @return int
	 */
	public function getAge()
	{
		return $this->Age;
	}
	/**
	 * Set AspectRatio
	 * @param string AspectRatio
	 * @return string
	 */
	public function setAspectRatio($_AspectRatio)
	{
		return ($this->AspectRatio = $_AspectRatio);
	}
	/**
	 * Get AspectRatio
	 * @return string
	 */
	public function getAspectRatio()
	{
		return $this->AspectRatio;
	}
	/**
	 * Set SoundSystem
	 * @param string SoundSystem
	 * @return string
	 */
	public function setSoundSystem($_SoundSystem)
	{
		return ($this->SoundSystem = $_SoundSystem);
	}
	/**
	 * Get SoundSystem
	 * @return string
	 */
	public function getSoundSystem()
	{
		return $this->SoundSystem;
	}
	/**
	 * Set Subtitles
	 * @param string Subtitles
	 * @return string
	 */
	public function setSubtitles($_Subtitles)
	{
		return ($this->Subtitles = $_Subtitles);
	}
	/**
	 * Get Subtitles
	 * @return string
	 */
	public function getSubtitles()
	{
		return $this->Subtitles;
	}
	/**
	 * Set Voice
	 * @param string Voice
	 * @return string
	 */
	public function setVoice($_Voice)
	{
		return ($this->Voice = $_Voice);
	}
	/**
	 * Get Voice
	 * @return string
	 */
	public function getVoice()
	{
		return $this->Voice;
	}
	/**
	 * Set AdditionalMaterial
	 * @param string AdditionalMaterial
	 * @return string
	 */
	public function setAdditionalMaterial($_AdditionalMaterial)
	{
		return ($this->AdditionalMaterial = $_AdditionalMaterial);
	}
	/**
	 * Get AdditionalMaterial
	 * @return string
	 */
	public function getAdditionalMaterial()
	{
		return $this->AdditionalMaterial;
	}
	/**
	 * Set Supplier
	 * @param string Supplier
	 * @return string
	 */
	public function setSupplier($_Supplier)
	{
		return ($this->Supplier = $_Supplier);
	}
	/**
	 * Get Supplier
	 * @return string
	 */
	public function getSupplier()
	{
		return $this->Supplier;
	}
	/**
	 * Set NotInStore
	 * @param boolean NotInStore
	 * @return boolean
	 */
	public function setNotInStore($_NotInStore)
	{
		return ($this->NotInStore = $_NotInStore);
	}
	/**
	 * Get NotInStore
	 * @return boolean
	 */
	public function getNotInStore()
	{
		return $this->NotInStore;
	}
	/**
	 * Set Rating
	 * @param string Rating
	 * @return string
	 */
	public function setRating($_Rating)
	{
		return ($this->Rating = $_Rating);
	}
	/**
	 * Get Rating
	 * @return string
	 */
	public function getRating()
	{
		return $this->Rating;
	}
	/**
	 * Set Review
	 * @param string Review
	 * @return string
	 */
	public function setReview($_Review)
	{
		return ($this->Review = $_Review);
	}
	/**
	 * Get Review
	 * @return string
	 */
	public function getReview()
	{
		return $this->Review;
	}
	/**
	 * Set MovieID
	 * @param int MovieID
	 * @return int
	 */
	public function setMovieID($_MovieID)
	{
		return ($this->MovieID = $_MovieID);
	}
	/**
	 * Get MovieID
	 * @return int
	 */
	public function getMovieID()
	{
		return $this->MovieID;
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