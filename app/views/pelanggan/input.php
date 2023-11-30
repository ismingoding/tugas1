<h2>Input Data Pasien</h2>

<form action="<?php echo URL; ?>/pelanggan/save" method="post">
    <table>
        <tr>
            <td>GOLONGAN</td>
            <td>
                <select name="pel_id_gol">
                    <?php foreach ($data['optgol'] as $opt) { ?>
                        <option value="<?php echo $opt['gol_id']; ?>"><?php echo $opt['gol_nama']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>NO KAMAR</td>
            <td><input type="text" name="pel_no" required></td>
        </tr>
        <tr>
            <td>NAMA PASIEN</td>
            <td><input type="text" name="pel_nama" required></td>
        </tr>
        <tr>
            <td>ALAMAT PASIEN</td>
            <td>
                <textarea name="pel_alamat" cols="30" rows="10"></textarea>
            </td>
        </tr>
        <tr>
            <td>PENYAKIT</td>
            <td><input type="text" name="pel_hp" required></td>
        </tr>
        <tr>
            <td>BPJS</td>
            <td><input type="text" name="pel_ktp" required></td>
        </tr>
        <tr>
            <td>BIAYA</td>
            <td><input type="text" name="pel_seri" required></td>
        </tr>
        <tr>
            <td>STATUS</td>
            <td><input type="text" name="pel_meteran" required></td>
        </tr>
        <tr>
            <td>USER</td>
            <td>
                <select name="pel_id_user">
                    <?php foreach ($data['optuser'] as $opt) { ?>
                        <option value="<?php echo $opt['user_id']; ?>"><?php echo $opt['user_full_name']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>