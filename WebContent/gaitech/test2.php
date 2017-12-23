
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>HTML ImageMap resizing example</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="iFrame message passing test">
	<meta name="viewport" content="width=device-width"></head>
	<style type="text/css">
	
	.credits{
		margin: 25px auto;
		font-size: 11px;
		font-style: italic;
		text-align: center;
	}

	</style>
<body>

	<h2>Automagically resizing imageMap</h2>
	<p>Resize window and the HTML ImageMap will scale with the image.</p>

	<p>
		<img name="usaMap" src="ex1.gif" usemap="#m_usaMap" border="0" width="100%">
	</p>

	<map name="m_usaMap">

		<!-- A -->
		<area shape="poly" coords="409,298,409,298,411,292,409,279,409,233,408,233,437,231,446,263,449,267,448,270,448,275,450,285,421,288,420,290,423,294,423,296,420,299,418,297,416,294,414,294,414,298,409,298" href="http://en.wikipedia.org/wiki/Alabama" title="Alabama">
		<area shape="poly" coords="58,294,56,293,55,292,54,292,51,294,49,293,47,294,46,293,43,292,41,293,39,292,38,291,36,291,35,291,34,291,33,290,31,292,28,292,26,294,24,295,22,298,22,300,21,301,16,301,16,303,21,307,21,309,23,310,24,313,24,314,24,314,20,314,20,312,17,312,17,314,16,313,12,316,15,317,14,318,14,319,15,320,17,321,21,321,22,321,25,320,26,320,25,322,26,325,25,326,22,326,21,328,20,328,19,327,18,328,17,330,15,331,14,335,15,336,16,337,16,338,15,339,17,341,18,342,18,343,20,343,22,342,23,345,23,347,23,348,23,349,24,348,27,347,30,350,31,347,32,349,34,348,33,350,32,354,29,358,26,361,25,362,24,361,23,362,21,364,18,366,17,365,15,366,14,368,11,369,9,369,8,369,8,370,7,372,6,372,6,371,5,371,4,372,2,374,5,373,6,373,11,370,14,370,15,368,19,367,21,366,22,366,23,365,23,363,26,364,28,362,30,363,32,360,31,359,36,356,37,354,40,351,42,350,42,349,43,347,41,346,41,345,43,344,44,342,44,340,45,339,47,336,48,335,51,337,49,336,48,337,47,339,46,342,48,343,47,344,46,345,48,345,49,344,52,340,53,341,55,340,55,337,55,336,58,335,58,336,59,337,61,337,62,337,64,339,69,337,72,337,74,335,74,336,74,338,78,339,79,340,81,341,84,340,84,342,87,344,90,347,90,347,90,346,90,343,92,344,93,346,94,349,97,351,100,351,99,348,100,346,100,348,102,350,104,349,104,348,102,343,97,343,88,336,87,336,86,335,85,335,83,333,81,334,82,336,80,338,74,334,74,333,73,334,70,335,58,294" href="http://en.wikipedia.org/wiki/Alaska" title="Alaska">
		<area shape="poly" coords="163,213,153,290,131,288,90,266,91,262,93,263,95,262,95,259,94,258,93,254,96,250,98,245,102,242,102,240,100,239,99,235,98,230,100,216,101,216,103,216,104,218,105,219,106,218,109,207,163,213" href="http://en.wikipedia.org/wiki/Arizona" title="Arizona">
		<area shape="poly" coords="383,236,383,236,381,235,380,239,378,239,378,243,374,247,374,249,374,250,373,252,373,254,372,254,371,256,373,261,373,263,372,265,339,266,339,259,333,257,333,257,333,232,331,218,381,216,382,218,379,221,379,222,380,223,382,223,383,227,383,236" href="http://en.wikipedia.org/wiki/Arkansas" title="Arkansas">

		<!-- C -->
		<area shape="poly" coords="82,262,53,259,52,253,50,247,47,242,45,239,41,235,39,235,36,233,32,228,22,224,20,220,22,214,13,196,12,192,16,192,17,191,16,188,12,182,11,180,10,174,7,167,6,161,3,154,5,144,3,139,2,133,5,127,8,122,10,112,51,121,41,164,87,228,87,232,89,237,90,239,90,242,87,244,84,251,83,252,82,254,82,257,84,261,82,262" href="http://en.wikipedia.org/wiki/California" title="California">
		<area shape="poly" coords="171,152,195,154,223,156,244,159,244,171,242,191,241,214,228,214,163,207,171,152" href="http://en.wikipedia.org/wiki/Colorado" title="Colorado">
		<area shape="rect" coords="542,94,568,111" href="http://en.wikipedia.org/wiki/Connecticut" title="Connecticut">

		<!-- D -->
		<area shape="rect" coords="555,150,574,161" href="http://en.wikipedia.org/wiki/Delaware" title="Delaware">
		<area shape="rect" coords="535,149,551,159" href="http://en.wikipedia.org/wiki/Delaware" title="Delaware">
		<area shape="poly" coords="527,141,526,143,527,157,533,157,533,154,533,154,531,152,530,150,530,148,529,146,528,144,529,143,530,141,527,141" href="http://en.wikipedia.org/wiki/Delaware" title="Delaware">

		<!-- F -->
		<area shape="poly" coords="442,289,452,288,453,290,454,291,486,290,487,292,488,291,488,287,488,287,490,285,494,286,498,294,502,303,511,314,511,319,515,326,521,337,522,351,521,352,521,355,521,359,514,361,506,352,502,352,500,347,497,344,495,341,492,341,489,337,487,334,487,332,490,328,488,326,488,327,487,329,485,329,485,328,485,314,482,310,478,309,469,300,466,300,465,300,463,300,458,305,454,308,451,306,449,304,447,302,443,300,439,299,432,299,430,297,427,300,425,300,425,296,422,293,422,292,423,290,442,289" href="http://en.wikipedia.org/wiki/Florida" title="Florida">

		<!-- G -->
		<area shape="poly" coords="439,232,448,264,451,268,450,271,450,276,452,286,453,288,454,289,486,288,487,290,488,289,488,285,488,285,490,283,494,284,494,278,495,278,495,276,495,271,497,266,499,266,498,264,495,264,496,263,495,261,490,258,490,254,485,249,482,246,480,246,480,244,478,242,475,240,471,235,465,233,467,228,439,232" href="http://en.wikipedia.org/wiki/Georgia" title="Georgia">

		<!-- H -->
		<area shape="rect" coords="114,348,163,381" href="http://en.wikipedia.org/wiki/Hawaii" title="Hawaii">
		<area shape="poly" coords="146,356,142,354,141,355,142,356,146,356" href="http://en.wikipedia.org/wiki/Hawaii" title="Hawaii">
		<area shape="poly" coords="137,353,137,351,133,350,134,352,136,355,137,353" href="http://en.wikipedia.org/wiki/Hawaii" title="Hawaii">

		<!-- I -->
		<area shape="poly" coords="148,133,120,129,87,121,89,111,92,99,95,92,94,91,93,89,93,86,100,79,102,75,102,71,100,67,100,63,100,59,102,52,107,27,116,29,114,39,113,41,114,44,115,48,116,52,118,55,123,63,126,63,123,70,123,71,123,73,122,76,121,78,122,80,127,78,129,81,128,85,131,87,130,90,131,90,132,91,134,96,138,96,141,96,148,97,148,95,150,95,151,97,148,133" href="http://en.wikipedia.org/wiki/Idaho" title="Idaho">
		<area shape="poly" coords="383,196,381,190,379,188,376,187,371,182,372,178,373,173,370,172,368,171,369,169,369,168,367,168,364,168,361,164,357,158,357,154,357,151,359,149,361,147,363,143,361,139,365,137,369,135,370,130,365,123,393,120,393,124,397,132,399,167,401,173,399,178,396,187,396,187,396,190,395,191,392,195,392,196,392,197,391,197,387,196,385,197,386,199,383,196" href="http://en.wikipedia.org/wiki/Illinois" title="Illinois">
		<area shape="poly" coords="397,181,398,177,399,178,401,173,400,170,399,168,400,163,397,132,400,133,403,132,405,130,425,129,428,161,430,165,430,165,430,166,429,169,427,170,424,170,424,172,422,175,421,176,421,178,419,181,414,180,412,183,409,183,407,185,405,185,403,183,401,185,396,187,397,181" href="http://en.wikipedia.org/wiki/Indiana" title="Indiana">
		<area shape="poly" coords="357,115,332,116,306,116,303,117,304,121,305,122,305,123,304,126,304,128,306,131,307,135,308,138,309,144,311,146,312,154,313,157,328,157,344,156,354,155,357,157,359,155,363,150,361,144,364,143,366,142,369,140,370,135,365,128,363,126,360,124,358,120,357,115" href="http://en.wikipedia.org/wiki/Iowa" title="Iowa">

		<!-- K -->
		<area shape="poly" coords="325,217,326,199,325,188,322,185,320,181,321,178,322,176,319,176,316,174,268,175,257,174,247,173,246,195,245,208,245,215,325,217" href="http://en.wikipedia.org/wiki/Kansas" title="Kansas">
		<area shape="poly" coords="465,186,459,178,458,176,458,174,453,170,450,172,448,171,445,172,444,171,441,171,439,171,438,170,438,168,433,168,433,169,432,172,430,173,427,173,427,175,425,178,424,179,424,181,422,184,417,183,415,186,412,186,410,188,408,188,406,186,404,188,399,190,399,193,398,194,395,198,395,199,395,200,394,200,390,199,388,200,389,202,388,207,386,209,393,209,402,207,402,205,452,200,465,186" href="http://en.wikipedia.org/wiki/Kentucky" title="Kentucky">

		<!-- L -->
		<area shape="poly" coords="343,312,343,312,344,309,346,306,346,300,348,297,348,295,348,292,344,285,340,280,341,266,374,265,375,268,376,270,376,272,378,275,376,276,376,280,372,285,370,290,371,292,392,292,392,295,392,298,395,300,395,302,393,302,390,302,391,300,388,300,385,303,385,304,386,304,390,306,395,307,397,305,398,308,395,311,393,311,402,316,402,319,390,312,390,314,391,315,388,318,387,316,385,316,383,318,377,316,376,313,373,313,371,311,370,311,368,309,366,311,366,313,365,314,364,314,358,313,352,311,352,308,351,311,343,312" href="http://en.wikipedia.org/wiki/Louisiana" title="Louisiana">

		<!-- M -->
		<area shape="poly" coords="568,-3,594,33,582,54,567,71,553,41" href="http://en.wikipedia.org/wiki/Maine" title="Maine">
		<area shape="rect" coords="529,160,547,175" href="http://en.wikipedia.org/wiki/Maryland" title="Maryland">
		<area shape="poly" coords="488,141,526,132,533,148,539,149,534,155,527,159,516,150,500,142,149,148" href="http://en.wikipedia.org/wiki/Maryland" title="Maryland">
		<area shape="poly" coords="549,82,569,76,592,94,550,91" href="http://en.wikipedia.org/wiki/ssachusettes">
		<area shape="poly" coords="426,68,423,68,419,69,416,69,413,69,410,69,409,70,404,72,402,74,401,75,401,74,400,73,399,74,398,75,396,75,392,83,390,81,388,77,386,75,384,73,379,73,374,71,372,72,368,71,364,67,366,65,368,62,370,63,372,62,379,57,381,54,384,52,387,52,383,57,382,61,384,60,387,59,388,60,393,64,395,64,400,65,404,62,410,60,413,59,414,62,419,62,423,62,423,64,426,68" href="http://en.wikipedia.org/wiki/Michigan" title="Michigan">
		<area shape="poly" coords="447,125,448,118,451,112,453,109,454,106,452,100,448,94,444,94,442,96,441,99,437,100,436,96,438,96,440,94,440,91,442,90,442,87,441,83,440,82,440,81,440,79,439,77,433,75,429,73,424,72,423,76,423,78,421,78,421,81,420,85,418,86,418,82,416,84,414,85,412,89,413,93,411,98,412,100,411,103,414,109,415,112,416,118,415,124,413,127,412,129,432,128,447,125" href="http://en.wikipedia.org/wiki/Michigan" title="Michigan">
		<area shape="poly" coords="369,51,367,52,365,51,359,50,357,48,356,50,352,51,347,48,343,50,341,47,335,45,333,45,332,46,327,45,322,44,319,36,317,36,316,39,298,41,299,46,299,52,300,57,301,60,301,63,301,70,304,77,304,83,302,87,303,90,305,91,306,115,332,117,355,115,357,114,357,109,355,107,352,106,351,104,348,102,343,100,341,98,342,89,339,84,342,82,345,81,345,71,348,68,353,65,354,62,357,59,360,57,361,55,365,54,369,51" href="http://en.wikipedia.org/wiki/Minnesota" title="Minnesota">
		<area shape="poly" coords="377,263,378,266,379,268,379,270,381,273,379,274,379,278,375,283,373,288,374,290,395,290,395,293,395,296,398,298,398,300,402,299,407,297,410,297,412,291,410,278,410,232,388,234,386,233,385,237,383,237,383,241,379,245,379,247,379,248,378,250,378,252,377,252,376,254,378,259,378,261,377,263" href="http://en.wikipedia.org/wiki/Mississippi" title="Mississippi">
		<area shape="poly" coords="361,159,358,156,339,158,317,159,318,162,320,166,322,167,324,168,326,168,325,171,324,171,324,173,327,177,329,180,330,202,329,208,331,215,377,214,380,214,379,218,378,221,380,221,383,225,385,218,388,211,390,210,391,208,388,204,385,202,386,199,385,196,378,192,375,188,377,180,373,178,373,173,370,175,365,172,361,165,361,159" href="http://en.wikipedia.org/wiki/Missouri" title="Missouri">
		<area shape="poly" coords="224,96,225,83,228,42,173,37,136,30,118,26,116,37,115,39,116,42,117,46,118,50,120,53,125,61,128,61,125,68,125,69,125,71,124,74,123,76,124,78,129,76,131,79,130,83,133,85,132,88,133,88,134,89,136,94,140,94,143,94,150,95,150,93,152,93,153,94,153,95,155,90,224,96" href="http://en.wikipedia.org/wiki/Montana" title="Montana">

		<!-- N -->
		<area shape="poly" coords="316,174,265,175,248,173,248,160,227,158,229,132,256,132,284,133,289,137,292,135,297,135,304,138,305,139,307,142,308,147,309,152,311,156,311,162,313,168,316,174" href="http://en.wikipedia.org/wiki/Nebraska" title="Nebraska">
		<area shape="poly" coords="54,118,114,133,108,167,101,204,97,214,96,212,94,211,93,212,92,214,90,224,66,191,44,160,54,118" href="http://en.wikipedia.org/wiki/Nevada" title="Nevada">
		<area shape="poly" coords="548,81,553,42,566,72,549,79,547,66" href="http://en.wikipedia.org/wiki/New Hampshire" title="New Hampshire">
		<area shape="rect" coords="545,125,561,136" href="http://en.wikipedia.org/wiki/New Jersey" title="New Jersey">
		<area shape="poly" coords="531,106,541,110,543,138,531,136,536,123,528,117" href="http://en.wikipedia.org/wiki/New Jersey" title="New Jersey">
		<area shape="poly" coords="536,119,529,116,528,117,526,121,527,123,526,124,527,126,528,128,531,130,528,133,528,135,526,137,525,139,526,139,526,140,530,143,531,142,533,143,533,145,533,146,534,144,534,144,535,141,536,139,536,139,536,138,537,137,538,135,537,134,537,131,538,128,536,125,535,126,535,123,536,122,536,119" href="http://en.wikipedia.org/wiki/New Jersey" title="New Jersey">
		<area shape="poly" coords="167,209,234,216,229,284,187,281,187,283,169,282,168,288,158,287,167,209" href="http://en.wikipedia.org/wiki/New Mexico" title="New Mexico">
		<area shape="poly" coords="517,59,531,55,543,112,526,103,481,111,484,92,509,82,507,73" href="http://en.wikipedia.org/wiki/New York" title="New York">
		<area shape="poly" coords="524,229,526,228,526,229,528,228,528,223,531,220,531,217,535,215,536,215,539,214,542,213,543,210,542,210,538,211,534,210,537,210,538,210,539,210,539,208,539,207,538,206,535,205,537,205,538,203,543,204,545,202,547,199,547,197,546,196,544,195,543,198,542,196,542,195,538,196,535,197,535,195,536,195,538,195,540,193,541,192,543,191,542,187,525,191,480,199,480,201,477,203,476,205,473,206,471,208,467,210,461,216,458,216,457,216,456,218,456,220,453,222,453,223,453,224,467,223,475,219,483,218,490,218,493,219,493,221,506,220,520,230,522,229,524,229" href="http://en.wikipedia.org/wiki/North Carolina" title="North Carolina">
		<area shape="poly" coords="292,46,229,43,227,63,225,84,243,86,265,87,283,87,297,87,295,77,294,63,293,60,292,46" href="http://en.wikipedia.org/wiki/North Dakota" title="North Dakota">

		<!-- O -->
		<area shape="poly" coords="428,162,425,128,438,126,450,129,453,128,457,127,460,123,465,120,468,119,472,139,469,152,462,158,461,163,459,161,457,171,455,172,455,171,450,167,447,169,445,168,442,169,441,168,438,168,436,168,435,167,435,165,430,165,429,163,428,162" href="http://en.wikipedia.org/wiki/Ohio" title="Ohio">
		<area shape="poly" coords="237,222,237,216,329,217,329,224,331,239,331,264,328,262,326,261,323,259,321,261,319,260,314,261,311,262,307,261,306,260,304,260,301,263,301,261,297,261,295,259,293,261,290,258,288,257,286,258,284,257,282,257,279,256,277,253,273,253,271,251,269,250,270,224,237,222" href="http://en.wikipedia.org/wiki/Oklahoma" title="Oklahoma">
		<area shape="poly" coords="82,120,87,98,90,91,89,90,88,88,88,85,95,78,97,74,97,70,95,66,91,67,76,63,61,63,59,62,53,62,53,61,51,60,47,60,44,61,42,61,40,61,39,59,39,57,38,53,37,50,35,49,31,48,29,51,21,72,16,83,11,89,12,93,11,96,9,97,9,99,12,104,82,120" href="http://en.wikipedia.org/wiki/Oregon" title="Oregon">

		<!-- P -->
		<area shape="poly" coords="470,113,477,107,481,113,526,102,530,127,478,141" href="http://en.wikipedia.org/wiki/Pennsylvania" title="Pennsylvania">

		<!-- R -->
		<area shape="rect" coords="572,97,590,113" href="http://en.wikipedia.org/wiki/Rhode Island" title="Rhode Island">
		<area shape="poly" coords="558,107,561,105,560,100,558,98,555,98,556,102,558,107" href="http://en.wikipedia.org/wiki/Rhode Island" title="Rhode Island">

		<!-- S -->
		<area shape="poly" coords="475,222,483,221,490,221,493,222,493,224,506,223,520,233,518,236,514,241,515,244,514,245,513,246,511,246,511,248,507,253,504,255,501,256,499,257,500,260,498,262,495,262,496,261,495,259,490,256,490,252,485,247,482,244,480,244,480,242,478,240,475,238,471,233,465,231,467,226,475,222" href="http://en.wikipedia.org/wiki/South Carolina" title="South Carolina">
		<area shape="poly" coords="300,89,265,89,240,88,228,87,225,128,251,129,281,129,285,133,288,132,290,131,294,132,299,134,301,132,302,130,300,124,302,122,301,98,299,97,298,94,300,89" href="http://en.wikipedia.org/wiki/South Dakota" title="South Dakota">

		<!-- T -->
		<area shape="poly" coords="384,231,386,219,389,211,396,211,405,209,405,207,475,200,475,200,475,202,472,204,471,206,468,207,466,209,462,211,456,217,453,217,452,217,451,219,451,221,448,223,448,224,449,225,384,231" href="http://en.wikipedia.org/wiki/Tennessee" title="Tennessee">
		<area shape="poly" coords="331,265,331,266,328,264,326,263,323,261,321,263,319,262,314,263,311,264,307,263,306,262,304,262,301,265,301,263,297,263,295,261,293,263,290,260,288,259,286,260,284,259,282,259,279,258,277,255,273,255,271,253,269,252,270,226,237,224,232,286,190,283,189,286,192,287,194,292,197,292,201,297,203,301,208,303,210,307,211,310,211,315,214,319,217,322,221,324,225,327,228,328,231,326,232,323,235,318,238,318,239,316,245,318,249,319,254,325,259,330,260,333,263,338,262,340,266,343,267,346,270,349,272,351,272,354,272,358,275,361,275,364,276,366,279,366,282,368,283,368,285,368,288,371,295,371,297,374,300,372,298,367,296,359,298,354,300,349,297,347,300,345,302,342,306,342,306,339,311,339,309,336,311,335,314,336,317,334,325,329,328,326,326,321,329,320,331,323,339,320,340,317,342,314,342,308,344,305,344,303,344,300,340,293,336,288,337,267,331,265" href="http://en.wikipedia.org/wiki/Texas" title="Texas">

		<!-- U -->
		<area shape="poly" coords="168,155,160,209,106,203,118,134,148,138,147,152,168,155" href="http://en.wikipedia.org/wiki/Utah" title="Utah">

		<!-- V -->
		<area shape="poly" coords="533,54,535,64,537,73,539,73,540,84,544,83,548,83,547,73,549,63,547,61,549,59,551,57,551,54,550,50,533,54" href="http://en.wikipedia.org/wiki/Vermont" title="Vermont">
		<area shape="poly" coords="537,186,537,185,520,189,492,194,471,197,454,199,457,197,462,192,463,189,467,186,468,184,472,188,474,188,475,187,477,186,481,185,482,184,487,182,487,179,487,176,489,172,492,165,494,167,496,165,497,161,501,158,502,156,502,153,504,151,508,155,510,151,512,162,519,162,514,160,519,161,521,167,525,170,529,172,530,173,529,177,526,175,531,179,528,180,526,179,521,178,527,180,535,180,536,183,537,186" href="http://en.wikipedia.org/wiki/Virginia" title="Virginia">

		<!-- W -->
		<area shape="poly" coords="97,65,83,61,67,61,65,60,60,60,58,58,55,57,50,59,46,58,45,55,45,52,44,49,41,47,35,44,34,43,35,42,35,40,37,40,36,37,39,36,37,34,36,31,36,28,36,21,35,18,36,17,37,13,44,19,49,21,50,21,50,20,51,18,51,17,53,11,108,24,108,24,103,49,101,56,101,63,97,65" href="http://en.wikipedia.org/wiki/Washington" title="Washington">
		<area shape="rect" coords="551,175,572,184" href="http://en.wikipedia.org/wiki/Washington D.C." title="Washington D.C.">
		<area shape="poly" coords="513,160,511,155,516,152,510,152,508,147,507,152,501,152,506,155,504,160,509,157,513,160" href="http://en.wikipedia.org/wiki/Washington D.C." title="Washington D.C.">
		<area shape="poly" coords="507,151,503,149,501,151,501,153,500,156,495,159,495,161,494,165,492,164,491,162,486,174,486,179,481,181,479,183,476,183,471,185,467,183,461,175,459,173,460,171,461,172,462,172,462,170,463,164,464,161,465,163,466,163,466,163,468,157,472,155,474,152,476,139,479,149,490,147,490,151,490,154,493,152,495,150,497,148,498,148,500,148,502,147,503,145,507,146,507,148,507,151" href="http://en.wikipedia.org/wiki/West Virginia" title="West Virginia">
		<area shape="poly" coords="359,116,359,118,360,120,364,122,365,123,379,122,387,121,393,120,392,115,392,110,392,106,392,100,393,97,393,93,395,89,397,85,397,82,395,84,393,88,392,89,390,93,388,93,388,90,390,88,391,86,392,85,392,82,389,78,385,74,376,72,371,72,367,69,364,67,358,66,359,64,358,62,354,64,350,65,346,65,344,67,345,75,342,77,340,78,340,79,342,84,342,86,342,88,342,93,347,97,352,101,356,102,357,104,357,108,358,112,359,112,358,115,359,116" href="http://en.wikipedia.org/wiki/Wisconsin" title="Wisconsin">
		<area shape="poly" coords="148,148,155,94,224,101,220,155,181,154,150,150,148,148" href="http://en.wikipedia.org/wiki/Wyoming" title="Wyoming">
	</map>

	<p class="credits">
		JavaScript &copy; David J. Bradshaw - <a href="https://github.com/davidjbradshaw/imagemap-resizer">https://github.com/davidjbradshaw/imagemap-resizer</a>.
		<br>
		HTML imageMap example from <a href="http://html.cita.illinois.edu/text/map/map-example.php">http://html.cita.illinois.edu/text/map/map-example.php</a>  (Permission requested).
	</p>
	<!--[if lte IE 8]>
		<script type="text/javascript" src="../js/ie8.polyfil.min.js"></script>
	<![endif]-->
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" src="js/resize2/js/imageMapResizer.min.js"></script>
	<script type="text/javascript">

		$('map').imageMapResize();

	</script>

</body>
</html>