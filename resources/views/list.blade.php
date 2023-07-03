@section('header')
@include('layouts.partials.header')
@show

<section class="container">
        <div class="card">
            <br>

            <input type="text" class="takjil-nama" placeholder="Takjil" style="width: 50%; text-align: center;margin-left: 300px;">
            <br>
            <input type="text" class="takjil-rating" placeholder="Rating"  style="width: 50%; text-align: center;margin-left: 300px;">
            <br>
            <button class="tambah" style="background-color: maroon; color: white; width: 10%; margin-left: 561px;border: none;border-radius: 50px;">Tambah</button> <br>
            <input type="text" class="search" placeholder="Cari..." style="width: 30%; text-align: center;margin-left: 430px;"> <br>
            <table style="width: 80%; margin-left: 130px;">
                <thead>
                    <th class="sort-nama" style="padding-left: 20px;">Takjil</th>
                    <th class="sort-rating">Rating</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    <tr class="table-item">
                        <td class="nama" style="padding-left: 20px;">Takjil Ote - Ote Bakwan</td>
                        <td class="rating">9.0</td>
                        <td class="hapus" style="cursor: pointer; color: red;">HAPUS</td>
                    </tr>
                    <tr class="table-item">
                        <td class="nama" style="padding-left: 20px;">Takjil Tempe Mendon</td>
                        <td class="rating">7.5</td>
                        <td class="hapus" style="cursor: pointer; color: red;">HAPUS</td>
                    </tr>
                    <tr class="table-item">
                        <td class="nama" style="padding-left: 20px;">Minuman Es Buah</td>
                        <td class="rating">8.6</td>
                        <td class="hapus" style="cursor: pointer; color: red;">HAPUS</td>
                    </tr>
                </tbody>
            </table>    
            <br>
        </div>

    </section>
    </div>

    <script src="js/script_list.js"></script>
