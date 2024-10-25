<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        body {
            font-family: "Times New Roman", Times, serif;
            margin: 6px 20px 5px 20px;
            line-height: 15px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            page-break-inside: avoid;
            /* Mencegah tabel terputus di tengah halaman */
        }

        td,
        th {
            padding: 4px 3px;
        }

        th {
            text-align: left;
        }

        .d-block {
            display: block;
        }

        img.image {
            width: auto;
            height: 80px;
            max-width: 150px;
            max-height: 150px;
        }

        .text-right {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        .p-1 {
            padding: 5px 1px 5px 1px;
        }

        .font-10 {
            font-size: 10pt;
        }

        .font-11 {
            font-size: 11pt;
        }

        .font-12 {
            font-size: 12pt;
        }

        .font-13 {
            font-size: 13pt;
        }

        .border-bottom-header {
            border-bottom: 1px solid;
        }

        .border-all,
        .border-all th,
        .border-all td {
            border: 1px solid;
        }

        /* Mencegah baris tabel terpecah antar halaman */
        tr {
            page-break-inside: avoid;
        }

        /* Memastikan header muncul di setiap halaman */
        thead {
            display: table-header-group;
        }

        /* Menghindari pemecahan halaman sebelum bagian tubuh */
        tbody {
            page-break-before: auto;
        }

        /* Mencegah tabel terputus di tengah halaman */
        table {
            page-break-after: avoid;
        }
    </style>
</head>

<body>
    <table class="border-bottom-header">
        <tr>
            <td width="15%" class="text-center">
                <img class="image" id="image" src="{{ public_path('polinema-bw.png') }}">
            </td>
            <td width="85%">
                <span class="text-center d-block font-11 font-bold mb-1">KEMENTERIAN PENDIDIKAN, KEBUDAYAAN, RISET, DAN
                    TEKNOLOGI</span>
                <span class="text-center d-block font-13 font-bold mb-1">POLITEKNIK NEGERI MALANG</span>
                <span class="text-center d-block font-10">Jl. Soekarno-Hatta No. 9 Malang 65141</span>
                <span class="text-center d-block font-10">Telepon (0341) 404424 Pes. 101-105, 0341-404420, Fax. (0341)
                    404420</span>
                <span class="text-center d-block font-10">Laman: www.polinema.ac.id</span>
            </td>
        </tr>
    </table>
    <h3 class="text-center">LAPORAN DATA PENJUALAN</h3>
    <table class="border-all">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th>Tanggal Penjualan</th>
                <th>Kode Penjualan</th>
                <th>User ID</th>
                <th>Nama Pembeli</th>
                <th>Barang ID</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Harga</th>
            </tr>
        <tbody>
            @php
                $counter = 1;
            @endphp
            @foreach ($penjualan as $penj)
                @php
                    $details = $penj->penjualan_detail;
                @endphp
                @foreach ($details as $detail)
                    <tr>
                        @if ($loop->first)
                            <td rowspan="{{ count($details) }}">{{ $counter++ }}</td>
                            <td rowspan="{{ count($details) }}">{{ $penj->penjualan_tanggal }}</td>
                            <td rowspan="{{ count($details) }}">{{ $penj->penjualan_kode }}</td>
                            <td rowspan="{{ count($details) }}">{{ $penj->user->nama }}</td>
                            <td rowspan="{{ count($details) }}">{{ $penj->pembeli }}</td>
                        @endif
                        <td>{{ $detail->barang_id }}</td>
                        <td>{{ $detail->barang->barang_nama }}</td>
                        <td>{{ $detail->jumlah }}</td>
                        <td>{{ $detail->harga }}</td>
                    </tr>
                @endforeach
            @endforeach
        </tbody>
    </table>
</body>

</html>
