
<?


//include("zini.php");

$var_menu=0;
?>

<nav class="art-nav clearfix" >
			<ul class="art-hmenu">
				<!--<li><a href="index.php?link=? echo '/_CONT_TFF/cont_first.php#nave';?>&linkss=? echo '/_CONT_TFF/_store_fitness2.php';?> " class="active">TOTAL FITNESS</a>-->
				<!--<li><a href="index.php#nave?link=? echo '_CONT_TFF/cont_first.php#nave';?>" ? echo $menu_fitness ?> >TOTAL FITNESS</a>-->
				<li>
				
				<a href="index.php?link=<? echo '_CONT_TFF/'.$N_cont_tff.'/cont_first.php#nave';?> " <? echo $menu_tff ?> >TOTAL FITNESS</a>
					<ul>
					<!--
					<li><a href="index.php?link=? echo '_CONT_TFF_WOMEN/'.$N_cont.'/cont_first.php#nave';?> " ? echo $menu_tff_women ?> >women</a></li>
					<li><a href="index.php?link=? echo '_CONT_TFF_MEN/'.$N_cont.'/cont_first.php#nave';?>" ? echo $menu_tff_men ?> >men </a></li>
					-->
					<li><a href="motivation.php?link=<? echo '_CONT_TFF_MOTIVATION/'.$N_cont_mot.'/cont_first.php#nave';?>" <? echo $menu_tff_motivation ?>>Motivation</a></li>
					</ul>
				</li>
				<li>
				
				<a href="technology.php?link=<? echo '_CONT_TEC/'.$N_cont_tec.'/cont_first.php#nave';?>" <? echo $menu_tec ?> >TECHNOLOGY</a>
				
				</li>
				<li>
				

				<a href="wtf.php?link=<? echo '_CONT_WTF/'.$N_cont_wtf.'/cont_first.php#nave';?>" <? echo $menu_wtf ?>>WTF # FUN</a>
				
				</li>
				<li>
				

				<a href="curious.php?link=<? echo '_CONT_CURIO/'.$N_cont_cur.'/cont_first.php#nave';?>" <? echo $menu_curious ?>>CURIOUS</a>

				</li>
				<li><a href="store.php?link=<? echo '_CONT_STORE/_store_begin.php#nave';?>" <? echo $menu_store ?>>STORE</a>
					<ul>
					<!-- $link = '<a href="resultado.php?cod='.$fila['padres'].'&otra='.$otra['hijos'].'" class="estilo6">;
						print $link;
						<a href="resultado.php?cod=?php echo $fila["padres"];?>&hijo=?php echo $otra["hijos"];?>class="estilo6">
						-->
					<!--?
						$link="_CONT_STORE/_store_fitness.php#nave";
						$linkss="_CONT_STORE/_store_fitness2.php";
						/*$enlace='<a href="store.php?link='.$link['_CONT_STORE/_store_fitness.php#nave'].'&linkss='.$linkss['_CONT_STORE/_store_fitness2.php'].'">';*/
						/*$enlace='<a href="store.php?link=\$link&linkss=\$linkss">';*/
					? -->		
					<!--<li><a href="store.php?link=?php echo $variables['link','linkss'];?>" > Fitness Nutrition</a></li>-->
					
					<!--<li>?php print $enlace; ?> Fitness Nutrition</a></li>-->
					<!--<li><a href="store.php?link=_CONT_STORE/_store_fitness.php#nave&?linkss=_CONT_STORE/_store_fitness2.php">Fitness Nutrition</a></li>-->
					
					<!--<li><a href="store.php?link=? echo '_CONT_STORE/_store_fitness.php';?>&linkss=? echo '_CONT_STORE/_store_fitness2.php';?> ">Fitness Nutrition</a></li>-->
					<li><a href="store.php?link=<? echo '_CONT_STORE/_store_training.php#nave';?>" <? echo $menu_store ?> >Training</a></li>
					<li><a href="store.php?link=<? echo '_CONT_STORE/_store_nutrition.php#nave';?>" <? echo $menu_store ?> >Nutrition</a></li>
					<li><a href="store.php?link=<? echo '_CONT_STORE/_store_gatgets.php#nave';?>" <? echo $menu_store ?> >Gatgets</a></li>
					<!--<li><a href="store.php?link=_CONT_STORE/_store_curiosities.php#nave" ? echo $menu_store ?> >Curiosities</a></li>-->
					<li><a href="store.php?link=_CONT_STORE/_store_office.php#nave" <? echo $menu_store ?> >Office</a></li>
					<li><a href="store.php?link=_CONT_STORE/_store_cars.php#nave" <? echo $menu_store ?> >Cars</a></li>
					<li><a href="store.php?link=_CONT_STORE/_store_girls.php#nave" <? echo $menu_store ?> >Girls</a></li>
					<li><a href="store.php?link=_CONT_STORE/_store_boys.php#nave" <? echo $menu_store ?> >Boys</a></li>
					<li><a href="store.php?link=_CONT_STORE/_store_childrens.php#nave" <? echo $menu_store ?> >Babies</a></li>
					<li><a href="store.php?link=_CONT_STORE/_store_pets.php#nave#nave" <? echo $menu_store ?>>Pets</a></li>
					<!--<li><a href="store.php?link=_CONT_STORE/_store_gifts.php#nave" ? echo $menu_store ?> >Gifts</a></li>-->
					<li><a href="store.php?link=_CONT_STORE/_store_books.php#nave#nave" <? echo $menu_store ?>>Best Sellers</a></li>
					
					

					</ul>
				</li>
				
				<li>
				

				<a href="health-care.php?link=<? echo '_CONT_HEALTH/'.$N_cont_hea.'/cont_first.php#nave';?>" <? echo $menu_health ?> >Health &amp; Care</a>

				</li>
				<li>
				
				<a href="knowing.php?link=<? echo '_CONT_KNOWING/'.$N_cont_kno.'/cont_first.php#nave';?>" <? echo $menu_knowing ?> >Knowing</a>

					<!--
					<ul>
					<li><a href="knowing/woman.php">Woman</a></li>
					<li><a href="knowing/man.php">Man</a></li>
					</ul>
					-->
				</li>
			</ul> 
		</nav>