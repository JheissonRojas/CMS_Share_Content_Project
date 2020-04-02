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
mes=Junio
x = ya escrito en archivo
/  = escrito listo para ser publicado 
-  = por escribir en archivo

	tff	tec	wtf	cur	hea	kno
/1	x	x3	x	x3	x     x             	
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
x30	x2	x	x2	x	x2   x       
31	x	x	x	x	x     x        




	hour1	hour2	hour3	hour4
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

$tff=1;          /* se modifico tal dia */
$tec=0;
$wtf=1;
$cur=0;
$hea=1;
$kno=0;

// $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
// $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
// $$$$$$$$$$$$$$$$$                     TFF
// $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
// $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

if($tff==1)
{

$tit_1='Crazy 10 minute cardio workout !!';
$desc_1='Start burning fat with these cazy cardio workout yeah yeah yeah! donde stop!! ';
$vid_1='<iframe width="740" height="590" src="https://www.youtube.com/embed/sKIywSswzG0" frameborder="0" allowfullscreen></iframe>';
$des_post_1="Enjoy itt !!";

$tit_2='Bodyweight Exercises ';
$desc_2='Today is cardio workout day and  strength day and a  strength day 
like every day,  good luck guys';
$vid_2='<<iframe width="740" height="590" src="https://www.youtube.com/embed/9iwl0TGfmDg" frameborder="0" allowfullscreen></iframe>';
$des_post_2='keep strive!!  ; )';

$tit_3='Workout workout workout !!';
$desc_3='Thi time we show you a 30 minute beginer tone workout, is that so easy enjoy it ! ';
$vid_3='<iframe width="740" height="540" src="https://www.youtube.com/embed/efDPdSK-2zk" frameborder="0" allowfullscreen></iframe>';
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

$tit_1='Look The 2015 MacBook Pro 13'' Characteristics !!';
$desc_1='If you don't now yet what is new in the MacBook Pro 13''  2015 check this video';
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

$tit_1='Look How is go down backward';
$desc_1='He was the only person brave enough to go down backwards and the only person stupid enough to not realize you'd smack your head on the incline - the look on my face is priceless.
tha's right!!';
$vid_1='<iframe width="740" height="590" src="https://www.youtube.com/embed/S_sc-D_ye1I" frameborder="0" allowfullscreen></iframe>';
$des_post_1="don't try it!!";


$tit_2='Insects Fight!!';
$desc_2='The survival law is always present. Which do you think have won?, you would  end up surprised ';
$vid_2='<iframe width="744" height="590" src="https://www.youtube.com/embed/o81ADGZvm4U" frameborder="0" allowfullscreen></iframe>';
$des_post_2='Good Fight, but it wasn't enought !!';



$tit_3='Car crash compilation';
$desc_3='Look this alive Car crash compilation for irresponsible, distracted or foolish people 
please drive responsibly then we look in the next video :D ';
$vid_3='<iframe width="740" height="590" src="https://www.youtube.com/embed/bDR4FhWlj4s" frameborder="0" allowfullscreen></iframe>';
$des_post_3='drive carefully  ;) ';


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
$des_post_1=Great the color fishes it's amazing what the nature can bring us  !!";

$tit_2='Just  Best Friends !!';
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

$tit_1='what about this fantastic fruit !!';
$desc_1='watermelon is love it for to much people, and for those who don't like it here are some good reasons, it have a lot of benefits, give us some esential vitamins and help us  fight some illness and rest, check it out  ';
$vid_1='<iframe width="744" height="590" src="https://www.youtube.com/embed/NUCddEssqnM" frameborder="0" allowfullscreen></iframe>';
$des_post_1="Eat it !!";

$tit_2='Checkt it out this tasty mix vegtables!!';
$desc_2='Here a simple way to stay healthy, a good recipe easy , fast and you can add other ingredient you want like integral rice, cheese, noodles, etc. There are a lot of opcion there is no excuses, what a great food! ';
$vid_2='<<iframe width="744" height="590" src="https://www.youtube.com/embed/VCCRLOBjgxE" frameborder="0" allowfullscreen></iframe>';
$des_post_2='Enjoy itt !!!';

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