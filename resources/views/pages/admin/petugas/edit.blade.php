<form action="{{ route('petugas.update', $edit->id) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <label for="">Name</label><br>
    <input class="form-control mb-3" type="text" name="name_petugas" value="{{ $edit->name_petugas }}">
    <label for="">Username</label>
    <input class="form-control mb-3" type="text" name="username" value="{{ $edit->name_petugas }}">
    <label for="">Email</label>
    <input class="form-control mb-3" type="text" name="email" value="{{ $edit->name_petugas }}">
    <label for="">Alamat</label>
    <textarea class="form-control mb-3" type="text" name="alamat" value="{{ $edit->name_petugas }}"></textarea>
    <label for="">Jenis Kelamin</label>
    <select name="jeniskelamin" id="jeniskelamin" class="form-control mb-3">
        <option selected>{{ $edit->jeniskelamin }}</option>
        <option value="laki-laki">Laki-Laki</option>
        <option value="perempuan">Perempuan</option>
    </select>
    <label for="">Password</label>
    <input class="form-control mb-3" type="password" name="password" value="{{ $edit->name_petugas }}">
    <label for="">Telp</label>
    <input class="form-control mb-3" type="number" pattern="\(\d\d\d\)-\d\d\d\d\d\d\d\d" name="no_telp"  required value="{{ $edit->no_telp }}" />
    <label for="">Level</label>
    <select name="level" id="level" class="form-control mb-3">
        <option selected>{{ $edit->level }}</option>
        <option value="admin">Admin</option>
        <option value="petugas">Petugas</option>
    </select>
    <a href="{{ route('petugas.index') }}" class="btn btn-secondary mb-3">Cancel</a>
    <button class="btn btn-warning mb-3" type="submit">Update</button>
</form>
