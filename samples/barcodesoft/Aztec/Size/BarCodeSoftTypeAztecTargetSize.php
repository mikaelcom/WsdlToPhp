<?php
/**
 * Class file for BarCodeSoftTypeAztecTargetSize
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftTypeAztecTargetSize
 * @date 02/08/2012
 */
class BarCodeSoftTypeAztecTargetSize extends BarCodeSoftWsdlClass
{
	/**
	 * Constant for value 'AutoSelect'
	 * @return string 'AutoSelect'
	 */
	const VALUE_AUTOSELECT = 'AutoSelect';
	/**
	 * Constant for value '_15x15Compact'
	 * @return string '_15x15Compact'
	 */
	const VALUE__15X15COMPACT = '_15x15Compact';
	/**
	 * Constant for value '_19x19'
	 * @return string '_19x19'
	 */
	const VALUE__19X19 = '_19x19';
	/**
	 * Constant for value '_19x19Compact'
	 * @return string '_19x19Compact'
	 */
	const VALUE__19X19COMPACT = '_19x19Compact';
	/**
	 * Constant for value '_23x23'
	 * @return string '_23x23'
	 */
	const VALUE__23X23 = '_23x23';
	/**
	 * Constant for value '_23x23Compact'
	 * @return string '_23x23Compact'
	 */
	const VALUE__23X23COMPACT = '_23x23Compact';
	/**
	 * Constant for value '_27x27'
	 * @return string '_27x27'
	 */
	const VALUE__27X27 = '_27x27';
	/**
	 * Constant for value '_27x27Compact'
	 * @return string '_27x27Compact'
	 */
	const VALUE__27X27COMPACT = '_27x27Compact';
	/**
	 * Constant for value '_31x31'
	 * @return string '_31x31'
	 */
	const VALUE__31X31 = '_31x31';
	/**
	 * Constant for value '_37x37'
	 * @return string '_37x37'
	 */
	const VALUE__37X37 = '_37x37';
	/**
	 * Constant for value '_41x41'
	 * @return string '_41x41'
	 */
	const VALUE__41X41 = '_41x41';
	/**
	 * Constant for value '_45x45'
	 * @return string '_45x45'
	 */
	const VALUE__45X45 = '_45x45';
	/**
	 * Constant for value '_49x49'
	 * @return string '_49x49'
	 */
	const VALUE__49X49 = '_49x49';
	/**
	 * Constant for value '_53x53'
	 * @return string '_53x53'
	 */
	const VALUE__53X53 = '_53x53';
	/**
	 * Constant for value '_57x57'
	 * @return string '_57x57'
	 */
	const VALUE__57X57 = '_57x57';
	/**
	 * Constant for value '_61x61'
	 * @return string '_61x61'
	 */
	const VALUE__61X61 = '_61x61';
	/**
	 * Constant for value '_67x67'
	 * @return string '_67x67'
	 */
	const VALUE__67X67 = '_67x67';
	/**
	 * Constant for value '_71x71'
	 * @return string '_71x71'
	 */
	const VALUE__71X71 = '_71x71';
	/**
	 * Constant for value '_75x75'
	 * @return string '_75x75'
	 */
	const VALUE__75X75 = '_75x75';
	/**
	 * Constant for value '_79x79'
	 * @return string '_79x79'
	 */
	const VALUE__79X79 = '_79x79';
	/**
	 * Constant for value '_83x83'
	 * @return string '_83x83'
	 */
	const VALUE__83X83 = '_83x83';
	/**
	 * Constant for value '_87x87'
	 * @return string '_87x87'
	 */
	const VALUE__87X87 = '_87x87';
	/**
	 * Constant for value '_91x91'
	 * @return string '_91x91'
	 */
	const VALUE__91X91 = '_91x91';
	/**
	 * Constant for value '_95x95'
	 * @return string '_95x95'
	 */
	const VALUE__95X95 = '_95x95';
	/**
	 * Constant for value '_101x101'
	 * @return string '_101x101'
	 */
	const VALUE__101X101 = '_101x101';
	/**
	 * Constant for value '_105x105'
	 * @return string '_105x105'
	 */
	const VALUE__105X105 = '_105x105';
	/**
	 * Constant for value '_109x109'
	 * @return string '_109x109'
	 */
	const VALUE__109X109 = '_109x109';
	/**
	 * Constant for value '_113x113'
	 * @return string '_113x113'
	 */
	const VALUE__113X113 = '_113x113';
	/**
	 * Constant for value '_117x117'
	 * @return string '_117x117'
	 */
	const VALUE__117X117 = '_117x117';
	/**
	 * Constant for value '_121x121'
	 * @return string '_121x121'
	 */
	const VALUE__121X121 = '_121x121';
	/**
	 * Constant for value '_125x125'
	 * @return string '_125x125'
	 */
	const VALUE__125X125 = '_125x125';
	/**
	 * Constant for value '_131x131'
	 * @return string '_131x131'
	 */
	const VALUE__131X131 = '_131x131';
	/**
	 * Constant for value '_135x135'
	 * @return string '_135x135'
	 */
	const VALUE__135X135 = '_135x135';
	/**
	 * Constant for value '_139x139'
	 * @return string '_139x139'
	 */
	const VALUE__139X139 = '_139x139';
	/**
	 * Constant for value '_143x143'
	 * @return string '_143x143'
	 */
	const VALUE__143X143 = '_143x143';
	/**
	 * Constant for value '_147x147'
	 * @return string '_147x147'
	 */
	const VALUE__147X147 = '_147x147';
	/**
	 * Constant for value '_151x151'
	 * @return string '_151x151'
	 */
	const VALUE__151X151 = '_151x151';
	/**
	 * Constructor
	 * @return BarCodeSoftTypeAztecTargetSize
	 */
	public function __construct()
	{
		parent::__construct(array());
	}
	/**
	 * Return true if value is allowed
	 * @param string value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(self::VALUE_AUTOSELECT,self::VALUE__15X15COMPACT,self::VALUE__19X19,self::VALUE__19X19COMPACT,self::VALUE__23X23,self::VALUE__23X23COMPACT,self::VALUE__27X27,self::VALUE__27X27COMPACT,self::VALUE__31X31,self::VALUE__37X37,self::VALUE__41X41,self::VALUE__45X45,self::VALUE__49X49,self::VALUE__53X53,self::VALUE__57X57,self::VALUE__61X61,self::VALUE__67X67,self::VALUE__71X71,self::VALUE__75X75,self::VALUE__79X79,self::VALUE__83X83,self::VALUE__87X87,self::VALUE__91X91,self::VALUE__95X95,self::VALUE__101X101,self::VALUE__105X105,self::VALUE__109X109,self::VALUE__113X113,self::VALUE__117X117,self::VALUE__121X121,self::VALUE__125X125,self::VALUE__131X131,self::VALUE__135X135,self::VALUE__139X139,self::VALUE__143X143,self::VALUE__147X147,self::VALUE__151X151));
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