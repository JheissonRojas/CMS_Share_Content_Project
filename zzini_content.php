<?
//include("zini.php");
//include("zinic.php");
include("zwrite_file.php");
include("z_write_cont.php");
include("z_write_cont2.php");

// el cont_base es para incrementar los cont deacuerdo a los dias 

$nday=date(z); // actual day in year 

//historial x contenido y fecha 
// para escribir los contenidos  el cronograma de los ya escritos y los por escribir

/*
mes=octubre
x = ya escrito en archivo
--  = contenido listo sobre escrito listo para ser publicado ese dia
-  = por escribir en archivo

	tff	tec	wtf	cur	hea	kno
x1	x	x3	x	x3	x     x             	
-2	x2	x	x2	x	x2   x                  
3	x	x	x	x	x     x              
4	x	x	x	x	x     x              
5	x	x	x	x	x     x              
6	x	x	x	x	x     x              
7	x	x	x	x	x     x              
8	x	x	x	x	x     x              
9	x	x	x	x	x     x              
10	x	x	x	x	x     x              
11	x	x	x	x	x     x              
12	x	x	x	x	x     x              
13	x	x	x	x	x     x
14	x	x	x	x	x     x
15	x	x	x	x	x     x
	tff	tec	wtf	cur	hea	kno
16	x	x	x	x	x     x
17	x	x	x	x	x     x              
18	x	x	x	x	x     x              
19	x	x	x	x	x     x              
20	x	x	x	x	x     x              
21	x	x	x	x	x     x              
22	x	x	x	x	x     x              
23	x	x	x	x	x     x              
24	x	x	x	x	x     x              
25	x	x	x	x	x     x              
26	x	x	x	x	x     x              
27	x	x	x	x	x     x              
28	x	x	x	x	x     x              
29	x	x	x	x	x     x              
30	x	x	x	x	x    x       
31	x	x	x	x	x     x        
       



      hour1	     hour2	      hour3	        hour4
TFF	  5	         11	         19	           21
TEC	  9	         16	         20	           22
WTF	  10	         17	         21	           23
CUR	  10	         18	         22	           23
HEA	  11	         16	         20	           22	
KNO	  11	         17	         22	           23
*/





$lunes=1;        /* se modifico  tal fecha  */
$martes=0;
$miercoles=0;
$jueves=0;
$viernes=0;
$sabado=0;
$domingo=0;

$write_cont2+=1;

$desc2="<? \$write_cont2={$write_cont2}; ?>";
$archivo = fopen("z_write_cont2.php", "w");
fwrite($archivo,"{$desc2}");
fclose($archivo);



// $$$$$$$$$$$     LUNES    $$$$$$$$$$$$$
if($lunes==1)
{


$cont_tff='cont_'.$write_cont2;
//$cont_tff='cont_'.$write_cont2;
$cont_tec='cont_'.$write_cont2;
$cont_wtf='cont_'.$write_cont2;
$cont_cur='cont_'.$write_cont2;
$cont_hea='cont_'.$write_cont2;
$cont_kno='cont_'.$write_cont2;

$tff=0;          /* se modifico tal dia */
$tec=1;
$wtf=0;
$cur=1;
$hea=0;
$kno=0;

// $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
// $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
// $$$$$$$$$$$$$$$$$                     TFF
// $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
// $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

if($tff==1)
{

$tit_1='Look This Workout Motivation and Stay Hungry !!';
$desc_1='stay motivated to get your goals is very important 
stay focus, deep breathing and go ahead';
$vid_1='<iframe width="740" height="590" src="https://www.youtube.com/embed/2JBbyNh7M2g" frameborder="0" allowfullscreen></iframe>';
$des_post_1="Enjoy itt !!";

$tit_2='Crazy Cardio Workout!!';
$desc_2='Do you wanna burn fat? 
How many rounds of this crazy cardio work out can you do
remember that any free time is perfect to make excercise
Goo!!';
$vid_2='<iframe width="740" height="590" src="https://www.youtube.com/embed/QCqWeAL2xb4" frameborder="0" allowfullscreen></iframe>';
$des_post_2='Good Luck!!  ; )';

$tit_3='Good Home Abs Axercises ';
$desc_3='Follow this good home abs excercises to get extreme six pack abs ';
$vid_3='<iframe width="740" height="590" src="https://www.youtube.com/embed/cfY_4m3RVRc" frameborder="0" allowfullscreen></iframe>';
$des_post_3='Good Luck!!';

$tit_4="";
$desc_4="";
$vid_4="";
$des_post_4="";

$tit_5="";
$desc_5="";
$vid_5="";
$des_post_5="";

$directory='_CONT_TFF/'.$cont_tff.'/';
//funcion del zwrite para escribir en la funcion write q recibe el directorio y el cont al q escribir
write($directory, $cont_tff);

// to create the achive for change actual article and change the actual image to last index
$directory2='_CONT_TFF/'.$cont_tff.'/Num_article.php';
 $archivo = fopen($directory2, "w");
 fwrite($archivo,'0');
 fclose($archivo);

}

// $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
// $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
// $$$$$$$$$$$$$$$$$$$$$$$                 TEC
// $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
// $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

if($tec==1)
{

$tit_1='Look The 2015 MacBook Pro 13 Characteristics !!';
$desc_1='What is new in the MacBook Pro 13  2015 check this video';
$vid_1='<iframe width="744" height="590" src="https://www.youtube.com/embed/MA3dJQU4J2M" frameborder="0" allowfullscreen></iframe>';
$des_post_1="Great !!";

$tit_2='Doppler Here Offers Augmented customizable Hearing';
$desc_2='The independent ear buds give you complete audio control over your environment. If you want to reduce the volume of some annoying sound you can do it without turning everything down';
$vid_2='<iframe width="744" height="590" src="https://www.youtube.com/embed/gNnqWPEhbEM" frameborder="0" allowfullscreen></iframe>';
$des_post_2='Great !!';

$tit_3='Look The New Walking bicycle';
$desc_3='This new bicycle technology could change the way we go working or get constantly active  ';
$vid_3='<iframe width="744" height="590" src="https://www.youtube.com/embed/SHClWoDPiKM" frameborder="0" allowfullscreen></iframe>';
$des_post_3='Definitely a diferent point of view of everyday things, Good!';


$tit_4="";
$desc_4="";
$vid_4="";
$des_post_4="";

$tit_5="";
$desc_5="";
$vid_5="";
$des_post_5="";

$directory='_CONT_TEC/'.$cont_tec.'/';
write($directory, $cont_tec);

// to create the achive for change actual article and change the actual image to last index
$directory2='_CONT_TEC/'.$cont_tec.'/Num_article.php';
 $archivo = fopen($directory2, "w");
 fwrite($archivo,'0');
 fclose($archivo);

}

// $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
// $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
// $$$$$$$$$$$$$$$$$$$$$$$$$$$$$               WTF
// $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
// $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

if($wtf==1)
{

$tit_1='Do You Remember The Ice Bucket Chalenge';
$desc_1='Just Enjoy it';
$vid_1='<iframe width="740" height="590" src="https://www.youtube.com/embed/8ymwfTyM-H4" frameborder="0" allowfullscreen></iframe>';
$des_post_1="They make us laugh xD  Good stupid people!!";

$tit_2='Bike Fails';
$desc_2='You Know, no pain no gain';
$vid_2='<iframe width="740" height="590" src="https://www.youtube.com/embed/wuOBhxoIl2I" frameborder="0" allowfullscreen></iframe>';
$des_post_2='Keep trying xD ';

$tit_3='Bloopers!!';
$desc_3='Just relax ';
$vid_3='<iframe width="740" height="590" src="https://www.youtube.com/embed/ZP4avY9R1l8" frameborder="0" allowfullscreen></iframe>';
$des_post_3='That hurts I know ;) ';


$tit_4="";
$desc_4="";
$vid_4="";
$des_post_4="";

$tit_5="";
$desc_5="";
$vid_5="";
$des_post_5="";

$directory='_CONT_WTF/'.$cont_wtf.'/';
write($directory, $cont_wtf);

// to create the achive for change actual article and change the actual image to last index
$directory2='_CONT_WTF/'.$cont_wtf.'/Num_article.php';
 $archivo = fopen($directory2, "w");
 fwrite($archivo,'0');
 fclose($archivo);

}


// $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
// $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
// $$$$$$$$$$$$$$$$$$$$$$$               CURIO
// $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
// $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

if($cur==1)
{

$tit_1='Beautiful And Strange FISHES of Create Aquarium !!';
$desc_1='Look at';
$vid_1='<iframe width="740" height="590" src="https://www.youtube.com/embed/Fcg28QUgrBg" frameborder="0" allowfullscreen></iframe>';
$des_post_1='Great the color fishes it is amazing what the nature can bring us!';

$tit_2='Just  Best Friends!!';
$desc_2='When you get a friend nothing else import just have fun
 these is a Great friendship  ';
$vid_2='<iframe width="744" height="590" src="https://www.youtube.com/embed/zzqbHZNfW_c" frameborder="0" allowfullscreen></iframe>';
$des_post_2='Great!!';

$tit_3='Like a Mother !!';
$desc_3='Look how this lion saves a baby calf from another lion attack, these show us how the mother sense is presente in the animal life  ';
$vid_3='<iframe width="744" height="590" src="https://www.youtube.com/embed/J_nTLtrsLeg" frameborder="0" allowfullscreen></iframe>';
$des_post_3='Great!!';


$tit_4="";
$desc_4="";
$vid_4="";
$des_post_4="";

$tit_5="";
$desc_5="";
$vid_5="";
$des_post_5="";

$directory='_CONT_CURIO/'.$cont_cur.'/';
write($directory, $cont_cur);


// to create the achive for change actual article and change the actual image to last index
$directory2='_CONT_CURIO/'.$cont_cur.'/Num_article.php';
 $archivo = fopen($directory2, "w");
 fwrite($archivo,'0');
 fclose($archivo);

}

// $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
// $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
// $$$$$$$$$$$$$$$$$$$$$$$$$$$             HEALTH
// $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
// $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$


if($hea==1)
{

$tit_1='Looookk attt !!';
$desc_1='Enjoy the party Seahawks  & Patriots';
$vid_1='<iframe width="740" height="490" src="https://www.youtube.com/embed/rZIodc2dWY8" frameborder="0" allowfullscreen></iframe>';
$des_post_1="Enjoy itt !!";

$tit_2='Looookk attt !!';
$desc_2='Look this Steve Cook Trainer Edition - Olympia Prep Legs.
 Remenber follow acording to your weight and with your own tempo dont rush go slowly ';
$vid_2='<iframe width="740" height="590" src="https://www.youtube.com/embed/UkuskYgpabs" frameborder="0" allowfullscreen></iframe>';
$des_post_2='Good Luck!!';

$tit_3='Looookk attt !!';
$desc_3='Look this Steve Cook Trainer Edition - Olympia Prep Legs.
 Remenber follow acording to your weight and with your own tempo dont rush, go slowly ';
$vid_3='<iframe width="740" height="590" src="https://www.youtube.com/embed/UkuskYgpabs" frameborder="0" allowfullscreen></iframe>';
$des_post_3='Good Luck!!';


$tit_4="";
$desc_4="";
$vid_4="";
$des_post_4="";

$tit_5="";
$desc_5="";
$vid_5="";
$des_post_5="";

$directory='_CONT_HEALTH/'.$cont_hea.'/';
write($directory, $cont_hea);

// to create the achive for change actual article and change the actual image to last index
$directory2='_CONT_HEALTH/'.$cont_hea.'/Num_article.php';
 $archivo = fopen($directory2, "w");
 fwrite($archivo,'0');
 fclose($archivo);

}


// $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
// $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
// $$$$$$$$$$$$$$$$$$$$$$$$$$$        KNOW
// $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
// $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$


if($kno==1)
{

$tit_1='Looookk attt !!';
$desc_1='Enjoy the party Seahawks  & Patriots';
$vid_1='<iframe width="740" height="490" src="https://www.youtube.com/embed/rZIodc2dWY8" frameborder="0" allowfullscreen></iframe>';
$des_post_1="Enjoy itt !!";

$tit_2='Looookk attt !!';
$desc_2='Look this Steve Cook Trainer Edition - Olympia Prep Legs.
 Remenber follow acording to your weight and with your own tempo dont rush go slowly ';
$vid_2='<iframe width="740" height="590" src="https://www.youtube.com/embed/UkuskYgpabs" frameborder="0" allowfullscreen></iframe>';
$des_post_2='Good Luck!!';

$tit_3='Looookk attt !!';
$desc_3='Look this Steve Cook Trainer Edition - Olympia Prep Legs.
 Remenber follow acording to your weight and with your own tempo dont rush, go slowly ';
$vid_3='<iframe width="740" height="590" src="https://www.youtube.com/embed/UkuskYgpabs" frameborder="0" allowfullscreen></iframe>';
$des_post_3='Good Luck!!';


$tit_4="";
$desc_4="";
$vid_4="";
$des_post_4="";

$tit_5="";
$desc_5="";
$vid_5="";
$des_post_5="";

$directory='_CONT_KNOWING/'.$cont_kno.'/';
write($directory, $cont_kno);

// to create the achive for change actual article and change the actual image to last index
$directory2='_CONT_KNOWING/'.$cont_kno.'/Num_article.php';
 $archivo = fopen($directory2, "w");
 fwrite($archivo,'0');
 fclose($archivo);


}

}



// $$$$$$$$$$$     MARTES    $$$$$$$$$$$$$

if($martes==1)
{


$n=$base+1;
$cont_tff='cont_'.$n;
$cont_tec='cont_'.$n;
$cont_wtf='cont_'.$n;
$cont_cur='cont_'.$n;
$cont_sto='cont_'.$n;
$cont_hea='cont_'.$n;
$cont_kno='cont_'.$n;

}



// $$$$$$$$$$$     MIERCOLES     $$$$$$$$$$$$$

if($miercoles==1)
{




$n=$base+2;
$cont_tff='cont_'.$n;
$cont_tec='cont_'.$n;
$cont_wtf='cont_'.$n;
$cont_cur='cont_'.$n;
$cont_sto='cont_'.$n;
$cont_hea='cont_'.$n;
$cont_kno='cont_'.$n;


}


// $$$$$$$$$$$     JUEVES    $$$$$$$$$$$$$

if($jueves==1)
{

$n=$base+3;
$cont_tff='cont_'.$n;
$cont_tec='cont_'.$n;
$cont_wtf='cont_'.$n;
$cont_cur='cont_'.$n;
$cont_sto='cont_'.$n;
$cont_hea='cont_'.$n;
$cont_kno='cont_'.$n;




}


// $$$$$$$$$$$     VIERNES     $$$$$$$$$$$$$

if($viernes==1)
{

$n=$base+4;
$cont_tff='cont_'.$n;
$cont_tec='cont_'.$n;
$cont_wtf='cont_'.$n;
$cont_cur='cont_'.$n;
$cont_sto='cont_'.$n;
$cont_hea='cont_'.$n;
$cont_kno='cont_'.$n;


}


// $$$$$$$$$$$     SABADO    $$$$$$$$$$$$$

if($sabado==1)
{


$n=$base+5;
$cont_tff='cont_'.$n;
$cont_tec='cont_'.$n;
$cont_wtf='cont_'.$n;
$cont_cur='cont_'.$n;
$cont_sto='cont_'.$n;
$cont_hea='cont_'.$n;
$cont_kno='cont_'.$n;


}



// $$$$$$$$$$$     DOMINGO    $$$$$$$$$$$$$


if($domingo==1)
{


$n=$base+6;
$cont_tff='cont_'.$n;
$cont_tec='cont_'.$n;
$cont_wtf='cont_'.$n;
$cont_cur='cont_'.$n;
$cont_sto='cont_'.$n;
$cont_hea='cont_'.$n;
$cont_kno='cont_'.$n;


}




?>