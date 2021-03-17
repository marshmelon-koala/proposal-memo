
<?php 
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo "<div class='alert'>Username atau password tidak sesuai.</div>";
        }
    }
?>
<form action="aksi/aksi_tambah.php" method="POST" enctype="multipart/form-data">
            <div class="kotak_form">
                <h3 style="font-size: 25px; padding-left: 20px">New Memo</h3>
                <table style="text-align: justify-all; padding: 20px;" class="table-form" border="0" width="100%" cellpadding="0" cellspacing="0">
                    <div>
                        <tr>
                            <td width="20%"><label for="nama_pengaju" style="font-size: 18px">Applicant Name</label></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input class="form_memo" name="nama_pengaju" id="nama_pengaju" type="text" class="form" required="required" readonly value="<?php echo $_SESSION['nama_lengkap']?>"></td>
                        </tr>
                        <tr>
                            <td><label style="font-size: 18px">Type</label></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <select class="form_memo" name="tipe" class="form">
                                    <option>Memo</option>
                                </select>
                            </td>
                        </tr>
                    </div>
                    <tr>
                        <td><label style="font-size: 18px" for="nomor_memo">Memo Number</label></td>
                    </tr>
                    <tr>
                        <td colspan="3"><input class="form_memo" name="nomor_memo" id="nomor_memo" type="text" placeholder="Enter memo number"></td>
                    </tr> 
                    <tr>
                        <td><label style="font-size: 18px" for="judul_memo">Title</label></td>
                    </tr>
                    <tr>
                        <td colspan="3"><input class="form_memo" name="judul_memo" id="judul_memo" type="text" required="required" placeholder="Enter title"></td>
                    </tr>    
                    <tr>
                        <td><label style="font-size: 18px" >Cluster</label></td>
                    </tr>
                    <tr>
                        <?php if($_SESSION['level'] == "Peer") :?>
                            <td colspan="2">
                            <select class="form_memo" name="cluster" class="form">
                                <option>ALL REGION</option>
                                <option>EB-EJA-GRESIK</option>
                                <option>EB-EJA-MADURA</option>
                                <option>EB-EJA-SURABAYA</option>
                                <option>JB-BOT-DEPOK</option>
                                <option>JB-JAK-JAKARTA PUSAT</option>
                                <option>JB-JAK-JAKARTA SELATAN</option>
                                <option>JB-JAK-JAKARTA TIMUR</option>
                                <option>KS-KAL-EAST KALBAR</option>
                                <option>S-SNA-ACEH</option>
                                <option>S-SSA-KRUI LAMPUNG UTARA</option>
                                <option>S-SSA-METRO LAMPUNG TENGAH</option>
                                <option>S-SSA-OKU</option>
                                <option>S-SSA-TULANG BAWANG</option>
                            </select>
                        </td>
                        <td><input class="form-memo" type="text" name="cluster" hidden></td>
                        <?php else: ?>
                        <td colspan="3"><input class="form_memo" type="text" name="cluster" readonly value="<?php echo $_SESSION['region']; ?>"></td>
                        <?php endif;?> 
                        
                    </tr>
                    <tr>
                        <td valign="top"><label style="font-size: 18px" for="desk_memo">Description</label></td>
                    </tr>
                    <tr>
                        <td valign="top" colspan="2">
                            <textarea class="form_memo" name="desk_memo" id="desk_memo" class="form" cols="50" rows="8" required="required" placeholder="Enter Description..."></textarea>
                        </td>
                    </tr>
                    
                    <tr>
                        <td><label style="font-size: 18px" for="budget_memo">Budget</label></td>
                        <td colspan="3"><input class="form_memo" name="budget_memo" id="budget" type="number" class="form" required="required" placeholder="0"></td>    
                    </tr>
                    <tr>
                        <td><label style="font-size: 18px">Attachment</label></td>
                        <td>
                            <input class="form_memo" type="file" name="gambar" required="required" />
                        </td>
                    </tr>
                </table>
                <div style="margin-top: 20px; margin-bottom: 10px; margin-right: 20px" align="right">
                    <a style="margin-right: 5px; text-align: justify; font-size: 14px" class="cancelButton" href="halaman_peer.php" >Return</a>
                    <input style="margin-left: 10px; font-size: 15px" class="myButton" type="submit" value="Save" name="tombol">
                </div>
            </div>
</form>