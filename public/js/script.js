$(function() {

    $('.tombolTambahData').on('click', function(){
        $('#formModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');


    });


    $('.tampilModalUbah').on('click', function(){
        $('#formModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        
        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/phpmvc/public/mahasiswa/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('nama').val(data.nama);
            }
        });

    });
        
});

$(function() {

    $('.tombolTambahData').on('click', function(){
        $('#formModalLabel3').html('Tambah Data Kelas');
        $('.modal3-footer button[type=submit]').html('Tambah Data');


    });


    $('.tampilModalUbah').on('click', function(){
        $('#formModalLabel3').html('Ubah Data Kelas');
        $('.modal3-footer button[type=submit]').html('Ubah Data');
        
        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/phpmvc/public/mahasiswa/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('nama').val(data.nama);
            }
        });

    });
        
});

$(function() {

    $('.tombolTambahData').on('click', function(){
        $('#formModalLabel2').html('Tambah Data Kelas');
        $('.modal2-footer button[type=submit]').html('Tambah Data');


    });


    $('.tampilModalUbah').on('click', function(){
        $('#formModalLabel2').html('Ubah Data Kelas');
        $('.modal2-footer button[type=submit]').html('Ubah Data');
        
        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/phpmvc/public/mahasiswa/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('nama').val(data.nama);
            }
        });

    });
        
});