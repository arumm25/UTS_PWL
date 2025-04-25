<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<!-- Table with stripped rows -->
<table class="table datatable">
    <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama Minuman</th>
            <th scope="col">Harga</th>
            <th scope="col">Stok</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Teh Hitam Premium</td>
            <td>Rp 25.000</td>
            <td>120</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Teh Hijau Jasmine</td>
            <td>Rp 30.000</td>
            <td>85</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Teh Oolong Special</td>
            <td>Rp 40.000</td>
            <td>60</td>
        </tr>
        <tr>
            <th scope="row">4</th>
            <td>Teh Putih Imperial</td>
            <td>Rp 50.000</td>
            <td>40</td>
        </tr>
        <tr>
            <th scope="row">5</th>
            <td>Teh Herbal Chamomile</td>
            <td>Rp 35.000</td>
            <td>70</td>
        </tr>
    </tbody>
</table>
<!-- End Table with stripped rows -->
<?= $this->endSection() ?>
