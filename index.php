
<h3>NEURAL NETWORK</h3>


<form method="post" action="proses.php">
	<input type="text" name="w" id="w" placeholder="masukkan jumlah w">
	<select name="gate">
	    <option value="" disabled="disabled" selected="selected">Pilih jenis gerbang</option>
	    <option value="AND">AND</option>
	    <option value="OR">OR</option>
	    <option value="XOR">XOR</option>
	    <option value="NOR">NOR</option>
	    <option value="NAND">NAND</option>
	</select>
	<input type="submit" name="submit" id="submit" value="submit">
</form>