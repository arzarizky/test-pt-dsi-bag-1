<div class="hasil-input">
    <div class="title">
        <h4>Hasil Input</h4>
    </div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Hp</th>
                <th>Komentar</th>
            </tr>
        </thead>
        <tbody>

            @forelse ($datas as $hasilInput)
                <tr>
                    <td data-column="No">{{ $loop->index + 1 }}</td>
                    <td data-column="Nama">{{ $hasilInput->nama_user }}</td>
                    <td data-column="Jenis">{{ $hasilInput->type_user }}</td>
                    <td data-column="Hp">{{ $hasilInput->no_hp_user }}</td>
                    <td style="white-space: pre-wrap;" data-column="Komentar">{{ $hasilInput->komentar_user }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" style="border: none;">
                        <h5>Data Tidak Ada</h5>
                    </td>
                </tr>
            @endforelse

        </tbody>
    </table>
</div>
