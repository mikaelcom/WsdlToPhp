<?php
/**
 * Class file for DirectSmileTypeGetImage
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeGetImage
 * @date 02/08/2012
 */
class DirectSmileTypeGetImage extends DirectSmileWsdlClass
{
	/**
	 * The SessionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SessionID;
	/**
	 * The SetAlias
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SetAlias;
	/**
	 * The TextToRender
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TextToRender;
	/**
	 * The PixelWidth
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var long
	 */
	public $PixelWidth;
	/**
	 * The Filename
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Filename;
	/**
	 * The Quality
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var short
	 */
	public $Quality;
	/**
	 * The Key
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Key;
	/**
	 * The WaterMarkType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var long
	 */
	public $WaterMarkType;
	/**
	 * Constructor
	 * @param string SessionID
	 * @param string SetAlias
	 * @param string TextToRender
	 * @param long PixelWidth
	 * @param string Filename
	 * @param short Quality
	 * @param string Key
	 * @param long WaterMarkType
	 * @return DirectSmileTypeGetImage
	 */
	public function __construct($_SessionID = null,$_SetAlias = null,$_TextToRender = null,$_PixelWidth,$_Filename = null,$_Quality,$_Key = null,$_WaterMarkType)
	{
		parent::__construct(array('SessionID'=>$_SessionID,'SetAlias'=>$_SetAlias,'TextToRender'=>$_TextToRender,'PixelWidth'=>$_PixelWidth,'Filename'=>$_Filename,'Quality'=>$_Quality,'Key'=>$_Key,'WaterMarkType'=>$_WaterMarkType));
	}
	/**
	 * Set SessionID
	 * @param string SessionID
	 * @return string
	 */
	public function setSessionID($_SessionID)
	{
		return ($this->SessionID = $_SessionID);
	}
	/**
	 * Get SessionID
	 * @return string
	 */
	public function getSessionID()
	{
		return $this->SessionID;
	}
	/**
	 * Set SetAlias
	 * @param string SetAlias
	 * @return string
	 */
	public function setSetAlias($_SetAlias)
	{
		return ($this->SetAlias = $_SetAlias);
	}
	/**
	 * Get SetAlias
	 * @return string
	 */
	public function getSetAlias()
	{
		return $this->SetAlias;
	}
	/**
	 * Set TextToRender
	 * @param string TextToRender
	 * @return string
	 */
	public function setTextToRender($_TextToRender)
	{
		return ($this->TextToRender = $_TextToRender);
	}
	/**
	 * Get TextToRender
	 * @return string
	 */
	public function getTextToRender()
	{
		return $this->TextToRender;
	}
	/**
	 * Set PixelWidth
	 * @param long PixelWidth
	 * @return long
	 */
	public function setPixelWidth($_PixelWidth)
	{
		return ($this->PixelWidth = $_PixelWidth);
	}
	/**
	 * Get PixelWidth
	 * @return long
	 */
	public function getPixelWidth()
	{
		return $this->PixelWidth;
	}
	/**
	 * Set Filename
	 * @param string Filename
	 * @return string
	 */
	public function setFilename($_Filename)
	{
		return ($this->Filename = $_Filename);
	}
	/**
	 * Get Filename
	 * @return string
	 */
	public function getFilename()
	{
		return $this->Filename;
	}
	/**
	 * Set Quality
	 * @param short Quality
	 * @return short
	 */
	public function setQuality($_Quality)
	{
		return ($this->Quality = $_Quality);
	}
	/**
	 * Get Quality
	 * @return short
	 */
	public function getQuality()
	{
		return $this->Quality;
	}
	/**
	 * Set Key
	 * @param string Key
	 * @return string
	 */
	public function setKey($_Key)
	{
		return ($this->Key = $_Key);
	}
	/**
	 * Get Key
	 * @return string
	 */
	public function getKey()
	{
		return $this->Key;
	}
	/**
	 * Set WaterMarkType
	 * @param long WaterMarkType
	 * @return long
	 */
	public function setWaterMarkType($_WaterMarkType)
	{
		return ($this->WaterMarkType = $_WaterMarkType);
	}
	/**
	 * Get WaterMarkType
	 * @return long
	 */
	public function getWaterMarkType()
	{
		return $this->WaterMarkType;
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