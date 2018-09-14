<!DOCTYPE html>
<html lang="tr">
<head>
	<title>CSS ile tasarım</title>
	<meta charset="utf-8">
	<style>
		#ust, #alt{border:solid black 1px; padding:5px; }
		#ana{display: table; width: 100%; table-layout: fixed; }
		#ic{width: 80%;  }
		#sol, #sag, #ic  {display: table-cell; padding: 5px;   }
		#sol, #sag{width: 20%; border-left: 1px solid black; border-right: 1px solid black  }

	</style>
</head>


	

<body>
<div id="ust">Üst Bölüm </div>
<div id="ana">
	<div id="sol">Sol blok </div>
	<div id="ic">Ana içerik </div>
	<div id="sag">Sağ </div>
</div>
<div id="alt">Alt Bölüm </div>
</body>



</html>