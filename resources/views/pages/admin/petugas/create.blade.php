<form action="{{ route('petugas.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="">Nama</label><br>
    <input class="form-control mb-3" type="text" name="name_petugas">
    <label for="">Username</label>
    <input class="form-control mb-3" type="text" name="username">
    <label for="">Email</label>
    <input class="form-control mb-3" type="text" name="email">
    <label for="">Alamat</label>
    <textarea class="form-control mb-3" type="text" name="alamat"></textarea>
    <label for="">Jenis Kelamin</label>
    <select name="jeniskelamin" id="jenis" class="form-control mb-3">
        <option value="jenis-kelamin" selected>Pilih Jenis Kelamin</option>
        <option value="laki-laki">Laki-Laki</option>
        <option value="perempuan">Perempuan</option>
    </select>
    <label for="">Password</label>
    <input class="form-control mb-3" type="password" name="password">
    <label for="">Telp</label>
    <input class="form-control mb-3" type="number" pattern="\(\d\d\d\)-\d\d\d\d\d\d\d\d" name="no_telp"  required />
    <label for="">Level</label>
    <select name="level" id="level" class="form-control mb-3">
        <option value="petugas" selected>Pilih Level (Default Petugas)</option>
        <option value="admin">Admin</option>
        <option value="petugas">Petugas</option>
    </select>
    <button class="btn btn-primary mb-3" type="submit">submit</button>
</form>
