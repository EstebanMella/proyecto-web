<?php

$arrayIndex= array('titulo' => 'Lineage Data',
					'Contacto'=>'Contacto',
					'Home'=>'Home',
					'Salir'=>'Salir',
					'Otra'=>'Otra',
					'Comprar'=>'Comprar',
					'Item I'=>'Item I',
					'Item II'=>'Item II',
					'Item III'=>'Item III',
					'Item IV'=>'Item IV'
					
 );
$arrayIndex2=array(

					'SImHea'=>'Set Immortal Heavy',
					'STwHea'=>'Set Twilight Heavy',
					'SSerHea'=>'Set Seraph Heavy',
					'SEteHea'=>'Set Eternal Heavy',
					'SImLea'=>'Set Immortal Leather',
					'STwLea'=>'Set Twilight Leather',
					'SSeLea'=>'Set Seraph Leather',
					'SEtLea'=>'Set Eternal Leather',
					'SImRob'=>'Set Immortal Robe',
					'STwRob'=>'Set Twilight Robe',
					'SSerRob'=>'Set Seraph Robe',
					'SEtRob'=>'Set Eternal Robe',
					'Fo'=>'Foro',
					'WebMa'=>'Web Maste'
	);
$arrayAllProduc=array(
					'DefTy'=>'Defense Type',
					'2p'=>'2 parts',
					'3p'=>'3 parts',
					'4p'=>'4 parts',
					'5p'=>'5 parts',
					'AtTy'=>'Attack Type',
					'AsTy'=>'Assassin Type',
					'EnTy'=>'Enhance Type',
					'MaTy'=>'Magic Type',
					'ReTy'=>'Recovery Type'
					);

$arrayImHeavy=array( 
					'des2pD'=>'CON +1, HP + 463',
					'des3pD'=>'Received P. Critical Rate - 3.3%, Stun Resistance + 5',
					'des4pD'=>'M. Def. + 38',
					'des5pD'=>'P. Def. + 77, Attribute Resistance + 10, additional P. Def. 7%.',
					'des2pA'=>'STR +1',
					'des3pA'=>'Critical damage + 209, Hold Resistance + 5',
					'des4pA'=>'HP + 463',
					'des5pA'=>'P. Atk. + 155, Attribute Resistance + 10, additional P. Def. + 7%.'
					

	);

$arrayImLeather=array(
					'des2pD'=>'DEX + 1',
					'des3pD'=>'Evasion + 2.3; Resistance to Sleep + 5',
					'des4pD'=>'Skill MP consumption - 4%',
					'des5pD'=>'Critical Rate + 3.3%; Resistance to attributes + 10, Atk. Spd. + 3%, P. Atk. additional + 7%',
					'des2pA'=>'STR +1, P. Atk. + 155',
					'des3pA'=>'skill MP consumption - 4%, resistance to hold + 5',
					'des4pA'=>'HP + 463',
					'des5pA'=>'P. Atk. Spd. + 3%, resistance to attributes + 10, P. Atk. additional + 7%'
					);
$arrayImRobe=array(
					'des2pD'=>'INT + 1, Casting Spd. + 3%',
					'des3pD'=>'MP + 185; Resistance to Sleep + 5',
					'des4pD'=>'MP Regeneration + 0.6',
					'des5pD'=>'Magic Critical + 3%; Resistance to attributes + 10, Casting Spd. additional + 12%, M. Atk. additional + 15%',
					'des2pA'=>'WIT + 1, Casting Spd. + 3%',
					'des3pA'=>'MP + 185; Resistance to Shock + 5',
					'des4pA'=>'MP Recovery + 0.6',
					'des5pA'=>'Heal Amount + 65; Resistance to attributes +10, Casting Spd. additional + 12%, M. Atk. additional + 15%'
					);
$arrayTwHeavy=array( 
					'des2pD'=>'CON + +2, STR -1, HP + 487',
					'des3pD'=>'MP + 202, Resistance to shock + 7',
					'des4pD'=>'M. Def. + 44',
					'des5pD'=>'	P. Def. + 87; Resistance to attributes + 10, P. Def. additional + 7%',
					'des2pA'=>'STR + 2, CON - 1',
					'des3pA'=>'Critical damage + 242, resistance to Hold + 7',
					'des4pA'=>'MP - 4% with skill use',
					'des5pA'=>'P. Atk. + 180; resistance to attributes + 10, P. Def. additional + 7%'
					

	);

$arrayTwLeather=array(
					'des2pD'=>'DEX + 2, STR - 1',
					'des3pD'=>'Evasion + 2.3, Resistance to Sleep + 7',
					'des4pD'=>'P. Atk. + 180',
					'des5pD'=>'Critical Rate + 3.3%; Resistance to attributes + 10, Atk. Spd. + 3%, P. Atk. additional + 7%',
					'des2pA'=>'STR +2, CON -1, P. Atk. + 180',
					'des3pA'=>'Skill MP consumption - 10%, resistance to hold + 7',
					'des4pA'=>'HP + 487',
					'des5pA'=>'Critical damage + 242, resistance to attributes + 10, Atk. Spd. + 3%, P. Atk. additional + 7%'
					);

$arrayTwRobe=array(
					'des2pD'=>'INT + 2, MEN -1, Casting Spd. + 3%',
					'des3pD'=>'MP + 202, Resistance to Sleep + 7',
					'des4pD'=>'M. Atk. + 184; Magic Critical + 3%; Resistance to attributes + 10, Casting Spd. additional + 12%, M. Atk. additional + 15%',
					'des2pA'=>'WIT +2, MEN -1, Casting Spd. + 3%',
					'des3pA'=>'MP + 202; Resistance to Shock + 7',
					'des4pA'=>'MP Recovery + 0.7',
					'des5pA'=>'Heal Amount + 85; Resistance to attributes +10, Casting Spd. additional + 12%, M. Atk. additional + 15%'
					);

$arraySerHeavy=array( 
					'des2pD'=>'CON + 3, STR - 2; HP + 511',
					'des3pD'=>'Critical received - 3.3%; Resistance to shock + 10',
					'des4pD'=>'Received Critical Damage - 281; M. Def. + 50',
					'des5pD'=>'P. Def. + 96; Resistance to attributes + 15, P. Def. additional + 7%',
					'des2pA'=>'STR + 3, CON - 2',
					'des3pA'=>'Critical Damage + 281, Resistance to Hold + 10',
					'des4pA'=>'HP + 511, Skill P. Atk. + 6%',
					'des5pA'=>'P. Atk. + 214, Resistance to attributes + 15, P. Def. additional + 7%'
					

	);

$arraySerLeather=array( 
					'des2pD'=>'DEX + 3, STR - 2',
					'des3pD'=>'Evasion + 2.3; Resistance to Sleep + 10',
					'des4pD'=>'Skill MP consumption - 4%, skill attack + 6%',
					'des5pD'=>'Critical Rate + 3.3%; Resistance to attributes + 15, Atk. Spd. + 3%, P. Atk. additional + 7%',
					'des2pA'=>'STR +3, CON -2, P. Atk. + 214',
					'des3pA'=>'Skill MP consumption - 4%, resistance to hold + 10',
					'des4pA'=>'Mental attack bonus + 20, HP + 511',
					'des5pA'=>'P. Atk. Spd. + 3%, resistance to attributes + 15, P. Atk. additional + 7%'
					

	);

$arraySerRobe=array( 
					'des2pD'=>'INT +3, MEN -2, Casting Spd. + 3%',
					'des3pD'=>'MP + 221; Resistance to Sleep + 10',
					'des4pD'=>'M. Atk. + 222; Resistance to magic cancel increased',
					'des5pD'=>'Magic Critical + 3%; Resistance to attributes + 15, Casting Spd. additional + 12%, M. Atk. additional + 15%',
					'des2pA'=>'WIT +3, MEN -2, Casting Spd. + 3%',
					'des3pA'=>'MP + 221; Resistance to Shock + 10',
					'des4pA'=>'MP Recovery + 0.8; Magic Critical + 3%',
					'des5pA'=>'Heal Amount + 89; Resistance to attributes + 15, Casting Spd. additional + 12%, M. Atk. additional + 15%'
					

	);

$arrayEterHeavy=array(
					'des2pD'=>'CON +3, STR -1; HP + 521',
					'des3pD'=>'Critical received - 3.3%; Resistance to shock + 10',
					'des4pD'=>'Received heal amount + 108, M. Def. + 54',
					'des5pD'=>'P. Def. + 103; Resistance to attributes + 15, P. Def. additional + 7%',
					'des2pA'=>'STR +3, CON -1',
					'des3pA'=>'Critical Damage + 298; Resistance to Hold + 10',
					'des4pA'=>'HP + 521; Chance of absorbing 2% of damage',
					'des5pA'=>'P. Atk. + 246, Resistance to attributes + 15, P. Def. additional + 7%');

$arrayEterLeather=array(
					'des2pD'=>'DEX +3, STR -1',
					'des3pD'=>'Evasion + 2.3; Resistance to Sleep + 10',
					'des4pD'=>'Skill MP consumption - 4%; Chance of absorbing 2% of damage',
					'des5pD'=>'Critical Rate + 3.3%; Resistance to attributes + 15, Atk. Spd. + 3%, P. Atk. additional + 7%',
					'des2pA'=>'STR +3, CON -1, P. Atk. + 246',
					'des3pA'=>'skill MP consumption - 4%, resistance to hold + 10',
					'des4pA'=>'Skill P. Atk. + 6%, HP + 521',
					'des5pA'=>'P. Atk. Spd. + 3%, resistance to attributes + 15, P. Atk. additional + 7%');


$arrayEterRobe=array(
					'des2pD'=>'INT +3, MEN -1, Casting Spd. + 3%',
					'des3pD'=>'MP + 228; Resistance to Sleep + 10',
					'des4pD'=>'M. Atk. + 256; Magic Critical damage + 297',
					'des5pD'=>'M. Critical Rate + 3%; Resistance to attributes + 15, Casting Spd. additional + 12%, M. Atk. additional + 15%',
					'des2pA'=>'WIT +3, MEN -1, Casting Spd. + 3%',
					'des3pA'=>'MP + 228; Resistance to Shock + 10',
					'des4pA'=>'MP Recovery + 0.9; mental attack bonus + 15',
					'des5pA'=>'Heal Amount + 108; Resistance to attributes + 15, Casting Spd. additional + 12%, M. Atk. additional + 15%';

					);


?>