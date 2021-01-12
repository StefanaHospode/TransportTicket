<div class="sectiune">
		<ul class="cont">
			<li>
				<h2>Contact</h2>
				<p><b>S.C Trans-Express S.R.L</b></p>
				<p><b>Botoșani - Str. Nicolae Iorga Nr. 4</b></p>
				<hr>
				<p><b>Rezervări de locuri, informații program de transport, relații cu clienții</b></p>
				<p><b>tel/fax:</b> 0231 517509</p>
				<p>0331 401062</p>
				<p>0745 841595</p>
			</li>
			<li class="formular">
				<h2>Contactează-ne</h2>
				<form name="contact" action='api/sendmsg.php' onsubmit="return validare()" method='post'>
					<div class="eroareMsgContact" id="eroareMsg">
						<input type="text" value="Nume" title="Nume" name="nume" onfocus="if(this.value==this.title) this.value='';" onblur="if(this.value=='') this.value=this.title;">
						<br><br />
						<input type="emails" value="Email" title="Email" name="mail" onfocus="if(this.value==this.title) this.value='';" onblur="if(this.value=='') this.value=this.title;">
						<br><br />
						<textarea rows="10" cols="40" name="mesaj" title="mesaj" onfocus="if(this.value==this.title) this.value='';" onblur="if(this.value=='') this.value=this.title;">Mesaj</textarea>
						<br />
						<button  type="submit" style="margin-right:32px;">
							<span>Trimite</span>
						</button>
					</div>
				</form>
			</li>
			<li class="clear">&nbsp;</li>
		</ul>
		<br /> <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /> <br /><br />
		<br /> <br /><br /><br />
</div>