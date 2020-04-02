<?

include("z_write_cont.php");
include("zcreate_dir_actual_cont.php");

// new directory cont_$to
$actual_dir+=1;

$desc2="<? \$actual_dir={$actual_dir}; ?>";
$archivo = fopen("zcreate_dir_actual_cont.php", "w");
fwrite($archivo,"{$desc2}");
fclose($archivo);

$to=$actual_dir;

// number of new directories to create usually week for week 
//$range=$to+ 7;

// counter to create each directory 
$cont=1;

// file to copy
$from=$write_cont;


$dir_1='_CONT_TFF/cont_';
$dir_2='_CONT_TEC/cont_';
$dir_3='_CONT_WTF/cont_';
$dir_4='_CONT_CURIO/cont_';
$dir_5='_CONT_HEALTH/cont_';
$dir_6='_CONT_KNOWING/cont_';


while($cont<=6){

$to_dir='dir_'.$cont;

$to_path =$$to_dir;
$to_path =$to_path.$to;
$from_path =$$to_dir;
$from_path =$from_path.$from;
// echo "archivos copiados en $to_path <br>";
               mkdir($to_path, 0777); 
                $handle=opendir($from_path); 
                 while (($file = readdir($handle))!==false) {
                       copy($from_path.'/'.$file,$to_path."/".$file);
               
                         echo "archivos copiados en $to_path <br>";

                }

closedir($handle); 

$cont=$cont+1;

echo "<br><br><br>";

}

//}

?>