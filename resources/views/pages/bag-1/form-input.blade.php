<div class="form-input">
    <div class="title">
        <h4>Form Input</h4>
    </div>
    <form action="{{ route('test-bag-1.post') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <label>Nama</label>
            <input type="text" name="nama" id="nama" required placeholder="Mohon Masukan Nama Lengkap">
        </div>
        <div class="form-row">
            <label>Jenis</label>
            <select name="jenis" id="jenis" required>
                <option value="" disabled selected>Mohon Pilih Salah Satu</option>
                <option value="1">Manusia</option>
                <option value="2">Elf</option>
                <option value="3">Tumbuh tumbuhan</option>
            </select>
        </div>
        <div class="form-row">
            <label>HP</label>
            <input type="text" name="hp" id="hp" placeholder="Tidak Wajib Masukan No HP" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
        </div>
        <div class="form-row" style="align-items: flex-start">
            <label>Komentar</label>
            <textarea required name="komentar" id="komentar" cols="30" rows="10" placeholder="Mohon Masukan Kalimat Yang Sopan"></textarea>
        </div>
        <div class="form-row">
            <label for="button"></label>
            <button class="btn">
                <i class="fas fa-save"></i>
                <span>Save</span>
            </button>
        </div>
    </form>
</div>
