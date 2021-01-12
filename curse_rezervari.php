<div class="sectiune_rez">
	<ul class="curse_rez">
		<?php
                $xmlDoc=new DOMDocument();
                $xmlDoc->load("xml/curse.xml");
                $element=$xmlDoc->getElementsByTagName('cursa');                               
                for($i=0; $i<($element->length); $i++) {                    
                    $id=$element->item($i)->getElementsByTagName('id');
                    $traseu=$element->item($i)->getElementsByTagName('traseu');
					$locatii=$element->item($i)->getElementsByTagName('locatii');
					$plecare=$element->item($i)->getElementsByTagName('plecare');
					$sosire=$element->item($i)->getElementsByTagName('sosire');
                    $pret=$element->item($i)->getElementsByTagName('pret');
                    if ($traseu->item(0)->nodeType==1) {    
                      $crusa_id=$id->item(0)->childNodes->item(0)->nodeValue;      
                      $cursa_traseu=$traseu->item(0)->childNodes->item(0)->nodeValue;
					  $cursa_locatii=$locatii->item(0)->childNodes->item(0)->nodeValue;
					  $cursa_plecare=$plecare->item(0)->childNodes->item(0)->nodeValue;
					  $cursa_sosire=$sosire->item(0)->childNodes->item(0)->nodeValue;
                      $cursa_pret=$pret->item(0)->childNodes->item(0)->nodeValue;
					?>
					<li>
						<h2><?php echo $cursa_traseu ?></h2>
						<h4>Opriri: <span><?php echo $cursa_locatii ?></span></h4>
						<h4>Plecare: <span><?php echo $cursa_plecare ?></span></h4>
						<h4>Sosire: <span><?php echo $cursa_sosire?></span></h4>
						<h4>Preț: <span><?php echo $cursa_pret ?></span></h4>
						<h4>Pentru rezervări:</h4>
						<button  type="submit" onclick="document.getElementById('box_locuri').style.display='inline';">
							<span>Click aici!</span>
						</button>	
					</li>
					<?php
                    }
                   }
                    ?>
	</ul>
	<div id="box_locuri" class="box_rez" style="display:none" >
		<button style="float:left;" onclick="document.getElementById('box_locuri').style.display='none';">Anulare</button>
		<br><br />
		<div>
            <table class="autocar">
                <tr>
                <?php
                for($i=1;$i<=6;++$i)
                {
					?>
					<td><div class="scaun"><div onclick="selectat(this)" id="<?php echo $i+40;?>" class="loc_autocar"><span><?php echo $i+40?></span></div></div></td>
                <?php
                }
                ?>
                </tr>
				 <tr>
                <?php
                for($i=1;$i<=4;++$i)
                {
					if($i==3)
                    {
                        ?>
                        <td></td>
						<td></td>
                        <?php
                    }
					?>
					<td><div class="scaun"><div onclick="selectat(this)" id="<?php echo $i+36;?>" class="loc_autocar"><span><?php echo $i+36?></span></div></div></td>
                <?php
                }
                ?>
				 </tr>
				 <tr>
                <?php
                for($i=1;$i<=4;++$i)
                {
					if($i==3)
                    {
                        ?>
                        <td></td>
						<td></td>
                        <?php
                    }
					?>
					<td><div class="scaun"><div onclick="selectat(this)" id="<?php echo $i+32;?>" class="loc_autocar"><span><?php echo $i+32?></span></div></div></td>
                <?php
                }
                ?>
                </tr>
                </tr>
				 <tr>
                <?php
                for($i=1;$i<=4;++$i)
                {
					if($i==3)
                    {
                        ?>
                        <td></td>
						<td></td>
                        <?php
                    }
					?>
					<td><div class="scaun"><div onclick="selectat(this)" id="<?php echo $i+28;?>" class="loc_autocar"><span><?php echo $i+28?></span></div></div></td>
                <?php
                }
                ?>
                </tr>
				 <tr>
                <?php
                for($i=1;$i<=4;++$i)
                {
					if($i==3)
                    {
                        ?>
                        <td></td>
						<td></td>
                        <?php
                    }
					?>
					<td><div class="scaun"><div onclick="selectat(this)" id="<?php echo $i+24;?>" class="loc_autocar"><span><?php echo $i+24?></span></div></div></td>
                <?php
                }
                ?>
                </tr>
				 <tr>
                <?php
                for($i=1;$i<=4;++$i)
                {
					if($i==3)
                    {
                        ?>
                        <td></td>
						<td></td>
                        <?php
                    }
					?>
					<td><div class="scaun"><div onclick="selectat(this)" id="<?php echo $i+20;?>" class="loc_autocar"><span><?php echo $i+20?></span></div></div></td>
                <?php
                }
                ?>
                </tr>
				 <tr>
                <?php
                for($i=1;$i<=4;++$i)
                {
					if($i==3)
                    {
                        ?>
                        <td></td>
						<td></td>
                        <?php
                    }
					?>
					<td><div class="scaun"><div onclick="selectat(this)" id="<?php echo $i+16;?>" class="loc_autocar"><span><?php echo $i+16?></span></div></div></td>
                <?php
                }
                ?>
                </tr>
				 <tr>
                <?php
                for($i=1;$i<=4;++$i)
                {
					if($i==3)
                    {
                        ?>
                        <td></td>
						<td></td>
                        <?php
                    }
					?>
					<td><div class="scaun"><div onclick="selectat(this)" id="<?php echo $i+12;?>" class="loc_autocar"><span><?php echo $i+12?></span></div></div></td>
                <?php
                }
                ?>
                </tr>
				 <tr>
                <?php
                for($i=1;$i<=4;++$i)
                {
					if($i==3)
                    {
                        ?>
                        <td></td>
						<td></td>
                        <?php
                    }
					?>
					<td><div class="scaun"><div onclick="selectat(this)" id="<?php echo $i+8;?>" class="loc_autocar"><span><?php echo $i+8?></span></div></div></td>
                <?php
                }
                ?>
                </tr>
				 <tr>
                <?php
                for($i=1;$i<=4;++$i)
                {
					if($i==3)
                    {
                        ?>
                        <td></td>
						<td></td>
                        <?php
                    }
					?>
					<td><div class="scaun"><div onclick="selectat(this)" id="<?php echo $i+4;?>" class="loc_autocar"><span><?php echo $i+4?></span></div></div></td>
                <?php
                }
                ?>
                </tr>
				 <tr>
                <?php
                for($i=1;$i<=4;++$i)
                {
					if($i==3)
                    {
                        ?>
                        <td></td>
						<td></td>
                        <?php
                    }
					?>
					<td><div class="scaun"><div onclick="selectat(this)" id="<?php echo $i;?>" class="loc_autocar"><span><?php echo $i?></span></div></div></td>
                <?php
                }
                ?>
                </tr>
			</table>
			<br />
		</div>
		<br />
		<form name="confirmare_rez" action='api/sendrez.php' onsubmit="return validare_rez()" method='post'>
			<table><td>
			<div class="eroareMsgContact" id="eroareMsg">
				<input type="text" value="Nume" title="Nume" name="nume" onfocus="if(this.value==this.title) this.value='';" onblur="if(this.value=='') this.value=this.title;">
				<br />
				<input type="text" value="Telefon" title="Telefon" name="telefon" onfocus="if(this.value==this.title) this.value='';" onblur="if(this.value=='') this.value=this.title;">
				<br><br />
				<div >
					<input  type="hidden" id="bilete" name="bilete" value="">
                </div>
                <div class="bilete">
                    <label style="color: #333;" >Locuri selectate: </label><a name="locuri" id="locuriSelectate"></a>
                </div>
				<br />
				<button  type="submit" style="margin-right:32px;" onclick="selecteaza()"><span>Finalizează rezervarea</span></button>
			</div>
			</td></table>
		</form>
	</div>
	<br /> <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /> <br /><br /><br />
	<br /> <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /> <br /><br /><br />
	<br /><br /><br /><br /><br /><br />
</div>