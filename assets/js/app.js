// validasi form-modul :: tambah,edit
$('#form-modul')
    .form({
        inline: true,
        fields: {
            namaModul: {
                identifier: 'nama_modul',
                rules: [{
                    type: 'empty',
                    prompt: 'Mohon isi nama modul'
                }]
            },
            link: {
                identifier: 'link',
                rules: [{
                    type: 'empty',
                    prompt: 'Mohon isi link modul contoh: ?module=namamodul'
                }]
            },
            ikon: {
                identifier: 'ikon',
                rules: [{
                    type: 'empty',
                    prompt: 'Mohon isi nama ikon'
                }]
            }
        }
    });

//validasi form-pegawai :: tambah
$('#form-pegawai-tambah')
    .form({
        inline: true,
        on: 'blur',
        fields: {
            match: {
                identifier: 'ulangipassword',
                rules: [
                    {
                        type: 'match[password]',
                        prompt: 'Masukkan nilai yang sama di kedua input'
                    }
                ]
            },
            minLength: {
                identifier: 'password',
                rules: [
                    {
                        type: 'minLength[7]',
                        prompt: 'Password minimal 7 karakter'
                    }
                ]
            },
            nama: {
                identifier: 'nama',
                rules: [{
                    type: 'empty',
                    prompt: 'isi nama anda'
                }]
            },
            jabatan: {
                identifier: 'jabatan',
                rules: [{
                    type: 'empty',
                    prompt: 'isi jabatan anda'
                }]
            }
            ,
            jenisKelamin: {
                identifier: 'jenis_kelamin',
                rules: [{
                    type: 'empty',
                    prompt: 'Pilih salah satu jenis kelamin'
                }]
            },
            regexUsername: {
                identifier: 'username',
                rules: [
                    {
                        type: 'regExp[/^[a-z0-9_-]{4,16}$/]',
                        prompt: 'Masukkan 4-16 karakter username tanpa spasi'
                    }
                ]
            }
        }
    });

// untuk menampilkan dropdown dari jenis_kelamin
$('.ui.dropdown')
    .dropdown();

//validasi form-login
$('#form-login')
    .form({
        inline: true,
        on: 'blur',
        fields: {
            minLength: {
                identifier: 'password',
                rules: [
                    {
                        type: 'minLength[4]',
                        prompt: 'Password minimal 4 karakter'
                    }
                ]
            },
            regexUsername: {
                identifier: 'username',
                rules: [
                    {
                        type: 'regExp[/^[a-z0-9_-]{4,16}$/]',
                        prompt: 'Masukkan 4-16 karakter username tanpa spasi'
                    }
                ]
            }
        }
    });

//modal on media.php



// $('.ui.modal').modal('attach events', '#btn-logout-fake', 'show');